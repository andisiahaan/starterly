<?php

return [
    // ==========================================
    // NEWS & ANNOUNCEMENTS
    // ==========================================
    'title' => 'Berita & Pengumuman',
    'subtitle' => 'Tetap terupdate dengan berita dan pembaruan platform',
    
    'filter' => [
        'all_types' => 'Semua Tipe',
    ],
    
    'types' => [
        'news' => 'Berita',
        'announcement' => 'Pengumuman',
        'update' => 'Pembaruan',
        'maintenance' => 'Pemeliharaan',
        'warning' => 'Peringatan',
        'info' => 'Info',
        'information' => 'Informasi',
    ],
    
    'empty' => [
        'title' => 'Tidak ada berita',
        'description' => 'Periksa kembali nanti untuk pembaruan.',
    ],
    
    'show' => [
        'back' => 'Kembali ke Berita',
        'published' => 'Diterbitkan :date',
        'by' => 'Oleh :author',
    ],
    
    'form' => [
        'content' => 'Konten',
        'publish_at' => 'Terbitkan Pada',
        'expires_at' => 'Kedaluwarsa Pada',
        'pinned' => 'Disematkan',
    ],

    // ==========================================
    // NOTIFICATIONS
    // ==========================================
    'notifications' => [
        'published' => [
            'subject' => '[:app] :title',
            'greeting' => 'Halo :name!',
            'line1' => 'Artikel baru telah diterbitkan.',
            'action' => 'Baca Artikel',
            'title' => 'Artikel Baru',
            'message' => ':title',
        ],
    ],
];
