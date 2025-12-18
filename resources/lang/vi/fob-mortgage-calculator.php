<?php

return [
    'name' => 'Máy tính thế chấp',
    'years' => 'năm',
    'year' => 'năm',
    'month' => 'tháng',
    'months' => 'tháng',

    'methods' => [
        'decreasing_balance' => 'Dư nợ giảm dần',
        'fixed_payment' => 'Trả góp cố định',
    ],

    'settings' => [
        'title' => 'Máy tính thế chấp',
        'description' => 'Cấu hình giá trị mặc định cho máy tính thế chấp',
        'default_interest_rate' => 'Lãi suất mặc định (%)',
        'default_term_years' => 'Thời hạn vay mặc định (năm)',
        'default_down_payment_type' => 'Loại trả trước mặc định',
        'default_down_payment_value' => 'Giá trị trả trước mặc định',
        'show_extra_costs' => 'Hiển thị chi phí bổ sung',
        'show_extra_costs_helper' => 'Bật các trường thuế bất động sản, bảo hiểm và phí HOA trong máy tính',
        'term_options' => 'Tùy chọn thời hạn vay',
        'term_options_helper' => 'Danh sách thời hạn vay có sẵn, phân cách bằng dấu phẩy (ví dụ: 10,15,20,25,30)',
        'currency_symbol' => 'Ký hiệu tiền tệ',
    ],

    'down_payment_types' => [
        'percent' => 'Phần trăm',
        'amount' => 'Số tiền cố định',
    ],

    'shortcode' => [
        'name' => 'Máy tính thế chấp',
        'description' => 'Hiển thị máy tính thanh toán thế chấp với các giá trị mặc định tùy chỉnh',
        'style' => 'Kiểu',
        'form_style' => 'Kiểu biểu mẫu',
        'form_size' => 'Kích thước biểu mẫu',
        'form_alignment' => 'Căn chỉnh biểu mẫu',
        'form_margin' => 'Lề biểu mẫu',
        'form_margin_helper' => 'Khoảng cách bên ngoài biểu mẫu (ví dụ: 20px, 1rem, 20px 0)',
        'form_padding' => 'Đệm biểu mẫu',
        'form_padding_helper' => 'Khoảng cách bên trong biểu mẫu (ví dụ: 20px, 1rem, 30px 20px)',
        'form_title' => 'Tiêu đề biểu mẫu',
        'form_description' => 'Mô tả biểu mẫu',
        'default_price' => 'Giá bất động sản mặc định',
        'default_price_helper' => 'Để trống để người dùng tự nhập giá',
        'default_term' => 'Thời hạn vay mặc định (năm)',
        'default_rate' => 'Lãi suất mặc định (%)',
        'default_down_payment_type' => 'Loại trả trước mặc định',
        'default_down_payment_value' => 'Giá trị trả trước mặc định',
        'show_extra_costs' => 'Hiển thị chi phí bổ sung',
        'currency' => 'Ký hiệu tiền tệ',
        'price_from' => 'Nguồn giá',
        'price_from_helper' => 'Chọn nơi lấy giá bất động sản',
        'primary_color' => 'Màu chính',
        'layout' => 'Bố cục',
    ],

    'layouts' => [
        'horizontal' => 'Ngang',
        'vertical' => 'Dọc',
    ],

    'styles' => [
        'default' => 'Mặc định',
        'compact' => 'Thu gọn',
    ],

    'form_styles' => [
        'default' => 'Mặc định',
        'modern' => 'Hiện đại',
        'minimal' => 'Tối giản',
        'bold' => 'Đậm',
        'glass' => 'Kính mờ',
    ],

    'form_sizes' => [
        'full' => 'Toàn bộ (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Lớn (992px)',
        'md' => 'Trung bình (768px)',
        'sm' => 'Nhỏ (576px)',
    ],

    'form_alignments' => [
        'start' => 'Trái',
        'center' => 'Giữa',
        'end' => 'Phải',
    ],

    'price_from' => [
        'none' => 'Nhập thủ công',
        'property' => 'Từ bất động sản',
    ],

    'fields' => [
        'property_price' => 'Giá bất động sản',
        'down_payment' => 'Trả trước',
        'loan_amount' => 'Số tiền vay',
        'loan_term' => 'Thời hạn vay',
        'interest_rate' => 'Lãi suất',
        'disbursement_date' => 'Ngày giải ngân',
        'extra_costs' => 'Chi phí bổ sung (Tùy chọn)',
        'property_tax' => 'Thuế bất động sản',
        'insurance' => 'Bảo hiểm nhà',
        'hoa' => 'Phí HOA',
    ],

    'help' => [
        'down_payment_percent' => 'Nhập theo phần trăm giá bất động sản',
        'down_payment_amount' => 'Nhập số tiền cố định',
        'loan_amount_hint' => 'Kéo thanh trượt hoặc nhập số tiền bạn muốn vay',
    ],

    'results' => [
        'monthly_pi' => 'Gốc & Lãi hàng tháng',
        'monthly_payment' => 'Thanh toán hàng tháng',
        'total_monthly' => 'Tổng hàng tháng',
        'total_interest' => 'Tổng lãi suất',
        'total_paid' => 'Tổng số tiền',
        'from' => 'Từ',
        'to' => 'Đến',
        'view_details' => 'Xem chi tiết',
        'empty_state_title' => 'Tính Thế Chấp Của Bạn',
        'empty_state_message' => 'Nhập giá bất động sản và thông tin khoản vay ở trên để xem khoản thanh toán hàng tháng ước tính và tổng lãi suất.',
    ],

    'amortization' => [
        'title' => 'Bảng khấu hao',
        'chart' => 'Biểu đồ',
        'table' => 'Bảng',
        'period' => 'Kỳ',
        'payment' => 'Thanh toán',
        'year' => 'Năm',
        'principal' => 'Gốc',
        'interest' => 'Lãi',
        'balance' => 'Dư nợ',
        'loan_amount' => 'Số tiền vay',
        'total_principal' => 'Tổng gốc',
        'total_interest' => 'Tổng lãi',
    ],

    'widget' => [
        'name' => 'Máy tính thế chấp',
        'description' => 'Hiển thị máy tính thế chấp trong thanh bên',
        'title' => 'Tiêu đề widget',
        'leave_empty_for_default' => 'Để trống để sử dụng cài đặt chung',
        'use_default' => 'Sử dụng mặc định',
    ],

    'errors' => [
        'property_price_required' => 'Giá bất động sản phải lớn hơn 0',
        'loan_amount_required' => 'Số tiền vay phải lớn hơn 0',
        'loan_amount_exceeds_price' => 'Số tiền vay không được vượt quá giá bất động sản',
        'loan_term_required' => 'Thời hạn vay phải lớn hơn 0',
        'interest_rate_negative' => 'Lãi suất không được âm',
    ],
];
