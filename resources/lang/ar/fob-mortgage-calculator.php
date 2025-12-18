<?php

return [
    'name' => 'حاسبة الرهن العقاري',
    'years' => 'سنوات',
    'year' => 'سنة',
    'month' => 'شهر',
    'months' => 'أشهر',

    'methods' => [
        'decreasing_balance' => 'الرصيد المتناقص',
        'fixed_payment' => 'الدفع الثابت',
    ],

    'settings' => [
        'title' => 'حاسبة الرهن العقاري',
        'description' => 'تكوين القيم الافتراضية لحاسبة الرهن العقاري',
        'default_interest_rate' => 'معدل الفائدة الافتراضي (%)',
        'default_term_years' => 'مدة القرض الافتراضية (سنوات)',
        'default_down_payment_type' => 'نوع الدفعة الأولى الافتراضي',
        'default_down_payment_value' => 'قيمة الدفعة الأولى الافتراضية',
        'show_extra_costs' => 'عرض التكاليف الإضافية',
        'show_extra_costs_helper' => 'تمكين حقول ضريبة الممتلكات والتأمين ورسوم HOA في الحاسبة',
        'term_options' => 'خيارات مدة القرض',
        'term_options_helper' => 'قائمة مفصولة بفواصل من مدد القرض المتاحة بالسنوات (مثل: 10,15,20,25,30)',
        'currency_symbol' => 'رمز العملة',
    ],

    'down_payment_types' => [
        'percent' => 'نسبة مئوية',
        'amount' => 'مبلغ ثابت',
    ],

    'shortcode' => [
        'name' => 'حاسبة الرهن العقاري',
        'description' => 'عرض حاسبة دفعات الرهن العقاري مع إعدادات افتراضية قابلة للتخصيص',
        'style' => 'النمط',
        'form_style' => 'نمط النموذج',
        'form_size' => 'حجم النموذج',
        'form_alignment' => 'محاذاة النموذج',
        'form_margin' => 'هامش النموذج',
        'form_margin_helper' => 'المسافة خارج النموذج (مثال: 20px, 1rem, 20px 0)',
        'form_padding' => 'حشوة النموذج',
        'form_padding_helper' => 'المسافة داخل النموذج (مثال: 20px, 1rem, 30px 20px)',
        'form_title' => 'عنوان النموذج',
        'form_description' => 'وصف النموذج',
        'default_price' => 'سعر العقار الافتراضي',
        'default_price_helper' => 'اتركه فارغاً للسماح للمستخدمين بإدخال سعرهم الخاص',
        'default_term' => 'مدة القرض الافتراضية (سنوات)',
        'default_rate' => 'معدل الفائدة الافتراضي (%)',
        'default_down_payment_type' => 'نوع الدفعة الأولى الافتراضي',
        'default_down_payment_value' => 'قيمة الدفعة الأولى الافتراضية',
        'show_extra_costs' => 'عرض التكاليف الإضافية',
        'currency' => 'رمز العملة',
        'price_from' => 'مصدر السعر',
        'price_from_helper' => 'اختر من أين تحصل على سعر العقار',
        'primary_color' => 'اللون الأساسي',
        'layout' => 'التخطيط',
    ],

    'layouts' => [
        'horizontal' => 'أفقي',
        'vertical' => 'عمودي',
    ],

    'styles' => [
        'default' => 'افتراضي',
        'compact' => 'مضغوط',
    ],

    'form_styles' => [
        'default' => 'افتراضي',
        'modern' => 'عصري',
        'minimal' => 'بسيط',
        'bold' => 'عريض',
        'glass' => 'زجاجي',
    ],

    'form_sizes' => [
        'full' => 'حجم كامل (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'كبير (992px)',
        'md' => 'متوسط (768px)',
        'sm' => 'صغير (576px)',
    ],

    'form_alignments' => [
        'start' => 'يسار (بداية)',
        'center' => 'وسط',
        'end' => 'يمين (نهاية)',
    ],

    'price_from' => [
        'none' => 'إدخال يدوي',
        'property' => 'من العقار',
    ],

    'fields' => [
        'property_price' => 'سعر العقار',
        'down_payment' => 'الدفعة الأولى',
        'loan_amount' => 'مبلغ القرض',
        'loan_term' => 'مدة القرض',
        'interest_rate' => 'معدل الفائدة',
        'disbursement_date' => 'تاريخ الصرف',
        'extra_costs' => 'تكاليف إضافية (اختياري)',
        'property_tax' => 'ضريبة الممتلكات',
        'insurance' => 'التأمين على المنزل',
        'hoa' => 'رسوم HOA',
    ],

    'help' => [
        'down_payment_percent' => 'أدخل كنسبة مئوية من سعر العقار',
        'down_payment_amount' => 'أدخل كمبلغ ثابت',
        'loan_amount_hint' => 'اسحب المؤشر أو أدخل المبلغ الذي تريد اقتراضه',
    ],

    'results' => [
        'monthly_pi' => 'P&I الشهري',
        'monthly_payment' => 'الدفعة الشهرية',
        'total_monthly' => 'الإجمالي الشهري',
        'total_interest' => 'إجمالي الفائدة',
        'total_paid' => 'المبلغ الإجمالي',
        'from' => 'من',
        'to' => 'إلى',
        'view_details' => 'عرض التفاصيل',
        'empty_state_title' => 'احسب الرهن العقاري الخاص بك',
        'empty_state_message' => 'أدخل سعر العقار وتفاصيل القرض أعلاه لمشاهدة الدفعات الشهرية المقدرة وإجمالي الفائدة.',
    ],

    'amortization' => [
        'title' => 'جدول الاستهلاك',
        'chart' => 'رسم بياني',
        'table' => 'جدول',
        'period' => 'الفترة',
        'payment' => 'الدفعة',
        'year' => 'السنة',
        'principal' => 'الأصل',
        'interest' => 'الفائدة',
        'balance' => 'الرصيد',
        'loan_amount' => 'مبلغ القرض',
        'total_principal' => 'إجمالي الأصل',
        'total_interest' => 'إجمالي الفائدة',
    ],

    'widget' => [
        'name' => 'حاسبة الرهن العقاري',
        'description' => 'عرض حاسبة الرهن العقاري في الشريط الجانبي',
        'title' => 'عنوان الأداة',
        'leave_empty_for_default' => 'اتركه فارغاً لاستخدام الإعدادات العامة',
        'use_default' => 'استخدام الافتراضي',
    ],

    'errors' => [
        'property_price_required' => 'يجب أن يكون سعر العقار أكبر من 0',
        'loan_amount_required' => 'يجب أن يكون مبلغ القرض أكبر من 0',
        'loan_amount_exceeds_price' => 'لا يمكن أن يتجاوز مبلغ القرض سعر العقار',
        'loan_term_required' => 'يجب أن تكون مدة القرض أكبر من 0',
        'interest_rate_negative' => 'لا يمكن أن يكون معدل الفائدة سالباً',
    ],
];
