<?php

return [
    // ==========================================
    // DASHBOARD
    // ==========================================
    'dashboard' => [
        'title' => 'Dashboard',
        'welcome' => 'Selamat datang di Panel Admin',
        'overview' => 'Ringkasan',
        
        // Period Selector
        'period' => [
            'last_7_days' => '7 hari terakhir',
            'last_30_days' => '30 hari terakhir',
            'last_90_days' => '90 hari terakhir',
        ],
        
        // Stats Cards
        'stats' => [
            'total_users' => 'Total Pengguna',
            'new_users' => '+:count baru',

        ],
        
        // Charts
        'charts' => [
            'new_users' => 'Pengguna Baru',
        ],
        
        // Recent Activity
        'recent' => [
            'users' => 'Pengguna Terkini',
            'view_all' => 'Lihat semua',
            'no_users' => 'Belum ada pengguna',
            'guest' => 'Tamu',
        ],
    ],

    // ==========================================
    // SIDEBAR MENU
    // ==========================================
    'sidebar' => [
        'admin_panel' => 'Panel Admin',
        'main' => 'Utama',
        'dashboard' => 'Dashboard',
        'management' => 'Manajemen',
        'users' => 'Pengguna',
        'roles' => 'Peran',
        'permissions' => 'Izin',
        'system' => 'Sistem',
        'settings' => 'Pengaturan',

        'content' => 'Konten',
        'pages' => 'Halaman',
        'news' => 'Berita',
        'blog' => 'Blog',
        'posts' => 'Postingan',
        'tags' => 'Tag',
        'help_center' => 'Pusat Bantuan',
        'help_categories' => 'Kategori',
        'help_articles' => 'Artikel',
        'support' => 'Bantuan',
        'tickets' => 'Tiket',
        'referral' => 'Referral',
        'referrals' => 'Referral',
        'administrator' => 'Administrator',
    ],


    // ==========================================
    // USERS
    // ==========================================
    'users' => [
        'title' => 'Pengguna',
        'description' => 'Kelola semua pengguna, peran, dan izin mereka.',
        'add' => 'Tambah Pengguna',
        'edit' => 'Edit Pengguna',
        'create' => 'Buat Pengguna',
        'delete' => 'Hapus Pengguna',
        
        'table' => [
            'user' => 'Pengguna',
            'roles' => 'Peran',
            'joined' => 'Bergabung',
        ],
        
        'filters' => [
            'search' => 'Cari berdasarkan nama, email, atau username...',
            'all_roles' => 'Semua Peran',
            'all_status' => 'Semua Status',
            'active_only' => 'Pengguna Aktif',
            'with_deleted' => 'Termasuk Dihapus',
            'deleted_only' => 'Hanya yang Dihapus',
        ],
        
        'bulk' => [
            'selected' => ':count pengguna dipilih',
            'ban' => 'Blokir yang Dipilih',
            'unban' => 'Buka Blokir yang Dipilih',
            'restore' => 'Pulihkan yang Dipilih',
            'force_delete' => 'Hapus Permanen',
        ],
        
        'actions' => [
            'ban' => 'Blokir',
            'unban' => 'Buka Blokir',
            'restore' => 'Pulihkan',
            'force_delete' => 'Hapus Permanen',
        ],
        
        'status' => [
            'active' => 'Aktif',
            'banned' => 'Diblokir',
            'deleted' => 'Dihapus',
        ],
        
        'no_roles' => 'Tidak ada peran',
        'no_permission' => 'Tidak ada akses',
        'empty' => 'Pengguna tidak ditemukan.',
        'empty_deleted' => 'Pengguna yang dihapus tidak ditemukan.',
        
        'confirm' => [
            'ban' => 'Apakah Anda yakin ingin memblokir pengguna ini?',
            'unban' => 'Apakah Anda yakin ingin membuka blokir pengguna ini?',
            'delete' => 'Apakah Anda yakin ingin menghapus pengguna ini?',
            'ban_bulk' => 'Apakah Anda yakin ingin memblokir pengguna yang dipilih?',
            'unban_bulk' => 'Apakah Anda yakin ingin membuka blokir pengguna yang dipilih?',
            'restore_bulk' => 'Apakah Anda yakin ingin memulihkan pengguna yang dipilih?',
            'force_delete' => 'Tindakan ini permanen dan tidak dapat dibatalkan. Apakah Anda yakin?',
            'force_delete_bulk' => 'Ini akan menghapus secara permanen semua pengguna yang dipilih. Ini tidak dapat dibatalkan. Apakah Anda yakin?',
        ],
        
        'messages' => [
            'created' => 'Pengguna berhasil dibuat.',
            'updated' => 'Pengguna berhasil diperbarui.',
            'deleted' => 'Pengguna berhasil dihapus.',
            'banned' => 'Pengguna telah diblokir.',
            'unbanned' => 'Pengguna telah dibuka blokirnya.',
            'restored' => 'Pengguna telah dipulihkan.',
            'force_deleted' => 'Pengguna telah dihapus secara permanen.',
        ],
        
        'modals' => [
            'delete' => [
                'title' => 'Hapus Pengguna',
                'confirm' => 'Apakah Anda yakin ingin menghapus :name?',
                'warning' => 'Tindakan ini tidak dapat dibatalkan. Semua data yang terkait dengan pengguna ini akan dihapus secara permanen.',
                'cancel' => 'Batal',
                'submit' => 'Hapus Pengguna',
                'deleting' => 'Menghapus...',
            ],
            'ban' => [
                'title' => 'Blokir Pengguna',
                'confirm' => 'Anda akan memblokir :name',
                'warning' => 'Pengguna ini tidak akan bisa masuk lagi sampai blokir dibuka.',
                'reason_label' => 'Alasan Blokir (opsional)',
                'reason_placeholder' => 'Alasan memblokir pengguna ini...',
                'cancel' => 'Batal',
                'submit' => 'Blokir Pengguna',
                'banning' => 'Memblokir...',
            ],
            'create' => [
                'title' => 'Buat Pengguna',
                'name' => 'Nama',
                'email' => 'Email',
                'password' => 'Kata Sandi',
                'password_hint' => '(kosongkan jika tidak ingin mengubah)',
                'password_confirm' => 'Konfirmasi Kata Sandi',
                'roles' => 'Peran',
                'cancel' => 'Batal',
                'create' => 'Buat',
                'update' => 'Perbarui',
                'saving' => 'Menyimpan...',
            ],
            'edit' => [
                'title' => 'Edit Pengguna',
            ],
        ],
        
        'form' => [
            'name' => 'Nama',
            'email' => 'Email',
            'password' => 'Kata Sandi',
            'password_confirm' => 'Konfirmasi Kata Sandi',
            'password_hint' => 'Kosongkan jika tidak ingin mengubah kata sandi',
            'roles' => 'Peran',
            'ban_reason' => 'Alasan Blokir',
            'ban_reason_placeholder' => 'Masukkan alasan memblokir pengguna ini...',
        ],
    ],

    // ==========================================
    // ROLES
    // ==========================================
    'roles' => [
        'title' => 'Peran',
        'description' => 'Kelola peran dan izin mereka.',
        'add' => 'Tambah Peran',
        'edit' => 'Edit Peran',
        'create' => 'Buat Peran',
        'delete' => 'Hapus Peran',
        
        'table' => [
            'name' => 'Nama',
            'guard' => 'Guard',
            'permissions' => 'Izin',
            'users' => 'Pengguna',
        ],
        
        'empty' => 'Peran tidak ditemukan.',
        
        'modals' => [
            'create' => [
                'title' => 'Buat Peran',
                'name' => 'Nama Peran',
                'guard' => 'Nama Guard',
                'permissions' => 'Izin',
                'cancel' => 'Batal',
                'create' => 'Buat',
                'update' => 'Perbarui',
                'saving' => 'Menyimpan...',
            ],
            'edit' => [
                'title' => 'Edit Peran',
            ],
            'delete' => [
                'title' => 'Hapus Peran',
                'confirm' => 'Apakah Anda yakin ingin menghapus peran :name?',
                'warning' => 'Tindakan ini tidak dapat dibatalkan. Semua pengguna dengan peran ini akan kehilangan izin terkait.',
                'cancel' => 'Batal',
                'submit' => 'Hapus Peran',
                'deleting' => 'Menghapus...',
            ],
        ],
        
        'form' => [
            'name' => 'Nama Peran',
            'name_placeholder' => 'misal: editor',
            'guard' => 'Nama Guard',
            'permissions' => 'Izin',
            'select_all' => 'Pilih Semua',
        ],
        
        'messages' => [
            'created' => 'Peran berhasil dibuat.',
            'updated' => 'Peran berhasil diperbarui.',
            'deleted' => 'Peran berhasil dihapus.',
            'cannot_delete' => 'Tidak dapat menghapus peran ini.',
        ],
        
        'confirm' => [
            'delete' => 'Apakah Anda yakin ingin menghapus peran ini?',
        ],
    ],

    // ==========================================
    // PERMISSIONS
    // ==========================================
    'permissions' => [
        'title' => 'Izin',
        'description' => 'Kelola semua izin yang tersedia.',
        'add' => 'Tambah Izin',
        'edit' => 'Edit Izin',
        'create' => 'Buat Izin',
        'delete' => 'Hapus Izin',
        
        'table' => [
            'name' => 'Nama',
            'guard' => 'Guard',
            'roles' => 'Peran yang Ditetapkan',
        ],
        
        'empty' => 'Izin tidak ditemukan.',
        
        'modals' => [
            'create' => [
                'title' => 'Buat Izin',
                'name' => 'Nama Izin',
                'guard' => 'Nama Guard',
                'roles' => 'Tetapkan ke Peran',
                'cancel' => 'Batal',
                'create' => 'Buat',
                'update' => 'Perbarui',
                'saving' => 'Menyimpan...',
            ],
            'edit' => [
                'title' => 'Edit Izin',
            ],
            'delete' => [
                'title' => 'Hapus Izin',
                'confirm' => 'Apakah Anda yakin ingin menghapus izin :name?',
                'warning_roles' => 'Peringatan: Izin ini ditetapkan ke :count peran.',
                'warning' => 'Tindakan ini tidak dapat dibatalkan.',
                'cancel' => 'Batal',
                'submit' => 'Hapus Izin',
                'deleting' => 'Menghapus...',
            ],
        ],
        
        'form' => [
            'name' => 'Nama Izin',
            'name_placeholder' => 'misal: edit postingan',
            'guard' => 'Nama Guard',
        ],
        
        'messages' => [
            'created' => 'Izin berhasil dibuat.',
            'updated' => 'Izin berhasil diperbarui.',
            'deleted' => 'Izin berhasil dihapus.',
        ],
        
        'confirm' => [
            'delete' => 'Apakah Anda yakin ingin menghapus izin ini?',
        ],
    ],

    // ==========================================
    // COMMON ADMIN
    // ==========================================
    'common' => [
        'filters' => 'Filter',
        'bulk_actions' => 'Aksi Massal',
        'per_page' => 'Per halaman',
        'export' => 'Ekspor',
        'import' => 'Impor',
        'refresh' => 'Muat Ulang',
    ],
    

    // ==========================================
    // PAGES MODALS
    // ==========================================
    'pages' => [
        'modals' => [
            'create' => [
                'title' => 'Buat Halaman',
                'page_title' => 'Judul',
                'slug' => 'Slug',
                'content' => 'Konten',
                'meta_title' => 'Judul Meta',
                'meta_description' => 'Deskripsi Meta',
                'layout' => 'Layout',
                'layout_default' => 'Default',
                'layout_full_width' => 'Lebar Penuh',
                'layout_sidebar' => 'Sidebar',
                'order' => 'Urutan',
                'published' => 'Diterbitkan',
                'cancel' => 'Batal',
                'create' => 'Buat',
                'update' => 'Perbarui',
                'saving' => 'Menyimpan...',
            ],
            'edit' => [
                'title' => 'Edit Halaman',
            ],
            'delete' => [
                'title' => 'Hapus Halaman',
                'confirm' => 'Apakah Anda yakin ingin menghapus halaman ini?',
                'warning' => 'Tindakan ini tidak dapat dibatalkan.',
                'cancel' => 'Batal',
                'submit' => 'Hapus Halaman',
                'deleting' => 'Menghapus...',
            ],
        ],
    ],
    

    // ==========================================
    // NEWS MODALS
    // ==========================================
    'news' => [
        'modals' => [
            'create' => [
                'title' => 'Buat Berita',
                'cancel' => 'Batal',
                'create' => 'Buat',
                'update' => 'Perbarui',
                'saving' => 'Menyimpan...',
            ],
            'edit' => [
                'title' => 'Edit Berita',
            ],
            'delete' => [
                'title' => 'Hapus Berita',
                'confirm' => 'Apakah Anda yakin ingin menghapus berita ini?',
                'warning' => 'Tindakan ini tidak dapat dibatalkan.',
                'cancel' => 'Batal',
                'submit' => 'Hapus Berita',
                'deleting' => 'Menghapus...',
            ],
        ],
    ],
    

    // ==========================================
    // TICKETS
    // ==========================================
    'tickets' => [
        'title' => 'Tiket Bantuan',
        'description' => 'Kelola tiket bantuan pelanggan dan pertanyaan.',
        
        'filters' => [
            'search' => 'Cari nomor tiket atau subjek...',
            'all_status' => 'Semua Status',
            'all_priority' => 'Semua Prioritas',
        ],
        
        'table' => [
            'ticket' => 'Tiket',
            'user' => 'Pengguna',
            'priority' => 'Prioritas',
            'status' => 'Status',
            'assigned' => 'Ditugaskan',
        ],
        
        'guest' => 'Tamu',
        'assign_to_me' => 'Tugaskan ke saya',
        'empty' => 'Tiket tidak ditemukan.',
        
        'actions' => [
            'view' => 'Lihat',
        ],
    ],
    

    // ==========================================
    // NEWS (INDEX)
    // ==========================================
    'news_index' => [
        'title' => 'Berita & Pengumuman',
        'description' => 'Kelola berita platform, pembaruan, dan pemberitahuan pemeliharaan.',
        'add' => 'Tambah Berita',
        
        'filters' => [
            'search' => 'Cari...',
            'all_types' => 'Semua Tipe',
        ],
        
        'table' => [
            'title' => 'Judul',
            'type' => 'Tipe',
            'status' => 'Status',
            'author' => 'Penulis',
        ],
        
        'status' => [
            'published' => 'Diterbitkan',
            'draft' => 'Draft',
        ],
        
        'unknown_author' => 'Tidak diketahui',
        'empty' => 'Berita tidak ditemukan.',
    ],
    
    // ==========================================
    // PAGES (INDEX)
    // ==========================================
    'pages_index' => [
        'title' => 'Halaman',
        'description' => 'Kelola halaman statis seperti Syarat, Kebijakan Privasi, FAQ.',
        'add' => 'Tambah Halaman',
        
        'filters' => [
            'search' => 'Cari halaman...',
        ],
        
        'table' => [
            'title' => 'Judul',
            'slug' => 'Slug',
            'status' => 'Status',
            'layout' => 'Layout',
        ],
        
        'status' => [
            'published' => 'Diterbitkan',
            'draft' => 'Draft',
        ],
        
        'empty' => 'Halaman tidak ditemukan.',
    ],
    

    // ==========================================
    // REFERRALS (INDEX)
    // ==========================================
    'referrals_index' => [
        'stats' => [
            'total_referrals' => 'Total Pengguna Dirujuk',
            'total_referrers' => 'Total Perujuk',
        ],
        
        'title' => 'Pengguna Dirujuk',
        'search' => 'Cari...',
        
        'table' => [
            'user' => 'Pengguna',
            'referred_by' => 'Dirujuk Oleh',
            'joined' => 'Bergabung',
        ],
        
        'empty' => 'Referral tidak ditemukan.',
    ],
    

    // ==========================================
    // TICKETS SHOW
    // ==========================================
    'tickets_show' => [
        'back' => 'Kembali ke Tiket',
        'priority' => 'Prioritas',
        'conversation' => 'Percakapan',
        'unknown' => 'Tidak diketahui',
        'reply_placeholder' => 'Ketik balasan Anda...',
        'send_reply' => 'Kirim Balasan',
        
        'details' => [
            'title' => 'Detail Tiket',
            'status' => 'Status',
            'category' => 'Kategori',
            'user' => 'Pengguna',
            'email' => 'Email',
            'assigned' => 'Ditugaskan Kepada',
            'unassigned' => 'Belum Ditugaskan',
            'guest' => 'Tamu',
        ],
        'attachments' => 'Lampiran',
        'attach_files' => 'Lampirkan File',
        'attachments_note' => 'Maks 5 file. Diterima: JPG, PNG, GIF, PDF, DOC, TXT (maks 5MB per file)',
    ],
    
    // ==========================================
    // BLOG POSTS
    // ==========================================
    'blog_posts' => [
        'title' => 'Postingan Blog',
        'description' => 'Kelola artikel blog dan publikasi.',
        'add' => 'Tambah Postingan',
        
        'filters' => [
            'search' => 'Cari postingan...',
            'all_status' => 'Semua Status',
            'all_categories' => 'Semua Kategori',
        ],
        
        'table' => [
            'post' => 'Postingan',
            'category' => 'Kategori',
            'author' => 'Penulis',
            'status' => 'Status',
            'published_at' => 'Diterbitkan Pada',
        ],
        
        'status' => [
            'published' => 'Diterbitkan',
            'draft' => 'Draft',
            'scheduled' => 'Dijadwalkan',
        ],
        
        'uncategorized' => 'Tanpa Kategori',
        'unknown_author' => 'Tidak diketahui',
        'empty' => 'Postingan tidak ditemukan.',
        'confirm_delete' => 'Apakah Anda yakin ingin menghapus postingan ini?',
        
        'form' => [
            'create_title' => 'Buat Postingan',
            'edit_title' => 'Edit Postingan',
            'title' => 'Judul',
            'slug' => 'Slug',
            'excerpt' => 'Kutipan',
            'content' => 'Konten',
            'featured_image' => 'Gambar Unggulan',
            'category' => 'Kategori',
            'tags' => 'Tag',
            'status' => 'Status',
            'published_at' => 'Tanggal Terbit',
            'meta_title' => 'Judul Meta',
            'meta_description' => 'Deskripsi Meta',
            'cancel' => 'Batal',
            'save' => 'Simpan Postingan',
            'saving' => 'Menyimpan...',
            'select_category' => 'Pilih Kategori',
            'select_tags' => 'Pilih Tag',
        ],
    ],
    
    // ==========================================
    // BLOG CATEGORIES
    // ==========================================
    'blog_categories' => [
        'title' => 'Kategori Blog',
        'description' => 'Kelola kategori untuk postingan blog.',
        'add' => 'Tambah Kategori',
        
        'filters' => [
            'search' => 'Cari kategori...',
        ],
        
        'table' => [
            'name' => 'Nama',
            'slug' => 'Slug',
            'posts' => 'Postingan',
            'status' => 'Status',
        ],
        
        'status' => [
            'active' => 'Aktif',
            'inactive' => 'Tidak Aktif',
        ],
        
        'empty' => 'Kategori tidak ditemukan.',
        'confirm_delete' => 'Apakah Anda yakin ingin menghapus kategori ini?',
    ],
    
    // ==========================================
    // BLOG TAGS
    // ==========================================
    'blog_tags' => [
        'title' => 'Tag',
        'description' => 'Kelola tag untuk postingan blog.',
        'add' => 'Tambah Tag',
        
        'filters' => [
            'search' => 'Cari tag...',
        ],
        
        'table' => [
            'name' => 'Nama',
            'slug' => 'Slug',
            'posts' => 'Postingan',
        ],
        
        'empty' => 'Tag tidak ditemukan.',
        'confirm_delete' => 'Apakah Anda yakin ingin menghapus tag ini?',
    ],
    
    // ==========================================
    // SETTINGS
    // ==========================================
    'settings' => [
        'title' => 'Pengaturan',
        'description' => 'Kelola pengaturan aplikasi Anda.',
        
        'nav' => [
            'general' => 'Umum',
            'business' => 'Bisnis',
            'auth' => 'Otentikasi',
            'captcha' => 'Captcha',
            'cookie_consent' => 'Persetujuan Cookie',
            'socials' => 'Tautan Sosial',
            'custom_tags' => 'Tag Kustom',
            'notifications' => 'Notifikasi',
            'referral' => 'Program Referral',
        ],
        
        'sr' => [
            'select_section' => 'Pilih bagian',
        ],
    ],

    // ==========================================
    // ADMIN NOTIFICATIONS
    // ==========================================
    'notifications' => [

        'ticket_created' => [
            'subject' => 'Tiket Bantuan Baru',
            'greeting' => 'Halo Admin!',
            'line1' => 'Tiket bantuan baru telah dikirimkan.',
            'user' => '• Pengguna: :value',
            'subject_label' => '• Subjek: :value',
            'priority' => '• Prioritas: :value',
            'action' => 'Lihat Tiket',
            'title' => 'Tiket Baru',
            'message' => ':user membuat tiket: :subject',
        ],
        'user_registered' => [
            'subject' => 'Pengguna Baru Terdaftar',
            'greeting' => 'Halo Admin!',
            'line1' => 'Pengguna baru telah mendaftar.',
            'name' => '• Nama: :value',
            'email' => '• Email: :value',
            'action' => 'Lihat Pengguna',
            'title' => 'Pengguna Baru',
            'message' => ':name (:email) telah mendaftar.',
        ],

    ],
];

