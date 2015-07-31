module.exports = {
    options: {
        compress: {
            drop_console: true
        }
    },
    dist: {
        files: {
            'default/js/production.min.js': ['default/js/production.js'],
            'default/js/libs.min.js': ['default/js/libs.js']
        }
    }
}
