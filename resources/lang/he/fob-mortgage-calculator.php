<?php

return [
    'name' => 'מחשבון משכנתא',
    'years' => 'שנים',
    'year' => 'שנה',
    'month' => 'חודש',
    'months' => 'חודשים',

    'methods' => [
        'decreasing_balance' => 'יתרה יורדת',
        'fixed_payment' => 'תשלום קבוע',
    ],

    'settings' => [
        'title' => 'מחשבון משכנתא',
        'description' => 'הגדרת ערכי ברירת מחדל עבור מחשבון המשכנתא',
        'default_interest_rate' => 'שיעור ריבית ברירת מחדל (%)',
        'default_term_years' => 'תקופת הלוואה ברירת מחדל (שנים)',
        'default_down_payment_type' => 'סוג מקדמה ברירת מחדל',
        'default_down_payment_value' => 'ערך מקדמה ברירת מחדל',
        'show_extra_costs' => 'הצגת עלויות נוספות',
        'show_extra_costs_helper' => 'הפעלת שדות מס נכס, ביטוח ודמי HOA במחשבון',
        'term_options' => 'אפשרויות תקופת הלוואה',
        'term_options_helper' => 'רשימת תקופות הלוואה זמינות בשנים מופרדת בפסיקים (למשל, 10,15,20,25,30)',
        'currency_symbol' => 'סמל מטבע',
    ],

    'down_payment_types' => [
        'percent' => 'אחוז',
        'amount' => 'סכום קבוע',
    ],

    'shortcode' => [
        'name' => 'מחשבון משכנתא',
        'description' => 'הצגת מחשבון תשלומי משכנתא עם ברירות מחדל להתאמה אישית',
        'style' => 'סגנון',
        'form_style' => 'סגנון טופס',
        'form_size' => 'גודל טופס',
        'form_alignment' => 'יישור טופס',
        'form_margin' => 'שוליים חיצוניים של טופס',
        'form_margin_helper' => 'מרווח מחוץ לטופס (למשל, 20px, 1rem, 20px 0)',
        'form_padding' => 'שוליים פנימיים של טופס',
        'form_padding_helper' => 'מרווח בתוך הטופס (למשל, 20px, 1rem, 30px 20px)',
        'form_title' => 'כותרת טופס',
        'form_description' => 'תיאור טופס',
        'default_price' => 'מחיר נכס ברירת מחדל',
        'default_price_helper' => 'השאירו ריק כדי לאפשר למשתמשים להזין מחיר משלהם',
        'default_term' => 'תקופת הלוואה ברירת מחדל (שנים)',
        'default_rate' => 'שיעור ריבית ברירת מחדל (%)',
        'default_down_payment_type' => 'סוג מקדמה ברירת מחדל',
        'default_down_payment_value' => 'ערך מקדמה ברירת מחדל',
        'show_extra_costs' => 'הצגת עלויות נוספות',
        'currency' => 'סמל מטבע',
        'price_from' => 'מקור מחיר',
        'price_from_helper' => 'בחרו מהיכן להביא את מחיר הנכס',
        'primary_color' => 'צבע עיקרי',
        'layout' => 'פריסה',
    ],

    'layouts' => [
        'horizontal' => 'אופקי',
        'vertical' => 'אנכי',
    ],

    'styles' => [
        'default' => 'ברירת מחדל',
        'compact' => 'קומפקטי',
    ],

    'form_styles' => [
        'default' => 'ברירת מחדל',
        'modern' => 'מודרני',
        'minimal' => 'מינימלי',
        'bold' => 'מודגש',
        'glass' => 'אפקט זכוכית',
    ],

    'form_sizes' => [
        'full' => 'גודל מלא (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'גדול (992px)',
        'md' => 'בינוני (768px)',
        'sm' => 'קטן (576px)',
    ],

    'form_alignments' => [
        'start' => 'שמאל (התחלה)',
        'center' => 'מרכז',
        'end' => 'ימין (סוף)',
    ],

    'price_from' => [
        'none' => 'הזנה ידנית',
        'property' => 'מהנכס',
    ],

    'fields' => [
        'property_price' => 'מחיר נכס',
        'down_payment' => 'מקדמה',
        'loan_amount' => 'סכום הלוואה',
        'loan_term' => 'תקופת הלוואה',
        'interest_rate' => 'שיעור ריבית',
        'disbursement_date' => 'תאריך פירעון',
        'extra_costs' => 'עלויות נוספות (אופציונלי)',
        'property_tax' => 'מס נכס',
        'insurance' => 'ביטוח דירה',
        'hoa' => 'דמי HOA',
    ],

    'help' => [
        'down_payment_percent' => 'הזינו כאחוז ממחיר הנכס',
        'down_payment_amount' => 'הזינו כסכום קבוע',
        'loan_amount_hint' => 'גררו את המחוון או הזינו את הסכום שברצונכם ללוות',
    ],

    'results' => [
        'monthly_pi' => 'קרן וריבית חודשיים',
        'monthly_payment' => 'תשלום חודשי',
        'total_monthly' => 'סך הכל חודשי',
        'total_interest' => 'סך הכל ריבית',
        'total_paid' => 'סכום כולל',
        'from' => 'מ',
        'to' => 'עד',
        'view_details' => 'צפייה בפרטים',
        'empty_state_title' => 'חשב את המשכנתא שלך',
        'empty_state_message' => 'הזן את מחיר הנכס ופרטי ההלוואה למעלה כדי לראות את התשלומים החודשיים המשוערים והריבית הכוללת.',
    ],

    'amortization' => [
        'title' => 'לוח סילוקין',
        'chart' => 'תרשים',
        'table' => 'טבלה',
        'period' => 'תקופה',
        'payment' => 'תשלום',
        'year' => 'שנה',
        'principal' => 'קרן',
        'interest' => 'ריבית',
        'balance' => 'יתרה',
        'loan_amount' => 'סכום הלוואה',
        'total_principal' => 'סך הכל קרן',
        'total_interest' => 'סך הכל ריבית',
    ],

    'widget' => [
        'name' => 'מחשבון משכנתא',
        'description' => 'הצגת מחשבון משכנתא בסרגל הצד',
        'title' => 'כותרת וידג\'ט',
        'leave_empty_for_default' => 'השאירו ריק לשימוש בהגדרות גלובליות',
        'use_default' => 'שימוש בברירת מחדל',
    ],

    'errors' => [
        'property_price_required' => 'מחיר הנכס חייב להיות גדול מ-0',
        'loan_amount_required' => 'סכום ההלוואה חייב להיות גדול מ-0',
        'loan_amount_exceeds_price' => 'סכום ההלוואה לא יכול לעלות על מחיר הנכס',
        'loan_term_required' => 'תקופת ההלוואה חייבת להיות גדולה מ-0',
        'interest_rate_negative' => 'שיעור הריבית לא יכול להיות שלילי',
    ],
];
