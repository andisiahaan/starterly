<?php

return [
    // ==========================================
    // USER-FACING TICKETS
    // ==========================================
    'title' => 'Tiket Saya',
    'subtitle' => 'Lihat dan kelola permintaan bantuan Anda',
    'new_ticket' => 'Tiket Baru',
    
    'filter' => [
        'all_status' => 'Semua Status',
    ],
    
    'status' => [
        'open' => 'Terbuka',
        'in_progress' => 'Sedang Diproses',
        'waiting' => 'Menunggu',
        'resolved' => 'Selesai',
        'closed' => 'Ditutup',
    ],
    
    'priority' => [
        'low' => 'Rendah',
        'normal' => 'Normal',
        'high' => 'Tinggi',
        'urgent' => 'Mendesak',
    ],
    
    'category' => [
        'general' => 'Umum',
        'billing' => 'Tagihan',
        'technical' => 'Teknis',
        'other' => 'Lainnya',
    ],
    
    'empty' => [
        'title' => 'Tidak ada tiket',
        'description' => 'Buat tiket baru untuk mendapatkan bantuan.',
    ],
    
    // Create Ticket
    'create' => [
        'back' => 'Kembali ke Tiket',
        'title' => 'Buat Tiket Bantuan',
        'subject' => 'Subjek',
        'subject_placeholder' => 'Deskripsi singkat masalah Anda',
        'category' => 'Kategori',
        'priority' => 'Prioritas',
        'description' => 'Deskripsi',
        'description_placeholder' => 'Silakan jelaskan masalah Anda secara detail...',
        'attachments' => 'Lampiran',
        'attachments_hint' => 'Klik untuk mengunggah file',
        'attachments_note' => 'Maks 5 file. Diterima: JPG, PNG, GIF, PDF, DOC, TXT (maks 5MB per file)',
        'submit' => 'Kirim Tiket',
        'submitting' => 'Mengirim...',
    ],
    
    // Show Ticket
    'show' => [
        'back' => 'Kembali ke Tiket',
        'ticket_number' => 'Tiket #:number',
        'created' => 'Dibuat :date',
        'conversation' => 'Percakapan',
        'waiting_response' => 'Menunggu balasan staf...',
        'ticket_closed' => 'Tiket ini sudah ditutup.',
        'reply_placeholder' => 'Ketik balasan Anda...',
        'send_reply' => 'Kirim Balasan',
        'support_team' => 'Tim Bantuan',
        'you' => 'Anda',
        'attachments' => 'Lampiran',
    ],
    
    // Messages
    'messages' => [
        'created' => 'Tiket berhasil dibuat.',
        'replied' => 'Balasan terkirim.',
        'closed' => 'Tiket ditutup.',
        'reopened' => 'Tiket dibuka kembali.',
    ],

    // ==========================================
    // NOTIFICATIONS
    // ==========================================
    'notifications' => [
        'created' => [
            'subject' => '[:app] Tiket Berhasil Dibuat #:ticket_id',
            'greeting' => 'Halo :name!',
            'line1' => 'Tiket bantuan Anda telah berhasil dibuat.',
            'ticket_id' => '• ID Tiket: :value',
            'subject_label' => '• Subjek: :value',
            'priority' => '• Prioritas: :value',
            'action' => 'Lihat Tiket',
            'line2' => 'Tim bantuan kami akan segera merespons secepat mungkin.',
            'title' => 'Tiket Dibuat',
            'message' => 'Tiket Anda #:ticket_id telah dibuat.',
        ],
        'replied' => [
            'subject' => '[:app] Balasan Baru pada Tiket #:ticket_id',
            'greeting' => 'Halo :name!',
            'line1' => 'Ada balasan baru pada tiket bantuan Anda.',
            'ticket_id' => '• ID Tiket: :value',
            'action' => 'Lihat Balasan',
            'title' => 'Tiket Dibalas',
            'message' => 'Tiket Anda #:ticket_id memiliki balasan baru.',
        ],
        'closed' => [
            'subject' => '[:app] Tiket Ditutup #:ticket_id',
            'greeting' => 'Halo :name!',
            'line1' => 'Tiket bantuan Anda telah ditutup.',
            'ticket_id' => '• ID Tiket: :value',
            'action' => 'Lihat Tiket',
            'line2' => 'Jika Anda butuh bantuan lebih lanjut, Anda dapat membuka kembali tiket ini atau membuat tiket baru.',
            'title' => 'Tiket Ditutup',
            'message' => 'Tiket Anda #:ticket_id telah ditutup.',
        ],
    ],
];
