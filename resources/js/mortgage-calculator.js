/**
 * FOB Mortgage Calculator
 * Vanilla JS mortgage calculator for Botble CMS
 */
(function() {
    'use strict';

    class MortgageCalculator {
        constructor(element) {
            this.element = element;
            this.id = element.id;
            this.config = window.mortgageCalculatorConfig?.[this.id] || {};
            this.currency = this.config.currency || '$';
            this.primaryColor = this.config.primaryColor || '#e31837';
            this.showExtraCosts = this.config.showExtraCosts || false;
            this.translations = this.config.translations || {};
            this.isRtl = element.classList.contains('mortgage-calculator--rtl') || document.dir === 'rtl';
            this.defaultDownPaymentType = this.config.defaultDownPaymentType || 'percent';
            this.defaultDownPaymentValue = this.config.defaultDownPaymentValue || 20;

            this.form = element.querySelector('form');
            this.errorContainer = element.querySelector('[data-error]');
            this.modal = element.querySelector('[data-modal]');

            this.debounceTimer = null;
            this.debounceDelay = 150;
            this.hasUserInteracted = false;
            this.calculationMethod = 'decreasing';
            this.chart = null;
            this.schedule = [];
            this.loanAmount = 0;
            this.totalInterest = 0;

            this.init();
        }

        init() {
            this.attachEventListeners();
            this.initNumberFormatting();
            this.initPriceFromProperty();
            this.initDownPayment();
            this.syncLoanAmountFromSlider();
            this.calculate();
        }

        initPriceFromProperty() {
            const priceInput = this.element.querySelector('[name="property_price"]');
            if (!priceInput || !priceInput.hasAttribute('data-price-from')) return;

            const propertyPrice = document.querySelector('[data-property-price]')?.dataset.propertyPrice;
            if (propertyPrice && !isNaN(parseFloat(propertyPrice))) {
                priceInput.value = this.formatNumber(parseFloat(propertyPrice));
            }
        }

        initDownPayment() {
            if (this.defaultDownPaymentType !== 'amount') return;

            const priceInput = this.element.querySelector('[name="property_price"]');
            const slider = this.element.querySelector('[name="loan_percent"]');
            if (!priceInput || !slider) return;

            const propertyPrice = this.parseNumber(priceInput.value);
            if (propertyPrice > 0) {
                const downPaymentPercent = (this.defaultDownPaymentValue / propertyPrice) * 100;
                const loanPercent = Math.max(0, Math.min(100, 100 - downPaymentPercent));
                slider.value = loanPercent;

                const sliderLabel = this.element.querySelector('[data-loan-percent]');
                if (sliderLabel) {
                    sliderLabel.textContent = Math.round(loanPercent) + '%';
                }

                this.updateSliderFill(slider, loanPercent);
            }
        }

        attachEventListeners() {
            const inputs = this.element.querySelectorAll('[data-calculate]');
            inputs.forEach(input => {
                input.addEventListener('input', () => {
                    this.hasUserInteracted = true;

                    if (input.type === 'range') {
                        this.syncLoanAmountFromSlider();
                    }

                    this.debouncedCalculate();
                });
                input.addEventListener('change', () => {
                    this.hasUserInteracted = true;
                    this.calculate();
                });
            });

            const loanAmountInput = this.element.querySelector('[name="loan_amount"]');
            if (loanAmountInput) {
                loanAmountInput.addEventListener('input', () => {
                    this.hasUserInteracted = true;
                    this.syncSliderFromLoanAmount();
                    this.debouncedCalculate();
                });
            }

            const propertyPriceInput = this.element.querySelector('[name="property_price"]');
            if (propertyPriceInput) {
                propertyPriceInput.addEventListener('input', () => {
                    this.hasUserInteracted = true;
                    this.syncLoanAmountFromSlider();
                    this.debouncedCalculate();
                });
            }

            const methodTabs = this.element.querySelectorAll('[data-method]');
            methodTabs.forEach(tab => {
                tab.addEventListener('click', () => this.switchCalculationMethod(tab));
            });

            const detailsBtn = this.element.querySelector('[data-toggle-details]');
            if (detailsBtn) {
                detailsBtn.addEventListener('click', () => this.openModal());
            }

            const closeButtons = this.element.querySelectorAll('[data-modal-close]');
            closeButtons.forEach(btn => {
                btn.addEventListener('click', () => this.closeModal());
            });

            const viewTabs = this.element.querySelectorAll('[data-view]');
            viewTabs.forEach(tab => {
                tab.addEventListener('click', () => this.switchModalView(tab));
            });

            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape' && this.modal && this.modal.classList.contains('is-open')) {
                    this.closeModal();
                }
            });
        }

        initNumberFormatting() {
            const inputs = this.element.querySelectorAll('[data-format-number]');
            inputs.forEach(input => {
                if (input.value) {
                    const numValue = this.parseNumber(input.value);
                    if (numValue > 0) {
                        input.value = this.formatNumber(numValue);
                    }
                }

                input.addEventListener('input', (e) => {
                    const cursorPos = e.target.selectionStart;
                    const oldLength = e.target.value.length;
                    const rawValue = this.parseNumber(e.target.value);

                    if (!isNaN(rawValue) && rawValue >= 0) {
                        e.target.value = rawValue > 0 ? this.formatNumber(rawValue) : '';
                    }

                    const newLength = e.target.value.length;
                    const diff = newLength - oldLength;
                    e.target.setSelectionRange(cursorPos + diff, cursorPos + diff);
                });

                input.addEventListener('focus', (e) => {
                    setTimeout(() => e.target.select(), 0);
                });
            });
        }

        parseNumber(value) {
            if (typeof value === 'number') return value;
            return parseFloat(String(value).replace(/[,.\s]/g, '')) || 0;
        }

        formatNumber(value) {
            if (typeof value !== 'number' || isNaN(value)) return '0';
            return new Intl.NumberFormat('en-US', {
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(Math.round(value));
        }

        syncLoanAmountFromSlider() {
            const slider = this.element.querySelector('[name="loan_percent"]');
            const loanAmountInput = this.element.querySelector('[name="loan_amount"]');
            const propertyPriceInput = this.element.querySelector('[name="property_price"]');
            const sliderLabel = this.element.querySelector('[data-loan-percent]');

            if (!slider || !loanAmountInput || !propertyPriceInput) return;

            const propertyPrice = this.parseNumber(propertyPriceInput.value);
            const loanPercent = parseFloat(slider.value) || 0;
            const loanAmount = Math.round(propertyPrice * loanPercent / 100);

            loanAmountInput.value = loanAmount > 0 ? this.formatNumber(loanAmount) : '';

            if (sliderLabel) {
                sliderLabel.textContent = loanPercent + '%';
            }

            this.updateSliderFill(slider, loanPercent);
        }

        syncSliderFromLoanAmount() {
            const slider = this.element.querySelector('[name="loan_percent"]');
            const loanAmountInput = this.element.querySelector('[name="loan_amount"]');
            const propertyPriceInput = this.element.querySelector('[name="property_price"]');
            const sliderLabel = this.element.querySelector('[data-loan-percent]');

            if (!slider || !loanAmountInput || !propertyPriceInput) return;

            const propertyPrice = this.parseNumber(propertyPriceInput.value);
            const loanAmount = this.parseNumber(loanAmountInput.value);

            if (propertyPrice > 0) {
                const loanPercent = Math.min(100, Math.max(0, Math.round(loanAmount / propertyPrice * 100)));
                slider.value = loanPercent;

                if (sliderLabel) {
                    sliderLabel.textContent = loanPercent + '%';
                }

                this.updateSliderFill(slider, loanPercent);
            }
        }

        updateSliderFill(slider, percent) {
            const fill = percent + '%';
            const color = this.primaryColor;
            const direction = this.isRtl ? 'to left' : 'to right';
            slider.style.background = `linear-gradient(${direction}, ${color} 0%, ${color} ${fill}, #e0e0e0 ${fill}, #e0e0e0 100%)`;
        }

        switchCalculationMethod(tab) {
            const method = tab.dataset.method;
            this.calculationMethod = method;

            const methodInput = this.element.querySelector('[name="calculation_method"]');
            if (methodInput) {
                methodInput.value = method;
            }

            const tabs = this.element.querySelectorAll('[data-method]');
            tabs.forEach(t => {
                t.classList.toggle('mortgage-calculator__tab--active', t.dataset.method === method);
            });

            this.calculate();
        }

        debouncedCalculate() {
            clearTimeout(this.debounceTimer);
            this.debounceTimer = setTimeout(() => this.calculate(), this.debounceDelay);
        }

        getValue(name, defaultValue = 0) {
            const input = this.element.querySelector(`[name="${name}"]`);
            if (!input) return defaultValue;

            if (input.hasAttribute('data-format-number')) {
                return this.parseNumber(input.value);
            }

            const value = parseFloat(input.value);
            return isNaN(value) ? defaultValue : value;
        }

        validate() {
            const errors = [];
            const propertyPrice = this.getValue('property_price');
            const loanAmount = this.getValue('loan_amount');
            const loanTermMonths = this.getValue('loan_term_months');
            const interestRate = this.getValue('interest_rate');

            if (propertyPrice <= 0) {
                errors.push(this.translations.errorPropertyPrice || 'Property price must be greater than 0');
            }

            if (loanAmount <= 0) {
                errors.push(this.translations.errorLoanAmount || 'Loan amount must be greater than 0');
            }

            if (loanAmount > propertyPrice) {
                errors.push(this.translations.errorLoanExceedsPrice || 'Loan amount cannot exceed property price');
            }

            if (loanTermMonths <= 0) {
                errors.push(this.translations.errorLoanTerm || 'Loan term must be greater than 0');
            }

            if (interestRate < 0) {
                errors.push(this.translations.errorInterestRate || 'Interest rate cannot be negative');
            }

            return errors;
        }

        calculate() {
            const errors = this.validate();

            if (errors.length > 0) {
                if (this.hasUserInteracted) {
                    this.showError(errors[0]);
                }
                this.showEmptyState();
                return;
            }

            this.hideError();
            this.showResults();

            this.loanAmount = this.getValue('loan_amount');
            const months = this.getValue('loan_term_months');
            const annualRate = this.getValue('interest_rate');
            const monthlyRate = annualRate / 100 / 12;

            let monthlyMin;
            let monthlyMax;

            if (this.calculationMethod === 'decreasing') {
                this.schedule = this.calculateDecreasingBalance(this.loanAmount, monthlyRate, months);
                monthlyMax = this.schedule[0]?.payment || 0;
                monthlyMin = this.schedule[this.schedule.length - 1]?.payment || 0;
            } else {
                this.schedule = this.calculateFixedPayment(this.loanAmount, monthlyRate, months);
                monthlyMin = monthlyMax = this.schedule[0]?.payment || 0;
            }

            this.totalInterest = this.schedule.reduce((sum, row) => sum + row.interest, 0);

            const rangeContainer = this.element.querySelector('[data-result-range]');
            const singleContainer = this.element.querySelector('[data-result-single]');

            const detailsBtn = this.element.querySelector('[data-toggle-details]');

            if (this.calculationMethod === 'fixed') {
                if (rangeContainer) rangeContainer.style.display = 'none';
                if (singleContainer) singleContainer.style.display = 'block';
                if (detailsBtn) detailsBtn.style.display = 'none';
                this.updateResultText('monthly-fixed', monthlyMin);
            } else {
                if (rangeContainer) rangeContainer.style.display = 'flex';
                if (singleContainer) singleContainer.style.display = 'none';
                if (detailsBtn) detailsBtn.style.display = 'inline-flex';
                this.updateResultText('monthly-min', monthlyMin);
                this.updateResultText('monthly-max', monthlyMax);
            }

            this.updateResultText('total-interest', this.totalInterest);
        }

        calculateDecreasingBalance(loanAmount, monthlyRate, months) {
            const schedule = [];
            const principalPerMonth = loanAmount / months;
            let balance = loanAmount;

            for (let month = 1; month <= months; month++) {
                const interest = balance * monthlyRate;
                const payment = principalPerMonth + interest;
                balance = Math.max(0, balance - principalPerMonth);

                schedule.push({
                    period: month,
                    payment: payment,
                    principal: principalPerMonth,
                    interest: interest,
                    balance: balance
                });
            }

            return schedule;
        }

        calculateFixedPayment(loanAmount, monthlyRate, months) {
            const schedule = [];
            let balance = loanAmount;
            let monthlyPayment;

            if (monthlyRate === 0) {
                monthlyPayment = loanAmount / months;
            } else {
                const factor = Math.pow(1 + monthlyRate, months);
                monthlyPayment = (loanAmount * factor * monthlyRate) / (factor - 1);
            }

            for (let month = 1; month <= months; month++) {
                const interest = balance * monthlyRate;
                const principal = monthlyPayment - interest;
                balance = Math.max(0, balance - principal);

                schedule.push({
                    period: month,
                    payment: monthlyPayment,
                    principal: principal,
                    interest: interest,
                    balance: balance
                });
            }

            return schedule;
        }

        openModal() {
            if (!this.modal || this.schedule.length === 0) return;

            this.updateStat('loan-amount', this.loanAmount);
            this.updateStat('total-interest', this.totalInterest);
            this.updateStat('total-paid', this.loanAmount + this.totalInterest);

            this.updateScheduleTable(this.schedule);

            this.modal.classList.add('is-open');
            document.body.style.overflow = 'hidden';

            setTimeout(() => this.renderChart(), 100);
        }

        closeModal() {
            if (!this.modal) return;

            this.modal.classList.remove('is-open');
            document.body.style.overflow = '';
        }

        switchModalView(tab) {
            const view = tab.dataset.view;

            const tabs = this.element.querySelectorAll('[data-view]');
            tabs.forEach(t => {
                t.classList.toggle('mortgage-calculator__modal-tab--active', t.dataset.view === view);
            });

            const chartContainer = this.element.querySelector('[data-chart-container]');
            const tableContainer = this.element.querySelector('[data-table-container]');

            if (chartContainer) {
                chartContainer.style.display = view === 'chart' ? 'block' : 'none';
            }
            if (tableContainer) {
                tableContainer.style.display = view === 'table' ? 'block' : 'none';
            }

            if (view === 'chart') {
                setTimeout(() => this.renderChart(), 100);
            }
        }

        updateStat(key, value) {
            const element = this.element.querySelector(`[data-stat="${key}"]`);
            if (element) {
                element.textContent = this.formatCurrency(value);
            }
        }

        updateScheduleTable(schedule) {
            const tbody = this.element.querySelector('[data-schedule-body]');
            if (!tbody) return;

            tbody.innerHTML = schedule.map(row => `
                <tr>
                    <td>${row.period}</td>
                    <td>${this.formatCurrency(row.payment)}</td>
                    <td>${this.formatCurrency(row.principal)}</td>
                    <td>${this.formatCurrency(row.interest)}</td>
                    <td>${this.formatCurrency(row.balance)}</td>
                </tr>
            `).join('');
        }

        renderChart() {
            const canvas = this.element.querySelector('[data-chart-canvas]');
            if (!canvas || this.schedule.length === 0) return;

            if (typeof Chart === 'undefined') {
                this.loadChartJS().then(() => this.createChart(canvas));
                return;
            }

            this.createChart(canvas);
        }

        loadChartJS() {
            return new Promise((resolve, reject) => {
                if (typeof Chart !== 'undefined') {
                    resolve();
                    return;
                }

                const script = document.createElement('script');
                script.src = 'https://cdn.jsdelivr.net/npm/chart.js@4/dist/chart.umd.min.js';
                script.onload = resolve;
                script.onerror = reject;
                document.head.appendChild(script);
            });
        }

        createChart(canvas) {
            if (this.chart) {
                this.chart.destroy();
            }

            const yearlyData = this.groupByYear(this.schedule);

            const ctx = canvas.getContext('2d');
            const labels = yearlyData.map(row => this.translations.year ? `${this.translations.year} ${row.year}` : `Year ${row.year}`);
            const principalData = yearlyData.map(row => row.principal);
            const interestData = yearlyData.map(row => row.interest);

            this.chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [
                        {
                            label: this.translations.principal || 'Principal',
                            data: principalData,
                            backgroundColor: '#198754',
                            borderColor: '#198754',
                            borderWidth: 1
                        },
                        {
                            label: this.translations.interest || 'Interest',
                            data: interestData,
                            backgroundColor: '#e31837',
                            borderColor: '#e31837',
                            borderWidth: 1
                        }
                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: (context) => {
                                    return context.dataset.label + ': ' + this.formatCurrency(context.raw);
                                }
                            }
                        }
                    },
                    scales: {
                        x: {
                            stacked: true,
                            grid: {
                                display: false
                            }
                        },
                        y: {
                            stacked: true,
                            ticks: {
                                callback: (value) => this.formatCurrency(value)
                            }
                        }
                    }
                }
            });
        }

        groupByYear(schedule) {
            const yearlyData = [];
            let currentYear = 1;
            let yearlyPrincipal = 0;
            let yearlyInterest = 0;

            schedule.forEach((row, index) => {
                yearlyPrincipal += row.principal;
                yearlyInterest += row.interest;

                if ((index + 1) % 12 === 0 || index === schedule.length - 1) {
                    yearlyData.push({
                        year: currentYear,
                        principal: yearlyPrincipal,
                        interest: yearlyInterest
                    });
                    currentYear++;
                    yearlyPrincipal = 0;
                    yearlyInterest = 0;
                }
            });

            return yearlyData;
        }

        updateResultText(key, value) {
            const element = this.element.querySelector(`[data-result="${key}"]`);
            if (element) {
                element.textContent = this.formatCurrency(value);
            }
        }

        clearResults() {
            this.updateResultText('monthly-min', 0);
            this.updateResultText('monthly-max', 0);
            this.updateResultText('monthly-fixed', 0);
            this.updateResultText('total-interest', 0);
        }

        showEmptyState() {
            const emptyState = this.element.querySelector('[data-empty-state]');
            const resultsDisplay = this.element.querySelector('[data-results-display]');

            if (emptyState) {
                emptyState.style.display = 'block';
            }
            if (resultsDisplay) {
                resultsDisplay.style.display = 'none';
            }

            this.clearResults();
        }

        showResults() {
            const emptyState = this.element.querySelector('[data-empty-state]');
            const resultsDisplay = this.element.querySelector('[data-results-display]');

            if (emptyState) {
                emptyState.style.display = 'none';
            }
            if (resultsDisplay) {
                resultsDisplay.style.display = 'block';
            }
        }

        formatCurrency(value) {
            if (typeof value !== 'number' || isNaN(value)) value = 0;
            const formatted = new Intl.NumberFormat('en-US', {
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            }).format(Math.round(value));
            return formatted + ' ' + this.currency;
        }

        showError(message) {
            if (this.errorContainer) {
                this.errorContainer.textContent = message;
                this.errorContainer.style.display = 'block';
            }
        }

        hideError() {
            if (this.errorContainer) {
                this.errorContainer.textContent = '';
                this.errorContainer.style.display = 'none';
            }
        }
    }

    function initCalculators() {
        const calculators = document.querySelectorAll('[data-calculator]');
        calculators.forEach(element => {
            if (!element._mortgageCalculator) {
                element._mortgageCalculator = new MortgageCalculator(element);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initCalculators);
    } else {
        initCalculators();
    }

    window.initMortgageCalculators = initCalculators;
    window.MortgageCalculator = MortgageCalculator;
})();
