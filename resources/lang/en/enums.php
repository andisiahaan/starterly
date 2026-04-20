<?php

return [
    // ==========================================
    // NOTIFICATION TYPE
    // ==========================================
    'notification_type' => [
        'labels' => [
            'ticket_created' => 'Ticket Created',
            'ticket_replied' => 'Ticket Reply',
            'ticket_closed' => 'Ticket Closed',
            'ticket_assigned' => 'Ticket Assigned',
            'news_published' => 'News Published',
            'account_login_alert' => 'Login Alert',
            'account_password_changed' => 'Password Changed',
            'account_email_changed' => 'Email Changed',
            'account_2fa_enabled' => '2FA Enabled',
            'account_2fa_disabled' => '2FA Disabled',
            'system_maintenance' => 'Maintenance Notice',
            'system_update' => 'System Update',
            'system_announcement' => 'Announcement',
            'admin_user_registered' => 'New User Registered',
            'admin_ticket_created' => 'New Ticket Created',
            'admin_system_error' => 'System Error',
            'test' => 'Test Notification',
        ],
        
        'categories' => [
            'ticket' => 'Support Tickets',
            'news' => 'News & Updates',
            'account' => 'Account & Security',
            'system' => 'System',
            'admin' => 'Admin Alerts',
            'test' => 'Test',
        ],
        
        'descriptions' => [
            'ticket_created' => 'When a new support ticket is created',
            'ticket_replied' => 'When staff replies to your ticket',
            'ticket_closed' => 'When your ticket is closed',
            'ticket_assigned' => 'When a ticket is assigned to you',
            'news_published' => 'When new articles or announcements are published',
            'account_login_alert' => 'When a new login is detected',
            'account_password_changed' => 'When your password is changed',
            'account_email_changed' => 'When your email is changed',
            'account_2fa_enabled' => 'When two-factor auth is enabled',
            'account_2fa_disabled' => 'When two-factor auth is disabled',
            'system_maintenance' => 'Scheduled maintenance notices',
            'system_update' => 'System updates and changes',
            'system_announcement' => 'General announcements',
            'admin_user_registered' => 'When a new user registers',
            'admin_ticket_created' => 'When a user creates a new ticket',
            'admin_system_error' => 'When a system error occurs',
            'test' => 'Test notification for debugging',
        ],
    ],
    
    // ==========================================
    // NOTIFICATION CHANNEL
    // ==========================================
    'notification_channel' => [
        'labels' => [
            'database' => 'In-App',
            'email' => 'Email',
            'push' => 'Push',
        ],
        'descriptions' => [
            'database' => 'Notifications appear in your notification center',
            'email' => 'Receive notifications via email',
            'push' => 'Browser push notifications',
        ],
    ],
    
    // ==========================================
    // API TOKEN ABILITY
    // ==========================================
    'api_token_ability' => [
        'labels' => [
            'create' => 'Create',
            'read' => 'Read',
            'update' => 'Update',
            'delete' => 'Delete',
        ],
        'descriptions' => [
            'create' => 'Create new resources',
            'read' => 'Read and view resources',
            'update' => 'Update existing resources',
            'delete' => 'Delete resources',
        ],
    ],
];
