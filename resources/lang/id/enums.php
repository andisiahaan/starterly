<?php

return [
    // ==========================================
    // NOTIFICATION TYPE
    // ==========================================
    'notification_type' => [
        'labels' => [
            'ticket_created' => 'Tiket Dibuat',
            'ticket_replied' => 'Balasan Tiket',
            'ticket_closed' => 'Tiket Ditutup',
            'ticket_assigned' => 'Tiket Ditugaskan',
            'news_published' => 'Berita Diterbitkan',
            'account_login_alert' => 'Peringatan Login',
            'account_password_changed' => 'Kata Sandi Diubah',
            'account_email_changed' => 'Email Diubah',
            'account_2fa_enabled' => '2FA Diaktifkan',
            'account_2fa_disabled' => '2FA Dinonaktifkan',
            'system_maintenance' => 'Pemberitahuan Pemeliharaan',
            'system_update' => 'Pembaruan Sistem',
            'system_announcement' => 'Pengumuman',
            'admin_user_registered' => 'Pengguna Baru Terdaftar',
            'admin_ticket_created' => 'Tiket Baru Dibuat',
            'admin_system_error' => 'Kesalahan Sistem',
            'test' => 'Notifikasi Uji Coba',
        ],
        
        'categories' => [
            'ticket' => 'Tiket Bantuan',
            'news' => 'Berita & Pembaruan',
            'account' => 'Akun & Keamanan',
            'system' => 'Sistem',
            'admin' => 'Peringatan Admin',
            'test' => 'Uji Coba',
        ],
        
        'descriptions' => [
            'ticket_created' => 'Saat tiket bantuan baru dibuat',
            'ticket_replied' => 'Saat staf membalas tiket Anda',
            'ticket_closed' => 'Saat tiket Anda ditutup',
            'ticket_assigned' => 'Saat tiket ditugaskan kepada Anda',
            'news_published' => 'Saat artikel atau pengumuman baru diterbitkan',
            'account_login_alert' => 'Saat login baru terdeteksi',
            'account_password_changed' => 'Saat kata sandi Anda diubah',
            'account_email_changed' => 'Saat email Anda diubah',
            'account_2fa_enabled' => 'Saat otentikasi dua faktor diaktifkan',
            'account_2fa_disabled' => 'Saat otentikasi dua faktor dinonaktifkan',
            'system_maintenance' => 'Pemberitahuan pemeliharaan terjadwal',
            'system_update' => 'Pembaruan dan perubahan sistem',
            'system_announcement' => 'Pengumuman umum',
            'admin_user_registered' => 'Saat pengguna baru mendaftar',
            'admin_ticket_created' => 'Saat pengguna membuat tiket baru',
            'admin_system_error' => 'Saat terjadi kesalahan sistem',
            'test' => 'Notifikasi uji coba untuk debugging',
        ],
    ],
    
    // ==========================================
    // NOTIFICATION CHANNEL
    // ==========================================
    'notification_channel' => [
        'labels' => [
            'database' => 'Dalam Aplikasi',
            'email' => 'Email',
            'push' => 'Push',
        ],
        'descriptions' => [
            'database' => 'Notifikasi muncul di pusat notifikasi Anda',
            'email' => 'Terima notifikasi melalui email',
            'push' => 'Notifikasi push browser',
        ],
    ],
    
    // ==========================================
    // API TOKEN ABILITY
    // ==========================================
    'api_token_ability' => [
        'labels' => [
            'create' => 'Tambah',
            'read' => 'Baca',
            'update' => 'Perbarui',
            'delete' => 'Hapus',
        ],
        'descriptions' => [
            'create' => 'Membuat sumber daya baru',
            'read' => 'Membaca dan melihat sumber daya',
            'update' => 'Memperbarui sumber daya yang ada',
            'delete' => 'Menghapus sumber daya',
        ],
    ],
];
