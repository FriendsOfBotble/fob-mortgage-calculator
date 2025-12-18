<?php

return [
    'name' => '住宅ローン計算機',
    'years' => '年',
    'year' => '年',
    'month' => '月',
    'months' => 'ヶ月',

    'methods' => [
        'decreasing_balance' => '元金均等返済',
        'fixed_payment' => '元利均等返済',
    ],

    'settings' => [
        'title' => '住宅ローン計算機',
        'description' => '住宅ローン計算機のデフォルト値を設定',
        'default_interest_rate' => 'デフォルト金利 (%)',
        'default_term_years' => 'デフォルトローン期間（年）',
        'default_down_payment_type' => 'デフォルト頭金タイプ',
        'default_down_payment_value' => 'デフォルト頭金額',
        'show_extra_costs' => '追加費用を表示',
        'show_extra_costs_helper' => '固定資産税、保険、HOA費用フィールドを計算機で有効にする',
        'term_options' => 'ローン期間オプション',
        'term_options_helper' => '利用可能なローン期間を年単位でカンマ区切りのリスト（例：10,15,20,25,30）',
        'currency_symbol' => '通貨記号',
    ],

    'down_payment_types' => [
        'percent' => 'パーセント',
        'amount' => '固定金額',
    ],

    'shortcode' => [
        'name' => '住宅ローン計算機',
        'description' => 'カスタマイズ可能なデフォルト値を持つ住宅ローン支払い計算機を表示',
        'style' => 'スタイル',
        'form_style' => 'フォームスタイル',
        'form_size' => 'フォームサイズ',
        'form_alignment' => 'フォーム配置',
        'form_margin' => 'フォーム余白',
        'form_margin_helper' => 'フォーム外側の余白（例：20px, 1rem, 20px 0）',
        'form_padding' => 'フォーム内側余白',
        'form_padding_helper' => 'フォーム内側の余白（例：20px, 1rem, 30px 20px）',
        'form_title' => 'フォームタイトル',
        'form_description' => 'フォーム説明',
        'default_price' => 'デフォルト物件価格',
        'default_price_helper' => 'ユーザーが独自の価格を入力できるように空白のままにする',
        'default_term' => 'デフォルトローン期間（年）',
        'default_rate' => 'デフォルト金利 (%)',
        'default_down_payment_type' => 'デフォルト頭金タイプ',
        'default_down_payment_value' => 'デフォルト頭金額',
        'show_extra_costs' => '追加費用を表示',
        'currency' => '通貨記号',
        'price_from' => '価格ソース',
        'price_from_helper' => '物件価格の取得元を選択',
        'primary_color' => 'プライマリカラー',
        'layout' => 'レイアウト',
    ],

    'layouts' => [
        'horizontal' => '横型',
        'vertical' => '縦型',
    ],

    'styles' => [
        'default' => 'デフォルト',
        'compact' => 'コンパクト',
    ],

    'form_styles' => [
        'default' => 'デフォルト',
        'modern' => 'モダン',
        'minimal' => 'ミニマル',
        'bold' => 'ボールド',
        'glass' => 'グラスモーフィズム',
    ],

    'form_sizes' => [
        'full' => 'フルサイズ (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => '大 (992px)',
        'md' => '中 (768px)',
        'sm' => '小 (576px)',
    ],

    'form_alignments' => [
        'start' => '左揃え（開始）',
        'center' => '中央揃え',
        'end' => '右揃え（終了）',
    ],

    'price_from' => [
        'none' => '手動入力',
        'property' => '物件から',
    ],

    'fields' => [
        'property_price' => '物件価格',
        'down_payment' => '頭金',
        'loan_amount' => '借入金額',
        'loan_term' => 'ローン期間',
        'interest_rate' => '金利',
        'disbursement_date' => '実行日',
        'extra_costs' => '追加費用（オプション）',
        'property_tax' => '固定資産税',
        'insurance' => '住宅保険',
        'hoa' => 'HOA費用',
    ],

    'help' => [
        'down_payment_percent' => '物件価格のパーセントとして入力',
        'down_payment_amount' => '固定金額として入力',
        'loan_amount_hint' => 'スライダーをドラッグするか、借りたい金額を入力してください',
    ],

    'results' => [
        'monthly_pi' => '月々の元利金',
        'monthly_payment' => '月々の支払い',
        'total_monthly' => '月額合計',
        'total_interest' => '総利息',
        'total_paid' => '総額',
        'from' => 'から',
        'to' => 'まで',
        'view_details' => '詳細を表示',
        'empty_state_title' => '住宅ローンを計算',
        'empty_state_message' => '上記で不動産価格とローン詳細を入力して、推定月額支払額と総利息を確認してください。',
    ],

    'amortization' => [
        'title' => '返済スケジュール',
        'chart' => 'チャート',
        'table' => 'テーブル',
        'period' => '期間',
        'payment' => '支払い',
        'year' => '年',
        'principal' => '元金',
        'interest' => '利息',
        'balance' => '残高',
        'loan_amount' => '借入金額',
        'total_principal' => '総元金',
        'total_interest' => '総利息',
    ],

    'widget' => [
        'name' => '住宅ローン計算機',
        'description' => 'サイドバーに住宅ローン計算機を表示',
        'title' => 'ウィジェットタイトル',
        'leave_empty_for_default' => 'グローバル設定を使用するには空白のままにする',
        'use_default' => 'デフォルトを使用',
    ],

    'errors' => [
        'property_price_required' => '不動産価格は0より大きくなければなりません',
        'loan_amount_required' => 'ローン金額は0より大きくなければなりません',
        'loan_amount_exceeds_price' => 'ローン金額は不動産価格を超えることはできません',
        'loan_term_required' => 'ローン期間は0より大きくなければなりません',
        'interest_rate_negative' => '金利はマイナスにできません',
    ],
];
