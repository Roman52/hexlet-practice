var gulp          = require( 'gulp' ),
    plumber       = require( 'gulp-plumber' ),
    livereload    = require( 'gulp-livereload' ),
    sass          = require( 'gulp-sass' ),
    autoprefixer  = require( 'gulp-autoprefixer' );

var onError = function( err ) {
    console.log( 'An error occurred:', err.message );
    this.emit( 'end' );
}

var PATHS = {
    sass: [
    ],
    javascript: [
    ]
};

gulp.task( 'scss', function() {
    return gulp.src( 'style.scss' )
        .pipe( plumber( { errorHandler: onError } ) )
        .pipe( sass({ includePaths : PATHS.sass }) )
        .pipe( autoprefixer('last 3 version') )
        .pipe( gulp.dest( './' ) )
        .pipe( livereload() );
} );

gulp.task( 'watch', function() {
    livereload.listen();
    // gulp.watch( 'style.scss', gulp.series('scss') );
    gulp.watch( './**/**/*.php' ).on( 'change', function( file ) {
        livereload.changed( file );
    } );
} );

gulp.task( 'default', gulp.series('watch', function() {
}));