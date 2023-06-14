let mix = require('laravel-mix')
let path = require('path')

mix.js('src/js/app.js', 'dist')
    .vue({ version: 3 })
    .setPublicPath('dist')
    .postCss('src/css/app.css', '.', [
        require('tailwindcss')
    ])
    .webpackConfig({
        resolve: {
            alias: {
                '~': path.resolve(__dirname),
                '@': path.resolve('src/js'),

            },
        },
    })
    .version()
