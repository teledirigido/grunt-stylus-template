
module.exports = function(grunt) {
  // Configure Grunt
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    babel: {
      options: {
        "sourceMap": true,
        presets: ['es2015']
      },
      dist: {
        files: [{
          "expand": true,
          "cwd": "./js/src/",
          "src": ["*.js"],
          "dest": "./js/dist/",
          "ext": ".js"
        }]
      }
    },
    uglify: {
      my_target: {
        options : {
          sourceMap : true,
        },
        src : './js/dist/*.js',
        dest : './js/scripts.min.js'
      }
    },
    browserSync: {
      dev: {
        bsFiles: {
          src : [
            './*.css',
            './*.php',
            './js/*.js',
          ]
        },
        options: {
          watchTask: true,
          proxy: "http://miguel.dev/testing/html-stylus-grunt-template/"
        }
      }
    },

    stylus: {
      compile: {
        options: {
          compress: false,
          sourcemap:{
            inline:true
          },
          paths: ['stylus'],
          import: ['stylus/*']
        },
        files: {
          'style.css' : 'style.styl',
        }
      }
    },

    // grunt-watch will monitor the projects files
    // https://github.com/gruntjs/grunt-contrib-watch
    watch: {
      template: {
        files: ['*/*.*'],
        options: {
          livereload: true
        }
      },
      stylus: {
        files: ['*.styl','./**/*.styl'],
        // files: ['preview/style.styl'],
        tasks: ['stylus'],
        options : { livereload: true },
      },
      scripts: {
        files: ['./js/*.js'],
        options: {
          livereload: true
        }
      }
    },

  });
  
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.loadNpmTasks('grunt-contrib-stylus');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-babel');
  grunt.loadNpmTasks('grunt-contrib-uglify');

  // Creates the `server` task
  grunt.registerTask('preview', [
    'browserSync',
    'babel',
    'uglify',
    'stylus',
    'watch',
  ]);

};