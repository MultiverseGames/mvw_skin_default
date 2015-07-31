module.exports = {
    js_libs: {
        src: [
            'bower_components/jquery/dist/jquery.js',
            'bower_components/bootstrap/dist/js/bootstrap.js',
            'bower_components/jquery.nicescroll/jquery.nicescroll.js',
            'bower_components/jquery-sticky/jquery.sticky.js',
            'bower_components/bootstrap-markdown/js/bootstrap-markdown.js',
            'bower_components/iCheck/icheck.js',
            'bower_components/dmf/dist/dmf.js',
            'bower_components/dmf_module_collection/logger/logger.js'
        ],
        dest: 'default/js/libs.js'
    },
    js_src: {
        src: [
            'js/dmf_modules/**/*.js',
            'js/functions.js'
        ],
        dest: 'default/js/production.js'
    }
};