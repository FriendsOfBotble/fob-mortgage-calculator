<?php

return [
    'name' => 'เครื่องคำนวณสินเชื่อบ้าน',
    'years' => 'ปี',
    'year' => 'ปี',
    'month' => 'เดือน',
    'months' => 'เดือน',

    'methods' => [
        'decreasing_balance' => 'ยอดลดลง',
        'fixed_payment' => 'ชำระคงที่',
    ],

    'settings' => [
        'title' => 'เครื่องคำนวณสินเชื่อบ้าน',
        'description' => 'กำหนดค่าเริ่มต้นสำหรับเครื่องคำนวณสินเชื่อบ้าน',
        'default_interest_rate' => 'อัตราดอกเบี้ยเริ่มต้น (%)',
        'default_term_years' => 'ระยะเวลากู้เริ่มต้น (ปี)',
        'default_down_payment_type' => 'ประเภทเงินดาวน์เริ่มต้น',
        'default_down_payment_value' => 'จำนวนเงินดาวน์เริ่มต้น',
        'show_extra_costs' => 'แสดงค่าใช้จ่ายเพิ่มเติม',
        'show_extra_costs_helper' => 'เปิดใช้งานช่องภาษีที่ดิน ประกัน และค่าธรรมเนียม HOA ในเครื่องคำนวณ',
        'term_options' => 'ตัวเลือกระยะเวลากู้',
        'term_options_helper' => 'รายการระยะเวลากู้ที่มีในหน่วยปี คั่นด้วยเครื่องหมายจุลภาค (เช่น 10,15,20,25,30)',
        'currency_symbol' => 'สัญลักษณ์สกุลเงิน',
    ],

    'down_payment_types' => [
        'percent' => 'เปอร์เซ็นต์',
        'amount' => 'จำนวนคงที่',
    ],

    'shortcode' => [
        'name' => 'เครื่องคำนวณสินเชื่อบ้าน',
        'description' => 'แสดงเครื่องคำนวณการชำระเงินสินเชื่อบ้านพร้อมค่าเริ่มต้นที่ปรับแต่งได้',
        'style' => 'สไตล์',
        'form_style' => 'สไตล์ฟอร์ม',
        'form_size' => 'ขนาดฟอร์ม',
        'form_alignment' => 'การจัดแนวฟอร์ม',
        'form_margin' => 'ระยะขอบฟอร์ม',
        'form_margin_helper' => 'พื้นที่ภายนอกฟอร์ม (เช่น 20px, 1rem, 20px 0)',
        'form_padding' => 'ระยะช่องว่างฟอร์ม',
        'form_padding_helper' => 'พื้นที่ภายในฟอร์ม (เช่น 20px, 1rem, 30px 20px)',
        'form_title' => 'หัวข้อฟอร์ม',
        'form_description' => 'คำอธิบายฟอร์ม',
        'default_price' => 'ราคาทรัพย์สินเริ่มต้น',
        'default_price_helper' => 'เว้นว่างเพื่อให้ผู้ใช้ป้อนราคาเอง',
        'default_term' => 'ระยะเวลากู้เริ่มต้น (ปี)',
        'default_rate' => 'อัตราดอกเบี้ยเริ่มต้น (%)',
        'default_down_payment_type' => 'ประเภทเงินดาวน์เริ่มต้น',
        'default_down_payment_value' => 'จำนวนเงินดาวน์เริ่มต้น',
        'show_extra_costs' => 'แสดงค่าใช้จ่ายเพิ่มเติม',
        'currency' => 'สัญลักษณ์สกุลเงิน',
        'price_from' => 'แหล่งที่มาของราคา',
        'price_from_helper' => 'เลือกแหล่งที่จะดึงราคาทรัพย์สิน',
        'primary_color' => 'สีหลัก',
        'layout' => 'รูปแบบ',
    ],

    'layouts' => [
        'horizontal' => 'แนวนอน',
        'vertical' => 'แนวตั้ง',
    ],

    'styles' => [
        'default' => 'ค่าเริ่มต้น',
        'compact' => 'กะทัดรัด',
    ],

    'form_styles' => [
        'default' => 'ค่าเริ่มต้น',
        'modern' => 'ทันสมัย',
        'minimal' => 'เรียบง่าย',
        'bold' => 'หนา',
        'glass' => 'แก้วโปร่งแสง',
    ],

    'form_sizes' => [
        'full' => 'ขนาดเต็ม (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'ใหญ่ (992px)',
        'md' => 'กลาง (768px)',
        'sm' => 'เล็ก (576px)',
    ],

    'form_alignments' => [
        'start' => 'ซ้าย (เริ่มต้น)',
        'center' => 'กลาง',
        'end' => 'ขวา (สิ้นสุด)',
    ],

    'price_from' => [
        'none' => 'ป้อนด้วยตนเอง',
        'property' => 'จากทรัพย์สิน',
    ],

    'fields' => [
        'property_price' => 'ราคาทรัพย์สิน',
        'down_payment' => 'เงินดาวน์',
        'loan_amount' => 'จำนวนเงินกู้',
        'loan_term' => 'ระยะเวลากู้',
        'interest_rate' => 'อัตราดอกเบี้ย',
        'disbursement_date' => 'วันที่เบิกจ่าย',
        'extra_costs' => 'ค่าใช้จ่ายเพิ่มเติม (ไม่บังคับ)',
        'property_tax' => 'ภาษีที่ดิน',
        'insurance' => 'ประกันบ้าน',
        'hoa' => 'ค่าธรรมเนียม HOA',
    ],

    'help' => [
        'down_payment_percent' => 'ป้อนเป็นเปอร์เซ็นต์ของราคาทรัพย์สิน',
        'down_payment_amount' => 'ป้อนเป็นจำนวนคงที่',
        'loan_amount_hint' => 'ลากแถบเลื่อนหรือป้อนจำนวนเงินที่ต้องการกู้',
    ],

    'results' => [
        'monthly_pi' => 'เงินต้นและดอกเบี้ยรายเดือน',
        'monthly_payment' => 'การชำระเงินรายเดือน',
        'total_monthly' => 'รวมรายเดือน',
        'total_interest' => 'ดอกเบี้ยรวม',
        'total_paid' => 'จำนวนเงินรวม',
        'from' => 'จาก',
        'to' => 'ถึง',
        'view_details' => 'ดูรายละเอียด',
        'empty_state_title' => 'คำนวณสินเชื่อบ้านของคุณ',
        'empty_state_message' => 'ป้อนราคาอสังหาริมทรัพย์และรายละเอียดสินเชื่อด้านบนเพื่อดูการชำระเงินรายเดือนโดยประมาณและดอกเบี้ยรวม',
    ],

    'amortization' => [
        'title' => 'ตารางการชำระหนี้',
        'chart' => 'กราฟ',
        'table' => 'ตาราง',
        'period' => 'งวด',
        'payment' => 'การชำระเงิน',
        'year' => 'ปี',
        'principal' => 'เงินต้น',
        'interest' => 'ดอกเบี้ย',
        'balance' => 'ยอดคงเหลือ',
        'loan_amount' => 'จำนวนเงินกู้',
        'total_principal' => 'เงินต้นรวม',
        'total_interest' => 'ดอกเบี้ยรวม',
    ],

    'widget' => [
        'name' => 'เครื่องคำนวณสินเชื่อบ้าน',
        'description' => 'แสดงเครื่องคำนวณสินเชื่อบ้านในแถบด้านข้าง',
        'title' => 'ชื่อวิดเจ็ต',
        'leave_empty_for_default' => 'เว้นว่างเพื่อใช้การตั้งค่าทั่วไป',
        'use_default' => 'ใช้ค่าเริ่มต้น',
    ],

    'errors' => [
        'property_price_required' => 'ราคาอสังหาริมทรัพย์ต้องมากกว่า 0',
        'loan_amount_required' => 'จำนวนสินเชื่อต้องมากกว่า 0',
        'loan_amount_exceeds_price' => 'จำนวนสินเชื่อต้องไม่เกินราคาอสังหาริมทรัพย์',
        'loan_term_required' => 'ระยะเวลาสินเชื่อต้องมากกว่า 0',
        'interest_rate_negative' => 'อัตราดอกเบี้ยไม่สามารถเป็นลบได้',
    ],
];
