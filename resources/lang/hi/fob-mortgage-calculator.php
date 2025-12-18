<?php

return [
    'name' => 'मॉर्गेज कैलकुलेटर',
    'years' => 'वर्ष',
    'year' => 'वर्ष',
    'month' => 'महीना',
    'months' => 'महीने',

    'methods' => [
        'decreasing_balance' => 'घटती शेष राशि',
        'fixed_payment' => 'निश्चित भुगतान',
    ],

    'settings' => [
        'title' => 'मॉर्गेज कैलकुलेटर',
        'description' => 'मॉर्गेज कैलकुलेटर के लिए डिफ़ॉल्ट मान कॉन्फ़िगर करें',
        'default_interest_rate' => 'डिफ़ॉल्ट ब्याज दर (%)',
        'default_term_years' => 'डिफ़ॉल्ट ऋण अवधि (वर्ष)',
        'default_down_payment_type' => 'डिफ़ॉल्ट डाउन पेमेंट प्रकार',
        'default_down_payment_value' => 'डिफ़ॉल्ट डाउन पेमेंट मूल्य',
        'show_extra_costs' => 'अतिरिक्त लागत दिखाएं',
        'show_extra_costs_helper' => 'कैलकुलेटर में संपत्ति कर, बीमा और HOA शुल्क फ़ील्ड सक्षम करें',
        'term_options' => 'ऋण अवधि विकल्प',
        'term_options_helper' => 'वर्षों में उपलब्ध ऋण अवधियों की अल्पविराम से अलग सूची (उदा., 10,15,20,25,30)',
        'currency_symbol' => 'मुद्रा प्रतीक',
    ],

    'down_payment_types' => [
        'percent' => 'प्रतिशत',
        'amount' => 'निश्चित राशि',
    ],

    'shortcode' => [
        'name' => 'मॉर्गेज कैलकुलेटर',
        'description' => 'अनुकूलन योग्य डिफ़ॉल्ट के साथ मॉर्गेज भुगतान कैलकुलेटर प्रदर्शित करें',
        'style' => 'शैली',
        'form_style' => 'फॉर्म शैली',
        'form_size' => 'फॉर्म आकार',
        'form_alignment' => 'फॉर्म संरेखण',
        'form_margin' => 'फॉर्म मार्जिन',
        'form_margin_helper' => 'फॉर्म के बाहर का स्थान (उदा. 20px, 1rem, 20px 0)',
        'form_padding' => 'फॉर्म पैडिंग',
        'form_padding_helper' => 'फॉर्म के अंदर का स्थान (उदा. 20px, 1rem, 30px 20px)',
        'form_title' => 'फॉर्म शीर्षक',
        'form_description' => 'फॉर्म विवरण',
        'default_price' => 'डिफ़ॉल्ट संपत्ति मूल्य',
        'default_price_helper' => 'उपयोगकर्ताओं को अपना मूल्य दर्ज करने देने के लिए खाली छोड़ें',
        'default_term' => 'डिफ़ॉल्ट ऋण अवधि (वर्ष)',
        'default_rate' => 'डिफ़ॉल्ट ब्याज दर (%)',
        'default_down_payment_type' => 'डिफ़ॉल्ट डाउन पेमेंट प्रकार',
        'default_down_payment_value' => 'डिफ़ॉल्ट डाउन पेमेंट मूल्य',
        'show_extra_costs' => 'अतिरिक्त लागत दिखाएं',
        'currency' => 'मुद्रा प्रतीक',
        'price_from' => 'मूल्य स्रोत',
        'price_from_helper' => 'संपत्ति मूल्य कहां से प्राप्त करना है चुनें',
        'primary_color' => 'प्राथमिक रंग',
        'layout' => 'लेआउट',
    ],

    'layouts' => [
        'horizontal' => 'क्षैतिज',
        'vertical' => 'लंबवत',
    ],

    'styles' => [
        'default' => 'डिफ़ॉल्ट',
        'compact' => 'कॉम्पैक्ट',
    ],

    'form_styles' => [
        'default' => 'डिफ़ॉल्ट',
        'modern' => 'आधुनिक',
        'minimal' => 'न्यूनतम',
        'bold' => 'बोल्ड',
        'glass' => 'ग्लासमॉर्फिज़्म',
    ],

    'form_sizes' => [
        'full' => 'पूर्ण आकार (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'बड़ा (992px)',
        'md' => 'मध्यम (768px)',
        'sm' => 'छोटा (576px)',
    ],

    'form_alignments' => [
        'start' => 'बाएं (प्रारंभ)',
        'center' => 'केंद्र',
        'end' => 'दाएं (अंत)',
    ],

    'price_from' => [
        'none' => 'मैन्युअल प्रविष्टि',
        'property' => 'संपत्ति से',
    ],

    'fields' => [
        'property_price' => 'संपत्ति मूल्य',
        'down_payment' => 'डाउन पेमेंट',
        'loan_amount' => 'ऋण राशि',
        'loan_term' => 'ऋण अवधि',
        'interest_rate' => 'ब्याज दर',
        'disbursement_date' => 'संवितरण तिथि',
        'extra_costs' => 'अतिरिक्त लागत (वैकल्पिक)',
        'property_tax' => 'संपत्ति कर',
        'insurance' => 'गृह बीमा',
        'hoa' => 'HOA शुल्क',
    ],

    'help' => [
        'down_payment_percent' => 'संपत्ति मूल्य के प्रतिशत के रूप में दर्ज करें',
        'down_payment_amount' => 'निश्चित राशि के रूप में दर्ज करें',
        'loan_amount_hint' => 'स्लाइडर खींचें या वह राशि दर्ज करें जो आप उधार लेना चाहते हैं',
    ],

    'results' => [
        'monthly_pi' => 'मासिक मू&ब्या',
        'monthly_payment' => 'मासिक भुगतान',
        'total_monthly' => 'कुल मासिक',
        'total_interest' => 'कुल ब्याज',
        'total_paid' => 'कुल राशि',
        'from' => 'से',
        'to' => 'तक',
        'view_details' => 'विवरण देखें',
        'empty_state_title' => 'अपने बंधक की गणना करें',
        'empty_state_message' => 'अनुमानित मासिक भुगतान और कुल ब्याज देखने के लिए ऊपर अपनी संपत्ति मूल्य और ऋण विवरण दर्ज करें।',
    ],

    'amortization' => [
        'title' => 'परिशोधन अनुसूची',
        'chart' => 'चार्ट',
        'table' => 'तालिका',
        'period' => 'अवधि',
        'payment' => 'भुगतान',
        'year' => 'वर्ष',
        'principal' => 'मूलधन',
        'interest' => 'ब्याज',
        'balance' => 'शेष',
        'loan_amount' => 'ऋण राशि',
        'total_principal' => 'कुल मूलधन',
        'total_interest' => 'कुल ब्याज',
    ],

    'widget' => [
        'name' => 'मॉर्गेज कैलकुलेटर',
        'description' => 'साइडबार में मॉर्गेज कैलकुलेटर प्रदर्शित करें',
        'title' => 'विजेट शीर्षक',
        'leave_empty_for_default' => 'वैश्विक सेटिंग्स का उपयोग करने के लिए खाली छोड़ें',
        'use_default' => 'डिफ़ॉल्ट का उपयोग करें',
    ],

    'errors' => [
        'property_price_required' => 'संपत्ति मूल्य 0 से अधिक होना चाहिए',
        'loan_amount_required' => 'ऋण राशि 0 से अधिक होनी चाहिए',
        'loan_amount_exceeds_price' => 'ऋण राशि संपत्ति मूल्य से अधिक नहीं हो सकती',
        'loan_term_required' => 'ऋण अवधि 0 से अधिक होनी चाहिए',
        'interest_rate_negative' => 'ब्याज दर नकारात्मक नहीं हो सकती',
    ],
];
