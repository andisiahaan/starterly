<?php

return [
    // ==========================================
    // GENERAL
    // ==========================================
    'title' => 'Blog',
    'subtitle' => 'Temukan artikel, tips, dan wawasan terbaru kami',
    'latest_posts' => 'Postingan Terbaru',
    'featured_posts' => 'Postingan Unggulan',
    'related_posts' => 'Postingan Terkait',
    'all_posts' => 'Semua Postingan',
    'back_to_blog' => 'Kembali ke Blog',
    
    // Full page form translations
    'form' => [
        'add_new' => 'Tambah baru',
        'edit_post' => 'Edit Postingan',
        'create_post' => 'Buat Postingan Baru',
        'edit_subtitle' => 'Perbarui postingan blog Anda',
        'create_subtitle' => 'Tulis dan terbitkan postingan blog baru Anda',
        'back_to_posts' => 'Kembali ke Postingan',
        'title' => 'Judul',
        'title_placeholder' => 'Masukkan judul postingan',
        'excerpt' => 'Kutipan',
        'excerpt_placeholder' => 'Ringkasan singkat postingan (opsional)',
        'excerpt_help' => 'Deskripsi pendek yang ditampilkan dalam daftar postingan',
        'content' => 'Konten',
        'content_help' => 'Anda dapat menggunakan format HTML atau Markdown',
        'seo_settings' => 'Pengaturan SEO',
        'meta_title' => 'Judul Meta',
        'meta_title_placeholder' => 'Judul SEO (maks 70 karakter)',
        'meta_description' => 'Deskripsi Meta',
        'meta_description_placeholder' => 'Deskripsi SEO (maks 160 karakter)',
        'meta_keywords' => 'Kata Kunci Meta',
        'meta_keywords_placeholder' => 'Kata kunci dipisahkan dengan koma',
        'publish' => 'Terbitkan',
        'publish_date' => 'Tanggal Terbit',
        'featured_post' => 'Postingan Unggulan',
        'allow_comments' => 'Izinkan Komentar',
        'update_post' => 'Perbarui Postingan',
        'publish_post' => 'Terbitkan Postingan',
        'featured_image' => 'Gambar Unggulan',
        'no_categories' => 'Belum ada kategori.',
        'no_tags' => 'Belum ada tag.',
        'create_one' => 'Buat satu',
    ],

    // ==========================================
    // POSTS
    // ==========================================
    'posts' => [
        'title' => 'Postingan Blog',
        'description' => 'Kelola konten blog Anda',
        'new' => 'Postingan Baru',
        'create' => 'Buat Postingan Baru',
        'edit' => 'Edit Postingan',
        'write' => 'Tulis dan terbitkan postingan blog baru Anda',
        'update' => 'Perbarui postingan blog Anda',
        
        'table' => [
            'post' => 'Postingan',
            'author' => 'Penulis',
            'categories' => 'Kategori',
            'status' => 'Status',
            'views' => 'Dilihat',
        ],
        
        'filters' => [
            'search' => 'Cari postingan...',
            'all_status' => 'Semua Status',
        ],
        
        'form' => [
            'title' => 'Judul',
            'title_placeholder' => 'Masukkan judul postingan',
            'slug' => 'Slug',
            'excerpt' => 'Kutipan',
            'excerpt_description' => 'Deskripsi pendek yang ditampilkan dalam daftar postingan',
            'excerpt_placeholder' => 'Ringkasan singkat postingan (opsional)',
            'content' => 'Konten',
            'content_placeholder' => 'Tulis konten Anda di sini...',
            'content_help' => 'Anda dapat menggunakan format HTML atau Markdown',
            'featured_image' => 'Gambar Unggulan',
        ],
        
        // Additional shared form labels
        'parent_category' => 'Kategori Induk',
        'order' => 'Urutan',
        'slug' => 'Slug',
        
        'publish' => [
            'title' => 'Terbitkan',
            'status' => 'Status',
            'publish_date' => 'Tanggal Terbit',
            'featured' => 'Postingan Unggulan',
            'allow_comments' => 'Izinkan Komentar',
            'button' => 'Terbitkan Postingan',
            'update_button' => 'Perbarui Postingan',
        ],
        
        'seo' => [
            'title' => 'Pengaturan SEO',
            'meta_title' => 'Judul Meta',
            'meta_title_placeholder' => 'Judul SEO (maks 70 karakter)',
            'meta_description' => 'Deskripsi Meta',
            'meta_description_placeholder' => 'Deskripsi SEO (maks 160 karakter)',
            'meta_keywords' => 'Kata Kunci Meta',
            'meta_keywords_placeholder' => 'Kata kunci dipisahkan dengan koma',
        ],
        
        'status' => [
            'draft' => 'Draft',
            'published' => 'Diterbitkan',
            'scheduled' => 'Dijadwalkan',
            'archived' => 'Diarsipkan',
        ],
        
        'empty' => 'Postingan tidak ditemukan.',
        'create_first' => 'Buat postingan pertama Anda',
        
        'messages' => [
            'created' => 'Postingan berhasil dibuat.',
            'updated' => 'Postingan berhasil diperbarui.',
            'deleted' => 'Postingan berhasil dihapus.',
        ],
    ],

    // ==========================================
    // CATEGORIES
    // ==========================================
    'categories' => [
        'title' => 'Kategori Blog',
        'description' => 'Kelola kategori postingan blog',
        'add' => 'Tambah Kategori',
        'edit' => 'Edit Kategori',
        
        'table' => [
            'name' => 'Nama',
            'slug' => 'Slug',
            'posts' => 'Postingan',
            'status' => 'Status',
        ],
        
        'form' => [
            'name' => 'Nama',
            'slug' => 'Slug',
            'parent' => 'Kategori Induk',
            'parent_none' => 'Tidak Ada',
            'description' => 'Deskripsi',
            'order' => 'Urutan',
            'active' => 'Aktif',
            'name_placeholder' => 'Masukkan nama kategori',
        ],
        
        'empty' => 'Kategori tidak ditemukan.',
        
        'messages' => [
            'created' => 'Kategori berhasil dibuat.',
            'updated' => 'Kategori berhasil diperbarui.',
            'deleted' => 'Kategori berhasil dihapus.',
            'has_posts' => 'Tidak dapat menghapus kategori yang memiliki postingan. Hapus postingan terlebih dahulu.',
        ],
        'validation' => [
            'name_required' => 'Nama kategori wajib diisi.',
        ],
    ],

    // ==========================================
    // TAGS
    // ==========================================
    'tags' => [
        'title' => 'Tag Blog',
        'description' => 'Kelola tag postingan blog',
        'add' => 'Tambah Tag',
        'edit' => 'Edit Tag',
        
        'form' => [
            'name' => 'Nama',
            'slug' => 'Slug',
            'description' => 'Deskripsi',
            'name_placeholder' => 'Masukkan nama tag',
        ],
        
        'posts_count' => ':count postingan',
        'empty' => 'Tag tidak ditemukan.',
        
        'messages' => [
            'created' => 'Tag berhasil dibuat.',
            'updated' => 'Tag berhasil diperbarui.',
            'deleted' => 'Tag berhasil dihapus.',
        ],
        'validation' => [
            'name_required' => 'Nama tag wajib diisi.',
        ],
    ],

    // ==========================================
    // PUBLIC BLOG
    // ==========================================
    'public' => [
        'search' => 'Cari...',
        'categories' => 'Kategori',
        'tags' => 'Tag',
        'share' => 'Bagikan',
        'reading_time' => ':count menit baca',
        'views' => ':count dilihat',
        'written_by' => 'Ditulis oleh',
        'published_on' => 'Diterbitkan pada',
        'no_posts' => 'Artikel tidak ditemukan.',
        'no_posts_category' => 'Belum ada postingan dalam kategori ini.',
        'no_posts_tag' => 'Belum ada postingan dengan tag ini.',
    ],
];
