module.exports = {
    build: {
        files: ['sass/**/*','js/**/*'],
        tasks: ['dev']
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
