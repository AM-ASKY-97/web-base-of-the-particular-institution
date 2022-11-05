$(document).ready(function () {
    Login();
});

function Login() {
    $(document).on('click', '.login', function () {
        $.validator.setDefaults({
            submitHandler: function () {
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Your record has been saved.',
                    showConfirmButton: false,
                    timer: 1500
                })
                $("#loginForm").trigger('reset');
            }
        })

        $("#loginForm").validate({
            errorClass: 'error',
            rules: {
                reg: "required",
                fName: "required",
                lname: "required",
                address: "required",
                gender:"required",
                email: {
                    email: true,
                    required: true
                },
                dob: "required",
                phone: {
                    required: true,
                    digits: true,
                    maxlength: 10,
                    minlength: 10
                },
                nic: {
                    required: true,
                    maxlength: 12,
                    minlength: 10
                }
            },
            messages: {
                reg: "Please enter your registration number",
                fName: "Please enter your first name ",
                lname: "Please enter your last name",
                address: "Please enter your address",
                gender:"Please select a gender<br/>",
                email: {
                    email: "Please Enter The Valid Email Address",
                    required: "Please Enter Your Email Id"
                },
                dob: "Please enter your date of birth",
                phone: {
                    required: "Please Enter Your Contact number",
                    digits: "Cotact No Must Be numeric",
                    maxlength: "length Must 10",
                    minlength: "length must 12"
                },
                nic: {
                    required: "Please Enter Your nic number",
                    maxlength: "length Must 12",
                    minlength: "length must 10"
                }
            },
            errorPlacement: function (error, element) {
                if (element.is(":radio")) {
                    error.appendTo(element.parents('.cont'));
                }
                else { // This is the default behavior 
                    error.insertAfter(element);
                }
            }
        })
    });
}