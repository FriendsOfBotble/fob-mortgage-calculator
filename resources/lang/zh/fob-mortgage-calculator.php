<?php

return [
    'name' => '抵押贷款计算器',
    'years' => '年',
    'year' => '年',
    'month' => '月',
    'months' => '个月',

    'methods' => [
        'decreasing_balance' => '递减余额',
        'fixed_payment' => '固定还款',
    ],

    'settings' => [
        'title' => '抵押贷款计算器',
        'description' => '配置抵押贷款计算器的默认值',
        'default_interest_rate' => '默认利率 (%)',
        'default_term_years' => '默认贷款期限（年）',
        'default_down_payment_type' => '默认首付类型',
        'default_down_payment_value' => '默认首付金额',
        'show_extra_costs' => '显示额外费用',
        'show_extra_costs_helper' => '在计算器中启用房产税、保险和HOA费用字段',
        'term_options' => '贷款期限选项',
        'term_options_helper' => '以逗号分隔的可用贷款期限列表（例如：10,15,20,25,30）',
        'currency_symbol' => '货币符号',
    ],

    'down_payment_types' => [
        'percent' => '百分比',
        'amount' => '固定金额',
    ],

    'shortcode' => [
        'name' => '抵押贷款计算器',
        'description' => '显示具有可自定义默认值的抵押贷款计算器',
        'style' => '样式',
        'form_style' => '表单样式',
        'form_size' => '表单大小',
        'form_alignment' => '表单对齐',
        'form_margin' => '表单边距',
        'form_margin_helper' => '表单外部间距（例如：20px, 1rem, 20px 0）',
        'form_padding' => '表单内边距',
        'form_padding_helper' => '表单内部间距（例如：20px, 1rem, 30px 20px）',
        'form_title' => '表单标题',
        'form_description' => '表单描述',
        'default_price' => '默认房产价格',
        'default_price_helper' => '留空让用户输入自己的价格',
        'default_term' => '默认贷款期限（年）',
        'default_rate' => '默认利率 (%)',
        'default_down_payment_type' => '默认首付类型',
        'default_down_payment_value' => '默认首付金额',
        'show_extra_costs' => '显示额外费用',
        'currency' => '货币符号',
        'price_from' => '价格来源',
        'price_from_helper' => '选择房产价格的来源',
        'primary_color' => '主色调',
        'layout' => '布局',
    ],

    'layouts' => [
        'horizontal' => '水平',
        'vertical' => '垂直',
    ],

    'styles' => [
        'default' => '默认',
        'compact' => '紧凑',
    ],

    'form_styles' => [
        'default' => '默认',
        'modern' => '现代',
        'minimal' => '简约',
        'bold' => '粗体',
        'glass' => '玻璃拟态',
    ],

    'form_sizes' => [
        'full' => '全尺寸 (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => '大 (992px)',
        'md' => '中 (768px)',
        'sm' => '小 (576px)',
    ],

    'form_alignments' => [
        'start' => '左对齐（开始）',
        'center' => '居中',
        'end' => '右对齐（结束）',
    ],

    'price_from' => [
        'none' => '手动输入',
        'property' => '从房产获取',
    ],

    'fields' => [
        'property_price' => '房产价格',
        'down_payment' => '首付',
        'loan_amount' => '贷款金额',
        'loan_term' => '贷款期限',
        'interest_rate' => '利率',
        'disbursement_date' => '放款日期',
        'extra_costs' => '额外费用（可选）',
        'property_tax' => '房产税',
        'insurance' => '房屋保险',
        'hoa' => 'HOA费用',
    ],

    'help' => [
        'down_payment_percent' => '输入房产价格的百分比',
        'down_payment_amount' => '输入固定金额',
        'loan_amount_hint' => '拖动滑块或输入您想借的金额',
    ],

    'results' => [
        'monthly_pi' => '月供本息',
        'monthly_payment' => '月供',
        'total_monthly' => '每月总额',
        'total_interest' => '总利息',
        'total_paid' => '总金额',
        'from' => '从',
        'to' => '到',
        'view_details' => '查看详情',
        'empty_state_title' => '计算您的抵押贷款',
        'empty_state_message' => '在上方输入您的房产价格和贷款详情以查看估计的月供和总利息。',
    ],

    'amortization' => [
        'title' => '摊销计划',
        'chart' => '图表',
        'table' => '表格',
        'period' => '期数',
        'payment' => '还款',
        'year' => '年份',
        'principal' => '本金',
        'interest' => '利息',
        'balance' => '余额',
        'loan_amount' => '贷款金额',
        'total_principal' => '总本金',
        'total_interest' => '总利息',
    ],

    'widget' => [
        'name' => '抵押贷款计算器',
        'description' => '在侧边栏显示抵押贷款计算器',
        'title' => '小部件标题',
        'leave_empty_for_default' => '留空使用全局设置',
        'use_default' => '使用默认',
    ],

    'errors' => [
        'property_price_required' => '房产价格必须大于0',
        'loan_amount_required' => '贷款金额必须大于0',
        'loan_amount_exceeds_price' => '贷款金额不能超过房产价格',
        'loan_term_required' => '贷款期限必须大于0',
        'interest_rate_negative' => '利率不能为负数',
    ],
];
