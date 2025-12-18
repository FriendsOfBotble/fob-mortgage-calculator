<?php

return [
    'name' => 'Jelzáloghitel kalkulátor',
    'years' => 'év',
    'year' => 'év',
    'month' => 'hónap',
    'months' => 'hónap',

    'methods' => [
        'decreasing_balance' => 'Csökkenő egyenleg',
        'fixed_payment' => 'Fix törlesztőrészlet',
    ],

    'settings' => [
        'title' => 'Jelzáloghitel kalkulátor',
        'description' => 'A jelzáloghitel kalkulátor alapértelmezett értékeinek beállítása',
        'default_interest_rate' => 'Alapértelmezett kamatláb (%)',
        'default_term_years' => 'Alapértelmezett futamidő (év)',
        'default_down_payment_type' => 'Alapértelmezett önerő típusa',
        'default_down_payment_value' => 'Alapértelmezett önerő értéke',
        'show_extra_costs' => 'További költségek megjelenítése',
        'show_extra_costs_helper' => 'Ingatlanadó, biztosítás és társasházi közös költség mezők engedélyezése a kalkulátorban',
        'term_options' => 'Futamidő lehetőségek',
        'term_options_helper' => 'Vesszővel elválasztott lista az elérhető futamidőkről években (pl. 10,15,20,25,30)',
        'currency_symbol' => 'Pénznem szimbólum',
    ],

    'down_payment_types' => [
        'percent' => 'Százalék',
        'amount' => 'Fix összeg',
    ],

    'shortcode' => [
        'name' => 'Jelzáloghitel kalkulátor',
        'description' => 'Jelzáloghitel törlesztési kalkulátor megjelenítése testreszabható alapértékekkel',
        'style' => 'Stílus',
        'form_style' => 'Űrlap stílus',
        'form_size' => 'Űrlap méret',
        'form_alignment' => 'Űrlap igazítás',
        'form_margin' => 'Űrlap margó',
        'form_margin_helper' => 'Hely az űrlapon kívül (pl. 20px, 1rem, 20px 0)',
        'form_padding' => 'Űrlap belső térköz',
        'form_padding_helper' => 'Hely az űrlapon belül (pl. 20px, 1rem, 30px 20px)',
        'form_title' => 'Űrlap cím',
        'form_description' => 'Űrlap leírás',
        'default_price' => 'Alapértelmezett ingatlanár',
        'default_price_helper' => 'Hagyja üresen, hogy a felhasználók megadhassák saját árukat',
        'default_term' => 'Alapértelmezett futamidő (év)',
        'default_rate' => 'Alapértelmezett kamatláb (%)',
        'default_down_payment_type' => 'Alapértelmezett önerő típusa',
        'default_down_payment_value' => 'Alapértelmezett önerő értéke',
        'show_extra_costs' => 'További költségek megjelenítése',
        'currency' => 'Pénznem szimbólum',
        'price_from' => 'Ár forrása',
        'price_from_helper' => 'Válassza ki, honnan származzon az ingatlan ára',
        'primary_color' => 'Elsődleges szín',
        'layout' => 'Elrendezés',
    ],

    'layouts' => [
        'horizontal' => 'Vízszintes',
        'vertical' => 'Függőleges',
    ],

    'styles' => [
        'default' => 'Alapértelmezett',
        'compact' => 'Kompakt',
    ],

    'form_styles' => [
        'default' => 'Alapértelmezett',
        'modern' => 'Modern',
        'minimal' => 'Minimális',
        'bold' => 'Félkövér',
        'glass' => 'Üvegmorfizmus',
    ],

    'form_sizes' => [
        'full' => 'Teljes méret (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Nagy (992px)',
        'md' => 'Közepes (768px)',
        'sm' => 'Kicsi (576px)',
    ],

    'form_alignments' => [
        'start' => 'Balra (Kezdet)',
        'center' => 'Középre',
        'end' => 'Jobbra (Vég)',
    ],

    'price_from' => [
        'none' => 'Kézi bevitel',
        'property' => 'Az ingatlanból',
    ],

    'fields' => [
        'property_price' => 'Ingatlan ára',
        'down_payment' => 'Önerő',
        'loan_amount' => 'Hitel összege',
        'loan_term' => 'Futamidő',
        'interest_rate' => 'Kamatláb',
        'disbursement_date' => 'Folyósítás dátuma',
        'extra_costs' => 'További költségek (opcionális)',
        'property_tax' => 'Ingatlanadó',
        'insurance' => 'Lakásbiztosítás',
        'hoa' => 'Társasházi közös költség',
    ],

    'help' => [
        'down_payment_percent' => 'Adja meg az ingatlanár százalékában',
        'down_payment_amount' => 'Adja meg fix összeget',
        'loan_amount_hint' => 'Húzza a csúszkát vagy írja be a kölcsön kívánt összegét',
    ],

    'results' => [
        'monthly_pi' => 'Havi tőke és kamat',
        'monthly_payment' => 'Havi törlesztőrészlet',
        'total_monthly' => 'Összesen havonta',
        'total_interest' => 'Összes kamat',
        'total_paid' => 'Teljes összeg',
        'from' => 'Től',
        'to' => 'Ig',
        'view_details' => 'Részletek megtekintése',
        'empty_state_title' => 'Számítsa Ki Jelzáloghitelét',
        'empty_state_message' => 'Adja meg a tulajdon árát és a hitel részleteit fent, hogy lássa a becsült havi kifizetéseket és a teljes kamatot.',
    ],

    'amortization' => [
        'title' => 'Törlesztési terv',
        'chart' => 'Grafikon',
        'table' => 'Táblázat',
        'period' => 'Időszak',
        'payment' => 'Törlesztés',
        'year' => 'Év',
        'principal' => 'Tőke',
        'interest' => 'Kamat',
        'balance' => 'Egyenleg',
        'loan_amount' => 'Hitel összege',
        'total_principal' => 'Összes tőke',
        'total_interest' => 'Összes kamat',
    ],

    'widget' => [
        'name' => 'Jelzáloghitel kalkulátor',
        'description' => 'Jelzáloghitel kalkulátor megjelenítése az oldalsávban',
        'title' => 'Widget cím',
        'leave_empty_for_default' => 'Hagyja üresen a globális beállítások használatához',
        'use_default' => 'Alapértelmezett használata',
    ],

    'errors' => [
        'property_price_required' => 'Az ingatlan árának nagyobbnak kell lennie 0-nál',
        'loan_amount_required' => 'A hitelösszegnek nagyobbnak kell lennie 0-nál',
        'loan_amount_exceeds_price' => 'A hitelösszeg nem haladhatja meg az ingatlan árát',
        'loan_term_required' => 'A hitel futamidejének nagyobbnak kell lennie 0-nál',
        'interest_rate_negative' => 'A kamatláb nem lehet negatív',
    ],
];
