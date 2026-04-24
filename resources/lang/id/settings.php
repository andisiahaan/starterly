<?php

return [
    // ==========================================
    // NAVIGATION
    // ==========================================
    'nav' => [
        'general' => 'Umum',
        'auth' => 'Otentikasi',
        'captcha' => 'Captcha',
        'socials' => 'Login Sosial',
        'custom_tags' => 'Tag Kustom',
        'notifications' => 'Notifikasi',
        'referral' => 'Referral',
        'business' => 'Bisnis',
        'cookie_consent' => 'Persetujuan Cookie',
    ],

    // ==========================================
    // GENERAL SETTINGS
    // ==========================================
    'general' => [
        'title' => 'Pengaturan Umum',
        'description' => "Konfigurasi informasi dasar aplikasi Anda.",
        'app_name' => 'Nama Aplikasi',
        'app_title' => 'Judul Aplikasi',
        'app_description' => 'Deskripsi Aplikasi',
        'app_keywords' => 'Kata Kunci Aplikasi',
        'logo' => 'Logo',
        'upload_logo' => 'Unggah Logo',
        'favicon' => 'Favicon',
        'upload_favicon' => 'Unggah Favicon',
        'language' => 'Bahasa',
        'default_theme' => 'Tema Default',
        'timezone' => 'Zona Waktu',
        'currency' => 'Mata Uang',
        'languages' => [
            'en' => 'Inggris',
            'id' => 'Indonesia',
        ],
        'themes' => [
            'light' => 'Terang',
            'dark' => 'Gelap',
        ],
        'status_url' => 'URL Status',
    ],

    // ==========================================
    // AUTHENTICATION SETTINGS
    // ==========================================
    'auth' => [
        'title' => 'Pengaturan Otentikasi',
        'description' => 'Konfigurasi opsi login, pendaftaran, dan keamanan.',
        
        'registration' => [
            'title' => 'Pendaftaran',
            'enabled' => 'Aktifkan Pendaftaran',
            'enabled_description' => 'Izinkan pengguna baru untuk mendaftar',
        ],
        
        'email_verification' => [
            'title' => 'Verifikasi Email',
            'enabled' => 'Wajibkan Verifikasi Email',
            'enabled_description' => 'Pengguna harus memverifikasi email sebelum mengakses aplikasi',
        ],
        
        'login_options' => [
            'title' => 'Opsi Login',
            'email_enabled' => 'Izinkan Login dengan Email',
            'username_enabled' => 'Izinkan Login dengan Username',
        ],
        
        'default_role' => [
            'title' => 'Peran Default',
            'select' => 'Pilih Peran',
        ],
        
        'password' => [
            'title' => 'Persyaratan Kata Sandi',
            'min_length' => 'Panjang Kata Sandi Minimal',
        ],
        
        'toggles' => [
            'is_login_enabled' => 'Login Diaktifkan',
            'is_registration_enabled' => 'Pendaftaran Diaktifkan',
            'is_login_with_google_enabled' => 'Login dengan Google',
            'is_registration_with_google_enabled' => 'Daftar dengan Google',
            'is_email_verification_required' => 'Wajib Verifikasi Email',
            'is_phone_required' => 'Wajib Telepon',
            'is_login_with_username_enabled' => 'Login dengan Username',
            'is_login_with_email_enabled' => 'Login dengan Email',
            'is_remember_me_enabled' => 'Opsi Ingat Saya',
            'is_account_deletion_enabled' => 'Penghapusan Akun',
            'is_strong_password_required' => 'Wajib Kata Sandi Kuat',
        ],
        
        'fields' => [
            'max_login_attempts' => 'Maks Percobaan Login',
            'min_password_length' => 'Panjang Kata Sandi Min',
            'lockout_duration' => 'Durasi Penguncian (menit)',
        ],
    ],

    // ==========================================
    // CAPTCHA SETTINGS
    // ==========================================
    'captcha' => [
        'title' => 'Pengaturan Captcha',
        'description' => 'Konfigurasi perlindungan captcha untuk formulir otentikasi.',
        'provider_description' => 'Pilih penyedia captcha atau nonaktifkan perlindungan captcha.',
        
        'provider' => 'Penyedia Captcha',
        'providers' => [
            'none' => 'Dinonaktifkan',
            'recaptcha_v2' => 'Google reCAPTCHA v2',
        ],
        
        'api_keys' => 'Kunci API',
        'site_key' => 'Site Key',
        'secret_key' => 'Secret Key',
        'get_keys_help' => 'Dapatkan kunci Anda dari',
        'recaptcha_admin' => 'Admin Google reCAPTCHA',
        'recaptcha_select_help' => 'Pilih reCAPTCHA v2 "I\'m not a robot" Checkbox.',
        
        'forms' => [
            'title' => 'Aktifkan Captcha Pada',
            'login' => 'Formulir Login',
            'login_description' => 'Lindungi halaman login dari serangan brute force',
            'registration' => 'Formulir Pendaftaran',
            'registration_description' => 'Cegah pendaftaran spam',
            'forgot_password' => 'Formulir Lupa Kata Sandi',
            'forgot_password_description' => 'Lindungi permintaan atur ulang kata sandi',
        ],
        
        'get_keys' => 'Dapatkan kunci reCAPTCHA Anda dari',
        'google_console' => 'Konsol Google reCAPTCHA',
    ],

    // ==========================================
    // SOCIAL LOGIN SETTINGS
    // ==========================================
    'socials' => [
        'title' => 'Tautan Sosial',
        'description' => 'Tambahkan URL profil media sosial Anda.',
        
        'google' => [
            'title' => 'Google OAuth',
            'enabled' => 'Aktifkan Login Google',
            'client_id' => 'Client ID',
            'client_secret' => 'Client Secret',
        ],
        
        'callback_url' => 'URL Callback',
        'copy_callback' => 'Salin URL ini ke pengaturan penyedia OAuth Anda',
    ],

    // ==========================================
    // CUSTOM TAGS
    // ==========================================
    'custom_tags' => [
        'title' => 'Tag Kustom',
        'description' => 'Tambahkan kode kustom ke bagian head dan body.',
        
        'head_tags' => 'Tag Head',
        'head_tags_description' => 'Kode untuk dimasukkan sebelum </head>',
        'head_tags_placeholder' => '<!-- Analytics, meta tags, custom CSS -->',
        
        'body_start_tags' => 'Tag Awal Body',
        'body_start_tags_description' => 'Kode untuk dimasukkan setelah <body>',
        
        'body_end_tags' => 'Tag Akhir Body',
        'body_end_tags_description' => 'Kode untuk dimasukkan sebelum </body>',
        'body_end_tags_placeholder' => '<!-- Chat widgets, tracking scripts -->',
    ],

    // ==========================================
    // NOTIFICATION SETTINGS
    // ==========================================
    'notifications' => [
        'title' => 'Pengaturan Notifikasi',
        'description' => 'Konfigurasi saluran notifikasi default.',
        
        'channels' => [
            'email' => 'Email',
            'database' => 'Dalam Aplikasi',
            'push' => 'Notifikasi Push',
        ],
        
        'categories' => [
            'account' => 'Notifikasi Akun',
            'orders' => 'Notifikasi Pesanan',
            'marketing' => 'Notifikasi Pemasaran',
        ],
    ],

    // ==========================================
    // REFERRAL SETTINGS
    // ==========================================
    'referral' => [
        'title' => 'Pengaturan Referral',
        'description' => 'Konfigurasi pengaturan program referral.',
        
        'enabled' => 'Aktifkan Program Referral',
        'commission_rate' => 'Tingkat Komisi (%)',
        'commission_type' => 'Tipe Komisi',
        'commission_types' => [
            'percentage' => 'Persentase',
            'fixed' => 'Jumlah Tetap',
        ],
        'minimum_withdrawal' => 'Penarikan Minimum',
        'max_referrals' => 'Maks Referral per Pengguna',
        'cookie_duration' => 'Durasi Cookie (hari)',
    ],

    // ==========================================
    // BUSINESS SETTINGS
    // ==========================================
    'business' => [
        'title' => 'Pengaturan Bisnis',
        'description' => 'Konfigurasi informasi bisnis Anda untuk faktur dan keperluan hukum.',
        
        'sections' => [
            'brand' => 'Merek & Identitas',
            'invoice' => 'Pengaturan Faktur',
            'contact' => 'Informasi Kontak',
            'address' => 'Alamat',
            'tax' => 'Pajak & Hukum',
            'banking' => 'Informasi Perbankan',
            'custom' => 'Bidang Kustom',
        ],
        
        'fields' => [
            'brand_name' => 'Nama Merek',
            'legal_name' => 'Nama Hukum',
            'tagline' => 'Tagline',
            'invoice_prefix' => 'Awalan Faktur',
            'invoice_starting_number' => 'Nomor Awal',
            'email' => 'Email Bisnis',
            'phone' => 'Nomor Telepon',
            'whatsapp' => 'WhatsApp',
            'website' => 'Website',
            'address_line_1' => 'Baris Alamat 1',
            'address_line_2' => 'Baris Alamat 2',
            'city' => 'Kota',
            'state' => 'Negara Bagian/Provinsi',
            'postal_code' => 'Kode Pos',
            'country' => 'Negara',
            'tax_type' => 'Tipe Pajak',
            'tax_id' => 'ID Pajak',
            'tax_rate' => 'Tarif Pajak (%)',
            'registration_number' => 'Nomor Registrasi Bisnis',
            'bank_name' => 'Nama Bank',
            'bank_account_name' => 'Nama Pemilik Rekening',
            'bank_account_number' => 'Nomor Rekening',
            'bank_swift_code' => 'Kode SWIFT/BIC',
        ],
        
        'custom_fields' => [
            'add' => 'Tambah',
            'key' => 'Nama Bidang',
            'value' => 'Nilai Bidang',
            'description' => 'Tambahkan informasi bisnis tambahan yang akan muncul di faktur.',
        ],
    ],

    // ==========================================
    // COOKIE CONSENT
    // ==========================================
    'cookie_consent' => [
        'title' => 'Persetujuan Cookie',
        'description' => 'Konfigurasi spanduk persetujuan cookie.',
        
        'enabled' => 'Aktifkan Spanduk Cookie',
        'enabled_description' => 'Tampilkan spanduk persetujuan cookie kepada pengunjung',
        
        'display' => [
            'title' => 'Pengaturan Tampilan',
            'position' => 'Posisi',
            'positions' => [
                'bottom' => 'Bawah',
                'top' => 'Atas',
                'bottom-left' => 'Bawah Kiri',
                'bottom-right' => 'Bawah Kanan',
            ],
            'theme' => 'Tema',
            'themes' => [
                'light' => 'Terang',
                'dark' => 'Gelap',
                'auto' => 'Auto (Sistem)',
            ],
        ],
        
        'content' => [
            'title' => 'Konten',
            'banner_title' => 'Judul Spanduk',
            'message' => 'Pesan',
            'privacy_url' => 'URL Kebijakan Privasi',
        ],
        
        'buttons' => [
            'title' => 'Tombol',
            'accept' => 'Teks Tombol Terima',
            'reject' => 'Teks Tombol Tolak',
            'settings' => 'Teks Tombol Pengaturan',
            'show_reject' => 'Tampilkan Tombol Tolak',
            'show_settings' => 'Tampilkan Tombol Pengaturan',
        ],
        
        'cookie_settings' => [
            'title' => 'Pengaturan Cookie',
            'name' => 'Nama Cookie',
            'expiry' => 'Kedaluwarsa Cookie (hari)',
        ],
    ],

    // ==========================================
    // CUSTOM TAGS
    // ==========================================
    'custom_tags' => [
        'title' => 'Tag Kustom',
        'description' => 'Masukkan HTML, CSS, atau JavaScript kustom ke dalam tata letak Anda.',
        'head_tags' => 'Tag',
        'body_tags' => 'Tag',
        'before' => 'Sebelum',
        'security' => [
            'title' => 'Pemberitahuan Keamanan',
            'description' => 'Hanya tambahkan skrip tepercaya. Kode berbahaya dapat membahayakan aplikasi dan data pengguna Anda.',
        ],
    ],

    // ==========================================
    // NOTIFICATIONS
    // ==========================================
    'notifications' => [
        'title' => 'Pengaturan Notifikasi',
        'description' => 'Konfigurasi saluran dan tipe notifikasi.',
        
        'channels' => [
            'title' => 'Saluran Notifikasi',
            'description' => 'Aktifkan atau nonaktifkan saluran pengiriman notifikasi secara global.',
        ],
        
        'types' => [
            'title' => 'Tipe Notifikasi',
            'description' => 'Aktifkan atau nonaktifkan tipe notifikasi secara global. Pengguna juga dapat menyesuaikan preferensi mereka.',
        ],
        
        'required' => 'Wajib',
        'security_critical' => 'Keamanan',
        'enable_all' => 'Aktifkan semua',
        'disable_all' => 'Nonaktifkan semua',
    ],

    // ==========================================
    // REFERRAL
    // ==========================================
    'referral' => [
        'title' => 'Pengaturan Referral',
        'description' => 'Konfigurasi program referral dan pengaturan komisi.',
        'saved' => 'Pengaturan referral berhasil disimpan.',
        
        'enabled' => [
            'label' => 'Aktifkan Program Referral',
            'description' => 'Izinkan pengguna untuk mengundang teman dan mendapatkan komisi.',
        ],
        
        'cookie_days' => [
            'label' => 'Durasi Cookie Referral (hari)',
            'description' => 'Berapa lama kode referral disimpan di browser pengunjung.',
        ],
        
        'expiry_days' => [
            'label' => 'Masa Berlaku Referral (hari)',
            'description' => 'Berapa lama hubungan referral berlaku. Pesanan yang dibuat dalam periode ini dari pendaftaran akan mendapatkan komisi.',
        ],
        
        'hold_days' => [
            'label' => 'Periode Penahanan Komisi (hari)',
            'description' => 'Hari sebelum komisi tertunda menjadi tersedia. Setel 0 untuk segera.',
        ],
        
        'commission' => [
            'title' => 'Pengaturan Komisi',
            'fixed_label' => 'Komisi Tetap (Rp)',
            'fixed_description' => 'Jumlah tetap yang diberikan kepada perujuk untuk setiap pesanan yang memenuhi syarat.',
            'percent_label' => 'Persentase Komisi (%)',
            'percent_description' => 'Persentase dari total pesanan yang diberikan sebagai komisi (ditambahkan ke jumlah tetap).',
        ],
        
        'min_withdrawal' => [
            'label' => 'Penarikan Minimum (Rp)',
            'description' => 'Jumlah minimum yang diperlukan untuk meminta penarikan.',
        ],

        'max_withdrawal' => [
            'label' => 'Penarikan Maksimum (Rp)',
            'description' => 'Jumlah maksimum per permintaan penarikan. Setel 0 untuk tidak terbatas.',
        ],
        
        'withdrawal' => [
            'title' => 'Pengaturan Penarikan',
            'enabled' => [
                'label' => 'Aktifkan Penarikan',
                'description' => 'Izinkan pengguna untuk meminta penarikan komisi.',
            ],
            'require_otp' => [
                'label' => 'Wajibkan OTP Email',
                'description' => 'Kirim OTP ke email pengguna untuk verifikasi penarikan.',
            ],
            'require_password' => [
                'label' => 'Wajibkan Konfirmasi Kata Sandi',
                'description' => 'Pengguna harus mengonfirmasi kata sandi saat meminta penarikan.',
            ],
        ],
        
        'example' => [
            'title' => 'Contoh Perhitungan',
        ],
    ],

    // ==========================================
    // MESSAGES
    // ==========================================
    'messages' => [
        'saved' => 'Pengaturan berhasil disimpan.',
        'error' => 'Gagal menyimpan pengaturan.',
    ],
];
