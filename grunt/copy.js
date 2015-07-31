module.exports = {
    dist: {
        files: [
            {
            	expand: true,
            	cwd:'bower_components/fontawesome/fonts/',
                src: ['**'],
                dest: 'default/fonts/'
            },
            {
            	expand: true,
            	cwd:'bower_components/open-sans-fontface/fonts/',
                src: ['**'],
                dest: 'default/css/fonts/'
            },     
            {
            	expand: true,
            	cwd:'bower_components/bootstrap/dist/fonts/',
                src: ['**'],
                dest: 'default/fonts/'
            },  
            {
                expand: true,
                src: ['img/**', 'js/countDown.js'],
                dest: 'default/'
            }
        ]
    }
};
