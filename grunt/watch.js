module.exports = {
    bower: {
        files: ['libs/**/*'],
        tasks: ['dev']        
    },
    js: {
        files: ['js/**/*'],
        tasks: ['newer:concat','version']
    },
    sass: {
        files: ['sass/**/*'],
        tasks: ['sass','version']
    },
    html: {
        files: ['before.html','after.html','img/**/*'],
        tasks: ['newer:copy']
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
