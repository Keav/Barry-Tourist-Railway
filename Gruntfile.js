module.exports = function (grunt) {

    "use strict";

    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),

        clean: {
            build: ['dist/css/main**.*', 'dist/js/custom**.*'],
        },

        imagemin: {
            dist: {
                options: {
                    optimizationLevel: 3
                },
                files: [{
                    expand: true,
                    cwd: 'src/',
                    src: ['**/*.jpg', '**/*.png', '**/*.gif'],
                    dest: 'dist/'
                }, ]
            },
            test: {
                options: {
                    optimizationLevel: 3
                },
                files: [{
                    expand: true,
                    cwd: 'dist/temp/',
                    src: ['**/*.jpg', '**/*.png', '**/*.gif'],
                    dest: 'dist/temp/min/'
                }, ]
            }
        },

        responsive_images: {
            resimg: {
                options: {
                    newFilesOnly: false,
                    engine: 'im',
                    quality: 80,
                    upscale: false,
                    sizes: [{
                        width: 320
                    }, {
                        width: 768
                    }, {
                        width: 1024
                    }]
                },
                files: [{
                    expand: true,
                    cwd: 'dist/',
                    src: ['**/*.{jpg,gif,png}'],
                    dest: 'dist/temp/'
                }]
            },
        },

        htmlmin: {
            dist: {
                options: {
                    removeComments: true,
                    collapseWhitespace: true
                },
                files: { // Dictionary of files
                    // 'dist/index.html': 'src/index.html', // 'destination': 'source'
                    'dist/index.php' : 'src/index.php'
                }
            },
        },

        sass: {
            build: {
                options: {
                    style: 'expanded',
                    sourcemap: 'none',
                    precision: 10,
                },
                files: {
                    'src/css/sass.css': 'src/scss/sass.scss'
                }
            }
        },

        uncss: {
            options: {
                ignore: [
                    /(#|\.)fancybox(\-[a-zA-Z]+)?/,
                    // needed for Bootstrap's transitions
                    ".fade",
                    ".fade.in",
                    ".collapse",
                    ".collapse.in",
                    ".navbar-collapse",
                    ".navbar-collapse.in",
                    ".collapsing",
                    // needed for the <noscript> warning; remove when fixed in uncss
                    ".alert-danger",
                    ".visible-xs",
                    ".noscript-warning",
                    ".fadeIn",
                    ".fade-in",
                    ".fade-out",
                ],
                report: 'min',
                timeout: 1000,
                ignoreSheets: ['/fonts.googleapis/'],
            },
            dist: {
                files: {
                    'dist/css/tidy.css': ['src/index.html']
                }
            }
        },

        cssmin: {
            build: {
                files: [{
                    expand: true,
                    cwd: 'src/',
                    src: ['**/*.css', '!**/*.min.css', '!**/*.map'],
                    dest: 'dist/',
                    ext: '.min.css',
                    extDot: 'last'
                }]
            }
        },

        autoprefixer: {
            options: {
                browsers: ['last 2 versions', 'ie 9']
            },

            // prefix all files
            files: {
                expand: true,
                flatten: true,
                cwd: 'src/css/',
                src: '*.css',
                dest: 'src/css/'
            }
        },

        uglify: {
            build: {
                files: [{
                    expand: true,
                    cwd: 'src/',
                    src: ['**/*.js', '!**/*.min.js'],
                    dest: 'dist/',
                    ext: '.min.js',
                    extDot: 'last'
                }]
            }
        },

        hashres: {
            options: {
                encoding: 'utf8',
                fileNameFormat: '${name}.${hash}.${ext}',
                renameFiles: true
            },
            min: {
                // Specific options, override the global ones
                options: {
                    // You can override encoding, fileNameFormat or renameFiles
                    fileNameFormat: '${name}.min.${ext}',
                    renameFiles: false
                },
                // Files to hash
                src: [
                    // WARNING: These files will be renamed!
                    'src/**/*.css', 'src/**/*.js', '!**/*.min.*'
                ],
                // File that refers to above files and needs to be updated with the hashed name
                dest: [
                    // 'dist/index.php',
                    // 'dist/events.php',
                    // 'dist/about.php',
                    // 'dist/history.php',
                    // 'dist/news.php',
                    // 'dist/train-services.php',
                    // 'dist/contact.php',
                    // 'dist/contact-success.php',
                    'dist/includes/head.php'
                ],
            },
            prod: {
                // Specific options, override the global ones
                options: {
                    // You can override encoding, fileNameFormat or renameFiles
                },
                // Files to hash
                src: [
                    // WARNING: These files will be renamed!
                    'dist/css/main.min.css',
                    //'dist/js/custom.min.js'
                ],
                // File that refers to above files and needs to be updated with the hashed name
                dest: 'dist/includes/head.php',
            }
        },

        copy: {
            main: {
                files: [{
                    expand: true,
                    timestamp: true,
                    cwd: 'src/',
                    src: [
                        '**/*',
                        '!**/*.css',
                        '!**/*.js',
                        '!**/*.html',
                        '!**/*.scss',
                        '!**/*.less',
                        '!**/*.php',
                        '!**/*.map',
                        '!**/*.jpg',
                        '!**/*.png',
                        '!**/*.gif',
                        '!**/less/**',
                        '!**/scss/**'
                    ],
                    dest: 'dist/',
                }]
            },
            others: {
                files: [{
                    expand: true,
                    timestamp: true,
                    cwd: 'src/',
                    src: ['**/*.php', 'js/jquery**.min.js', '**/.htaccess', 'includes/*.*'],
                    dest: 'dist/',
                }]
            },
        },

        shell: {
            bumpVersion: {
                command: 'npm version patch'
            }
        },

        bump: {
            options: {
                files: ['package.json'],
                updateConfigs: [],
                commit: true,
                commitMessage: 'Release v%VERSION%',
                commitFiles: ['package.json'],
                createTag: true,
                tagName: 'v%VERSION%',
                tagMessage: 'Version %VERSION%',
                push: true,
                pushTo: 'origin',
                gitDescribeOptions: '--tags --always --abbrev=1 --dirty=-d',
                globalReplace: false
            }
        },

        watch: {
            options: {
            //    livereload: true
            },
            sass: {
                files: ['src/scss/sass.scss'],
                tasks: ['sass'],
            },
            livereload: {
                files: ['src/**/*.html', 'src/**/*.php', 'src/**/*.css', 'src/**/*.js'],
                options: {livereload: true}
            }
        }

    });

    // Default task(s).
    grunt.registerTask('default', ['watch']);

    // Build for Staging
    grunt.registerTask('build', ['clean', 'newer:imagemin:dist', 'newer:htmlmin', 'newer:uglify', 'newer:cssmin', 'newer:copy', 'hashres:min', 'hashres:prod']);

    // Bump release version numbers
    grunt.registerTask('release', ['bump:major']);

};
