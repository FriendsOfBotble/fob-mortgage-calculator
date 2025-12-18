<?php

return [
    'name' => 'Bolånekalkylator',
    'years' => 'år',
    'year' => 'år',
    'month' => 'månad',
    'months' => 'månader',

    'methods' => [
        'decreasing_balance' => 'Annuitetslån',
        'fixed_payment' => 'Fast Betalning',
    ],

    'settings' => [
        'title' => 'Bolånekalkylator',
        'description' => 'Konfigurera standardvärden för bolånekalkylatorn',
        'default_interest_rate' => 'Standardränta (%)',
        'default_term_years' => 'Standard Lånetid (år)',
        'default_down_payment_type' => 'Standard Kontantinsatstyp',
        'default_down_payment_value' => 'Standard Kontantinsatsvärde',
        'show_extra_costs' => 'Visa Extra Kostnader',
        'show_extra_costs_helper' => 'Aktivera fält för fastighetsskatt, försäkring och HOA-avgifter i kalkylatorn',
        'term_options' => 'Alternativ för Lånetid',
        'term_options_helper' => 'Kommaseparerad lista över tillgängliga lånetider i år (t.ex. 10,15,20,25,30)',
        'currency_symbol' => 'Valutasymbol',
    ],

    'down_payment_types' => [
        'percent' => 'Procent',
        'amount' => 'Fast Belopp',
    ],

    'shortcode' => [
        'name' => 'Bolånekalkylator',
        'description' => 'Visa en bolånebetalningskalkylator med anpassningsbara standardvärden',
        'style' => 'Stil',
        'form_style' => 'Formulärstil',
        'form_size' => 'Formulärstorlek',
        'form_alignment' => 'Formulärjustering',
        'form_margin' => 'Formulärmarginal',
        'form_margin_helper' => 'Utrymme utanför formuläret (t.ex. 20px, 1rem, 20px 0)',
        'form_padding' => 'Formulärutfyllnad',
        'form_padding_helper' => 'Utrymme inuti formuläret (t.ex. 20px, 1rem, 30px 20px)',
        'form_title' => 'Formulärtitel',
        'form_description' => 'Formulärbeskrivning',
        'default_price' => 'Standard Fastighetspris',
        'default_price_helper' => 'Lämna tomt för att låta användare ange eget pris',
        'default_term' => 'Standard Lånetid (år)',
        'default_rate' => 'Standardränta (%)',
        'default_down_payment_type' => 'Standard Kontantinsatstyp',
        'default_down_payment_value' => 'Standard Kontantinsatsvärde',
        'show_extra_costs' => 'Visa Extra Kostnader',
        'currency' => 'Valutasymbol',
        'price_from' => 'Priskälla',
        'price_from_helper' => 'Välj varifrån fastighetspriset ska hämtas',
        'primary_color' => 'Primär Färg',
        'layout' => 'Layout',
    ],

    'layouts' => [
        'horizontal' => 'Horisontell',
        'vertical' => 'Vertikal',
    ],

    'styles' => [
        'default' => 'Standard',
        'compact' => 'Kompakt',
    ],

    'form_styles' => [
        'default' => 'Standard',
        'modern' => 'Modern',
        'minimal' => 'Minimal',
        'bold' => 'Fet',
        'glass' => 'Glasmorfism',
    ],

    'form_sizes' => [
        'full' => 'Full Storlek (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Stor (992px)',
        'md' => 'Medel (768px)',
        'sm' => 'Liten (576px)',
    ],

    'form_alignments' => [
        'start' => 'Vänster (Start)',
        'center' => 'Centrum',
        'end' => 'Höger (Slut)',
    ],

    'price_from' => [
        'none' => 'Manuell Inmatning',
        'property' => 'Från Fastighet',
    ],

    'fields' => [
        'property_price' => 'Fastighetspris',
        'down_payment' => 'Kontantinsats',
        'loan_amount' => 'Lånebelopp',
        'loan_term' => 'Lånetid',
        'interest_rate' => 'Ränta',
        'disbursement_date' => 'Utbetalningsdatum',
        'extra_costs' => 'Ytterligare Kostnader (Valfritt)',
        'property_tax' => 'Fastighetsskatt',
        'insurance' => 'Hemförsäkring',
        'hoa' => 'HOA-avgifter',
    ],

    'help' => [
        'down_payment_percent' => 'Ange som procent av fastighetspriset',
        'down_payment_amount' => 'Ange som fast belopp',
        'loan_amount_hint' => 'Dra reglaget eller ange det belopp du vill låna',
    ],

    'results' => [
        'monthly_pi' => 'Månatlig K&R',
        'monthly_payment' => 'Månatlig Betalning',
        'total_monthly' => 'Totalt Månatligt',
        'total_interest' => 'Total Ränta',
        'total_paid' => 'Totalt Belopp',
        'from' => 'Från',
        'to' => 'Till',
        'view_details' => 'Visa Detaljer',
        'empty_state_title' => 'Beräkna Ditt Bolån',
        'empty_state_message' => 'Ange ditt fastighetspris och lånedetaljer ovan för att se uppskattade månatliga betalningar och total ränta.',
    ],

    'amortization' => [
        'title' => 'Amorteringsplan',
        'chart' => 'Diagram',
        'table' => 'Tabell',
        'period' => 'Period',
        'payment' => 'Betalning',
        'year' => 'År',
        'principal' => 'Kapital',
        'interest' => 'Ränta',
        'balance' => 'Saldo',
        'loan_amount' => 'Lånebelopp',
        'total_principal' => 'Totalt Kapital',
        'total_interest' => 'Total Ränta',
    ],

    'widget' => [
        'name' => 'Bolånekalkylator',
        'description' => 'Visa bolånekalkylator i sidofältet',
        'title' => 'Widget-titel',
        'leave_empty_for_default' => 'Lämna tomt för att använda globala inställningar',
        'use_default' => 'Använd Standard',
    ],

    'errors' => [
        'property_price_required' => 'Fastighetspriset måste vara större än 0',
        'loan_amount_required' => 'Lånebeloppet måste vara större än 0',
        'loan_amount_exceeds_price' => 'Lånebeloppet kan inte överstiga fastighetspriset',
        'loan_term_required' => 'Lånetiden måste vara större än 0',
        'interest_rate_negative' => 'Räntan kan inte vara negativ',
    ],
];
