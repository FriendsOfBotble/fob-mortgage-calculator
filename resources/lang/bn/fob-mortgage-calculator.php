<?php

return [
    'name' => 'মর্টগেজ ক্যালকুলেটর',
    'years' => 'বছর',
    'year' => 'বছর',
    'month' => 'মাস',
    'months' => 'মাস',

    'methods' => [
        'decreasing_balance' => 'হ্রাসমান ব্যালেন্স',
        'fixed_payment' => 'নির্দিষ্ট পেমেন্ট',
    ],

    'settings' => [
        'title' => 'মর্টগেজ ক্যালকুলেটর',
        'description' => 'মর্টগেজ ক্যালকুলেটরের জন্য ডিফল্ট মান কনফিগার করুন',
        'default_interest_rate' => 'ডিফল্ট সুদের হার (%)',
        'default_term_years' => 'ডিফল্ট ঋণের মেয়াদ (বছর)',
        'default_down_payment_type' => 'ডিফল্ট ডাউন পেমেন্ট প্রকার',
        'default_down_payment_value' => 'ডিফল্ট ডাউন পেমেন্ট মান',
        'show_extra_costs' => 'অতিরিক্ত খরচ দেখান',
        'show_extra_costs_helper' => 'ক্যালকুলেটরে সম্পত্তি কর, বীমা এবং HOA ফি ফিল্ড সক্রিয় করুন',
        'term_options' => 'ঋণের মেয়াদ বিকল্প',
        'term_options_helper' => 'বছরে উপলব্ধ ঋণের মেয়াদের কমা-বিভক্ত তালিকা (উদা., 10,15,20,25,30)',
        'currency_symbol' => 'মুদ্রা প্রতীক',
    ],

    'down_payment_types' => [
        'percent' => 'শতাংশ',
        'amount' => 'নির্দিষ্ট পরিমাণ',
    ],

    'shortcode' => [
        'name' => 'মর্টগেজ ক্যালকুলেটর',
        'description' => 'কাস্টমাইজযোগ্য ডিফল্ট সহ মর্টগেজ পেমেন্ট ক্যালকুলেটর প্রদর্শন করুন',
        'style' => 'স্টাইল',
        'form_style' => 'ফর্ম স্টাইল',
        'form_size' => 'ফর্ম সাইজ',
        'form_alignment' => 'ফর্ম সারিবদ্ধতা',
        'form_margin' => 'ফর্ম মার্জিন',
        'form_margin_helper' => 'ফর্মের বাইরের স্থান (যেমন: 20px, 1rem, 20px 0)',
        'form_padding' => 'ফর্ম প্যাডিং',
        'form_padding_helper' => 'ফর্মের ভিতরের স্থান (যেমন: 20px, 1rem, 30px 20px)',
        'form_title' => 'ফর্ম শিরোনাম',
        'form_description' => 'ফর্ম বিবরণ',
        'default_price' => 'ডিফল্ট সম্পত্তি মূল্য',
        'default_price_helper' => 'ব্যবহারকারীদের তাদের নিজস্ব মূল্য প্রবেশ করতে দিতে খালি রাখুন',
        'default_term' => 'ডিফল্ট ঋণের মেয়াদ (বছর)',
        'default_rate' => 'ডিফল্ট সুদের হার (%)',
        'default_down_payment_type' => 'ডিফল্ট ডাউন পেমেন্ট প্রকার',
        'default_down_payment_value' => 'ডিফল্ট ডাউন পেমেন্ট মান',
        'show_extra_costs' => 'অতিরিক্ত খরচ দেখান',
        'currency' => 'মুদ্রা প্রতীক',
        'price_from' => 'মূল্যের উৎস',
        'price_from_helper' => 'সম্পত্তি মূল্য কোথা থেকে পেতে হবে তা নির্বাচন করুন',
        'primary_color' => 'প্রাথমিক রঙ',
        'layout' => 'লেআউট',
    ],

    'layouts' => [
        'horizontal' => 'অনুভূমিক',
        'vertical' => 'উল্লম্ব',
    ],

    'styles' => [
        'default' => 'ডিফল্ট',
        'compact' => 'কমপ্যাক্ট',
    ],

    'form_styles' => [
        'default' => 'ডিফল্ট',
        'modern' => 'আধুনিক',
        'minimal' => 'ন্যূনতম',
        'bold' => 'বোল্ড',
        'glass' => 'গ্লাসমরফিজম',
    ],

    'form_sizes' => [
        'full' => 'পূর্ণ আকার (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'বড় (992px)',
        'md' => 'মাঝারি (768px)',
        'sm' => 'ছোট (576px)',
    ],

    'form_alignments' => [
        'start' => 'বাম (শুরু)',
        'center' => 'কেন্দ্র',
        'end' => 'ডান (শেষ)',
    ],

    'price_from' => [
        'none' => 'ম্যানুয়াল এন্ট্রি',
        'property' => 'সম্পত্তি থেকে',
    ],

    'fields' => [
        'property_price' => 'সম্পত্তি মূল্য',
        'down_payment' => 'ডাউন পেমেন্ট',
        'loan_amount' => 'ঋণের পরিমাণ',
        'loan_term' => 'ঋণের মেয়াদ',
        'interest_rate' => 'সুদের হার',
        'disbursement_date' => 'বিতরণ তারিখ',
        'extra_costs' => 'অতিরিক্ত খরচ (ঐচ্ছিক)',
        'property_tax' => 'সম্পত্তি কর',
        'insurance' => 'বাড়ি বীমা',
        'hoa' => 'HOA ফি',
    ],

    'help' => [
        'down_payment_percent' => 'সম্পত্তি মূল্যের শতাংশ হিসাবে প্রবেশ করুন',
        'down_payment_amount' => 'নির্দিষ্ট পরিমাণ হিসাবে প্রবেশ করুন',
        'loan_amount_hint' => 'স্লাইডার টেনে আনুন বা আপনি যে পরিমাণ ধার নিতে চান তা লিখুন',
    ],

    'results' => [
        'monthly_pi' => 'মাসিক মূ&সু',
        'monthly_payment' => 'মাসিক পেমেন্ট',
        'total_monthly' => 'মোট মাসিক',
        'total_interest' => 'মোট সুদ',
        'total_paid' => 'মোট পরিমাণ',
        'from' => 'থেকে',
        'to' => 'পর্যন্ত',
        'view_details' => 'বিস্তারিত দেখুন',
        'empty_state_title' => 'আপনার বন্ধক গণনা করুন',
        'empty_state_message' => 'আনুমানিক মাসিক পেমেন্ট এবং মোট সুদ দেখতে উপরে আপনার সম্পত্তির মূল্য এবং ঋণের বিবরণ লিখুন।',
    ],

    'amortization' => [
        'title' => 'পরিশোধ সূচি',
        'chart' => 'চার্ট',
        'table' => 'টেবিল',
        'period' => 'সময়কাল',
        'payment' => 'পেমেন্ট',
        'year' => 'বছর',
        'principal' => 'মূলধন',
        'interest' => 'সুদ',
        'balance' => 'ব্যালেন্স',
        'loan_amount' => 'ঋণের পরিমাণ',
        'total_principal' => 'মোট মূলধন',
        'total_interest' => 'মোট সুদ',
    ],

    'widget' => [
        'name' => 'মর্টগেজ ক্যালকুলেটর',
        'description' => 'সাইডবারে মর্টগেজ ক্যালকুলেটর প্রদর্শন করুন',
        'title' => 'উইজেট শিরোনাম',
        'leave_empty_for_default' => 'গ্লোবাল সেটিংস ব্যবহার করতে খালি রাখুন',
        'use_default' => 'ডিফল্ট ব্যবহার করুন',
    ],

    'errors' => [
        'property_price_required' => 'সম্পত্তির মূল্য 0-এর চেয়ে বেশি হতে হবে',
        'loan_amount_required' => 'ঋণের পরিমাণ 0-এর চেয়ে বেশি হতে হবে',
        'loan_amount_exceeds_price' => 'ঋণের পরিমাণ সম্পত্তির মূল্য অতিক্রম করতে পারবে না',
        'loan_term_required' => 'ঋণের মেয়াদ 0-এর চেয়ে বেশি হতে হবে',
        'interest_rate_negative' => 'সুদের হার ঋণাত্মক হতে পারে না',
    ],
];
