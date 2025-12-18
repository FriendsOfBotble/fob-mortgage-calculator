<?php

return [
    'name' => '按揭計算器',
    'years' => '年',
    'year' => '年',
    'month' => '月',
    'months' => '月',

    'methods' => [
        'decreasing_balance' => '遞減餘額',
        'fixed_payment' => '固定還款',
    ],

    'settings' => [
        'title' => '按揭計算器',
        'description' => '配置按揭計算器的預設值',
        'default_interest_rate' => '預設利率 (%)',
        'default_term_years' => '預設貸款期限（年）',
        'default_down_payment_type' => '預設首期類型',
        'default_down_payment_value' => '預設首期金額',
        'show_extra_costs' => '顯示額外費用',
        'show_extra_costs_helper' => '在計算器中啟用物業稅、保險和管理費欄位',
        'term_options' => '貸款期限選項',
        'term_options_helper' => '以逗號分隔的可用貸款期限列表（年）（例如：10,15,20,25,30）',
        'currency_symbol' => '貨幣符號',
    ],

    'down_payment_types' => [
        'percent' => '百分比',
        'amount' => '固定金額',
    ],

    'shortcode' => [
        'name' => '按揭計算器',
        'description' => '顯示具有可自訂預設值的按揭付款計算器',
        'style' => '樣式',
        'form_style' => '表單樣式',
        'form_size' => '表單大小',
        'form_alignment' => '表單對齊',
        'form_margin' => '表單外邊距',
        'form_margin_helper' => '表單外部間距（例如：20px, 1rem, 20px 0）',
        'form_padding' => '表單內邊距',
        'form_padding_helper' => '表單內部間距（例如：20px, 1rem, 30px 20px）',
        'form_title' => '表單標題',
        'form_description' => '表單描述',
        'default_price' => '預設物業價格',
        'default_price_helper' => '留空以讓用戶輸入自己的價格',
        'default_term' => '預設貸款期限（年）',
        'default_rate' => '預設利率 (%)',
        'default_down_payment_type' => '預設首期類型',
        'default_down_payment_value' => '預設首期金額',
        'show_extra_costs' => '顯示額外費用',
        'currency' => '貨幣符號',
        'price_from' => '價格來源',
        'price_from_helper' => '選擇從何處獲取物業價格',
        'primary_color' => '主色調',
        'layout' => '佈局',
    ],

    'layouts' => [
        'horizontal' => '水平',
        'vertical' => '垂直',
    ],

    'styles' => [
        'default' => '預設',
        'compact' => '緊湊',
    ],

    'form_styles' => [
        'default' => '預設',
        'modern' => '現代',
        'minimal' => '簡約',
        'bold' => '粗體',
        'glass' => '玻璃效果',
    ],

    'form_sizes' => [
        'full' => '完整大小 (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => '大 (992px)',
        'md' => '中 (768px)',
        'sm' => '小 (576px)',
    ],

    'form_alignments' => [
        'start' => '靠左（起始）',
        'center' => '置中',
        'end' => '靠右（結束）',
    ],

    'price_from' => [
        'none' => '手動輸入',
        'property' => '從物業',
    ],

    'fields' => [
        'property_price' => '物業價格',
        'down_payment' => '首期',
        'loan_amount' => '貸款金額',
        'loan_term' => '貸款期限',
        'interest_rate' => '利率',
        'disbursement_date' => '放款日期',
        'extra_costs' => '額外費用（可選）',
        'property_tax' => '物業稅',
        'insurance' => '房屋保險',
        'hoa' => '管理費',
    ],

    'help' => [
        'down_payment_percent' => '輸入物業價格的百分比',
        'down_payment_amount' => '輸入固定金額',
        'loan_amount_hint' => '拖動滑桿或輸入您想借貸的金額',
    ],

    'results' => [
        'monthly_pi' => '每月本息',
        'monthly_payment' => '每月還款',
        'total_monthly' => '每月總額',
        'total_interest' => '總利息',
        'total_paid' => '總金額',
        'from' => '從',
        'to' => '至',
        'view_details' => '查看詳情',
        'empty_state_title' => '計算您的按揭貸款',
        'empty_state_message' => '在上方輸入您的物業價格和貸款詳情以查看估計的月供和總利息。',
    ],

    'amortization' => [
        'title' => '攤還時間表',
        'chart' => '圖表',
        'table' => '表格',
        'period' => '期數',
        'payment' => '還款',
        'year' => '年',
        'principal' => '本金',
        'interest' => '利息',
        'balance' => '餘額',
        'loan_amount' => '貸款金額',
        'total_principal' => '總本金',
        'total_interest' => '總利息',
    ],

    'widget' => [
        'name' => '按揭計算器',
        'description' => '在側邊欄顯示按揭計算器',
        'title' => '小工具標題',
        'leave_empty_for_default' => '留空以使用全域設定',
        'use_default' => '使用預設',
    ],

    'errors' => [
        'property_price_required' => '物業價格必須大於0',
        'loan_amount_required' => '貸款金額必須大於0',
        'loan_amount_exceeds_price' => '貸款金額不能超過物業價格',
        'loan_term_required' => '貸款期限必須大於0',
        'interest_rate_negative' => '利率不能為負數',
    ],
];
