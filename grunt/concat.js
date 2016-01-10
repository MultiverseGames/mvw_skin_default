module.exports = {
    options: {
        sourceMap: true
    },
    js_libs: {
        src: [
            'bower_components/jquery/dist/jquery.js',
            'bower_components/bootstrap/dist/js/bootstrap.js',
            //'bower_components/jquery.nicescroll/jquery.nicescroll.js',
            'bower_components/jquery-sticky/jquery.sticky.js',
            'bower_components/dmf/dist/dmf.js',
            'bower_components/dmf_module_collection/logger/logger.js'
        ],
        dest: 'default/js/libs.js'
    },
    js_src: {
        src: [
            'src/**/*.js',
            'src/shared/functions.js'
        ],
        dest: 'default/js/production.js'
    }
};