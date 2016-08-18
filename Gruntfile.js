var projectFileList = [
    "node_modules/jquery/dist/jquery.js",
    "node_modules/bootstrap-sass/assets/javascripts/bootstrap.js",
];


module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            options: {
                loadPath: [
                    'sass'
                ]
            },
            production: {
                options: {
                    style: 'expanded',
                    sourcemap: 'auto',
                    precision: 4
                },
                files: {
                    'assets/style.css': 'assets/sass/main.scss'
                }
            }
        },
        "uglify": {
            "theme": {
                "options": {
                    "preserveComments": "some"
                },
                "files": {
                    "assets/min/main.min.js": projectFileList
                }
            }
        },
        "cssmin": {
            target: {
                files: {
                    'assets/min/style.min.css': ['assets/style.css']
                }
            }

        },
        watch       : {
            options: {
                livereload: true
            },
            sass   : {
                files: [
                    'assets/sass/*.scss',
                    'assets/sass/**/*.scss'
                ],
                tasks: ['default']
            },
            js   : {
                files: [
                    'assets/js/*.js',
                    'assets/js/**/*.js',
                    'assets/!js/main.min.js'
                ],
                tasks: ['default']
            }

        }


    });


    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-contrib-jshint");
    grunt.loadNpmTasks("grunt-contrib-uglify");
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('dev', ['sass']);
    grunt.registerTask('default', ['sass', 'cssmin', 'uglify']);


};