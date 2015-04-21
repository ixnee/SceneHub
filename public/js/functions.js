$('document').ready(function(){
	$('#datepicker').datepicker({
		startView: 2,
		defaultViewDate: { year: 1980 }
	});
	validation();
});

	function validation() {
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
						message: 'Your username can only consist of alphabetical, numerical, dot and underscore'
					},
					different: {
						field: 'password',
						message: 'Your username and password may not equal each other'
					}
				}
			},
			password: {
				validators: {
					notEmpty: {
						message: 'The password is required'
					},
					different: {
						field: 'username',
						message: 'The username and password may not equal each other'
					}
				}
			}
		}
	});
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
						message: 'The username can only consist of alphabetical, numerical, dot and underscore'
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
					emailAddress: {
						message: 'Please enter a valid email address'
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
	});
}


