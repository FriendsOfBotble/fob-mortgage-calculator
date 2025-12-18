<?php

return [
    'name' => 'Hypoteční kalkulačka',
    'years' => 'let',
    'year' => 'rok',
    'month' => 'měsíc',
    'months' => 'měsíců',

    'methods' => [
        'decreasing_balance' => 'Klesající zůstatek',
        'fixed_payment' => 'Pevná splátka',
    ],

    'settings' => [
        'title' => 'Hypoteční kalkulačka',
        'description' => 'Konfigurace výchozích hodnot pro hypoteční kalkulačku',
        'default_interest_rate' => 'Výchozí úroková sazba (%)',
        'default_term_years' => 'Výchozí doba úvěru (roky)',
        'default_down_payment_type' => 'Výchozí typ zálohy',
        'default_down_payment_value' => 'Výchozí hodnota zálohy',
        'show_extra_costs' => 'Zobrazit dodatečné náklady',
        'show_extra_costs_helper' => 'Povolit pole daně z nemovitosti, pojištění a poplatků HOA v kalkulačce',
        'term_options' => 'Možnosti doby úvěru',
        'term_options_helper' => 'Seznam dostupných dob úvěru v letech oddělených čárkami (např. 10,15,20,25,30)',
        'currency_symbol' => 'Symbol měny',
    ],

    'down_payment_types' => [
        'percent' => 'Procento',
        'amount' => 'Pevná částka',
    ],

    'shortcode' => [
        'name' => 'Hypoteční kalkulačka',
        'description' => 'Zobrazení kalkulačky hypotečních splátek s přizpůsobitelnými výchozími hodnotami',
        'style' => 'Styl',
        'form_style' => 'Styl formuláře',
        'form_size' => 'Velikost formuláře',
        'form_alignment' => 'Zarovnání formuláře',
        'form_margin' => 'Okraj formuláře',
        'form_margin_helper' => 'Prostor vně formuláře (např. 20px, 1rem, 20px 0)',
        'form_padding' => 'Vnitřní okraj formuláře',
        'form_padding_helper' => 'Prostor uvnitř formuláře (např. 20px, 1rem, 30px 20px)',
        'form_title' => 'Název formuláře',
        'form_description' => 'Popis formuláře',
        'default_price' => 'Výchozí cena nemovitosti',
        'default_price_helper' => 'Nechte prázdné, aby uživatelé mohli zadat vlastní cenu',
        'default_term' => 'Výchozí doba úvěru (roky)',
        'default_rate' => 'Výchozí úroková sazba (%)',
        'default_down_payment_type' => 'Výchozí typ zálohy',
        'default_down_payment_value' => 'Výchozí hodnota zálohy',
        'show_extra_costs' => 'Zobrazit dodatečné náklady',
        'currency' => 'Symbol měny',
        'price_from' => 'Zdroj ceny',
        'price_from_helper' => 'Vyberte, odkud získat cenu nemovitosti',
        'primary_color' => 'Primární barva',
        'layout' => 'Rozložení',
    ],

    'layouts' => [
        'horizontal' => 'Horizontální',
        'vertical' => 'Vertikální',
    ],

    'styles' => [
        'default' => 'Výchozí',
        'compact' => 'Kompaktní',
    ],

    'form_styles' => [
        'default' => 'Výchozí',
        'modern' => 'Moderní',
        'minimal' => 'Minimální',
        'bold' => 'Tučný',
        'glass' => 'Glassmorfismus',
    ],

    'form_sizes' => [
        'full' => 'Plná velikost (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Velký (992px)',
        'md' => 'Střední (768px)',
        'sm' => 'Malý (576px)',
    ],

    'form_alignments' => [
        'start' => 'Vlevo (Začátek)',
        'center' => 'Na střed',
        'end' => 'Vpravo (Konec)',
    ],

    'price_from' => [
        'none' => 'Ruční zadání',
        'property' => 'Z nemovitosti',
    ],

    'fields' => [
        'property_price' => 'Cena nemovitosti',
        'down_payment' => 'Záloha',
        'loan_amount' => 'Výše úvěru',
        'loan_term' => 'Doba úvěru',
        'interest_rate' => 'Úroková sazba',
        'disbursement_date' => 'Datum vyplacení',
        'extra_costs' => 'Dodatečné náklady (volitelné)',
        'property_tax' => 'Daň z nemovitosti',
        'insurance' => 'Pojištění domácnosti',
        'hoa' => 'Poplatky HOA',
    ],

    'help' => [
        'down_payment_percent' => 'Zadejte jako procento z ceny nemovitosti',
        'down_payment_amount' => 'Zadejte jako pevnou částku',
        'loan_amount_hint' => 'Přetáhněte posuvník nebo zadejte částku, kterou chcete půjčit',
    ],

    'results' => [
        'monthly_pi' => 'Měsíční splátka (J&Ú)',
        'monthly_payment' => 'Měsíční splátka',
        'total_monthly' => 'Celkem měsíčně',
        'total_interest' => 'Celkový úrok',
        'total_paid' => 'Celková částka',
        'from' => 'Od',
        'to' => 'Do',
        'view_details' => 'Zobrazit podrobnosti',
        'empty_state_title' => 'Vypočítejte Svou Hypotéku',
        'empty_state_message' => 'Zadejte výše cenu nemovitosti a detaily půjčky, abyste viděli odhadované měsíční platby a celkový úrok.',
    ],

    'amortization' => [
        'title' => 'Amortizační plán',
        'chart' => 'Graf',
        'table' => 'Tabulka',
        'period' => 'Období',
        'payment' => 'Splátka',
        'year' => 'Rok',
        'principal' => 'Jistina',
        'interest' => 'Úrok',
        'balance' => 'Zůstatek',
        'loan_amount' => 'Výše úvěru',
        'total_principal' => 'Celková jistina',
        'total_interest' => 'Celkový úrok',
    ],

    'widget' => [
        'name' => 'Hypoteční kalkulačka',
        'description' => 'Zobrazení hypoteční kalkulačky v postranním panelu',
        'title' => 'Název widgetu',
        'leave_empty_for_default' => 'Nechte prázdné pro použití globálních nastavení',
        'use_default' => 'Použít výchozí',
    ],

    'errors' => [
        'property_price_required' => 'Cena nemovitosti musí být větší než 0',
        'loan_amount_required' => 'Výše půjčky musí být větší než 0',
        'loan_amount_exceeds_price' => 'Výše půjčky nemůže překročit cenu nemovitosti',
        'loan_term_required' => 'Doba splácení musí být větší než 0',
        'interest_rate_negative' => 'Úroková sazba nemůže být záporná',
    ],
];
