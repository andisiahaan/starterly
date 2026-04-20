<?php

namespace App\Providers;

use App\Events\News\NewsPublished;

use App\Events\Ticket\TicketClosed;
use App\Events\Ticket\TicketCreated;
use App\Events\User\UserRegistered;
use App\Listeners\News\BroadcastNewsToUsers;

use App\Listeners\Ticket\NotifyAdminsTicketCreated;
use App\Listeners\Ticket\SendTicketClosedNotification;
use App\Listeners\Ticket\SendTicketCreatedNotification;
use App\Listeners\User\NotifyAdminsUserRegistered;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     * 
     * Explicit mappings for auditability - no auto-discovery.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [


        // User Events
        UserRegistered::class => [
            NotifyAdminsUserRegistered::class,      // queued
        ],

        // Ticket Events
        TicketCreated::class => [
            SendTicketCreatedNotification::class,   // queued
            NotifyAdminsTicketCreated::class,       // queued
        ],
        TicketClosed::class => [
            SendTicketClosedNotification::class,    // queued
        ],

        // News Events
        NewsPublished::class => [
            BroadcastNewsToUsers::class,            // queued
        ],
    ];

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false; // Explicit mappings only
    }
}
