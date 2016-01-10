module.exports = {
    sass: {
        options: {
            style: 'compressed',
            sourceMap: true
        },                            // target
        files: {                        // dictionary of files
            'default/css/production.css': 'src/core/main.scss'     // 'destination': 'source'
        }
    }
};
