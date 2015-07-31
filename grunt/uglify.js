module.exports = {
    options: {
        compress: {
            drop_console: true
        }
    },
    dist: {
        files: {
            'default/js/production.<%= grunt.pkg.version %>.min.js': ['default/js/production.js'],
            'default/js/libs.<%= grunt.pkg.version %>.min.js': ['default/js/libs.js']
        }
    }
}
