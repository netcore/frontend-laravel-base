const mix = require('laravel-mix')
const webpack = require('webpack')
const imageminPlugin = require('imagemin-webpack-plugin').default
const copyWebpackPlugin = require('copy-webpack-plugin')
const imageminMozjpeg = require('imagemin-mozjpeg');


mix
    .disableNotifications()
    .autoload({
        'jquery': ['$', 'window.jQuery', 'jQuery'],
        'vue': ['Vue'],
        'popper.js/dist/umd/popper.js': ['Popper'],
        'exports-loader?Tooltip!bootstrap/js/dist/tooltip': ['Tooltip'],
        'exports-loader?Util!bootstrap/js/dist/util': ['Util']
    })
	.js('resources/assets/js/app.js', 'public/assets/js')
    .sass('resources/assets/sass/app.scss', 'public/assets/css')
        .options({
            processCssUrls: false
        })
    .copy('resources/assets/json', 'public/assets/json', false)
    .copy('resources/assets/fonts', 'public/assets/fonts', false)
    .copy('resources/assets/favicon', 'public/assets/favicon', false)

    Mix.listen('configReady', function (config) {  
        const rules = config.module.rules;
        const targetRegex = /(\.(png|jpe?g|gif)$|^((?!font).)*\.svg$)/;
      
        for (let rule of rules) {
            if ( rule.test.toString() == targetRegex.toString() ) {
                rule.exclude = /\.svg$/
                break
            }
        }
    })
    
    mix.webpackConfig({  
        module: {
            rules: [{
                test: /\.svg$/,
                use: [{
                    loader: 'html-loader',
                    options: {
                        minimize: true
                    }
                }]
            }]
        }
    })

    mix.webpackConfig({
        plugins: [
            new copyWebpackPlugin([{
                from: 'resources/assets/svg',
                to: 'assets/svg',
            }]),
            new imageminPlugin({
                test: /\.(svg)$/i,
            })
        ]
    })

    mix.webpackConfig({
        plugins: [
            new copyWebpackPlugin([{
                from: 'resources/assets/img',
                to: 'assets/img',
            }]),
            new imageminPlugin({
                test: /\.(jpe?g|png|gif)$/i,
            })
        ]
    })

    .browserSync({
        proxy: process.env.APP_URL + '/' + process.env.APP_NAME + '/public',
        files: ['resources/**/*']
    })

    if (mix.config.inProduction) {
        mix.minify()
        mix.version()
    }



