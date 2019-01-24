//User Register Validation
    $(document).ready(function () {
        $('#userRegisterForm').validate({ 
            rules: {
                name: {
                    required: true,
                },
                email: {
                    required: true,
                    email: true,
                },
                userpassword: {
                    required: true,
                    minlength: 6,
                },
                degree: {
                    required: true
                },
                number: {
                    required: true,
                    maxlength: 10,
                },
                location: {
                    required: true,
                },
                gender: {
                    required: true,
                },
                confirmpassword: {
                    required: true,
                    minlength: 6,
                    equalTo: "#userpassword"
                },
                
            },

            messages:{
                name : "Enter name",
            }
        });
    });

//User Login Validation
    $(document).ready(function () {
        $('#userLoginForm').validate({ 
            rules: {
                email: {
                    required: true,
                },
                password: {
                    required: true,
                    minlength: 6,
                },
                
            }
        });
    });

//Numbers Only Validation
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }