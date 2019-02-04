let mix = require('laravel-mix');
let build = require('./tasks/build.js');
let glob = require('glob-all');

require('laravel-mix-purgecss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.browserSync(),
        build.watch(['source/**/*.md', 'source/**/*.php', 'source/**/*.scss', '!source/**/_tmp/*']),
    ]
});

mix.sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,

    })
    .purgeCss({
        enabled: mix.inProduction(),
        paths: () => glob.sync([
            path.join(__dirname, 'source/**/*.blade.php'),
        ]),
    })
    .version();
