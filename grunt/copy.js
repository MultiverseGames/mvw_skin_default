module.exports = {
    dist: {
        files: [
            {
            	expand: true,
            	cwd:'libs/fontawesome/fonts/',
                src: ['**'],
                dest: 'default/fonts/'
            },
            {
            	expand: true,
            	cwd:'libs/open-sans-fontface/fonts/',
                src: ['**'],
                dest: 'default/css/fonts/'
            },     
            {
            	expand: true,
            	cwd:'libs/bootstrap/dist/fonts/',
                src: ['**'],
                dest: 'default/fonts/'
            },  
            {
                expand: true,
                src: ['img/**', 'before.html', 'after.html', 'js/countDown.js'],
                dest: 'default/'
            }
        ]
    }
};
