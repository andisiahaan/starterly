<?php

return [
    // ==========================================
    // PAGES
    // ==========================================
    'pages' => [
        'title' => 'Halaman',
        'description' => 'Kelola halaman statis untuk situs web Anda.',
        'add' => 'Tambah Halaman',
        'edit' => 'Edit Halaman',
        
        'table' => [
            'title' => 'Judul',
            'slug' => 'Slug',
            'status' => 'Status',
            'updated' => 'Terakhir Diperbarui',
        ],
        
        'filters' => [
            'search' => 'Cari halaman...',
        ],
        
        'form' => [
            'title' => 'Judul Halaman',
            'slug' => 'Slug',
            'content' => 'Konten',
            'meta_title' => 'Judul Meta',
            'meta_description' => 'Deskripsi Meta',
            'is_active' => 'Diterbitkan',
        ],
        
        'empty' => 'Halaman tidak ditemukan.',
        
        'messages' => [
            'created' => 'Halaman berhasil dibuat.',
            'updated' => 'Halaman berhasil diperbarui.',
            'deleted' => 'Halaman berhasil dihapus.',
        ],
        
        'confirm' => [
            'delete' => 'Apakah Anda yakin ingin menghapus halaman ini?',
        ],
    ],

    // ==========================================
    // NEWS
    // ==========================================
    'news' => [
        'title' => 'Berita',
        'description' => 'Kelola berita dan pengumuman.',
        'add' => 'Tambah Berita',
        'edit' => 'Edit Berita',
        
        'table' => [
            'title' => 'Judul',
            'category' => 'Kategori',
            'status' => 'Status',
            'date' => 'Tanggal Terbit',
        ],
        
        'filters' => [
            'search' => 'Cari berita...',
            'all_categories' => 'Semua Kategori',
        ],
        
        'form' => [
            'title' => 'Judul',
            'slug' => 'Slug',
            'excerpt' => 'Kutipan',
            'content' => 'Konten',
            'category' => 'Kategori',
            'featured_image' => 'Gambar Unggulan',
            'is_featured' => 'Unggulan',
            'is_active' => 'Diterbitkan',
            'published_at' => 'Tanggal Terbit',
        ],
        
        'status' => [
            'draft' => 'Draft',
            'published' => 'Diterbitkan',
            'scheduled' => 'Dijadwalkan',
        ],
        
        'empty' => 'Berita tidak ditemukan.',
        
        'messages' => [
            'created' => 'Berita berhasil dibuat.',
            'updated' => 'Berita berhasil diperbarui.',
            'deleted' => 'Berita berhasil dihapus.',
        ],
        
        'confirm' => [
            'delete' => 'Apakah Anda yakin ingin menghapus berita ini?',
        ],
    ],
];
