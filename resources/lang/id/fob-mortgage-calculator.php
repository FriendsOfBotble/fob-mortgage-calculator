<?php

return [
    'name' => 'Kalkulator Hipotek',
    'years' => 'tahun',
    'year' => 'tahun',
    'month' => 'bulan',
    'months' => 'bulan',

    'methods' => [
        'decreasing_balance' => 'Saldo Menurun',
        'fixed_payment' => 'Pembayaran Tetap',
    ],

    'settings' => [
        'title' => 'Kalkulator Hipotek',
        'description' => 'Konfigurasi nilai default untuk kalkulator hipotek',
        'default_interest_rate' => 'Suku bunga default (%)',
        'default_term_years' => 'Jangka waktu pinjaman default (tahun)',
        'default_down_payment_type' => 'Jenis uang muka default',
        'default_down_payment_value' => 'Nilai uang muka default',
        'show_extra_costs' => 'Tampilkan biaya tambahan',
        'show_extra_costs_helper' => 'Aktifkan kolom pajak properti, asuransi, dan biaya HOA di kalkulator',
        'term_options' => 'Opsi jangka waktu pinjaman',
        'term_options_helper' => 'Daftar jangka waktu pinjaman yang tersedia dalam tahun, dipisahkan koma (contoh: 10,15,20,25,30)',
        'currency_symbol' => 'Simbol mata uang',
    ],

    'down_payment_types' => [
        'percent' => 'Persentase',
        'amount' => 'Jumlah Tetap',
    ],

    'shortcode' => [
        'name' => 'Kalkulator Hipotek',
        'description' => 'Tampilkan kalkulator pembayaran hipotek dengan default yang dapat disesuaikan',
        'style' => 'Gaya',
        'form_style' => 'Gaya Formulir',
        'form_size' => 'Ukuran Formulir',
        'form_alignment' => 'Perataan Formulir',
        'form_margin' => 'Margin Formulir',
        'form_padding' => 'Padding Formulir',
        'form_title' => 'Judul Formulir',
        'form_description' => 'Deskripsi Formulir',
        'default_price' => 'Harga properti default',
        'default_price_helper' => 'Biarkan kosong agar pengguna memasukkan harga sendiri',
        'default_term' => 'Jangka waktu pinjaman default (tahun)',
        'default_rate' => 'Suku bunga default (%)',
        'default_down_payment_type' => 'Jenis uang muka default',
        'default_down_payment_value' => 'Nilai uang muka default',
        'show_extra_costs' => 'Tampilkan biaya tambahan',
        'currency' => 'Simbol mata uang',
        'price_from' => 'Sumber harga',
        'price_from_helper' => 'Pilih dari mana mendapatkan harga properti',
        'primary_color' => 'Warna Utama',
        'layout' => 'Tata Letak',
    ],

    'layouts' => [
        'horizontal' => 'Horizontal',
        'vertical' => 'Vertikal',
    ],

    'styles' => [
        'default' => 'Default',
        'compact' => 'Kompak',
    ],

    'form_styles' => [
        'default' => 'Default',
        'modern' => 'Modern',
        'minimal' => 'Minimal',
        'bold' => 'Tebal',
        'glass' => 'Glassmorphism',
    ],

    'form_sizes' => [
        'full' => 'Ukuran Penuh (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Besar (992px)',
        'md' => 'Sedang (768px)',
        'sm' => 'Kecil (576px)',
    ],

    'form_alignments' => [
        'start' => 'Kiri (Awal)',
        'center' => 'Tengah',
        'end' => 'Kanan (Akhir)',
    ],

    'spacing' => [
        'none' => 'Tidak Ada',
        'sm' => 'Kecil',
        'default' => 'Default',
        'lg' => 'Besar',
        'xl' => 'Sangat Besar',
    ],

    'price_from' => [
        'none' => 'Input Manual',
        'property' => 'Dari Properti',
    ],

    'fields' => [
        'property_price' => 'Harga Properti',
        'down_payment' => 'Uang Muka',
        'loan_amount' => 'Jumlah Pinjaman',
        'loan_term' => 'Jangka Waktu Pinjaman',
        'interest_rate' => 'Suku Bunga',
        'disbursement_date' => 'Tanggal Pencairan',
        'extra_costs' => 'Biaya Tambahan (Opsional)',
        'property_tax' => 'Pajak Properti',
        'insurance' => 'Asuransi Rumah',
        'hoa' => 'Biaya HOA',
    ],

    'help' => [
        'down_payment_percent' => 'Masukkan sebagai persentase dari harga properti',
        'down_payment_amount' => 'Masukkan sebagai jumlah tetap',
        'loan_amount_hint' => 'Geser slider atau masukkan jumlah yang ingin dipinjam',
    ],

    'results' => [
        'monthly_pi' => 'P&I Bulanan',
        'monthly_payment' => 'Pembayaran Bulanan',
        'total_monthly' => 'Total Bulanan',
        'total_interest' => 'Total Bunga',
        'total_paid' => 'Total Jumlah',
        'from' => 'Dari',
        'to' => 'Ke',
        'view_details' => 'Lihat Detail',
    ],

    'amortization' => [
        'title' => 'Jadwal Amortisasi',
        'chart' => 'Grafik',
        'table' => 'Tabel',
        'period' => 'Periode',
        'payment' => 'Pembayaran',
        'year' => 'Tahun',
        'principal' => 'Pokok',
        'interest' => 'Bunga',
        'balance' => 'Saldo',
        'loan_amount' => 'Jumlah Pinjaman',
        'total_principal' => 'Total Pokok',
        'total_interest' => 'Total Bunga',
    ],

    'widget' => [
        'name' => 'Kalkulator Hipotek',
        'description' => 'Tampilkan kalkulator hipotek di sidebar',
        'title' => 'Judul Widget',
        'leave_empty_for_default' => 'Biarkan kosong untuk menggunakan pengaturan global',
        'use_default' => 'Gunakan Default',
    ],
];
