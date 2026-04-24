<?php

return [
    // ==========================================
    // ACTIONS
    // ==========================================
    'actions' => [
        'save' => 'Simpan',
        'save_changes' => 'Simpan Perubahan',
        'cancel' => 'Batal',
        'delete' => 'Hapus',
        'edit' => 'Edit',
        'create' => 'Buat',
        'update' => 'Perbarui',
        'close' => 'Tutup',
        'submit' => 'Kirim',
        'confirm' => 'Konfirmasi',
        'search' => 'Cari',
        'filter' => 'Filter',
        'export' => 'Ekspor',
        'export_csv' => 'Ekspor CSV',
        'import' => 'Impor',
        'back' => 'Kembali',
        'back_to' => 'Kembali ke :page',
        'add' => 'Tambah',
        'remove' => 'Hapus',
        'view' => 'Lihat',
        'view_all' => 'Lihat Semua',
        'show' => 'Tampilkan',
        'hide' => 'Sembunyikan',
        'upload' => 'Unggah',
        'download' => 'Unduh',
        'refresh' => 'Muat Ulang',
        'reset' => 'Reset',
        'clear' => 'Bersihkan',
        'apply' => 'Terapkan',
        'select' => 'Pilih',
        'select_all' => 'Pilih Semua',
        'deselect_all' => 'Batal Pilih Semua',
        'copy' => 'Salin',
        'copied' => 'Berhasil disalin!',
        'share' => 'Bagikan',
        'continue' => 'Lanjutkan',
        'previous' => 'Sebelumnya',
        'next' => 'Selanjutnya',
        'finish' => 'Selesai',
        'loading' => 'Memuat...',
        'processing' => 'Memproses...',
        'sending' => 'Mengirim',
        'learn_more' => 'Pelajari selengkapnya',
        'read_more' => 'Baca selengkapnya',
        'enable_all' => 'Aktifkan semua',
        'disable_all' => 'Nonaktifkan semua',
    ],
    
    // Common Labels
    'required' => 'Wajib',
    'security' => 'Keamanan',
    'none' => 'Tidak ada',
    'verified_at' => 'Diverifikasi Pada',
    'current_status' => 'Status Saat Ini',
    'new_status' => 'Status Baru',
    'note_optional' => 'Catatan (opsional)',
    'note_placeholder' => 'Tambah catatan...',
    'processing' => 'Memproses...',
    'loading' => 'Memuat...',

    // ==========================================
    // STATUS
    // ==========================================
    'status' => [
        'active' => 'Aktif',
        'inactive' => 'Tidak Aktif',
        'enabled' => 'Diaktifkan',
        'disabled' => 'Dinonaktifkan',
        'pending' => 'Menunggu',
        'approved' => 'Disetujui',
        'rejected' => 'Ditolak',
        'completed' => 'Selesai',
        'cancelled' => 'Dibatalkan',
        'failed' => 'Gagal',
        'success' => 'Berhasil',
        'error' => 'Gagal',
        'warning' => 'Peringatan',
        'info' => 'Info',
        'draft' => 'Draft',
        'published' => 'Diterbitkan',
        'scheduled' => 'Dijadwalkan',
        'archived' => 'Diarsipkan',
        'open' => 'Terbuka',
        'closed' => 'Tertutup',
        'in_progress' => 'Sedang Diproses',
        'on_hold' => 'Ditunda',
        'verified' => 'Terverifikasi',
        'unverified' => 'Belum Verifikasi',
        'banned' => 'Diblokir',
        'featured' => 'Unggulan',
    ],

    // ==========================================
    // CONFIRMATIONS
    // ==========================================
    'confirm' => [
        'are_you_sure' => 'Apakah Anda yakin?',
        'cannot_undo' => 'Tindakan ini tidak dapat dibatalkan.',
        'delete' => 'Apakah Anda yakin ingin menghapus ini?',
        'delete_item' => 'Apakah Anda yakin ingin menghapus :item ini?',
        'proceed' => 'Apakah Anda ingin melanjutkan?',
    ],

    // ==========================================
    // EMPTY STATES
    // ==========================================
    'empty' => [
        'no_data' => 'Data tidak ditemukan.',
        'no_results' => 'Hasil tidak ditemukan.',
        'no_items' => ':items tidak ditemukan.',
        'empty_list' => 'Daftar kosong.',
        'nothing_here' => 'Belum ada apa-apa di sini.',
    ],

    // ==========================================
    // TABLE
    // ==========================================
    'table' => [
        'actions' => 'Aksi',
        'status' => 'Status',
        'name' => 'Nama',
        'email' => 'Email',
        'date' => 'Tanggal',
        'created_at' => 'Dibuat',
        'updated_at' => 'Diperbarui',
        'description' => 'Deskripsi',
        'type' => 'Tipe',
        'showing' => 'Menampilkan :from sampai :to dari :total hasil',
    ],

    // ==========================================
    // FORM
    // ==========================================
    'form' => [
        'required' => 'Wajib',
        'optional' => 'Opsional',
        'select_option' => 'Pilih opsi',
        'select_placeholder' => 'Pilih...',
        'search_placeholder' => 'Cari...',
        'enter' => 'Masukkan :field',
        'choose_file' => 'Pilih file',
        'no_file' => 'Tidak ada file terpilih',
        'drag_drop' => 'Seret dan lepas atau klik untuk unggah',
        'max_size' => 'Ukuran file maksimum: :size',
        'allowed_types' => 'Tipe yang diizinkan: :types',
    ],

    // ==========================================
    // VALIDATION MESSAGES (common)
    // ==========================================
    'validation' => [
        'required' => 'Bidang ini wajib diisi.',
        'email' => 'Harap masukkan alamat email yang valid.',
        'min' => 'Minimal :min karakter.',
        'max' => 'Tidak boleh melebihi :max karakter.',
        'confirmed' => 'Konfirmasi tidak cocok.',
        'unique' => 'Nilai ini sudah digunakan.',
        'invalid' => 'Nilai tidak valid.',
    ],

    // ==========================================
    // TIME
    // ==========================================
    'time' => [
        'just_now' => 'Baru saja',
        'seconds_ago' => ':count detik yang lalu',
        'minutes_ago' => ':count menit yang lalu',
        'hours_ago' => ':count jam yang lalu',
        'days_ago' => ':count hari yang lalu',
        'weeks_ago' => ':count minggu yang lalu',
        'months_ago' => ':count bulan yang lalu',
        'years_ago' => ':count tahun yang lalu',
        'min_read' => ':count mnt baca',
    ],

    // ==========================================
    // MISC
    // ==========================================
    'yes' => 'Ya',
    'no' => 'Tidak',
    'none' => 'Tidak ada',
    'all' => 'Semua',
    'other' => 'Lainnya',
    'unknown' => 'Tidak diketahui',
    'n_a' => 'N/A',
    'or' => 'atau',
    'and' => 'dan',
    'of' => 'dari',
    'to' => 'ke',
    'from' => 'dari',
    'optional' => 'Opsional',
    'tips' => 'Tips',
    
    // ==========================================
    // NAVIGATION
    // ==========================================
    'nav' => [
        'login' => 'Masuk',
        'register' => 'Daftar',
        'logout' => 'Keluar',
        'dashboard' => 'Beranda',
        'home' => 'Beranda',
        'account_settings' => 'Pengaturan Akun',
        'activity_log' => 'Log Aktivitas',
        'search' => 'Cari...',
        
        // Public navigation
        'services' => 'Layanan',
        'view_all_services' => 'Lihat semua layanan',
        'pricing' => 'Harga',
        'about' => 'Tentang',
        'contact' => 'Kontak',
        
        // Sidebar menu items
        'support' => 'Bantuan',
        'support_tickets' => 'Tiket Bantuan',
        'news_updates' => 'Berita & Update',
        'referral' => 'Referral',
        'referral_program' => 'Program Referral',
        'developer' => 'Developer',
        'api_tokens' => 'Token API',
        'api_docs' => 'Dokumentasi API',
        'administration' => 'Administrasi',
        'admin_panel' => 'Panel Admin',
        'help_center' => 'Pusat Bantuan',
        
        // Footer links
        'company' => 'Perusahaan',
        'about_us' => 'Tentang Kami',
        'contact_us' => 'Hubungi Kami',
        'help_center' => 'Pusat Bantuan',
        'legal' => 'Legal',
        'privacy_policy' => 'Kebijakan Privasi',
        'terms_of_service' => 'Syarat dan Ketentuan',
        'disclaimer' => 'Sanggahan',
    ],
    
    // ==========================================
    // FOOTER
    // ==========================================
    'footer' => [
        'subscribe_title' => 'Berlangganan newsletter kami',
        'subscribe_desc' => 'Dapatkan pembaruan dan promosi terbaru langsung di kotak masuk Anda.',
        'email_placeholder' => 'Masukkan email Anda',
        'subscribe' => 'Berlangganan',
        'rights' => 'Seluruh hak cipta.',
        'status' => 'Status',
        'sitemap' => 'Sitemap',
    ],
];
