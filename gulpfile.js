var
    gulp = require("gulp"),
    sass = require("gulp-sass"),
    sourcemaps = require("gulp-sourcemaps"),
    browserSync = require("browser-sync"),
    concat = require("gulp-concat"),
    cssnano = require("gulp-cssnano"),
    autoprefixer = require("gulp-autoprefixer"),
    uglify = require('gulp-uglify-es').default;

gulp.task("scss", function () {
    return gulp.src("app/scss/style.scss")
        .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: "expanded"}).on("error", sass.logError))
        .pipe(autoprefixer(["last 15 versions"], {cascade: true}))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest("app/css/"))
        .pipe(browserSync.reload({stream: true}))
});

gulp.task("deployCss", function () {
    return gulp.src("app/css/style.css")
        .pipe(cssnano())
        .pipe(gulp.dest("app/css"));
});

gulp.task("scripts", function () {
    return gulp.src([
        "node_modules/bootstrap-sass/assets/javascripts/bootstrap/scrollspy.js",
        "node_modules/bootstrap-sass/assets/javascripts/bootstrap/modal.js",
        "app/components/materialize/materialize.js",
        "app/js/custom.js"
    ])
        .pipe(concat("all.js"))
        .pipe(gulp.dest("app/js/"));
});

gulp.task("deployScripts", function () {
    return gulp.src("app/js/all.js")
        .pipe(uglify())
        .pipe(gulp.dest("app/js/"));
});

gulp.task("browserSync", function () {
    browserSync({
        proxy : "advocate",
        notify: false
    });
});

gulp.task("build", ["deployCss", "deployScripts"]);

gulp.task("watch", ["browserSync"], function () {
    gulp.watch("app/scss/*.scss", ["scss"]);
    gulp.watch("app/*.php", browserSync.reload);
    gulp.watch("app/js/*.js", ["scripts"], browserSync.reload);
});
