module.exports = {
    js: {
        files: ['js/**/*'],
        tasks: ['build_js_src']
    },
    sass: {
        files: ['sass/**/*'],
        tasks: ['build_css']
    },
    html: {
        files: ['before.html','after.html','img/**/*'],
        tasks: ['newer:copy','version']
    },    
    grunt: {
        files: ['grunt/**/*'],
        tasks: [],
        options: {
            spawn: false,
            reload: true
        }
    }
}
