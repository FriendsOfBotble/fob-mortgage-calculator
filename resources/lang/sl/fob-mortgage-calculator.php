<?php

return [
    'name' => 'Kalkulator hipoteke',
    'years' => 'let',
    'year' => 'leto',
    'month' => 'mesec',
    'months' => 'mesecev',

    'methods' => [
        'decreasing_balance' => 'Padajoče stanje',
        'fixed_payment' => 'Fiksni obrok',
    ],

    'settings' => [
        'title' => 'Kalkulator hipoteke',
        'description' => 'Konfigurirajte privzete vrednosti za kalkulator hipoteke',
        'default_interest_rate' => 'Privzeta obrestna mera (%)',
        'default_term_years' => 'Privzeto trajanje kredita (leta)',
        'default_down_payment_type' => 'Privzeta vrsta pologa',
        'default_down_payment_value' => 'Privzeta vrednost pologa',
        'show_extra_costs' => 'Prikaži dodatne stroške',
        'show_extra_costs_helper' => 'Omogoči polja za davek na nepremičnine, zavarovanje in stroške vzdrževanja v kalkulatorju',
        'term_options' => 'Možnosti trajanja kredita',
        'term_options_helper' => 'Seznam razpoložljivih trajanj kredita v letih, ločen z vejicami (npr. 10,15,20,25,30)',
        'currency_symbol' => 'Simbol valute',
    ],

    'down_payment_types' => [
        'percent' => 'Odstotek',
        'amount' => 'Fiksni znesek',
    ],

    'shortcode' => [
        'name' => 'Kalkulator hipoteke',
        'description' => 'Prikažite kalkulator hipotekarnih obrokov s prilagodljivimi privzetimi vrednostmi',
        'style' => 'Stil',
        'form_style' => 'Stil obrazca',
        'form_size' => 'Velikost obrazca',
        'form_alignment' => 'Poravnava obrazca',
        'form_margin' => 'Zunanji odmik obrazca',
        'form_margin_helper' => 'Prostor zunaj obrazca (npr. 20px, 1rem, 20px 0)',
        'form_padding' => 'Notranji odmik obrazca',
        'form_padding_helper' => 'Prostor znotraj obrazca (npr. 20px, 1rem, 30px 20px)',
        'form_title' => 'Naslov obrazca',
        'form_description' => 'Opis obrazca',
        'default_price' => 'Privzeta cena nepremičnine',
        'default_price_helper' => 'Pustite prazno, da lahko uporabniki vnesejo svojo ceno',
        'default_term' => 'Privzeto trajanje kredita (leta)',
        'default_rate' => 'Privzeta obrestna mera (%)',
        'default_down_payment_type' => 'Privzeta vrsta pologa',
        'default_down_payment_value' => 'Privzeta vrednost pologa',
        'show_extra_costs' => 'Prikaži dodatne stroške',
        'currency' => 'Simbol valute',
        'price_from' => 'Vir cene',
        'price_from_helper' => 'Izberite, od kod naj se vzame cena nepremičnine',
        'primary_color' => 'Primarna barva',
        'layout' => 'Postavitev',
    ],

    'layouts' => [
        'horizontal' => 'Vodoravno',
        'vertical' => 'Navpično',
    ],

    'styles' => [
        'default' => 'Privzeto',
        'compact' => 'Kompaktno',
    ],

    'form_styles' => [
        'default' => 'Privzeto',
        'modern' => 'Moderno',
        'minimal' => 'Minimalno',
        'bold' => 'Krepko',
        'glass' => 'Stekleni morfizem',
    ],

    'form_sizes' => [
        'full' => 'Polna velikost (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Veliko (992px)',
        'md' => 'Srednje (768px)',
        'sm' => 'Malo (576px)',
    ],

    'form_alignments' => [
        'start' => 'Levo (Začetek)',
        'center' => 'Sredina',
        'end' => 'Desno (Konec)',
    ],

    'price_from' => [
        'none' => 'Ročni vnos',
        'property' => 'Iz nepremičnine',
    ],

    'fields' => [
        'property_price' => 'Cena nepremičnine',
        'down_payment' => 'Polog',
        'loan_amount' => 'Znesek kredita',
        'loan_term' => 'Trajanje kredita',
        'interest_rate' => 'Obrestna mera',
        'disbursement_date' => 'Datum izplačila',
        'extra_costs' => 'Dodatni stroški (neobvezno)',
        'property_tax' => 'Davek na nepremičnine',
        'insurance' => 'Zavarovanje hiše',
        'hoa' => 'Stroški vzdrževanja',
    ],

    'help' => [
        'down_payment_percent' => 'Vnesite kot odstotek cene nepremičnine',
        'down_payment_amount' => 'Vnesite kot fiksni znesek',
        'loan_amount_hint' => 'Povlecite drsnik ali vnesite znesek, ki ga želite izposoditi',
    ],

    'results' => [
        'monthly_pi' => 'Mesečna glavnica in obresti',
        'monthly_payment' => 'Mesečni obrok',
        'total_monthly' => 'Skupaj mesečno',
        'total_interest' => 'Skupne obresti',
        'total_paid' => 'Skupni znesek',
        'from' => 'Od',
        'to' => 'Do',
        'view_details' => 'Prikaži podrobnosti',
        'empty_state_title' => 'Izračunajte Svojo Hipoteko',
        'empty_state_message' => 'Zgoraj vnesite ceno nepremičnine in podrobnosti o posojilu, da si ogledate predvidene mesečne odplačila in skupne obresti.',
    ],

    'amortization' => [
        'title' => 'Načrt odplačevanja',
        'chart' => 'Grafikon',
        'table' => 'Tabela',
        'period' => 'Obdobje',
        'payment' => 'Plačilo',
        'year' => 'Leto',
        'principal' => 'Glavnica',
        'interest' => 'Obresti',
        'balance' => 'Stanje',
        'loan_amount' => 'Znesek kredita',
        'total_principal' => 'Skupna glavnica',
        'total_interest' => 'Skupne obresti',
    ],

    'widget' => [
        'name' => 'Kalkulator hipoteke',
        'description' => 'Prikažite kalkulator hipoteke v stranski vrstici',
        'title' => 'Naslov gradnika',
        'leave_empty_for_default' => 'Pustite prazno za uporabo globalnih nastavitev',
        'use_default' => 'Uporabi privzeto',
    ],

    'errors' => [
        'property_price_required' => 'Cena nepremičnine mora biti večja od 0',
        'loan_amount_required' => 'Znesek posojila mora biti večji od 0',
        'loan_amount_exceeds_price' => 'Znesek posojila ne sme presegati cene nepremičnine',
        'loan_term_required' => 'Rok posojila mora biti večji od 0',
        'interest_rate_negative' => 'Obrestna mera ne more biti negativna',
    ],
];
