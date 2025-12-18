<?php

return [
    'name' => 'Hipotekos Skaičiuoklė',
    'years' => 'metai',
    'year' => 'metai',
    'month' => 'mėnuo',
    'months' => 'mėnesiai',

    'methods' => [
        'decreasing_balance' => 'Mažėjanti Balansas',
        'fixed_payment' => 'Fiksuotas Mokėjimas',
    ],

    'settings' => [
        'title' => 'Hipotekos Skaičiuoklė',
        'description' => 'Konfigūruokite hipotekos skaičiuoklės numatytąsias reikšmes',
        'default_interest_rate' => 'Numatytoji Palūkanų Norma (%)',
        'default_term_years' => 'Numatytasis Paskolos Terminas (metai)',
        'default_down_payment_type' => 'Numatytasis Pradinio Įnašo Tipas',
        'default_down_payment_value' => 'Numatytoji Pradinio Įnašo Vertė',
        'show_extra_costs' => 'Rodyti Papildomas Išlaidas',
        'show_extra_costs_helper' => 'Įjungti nekilnojamojo turto mokesčio, draudimo ir HOA mokesčių laukus skaičiuoklėje',
        'term_options' => 'Paskolos Termino Parinktys',
        'term_options_helper' => 'Kableliais atskirtas galimų paskolos terminų sąrašas metais (pvz., 10,15,20,25,30)',
        'currency_symbol' => 'Valiutos Simbolis',
    ],

    'down_payment_types' => [
        'percent' => 'Procentai',
        'amount' => 'Fiksuota Suma',
    ],

    'shortcode' => [
        'name' => 'Hipotekos Skaičiuoklė',
        'description' => 'Rodyti hipotekos mokėjimų skaičiuoklę su pritaikomomis numatytomis reikšmėmis',
        'style' => 'Stilius',
        'form_style' => 'Formos Stilius',
        'form_size' => 'Formos Dydis',
        'form_alignment' => 'Formos Lygiavimas',
        'form_margin' => 'Formos Paraštė',
        'form_margin_helper' => 'Vieta už formos ribų (pvz., 20px, 1rem, 20px 0)',
        'form_padding' => 'Formos Užpildymas',
        'form_padding_helper' => 'Vieta formoje (pvz., 20px, 1rem, 30px 20px)',
        'form_title' => 'Formos Pavadinimas',
        'form_description' => 'Formos Aprašymas',
        'default_price' => 'Numatytoji Nekilnojamojo Turto Kaina',
        'default_price_helper' => 'Palikite tuščią, kad vartotojai galėtų įvesti savo kainą',
        'default_term' => 'Numatytasis Paskolos Terminas (metai)',
        'default_rate' => 'Numatytoji Palūkanų Norma (%)',
        'default_down_payment_type' => 'Numatytasis Pradinio Įnašo Tipas',
        'default_down_payment_value' => 'Numatytoji Pradinio Įnašo Vertė',
        'show_extra_costs' => 'Rodyti Papildomas Išlaidas',
        'currency' => 'Valiutos Simbolis',
        'price_from' => 'Kainos Šaltinis',
        'price_from_helper' => 'Pasirinkite, iš kur gauti nekilnojamojo turto kainą',
        'primary_color' => 'Pagrindinė Spalva',
        'layout' => 'Išdėstymas',
    ],

    'layouts' => [
        'horizontal' => 'Horizontalus',
        'vertical' => 'Vertikalus',
    ],

    'styles' => [
        'default' => 'Numatytasis',
        'compact' => 'Kompaktiškas',
    ],

    'form_styles' => [
        'default' => 'Numatytasis',
        'modern' => 'Šiuolaikinis',
        'minimal' => 'Minimalus',
        'bold' => 'Paryškintas',
        'glass' => 'Stiklo Efektas',
    ],

    'form_sizes' => [
        'full' => 'Visas Dydis (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Didelis (992px)',
        'md' => 'Vidutinis (768px)',
        'sm' => 'Mažas (576px)',
    ],

    'form_alignments' => [
        'start' => 'Kairėje (Pradžia)',
        'center' => 'Centre',
        'end' => 'Dešinėje (Pabaiga)',
    ],

    'price_from' => [
        'none' => 'Rankinis Įvedimas',
        'property' => 'Iš Nekilnojamojo Turto',
    ],

    'fields' => [
        'property_price' => 'Nekilnojamojo Turto Kaina',
        'down_payment' => 'Pradinis Įnašas',
        'loan_amount' => 'Paskolos Suma',
        'loan_term' => 'Paskolos Terminas',
        'interest_rate' => 'Palūkanų Norma',
        'disbursement_date' => 'Išmokėjimo Data',
        'extra_costs' => 'Papildomos Išlaidos (Neprivaloma)',
        'property_tax' => 'Nekilnojamojo Turto Mokestis',
        'insurance' => 'Namų Draudimas',
        'hoa' => 'HOA Mokesčiai',
    ],

    'help' => [
        'down_payment_percent' => 'Įveskite kaip nekilnojamojo turto kainos procentą',
        'down_payment_amount' => 'Įveskite kaip fiksuotą sumą',
        'loan_amount_hint' => 'Vilkite slankiklį arba įveskite sumą, kurią norite pasiskolinti',
    ],

    'results' => [
        'monthly_pi' => 'Mėnesinis P&I',
        'monthly_payment' => 'Mėnesinis Mokėjimas',
        'total_monthly' => 'Iš Viso Per Mėnesį',
        'total_interest' => 'Iš Viso Palūkanų',
        'total_paid' => 'Bendra Suma',
        'from' => 'Nuo',
        'to' => 'Iki',
        'view_details' => 'Žiūrėti Detales',
        'empty_state_title' => 'Apskaičiuokite Savo Hipoteką',
        'empty_state_message' => 'Įveskite turto kainą ir paskolos informaciją aukščiau, kad matytumėte numatomas mėnesines įmokas ir bendrą palūkanų sumą.',
    ],

    'amortization' => [
        'title' => 'Amortizacijos Grafikas',
        'chart' => 'Diagrama',
        'table' => 'Lentelė',
        'period' => 'Laikotarpis',
        'payment' => 'Mokėjimas',
        'year' => 'Metai',
        'principal' => 'Pagrindinė Suma',
        'interest' => 'Palūkanos',
        'balance' => 'Balansas',
        'loan_amount' => 'Paskolos Suma',
        'total_principal' => 'Iš Viso Pagrindinė Suma',
        'total_interest' => 'Iš Viso Palūkanos',
    ],

    'widget' => [
        'name' => 'Hipotekos Skaičiuoklė',
        'description' => 'Rodyti hipotekos skaičiuoklę šoninėje juostoje',
        'title' => 'Valdiklio Pavadinimas',
        'leave_empty_for_default' => 'Palikite tuščią, kad naudotumėte globaliuosius nustatymus',
        'use_default' => 'Naudoti Numatytąjį',
    ],

    'errors' => [
        'property_price_required' => 'Turto kaina turi būti didesnė nei 0',
        'loan_amount_required' => 'Paskolos suma turi būti didesnė nei 0',
        'loan_amount_exceeds_price' => 'Paskolos suma negali viršyti turto kainos',
        'loan_term_required' => 'Paskolos terminas turi būti didesnis nei 0',
        'interest_rate_negative' => 'Palūkanų norma negali būti neigiama',
    ],
];
