<?php

return [
    'name' => 'Asuntolainanlaskuri',
    'years' => 'vuotta',
    'year' => 'vuosi',
    'month' => 'kuukausi',
    'months' => 'kuukautta',

    'methods' => [
        'decreasing_balance' => 'Laskeva Saldo',
        'fixed_payment' => 'Kiinteä Maksu',
    ],

    'settings' => [
        'title' => 'Asuntolainanlaskuri',
        'description' => 'Määritä asuntolainanlaskurin oletusarvot',
        'default_interest_rate' => 'Oletuskorko (%)',
        'default_term_years' => 'Oletuslaina-aika (vuotta)',
        'default_down_payment_type' => 'Oletuskäsirahan Tyyppi',
        'default_down_payment_value' => 'Oletuskäsirahan Arvo',
        'show_extra_costs' => 'Näytä Lisäkulut',
        'show_extra_costs_helper' => 'Ota käyttöön kiinteistövero-, vakuutus- ja taloyhtiövastikekentät laskurissa',
        'term_options' => 'Laina-ajan Vaihtoehdot',
        'term_options_helper' => 'Pilkuilla erotettu luettelo käytettävissä olevista laina-ajoista vuosina (esim. 10,15,20,25,30)',
        'currency_symbol' => 'Valuuttasymboli',
    ],

    'down_payment_types' => [
        'percent' => 'Prosentti',
        'amount' => 'Kiinteä Summa',
    ],

    'shortcode' => [
        'name' => 'Asuntolainanlaskuri',
        'description' => 'Näytä asuntolainan maksulaskuri mukautettavilla oletusarvoilla',
        'style' => 'Tyyli',
        'form_style' => 'Lomaketyyli',
        'form_size' => 'Lomakekoko',
        'form_alignment' => 'Lomakkeen Tasaus',
        'form_margin' => 'Lomakkeen Marginaali',
        'form_margin_helper' => 'Tila lomakkeen ulkopuolella (esim. 20px, 1rem, 20px 0)',
        'form_padding' => 'Lomakkeen Täyte',
        'form_padding_helper' => 'Tila lomakkeen sisällä (esim. 20px, 1rem, 30px 20px)',
        'form_title' => 'Lomakkeen Otsikko',
        'form_description' => 'Lomakkeen Kuvaus',
        'default_price' => 'Oletuskiinteistön Hinta',
        'default_price_helper' => 'Jätä tyhjäksi, jotta käyttäjät voivat syöttää oman hintansa',
        'default_term' => 'Oletuslaina-aika (vuotta)',
        'default_rate' => 'Oletuskorko (%)',
        'default_down_payment_type' => 'Oletuskäsirahan Tyyppi',
        'default_down_payment_value' => 'Oletuskäsirahan Arvo',
        'show_extra_costs' => 'Näytä Lisäkulut',
        'currency' => 'Valuuttasymboli',
        'price_from' => 'Hinnan Lähde',
        'price_from_helper' => 'Valitse, mistä kiinteistön hinta haetaan',
        'primary_color' => 'Pääväri',
        'layout' => 'Asettelu',
    ],

    'layouts' => [
        'horizontal' => 'Vaakasuora',
        'vertical' => 'Pystysuora',
    ],

    'styles' => [
        'default' => 'Oletus',
        'compact' => 'Kompakti',
    ],

    'form_styles' => [
        'default' => 'Oletus',
        'modern' => 'Moderni',
        'minimal' => 'Minimaalinen',
        'bold' => 'Lihavoitu',
        'glass' => 'Lasimorfismi',
    ],

    'form_sizes' => [
        'full' => 'Täysi Koko (100%)',
        'xxl' => 'XXL (1400px)',
        'xl' => 'XL (1200px)',
        'lg' => 'Suuri (992px)',
        'md' => 'Keskikokoinen (768px)',
        'sm' => 'Pieni (576px)',
    ],

    'form_alignments' => [
        'start' => 'Vasen (Alku)',
        'center' => 'Keskellä',
        'end' => 'Oikea (Loppu)',
    ],

    'price_from' => [
        'none' => 'Manuaalinen Syöttö',
        'property' => 'Kiinteistöstä',
    ],

    'fields' => [
        'property_price' => 'Kiinteistön Hinta',
        'down_payment' => 'Käsiraha',
        'loan_amount' => 'Lainasumma',
        'loan_term' => 'Laina-aika',
        'interest_rate' => 'Korko',
        'disbursement_date' => 'Maksupäivä',
        'extra_costs' => 'Lisäkulut (Valinnainen)',
        'property_tax' => 'Kiinteistövero',
        'insurance' => 'Kotivakuutus',
        'hoa' => 'Taloyhtiövastike',
    ],

    'help' => [
        'down_payment_percent' => 'Syötä prosentteina kiinteistön hinnasta',
        'down_payment_amount' => 'Syötä kiinteänä summana',
        'loan_amount_hint' => 'Vedä liukusäädintä tai syötä summa, jonka haluat lainata',
    ],

    'results' => [
        'monthly_pi' => 'Kuukausittainen P&K',
        'monthly_payment' => 'Kuukausimaksu',
        'total_monthly' => 'Yhteensä Kuukaudessa',
        'total_interest' => 'Kokonaiskorko',
        'total_paid' => 'Kokonaissumma',
        'from' => 'Alkaen',
        'to' => 'Asti',
        'view_details' => 'Näytä Tiedot',
        'empty_state_title' => 'Laske Asuntolainasi',
        'empty_state_message' => 'Syötä kiinteistön hinta ja lainan tiedot yllä nähdäksesi arvioidut kuukausimaksut ja kokonaiskorot.',
    ],

    'amortization' => [
        'title' => 'Lyhennysaikataulu',
        'chart' => 'Kaavio',
        'table' => 'Taulukko',
        'period' => 'Jakso',
        'payment' => 'Maksu',
        'year' => 'Vuosi',
        'principal' => 'Pääoma',
        'interest' => 'Korko',
        'balance' => 'Saldo',
        'loan_amount' => 'Lainasumma',
        'total_principal' => 'Kokonaispääoma',
        'total_interest' => 'Kokonaiskorko',
    ],

    'widget' => [
        'name' => 'Asuntolainanlaskuri',
        'description' => 'Näytä asuntolainanlaskuri sivupalkissa',
        'title' => 'Widgetin Otsikko',
        'leave_empty_for_default' => 'Jätä tyhjäksi käyttääksesi yleisiä asetuksia',
        'use_default' => 'Käytä Oletusta',
    ],

    'errors' => [
        'property_price_required' => 'Kiinteistön hinnan on oltava suurempi kuin 0',
        'loan_amount_required' => 'Lainasumman on oltava suurempi kuin 0',
        'loan_amount_exceeds_price' => 'Lainasumma ei voi ylittää kiinteistön hintaa',
        'loan_term_required' => 'Laina-ajan on oltava suurempi kuin 0',
        'interest_rate_negative' => 'Korko ei voi olla negatiivinen',
    ],
];
