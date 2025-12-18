<?php

return [
    'name' => 'Kalkulator hipoteke',
    'years' => 'godina',
    'year' => 'godina',
    'month' => 'mjesec',
    'months' => 'mjeseci',

    'methods' => [
        'decreasing_balance' => 'Opadajuće stanje',
        'fixed_payment' => 'Fiksna rata',
    ],

    'settings' => [
        'title' => 'Kalkulator hipoteke',
        'description' => 'Konfigurirajte zadane vrijednosti za kalkulator hipoteke',
        'default_interest_rate' => 'Zadana kamatna stopa (%)',
        'default_term_years' => 'Zadani rok kredita (godine)',
        'default_down_payment_type' => 'Zadana vrsta pologa',
        'default_down_payment_value' => 'Zadana vrijednost pologa',
        'show_extra_costs' => 'Prikaži dodatne troškove',
        'show_extra_costs_helper' => 'Omogući polja za porez na nekretninu, osiguranje i naknadu za održavanje u kalkulatoru',
        'term_options' => 'Opcije roka kredita',
        'term_options_helper' => 'Popis dostupnih rokova kredita u godinama odvojen zarezom (npr. 10,15,20,25,30)',
        'currency_symbol' => 'Simbol valute',
    ],

    'down_payment_types' => [
        'percent' => 'Postotak',
        'amount' => 'Fiksni iznos',
    ],

    'shortcode' => [
        'name' => 'Kalkulator hipoteke',
        'description' => 'Prikažite kalkulator hipotekarnih rata s prilagodljivim zadanim vrijednostima',
        'style' => 'Stil',
        'form_style' => 'Stil obrasca',
        'form_size' => 'Veličina obrasca',
        'form_alignment' => 'Poravnanje obrasca',
        'form_margin' => 'Vanjski odmak obrasca',
        'form_margin_helper' => 'Prostor izvan obrasca (npr. 20px, 1rem, 20px 0)',
        'form_padding' => 'Unutarnji odmak obrasca',
        'form_padding_helper' => 'Prostor unutar obrasca (npr. 20px, 1rem, 30px 20px)',
        'form_title' => 'Naslov obrasca',
        'form_description' => 'Opis obrasca',
        'default_price' => 'Zadana cijena nekretnine',
        'default_price_helper' => 'Ostavite prazno kako bi korisnici mogli unijeti vlastitu cijenu',
        'default_term' => 'Zadani rok kredita (godine)',
        'default_rate' => 'Zadana kamatna stopa (%)',
        'default_down_payment_type' => 'Zadana vrsta pologa',
        'default_down_payment_value' => 'Zadana vrijednost pologa',
        'show_extra_costs' => 'Prikaži dodatne troškove',
        'currency' => 'Simbol valute',
        'price_from' => 'Izvor cijene',
        'price_from_helper' => 'Odaberite odakle preuzeti cijenu nekretnine',
        'primary_color' => 'Primarna boja',
        'layout' => 'Raspored',
    ],

    'layouts' => [
        'horizontal' => 'Horizontalno',
        'vertical' => 'Vertikalno',
    ],

    'styles' => [
        'default' => 'Zadano',
        'compact' => 'Kompaktno',
    ],

    'form_styles' => [
        'default' => 'Zadano',
        'modern' => 'Moderno',
        'minimal' => 'Minimalno',
        'bold' => 'Podebljano',
        'glass' => 'Stakleni morfizam',
    ],

    'form_sizes' => [
        'full' => 'Puna veličina (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Veliko (992px)',
        'md' => 'Srednje (768px)',
        'sm' => 'Malo (576px)',
    ],

    'form_alignments' => [
        'start' => 'Lijevo (Početak)',
        'center' => 'Centar',
        'end' => 'Desno (Kraj)',
    ],

    'price_from' => [
        'none' => 'Ručni unos',
        'property' => 'Iz nekretnine',
    ],

    'fields' => [
        'property_price' => 'Cijena nekretnine',
        'down_payment' => 'Polog',
        'loan_amount' => 'Iznos kredita',
        'loan_term' => 'Rok kredita',
        'interest_rate' => 'Kamatna stopa',
        'disbursement_date' => 'Datum isplate',
        'extra_costs' => 'Dodatni troškovi (neobavezno)',
        'property_tax' => 'Porez na nekretninu',
        'insurance' => 'Osiguranje kuće',
        'hoa' => 'Naknade za održavanje',
    ],

    'help' => [
        'down_payment_percent' => 'Unesite kao postotak cijene nekretnine',
        'down_payment_amount' => 'Unesite kao fiksni iznos',
        'loan_amount_hint' => 'Povucite klizač ili unesite iznos koji želite posuditi',
    ],

    'results' => [
        'monthly_pi' => 'Mjesečna glavnica i kamata',
        'monthly_payment' => 'Mjesečna rata',
        'total_monthly' => 'Ukupno mjesečno',
        'total_interest' => 'Ukupna kamata',
        'total_paid' => 'Ukupni iznos',
        'from' => 'Od',
        'to' => 'Do',
        'view_details' => 'Prikaži detalje',
        'empty_state_title' => 'Izračunajte Svoju Hipoteku',
        'empty_state_message' => 'Unesite cijenu nekretnine i detalje kredita gore kako biste vidjeli procijenjene mjesečne uplate i ukupnu kamatu.',
    ],

    'amortization' => [
        'title' => 'Plan otplate',
        'chart' => 'Grafikon',
        'table' => 'Tablica',
        'period' => 'Razdoblje',
        'payment' => 'Plaćanje',
        'year' => 'Godina',
        'principal' => 'Glavnica',
        'interest' => 'Kamata',
        'balance' => 'Stanje',
        'loan_amount' => 'Iznos kredita',
        'total_principal' => 'Ukupna glavnica',
        'total_interest' => 'Ukupna kamata',
    ],

    'widget' => [
        'name' => 'Kalkulator hipoteke',
        'description' => 'Prikažite kalkulator hipoteke u bočnoj traci',
        'title' => 'Naslov widgeta',
        'leave_empty_for_default' => 'Ostavite prazno za korištenje globalnih postavki',
        'use_default' => 'Koristi zadano',
    ],

    'errors' => [
        'property_price_required' => 'Cijena nekretnine mora biti veća od 0',
        'loan_amount_required' => 'Iznos kredita mora biti veći od 0',
        'loan_amount_exceeds_price' => 'Iznos kredita ne može premašiti cijenu nekretnine',
        'loan_term_required' => 'Rok kredita mora biti veći od 0',
        'interest_rate_negative' => 'Kamatna stopa ne može biti negativna',
    ],
];
