<?php

return [
    'name' => 'Hypothekenrechner',
    'years' => 'Jahre',
    'year' => 'Jahr',
    'month' => 'Monat',
    'months' => 'Monate',

    'methods' => [
        'decreasing_balance' => 'Abnehmender Saldo',
        'fixed_payment' => 'Feste Zahlung',
    ],

    'settings' => [
        'title' => 'Hypothekenrechner',
        'description' => 'Standardwerte für den Hypothekenrechner konfigurieren',
        'default_interest_rate' => 'Standard-Zinssatz (%)',
        'default_term_years' => 'Standard-Laufzeit (Jahre)',
        'default_down_payment_type' => 'Standard-Anzahlungsart',
        'default_down_payment_value' => 'Standard-Anzahlungswert',
        'show_extra_costs' => 'Zusatzkosten anzeigen',
        'show_extra_costs_helper' => 'Grundsteuer-, Versicherungs- und HOA-Gebührenfelder im Rechner aktivieren',
        'term_options' => 'Laufzeitoptionen',
        'term_options_helper' => 'Kommagetrennte Liste verfügbarer Laufzeiten in Jahren (z.B. 10,15,20,25,30)',
        'currency_symbol' => 'Währungssymbol',
    ],

    'down_payment_types' => [
        'percent' => 'Prozentsatz',
        'amount' => 'Fester Betrag',
    ],

    'shortcode' => [
        'name' => 'Hypothekenrechner',
        'description' => 'Hypothekenzahlungsrechner mit anpassbaren Standardwerten anzeigen',
        'style' => 'Stil',
        'form_style' => 'Formularstil',
        'form_size' => 'Formulargröße',
        'form_alignment' => 'Formularausrichtung',
        'form_margin' => 'Formularrand',
        'form_margin_helper' => 'Abstand außerhalb des Formulars (z.B. 20px, 1rem, 20px 0)',
        'form_padding' => 'Formularinnenabstand',
        'form_padding_helper' => 'Abstand innerhalb des Formulars (z.B. 20px, 1rem, 30px 20px)',
        'form_title' => 'Formulartitel',
        'form_description' => 'Formularbeschreibung',
        'default_price' => 'Standard-Immobilienpreis',
        'default_price_helper' => 'Leer lassen, damit Benutzer ihren eigenen Preis eingeben können',
        'default_term' => 'Standard-Laufzeit (Jahre)',
        'default_rate' => 'Standard-Zinssatz (%)',
        'default_down_payment_type' => 'Standard-Anzahlungsart',
        'default_down_payment_value' => 'Standard-Anzahlungswert',
        'show_extra_costs' => 'Zusatzkosten anzeigen',
        'currency' => 'Währungssymbol',
        'price_from' => 'Preisquelle',
        'price_from_helper' => 'Wählen Sie, woher der Immobilienpreis stammt',
        'primary_color' => 'Primärfarbe',
        'layout' => 'Layout',
    ],

    'layouts' => [
        'horizontal' => 'Horizontal',
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
        'bold' => 'Fett',
        'glass' => 'Glasmorphismus',
    ],

    'form_sizes' => [
        'full' => 'Volle Größe (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Groß (992px)',
        'md' => 'Mittel (768px)',
        'sm' => 'Klein (576px)',
    ],

    'form_alignments' => [
        'start' => 'Links (Anfang)',
        'center' => 'Zentriert',
        'end' => 'Rechts (Ende)',
    ],

    'price_from' => [
        'none' => 'Manuelle Eingabe',
        'property' => 'Von Immobilie',
    ],

    'fields' => [
        'property_price' => 'Immobilienpreis',
        'down_payment' => 'Anzahlung',
        'loan_amount' => 'Darlehensbetrag',
        'loan_term' => 'Laufzeit',
        'interest_rate' => 'Zinssatz',
        'disbursement_date' => 'Auszahlungsdatum',
        'extra_costs' => 'Zusätzliche Kosten (Optional)',
        'property_tax' => 'Grundsteuer',
        'insurance' => 'Hausversicherung',
        'hoa' => 'HOA-Gebühren',
    ],

    'help' => [
        'down_payment_percent' => 'Als Prozentsatz des Immobilienpreises eingeben',
        'down_payment_amount' => 'Als festen Betrag eingeben',
        'loan_amount_hint' => 'Ziehen Sie den Schieberegler oder geben Sie den Betrag ein, den Sie leihen möchten',
    ],

    'results' => [
        'monthly_pi' => 'Monatliche T&Z',
        'monthly_payment' => 'Monatliche Zahlung',
        'total_monthly' => 'Monatlich gesamt',
        'total_interest' => 'Gesamtzinsen',
        'total_paid' => 'Gesamtbetrag',
        'from' => 'Von',
        'to' => 'Bis',
        'view_details' => 'Details anzeigen',
        'empty_state_title' => 'Berechnen Sie Ihre Hypothek',
        'empty_state_message' => 'Geben Sie oben Ihren Immobilienpreis und Kreditdetails ein, um geschätzte monatliche Zahlungen und Gesamtzinsen zu sehen.',
    ],

    'amortization' => [
        'title' => 'Tilgungsplan',
        'chart' => 'Diagramm',
        'table' => 'Tabelle',
        'period' => 'Periode',
        'payment' => 'Zahlung',
        'year' => 'Jahr',
        'principal' => 'Tilgung',
        'interest' => 'Zinsen',
        'balance' => 'Saldo',
        'loan_amount' => 'Darlehensbetrag',
        'total_principal' => 'Gesamttilgung',
        'total_interest' => 'Gesamtzinsen',
    ],

    'widget' => [
        'name' => 'Hypothekenrechner',
        'description' => 'Hypothekenrechner in der Seitenleiste anzeigen',
        'title' => 'Widget-Titel',
        'leave_empty_for_default' => 'Leer lassen, um globale Einstellungen zu verwenden',
        'use_default' => 'Standard verwenden',
    ],

    'errors' => [
        'property_price_required' => 'Der Immobilienpreis muss größer als 0 sein',
        'loan_amount_required' => 'Der Kreditbetrag muss größer als 0 sein',
        'loan_amount_exceeds_price' => 'Der Kreditbetrag darf den Immobilienpreis nicht überschreiten',
        'loan_term_required' => 'Die Kreditlaufzeit muss größer als 0 sein',
        'interest_rate_negative' => 'Der Zinssatz kann nicht negativ sein',
    ],
];
