module.exports = {
    first: ['sass','concat:js_src','concat:js_libs','newer:copy'],
    last: ['cssmin', 'uglify']
};
