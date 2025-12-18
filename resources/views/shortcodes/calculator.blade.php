@once
<link rel="stylesheet" href="{{ asset('vendor/core/plugins/fob-mortgage-calculator/css/mortgage-calculator.css') }}">
@endonce

@php
    $isRtl = BaseHelper::isRtlEnabled();

    $wrapperClasses = ['mortgage-calculator'];

    if ($isRtl) {
        $wrapperClasses[] = 'mortgage-calculator--rtl';
    }

    if ($style === 'compact') {
        $wrapperClasses[] = 'mortgage-calculator--compact';
    }

    if ($layout === 'vertical') {
        $wrapperClasses[] = 'mortgage-calculator--vertical';
    }

    if ($formStyle !== 'default') {
        $wrapperClasses[] = 'mortgage-calculator--style-' . $formStyle;
    }

    $wrapperClass = implode(' ', $wrapperClasses);

    $inlineStyles = ['--mc-primary: ' . $primaryColor];
    if (!empty($formMargin)) {
        $inlineStyles[] = 'margin: ' . e($formMargin);
    }
    if (!empty($formPadding)) {
        $inlineStyles[] = 'padding: ' . e($formPadding);
    }
    $inlineStyle = implode('; ', $inlineStyles);

    $containerClasses = ['mortgage-calculator-container'];

    if ($isRtl) {
        $containerClasses[] = 'mortgage-calculator-container--rtl';
    }

    if ($formSize !== 'full') {
        $containerClasses[] = 'mortgage-calculator-container--' . $formSize;
    }
    if ($formAlignment !== 'start') {
        $containerClasses[] = 'mortgage-calculator-container--align-' . $formAlignment;
    }
    $containerClass = implode(' ', $containerClasses);
@endphp

<div class="{{ $containerClass }}">
<div class="{{ $wrapperClass }}" id="{{ $uniqueId }}" data-calculator style="{{ $inlineStyle }}">
    @if($formTitle || $formDescription)
    <div class="mortgage-calculator__header">
        @if($formTitle)
        <h3 class="mortgage-calculator__title">{{ $formTitle }}</h3>
        @endif
        @if($formDescription)
        <p class="mortgage-calculator__description">{{ $formDescription }}</p>
        @endif
    </div>
    @endif

    {{-- Calculation Method Tabs --}}
    <div class="mortgage-calculator__tabs">
        <button type="button" class="mortgage-calculator__tab mortgage-calculator__tab--active" data-method="decreasing">
            {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.methods.decreasing_balance') }}
        </button>
        <button type="button" class="mortgage-calculator__tab" data-method="fixed">
            {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.methods.fixed_payment') }}
        </button>
    </div>

    <div class="mortgage-calculator__body">
        {{-- Form Section --}}
        <form class="mortgage-calculator__form" novalidate>
            <input type="hidden" name="calculation_method" value="decreasing">

            {{-- Property Price --}}
            <div class="mortgage-calculator__field">
                <label for="{{ $uniqueId }}-price" class="mortgage-calculator__label">
                    {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.fields.property_price') }}
                </label>
                <div class="mortgage-calculator__input-wrapper">
                    <input type="text"
                           class="mortgage-calculator__input"
                           id="{{ $uniqueId }}-price"
                           name="property_price"
                           value="{{ $defaultPrice }}"
                           placeholder="0"
                           inputmode="numeric"
                           data-calculate
                           data-format-number
                           @if($priceFrom === 'property') data-price-from="property" @endif>
                    <span class="mortgage-calculator__input-suffix">{{ $currency }}</span>
                </div>
            </div>

            {{-- Loan Amount with Slider --}}
            @php
                // Calculate initial slider value based on down payment type
                $initialSliderValue = $defaultDownPaymentType === 'percent'
                    ? 100 - $defaultDownPaymentValue
                    : 80; // Default to 80% when using fixed amount (will be recalculated by JS)
            @endphp
            <div class="mortgage-calculator__field">
                <label for="{{ $uniqueId }}-loan-percent" class="mortgage-calculator__label">
                    {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.fields.loan_amount') }}
                </label>
                <p class="mortgage-calculator__field-hint">
                    {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.help.loan_amount_hint') }}
                </p>
                <div class="mortgage-calculator__slider-group">
                    <div class="mortgage-calculator__slider-wrapper">
                        <input type="range"
                               class="mortgage-calculator__slider"
                               id="{{ $uniqueId }}-loan-percent"
                               name="loan_percent"
                               value="{{ $initialSliderValue }}"
                               min="0"
                               max="100"
                               step="1"
                               data-calculate>
                        <div class="mortgage-calculator__slider-labels">
                            <span class="mortgage-calculator__slider-value" data-loan-percent>{{ $initialSliderValue }}%</span>
                            <span>100%</span>
                        </div>
                    </div>
                </div>
                <div class="mortgage-calculator__input-wrapper">
                    <input type="text"
                           class="mortgage-calculator__input"
                           id="{{ $uniqueId }}-loan-amount"
                           name="loan_amount"
                           value=""
                           placeholder="0"
                           inputmode="numeric"
                           data-calculate
                           data-format-number>
                    <span class="mortgage-calculator__input-suffix">{{ $currency }}</span>
                </div>
            </div>

            {{-- Loan Term --}}
            <div class="mortgage-calculator__field">
                <label for="{{ $uniqueId }}-term" class="mortgage-calculator__label">
                    {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.fields.loan_term') }}
                </label>
                <div class="mortgage-calculator__input-wrapper">
                    <select class="mortgage-calculator__input mortgage-calculator__input--select"
                            id="{{ $uniqueId }}-term"
                            name="loan_term_months"
                            data-calculate>
                        @foreach($termOptions as $years => $label)
                            <option value="{{ $years * 12 }}" @selected((int) $years === (int) $defaultTerm)>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Interest Rate --}}
            <div class="mortgage-calculator__field">
                <label for="{{ $uniqueId }}-rate" class="mortgage-calculator__label">
                    {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.fields.interest_rate') }}
                </label>
                <div class="mortgage-calculator__input-wrapper">
                    <input type="number"
                           class="mortgage-calculator__input"
                           id="{{ $uniqueId }}-rate"
                           name="interest_rate"
                           value="{{ $defaultRate }}"
                           min="0"
                           max="50"
                           step="0.01"
                           placeholder="0"
                           data-calculate>
                    <span class="mortgage-calculator__input-suffix">%/{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.year') }}</span>
                </div>
            </div>

            {{-- Disbursement Date --}}
            <div class="mortgage-calculator__field">
                <label for="{{ $uniqueId }}-date" class="mortgage-calculator__label">
                    {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.fields.disbursement_date') }}
                </label>
                <div class="mortgage-calculator__input-wrapper">
                    <input type="date"
                           class="mortgage-calculator__input mortgage-calculator__input--date"
                           id="{{ $uniqueId }}-date"
                           name="disbursement_date"
                           value="{{ date('Y-m-d') }}">
                </div>
            </div>

            {{-- Error Display --}}
            <div class="mortgage-calculator__error" data-error role="alert" style="display: none;"></div>
        </form>

        {{-- Results Panel --}}
        <div class="mortgage-calculator__results-panel" data-results>
            <div class="mortgage-calculator__results-icon">
                <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect x="8" y="16" width="40" height="32" rx="4" fill="#4A5568"/>
                    <rect x="12" y="20" width="32" height="4" fill="#718096"/>
                    <rect x="12" y="28" width="32" height="4" fill="#718096"/>
                    <rect x="12" y="36" width="20" height="4" fill="#718096"/>
                    <circle cx="48" cy="40" r="14" fill="#F6E05E"/>
                    <text x="48" y="45" text-anchor="middle" font-size="16" font-weight="bold" fill="#744210">$</text>
                </svg>
            </div>

            <div class="mortgage-calculator__results-content">
                {{-- Empty State --}}
                <div class="mortgage-calculator__empty-state" data-empty-state>
                    <h4 class="mortgage-calculator__empty-state-title">
                        {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.results.empty_state_title') }}
                    </h4>
                    <p class="mortgage-calculator__empty-state-message">
                        {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.results.empty_state_message') }}
                    </p>
                </div>

                {{-- Results Display --}}
                <div class="mortgage-calculator__results-display" data-results-display style="display: none;">
                    <div class="mortgage-calculator__result-label">
                        {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.results.monthly_payment') }}
                    </div>
                    {{-- Range display for decreasing balance method --}}
                    <div class="mortgage-calculator__result-range" data-result-range>
                        <div class="mortgage-calculator__result-item">
                            <span class="mortgage-calculator__result-sub">{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.results.from') }}</span>
                            <strong class="mortgage-calculator__result-value" data-result="monthly-min">0 {{ $currency }}</strong>
                        </div>
                        <div class="mortgage-calculator__result-item">
                            <span class="mortgage-calculator__result-sub">{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.results.to') }}</span>
                            <strong class="mortgage-calculator__result-value" data-result="monthly-max">0 {{ $currency }}</strong>
                        </div>
                    </div>
                    {{-- Single display for fixed payment method --}}
                    <div class="mortgage-calculator__result-single" data-result-single style="display: none;">
                        <strong class="mortgage-calculator__result-value mortgage-calculator__result-value--large" data-result="monthly-fixed">0 {{ $currency }}</strong>
                    </div>

                    <div class="mortgage-calculator__result-total">
                        <span class="mortgage-calculator__result-label">{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.results.total_interest') }}</span>
                        <strong class="mortgage-calculator__result-value mortgage-calculator__result-value--large" data-result="total-interest">0 {{ $currency }}</strong>
                    </div>

                    <button type="button" class="mortgage-calculator__details-btn" data-toggle-details>
                        {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.results.view_details') }}
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Amortization Modal - Hidden by default, shown via JS --}}
    <div class="mortgage-calculator__modal" data-modal>
    <div class="mortgage-calculator__modal-backdrop" data-modal-close></div>
    <div class="mortgage-calculator__modal-content">
        <div class="mortgage-calculator__modal-header">
            <h4 class="mortgage-calculator__modal-title">{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.title') }}</h4>
            <button type="button" class="mortgage-calculator__modal-close" data-modal-close>&times;</button>
        </div>
        <div class="mortgage-calculator__modal-body">
            {{-- Summary Stats --}}
            <div class="mortgage-calculator__modal-stats">
                <div class="mortgage-calculator__modal-stat">
                    <span class="mortgage-calculator__modal-stat-label">{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.loan_amount') }}</span>
                    <strong class="mortgage-calculator__modal-stat-value" data-stat="loan-amount">0 {{ $currency }}</strong>
                </div>
                <div class="mortgage-calculator__modal-stat">
                    <span class="mortgage-calculator__modal-stat-label">{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.total_interest') }}</span>
                    <strong class="mortgage-calculator__modal-stat-value mortgage-calculator__modal-stat-value--interest" data-stat="total-interest">0 {{ $currency }}</strong>
                </div>
                <div class="mortgage-calculator__modal-stat">
                    <span class="mortgage-calculator__modal-stat-label">{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.results.total_paid') }}</span>
                    <strong class="mortgage-calculator__modal-stat-value" data-stat="total-paid">0 {{ $currency }}</strong>
                </div>
            </div>

            {{-- Tabs --}}
            <div class="mortgage-calculator__modal-tabs">
                <button type="button" class="mortgage-calculator__modal-tab mortgage-calculator__modal-tab--active" data-view="chart">
                    {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.chart') }}
                </button>
                <button type="button" class="mortgage-calculator__modal-tab" data-view="table">
                    {{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.table') }}
                </button>
            </div>

            {{-- Chart View --}}
            <div class="mortgage-calculator__modal-chart" data-chart-container>
                <canvas data-chart-canvas height="300"></canvas>
            </div>

            {{-- Table View --}}
            <div class="mortgage-calculator__modal-table" data-table-container style="display: none;">
                <div class="mortgage-calculator__table-wrapper">
                    <table class="mortgage-calculator__table">
                        <thead>
                            <tr>
                                <th>{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.period') }}</th>
                                <th>{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.payment') }}</th>
                                <th>{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.principal') }}</th>
                                <th>{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.interest') }}</th>
                                <th>{{ trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.balance') }}</th>
                            </tr>
                        </thead>
                        <tbody data-schedule-body></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<script>
    window.mortgageCalculatorConfig = window.mortgageCalculatorConfig || {};
    window.mortgageCalculatorConfig[{!! json_encode($uniqueId) !!}] = {!! json_encode([
        'currency' => $currency,
        'primaryColor' => $primaryColor,
        'showExtraCosts' => $showExtraCosts,
        'defaultDownPaymentType' => $defaultDownPaymentType,
        'defaultDownPaymentValue' => $defaultDownPaymentValue,
        'translations' => [
            'percentHelp' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.help.down_payment_percent'),
            'amountHelp' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.help.down_payment_amount'),
            'principal' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.principal'),
            'interest' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.interest'),
            'year' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.year'),
            'period' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.amortization.period'),
            'errorPropertyPrice' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.errors.property_price_required'),
            'errorLoanAmount' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.errors.loan_amount_required'),
            'errorLoanExceedsPrice' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.errors.loan_amount_exceeds_price'),
            'errorLoanTerm' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.errors.loan_term_required'),
            'errorInterestRate' => trans('plugins/fob-mortgage-calculator::fob-mortgage-calculator.errors.interest_rate_negative'),
        ],
    ]) !!};
</script>

@once
<script src="{{ asset('vendor/core/plugins/fob-mortgage-calculator/js/mortgage-calculator.js') }}"></script>
@endonce

