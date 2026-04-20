<?php

namespace App\Models;

use App\Traits\HasNotificationPreferences;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;
use NotificationChannels\WebPush\HasPushSubscriptions;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles, LogsActivity, HasApiTokens, HasPushSubscriptions, HasNotificationPreferences, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'username',
        'referral_code',
        'referrer_id',
        'email',
        'password',
        'phone',
        'preferences',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'two_factor_confirmed_at',
        'banned_at',
        'ban_reason',
        'banned_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'preferences' => 'array',
            'two_factor_confirmed_at' => 'datetime',
            'two_factor_secret' => 'encrypted',
            'two_factor_recovery_codes' => 'encrypted:array',
            'banned_at' => 'datetime',
        ];
    }

    // ==========================================
    // Referral System (Tracking Only)
    // ==========================================

    /**
     * Get the user who referred this user.
     */
    public function referrer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'referrer_id');
    }

    /**
     * Get users referred by this user.
     */
    public function referrals(): HasMany
    {
        return $this->hasMany(User::class, 'referrer_id');
    }

    /**
     * Get the user's referral URL.
     */
    public function getReferralUrlAttribute(): string
    {
        return route('referral.redirect', $this->referral_code);
    }

    /**
     * Configure activity logging options.
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'email'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->setDescriptionForEvent(fn(string $eventName) => "User {$eventName}");
    }

    /**
     * Check if user has 2FA enabled.
     */
    public function hasTwoFactorEnabled(): bool
    {
        return !is_null($this->two_factor_confirmed_at);
    }

    /**
     * Get the user's pending email changes.
     */
    public function pendingEmailChanges(): HasMany
    {
        return $this->hasMany(PendingEmailChange::class);
    }

    /**
     * Get the user's latest pending email change.
     */
    public function latestPendingEmailChange()
    {
        return $this->pendingEmailChanges()
            ->where('expires_at', '>', now())
            ->latest()
            ->first();
    }

    // ==========================================
    // Ban/Suspend System
    // ==========================================

    /**
     * Get the admin who banned this user.
     */
    public function bannedByAdmin(): BelongsTo
    {
        return $this->belongsTo(User::class, 'banned_by');
    }

    /**
     * Check if user is banned.
     */
    public function isBanned(): bool
    {
        return !is_null($this->banned_at);
    }

    /**
     * Ban the user.
     */
    public function ban(?string $reason = null, ?int $bannedBy = null): bool
    {
        return $this->update([
            'banned_at' => now(),
            'ban_reason' => $reason,
            'banned_by' => $bannedBy ?? auth()->id(),
        ]);
    }

    /**
     * Unban the user.
     */
    public function unban(): bool
    {
        return $this->update([
            'banned_at' => null,
            'ban_reason' => null,
            'banned_by' => null,
        ]);
    }
    
    public function isAdmin(): bool
    {
        return $this->hasRole('admin');
    }
    
    public function isSuperAdmin(): bool
    {
        return $this->hasRole('superadmin');
    }
    
    public function isUser(): bool
    {
        return $this->hasRole('user') || $this->roles()->count() === 0;
    }
    
    public function isDemo(): bool
    {
        return $this->hasRole('demo');
    }
}
