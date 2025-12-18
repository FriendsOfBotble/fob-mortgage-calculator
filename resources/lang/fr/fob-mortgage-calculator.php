<?php

return [
    'name' => 'Calculateur Hypothécaire',
    'years' => 'ans',
    'year' => 'an',
    'month' => 'mois',
    'months' => 'mois',

    'methods' => [
        'decreasing_balance' => 'Solde Décroissant',
        'fixed_payment' => 'Paiement Fixe',
    ],

    'settings' => [
        'title' => 'Calculateur Hypothécaire',
        'description' => 'Configurer les valeurs par défaut du calculateur hypothécaire',
        'default_interest_rate' => 'Taux d\'Intérêt par Défaut (%)',
        'default_term_years' => 'Durée du Prêt par Défaut (années)',
        'default_down_payment_type' => 'Type d\'Apport par Défaut',
        'default_down_payment_value' => 'Valeur d\'Apport par Défaut',
        'show_extra_costs' => 'Afficher les Coûts Supplémentaires',
        'show_extra_costs_helper' => 'Activer les champs de taxe foncière, assurance et frais HOA dans le calculateur',
        'term_options' => 'Options de Durée du Prêt',
        'term_options_helper' => 'Liste séparée par des virgules des durées de prêt disponibles en années (ex., 10,15,20,25,30)',
        'currency_symbol' => 'Symbole de Devise',
    ],

    'down_payment_types' => [
        'percent' => 'Pourcentage',
        'amount' => 'Montant Fixe',
    ],

    'shortcode' => [
        'name' => 'Calculateur Hypothécaire',
        'description' => 'Afficher un calculateur de paiement hypothécaire avec des valeurs par défaut personnalisables',
        'style' => 'Style',
        'form_style' => 'Style du Formulaire',
        'form_size' => 'Taille du Formulaire',
        'form_alignment' => 'Alignement du Formulaire',
        'form_margin' => 'Marge du Formulaire',
        'form_margin_helper' => 'Espace extérieur du formulaire (ex: 20px, 1rem, 20px 0)',
        'form_padding' => 'Rembourrage du Formulaire',
        'form_padding_helper' => 'Espace intérieur du formulaire (ex: 20px, 1rem, 30px 20px)',
        'form_title' => 'Titre du Formulaire',
        'form_description' => 'Description du Formulaire',
        'default_price' => 'Prix de la Propriété par Défaut',
        'default_price_helper' => 'Laisser vide pour permettre aux utilisateurs d\'entrer leur propre prix',
        'default_term' => 'Durée du Prêt par Défaut (années)',
        'default_rate' => 'Taux d\'Intérêt par Défaut (%)',
        'default_down_payment_type' => 'Type d\'Apport par Défaut',
        'default_down_payment_value' => 'Valeur d\'Apport par Défaut',
        'show_extra_costs' => 'Afficher les Coûts Supplémentaires',
        'currency' => 'Symbole de Devise',
        'price_from' => 'Source du Prix',
        'price_from_helper' => 'Choisir d\'où obtenir le prix de la propriété',
        'primary_color' => 'Couleur Primaire',
        'layout' => 'Disposition',
    ],

    'layouts' => [
        'horizontal' => 'Horizontal',
        'vertical' => 'Vertical',
    ],

    'styles' => [
        'default' => 'Par Défaut',
        'compact' => 'Compact',
    ],

    'form_styles' => [
        'default' => 'Par Défaut',
        'modern' => 'Moderne',
        'minimal' => 'Minimaliste',
        'bold' => 'Gras',
        'glass' => 'Glassmorphisme',
    ],

    'form_sizes' => [
        'full' => 'Taille Complète (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Grand (992px)',
        'md' => 'Moyen (768px)',
        'sm' => 'Petit (576px)',
    ],

    'form_alignments' => [
        'start' => 'Gauche (Début)',
        'center' => 'Centre',
        'end' => 'Droite (Fin)',
    ],

    'price_from' => [
        'none' => 'Saisie Manuelle',
        'property' => 'De la Propriété',
    ],

    'fields' => [
        'property_price' => 'Prix de la Propriété',
        'down_payment' => 'Apport',
        'loan_amount' => 'Montant du Prêt',
        'loan_term' => 'Durée du Prêt',
        'interest_rate' => 'Taux d\'Intérêt',
        'disbursement_date' => 'Date de Décaissement',
        'extra_costs' => 'Coûts Supplémentaires (Facultatif)',
        'property_tax' => 'Taxe Foncière',
        'insurance' => 'Assurance Habitation',
        'hoa' => 'Frais HOA',
    ],

    'help' => [
        'down_payment_percent' => 'Entrer en pourcentage du prix de la propriété',
        'down_payment_amount' => 'Entrer comme montant fixe',
        'loan_amount_hint' => 'Faites glisser le curseur ou entrez le montant que vous souhaitez emprunter',
    ],

    'results' => [
        'monthly_pi' => 'P&I Mensuel',
        'monthly_payment' => 'Paiement Mensuel',
        'total_monthly' => 'Total Mensuel',
        'total_interest' => 'Intérêts Totaux',
        'total_paid' => 'Montant Total',
        'from' => 'De',
        'to' => 'À',
        'view_details' => 'Voir les Détails',
        'empty_state_title' => 'Calculez Votre Prêt Hypothécaire',
        'empty_state_message' => 'Entrez le prix de votre propriété et les détails du prêt ci-dessus pour voir les paiements mensuels estimés et les intérêts totaux.',
    ],

    'amortization' => [
        'title' => 'Tableau d\'Amortissement',
        'chart' => 'Graphique',
        'table' => 'Tableau',
        'period' => 'Période',
        'payment' => 'Paiement',
        'year' => 'Année',
        'principal' => 'Capital',
        'interest' => 'Intérêts',
        'balance' => 'Solde',
        'loan_amount' => 'Montant du Prêt',
        'total_principal' => 'Capital Total',
        'total_interest' => 'Intérêts Totaux',
    ],

    'widget' => [
        'name' => 'Calculateur Hypothécaire',
        'description' => 'Afficher le calculateur hypothécaire dans la barre latérale',
        'title' => 'Titre du Widget',
        'leave_empty_for_default' => 'Laisser vide pour utiliser les paramètres globaux',
        'use_default' => 'Utiliser par Défaut',
    ],

    'errors' => [
        'property_price_required' => 'Le prix de la propriété doit être supérieur à 0',
        'loan_amount_required' => 'Le montant du prêt doit être supérieur à 0',
        'loan_amount_exceeds_price' => 'Le montant du prêt ne peut pas dépasser le prix de la propriété',
        'loan_term_required' => 'La durée du prêt doit être supérieure à 0',
        'interest_rate_negative' => 'Le taux d\'intérêt ne peut pas être négatif',
    ],
];
