<?php

return [
    'name' => 'Kalkulator kredytu hipotecznego',
    'years' => 'lat',
    'year' => 'rok',
    'month' => 'miesiąc',
    'months' => 'miesięcy',

    'methods' => [
        'decreasing_balance' => 'Malejące saldo',
        'fixed_payment' => 'Stała rata',
    ],

    'settings' => [
        'title' => 'Kalkulator kredytu hipotecznego',
        'description' => 'Konfiguracja wartości domyślnych dla kalkulatora kredytu hipotecznego',
        'default_interest_rate' => 'Domyślna stopa procentowa (%)',
        'default_term_years' => 'Domyślny okres kredytowania (lata)',
        'default_down_payment_type' => 'Domyślny typ wkładu własnego',
        'default_down_payment_value' => 'Domyślna wartość wkładu własnego',
        'show_extra_costs' => 'Pokaż dodatkowe koszty',
        'show_extra_costs_helper' => 'Włącz pola podatku od nieruchomości, ubezpieczenia i opłat wspólnoty mieszkaniowej w kalkulatorze',
        'term_options' => 'Opcje okresu kredytowania',
        'term_options_helper' => 'Lista dostępnych okresów kredytowania w latach oddzielonych przecinkami (np. 10,15,20,25,30)',
        'currency_symbol' => 'Symbol waluty',
    ],

    'down_payment_types' => [
        'percent' => 'Procent',
        'amount' => 'Stała kwota',
    ],

    'shortcode' => [
        'name' => 'Kalkulator kredytu hipotecznego',
        'description' => 'Wyświetlanie kalkulatora rat kredytu hipotecznego z konfigurowalnymi wartościami domyślnymi',
        'style' => 'Styl',
        'form_style' => 'Styl formularza',
        'form_size' => 'Rozmiar formularza',
        'form_alignment' => 'Wyrównanie formularza',
        'form_margin' => 'Margines formularza',
        'form_margin_helper' => 'Przestrzeń na zewnątrz formularza (np. 20px, 1rem, 20px 0)',
        'form_padding' => 'Padding formularza',
        'form_padding_helper' => 'Przestrzeń wewnątrz formularza (np. 20px, 1rem, 30px 20px)',
        'form_title' => 'Tytuł formularza',
        'form_description' => 'Opis formularza',
        'default_price' => 'Domyślna cena nieruchomości',
        'default_price_helper' => 'Pozostaw puste, aby użytkownicy mogli wprowadzić własną cenę',
        'default_term' => 'Domyślny okres kredytowania (lata)',
        'default_rate' => 'Domyślna stopa procentowa (%)',
        'default_down_payment_type' => 'Domyślny typ wkładu własnego',
        'default_down_payment_value' => 'Domyślna wartość wkładu własnego',
        'show_extra_costs' => 'Pokaż dodatkowe koszty',
        'currency' => 'Symbol waluty',
        'price_from' => 'Źródło ceny',
        'price_from_helper' => 'Wybierz, skąd pobrać cenę nieruchomości',
        'primary_color' => 'Kolor główny',
        'layout' => 'Układ',
    ],

    'layouts' => [
        'horizontal' => 'Poziomy',
        'vertical' => 'Pionowy',
    ],

    'styles' => [
        'default' => 'Domyślny',
        'compact' => 'Kompaktowy',
    ],

    'form_styles' => [
        'default' => 'Domyślny',
        'modern' => 'Nowoczesny',
        'minimal' => 'Minimalny',
        'bold' => 'Pogrubiony',
        'glass' => 'Glassmorfizm',
    ],

    'form_sizes' => [
        'full' => 'Pełny rozmiar (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Duży (992px)',
        'md' => 'Średni (768px)',
        'sm' => 'Mały (576px)',
    ],

    'form_alignments' => [
        'start' => 'Do lewej (Start)',
        'center' => 'Do środka',
        'end' => 'Do prawej (Koniec)',
    ],

    'price_from' => [
        'none' => 'Ręczne wprowadzenie',
        'property' => 'Z nieruchomości',
    ],

    'fields' => [
        'property_price' => 'Cena nieruchomości',
        'down_payment' => 'Wkład własny',
        'loan_amount' => 'Kwota kredytu',
        'loan_term' => 'Okres kredytowania',
        'interest_rate' => 'Stopa procentowa',
        'disbursement_date' => 'Data wypłaty',
        'extra_costs' => 'Dodatkowe koszty (opcjonalne)',
        'property_tax' => 'Podatek od nieruchomości',
        'insurance' => 'Ubezpieczenie mieszkania',
        'hoa' => 'Opłaty wspólnoty mieszkaniowej',
    ],

    'help' => [
        'down_payment_percent' => 'Wprowadź jako procent ceny nieruchomości',
        'down_payment_amount' => 'Wprowadź jako stałą kwotę',
        'loan_amount_hint' => 'Przesuń suwak lub wprowadź kwotę, którą chcesz pożyczyć',
    ],

    'results' => [
        'monthly_pi' => 'Miesięczna rata (K&O)',
        'monthly_payment' => 'Miesięczna rata',
        'total_monthly' => 'Łącznie miesięcznie',
        'total_interest' => 'Łączne odsetki',
        'total_paid' => 'Łączna kwota',
        'from' => 'Od',
        'to' => 'Do',
        'view_details' => 'Zobacz szczegóły',
        'empty_state_title' => 'Oblicz Swój Kredyt Hipoteczny',
        'empty_state_message' => 'Wprowadź cenę nieruchomości i szczegóły kredytu powyżej, aby zobaczyć szacunkowe miesięczne płatności i całkowite odsetki.',
    ],

    'amortization' => [
        'title' => 'Harmonogram spłat',
        'chart' => 'Wykres',
        'table' => 'Tabela',
        'period' => 'Okres',
        'payment' => 'Rata',
        'year' => 'Rok',
        'principal' => 'Kapitał',
        'interest' => 'Odsetki',
        'balance' => 'Saldo',
        'loan_amount' => 'Kwota kredytu',
        'total_principal' => 'Łączny kapitał',
        'total_interest' => 'Łączne odsetki',
    ],

    'widget' => [
        'name' => 'Kalkulator kredytu hipotecznego',
        'description' => 'Wyświetlanie kalkulatora kredytu hipotecznego w pasku bocznym',
        'title' => 'Tytuł widżetu',
        'leave_empty_for_default' => 'Pozostaw puste, aby użyć ustawień globalnych',
        'use_default' => 'Użyj domyślnych',
    ],

    'errors' => [
        'property_price_required' => 'Cena nieruchomości musi być większa niż 0',
        'loan_amount_required' => 'Kwota kredytu musi być większa niż 0',
        'loan_amount_exceeds_price' => 'Kwota kredytu nie może przekroczyć ceny nieruchomości',
        'loan_term_required' => 'Okres kredytowania musi być większy niż 0',
        'interest_rate_negative' => 'Oprocentowanie nie może być ujemne',
    ],
];
