module.exports = {
    sass: {
        files: ['sass/**/*'],
        tasks: ['version','sass']
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
