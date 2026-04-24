<?php

return [
    // ==========================================
    // FRONTEND - PUBLIC
    // ==========================================
    'title' => 'Pusat Bantuan',
    'subtitle' => 'Temukan jawaban untuk pertanyaan Anda dan dapatkan bantuan yang Anda butuhkan',
    'search_placeholder' => 'Cari artikel...',
    'search_results' => 'Hasil pencarian untuk ":query"',
    'results' => 'hasil',
    'no_results' => 'Tidak ada artikel yang ditemukan sesuai pencarian Anda.',
    
    'browse_categories' => 'Jelajahi berdasarkan Kategori',
    'popular_articles' => 'Artikel Populer',
    'other_categories' => 'Kategori Lainnya',
    'related_articles' => 'Artikel Terkait',
    'articles' => 'artikel',
    
    'reading_time' => ':count menit baca',
    'views' => 'dilihat',
    'no_articles_in_category' => 'Belum ada artikel dalam kategori ini.',
    
    'back_to_category' => 'Kembali ke :category',
    'was_helpful' => 'Apakah artikel ini membantu?',
    'feedback_thanks' => 'Terima kasih atas masukan Anda!',
    'yes' => 'Ya',
    'no' => 'Tidak',
    
    'still_need_help' => 'Masih butuh bantuan?',
    'need_more_help' => 'Butuh bantuan lebih lanjut?',
    'contact_support_text' => 'Tim bantuan kami siap melayani Anda.',
    'contact_support' => 'Hubungi Bantuan',

    // ==========================================
    // ADMIN PANEL
    // ==========================================
    'admin' => [
        // Categories
        'categories' => [
            'title' => 'Kategori Bantuan',
            'description' => 'Kelola kategori pusat bantuan dan organisasinya.',
            'add' => 'Tambah Kategori',
            'edit' => 'Edit Kategori',
            'empty' => 'Kategori tidak ditemukan.',
            
            'table' => [
                'name' => 'Nama',
                'slug' => 'Slug',
                'articles' => 'Artikel',
                'status' => 'Status',
                'order' => 'Urutan',
            ],
            
            'filters' => [
                'search' => 'Cari kategori...',
                'all_status' => 'Semua Status',
            ],
            
            'form' => [
                'name' => 'Nama',
                'name_placeholder' => 'misal: Memulai',
                'slug' => 'Slug',
                'slug_placeholder' => 'memulai',
                'icon' => 'Ikon (Emoji atau SVG)',
                'icon_placeholder' => '🚀',
                'description' => 'Deskripsi',
                'description_placeholder' => 'Deskripsi singkat kategori ini...',
                'order' => 'Urutan',
                'active' => 'Aktif',
            ],
            
            'modals' => [
                'create' => [
                    'title' => 'Buat Kategori',
                    'cancel' => 'Batal',
                    'create' => 'Buat',
                    'update' => 'Perbarui',
                    'saving' => 'Menyimpan...',
                ],
                'edit' => [
                    'title' => 'Edit Kategori',
                ],
                'delete' => [
                    'title' => 'Hapus Kategori',
                    'confirm' => 'Apakah Anda yakin ingin menghapus kategori ini?',
                    'warning' => 'Semua artikel dalam kategori ini juga akan dihapus. Tindakan ini tidak dapat dibatalkan.',
                    'cancel' => 'Batal',
                    'submit' => 'Hapus Kategori',
                    'deleting' => 'Menghapus...',
                ],
            ],
            
            'messages' => [
                'created' => 'Kategori berhasil dibuat.',
                'updated' => 'Kategori berhasil diperbarui.',
                'deleted' => 'Kategori berhasil dihapus.',
            ],
            
            'confirm_delete' => 'Apakah Anda yakin ingin menghapus kategori ini? Semua artikel juga akan dihapus.',
        ],
        
        // Articles
        'articles' => [
            'title' => 'Artikel Bantuan',
            'description' => 'Kelola artikel dan konten pusat bantuan.',
            'add' => 'Tambah Artikel',
            'create' => 'Buat Artikel',
            'edit' => 'Edit Artikel',
            'new' => 'Artikel Baru',
            'empty' => 'Artikel tidak ditemukan.',
            'create_first' => 'Buat artikel pertama Anda',
            
            'table' => [
                'article' => 'Artikel',
                'category' => 'Kategori',
                'views' => 'Dilihat',
                'status' => 'Status',
                'published' => 'Diterbitkan',
            ],
            
            'filters' => [
                'search' => 'Cari artikel...',
                'all_categories' => 'Semua Kategori',
                'all_status' => 'Semua Status',
            ],
            
            'status' => [
                'published' => 'Diterbitkan',
                'draft' => 'Draft',
                'scheduled' => 'Dijadwalkan',
            ],
            
            'form' => [
                'title' => 'Judul',
                'title_placeholder' => 'Judul artikel...',
                'slug' => 'Slug',
                'slug_placeholder' => 'slug-url-artikel',
                'category' => 'Kategori',
                'select_category' => 'Pilih kategori',
                'content' => 'Konten',
                'content_placeholder' => 'Tulis konten artikel Anda di sini...',
                'published_at' => 'Tanggal Terbit',
                'order' => 'Urutan',
                'active' => 'Aktif',
                
                'seo' => 'Pengaturan SEO',
                'meta_title' => 'Judul Meta',
                'meta_title_placeholder' => 'Judul SEO (maks 70 karakter)',
                'meta_description' => 'Deskripsi Meta',
                'meta_description_placeholder' => 'Deskripsi SEO (maks 160 karakter)',
            ],
            
            'messages' => [
                'created' => 'Artikel berhasil dibuat.',
                'updated' => 'Artikel berhasil diperbarui.',
                'deleted' => 'Artikel berhasil dihapus.',
            ],
            
            'confirm_delete' => 'Apakah Anda yakin ingin menghapus artikel ini?',
        ],
    ],
];
