<?php

return [
    // ==========================================
    // PAGE TITLES
    // ==========================================
    'login' => [
        'title' => 'Masuk',
        'heading' => 'Masuk ke akun Anda',
        'subtitle' => 'Selamat datang kembali! Silakan masukkan detail Anda.',
        'button' => 'Masuk',
        'no_account' => "Belum punya akun?",
        'register_link' => 'Daftar',
    ],

    'register' => [
        'title' => 'Daftar',
        'heading' => 'Buat akun baru',
        'subtitle' => 'Bergabunglah dengan kami hari ini.',
        'button' => 'Buat akun',
        'have_account' => 'Sudah punya akun?',
        'login_link' => 'Masuk',
        'terms_agree' => 'Saya setuju dengan',
        'terms_link' => 'Syarat dan Ketentuan',
        'privacy_link' => 'Kebijakan Privasi',
    ],

    'forgot_password' => [
        'title' => 'Lupa Kata Sandi',
        'heading' => 'Lupa kata sandi Anda?',
        'subtitle' => "Jangan khawatir! Masukkan email Anda dan kami akan mengirimkan tautan pengaturan ulang.",
        'button' => 'Kirim tautan reset',
        'back_to_login' => 'Kembali ke login',
        'success' => 'Kami telah mengirimkan tautan pengaturan ulang kata sandi ke email Anda!',
    ],

    'reset_password' => [
        'title' => 'Atur Ulang Kata Sandi',
        'heading' => 'Atur ulang kata sandi Anda',
        'subtitle' => 'Masukkan kata sandi baru Anda di bawah ini.',
        'button' => 'Atur ulang kata sandi',
        'success' => 'Kata sandi Anda telah berhasil diatur ulang!',
        'new_password' => 'Kata Sandi Baru',
        'confirm_password' => 'Konfirmasi Kata Sandi Baru',
    ],
    
    // Quick alias
    'email' => 'Email',

    'verify_email' => [
        'title' => 'Verifikasi Email',
        'heading' => 'Verifikasi alamat email Anda',
        'subtitle' => 'Sebelum melanjutkan, harap verifikasi alamat email Anda dengan mengklik tautan yang kami kirimkan ke kotak masuk Anda.',
        'resend' => 'Kirim ulang email verifikasi',
        'resent' => 'Tautan verifikasi baru telah dikirim ke alamat email Anda.',
        'check_inbox' => 'Periksa kotak masuk Anda',
        'not_received' => "Tidak menerima email?",
    ],

    // ==========================================
    // FORM FIELDS
    // ==========================================
    'fields' => [
        'name' => 'Nama Lengkap',
        'name_placeholder' => 'Budi Santoso',
        'email' => 'Email',
        'email_placeholder' => 'nama@perusahaan.com',
        'email_or_username' => 'Email atau Username',
        'email_or_username_placeholder' => 'email@contoh.com atau username',
        'phone' => 'Nomor Telepon',
        'phone_placeholder' => '+6281234567890',
        'username' => 'Username',
        'username_placeholder' => 'username_anda',
        'password' => 'Kata Sandi',
        'password_placeholder' => '••••••••',
        'password_confirm' => 'Konfirmasi Kata Sandi',
        'password_new' => 'Kata Sandi Baru',
        'password_current' => 'Kata Sandi Saat Ini',
        'remember_me' => 'Ingat saya',
        'referral_code' => 'Kode Referral',
        'referral_code_placeholder' => 'Masukkan kode referral (opsional)',
    ],

    // ==========================================
    // SOCIAL LOGIN
    // ==========================================
    'social' => [
        'or_continue' => 'Atau lanjut dengan',
        'google' => 'Lanjut dengan Google',
        'facebook' => 'Lanjut dengan Facebook',
        'github' => 'Lanjut dengan GitHub',
        'twitter' => 'Lanjut dengan Twitter',
    ],

    // ==========================================
    // MESSAGES
    // ==========================================
    'messages' => [
        'login_success' => 'Selamat datang kembali!',
        'logout_success' => 'Anda telah berhasil keluar.',
        'register_success' => 'Akun berhasil dibuat!',
        'password_changed' => 'Kata sandi Anda telah berhasil diubah.',
        'email_verified' => 'Email Anda telah diverifikasi.',
        'invalid_credentials' => 'Kredensial ini tidak cocok dengan catatan kami.',
        'account_banned' => 'Akun Anda telah diblokir.',
        'too_many_attempts' => 'Terlalu banyak percobaan masuk. Silakan coba lagi dalam :seconds detik.',
    ],

    // ==========================================
    // VALIDATION
    // ==========================================
    'validation' => [
        'email_required' => 'Email wajib diisi.',
        'email_invalid' => 'Harap masukkan alamat email yang valid.',
        'password_required' => 'Kata sandi wajib diisi.',
        'password_min' => 'Kata sandi harus minimal :min karakter.',
        'password_confirmed' => 'Konfirmasi kata sandi tidak cocok.',
        'name_required' => 'Nama wajib diisi.',
        'username_required' => 'Username wajib diisi.',
        'username_taken' => 'Username ini sudah digunakan.',
        'email_taken' => 'Email ini sudah terdaftar.',
        'terms_required' => 'Anda harus menyetujui syarat dan ketentuan.',
    ],

    // ==========================================
    // TWO-FACTOR CHALLENGE
    // ==========================================
    'two_factor_challenge' => [
        'title' => 'Otentikasi Dua Faktor',
        'subtitle_code' => 'Masukkan kode 6 digit dari aplikasi autentikator Anda.',
        'subtitle_recovery' => 'Masukkan salah satu kode pemulihan darurat Anda.',
        'code_label' => 'Kode',
        'recovery_code_label' => 'Kode Pemulihan',
        'verify' => 'Verifikasi',
        'use_recovery' => 'Gunakan kode pemulihan',
        'use_authenticator' => 'Gunakan kode autentikator',
        'cancel' => 'Batal dan kembali ke login',
        'error_code_invalid' => 'Kode yang diberikan tidak valid.',
        'error_recovery_invalid' => 'Kode pemulihan yang diberikan tidak valid.',
    ],

    // ==========================================
    // NOTIFICATIONS
    // ==========================================
    'notifications' => [
        'reset_password' => [
            'subject' => '[:app] Atur Ulang Kata Sandi',
            'greeting' => 'Halo!',
            'line1' => 'Anda menerima email ini karena kami menerima permintaan atur ulang kata sandi untuk akun Anda.',
            'action' => 'Atur Ulang Kata Sandi',
            'expire' => 'Tautan atur ulang kata sandi ini akan kedaluwarsa dalam :count menit.',
            'ignore' => 'Jika Anda tidak meminta atur ulang kata sandi, tidak ada tindakan lebih lanjut yang diperlukan.',
        ],
    ],
];
