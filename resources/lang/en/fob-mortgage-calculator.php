<?php

return [
    'name' => 'Mortgage Calculator',
    'years' => 'years',
    'year' => 'year',
    'month' => 'month',
    'months' => 'months',

    'methods' => [
        'decreasing_balance' => 'Decreasing Balance',
        'fixed_payment' => 'Fixed Payment',
    ],

    'settings' => [
        'title' => 'Mortgage Calculator',
        'description' => 'Configure default values for the mortgage calculator',
        'default_interest_rate' => 'Default Interest Rate (%)',
        'default_term_years' => 'Default Loan Term (years)',
        'default_down_payment_type' => 'Default Down Payment Type',
        'default_down_payment_value' => 'Default Down Payment Value',
        'show_extra_costs' => 'Show Extra Costs',
        'show_extra_costs_helper' => 'Enable property tax, insurance, and HOA fee fields in the calculator',
        'term_options' => 'Loan Term Options',
        'term_options_helper' => 'Comma-separated list of available loan terms in years (e.g., 10,15,20,25,30)',
        'currency_symbol' => 'Currency Symbol',
    ],

    'down_payment_types' => [
        'percent' => 'Percentage',
        'amount' => 'Fixed Amount',
    ],

    'shortcode' => [
        'name' => 'Mortgage Calculator',
        'description' => 'Display a mortgage payment calculator with customizable defaults',
        'style' => 'Style',
        'form_style' => 'Form Style',
        'form_size' => 'Form Size',
        'form_alignment' => 'Form Alignment',
        'form_margin' => 'Form Margin',
        'form_margin_helper' => 'Space outside the form (e.g., 20px, 1rem, 20px 0)',
        'form_padding' => 'Form Padding',
        'form_padding_helper' => 'Space inside the form (e.g., 20px, 1rem, 30px 20px)',
        'form_title' => 'Form Title',
        'form_description' => 'Form Description',
        'default_price' => 'Default Property Price',
        'default_price_helper' => 'Leave empty to let users enter their own price',
        'default_term' => 'Default Loan Term (years)',
        'default_rate' => 'Default Interest Rate (%)',
        'default_down_payment_type' => 'Default Down Payment Type',
        'default_down_payment_value' => 'Default Down Payment Value',
        'show_extra_costs' => 'Show Extra Costs',
        'currency' => 'Currency Symbol',
        'price_from' => 'Price Source',
        'price_from_helper' => 'Choose where to get the property price from',
        'primary_color' => 'Primary Color',
        'layout' => 'Layout',
    ],

    'layouts' => [
        'horizontal' => 'Horizontal',
        'vertical' => 'Vertical',
    ],

    'styles' => [
        'default' => 'Default',
        'compact' => 'Compact',
    ],

    'form_styles' => [
        'default' => 'Default',
        'modern' => 'Modern',
        'minimal' => 'Minimal',
        'bold' => 'Bold',
        'glass' => 'Glassmorphism',
    ],

    'form_sizes' => [
        'full' => 'Full Size (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Large (992px)',
        'md' => 'Medium (768px)',
        'sm' => 'Small (576px)',
    ],

    'form_alignments' => [
        'start' => 'Left (Start)',
        'center' => 'Center',
        'end' => 'Right (End)',
    ],

    'price_from' => [
        'none' => 'Manual Entry',
        'property' => 'From Property',
    ],

    'fields' => [
        'property_price' => 'Property Price',
        'down_payment' => 'Down Payment',
        'loan_amount' => 'Loan Amount',
        'loan_term' => 'Loan Term',
        'interest_rate' => 'Interest Rate',
        'disbursement_date' => 'Disbursement Date',
        'extra_costs' => 'Additional Costs (Optional)',
        'property_tax' => 'Property Tax',
        'insurance' => 'Home Insurance',
        'hoa' => 'HOA Fees',
    ],

    'help' => [
        'down_payment_percent' => 'Enter as percentage of property price',
        'down_payment_amount' => 'Enter as fixed amount',
        'loan_amount_hint' => 'Drag the slider or enter the amount you want to borrow',
    ],

    'results' => [
        'monthly_pi' => 'Monthly P&I',
        'monthly_payment' => 'Monthly Payment',
        'total_monthly' => 'Total Monthly',
        'total_interest' => 'Total Interest',
        'total_paid' => 'Total Amount',
        'from' => 'From',
        'to' => 'To',
        'view_details' => 'View Details',
        'empty_state_title' => 'Calculate Your Mortgage',
        'empty_state_message' => 'Enter your property price and loan details above to see estimated monthly payments and total interest.',
    ],

    'amortization' => [
        'title' => 'Amortization Schedule',
        'chart' => 'Chart',
        'table' => 'Table',
        'period' => 'Period',
        'payment' => 'Payment',
        'year' => 'Year',
        'principal' => 'Principal',
        'interest' => 'Interest',
        'balance' => 'Balance',
        'loan_amount' => 'Loan Amount',
        'total_principal' => 'Total Principal',
        'total_interest' => 'Total Interest',
    ],

    'widget' => [
        'name' => 'Mortgage Calculator',
        'description' => 'Display mortgage calculator in sidebar',
        'title' => 'Widget Title',
        'leave_empty_for_default' => 'Leave empty to use global settings',
        'use_default' => 'Use Default',
    ],

    'errors' => [
        'property_price_required' => 'Property price must be greater than 0',
        'loan_amount_required' => 'Loan amount must be greater than 0',
        'loan_amount_exceeds_price' => 'Loan amount cannot exceed property price',
        'loan_term_required' => 'Loan term must be greater than 0',
        'interest_rate_negative' => 'Interest rate cannot be negative',
    ],
];
