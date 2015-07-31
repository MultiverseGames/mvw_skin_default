module.exports = {
    sass: {
        options: {
            style: 'compressed'
        },                            // target
        files: {                        // dictionary of files
            'default/css/production.css': 'sass/main.scss'     // 'destination': 'source'
        }
    }
};
