module.exports = {
    cssmin: {// target
        files: {
            'default/css/production.<%= grunt.pkg.version %>.min.css': 'default/css/production.css'
        }     // 'destination': 'source'
    }
};


