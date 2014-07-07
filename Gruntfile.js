module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        separator: ';'
      },
      dist: {
        src: ['assets/js/src/*.js'],
        dest: 'assets/js/dist/<%= pkg.name %>.js'
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%=pkg.version %> */\n'
      },
      dist: {
        files: {
          'assets/js/dist/<%= pkg.name %>.min.js': ['<%= concat.dist.dest %>']
        }
      }
    },
    jshint: {
      files: ['Gruntfile.js', 'assets/js/src/**/*.js'],
      options: {
        // options here to override JSHint defaults
        globals: {
          jQuery: true,
          console: true,
          module: true,
          document: true
        }
      }
    },
    cssmin: {
      minify: {
        expand: true,
        cwd: 'assets/css/src/',
        src: ['*.css', '!*.min.css'],
        dest: 'assets/css/dist/',
        ext: '.min.css'
      }
    },
    watch: {
      js: {
        files: ['<%= jshint.files %>'],
        tasks: ['jshint', 'buildjs']
      },
      css: {
        files: 'assets/css/src/*',
        tasks: ['buildcss']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('buildjs', ['jshint', 'concat', 'uglify']);
  grunt.registerTask('buildcss', ['cssmin']);

  grunt.registerTask('default', ['buildjs', 'buildcss']);

};

