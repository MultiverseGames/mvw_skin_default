module.exports = {
    dev: {
        files: {
            'default/': ['before.html', 'after.html']
        },
        options: {
            replacements: [{
                pattern: /{{ VERSION }}/g,
                replacement: ''
            }]
        }
    },
    prod: {
        files: {
            'default/': ['before.html', 'after.html']
        },
        options: {
            replacements: [{
                pattern: /{{ VERSION }}/g,
                replacement: '<%= grunt.pkg.version %>.min.'
            }]
        }
    }
}
