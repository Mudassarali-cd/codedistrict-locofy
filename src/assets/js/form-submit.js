$(document).ready(function() {
    $('form').validate({
        rules: {
            fullname: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            company: {
                required: false
            },
            message: {
                required: true
            }
        },
        messages: {
            fullname: "Please enter your full name",
            email: "Please enter a valid email address",
            message: "Please enter your message"
        },
        errorClass: "error", // Class for styling error messages
        errorElement: "div", // Element for displaying error messages
        errorPlacement: function(error, element) {
            error.appendTo(element.parent());
        },
        submitHandler: function(form) {
            // Form is valid, submit it
            form.submit();
        }
    });
});