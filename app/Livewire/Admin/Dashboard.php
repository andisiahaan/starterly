<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Carbon\Carbon;

class Dashboard extends Component
{
    public string $period = '30'; // days

    /**
     * Get stats cards data.
     */
    public function getStats(): array
    {
        $startDate = Carbon::now()->subDays((int) $this->period)->startOfDay();

        return [
            'total_users' => User::count(),
            'new_users' => User::where('created_at', '>=', $startDate)->count(),
        ];
    }

    /**
     * Get user registration chart data.
     */
    public function getUserChartData(): array
    {
        $startDate = Carbon::now()->subDays((int) $this->period - 1)->startOfDay();
        
        $users = User::where('created_at', '>=', $startDate)
            ->select(
                DB::raw('DATE(created_at) as date'),
                DB::raw('COUNT(*) as count')
            )
            ->groupBy('date')
            ->orderBy('date')
            ->get()
            ->keyBy('date');

        $labels = [];
        $data = [];

        for ($i = 0; $i < (int) $this->period; $i++) {
            $date = $startDate->copy()->addDays($i);
            $dateKey = $date->format('Y-m-d');
            $labels[] = $date->format('M d');
            $data[] = (int) ($users[$dateKey]->count ?? 0);
        }

        return ['labels' => $labels, 'data' => $data];
    }

    /**
     * Get recent users.
     */
    public function getRecentUsers()
    {
        return User::latest()
            ->take(5)
            ->get();
    }

    public function render()
    {
        return view('livewire.admin.dashboard', [
            'stats' => $this->getStats(),
            'userChart' => $this->getUserChartData(),
            'recentUsers' => $this->getRecentUsers(),
        ])->layout('admin.layouts.app', ['title' => 'Dashboard']);
    }
}
