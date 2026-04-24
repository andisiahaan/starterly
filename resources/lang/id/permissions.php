<?php

return [
    // ==========================================
    // PERMISSIONS
    // ==========================================
    'title' => 'Izin',
    'description' => 'Kelola izin terperinci dan tetapkan ke peran.',
    'add' => 'Tambah Izin',
    'edit' => 'Edit Izin',
    'search' => 'Cari izin...',
    
    'table' => [
        'permission' => 'Izin',
        'guard' => 'Guard',
        'assigned_to' => 'Ditetapkan Ke',
    ],
    
    'form' => [
        'name' => 'Nama Izin',
        'guard_name' => 'Nama Guard',
    ],
    
    'roles_count' => ':count peran',
    'empty' => 'Izin tidak ditemukan.',
    
    'messages' => [
        'created' => 'Izin berhasil dibuat.',
        'updated' => 'Izin berhasil diperbarui.',
        'deleted' => 'Izin berhasil dihapus.',
    ],
];
