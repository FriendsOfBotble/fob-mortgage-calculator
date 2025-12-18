<?php

return [
    'name' => 'Calculator ipotecar',
    'years' => 'ani',
    'year' => 'an',
    'month' => 'lună',
    'months' => 'luni',

    'methods' => [
        'decreasing_balance' => 'Sold descrescător',
        'fixed_payment' => 'Rată fixă',
    ],

    'settings' => [
        'title' => 'Calculator ipotecar',
        'description' => 'Configurați valorile implicite pentru calculatorul ipotecar',
        'default_interest_rate' => 'Rata dobânzii implicită (%)',
        'default_term_years' => 'Perioada implicită de creditare (ani)',
        'default_down_payment_type' => 'Tipul avansului implicit',
        'default_down_payment_value' => 'Valoarea avansului implicit',
        'show_extra_costs' => 'Afișare costuri suplimentare',
        'show_extra_costs_helper' => 'Activați câmpurile pentru impozit pe proprietate, asigurare și taxe HOA în calculator',
        'term_options' => 'Opțiuni perioadă de creditare',
        'term_options_helper' => 'Lista separată prin virgule a perioadelor de creditare disponibile în ani (de ex., 10,15,20,25,30)',
        'currency_symbol' => 'Simbol monedă',
    ],

    'down_payment_types' => [
        'percent' => 'Procent',
        'amount' => 'Sumă fixă',
    ],

    'shortcode' => [
        'name' => 'Calculator ipotecar',
        'description' => 'Afișați un calculator de rate ipotecare cu valori implicite personalizabile',
        'style' => 'Stil',
        'form_style' => 'Stil formular',
        'form_size' => 'Dimensiune formular',
        'form_alignment' => 'Aliniere formular',
        'form_margin' => 'Margine formular',
        'form_margin_helper' => 'Spațiu în afara formularului (de ex., 20px, 1rem, 20px 0)',
        'form_padding' => 'Spațiere internă formular',
        'form_padding_helper' => 'Spațiu în interiorul formularului (de ex., 20px, 1rem, 30px 20px)',
        'form_title' => 'Titlu formular',
        'form_description' => 'Descriere formular',
        'default_price' => 'Preț proprietate implicit',
        'default_price_helper' => 'Lăsați gol pentru a permite utilizatorilor să introducă propriul preț',
        'default_term' => 'Perioadă de creditare implicită (ani)',
        'default_rate' => 'Rata dobânzii implicită (%)',
        'default_down_payment_type' => 'Tipul avansului implicit',
        'default_down_payment_value' => 'Valoarea avansului implicit',
        'show_extra_costs' => 'Afișare costuri suplimentare',
        'currency' => 'Simbol monedă',
        'price_from' => 'Sursă preț',
        'price_from_helper' => 'Alegeți de unde să provină prețul proprietății',
        'primary_color' => 'Culoare primară',
        'layout' => 'Aspect',
    ],

    'layouts' => [
        'horizontal' => 'Orizontal',
        'vertical' => 'Vertical',
    ],

    'styles' => [
        'default' => 'Implicit',
        'compact' => 'Compact',
    ],

    'form_styles' => [
        'default' => 'Implicit',
        'modern' => 'Modern',
        'minimal' => 'Minimal',
        'bold' => 'Îngroșat',
        'glass' => 'Glassmorphism',
    ],

    'form_sizes' => [
        'full' => 'Dimensiune completă (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Mare (992px)',
        'md' => 'Mediu (768px)',
        'sm' => 'Mic (576px)',
    ],

    'form_alignments' => [
        'start' => 'Stânga (Început)',
        'center' => 'Centru',
        'end' => 'Dreapta (Sfârșit)',
    ],

    'price_from' => [
        'none' => 'Introducere manuală',
        'property' => 'Din proprietate',
    ],

    'fields' => [
        'property_price' => 'Preț proprietate',
        'down_payment' => 'Avans',
        'loan_amount' => 'Suma creditului',
        'loan_term' => 'Perioada de creditare',
        'interest_rate' => 'Rata dobânzii',
        'disbursement_date' => 'Data decontării',
        'extra_costs' => 'Costuri suplimentare (opțional)',
        'property_tax' => 'Impozit pe proprietate',
        'insurance' => 'Asigurare locuință',
        'hoa' => 'Taxe HOA',
    ],

    'help' => [
        'down_payment_percent' => 'Introduceți ca procent din prețul proprietății',
        'down_payment_amount' => 'Introduceți ca sumă fixă',
        'loan_amount_hint' => 'Trageți cursorul sau introduceți suma pe care doriți să o împrumutați',
    ],

    'results' => [
        'monthly_pi' => 'Rată lunară P&D',
        'monthly_payment' => 'Plată lunară',
        'total_monthly' => 'Total lunar',
        'total_interest' => 'Total dobândă',
        'total_paid' => 'Suma totală',
        'from' => 'De la',
        'to' => 'La',
        'view_details' => 'Vizualizare detalii',
        'empty_state_title' => 'Calculați-vă Ipoteca',
        'empty_state_message' => 'Introduceți prețul proprietății și detaliile împrumutului mai sus pentru a vedea plățile lunare estimate și dobânda totală.',
    ],

    'amortization' => [
        'title' => 'Grafic de amortizare',
        'chart' => 'Grafic',
        'table' => 'Tabel',
        'period' => 'Perioadă',
        'payment' => 'Plată',
        'year' => 'An',
        'principal' => 'Principal',
        'interest' => 'Dobândă',
        'balance' => 'Sold',
        'loan_amount' => 'Suma creditului',
        'total_principal' => 'Total principal',
        'total_interest' => 'Total dobândă',
    ],

    'widget' => [
        'name' => 'Calculator ipotecar',
        'description' => 'Afișare calculator ipotecar în bara laterală',
        'title' => 'Titlu widget',
        'leave_empty_for_default' => 'Lăsați gol pentru a utiliza setările globale',
        'use_default' => 'Utilizare implicit',
    ],

    'errors' => [
        'property_price_required' => 'Prețul proprietății trebuie să fie mai mare de 0',
        'loan_amount_required' => 'Suma împrumutului trebuie să fie mai mare de 0',
        'loan_amount_exceeds_price' => 'Suma împrumutului nu poate depăși prețul proprietății',
        'loan_term_required' => 'Durata împrumutului trebuie să fie mai mare de 0',
        'interest_rate_negative' => 'Rata dobânzii nu poate fi negativă',
    ],
];
