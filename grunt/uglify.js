module.exports = {
    options: {
        compress: {
            drop_console: true
        }
    },
    dist: {
        files: {
            'default/js/production.min.js': ['default/js/production.js']
        }
    }
}
