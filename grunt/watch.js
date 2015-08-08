module.exports = {
    js: {
        files: ['js/**/*'],
        tasks: ['js_src']
    },
    sass: {
        files: ['sass/**/*.scss'],
        tasks: ['css']
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
