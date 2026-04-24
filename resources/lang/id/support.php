<?php

return [
    // ==========================================
    // TICKETS
    // ==========================================
    'tickets' => [
        'title' => 'Tiket Bantuan',
        'description' => 'Kelola permintaan bantuan pelanggan.',
        'my_tickets' => 'Tiket Saya',
        'create' => 'Buat Tiket',
        'new' => 'Tiket Baru',
        'view' => 'Lihat Tiket',
        'reply' => 'Balas',
        
        'table' => [
            'id' => 'ID Tiket',
            'subject' => 'Subjek',
            'user' => 'Pengguna',
            'priority' => 'Prioritas',
            'status' => 'Status',
            'last_reply' => 'Balasan Terakhir',
            'created' => 'Dibuat',
        ],
        
        'filters' => [
            'search' => 'Cari tiket...',
            'all_status' => 'Semua Status',
            'all_priority' => 'Semua Prioritas',
        ],
        
        'status' => [
            'open' => 'Terbuka',
            'in_progress' => 'Sedang Diproses',
            'waiting' => 'Menunggu Pelanggan',
            'resolved' => 'Selesai',
            'closed' => 'Ditutup',
        ],
        
        'priority' => [
            'low' => 'Rendah',
            'medium' => 'Sedang',
            'high' => 'Tinggi',
            'urgent' => 'Mendesak',
        ],
        
        'form' => [
            'subject' => 'Subjek',
            'subject_placeholder' => 'Ringkasan singkat masalah Anda',
            'category' => 'Kategori',
            'priority' => 'Prioritas',
            'message' => 'Pesan',
            'message_placeholder' => 'Jelaskan masalah Anda secara detail...',
            'attachments' => 'Lampiran',
            'attach_files' => 'Lampirkan File',
        ],
        
        'actions' => [
            'close' => 'Tutup Tiket',
            'reopen' => 'Buka Kembali Tiket',
            'change_status' => 'Ubah Status',
            'change_priority' => 'Ubah Prioritas',
            'assign' => 'Tugaskan',
        ],
        
        'detail' => [
            'ticket_info' => 'Informasi Tiket',
            'conversation' => 'Percakapan',
            'reply_placeholder' => 'Ketik balasan Anda...',
            'send_reply' => 'Kirim Balasan',
            'internal_note' => 'Catatan Internal',
            'add_note' => 'Tambah Catatan',
        ],
        
        'empty' => 'Tiket tidak ditemukan.',
        'no_messages' => 'Belum ada pesan.',
        
        'messages' => [
            'created' => 'Tiket berhasil dibuat.',
            'replied' => 'Balasan berhasil dikirim.',
            'closed' => 'Tiket ditutup.',
            'reopened' => 'Tiket dibuka kembali.',
            'status_updated' => 'Status tiket diperbarui.',
            'assigned' => 'Tiket ditugaskan.',
        ],
        
        'user' => [
            'need_help' => 'Butuh Bantuan?',
            'open_ticket' => 'Buka Tiket Bantuan',
            'your_tickets' => 'Tiket Bantuan Anda',
            'no_tickets' => "Anda belum membuka tiket apa pun.",
            'create_first' => 'Buat tiket pertama Anda',
        ],
    ],

    // ==========================================
    // FAQ (if applicable)
    // ==========================================
    'faq' => [
        'title' => 'Pertanyaan yang Sering Diajukan (FAQ)',
        'search' => 'Cari FAQ...',
        'helpful' => 'Apakah ini membantu?',
        'yes' => 'Ya',
        'no' => 'Tidak',
        'still_need_help' => 'Masih butuh bantuan?',
        'contact_support' => 'Hubungi Bantuan',
    ],

    // ==========================================
    // CONTACT
    // ==========================================
    'contact' => [
        'title' => 'Hubungi Kami',
        'subtitle' => "Kami ingin mendengar dari Anda.",
        'form' => [
            'name' => 'Nama Anda',
            'email' => 'Email Anda',
            'subject' => 'Subjek',
            'message' => 'Pesan',
            'send' => 'Kirim Pesan',
        ],
        'success' => 'Pesan Anda telah terkirim. Kami akan segera menghubungi Anda kembali!',
    ],
];
