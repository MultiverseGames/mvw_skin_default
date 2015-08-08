module.exports = {
    sass: {
        options: {
            style: 'compressed',
            sourceMap: true
        },                            // target
        files: {                        // dictionary of files
            'default/css/production.css': 'sass/main.scss'     // 'destination': 'source'
        }
    }
};
