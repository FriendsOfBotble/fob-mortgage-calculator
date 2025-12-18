<?php

return [
    'name' => 'Calcolatore Mutuo',
    'years' => 'anni',
    'year' => 'anno',
    'month' => 'mese',
    'months' => 'mesi',

    'methods' => [
        'decreasing_balance' => 'Saldo Decrescente',
        'fixed_payment' => 'Pagamento Fisso',
    ],

    'settings' => [
        'title' => 'Calcolatore Mutuo',
        'description' => 'Configura i valori predefiniti per il calcolatore mutuo',
        'default_interest_rate' => 'Tasso di Interesse Predefinito (%)',
        'default_term_years' => 'Durata del Prestito Predefinita (anni)',
        'default_down_payment_type' => 'Tipo di Acconto Predefinito',
        'default_down_payment_value' => 'Valore dell\'Acconto Predefinito',
        'show_extra_costs' => 'Mostra Costi Extra',
        'show_extra_costs_helper' => 'Abilita campi per tasse sulla proprietà, assicurazione e spese HOA nel calcolatore',
        'term_options' => 'Opzioni di Durata del Prestito',
        'term_options_helper' => 'Lista separata da virgole delle durate di prestito disponibili in anni (es., 10,15,20,25,30)',
        'currency_symbol' => 'Simbolo Valuta',
    ],

    'down_payment_types' => [
        'percent' => 'Percentuale',
        'amount' => 'Importo Fisso',
    ],

    'shortcode' => [
        'name' => 'Calcolatore Mutuo',
        'description' => 'Visualizza un calcolatore di pagamento mutuo con valori predefiniti personalizzabili',
        'style' => 'Stile',
        'form_style' => 'Stile del Modulo',
        'form_size' => 'Dimensione del Modulo',
        'form_alignment' => 'Allineamento del Modulo',
        'form_margin' => 'Margine del Modulo',
        'form_margin_helper' => 'Spazio esterno del modulo (es: 20px, 1rem, 20px 0)',
        'form_padding' => 'Padding del Modulo',
        'form_padding_helper' => 'Spazio interno del modulo (es: 20px, 1rem, 30px 20px)',
        'form_title' => 'Titolo del Modulo',
        'form_description' => 'Descrizione del Modulo',
        'default_price' => 'Prezzo Immobile Predefinito',
        'default_price_helper' => 'Lascia vuoto per permettere agli utenti di inserire il proprio prezzo',
        'default_term' => 'Durata del Prestito Predefinita (anni)',
        'default_rate' => 'Tasso di Interesse Predefinito (%)',
        'default_down_payment_type' => 'Tipo di Acconto Predefinito',
        'default_down_payment_value' => 'Valore dell\'Acconto Predefinito',
        'show_extra_costs' => 'Mostra Costi Extra',
        'currency' => 'Simbolo Valuta',
        'price_from' => 'Fonte del Prezzo',
        'price_from_helper' => 'Scegli da dove ottenere il prezzo dell\'immobile',
        'primary_color' => 'Colore Primario',
        'layout' => 'Layout',
    ],

    'layouts' => [
        'horizontal' => 'Orizzontale',
        'vertical' => 'Verticale',
    ],

    'styles' => [
        'default' => 'Predefinito',
        'compact' => 'Compatto',
    ],

    'form_styles' => [
        'default' => 'Predefinito',
        'modern' => 'Moderno',
        'minimal' => 'Minimalista',
        'bold' => 'Grassetto',
        'glass' => 'Glassmorfismo',
    ],

    'form_sizes' => [
        'full' => 'Dimensione Completa (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Grande (992px)',
        'md' => 'Medio (768px)',
        'sm' => 'Piccolo (576px)',
    ],

    'form_alignments' => [
        'start' => 'Sinistra (Inizio)',
        'center' => 'Centro',
        'end' => 'Destra (Fine)',
    ],

    'price_from' => [
        'none' => 'Inserimento Manuale',
        'property' => 'Dall\'Immobile',
    ],

    'fields' => [
        'property_price' => 'Prezzo Immobile',
        'down_payment' => 'Acconto',
        'loan_amount' => 'Importo del Prestito',
        'loan_term' => 'Durata del Prestito',
        'interest_rate' => 'Tasso di Interesse',
        'disbursement_date' => 'Data di Erogazione',
        'extra_costs' => 'Costi Extra (Opzionale)',
        'property_tax' => 'Tasse sulla Proprietà',
        'insurance' => 'Assicurazione Casa',
        'hoa' => 'Spese HOA',
    ],

    'help' => [
        'down_payment_percent' => 'Inserisci come percentuale del prezzo dell\'immobile',
        'down_payment_amount' => 'Inserisci come importo fisso',
        'loan_amount_hint' => 'Trascina il cursore o inserisci l\'importo che desideri prendere in prestito',
    ],

    'results' => [
        'monthly_pi' => 'P&I Mensile',
        'monthly_payment' => 'Pagamento Mensile',
        'total_monthly' => 'Totale Mensile',
        'total_interest' => 'Interessi Totali',
        'total_paid' => 'Importo Totale',
        'from' => 'Da',
        'to' => 'A',
        'view_details' => 'Visualizza Dettagli',
        'empty_state_title' => 'Calcola Il Tuo Mutuo',
        'empty_state_message' => 'Inserisci il prezzo della proprietà e i dettagli del prestito sopra per vedere i pagamenti mensili stimati e gli interessi totali.',
    ],

    'amortization' => [
        'title' => 'Piano di Ammortamento',
        'chart' => 'Grafico',
        'table' => 'Tabella',
        'period' => 'Periodo',
        'payment' => 'Pagamento',
        'year' => 'Anno',
        'principal' => 'Capitale',
        'interest' => 'Interessi',
        'balance' => 'Saldo',
        'loan_amount' => 'Importo del Prestito',
        'total_principal' => 'Capitale Totale',
        'total_interest' => 'Interessi Totali',
    ],

    'widget' => [
        'name' => 'Calcolatore Mutuo',
        'description' => 'Visualizza calcolatore mutuo nella barra laterale',
        'title' => 'Titolo Widget',
        'leave_empty_for_default' => 'Lascia vuoto per usare le impostazioni globali',
        'use_default' => 'Usa Predefinito',
    ],

    'errors' => [
        'property_price_required' => 'Il prezzo della proprietà deve essere maggiore di 0',
        'loan_amount_required' => 'L\'importo del prestito deve essere maggiore di 0',
        'loan_amount_exceeds_price' => 'L\'importo del prestito non può superare il prezzo della proprietà',
        'loan_term_required' => 'La durata del prestito deve essere maggiore di 0',
        'interest_rate_negative' => 'Il tasso di interesse non può essere negativo',
    ],
];
