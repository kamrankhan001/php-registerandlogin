$(document).ready(function(){
    $("#register").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
              },
            password: {
                required: true,
                length: true,
            },
            confirm_password: {
                required: true,
                equalTo: '#password',
            },
        },

        messages: {
            name: {
                required: "The Name Field is Mandatory",
            },
            email: {
                required: "The Email Field is Mandatory",
            },
            password: {
                required: "The Password Field is Mandatory",
            },
            confirm_password: {
                required: "The Confirm Password Field is Mandatory",
            },
        },
    });

    $("#login").validate({
        rules: {
          email: {
            required: true,
            email: true,
          },
          password: {
            required: true,
          },
        },
        
        messages: {
            email: {
                required: "Please Enter the Email",
            },
            password: {
                required: "Please Provide the Correct Password",
            },
        },
    });
})