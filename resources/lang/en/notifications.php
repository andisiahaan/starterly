<?php

return [
    // ==========================================
    // GENERAL
    // ==========================================
    'title' => 'Notifications',
    'description' => 'Stay updated with your latest notifications and alerts.',
    'mark_all_read' => 'Mark All as Read',
    'clear_all' => 'Clear all',
    'no_notifications' => 'No notifications',
    'view_all' => 'View all notifications',

    // ==========================================
    // INDEX PAGE
    // ==========================================
    'filter_all' => 'All',
    'filter_unread' => 'Unread',
    'filter_read' => 'Read',
    'mark_read' => 'Mark as Read',
    'mark_unread' => 'Mark as Unread',
    'delete' => 'Delete',
    'delete_all_read' => 'Delete All Read',
    'view' => 'View',
    'select_all' => 'Select All',
    'new' => 'New',
    'selected_count' => ':count selected',
    
    // Confirmations
    'confirm_delete' => 'Are you sure you want to delete this notification?',
    'confirm_delete_selected' => 'Are you sure you want to delete the selected notifications?',
    'confirm_delete_all_read' => 'Are you sure you want to delete all read notifications?',
    
    // Toast Messages
    'marked_as_read' => 'Notification marked as read.',
    'marked_as_unread' => 'Notification marked as unread.',
    'bulk_marked_read' => ':count notifications marked as read.',
    'bulk_marked_unread' => ':count notifications marked as unread.',
    'all_marked_read' => 'All notifications marked as read.',
    'deleted' => 'Notification deleted.',
    'bulk_deleted' => ':count notifications deleted.',
    'all_read_deleted' => ':count read notifications deleted.',
    
    // Empty States
    'empty_title' => 'No Notifications',
    'empty_description' => "You're all caught up! We'll notify you when there's something new.",
    'empty_unread_title' => 'No Unread Notifications',
    'empty_unread_description' => "You've read all your notifications. Great job staying on top of things!",
    'empty_read_title' => 'No Read Notifications',
    'empty_read_description' => "You haven't read any notifications yet, or they've been deleted.",

    // ==========================================
    // OTP NOTIFICATIONS
    // ==========================================
    'otp' => [
        'subject' => 'Your Verification Code',
        'greeting' => 'Hello!',
        'line1' => 'You requested a verification code for :purpose.',
        'line2' => 'Your OTP code is:',
        'line3' => 'This code will expire in 10 minutes.',
        'warning' => 'If you did not request this code, please ignore this email.',
        'purposes' => [
            'email_change' => 'changing your email address',
            'login' => 'logging in',
        ],
    ],


    // ==========================================
    // PREFERENCES
    // ==========================================
    'preferences' => [
        'title' => 'Notification Preferences',
        'description' => 'Choose how you want to receive notifications.',
        
        'channels' => [
            'title' => 'Notification Channels',
            'email' => 'Email',
            'email_description' => 'Receive notifications via email',
            'push' => 'Push Notifications',
            'push_description' => 'Receive browser push notifications',
            'database' => 'In-App',
            'database_description' => 'Show notifications in the app',
        ],
        
        'types_title' => 'Notification Types',
    ],

    // ==========================================
    // CATEGORIES
    // ==========================================
    'categories' => [
        'account' => [
            'title' => 'Account Notifications',
            'login' => 'New login alerts',
            'password_changed' => 'Password change alerts',
            'profile_updated' => 'Profile update confirmations',
        ],
        

        'referral' => [
            'title' => 'Referral Notifications',
            'new_referral' => 'New referral sign-ups',
        ],
        
        'support' => [
            'title' => 'Support Notifications',
            'ticket_reply' => 'Ticket replies',
            'ticket_resolved' => 'Ticket resolution',
        ],
        
        'marketing' => [
            'title' => 'Marketing Notifications',
            'newsletter' => 'Newsletter and updates',
            'promotions' => 'Promotions and offers',
            'product_updates' => 'Product updates',
        ],
        
        'admin' => [
            'title' => 'Admin Notifications',
            'new_user' => 'New user registrations',
            'new_ticket' => 'New support tickets',
        ],
    ],

    // ==========================================
    // NOTIFICATION TYPES/MESSAGES
    // ==========================================
    'types' => [
        'welcome' => 'Welcome to :app!',
        'email_verified' => 'Your email has been verified.',
        'password_changed' => 'Your password has been changed.',
        'new_login' => 'New login detected from :device',
        'new_referral' => ':name signed up using your referral code!',
        'ticket_replied' => 'Your ticket #:id has a new reply.',
        'ticket_resolved' => 'Your ticket #:id has been resolved.',
    ],

    // ==========================================
    // MESSAGES
    // ==========================================
    'messages' => [
        'preferences_saved' => 'Notification preferences saved.',
        'marked_read' => 'Notification marked as read.',
        'all_marked_read' => 'All notifications marked as read.',
        'cleared' => 'Notifications cleared.',
    ],
    
    // ==========================================
    // EMAIL CHANGE NOTIFICATIONS
    // ==========================================
    'email_change' => [
        'subject' => 'Verify Email Change',
        'greeting' => 'Hello!',
        'line1' => 'You have requested to change your email address to :email.',
        'action' => 'Verify Email Address',
        'expire' => 'This link will expire in 24 hours.',
        'ignore' => 'If you did not request this change, please ignore this email.',
    ],
    
    // ==========================================
    // COMMON
    // ==========================================
    'common' => [
        'greeting' => 'Hello!',
        'regards' => 'Regards',
    ],



    // ==========================================
    // GENERIC OTP NOTIFICATION
    // ==========================================
    'otp' => [
        'subject' => '[:app] :purpose Verification Code',
        'greeting' => 'Hello :name!',
        'line1' => 'You have requested a verification code for :purpose.',
        'code_label' => 'Your verification code is:',
        'expiry' => 'This code is valid for 10 minutes.',
        'warning' => 'Do not share this code with anyone. If you did not request this code, please ignore this email.',
        
        'purposes' => [
            'verification' => 'Verification',
            'password_change' => 'Password Change',
            'email_change' => 'Email Change',
            'delete_account' => 'Account Deletion',
        ],
    ],

    // ==========================================
    // ACCOUNT SECURITY NOTIFICATIONS
    // ==========================================
    'account' => [
        'password_changed' => [
            'subject' => '[:app] Password Changed',
            'greeting' => 'Hello :name!',
            'line1' => 'Your account password has been changed successfully.',
            'line2' => 'If you made this change, you can safely ignore this email.',
            'line3' => 'If you did NOT make this change, please secure your account immediately by resetting your password and enabling Two-Factor Authentication.',
            'action' => 'View Security Settings',
            'line4' => 'If you need help, please contact our support team.',
            'title' => 'Password Changed',
            'message' => 'Your account password has been changed.',
        ],

        'email_changed' => [
            'title' => 'Email Address Changed',
            'message' => 'Email changed from :old to :new',
            'action' => 'View Account',
        ],

        'email_changed_old' => [
            'subject' => '[:app] Email Address Changed',
            'greeting' => 'Hello :name!',
            'line1' => 'Your email address has been changed.',
            'line2' => 'Changed from :old to :new',
            'line3' => 'If you did NOT make this change, please contact our support team immediately.',
            'action' => 'View Security Settings',
            'line4' => 'This email was sent to your old email address for security purposes.',
        ],

        'email_changed_new' => [
            'subject' => '[:app] Welcome to Your New Email',
            'greeting' => 'Hello :name!',
            'line1' => 'Your email address has been successfully updated.',
            'line2' => 'You can now use :email to log in to your account.',
            'action' => 'View Account',
            'line3' => 'Welcome to your updated account!',
        ],

        '2fa_enabled' => [
            'subject' => '[:app] Two-Factor Authentication Enabled',
            'greeting' => 'Hello :name!',
            'line1' => 'Two-Factor Authentication has been enabled on your account.',
            'line2' => 'Your account is now more secure. You will need to enter a verification code from your authenticator app when logging in.',
            'action' => 'View Security Settings',
            'line3' => 'Make sure to keep your recovery codes in a safe place.',
            'title' => '2FA Enabled',
            'message' => 'Two-Factor Authentication has been enabled on your account.',
        ],

        '2fa_disabled' => [
            'subject' => '[:app] Two-Factor Authentication Disabled',
            'greeting' => 'Hello :name!',
            'line1' => 'Two-Factor Authentication has been disabled on your account.',
            'line2' => 'Your account is now less secure. We recommend enabling 2FA to protect your account.',
            'action' => 'View Security Settings',
            'line3' => 'If you did NOT make this change, please secure your account immediately.',
            'title' => '2FA Disabled',
            'message' => 'Two-Factor Authentication has been disabled on your account.',
        ],
    ],
];
