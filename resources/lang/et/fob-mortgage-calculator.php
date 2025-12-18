<?php

return [
    'name' => 'Hüpoteeklaenu Kalkulaator',
    'years' => 'aastat',
    'year' => 'aasta',
    'month' => 'kuu',
    'months' => 'kuud',

    'methods' => [
        'decreasing_balance' => 'Vähenev Saldo',
        'fixed_payment' => 'Fikseeritud Makse',
    ],

    'settings' => [
        'title' => 'Hüpoteeklaenu Kalkulaator',
        'description' => 'Seadista hüpoteeklaenu kalkulaatori vaikeväärtused',
        'default_interest_rate' => 'Vaikimisi Intressimäär (%)',
        'default_term_years' => 'Vaikimisi Laenuperiood (aastat)',
        'default_down_payment_type' => 'Vaikimisi Sissemakse Tüüp',
        'default_down_payment_value' => 'Vaikimisi Sissemakse Väärtus',
        'show_extra_costs' => 'Näita Lisatasusid',
        'show_extra_costs_helper' => 'Luba kinnisvara maks, kindlustus ja HOA tasude väljad kalkulaatoris',
        'term_options' => 'Laenuperioodide Valikud',
        'term_options_helper' => 'Komadega eraldatud nimekiri saadaolevatest laenuperioodidest aastates (nt 10,15,20,25,30)',
        'currency_symbol' => 'Valuuta Sümbol',
    ],

    'down_payment_types' => [
        'percent' => 'Protsent',
        'amount' => 'Fikseeritud Summa',
    ],

    'shortcode' => [
        'name' => 'Hüpoteeklaenu Kalkulaator',
        'description' => 'Kuva hüpoteeklaenu kalkulaator kohandatavate vaikeväärtustega',
        'style' => 'Stiil',
        'form_style' => 'Vormi Stiil',
        'form_size' => 'Vormi Suurus',
        'form_alignment' => 'Vormi Joondus',
        'form_margin' => 'Vormi Veerised',
        'form_margin_helper' => 'Ruum vormi välisküljel (nt 20px, 1rem, 20px 0)',
        'form_padding' => 'Vormi Polsterdus',
        'form_padding_helper' => 'Ruum vormi sees (nt 20px, 1rem, 30px 20px)',
        'form_title' => 'Vormi Pealkiri',
        'form_description' => 'Vormi Kirjeldus',
        'default_price' => 'Vaikimisi Kinnisvara Hind',
        'default_price_helper' => 'Jäta tühjaks, et kasutajad saaksid sisestada oma hinna',
        'default_term' => 'Vaikimisi Laenuperiood (aastat)',
        'default_rate' => 'Vaikimisi Intressimäär (%)',
        'default_down_payment_type' => 'Vaikimisi Sissemakse Tüüp',
        'default_down_payment_value' => 'Vaikimisi Sissemakse Väärtus',
        'show_extra_costs' => 'Näita Lisatasusid',
        'currency' => 'Valuuta Sümbol',
        'price_from' => 'Hinna Allikas',
        'price_from_helper' => 'Vali, kust kinnisvara hinda saada',
        'primary_color' => 'Põhivärv',
        'layout' => 'Paigutus',
    ],

    'layouts' => [
        'horizontal' => 'Horisontaalne',
        'vertical' => 'Vertikaalne',
    ],

    'styles' => [
        'default' => 'Vaikimisi',
        'compact' => 'Kompaktne',
    ],

    'form_styles' => [
        'default' => 'Vaikimisi',
        'modern' => 'Kaasaegne',
        'minimal' => 'Minimaalne',
        'bold' => 'Julge',
        'glass' => 'Klaasimorfism',
    ],

    'form_sizes' => [
        'full' => 'Täissuurus (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Suur (992px)',
        'md' => 'Keskmine (768px)',
        'sm' => 'Väike (576px)',
    ],

    'form_alignments' => [
        'start' => 'Vasakul (Algus)',
        'center' => 'Keskel',
        'end' => 'Paremal (Lõpp)',
    ],

    'price_from' => [
        'none' => 'Käsitsi Sisestamine',
        'property' => 'Kinnistvarast',
    ],

    'fields' => [
        'property_price' => 'Kinnisvara Hind',
        'down_payment' => 'Sissemakse',
        'loan_amount' => 'Laenusumma',
        'loan_term' => 'Laenuperiood',
        'interest_rate' => 'Intressimäär',
        'disbursement_date' => 'Väljamaksmise Kuupäev',
        'extra_costs' => 'Lisakulud (Valikuline)',
        'property_tax' => 'Kinnisvara Maks',
        'insurance' => 'Kodukindlustus',
        'hoa' => 'HOA Tasud',
    ],

    'help' => [
        'down_payment_percent' => 'Sisesta protsendina kinnisvara hinnast',
        'down_payment_amount' => 'Sisesta fikseeritud summana',
        'loan_amount_hint' => 'Lohista liugurit või sisesta summa, mida soovid laenata',
    ],

    'results' => [
        'monthly_pi' => 'Igakuine P&I',
        'monthly_payment' => 'Igakuine Makse',
        'total_monthly' => 'Kokku Igakuiselt',
        'total_interest' => 'Kokku Intressi',
        'total_paid' => 'Kogusumma',
        'from' => 'Alates',
        'to' => 'Kuni',
        'view_details' => 'Vaata Üksikasju',
        'empty_state_title' => 'Arvuta Oma Hüpoteek',
        'empty_state_message' => 'Sisesta üleval kinnisvara hind ja laenu üksikasjad, et näha hinnangulisi igakuiseid makseid ja kogutud intressi.',
    ],

    'amortization' => [
        'title' => 'Amortisatsiooni Graafik',
        'chart' => 'Graafik',
        'table' => 'Tabel',
        'period' => 'Periood',
        'payment' => 'Makse',
        'year' => 'Aasta',
        'principal' => 'Põhisumma',
        'interest' => 'Intress',
        'balance' => 'Saldo',
        'loan_amount' => 'Laenusumma',
        'total_principal' => 'Kokku Põhisumma',
        'total_interest' => 'Kokku Intress',
    ],

    'widget' => [
        'name' => 'Hüpoteeklaenu Kalkulaator',
        'description' => 'Kuva hüpoteeklaenu kalkulaator külgribal',
        'title' => 'Vidina Pealkiri',
        'leave_empty_for_default' => 'Jäta tühjaks globaalsete sätete kasutamiseks',
        'use_default' => 'Kasuta Vaikimisi',
    ],

    'errors' => [
        'property_price_required' => 'Kinnisvara hind peab olema suurem kui 0',
        'loan_amount_required' => 'Laenu summa peab olema suurem kui 0',
        'loan_amount_exceeds_price' => 'Laenu summa ei tohi ületada kinnisvara hinda',
        'loan_term_required' => 'Laenuperiood peab olema suurem kui 0',
        'interest_rate_negative' => 'Intressimäär ei saa olla negatiivne',
    ],
];
