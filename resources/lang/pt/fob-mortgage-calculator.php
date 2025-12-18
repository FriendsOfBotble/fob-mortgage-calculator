<?php

return [
    'name' => 'Calculadora de Hipoteca',
    'years' => 'anos',
    'year' => 'ano',
    'month' => 'mês',
    'months' => 'meses',

    'methods' => [
        'decreasing_balance' => 'Saldo Decrescente',
        'fixed_payment' => 'Pagamento Fixo',
    ],

    'settings' => [
        'title' => 'Calculadora de Hipoteca',
        'description' => 'Configurar valores padrão para a calculadora de hipoteca',
        'default_interest_rate' => 'Taxa de Juros Padrão (%)',
        'default_term_years' => 'Prazo do Empréstimo Padrão (anos)',
        'default_down_payment_type' => 'Tipo de Entrada Padrão',
        'default_down_payment_value' => 'Valor da Entrada Padrão',
        'show_extra_costs' => 'Mostrar Custos Extras',
        'show_extra_costs_helper' => 'Ativar campos de imposto predial, seguro e taxas HOA na calculadora',
        'term_options' => 'Opções de Prazo do Empréstimo',
        'term_options_helper' => 'Lista separada por vírgulas de prazos de empréstimo disponíveis em anos (ex., 10,15,20,25,30)',
        'currency_symbol' => 'Símbolo da Moeda',
    ],

    'down_payment_types' => [
        'percent' => 'Porcentagem',
        'amount' => 'Valor Fixo',
    ],

    'shortcode' => [
        'name' => 'Calculadora de Hipoteca',
        'description' => 'Exibir uma calculadora de pagamento de hipoteca com valores padrão personalizáveis',
        'style' => 'Estilo',
        'form_style' => 'Estilo do Formulário',
        'form_size' => 'Tamanho do Formulário',
        'form_alignment' => 'Alinhamento do Formulário',
        'form_margin' => 'Margem do Formulário',
        'form_margin_helper' => 'Espaço exterior do formulário (ex: 20px, 1rem, 20px 0)',
        'form_padding' => 'Preenchimento do Formulário',
        'form_padding_helper' => 'Espaço interior do formulário (ex: 20px, 1rem, 30px 20px)',
        'form_title' => 'Título do Formulário',
        'form_description' => 'Descrição do Formulário',
        'default_price' => 'Preço do Imóvel Padrão',
        'default_price_helper' => 'Deixe vazio para permitir que os usuários insiram o próprio preço',
        'default_term' => 'Prazo do Empréstimo Padrão (anos)',
        'default_rate' => 'Taxa de Juros Padrão (%)',
        'default_down_payment_type' => 'Tipo de Entrada Padrão',
        'default_down_payment_value' => 'Valor da Entrada Padrão',
        'show_extra_costs' => 'Mostrar Custos Extras',
        'currency' => 'Símbolo da Moeda',
        'price_from' => 'Fonte do Preço',
        'price_from_helper' => 'Escolha de onde obter o preço do imóvel',
        'primary_color' => 'Cor Primária',
        'layout' => 'Layout',
    ],

    'layouts' => [
        'horizontal' => 'Horizontal',
        'vertical' => 'Vertical',
    ],

    'styles' => [
        'default' => 'Padrão',
        'compact' => 'Compacto',
    ],

    'form_styles' => [
        'default' => 'Padrão',
        'modern' => 'Moderno',
        'minimal' => 'Minimalista',
        'bold' => 'Negrito',
        'glass' => 'Glassmorfismo',
    ],

    'form_sizes' => [
        'full' => 'Tamanho Completo (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Grande (992px)',
        'md' => 'Médio (768px)',
        'sm' => 'Pequeno (576px)',
    ],

    'form_alignments' => [
        'start' => 'Esquerda (Início)',
        'center' => 'Centro',
        'end' => 'Direita (Fim)',
    ],

    'price_from' => [
        'none' => 'Entrada Manual',
        'property' => 'Do Imóvel',
    ],

    'fields' => [
        'property_price' => 'Preço do Imóvel',
        'down_payment' => 'Entrada',
        'loan_amount' => 'Valor do Empréstimo',
        'loan_term' => 'Prazo do Empréstimo',
        'interest_rate' => 'Taxa de Juros',
        'disbursement_date' => 'Data de Desembolso',
        'extra_costs' => 'Custos Extras (Opcional)',
        'property_tax' => 'Imposto Predial',
        'insurance' => 'Seguro Residencial',
        'hoa' => 'Taxas HOA',
    ],

    'help' => [
        'down_payment_percent' => 'Insira como porcentagem do preço do imóvel',
        'down_payment_amount' => 'Insira como valor fixo',
        'loan_amount_hint' => 'Arraste o controle deslizante ou insira o valor que deseja pedir emprestado',
    ],

    'results' => [
        'monthly_pi' => 'P&J Mensal',
        'monthly_payment' => 'Pagamento Mensal',
        'total_monthly' => 'Total Mensal',
        'total_interest' => 'Juros Totais',
        'total_paid' => 'Valor Total',
        'from' => 'De',
        'to' => 'Até',
        'view_details' => 'Ver Detalhes',
        'empty_state_title' => 'Calcule Sua Hipoteca',
        'empty_state_message' => 'Insira o preço do imóvel e os detalhes do empréstimo acima para ver os pagamentos mensais estimados e os juros totais.',
    ],

    'amortization' => [
        'title' => 'Tabela de Amortização',
        'chart' => 'Gráfico',
        'table' => 'Tabela',
        'period' => 'Período',
        'payment' => 'Pagamento',
        'year' => 'Ano',
        'principal' => 'Principal',
        'interest' => 'Juros',
        'balance' => 'Saldo',
        'loan_amount' => 'Valor do Empréstimo',
        'total_principal' => 'Principal Total',
        'total_interest' => 'Juros Totais',
    ],

    'widget' => [
        'name' => 'Calculadora de Hipoteca',
        'description' => 'Exibir calculadora de hipoteca na barra lateral',
        'title' => 'Título do Widget',
        'leave_empty_for_default' => 'Deixe vazio para usar as configurações globais',
        'use_default' => 'Usar Padrão',
    ],

    'errors' => [
        'property_price_required' => 'O preço do imóvel deve ser maior que 0',
        'loan_amount_required' => 'O valor do empréstimo deve ser maior que 0',
        'loan_amount_exceeds_price' => 'O valor do empréstimo não pode exceder o preço do imóvel',
        'loan_term_required' => 'O prazo do empréstimo deve ser maior que 0',
        'interest_rate_negative' => 'A taxa de juros não pode ser negativa',
    ],
];
