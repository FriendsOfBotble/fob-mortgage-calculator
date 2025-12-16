const mix = require('laravel-mix')
const path = require('path')

const directory = path.basename(path.resolve(__dirname))
const source = `platform/plugins/${directory}`
const dist = `public/vendor/core/plugins/${directory}`

mix
    .sass(`${source}/resources/sass/mortgage-calculator.scss`, `${dist}/css`)
    .js(`${source}/resources/js/mortgage-calculator.js`, `${dist}/js`)

if (mix.inProduction()) {
    mix
        .copy(`${dist}/css/mortgage-calculator.css`, `${source}/public/css`)
        .copy(`${dist}/js/mortgage-calculator.js`, `${source}/public/js`)
}
