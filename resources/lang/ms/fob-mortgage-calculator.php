<?php

return [
    'name' => 'Kalkulator Gadai Janji',
    'years' => 'tahun',
    'year' => 'tahun',
    'month' => 'bulan',
    'months' => 'bulan',

    'methods' => [
        'decreasing_balance' => 'Baki Berkurangan',
        'fixed_payment' => 'Bayaran Tetap',
    ],

    'settings' => [
        'title' => 'Kalkulator Gadai Janji',
        'description' => 'Konfigurasikan nilai lalai untuk kalkulator gadai janji',
        'default_interest_rate' => 'Kadar faedah lalai (%)',
        'default_term_years' => 'Tempoh pinjaman lalai (tahun)',
        'default_down_payment_type' => 'Jenis bayaran muka lalai',
        'default_down_payment_value' => 'Nilai bayaran muka lalai',
        'show_extra_costs' => 'Tunjukkan kos tambahan',
        'show_extra_costs_helper' => 'Dayakan medan cukai hartanah, insurans dan yuran HOA dalam kalkulator',
        'term_options' => 'Pilihan tempoh pinjaman',
        'term_options_helper' => 'Senarai tempoh pinjaman yang tersedia dalam tahun, dipisahkan dengan koma (cth: 10,15,20,25,30)',
        'currency_symbol' => 'Simbol mata wang',
    ],

    'down_payment_types' => [
        'percent' => 'Peratus',
        'amount' => 'Jumlah Tetap',
    ],

    'shortcode' => [
        'name' => 'Kalkulator Gadai Janji',
        'description' => 'Paparkan kalkulator pembayaran gadai janji dengan lalai yang boleh disesuaikan',
        'style' => 'Gaya',
        'form_style' => 'Gaya Borang',
        'form_size' => 'Saiz Borang',
        'form_alignment' => 'Penjajaran Borang',
        'form_margin' => 'Margin Borang',
        'form_margin_helper' => 'Ruang di luar borang (cth: 20px, 1rem, 20px 0)',
        'form_padding' => 'Padding Borang',
        'form_padding_helper' => 'Ruang di dalam borang (cth: 20px, 1rem, 30px 20px)',
        'form_title' => 'Tajuk Borang',
        'form_description' => 'Keterangan Borang',
        'default_price' => 'Harga hartanah lalai',
        'default_price_helper' => 'Biarkan kosong untuk membenarkan pengguna memasukkan harga sendiri',
        'default_term' => 'Tempoh pinjaman lalai (tahun)',
        'default_rate' => 'Kadar faedah lalai (%)',
        'default_down_payment_type' => 'Jenis bayaran muka lalai',
        'default_down_payment_value' => 'Nilai bayaran muka lalai',
        'show_extra_costs' => 'Tunjukkan kos tambahan',
        'currency' => 'Simbol mata wang',
        'price_from' => 'Sumber harga',
        'price_from_helper' => 'Pilih dari mana untuk mendapatkan harga hartanah',
        'primary_color' => 'Warna Utama',
        'layout' => 'Susun Atur',
    ],

    'layouts' => [
        'horizontal' => 'Mendatar',
        'vertical' => 'Menegak',
    ],

    'styles' => [
        'default' => 'Lalai',
        'compact' => 'Padat',
    ],

    'form_styles' => [
        'default' => 'Lalai',
        'modern' => 'Moden',
        'minimal' => 'Minimal',
        'bold' => 'Tebal',
        'glass' => 'Glassmorphism',
    ],

    'form_sizes' => [
        'full' => 'Saiz Penuh (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Besar (992px)',
        'md' => 'Sederhana (768px)',
        'sm' => 'Kecil (576px)',
    ],

    'form_alignments' => [
        'start' => 'Kiri (Mula)',
        'center' => 'Tengah',
        'end' => 'Kanan (Tamat)',
    ],

    'price_from' => [
        'none' => 'Input Manual',
        'property' => 'Dari Hartanah',
    ],

    'fields' => [
        'property_price' => 'Harga Hartanah',
        'down_payment' => 'Bayaran Muka',
        'loan_amount' => 'Jumlah Pinjaman',
        'loan_term' => 'Tempoh Pinjaman',
        'interest_rate' => 'Kadar Faedah',
        'disbursement_date' => 'Tarikh Pengeluaran',
        'extra_costs' => 'Kos Tambahan (Pilihan)',
        'property_tax' => 'Cukai Hartanah',
        'insurance' => 'Insurans Rumah',
        'hoa' => 'Yuran HOA',
    ],

    'help' => [
        'down_payment_percent' => 'Masukkan sebagai peratus harga hartanah',
        'down_payment_amount' => 'Masukkan sebagai jumlah tetap',
        'loan_amount_hint' => 'Seret peluncur atau masukkan jumlah yang ingin dipinjam',
    ],

    'results' => [
        'monthly_pi' => 'P&I Bulanan',
        'monthly_payment' => 'Bayaran Bulanan',
        'total_monthly' => 'Jumlah Bulanan',
        'total_interest' => 'Jumlah Faedah',
        'total_paid' => 'Jumlah Keseluruhan',
        'from' => 'Dari',
        'to' => 'Ke',
        'view_details' => 'Lihat Butiran',
        'empty_state_title' => 'Kira Gadai Janji Anda',
        'empty_state_message' => 'Masukkan harga hartanah dan butiran pinjaman anda di atas untuk melihat anggaran bayaran bulanan dan jumlah faedah.',
    ],

    'amortization' => [
        'title' => 'Jadual Pelunasan',
        'chart' => 'Carta',
        'table' => 'Jadual',
        'period' => 'Tempoh',
        'payment' => 'Bayaran',
        'year' => 'Tahun',
        'principal' => 'Prinsipal',
        'interest' => 'Faedah',
        'balance' => 'Baki',
        'loan_amount' => 'Jumlah Pinjaman',
        'total_principal' => 'Jumlah Prinsipal',
        'total_interest' => 'Jumlah Faedah',
    ],

    'widget' => [
        'name' => 'Kalkulator Gadai Janji',
        'description' => 'Paparkan kalkulator gadai janji di bar sisi',
        'title' => 'Tajuk Widget',
        'leave_empty_for_default' => 'Biarkan kosong untuk menggunakan tetapan global',
        'use_default' => 'Guna Lalai',
    ],

    'errors' => [
        'property_price_required' => 'Harga hartanah mestilah lebih besar daripada 0',
        'loan_amount_required' => 'Jumlah pinjaman mestilah lebih besar daripada 0',
        'loan_amount_exceeds_price' => 'Jumlah pinjaman tidak boleh melebihi harga hartanah',
        'loan_term_required' => 'Tempoh pinjaman mestilah lebih besar daripada 0',
        'interest_rate_negative' => 'Kadar faedah tidak boleh negatif',
    ],
];
