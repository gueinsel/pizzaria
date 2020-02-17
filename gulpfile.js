var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require('gulp-autoprefixer');
var cache = require('gulp-cache');
var concat = require('gulp-concat');
var reset_heroi = require('browser-sync').create();
// Transforma o Sass da pasta source(desenvolvimento) em CSS levando para a pasta dist(produção)
gulp.task('thor', function () {
    return gulp.src([
        './source/sass/**'
    ]
    )
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer({
            "overrideBrowserslist": [
                "> 1%",
                "ie >= 8",
                "edge >= 15",
                "ie_mob >= 10",
                "ff >= 45",
                "chrome >= 45",
                "safari >= 7",
                "opera >= 23",
                "ios >= 7",
                "android >= 4",
                "bb >= 10"
            ], cascade: false

        }))
        .pipe(concat('style.css'))
        .pipe(gulp.dest('./dist/css'))
        .pipe(reset_heroi.stream());
});


// Minifica o Javascript da pasta source(desenvolvimento) levando para a pasta dist(produção)
gulp.task('mulher-elastico', function () {
    return gulp.src([
        // *** OBS: Não alterar ordem ***
        './node_modules/jquery/dist/jquery.js',
        './source/js/jquery.mask.min.js',
        './source/js/jquery.validate.min.js',
        './source/js/main.js',
    ]
    )
        .pipe(concat('app.js'))
        .pipe(gulp.dest('./dist/js'));
});







// Atualiza o navegador automaticamente
gulp.task('reset_heroi', function () {
    reset_heroi.init({

        // INFORME O LOCAL DA PASTA DO PROJETO
        proxy: 'localhost/pizzaria',
        open: "external",
    })
});

// Limpa o cache do navegador
gulp.task('flash', () =>
    cache.clearAll()
);

// Assiste as tasks

gulp.task('demolidor', function () {
    gulp.watch('./source/sass/**', gulp.parallel('thor', 'flash'));
    gulp.watch('./source/js/**/**', gulp.parallel('mulher-elastico', 'flash')).on('change', reset_heroi.reload);
    gulp.watch('./*.php').on('change', reset_heroi.reload);
});

// Chama as tasks
gulp.task('default',
    gulp.parallel(
        'thor',
        'mulher-elastico',
        'demolidor',
        'flash',
        'reset_heroi'
    )
);



