<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Add indexes for frequently queried columns to improve performance.
     */
    public function up(): void
    {
        // Tickets table indexes
        Schema::table('tickets', function (Blueprint $table) {
            if (!Schema::hasIndex('tickets', 'tickets_status_index')) {
                $table->index('status');
            }
            if (!Schema::hasIndex('tickets', 'tickets_user_id_index')) {
                $table->index('user_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tickets', function (Blueprint $table) {
            if (Schema::hasIndex('tickets', 'tickets_status_index')) {
                $table->dropIndex(['status']);
            }
            if (Schema::hasIndex('tickets', 'tickets_user_id_index')) {
                $table->dropIndex(['user_id']);
            }
        });
    }
};
