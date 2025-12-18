<?php

return [
    'name' => '모기지 계산기',
    'years' => '년',
    'year' => '년',
    'month' => '월',
    'months' => '개월',

    'methods' => [
        'decreasing_balance' => '체감식',
        'fixed_payment' => '고정 상환',
    ],

    'settings' => [
        'title' => '모기지 계산기',
        'description' => '모기지 계산기의 기본값 설정',
        'default_interest_rate' => '기본 이자율 (%)',
        'default_term_years' => '기본 대출 기간 (년)',
        'default_down_payment_type' => '기본 계약금 유형',
        'default_down_payment_value' => '기본 계약금 금액',
        'show_extra_costs' => '추가 비용 표시',
        'show_extra_costs_helper' => '계산기에 재산세, 보험 및 관리비 필드를 활성화합니다',
        'term_options' => '대출 기간 옵션',
        'term_options_helper' => '사용 가능한 대출 기간을 년 단위로 쉼표로 구분하여 입력하세요 (예: 10,15,20,25,30)',
        'currency_symbol' => '통화 기호',
    ],

    'down_payment_types' => [
        'percent' => '백분율',
        'amount' => '고정 금액',
    ],

    'shortcode' => [
        'name' => '모기지 계산기',
        'description' => '사용자 정의 가능한 기본값이 있는 모기지 상환 계산기를 표시합니다',
        'style' => '스타일',
        'form_style' => '양식 스타일',
        'form_size' => '양식 크기',
        'form_alignment' => '양식 정렬',
        'form_margin' => '양식 여백',
        'form_margin_helper' => '양식 외부 간격 (예: 20px, 1rem, 20px 0)',
        'form_padding' => '양식 패딩',
        'form_padding_helper' => '양식 내부 간격 (예: 20px, 1rem, 30px 20px)',
        'form_title' => '양식 제목',
        'form_description' => '양식 설명',
        'default_price' => '기본 부동산 가격',
        'default_price_helper' => '사용자가 직접 가격을 입력하도록 하려면 비워두세요',
        'default_term' => '기본 대출 기간 (년)',
        'default_rate' => '기본 이자율 (%)',
        'default_down_payment_type' => '기본 계약금 유형',
        'default_down_payment_value' => '기본 계약금 금액',
        'show_extra_costs' => '추가 비용 표시',
        'currency' => '통화 기호',
        'price_from' => '가격 출처',
        'price_from_helper' => '부동산 가격을 가져올 위치를 선택하세요',
        'primary_color' => '기본 색상',
        'layout' => '레이아웃',
    ],

    'layouts' => [
        'horizontal' => '가로',
        'vertical' => '세로',
    ],

    'styles' => [
        'default' => '기본',
        'compact' => '컴팩트',
    ],

    'form_styles' => [
        'default' => '기본',
        'modern' => '모던',
        'minimal' => '미니멀',
        'bold' => '볼드',
        'glass' => '글래스모피즘',
    ],

    'form_sizes' => [
        'full' => '전체 크기 (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => '대형 (992px)',
        'md' => '중형 (768px)',
        'sm' => '소형 (576px)',
    ],

    'form_alignments' => [
        'start' => '왼쪽 (시작)',
        'center' => '중앙',
        'end' => '오른쪽 (끝)',
    ],

    'price_from' => [
        'none' => '수동 입력',
        'property' => '부동산에서 가져오기',
    ],

    'fields' => [
        'property_price' => '부동산 가격',
        'down_payment' => '계약금',
        'loan_amount' => '대출 금액',
        'loan_term' => '대출 기간',
        'interest_rate' => '이자율',
        'disbursement_date' => '대출 실행일',
        'extra_costs' => '추가 비용 (선택사항)',
        'property_tax' => '재산세',
        'insurance' => '주택 보험',
        'hoa' => '관리비',
    ],

    'help' => [
        'down_payment_percent' => '부동산 가격의 백분율로 입력하세요',
        'down_payment_amount' => '고정 금액으로 입력하세요',
        'loan_amount_hint' => '슬라이더를 드래그하거나 빌리고 싶은 금액을 입력하세요',
    ],

    'results' => [
        'monthly_pi' => '월 원리금',
        'monthly_payment' => '월 상환액',
        'total_monthly' => '총 월 납부액',
        'total_interest' => '총 이자',
        'total_paid' => '총 금액',
        'from' => '부터',
        'to' => '까지',
        'view_details' => '세부 정보 보기',
        'empty_state_title' => '모기지 계산하기',
        'empty_state_message' => '위에 부동산 가격과 대출 세부 정보를 입력하여 예상 월 납입금과 총 이자를 확인하세요.',
    ],

    'amortization' => [
        'title' => '상환 일정표',
        'chart' => '차트',
        'table' => '표',
        'period' => '기간',
        'payment' => '상환액',
        'year' => '년',
        'principal' => '원금',
        'interest' => '이자',
        'balance' => '잔액',
        'loan_amount' => '대출 금액',
        'total_principal' => '총 원금',
        'total_interest' => '총 이자',
    ],

    'widget' => [
        'name' => '모기지 계산기',
        'description' => '사이드바에 모기지 계산기 표시',
        'title' => '위젯 제목',
        'leave_empty_for_default' => '전역 설정을 사용하려면 비워두세요',
        'use_default' => '기본값 사용',
    ],

    'errors' => [
        'property_price_required' => '부동산 가격은 0보다 커야 합니다',
        'loan_amount_required' => '대출 금액은 0보다 커야 합니다',
        'loan_amount_exceeds_price' => '대출 금액은 부동산 가격을 초과할 수 없습니다',
        'loan_term_required' => '대출 기간은 0보다 커야 합니다',
        'interest_rate_negative' => '이자율은 음수일 수 없습니다',
    ],
];
