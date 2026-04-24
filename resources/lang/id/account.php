<?php

return [
    // ==========================================
    // ACCOUNT SETTINGS
    // ==========================================
    'title' => 'Pengaturan Akun',
    'description' => 'Kelola profil, keamanan, dan preferensi Anda.',
    
    'tabs' => [
        'profile' => 'Profil',
        'security' => 'Keamanan',
        'two_factor' => 'Autentikasi 2FA',
        'notifications' => 'Notifikasi',
        'sessions' => 'Sesi',
    ],
    
    // ==========================================
    // PROFILE
    // ==========================================
    'profile' => [
        'title' => 'Informasi Profil',
        'description' => 'Perbarui informasi profil akun Anda.',
        'name' => 'Nama',
        'email' => 'Email',
        'email_hint' => 'Email dapat diubah di tab Keamanan.',
        'save' => 'Simpan',
        'saving' => 'Menyimpan...',
        'updated' => 'Profil berhasil diperbarui.',
    ],
    
    // ==========================================
    // SECURITY
    // ==========================================
    'security' => [
        'email_title' => 'Alamat Email',
        'email_current' => 'Alamat email Anda saat ini adalah',
        'email_pending' => 'Perubahan email tertunda ke',
        'email_check_inbox' => 'Periksa email baru Anda untuk tautan verifikasi.',
        'email_change' => 'Ubah Email',
        
        'password_title' => 'Perbarui Kata Sandi',
        'password_description' => 'Pastikan akun Anda menggunakan kata sandi yang panjang dan acak agar tetap aman.',
        'password_current' => 'Kata Sandi Saat Ini',
        'password_new' => 'Kata Sandi Baru',
        'password_confirm' => 'Konfirmasi Kata Sandi',
        'password_update' => 'Perbarui Kata Sandi',
        'password_changed' => 'Kata sandi berhasil diubah.',
        'password_incorrect' => 'Kata sandi yang diberikan salah.',
    ],
    
    // ==========================================
    // TWO FACTOR AUTH
    // ==========================================
    'two_factor' => [
        'title' => 'Otentikasi Dua Faktor',
        'description' => 'Tambahkan keamanan tambahan ke akun Anda menggunakan otentikasi dua faktor.',
        
        'enabled' => 'Otentikasi dua faktor telah aktif.',
        'not_enabled' => 'Otentikasi dua faktor belum aktif.',
        'recovery_remaining' => 'Anda memiliki :count kode pemulihan yang tersisa.',
        'enable_hint' => 'Aktifkan 2FA untuk menambahkan lapisan keamanan ekstra.',
        
        'enable' => 'Aktifkan Otentikasi Dua Faktor',
        'disable' => 'Nonaktifkan 2FA',
        'view_codes' => 'Lihat Kode Pemulihan',
        'regenerate_codes' => 'Buat Ulang Kode',
        'codes_regenerated' => 'Kode pemulihan berhasil dibuat ulang.',
        'disabled' => 'Otentikasi dua faktor telah dinonaktifkan.',
        
        'how_it_works' => 'Bagaimana cara kerja 2FA?',
        'explanation' => 'Saat diaktifkan, Anda akan diminta memasukkan kode dari aplikasi autentikator (seperti Google Authenticator) setiap kali Anda masuk. Ini memastikan bahwa meskipun seseorang memiliki kata sandi Anda, mereka tidak dapat mengakses akun Anda tanpa ponsel Anda.',
        
        'recovery_codes_title' => 'Kode Pemulihan',
        'recovery_codes_info' => 'Simpan kode pemulihan ini di tempat yang aman. Kode ini dapat digunakan untuk mengakses akun Anda jika Anda kehilangan perangkat autentikator.',
        'code_invalid' => 'Kode yang diberikan tidak valid.',
        
        'setup_title' => 'Atur Otentikasi Dua Faktor',
        'scan_qr' => 'Pindai kode QR di bawah ini dengan aplikasi autentikator Anda, lalu masukkan kode verifikasi.',
        'enter_code' => 'Masukkan kode 6 digit',
        'verifying' => 'Memverifikasi...',
        'verify_enable' => 'Verifikasi & Aktifkan',
        
        'confirm_disable_title' => 'Nonaktifkan Otentikasi Dua Faktor',
        'confirm_disable_description' => 'Masukkan kata sandi Anda untuk menonaktifkan otentikasi dua faktor.',
        'disabling' => 'Menonaktifkan...',
    ],
    
    // ==========================================
    // SESSIONS
    // ==========================================
    'sessions' => [
        'title' => 'Sesi Browser',
        'description' => 'Kelola dan keluarkan sesi aktif Anda di browser dan perangkat lain.',
        
        'this_device' => 'Perangkat ini',
        'logout' => 'Keluar',
        'logout_all' => 'Keluar Dari Semua Sesi Lainnya',
        'logout_confirm' => 'Apakah Anda yakin ingin mengeluarkan sesi ini?',
        'logout_all_confirm' => 'Apakah Anda yakin ingin mengeluarkan semua sesi lainnya?',
        
        'no_sessions' => 'Tidak ada sesi aktif ditemukan.',
        'logged_out' => 'Sesi berhasil dikeluarkan.',
        'all_logged_out' => ':count sesi berhasil dikeluarkan.',
        'cannot_logout_current' => 'Anda tidak dapat mengeluarkan sesi Anda saat ini.',
    ],
    
    // ==========================================
    // MODALS
    // ==========================================
    'change_email' => [
        'title' => 'Ubah Alamat Email',
        'description' => 'Masukkan kata sandi saat ini dan alamat email baru.',
        'new_email' => 'Alamat Email Baru',
        'password' => 'Kata Sandi Saat Ini',
        'cancel' => 'Batal',
        'change' => 'Ubah Email',
        'changing' => 'Mengubah...',
    ],
    
    // ==========================================
    // ACTIVITY LOGS
    // ==========================================
    'activity' => [
        'title' => 'Log Aktivitas',
        'description' => 'Lihat aktivitas akun terbaru Anda.',
        'search' => 'Cari aktivitas...',
        'no_logs' => 'Tidak ada log aktivitas ditemukan.',
    ],
    
    // ==========================================
    // MODALS
    // ==========================================
    'modals' => [
        // Change Email Modal
        'change_email' => [
            'title' => 'Ubah Alamat Email',
            'verification_sent_title' => 'Email Verifikasi Terkirim',
            'sent_to' => 'Kami telah mengirimkan tautan verifikasi ke',
            'link_expires' => 'Klik tautan dalam email untuk mengonfirmasi alamat email baru Anda. Tautan akan kedaluwarsa dalam 24 jam.',
            'new_email' => 'Alamat Email Baru',
            'confirm_password' => 'Konfirmasi kata sandi Anda',
            'otp_label' => 'Kode Verifikasi',
            'otp_hint' => 'Masukkan email baru dan kata sandi, lalu klik Kirim OTP. Kode akan dikirim ke email Anda saat ini.',
            'otp_sent_to_old' => 'OTP dikirim ke alamat email Anda saat ini.',
            'otp_invalid' => 'Kode OTP tidak valid. Silakan coba lagi.',
            'otp_expired' => 'Kode OTP telah kedaluwarsa. Silakan minta yang baru.',
            'email_mismatch' => 'Alamat email tidak cocok dengan permintaan OTP.',
            'send_otp' => 'Kirim OTP',
            'got_it' => 'Mengerti',
            'cancel' => 'Batal',
            'send_verification' => 'Kirim Verifikasi',
            'sending' => 'Mengirim...',
        ],
        
        // Enable 2FA Modal
        'enable_2fa' => [
            'title' => 'Aktifkan Otentikasi Dua Faktor',
            'save_codes_title' => 'Simpan kode pemulihan Anda',
            'enabled_message' => 'Otentikasi dua faktor telah diaktifkan. Simpan kode pemulihan ini di lokasi yang aman.',
            'code_warning' => 'Setiap kode hanya dapat digunakan sekali. Jika Anda kehilangan kode-kode ini dan aplikasi autentikator Anda, Anda akan kehilangan akses ke akun Anda.',
            'scan_qr' => 'Pindai kode QR ini dengan aplikasi autentikator Anda (Google Authenticator, Authy, dll.)',
            'enter_manually' => 'Atau masukkan kode ini secara manual:',
            'verification_code' => 'Kode Verifikasi',
            'saved_codes' => 'Saya telah menyimpan kode pemulihan saya',
            'cancel' => 'Batal',
            'verify_enable' => 'Verifikasi & Aktifkan',
            'verifying' => 'Memverifikasi...',
        ],
        
        // Disable 2FA Modal
        'disable_2fa' => [
            'title' => 'Nonaktifkan Otentikasi Dua Faktor',
            'warning' => 'Peringatan',
            'warning_message' => 'Menonaktifkan otentikasi dua faktor akan mengurangi keamanan akun Anda. Siapa pun yang memiliki kata sandi Anda akan dapat mengakses akun Anda.',
            'confirm_password' => 'Konfirmasi kata sandi Anda',
            'cancel' => 'Batal',
            'disable' => 'Nonaktifkan 2FA',
        ],
        
        // Recovery Codes Modal
        'recovery_codes' => [
            'title' => 'Kode Pemulihan',
            'info' => 'Simpan kode pemulihan ini di lokasi yang aman. Kode ini dapat digunakan untuk mengakses akun Anda jika Anda kehilangan perangkat autentikator.',
            'no_codes' => 'Tidak ada kode pemulihan tersedia.',
            'remaining' => 'Setiap kode hanya dapat digunakan sekali. Anda memiliki :count kode tersisa.',
            'copied' => 'Kode disalin ke clipboard',
            'copy' => 'Salin',
            'done' => 'Selesai',
        ],
        
        // Push Subscriptions Modal
        'push_subscriptions' => [
            'title' => 'Notifikasi Push',
            'subtitle' => 'Kelola langganan browser',
            'this_browser' => 'Browser Ini',
            'checking' => 'Memeriksa...',
            'not_supported' => 'Tidak didukung',
            'already_registered' => 'Sudah terdaftar',
            'not_registered' => 'Belum terdaftar',
            'enabling' => 'Mengaktifkan...',
            'permission_denied' => 'Izin ditolak',
            'not_configured' => 'Tidak dikonfigurasi',
            'failed' => 'Gagal mengaktifkan',
            'enable' => 'Aktifkan',
            'active' => 'Aktif',
            'registered_devices' => 'Perangkat Terdaftar (:count)',
            'added' => 'Ditambahkan :date',
            'confirm_remove' => 'Apakah Anda yakin ingin menghapus langganan ini?',
            'empty_title' => 'Belum ada perangkat terdaftar',
            'empty_description' => 'Aktifkan notifikasi push untuk memulai',
            'close' => 'Tutup',
        ],
    ],
    
    // ==========================================
    // NOTIFICATIONS DROPDOWN
    // ==========================================
    'notifications_dropdown' => [
        'title' => 'Notifikasi',
        'unread_count' => ':count belum dibaca',
        'mark_all_read' => 'Tandai semua dibaca',
        'view_details' => 'Lihat Detail',
        'mark_as_read' => 'Tandai sudah dibaca',
        'empty_title' => 'Belum ada notifikasi',
        'empty_description' => "Saat Anda menerima notifikasi, mereka akan muncul di sini.",
        'view_all' => 'Lihat Semua Notifikasi',
    ],
];
