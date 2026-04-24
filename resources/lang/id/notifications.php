<?php

return [
    // ==========================================
    // GENERAL
    // ==========================================
    'title' => 'Notifikasi',
    'description' => 'Tetap terinformasi dengan notifikasi dan peringatan terbaru Anda.',
    'mark_all_read' => 'Tandai Semua Sudah Dibaca',
    'clear_all' => 'Hapus semua',
    'no_notifications' => 'Tidak ada notifikasi',
    'view_all' => 'Lihat semua notifikasi',

    // ==========================================
    // INDEX PAGE
    // ==========================================
    'filter_all' => 'Semua',
    'filter_unread' => 'Belum Dibaca',
    'filter_read' => 'Sudah Dibaca',
    'mark_read' => 'Tandai Sudah Dibaca',
    'mark_unread' => 'Tandai Belum Dibaca',
    'delete' => 'Hapus',
    'delete_all_read' => 'Hapus Semua yang Sudah Dibaca',
    'view' => 'Lihat',
    'select_all' => 'Pilih Semua',
    'new' => 'Baru',
    'selected_count' => ':count dipilih',
    
    // Confirmations
    'confirm_delete' => 'Apakah Anda yakin ingin menghapus notifikasi ini?',
    'confirm_delete_selected' => 'Apakah Anda yakin ingin menghapus notifikasi yang dipilih?',
    'confirm_delete_all_read' => 'Apakah Anda yakin ingin menghapus semua notifikasi yang sudah dibaca?',
    
    // Toast Messages
    'marked_as_read' => 'Notifikasi ditandai sudah dibaca.',
    'marked_as_unread' => 'Notifikasi ditandai belum dibaca.',
    'bulk_marked_read' => ':count notifikasi ditandai sudah dibaca.',
    'bulk_marked_unread' => ':count notifikasi ditandai belum dibaca.',
    'all_marked_read' => 'Semua notifikasi ditandai sudah dibaca.',
    'deleted' => 'Notifikasi dihapus.',
    'bulk_deleted' => ':count notifikasi dihapus.',
    'all_read_deleted' => ':count notifikasi yang sudah dibaca dihapus.',
    
    // Empty States
    'empty_title' => 'Tidak Ada Notifikasi',
    'empty_description' => "Anda sudah membaca semuanya! Kami akan memberi tahu Anda jika ada sesuatu yang baru.",
    'empty_unread_title' => 'Tidak Ada Notifikasi Belum Dibaca',
    'empty_unread_description' => "Anda sudah membaca semua notifikasi Anda. Kerja bagus!",
    'empty_read_title' => 'Tidak Ada Notifikasi Sudah Dibaca',
    'empty_read_description' => "Anda belum membaca notifikasi apa pun, atau notifikasi tersebut telah dihapus.",

    // ==========================================
    // OTP NOTIFICATIONS
    // ==========================================
    'otp' => [
        'subject' => '[:app] Kode Verifikasi :purpose',
        'greeting' => 'Halo :name!',
        'line1' => 'Anda telah meminta kode verifikasi untuk :purpose.',
        'line2' => 'Kode OTP Anda adalah:',
        'line3' => 'Kode ini akan kedaluwarsa dalam 10 menit.',
        'warning' => 'Jangan bagikan kode ini kepada siapa pun. Jika Anda tidak meminta kode ini, harap abaikan email ini.',
        'code_label' => 'Kode verifikasi Anda adalah:',
        'expiry' => 'Kode ini berlaku selama 10 menit.',
        'purposes' => [
            'email_change' => 'mengubah alamat email Anda',
            'login' => 'masuk ke akun',
            'verification' => 'Verifikasi',
            'password_change' => 'Perubahan Kata Sandi',
            'delete_account' => 'Penghapusan Akun',
        ],
    ],


    // ==========================================
    // PREFERENCES
    // ==========================================
    'preferences' => [
        'title' => 'Preferensi Notifikasi',
        'description' => 'Pilih cara Anda ingin menerima notifikasi.',
        
        'channels' => [
            'title' => 'Saluran Notifikasi',
            'email' => 'Email',
            'email_description' => 'Terima notifikasi melalui email',
            'push' => 'Notifikasi Push',
            'push_description' => 'Terima notifikasi push browser',
            'database' => 'Dalam Aplikasi',
            'database_description' => 'Tampilkan notifikasi di dalam aplikasi',
        ],
        
        'types_title' => 'Tipe Notifikasi',
    ],

    // ==========================================
    // CATEGORIES
    // ==========================================
    'categories' => [
        'account' => [
            'title' => 'Notifikasi Akun',
            'login' => 'Peringatan login baru',
            'password_changed' => 'Peringatan perubahan kata sandi',
            'profile_updated' => 'Konfirmasi pembaruan profil',
        ],
        

        'referral' => [
            'title' => 'Notifikasi Referral',
            'new_referral' => 'Pendaftaran referral baru',
        ],
        
        'support' => [
            'title' => 'Notifikasi Bantuan',
            'ticket_reply' => 'Balasan tiket',
            'ticket_resolved' => 'Penyelesaian tiket',
        ],
        
        'marketing' => [
            'title' => 'Notifikasi Pemasaran',
            'newsletter' => 'Buletin dan pembaruan',
            'promotions' => 'Promosi dan penawaran',
            'product_updates' => 'Pembaruan produk',
        ],
        
        'admin' => [
            'title' => 'Notifikasi Admin',
            'new_user' => 'Pendaftaran pengguna baru',
            'new_ticket' => 'Tiket bantuan baru',
        ],
    ],

    // ==========================================
    // NOTIFICATION TYPES/MESSAGES
    // ==========================================
    'types' => [
        'welcome' => 'Selamat datang di :app!',
        'email_verified' => 'Email Anda telah diverifikasi.',
        'password_changed' => 'Kata sandi Anda telah diubah.',
        'new_login' => 'Login baru terdeteksi dari :device',
        'new_referral' => ':name mendaftar menggunakan kode referral Anda!',
        'ticket_replied' => 'Tiket Anda #:id memiliki balasan baru.',
        'ticket_resolved' => 'Tiket Anda #:id telah selesai.',
    ],

    // ==========================================
    // MESSAGES
    // ==========================================
    'messages' => [
        'preferences_saved' => 'Preferensi notifikasi disimpan.',
        'marked_read' => 'Notifikasi ditandai sudah dibaca.',
        'all_marked_read' => 'Semua notifikasi ditandai sudah dibaca.',
        'cleared' => 'Notifikasi dihapus.',
    ],
    
    // ==========================================
    // EMAIL CHANGE NOTIFICATIONS
    // ==========================================
    'email_change' => [
        'subject' => 'Verifikasi Perubahan Email',
        'greeting' => 'Halo!',
        'line1' => 'Anda telah meminta untuk mengubah alamat email Anda menjadi :email.',
        'action' => 'Verifikasi Alamat Email',
        'expire' => 'Tautan ini akan kedaluwarsa dalam 24 jam.',
        'ignore' => 'Jika Anda tidak meminta perubahan ini, harap abaikan email ini.',
    ],
    
    // ==========================================
    // COMMON
    // ==========================================
    'common' => [
        'greeting' => 'Halo!',
        'regards' => 'Salam',
    ],



    // ==========================================
    // ACCOUNT SECURITY NOTIFICATIONS
    // ==========================================
    'account' => [
        'password_changed' => [
            'subject' => '[:app] Kata Sandi Diubah',
            'greeting' => 'Halo :name!',
            'line1' => 'Kata sandi akun Anda telah berhasil diubah.',
            'line2' => 'Jika Anda melakukan perubahan ini, Anda dapat mengabaikan email ini.',
            'line3' => 'Jika Anda TIDAK melakukan perubahan ini, segera amankan akun Anda dengan mengatur ulang kata sandi dan mengaktifkan Otentikasi Dua Faktor.',
            'action' => 'Lihat Pengaturan Keamanan',
            'line4' => 'Jika Anda butuh bantuan, silakan hubungi tim bantuan kami.',
            'title' => 'Kata Sandi Diubah',
            'message' => 'Kata sandi akun Anda telah diubah.',
        ],

        'email_changed' => [
            'title' => 'Alamat Email Diubah',
            'message' => 'Email diubah dari :old ke :new',
            'action' => 'Lihat Akun',
        ],

        'email_changed_old' => [
            'subject' => '[:app] Alamat Email Diubah',
            'greeting' => 'Halo :name!',
            'line1' => 'Alamat email Anda telah diubah.',
            'line2' => 'Diubah dari :old ke :new',
            'line3' => 'Jika Anda TIDAK melakukan perubahan ini, segera hubungi tim bantuan kami.',
            'action' => 'Lihat Pengaturan Keamanan',
            'line4' => 'Email ini dikirim ke alamat email lama Anda untuk tujuan keamanan.',
        ],

        'email_changed_new' => [
            'subject' => '[:app] Selamat Datang di Email Baru Anda',
            'greeting' => 'Halo :name!',
            'line1' => 'Alamat email Anda telah berhasil diperbarui.',
            'line2' => 'Anda sekarang dapat menggunakan :email untuk masuk ke akun Anda.',
            'action' => 'Lihat Akun',
            'line3' => 'Selamat datang di akun Anda yang telah diperbarui!',
        ],

        '2fa_enabled' => [
            'subject' => '[:app] Otentikasi Dua Faktor Diaktifkan',
            'greeting' => 'Halo :name!',
            'line1' => 'Otentikasi Dua Faktor telah diaktifkan pada akun Anda.',
            'line2' => 'Akun Anda sekarang lebih aman. Anda perlu memasukkan kode verifikasi dari aplikasi otentikasi saat masuk.',
            'action' => 'Lihat Pengaturan Keamanan',
            'line3' => 'Pastikan untuk menyimpan kode pemulihan Anda di tempat yang aman.',
            'title' => '2FA Diaktifkan',
            'message' => 'Otentikasi Dua Faktor telah diaktifkan pada akun Anda.',
        ],

        '2fa_disabled' => [
            'subject' => '[:app] Otentikasi Dua Faktor Dinonaktifkan',
            'greeting' => 'Halo :name!',
            'line1' => 'Otentikasi Dua Faktor telah dinonaktifkan pada akun Anda.',
            'line2' => 'Akun Anda sekarang kurang aman. Kami menyarankan untuk mengaktifkan 2FA untuk melindungi akun Anda.',
            'action' => 'Lihat Pengaturan Keamanan',
            'line3' => 'Jika Anda TIDAK melakukan perubahan ini, segera amankan akun Anda.',
            'title' => '2FA Dinonaktifkan',
            'message' => 'Otentikasi Dua Faktor telah dinonaktifkan pada akun Anda.',
        ],
    ],
];
