<?php

return [
    'name' => 'Калкулатор хипотеке',
    'years' => 'година',
    'year' => 'година',
    'month' => 'месец',
    'months' => 'месеци',

    'methods' => [
        'decreasing_balance' => 'Опадајуће стање',
        'fixed_payment' => 'Фиксна рата',
    ],

    'settings' => [
        'title' => 'Калкулатор хипотеке',
        'description' => 'Конфигуришите подразумеване вредности за калкулатор хипотеке',
        'default_interest_rate' => 'Подразумевана каматна стопа (%)',
        'default_term_years' => 'Подразумевани рок кредита (године)',
        'default_down_payment_type' => 'Подразумевана врста полога',
        'default_down_payment_value' => 'Подразумевана вредност полога',
        'show_extra_costs' => 'Прикажи додатне трошкове',
        'show_extra_costs_helper' => 'Омогући поља за порез на непокретност, осигурање и накнаду за одржавање у калкулатору',
        'term_options' => 'Опције рока кредита',
        'term_options_helper' => 'Списак доступних рокова кредита у годинама одвојен зарезом (нпр. 10,15,20,25,30)',
        'currency_symbol' => 'Симбол валуте',
    ],

    'down_payment_types' => [
        'percent' => 'Проценат',
        'amount' => 'Фиксни износ',
    ],

    'shortcode' => [
        'name' => 'Калкулатор хипотеке',
        'description' => 'Прикажите калкулатор хипотекарних рата са прилагодљивим подразумеваним вредностима',
        'style' => 'Стил',
        'form_style' => 'Стил обрасца',
        'form_size' => 'Величина обрасца',
        'form_alignment' => 'Поравнање обрасца',
        'form_margin' => 'Спољни одмак обрасца',
        'form_margin_helper' => 'Простор изван обрасца (нпр. 20px, 1rem, 20px 0)',
        'form_padding' => 'Унутрашњи одмак обрасца',
        'form_padding_helper' => 'Простор унутар обрасца (нпр. 20px, 1rem, 30px 20px)',
        'form_title' => 'Наслов обрасца',
        'form_description' => 'Опис обрасца',
        'default_price' => 'Подразумевана цена непокретности',
        'default_price_helper' => 'Оставите празно како би корисници могли унети властиту цену',
        'default_term' => 'Подразумевани рок кредита (године)',
        'default_rate' => 'Подразумевана каматна стопа (%)',
        'default_down_payment_type' => 'Подразумевана врста полога',
        'default_down_payment_value' => 'Подразумевана вредност полога',
        'show_extra_costs' => 'Прикажи додатне трошкове',
        'currency' => 'Симбол валуте',
        'price_from' => 'Извор цене',
        'price_from_helper' => 'Изаберите одакле преузети цену непокретности',
        'primary_color' => 'Примарна боја',
        'layout' => 'Распоред',
    ],

    'layouts' => [
        'horizontal' => 'Хоризонтално',
        'vertical' => 'Вертикално',
    ],

    'styles' => [
        'default' => 'Подразумевано',
        'compact' => 'Компактно',
    ],

    'form_styles' => [
        'default' => 'Подразумевано',
        'modern' => 'Модерно',
        'minimal' => 'Минимално',
        'bold' => 'Подебљано',
        'glass' => 'Стаклени морфизам',
    ],

    'form_sizes' => [
        'full' => 'Пуна величина (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Велико (992px)',
        'md' => 'Средње (768px)',
        'sm' => 'Мало (576px)',
    ],

    'form_alignments' => [
        'start' => 'Лево (Почетак)',
        'center' => 'Центар',
        'end' => 'Десно (Крај)',
    ],

    'price_from' => [
        'none' => 'Ручни унос',
        'property' => 'Из непокретности',
    ],

    'fields' => [
        'property_price' => 'Цена непокретности',
        'down_payment' => 'Полог',
        'loan_amount' => 'Износ кредита',
        'loan_term' => 'Рок кредита',
        'interest_rate' => 'Каматна стопа',
        'disbursement_date' => 'Датум исплате',
        'extra_costs' => 'Додатни трошкови (необавезно)',
        'property_tax' => 'Порез на непокретност',
        'insurance' => 'Осигурање куће',
        'hoa' => 'Накнаде за одржавање',
    ],

    'help' => [
        'down_payment_percent' => 'Унесите као проценат цене непокретности',
        'down_payment_amount' => 'Унесите као фиксни износ',
        'loan_amount_hint' => 'Повуците клизач или унесите износ који желите позајмити',
    ],

    'results' => [
        'monthly_pi' => 'Месечна главница и камата',
        'monthly_payment' => 'Месечна рата',
        'total_monthly' => 'Укупно месечно',
        'total_interest' => 'Укупна камата',
        'total_paid' => 'Укупни износ',
        'from' => 'Од',
        'to' => 'До',
        'view_details' => 'Прикажи детаље',
        'empty_state_title' => 'Izračunajte Svoju Hipoteku',
        'empty_state_message' => 'Unesite cenu nekretnine i detalje kredita gore kako biste videli procenjene mesečne uplate i ukupnu kamatu.',
    ],

    'amortization' => [
        'title' => 'План отплате',
        'chart' => 'Графикон',
        'table' => 'Табела',
        'period' => 'Период',
        'payment' => 'Плаћање',
        'year' => 'Година',
        'principal' => 'Главница',
        'interest' => 'Камата',
        'balance' => 'Стање',
        'loan_amount' => 'Износ кредита',
        'total_principal' => 'Укупна главница',
        'total_interest' => 'Укупна камата',
    ],

    'widget' => [
        'name' => 'Калкулатор хипотеке',
        'description' => 'Прикажите калкулатор хипотеке у бочној траци',
        'title' => 'Наслов виџета',
        'leave_empty_for_default' => 'Оставите празно за коришћење глобалних поставки',
        'use_default' => 'Користи подразумевано',
    ],

    'errors' => [
        'property_price_required' => 'Cena nekretnine mora biti veća od 0',
        'loan_amount_required' => 'Iznos kredita mora biti veći od 0',
        'loan_amount_exceeds_price' => 'Iznos kredita ne može preći cenu nekretnine',
        'loan_term_required' => 'Rok kredita mora biti veći od 0',
        'interest_rate_negative' => 'Kamatna stopa ne može biti negativna',
    ],
];
