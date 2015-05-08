/*

Author:						Lisa Balogh
Revision Date:		May 7, 2014
File Name:				functions.js
Description:			Stores and calls JavaScript functions
									to enhance site functionality

*/

// document ready function
$('document').ready(function(){
	$('.carousel').carousel({
        interval: 5000,
        pause: "false"
  });
	$('#datepicker').datepicker({
		startView: 2,
		defaultViewDate: { year: 1980 }
	});
	validation();
}); // end document ready function

// jQuery input validation function
function validation() {

	// login validation
	$('#login').formValidation({
		framework: 'bootstrap',
	  icon: {
	      valid: 'glyphicon glyphicon-ok',
	      invalid: 'glyphicon glyphicon-remove',
	      validating: 'glyphicon glyphicon-refresh'
	  },
		message:'This value is not valid',
		fields: {
			username: {
				message: 'Your username is not valid',
				validators: {
					notEmpty: {
						message: 'Your username is required'
					},
					stringLength: {
						min: 3,
						max: 30,
						message: 'Your username must be between 3 and 30 characters'
					},
					regexp: {
						regexp: /^[a-zA-Z0-9_\.]+$/,
						message: 'Your username can only consist of alphanumerical, dot, and underscore characters'
					}
				}
			},
			password: {
				validators: {
					notEmpty: {
						message: 'The password is required'
					}
				}
			}
		}
	}); // end login form validation

	// registration form validation
	$('#register').formValidation({
		framework: 'bootstrap',
	  icon: {
	      valid: 'glyphicon glyphicon-ok',
	      invalid: 'glyphicon glyphicon-remove',
	      validating: 'glyphicon glyphicon-refresh'
	  },
		message:'This value is not valid',
		fields: {
			username: {
				message: 'Your username is not valid',
				validators: {
					notEmpty: {
						message: 'Your username is required'
					},
					stringLength: {
						min: 3,
						max: 30,
						message: 'Your username must be between 3 and 30 characters'
					},
					regexp: {
						regexp: /^[a-zA-Z0-9_\.]+$/,
						message: 'The username can only consist of alphanumerical, dot, and underscore characters'
					},
					different: {
						field: 'password',
						message: 'Your username and password may not equal each other'
					}
				}
			},
			email: {
				validators: {
					notEmpty: {
						message: 'Your email address is required'
					},
					regexp: {
						regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
						message: 'Please enter a valid email address'
					}
				}
			},
			password: {
				validators: {
					notEmpty: {
						message: 'Your password is required'
					},
					different: {
						field: 'username',
						message: 'Your username and password may not equal each other'
					},
					regexp: {
						regexp: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/,
						message: 'The password must be at least 6 characters and include at least one number, one lowercase letter, and one uppercase letter'
					}
				}
			},
			password_confirmation: {
				validators: {
					notEmpty: {
						message: 'You must confirm your password'
					},
					identical: {
						field: 'password',
						message: 'Your password confirmation does not match your password'
					}
				}
			}
		}
	}); // end registration form validation

	// create-profile form validation
	$('#create-profile').formValidation({
		framework: 'bootstrap',
	  icon: {
	      valid: 'glyphicon glyphicon-ok',
	      invalid: 'glyphicon glyphicon-remove',
	      validating: 'glyphicon glyphicon-refresh'
	  },
			message:'This value is not valid',
			fields: {
				first: {
					message: 'This is not a valid entry',
					validators: {
						notEmpty: {
							message: 'Your first name is required'
						},
						stringLength: {
							min: 2,
							max: 30,
							message: 'Your first name must be between 2 and 30 characters'
						},
						regexp: {
							regexp: /^[a-zA-Z]+$/,
							message: 'Your first name must consist of letters only'
						}
					}
				},
			last: {
				message: 'This is not a valid entry',
				validators: {
					notEmpty: {
						message: 'Your last name is required'
					},
					stringLength: {
						min: 2,
						max: 30,
						message: 'Your last name must be between 2 and 30 characters'
					},
					regexp: {
						regexp: /^[a-zA-Z]+$/,
						message: 'Your last name must consist of letters only'
					}
				}
			},
			phone: {
				validators: {
					phone: {
						country: 'US',
						message: 'This phone number is not valid'
					}
				}
			}	
		}
	}); // end create-profile form validation

} // end jQuery input validation function


