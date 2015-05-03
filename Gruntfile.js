var timer = require("grunt-timer");

module.exports = function (grunt) {

	/*
	* We use the grunt-timer function to terminal log output how long
	* different grunt tasks take.
	* */
	timer.init(grunt, {deferLogs: false, friendlyTime: false, color: "blue"});

	require('jit-grunt')(grunt, {
		"jshint": 'grunt-contrib-jshint',
		"useminPrepare": 'grunt-usemin'
	});

	grunt.initConfig({

		pkg: grunt.file.readJSON('package.json'),

		sass: {
			develop: {
				options: {
					outputStyle: 'expanded'
				},
				files: {
					'./includes/css/site.css': './includes/scss/site.scss',
					'./includes/css/bootstrap.css': './includes/scss/_plugins/bootstrap.scss'
				}
			},
			build: {
				options: {
					outputStyle: 'compressed'
				},
				files: {
					'./includes/css/site.scss': './includes/scss/site.scss',
					'./includes/css/bootstrap.scss': './includes/scss/_plugins/bootstrap.css'
				}
			}
		},

		"bower-install-simple": {
			options: {
				color: true
			},
			develop: {
				options: {
					production: false
				}
			},
			build: {
				options: {
					production:true
				}
			}
		},

		usemin: {
			html: 'index.php'
		},

		'useminPrepare': {
			html: 'index.php',
			options: {
				dest: './design/scripts/compiled'
			}
		},

		uglify: {
			options: {
				mangle: {
					except: [
						'jQuery',
						'Backbone',
						'Spinner',
						'$',
						'enquire',
						'respond',
						'Bootstrap'
					]
				}
			}
		},


		shell: {
			grunt_command: {
				command: "grunt develop"
			}
		},

		//* =============================================
		//Section: WATCH
		//================================================ */
		watch: {
			options: {
				livereload: true
			},
			sass: {
				options: {
					livereload: false
				},

				files: [
					'./includes/scss/**/*.scss'
				],

				tasks: ['sass:develop']
			},
			grunt: {
				files: ['./style.css', './includes/css/site.css'],
				tasks: []
			},
			tpl: {
				files: ['*.php', 'Gruntfile.js', 'package.json'],
				tasks: []
			}
		},

		jshint: {
			options: {
				curly: true,
				eqeqeq: true,
				eqnull: true,
				browser: true,
				globals: {
					jQuery: true,
					FB: true,
					twttr: true,
					enquire: true
				}
			},
			defaults: ['design/scripts/compiled/**/*.js', '!design/scripts/compiled/site-compiled.js' ]
		},

		prompt: {
			run_grunt: {
				options: {
					questions: [
						{
							config: 'shell.grunt_command.command', // arbitray name or config for any other grunt task
							type: 'list', // list, checkbox, confirm, input, password
							message: 'Please choose from the grunt tasks', // Question to ask the user, function needs to return a string,
							default: 'home', // default value if nothing is entered
							choices: [
								{
									name: 'develop',
									value: 'grunt develop'
								},
								{
									name: 'build',
									value: 'grunt build'
								}
							],
							validate: function (value) {
								grunt.log.writeln(value);
							}
						}
					]

				}
			}
		}

	});

	/*
	 ==================
	 * Here are the important tasks!
	 ==================
	 * */

	grunt.registerTask('message:welcome', [], function () {
		grunt.log.writeln([
			'\n*************\n'['rainbow'].bold +
			'WELCOME TO DEFAULT FRONTEND BUILD ETERNAL WATCH TIMES.\n'['green'].bold +
			'*************'['rainbow'].bold
		]);
	});

	grunt.registerTask('message:build_done', [], function () {
		grunt.log.writeln([
			'\n*************\n'['green'].bold +
			'Your theme has now been built for production!\n'['green'].bold +
			'*************'['green'].bold
		]);
	});

	grunt.event.on('watch', function (action, filepath) {
		grunt.log.writeln([action]);
		grunt.log.writeln([filepath]);
		grunt.config(['jshint', 'defaults'], filepath);
	});

 	/*
	 * `grunt`, this command will prompt for a set of defined grunt task.
	 * */
	grunt.registerTask('default', [], function () {
		/*
		* Prompt for the other tasks! Sneaky!
		* */
		grunt.task.run('develop');
 	});

	/*
	 * triggered from cli with `npm run-script grunt-develop`
	 *
	 * `grunt develop`: this task runs the watch so your assets update live.
	 * */
	grunt.registerTask('develop', [], function () {
		grunt.task.run('bower-install-simple:develop', 'sass:develop', 'message:welcome', 'watch');
	});

	/*
	 * triggered from cli with `npm run-script grunt-build`
	 *
	 * `grunt build`: this task creates a production ready version of theme with 1 js file and minified css.
	 * */
	grunt.registerTask('build', [], function () {
		grunt.task.run('bower-install-simple:build', 'sass:build', 'cssmin', 'useminPrepare', 'concat', 'uglify', 'message:build_done');
	});

};