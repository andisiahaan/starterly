<?php

return [
    // ==========================================
    // API TOKENS
    // ==========================================
    'title' => 'Token API',
    'subtitle' => 'Kelola token akses API Anda untuk integrasi',
    'create_token' => 'Buat Token',
    
    'table' => [
        'name' => 'Nama',
        'abilities' => 'Kemampuan',
        'last_used' => 'Terakhir Digunakan',
        'created' => 'Dibuat',
        'never' => 'Belum Pernah',
        'revoke' => 'Cabut',
    ],
    
    'empty' => [
        'title' => 'Tidak ada token',
        'description' => 'Buat token API untuk berintegrasi dengan layanan eksternal.',
    ],
    
    'docs' => [
        'title' => 'Dokumentasi API',
        'description' => 'Sertakan token Anda dalam permintaan API menggunakan header :header:',
        'view_docs' => 'Lihat Dokumentasi',
    ],
    
    // Modals
    'modals' => [
        'create' => [
            'title' => 'Buat Token API',
            'name' => 'Nama Token',
            'name_placeholder' => 'misal: Integrasi Saya',
            'abilities' => 'Kemampuan',
            'expiration' => 'Kedaluwarsa',
            'expiration_help' => 'Kapan token ini harus kedaluwarsa?',
            'cancel' => 'Batal',
            'create' => 'Buat Token',
            'creating' => 'Membuat...',
        ],
        'show' => [
            'title' => 'Token Berhasil Dibuat!',
            'subtitle' => "Salin token Anda sekarang. Token ini tidak akan ditampilkan lagi.",
            'copy' => 'Salin',
            'copied' => 'Tersalin!',
            'warning_title' => 'Simpan token ini dengan aman!',
            'warning_message' => "Simpan di tempat yang aman. Anda tidak akan dapat melihatnya lagi setelah menutup dialog ini.",
            'done' => 'Selesai',
        ],
        'revoke' => [
            'title' => 'Cabut Token',
            'subtitle' => 'Tindakan ini tidak dapat dibatalkan.',
            'confirm' => 'Apakah Anda yakin ingin mencabut token ":name"?',
            'warning' => 'Integrasi apa pun yang menggunakan token ini akan segera berhenti berfungsi.',
            'cancel' => 'Batal',
            'revoke' => 'Cabut Token',
            'revoking' => 'Mencabut...',
        ],
    ],
    
    'messages' => [
        'created' => 'Token API berhasil dibuat.',
        'revoked' => 'Token API telah dicabut.',
    ],

    'token_created' => [
        'title' => 'Token Berhasil Dibuat!',
        'warning' => 'Salin token Anda sekarang. Token ini tidak akan ditampilkan lagi setelah Anda meninggalkan halaman ini.',
    ],
];
