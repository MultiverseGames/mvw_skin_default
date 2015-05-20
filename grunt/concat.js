module.exports = {
    js: {
        src: [
            'libs/jquery/dist/jquery.js',
            'libs/bootstrap/dist/js/bootstrap.js',
            'libs/jquery.nicescroll/jquery.nicescroll.js',
            'libs/jquery-sticky/jquery.sticky.js',
            'libs/bootstrap-markdown/js/bootstrap-markdown.js',
            'libs/iCheck/icheck.min.js',
            'libs/dmf/dist/dmf.js',
            'bower_components/dmf_module_collection/logger/logger.js',
            'js/dmf_modules/**/*.js',
            'js/functions.js'
        ],
        dest: 'default/js/production.js'
    }
}