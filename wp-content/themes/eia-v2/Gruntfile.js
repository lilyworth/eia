module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
  pkg: grunt.file.readJSON('package.json'),



    watch: {
    
         options: {
        livereload: true,    
      },
      php: {
        files: ['**/*.php'],
        options: {
          livereload: true,
        } 
      },      
      css: {
        files: [
          '**/*.scss'
        ],
        tasks: ['compass']
      },
      
      
      
    }, // watch ends



    compass: {
      dist: {
        options: {
          sassDir: '_/sass',
          cssDir: '_/css',
          outputStyle: 'compressed'
        }
      }
    },
    
  
	
  });  

  // Load the Grunt plugins.
  grunt.loadNpmTasks('grunt-contrib-compass'); 
  grunt.loadNpmTasks('grunt-contrib-watch');
  
  //grunt.loadNpmTasks('grunt-contrib-concat');
  //grunt.loadNpmTasks('grunt-contrib-uglify');

  // Register the default tasks.
  //grunt.registerTask('default', ['watch']);
  //grunt.registerTask('default', ['concat', 'uglify', ]);
  grunt.registerTask('default', ['watch']);
    
};