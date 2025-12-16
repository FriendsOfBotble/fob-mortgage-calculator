<?php

return [
    'name' => 'Calculadora Hipotecaria',
    'years' => 'años',
    'year' => 'año',
    'month' => 'mes',
    'months' => 'meses',

    'methods' => [
        'decreasing_balance' => 'Saldo Decreciente',
        'fixed_payment' => 'Pago Fijo',
    ],

    'settings' => [
        'title' => 'Calculadora Hipotecaria',
        'description' => 'Configurar valores predeterminados para la calculadora hipotecaria',
        'default_interest_rate' => 'Tasa de Interés Predeterminada (%)',
        'default_term_years' => 'Plazo del Préstamo Predeterminado (años)',
        'default_down_payment_type' => 'Tipo de Pago Inicial Predeterminado',
        'default_down_payment_value' => 'Valor del Pago Inicial Predeterminado',
        'show_extra_costs' => 'Mostrar Costos Adicionales',
        'show_extra_costs_helper' => 'Habilitar campos de impuestos a la propiedad, seguro y cuotas HOA en la calculadora',
        'term_options' => 'Opciones de Plazo del Préstamo',
        'term_options_helper' => 'Lista separada por comas de plazos de préstamo disponibles en años (ej., 10,15,20,25,30)',
        'currency_symbol' => 'Símbolo de Moneda',
    ],

    'down_payment_types' => [
        'percent' => 'Porcentaje',
        'amount' => 'Cantidad Fija',
    ],

    'shortcode' => [
        'name' => 'Calculadora Hipotecaria',
        'description' => 'Mostrar una calculadora de pagos hipotecarios con valores predeterminados personalizables',
        'style' => 'Estilo',
        'form_style' => 'Estilo del Formulario',
        'form_size' => 'Tamaño del Formulario',
        'form_alignment' => 'Alineación del Formulario',
        'form_margin' => 'Margen del Formulario',
        'form_padding' => 'Relleno del Formulario',
        'form_title' => 'Título del Formulario',
        'form_description' => 'Descripción del Formulario',
        'default_price' => 'Precio de Propiedad Predeterminado',
        'default_price_helper' => 'Dejar vacío para permitir que los usuarios ingresen su propio precio',
        'default_term' => 'Plazo del Préstamo Predeterminado (años)',
        'default_rate' => 'Tasa de Interés Predeterminada (%)',
        'default_down_payment_type' => 'Tipo de Pago Inicial Predeterminado',
        'default_down_payment_value' => 'Valor del Pago Inicial Predeterminado',
        'show_extra_costs' => 'Mostrar Costos Adicionales',
        'currency' => 'Símbolo de Moneda',
        'price_from' => 'Fuente del Precio',
        'price_from_helper' => 'Elegir de dónde obtener el precio de la propiedad',
        'primary_color' => 'Color Primario',
        'layout' => 'Diseño',
    ],

    'layouts' => [
        'horizontal' => 'Horizontal',
        'vertical' => 'Vertical',
    ],

    'styles' => [
        'default' => 'Predeterminado',
        'compact' => 'Compacto',
    ],

    'form_styles' => [
        'default' => 'Predeterminado',
        'modern' => 'Moderno',
        'minimal' => 'Minimalista',
        'bold' => 'Negrita',
        'glass' => 'Glassmorphism',
    ],

    'form_sizes' => [
        'full' => 'Tamaño Completo (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Grande (992px)',
        'md' => 'Mediano (768px)',
        'sm' => 'Pequeño (576px)',
    ],

    'form_alignments' => [
        'start' => 'Izquierda (Inicio)',
        'center' => 'Centro',
        'end' => 'Derecha (Fin)',
    ],

    'spacing' => [
        'none' => 'Ninguno',
        'sm' => 'Pequeño',
        'default' => 'Predeterminado',
        'lg' => 'Grande',
        'xl' => 'Extra Grande',
    ],

    'price_from' => [
        'none' => 'Entrada Manual',
        'property' => 'Desde Propiedad',
    ],

    'fields' => [
        'property_price' => 'Precio de la Propiedad',
        'down_payment' => 'Pago Inicial',
        'loan_amount' => 'Monto del Préstamo',
        'loan_term' => 'Plazo del Préstamo',
        'interest_rate' => 'Tasa de Interés',
        'disbursement_date' => 'Fecha de Desembolso',
        'extra_costs' => 'Costos Adicionales (Opcional)',
        'property_tax' => 'Impuesto a la Propiedad',
        'insurance' => 'Seguro de Hogar',
        'hoa' => 'Cuotas HOA',
    ],

    'help' => [
        'down_payment_percent' => 'Ingresar como porcentaje del precio de la propiedad',
        'down_payment_amount' => 'Ingresar como cantidad fija',
        'loan_amount_hint' => 'Arrastra el control deslizante o ingresa la cantidad que deseas pedir prestada',
    ],

    'results' => [
        'monthly_pi' => 'P&I Mensual',
        'monthly_payment' => 'Pago Mensual',
        'total_monthly' => 'Total Mensual',
        'total_interest' => 'Interés Total',
        'total_paid' => 'Monto Total',
        'from' => 'Desde',
        'to' => 'Hasta',
        'view_details' => 'Ver Detalles',
    ],

    'amortization' => [
        'title' => 'Tabla de Amortización',
        'chart' => 'Gráfico',
        'table' => 'Tabla',
        'period' => 'Período',
        'payment' => 'Pago',
        'year' => 'Año',
        'principal' => 'Principal',
        'interest' => 'Interés',
        'balance' => 'Saldo',
        'loan_amount' => 'Monto del Préstamo',
        'total_principal' => 'Principal Total',
        'total_interest' => 'Interés Total',
    ],

    'widget' => [
        'name' => 'Calculadora Hipotecaria',
        'description' => 'Mostrar calculadora hipotecaria en la barra lateral',
        'title' => 'Título del Widget',
        'leave_empty_for_default' => 'Dejar vacío para usar la configuración global',
        'use_default' => 'Usar Predeterminado',
    ],
];
