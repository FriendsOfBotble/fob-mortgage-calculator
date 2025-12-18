<?php

return [
    'name' => 'İpotek Hesaplayıcı',
    'years' => 'yıl',
    'year' => 'yıl',
    'month' => 'ay',
    'months' => 'ay',

    'methods' => [
        'decreasing_balance' => 'Azalan Bakiye',
        'fixed_payment' => 'Sabit Ödeme',
    ],

    'settings' => [
        'title' => 'İpotek Hesaplayıcı',
        'description' => 'İpotek hesaplayıcı için varsayılan değerleri yapılandırın',
        'default_interest_rate' => 'Varsayılan Faiz Oranı (%)',
        'default_term_years' => 'Varsayılan Kredi Vadesi (yıl)',
        'default_down_payment_type' => 'Varsayılan Peşinat Türü',
        'default_down_payment_value' => 'Varsayılan Peşinat Değeri',
        'show_extra_costs' => 'Ekstra Maliyetleri Göster',
        'show_extra_costs_helper' => 'Hesaplayıcıda emlak vergisi, sigorta ve HOA ücreti alanlarını etkinleştir',
        'term_options' => 'Kredi Vadesi Seçenekleri',
        'term_options_helper' => 'Virgülle ayrılmış mevcut kredi vadeleri listesi (örn., 10,15,20,25,30)',
        'currency_symbol' => 'Para Birimi Sembolü',
    ],

    'down_payment_types' => [
        'percent' => 'Yüzde',
        'amount' => 'Sabit Tutar',
    ],

    'shortcode' => [
        'name' => 'İpotek Hesaplayıcı',
        'description' => 'Özelleştirilebilir varsayılanlarla ipotek ödeme hesaplayıcısı görüntüle',
        'style' => 'Stil',
        'form_style' => 'Form Stili',
        'form_size' => 'Form Boyutu',
        'form_alignment' => 'Form Hizalaması',
        'form_margin' => 'Form Kenar Boşluğu',
        'form_margin_helper' => 'Form dışındaki boşluk (örn. 20px, 1rem, 20px 0)',
        'form_padding' => 'Form İç Boşluğu',
        'form_padding_helper' => 'Form içindeki boşluk (örn. 20px, 1rem, 30px 20px)',
        'form_title' => 'Form Başlığı',
        'form_description' => 'Form Açıklaması',
        'default_price' => 'Varsayılan Emlak Fiyatı',
        'default_price_helper' => 'Kullanıcıların kendi fiyatlarını girmesine izin vermek için boş bırakın',
        'default_term' => 'Varsayılan Kredi Vadesi (yıl)',
        'default_rate' => 'Varsayılan Faiz Oranı (%)',
        'default_down_payment_type' => 'Varsayılan Peşinat Türü',
        'default_down_payment_value' => 'Varsayılan Peşinat Değeri',
        'show_extra_costs' => 'Ekstra Maliyetleri Göster',
        'currency' => 'Para Birimi Sembolü',
        'price_from' => 'Fiyat Kaynağı',
        'price_from_helper' => 'Emlak fiyatının nereden alınacağını seçin',
        'primary_color' => 'Ana Renk',
        'layout' => 'Düzen',
    ],

    'layouts' => [
        'horizontal' => 'Yatay',
        'vertical' => 'Dikey',
    ],

    'styles' => [
        'default' => 'Varsayılan',
        'compact' => 'Kompakt',
    ],

    'form_styles' => [
        'default' => 'Varsayılan',
        'modern' => 'Modern',
        'minimal' => 'Minimal',
        'bold' => 'Kalın',
        'glass' => 'Cam Efekti',
    ],

    'form_sizes' => [
        'full' => 'Tam Boyut (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Büyük (992px)',
        'md' => 'Orta (768px)',
        'sm' => 'Küçük (576px)',
    ],

    'form_alignments' => [
        'start' => 'Sol (Başlangıç)',
        'center' => 'Orta',
        'end' => 'Sağ (Son)',
    ],

    'price_from' => [
        'none' => 'Manuel Giriş',
        'property' => 'Emlaktan',
    ],

    'fields' => [
        'property_price' => 'Emlak Fiyatı',
        'down_payment' => 'Peşinat',
        'loan_amount' => 'Kredi Tutarı',
        'loan_term' => 'Kredi Vadesi',
        'interest_rate' => 'Faiz Oranı',
        'disbursement_date' => 'Ödeme Tarihi',
        'extra_costs' => 'Ek Maliyetler (İsteğe Bağlı)',
        'property_tax' => 'Emlak Vergisi',
        'insurance' => 'Ev Sigortası',
        'hoa' => 'HOA Ücretleri',
    ],

    'help' => [
        'down_payment_percent' => 'Emlak fiyatının yüzdesi olarak girin',
        'down_payment_amount' => 'Sabit tutar olarak girin',
        'loan_amount_hint' => 'Kaydırıcıyı sürükleyin veya ödünç almak istediğiniz tutarı girin',
    ],

    'results' => [
        'monthly_pi' => 'Aylık A&F',
        'monthly_payment' => 'Aylık Ödeme',
        'total_monthly' => 'Toplam Aylık',
        'total_interest' => 'Toplam Faiz',
        'total_paid' => 'Toplam Tutar',
        'from' => 'Başlangıç',
        'to' => 'Bitiş',
        'view_details' => 'Detayları Görüntüle',
        'empty_state_title' => 'İpoteğinizi Hesaplayın',
        'empty_state_message' => 'Tahmini aylık ödemeleri ve toplam faizi görmek için yukarıya emlak fiyatınızı ve kredi detaylarınızı girin.',
    ],

    'amortization' => [
        'title' => 'Amortisman Tablosu',
        'chart' => 'Grafik',
        'table' => 'Tablo',
        'period' => 'Dönem',
        'payment' => 'Ödeme',
        'year' => 'Yıl',
        'principal' => 'Ana Para',
        'interest' => 'Faiz',
        'balance' => 'Bakiye',
        'loan_amount' => 'Kredi Tutarı',
        'total_principal' => 'Toplam Ana Para',
        'total_interest' => 'Toplam Faiz',
    ],

    'widget' => [
        'name' => 'İpotek Hesaplayıcı',
        'description' => 'Kenar çubuğunda ipotek hesaplayıcısını görüntüle',
        'title' => 'Widget Başlığı',
        'leave_empty_for_default' => 'Genel ayarları kullanmak için boş bırakın',
        'use_default' => 'Varsayılanı Kullan',
    ],

    'errors' => [
        'property_price_required' => 'Emlak fiyatı 0\'dan büyük olmalıdır',
        'loan_amount_required' => 'Kredi tutarı 0\'dan büyük olmalıdır',
        'loan_amount_exceeds_price' => 'Kredi tutarı emlak fiyatını aşamaz',
        'loan_term_required' => 'Kredi vadesi 0\'dan büyük olmalıdır',
        'interest_rate_negative' => 'Faiz oranı negatif olamaz',
    ],
];
