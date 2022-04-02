@extends('userlayout')
@section('content')

<!-- header begin -->
<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col customer">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{URL::to('/')}}">
                                    <img alt="" src="{{ asset('frontend/images/logo.png')}}" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>

    <!-- section begin -->
    <section id="subheader" class="text-light"
        data-bgimage="url({{ asset('frontend/images/background/subheader.jpg')}}) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">

                    <div class="col-md-12 text-center">
                        <h1>Register</h1>
                        <p>Anim pariatur cliche reprehenderit</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <section aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3>Don't have an account? Register now.</h3>

                    <div class="spacer-10"></div>

                    <form name="contactForm" id='contact_form' class="form-border needs-validation" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Full name:</label>
                                    <input type='text' name='name' id='name' class="form-control" required>
                                    <div class="invalid-feedback">Full name field cannot be blank!</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Email Address:</label>
                                    <input type='email' name='email' id='email' class="form-control" required>
                                    <div id="email-validation" class="invalid-feedback">Please check mail again.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Choose a Username:</label>
                                    <input type='text' name='username' id='username' class="form-control" required>
                                    <div class="invalid-feedback">Username must have at least 6 characters and  have space</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Phone number:</label>
                                    <input type='text' name='phone' id='phone' class="form-control" required>
                                    <div class="invalid-feedback">Please check phone number again.</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Password:</label>
                                    <input type='password' name='password' id='password' class="form-control" required>
                                    <div class="invalid-feedback">Please make sure your password contains at least (a
                                        Capital
                                        letter, a number and a
                                        special charcter).</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="field-set">
                                    <label>Re-enter Password:</label>
                                    <input type='password' name='re-password' id='re-password' class="form-control"
                                        required>
                                    <div class="invalid-feedback">Two Passwords are not the same</div>
                                </div>
                            </div>
                            <div class="col-md-12">

                                <div class="pull-left" style="margin-top: 30px">
                                    <input type='submit' id='register' value='Register Now'
                                        class="btn btn-main color-2">
                                </div>

                                <div id='mail_success' class='success'>Your message has been sent successfully.</div>
                                <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.
                                </div>
                                <div class="clearfix"></div>

                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>

</div>

<script type="text/javascript">
    document.querySelector('#username').addEventListener('blur', validateUsername);
    document.querySelector('#name').addEventListener('blur', validateName);
    document.querySelector('#email').addEventListener('blur', validateEmail);
    document.querySelector('#phone').addEventListener('blur', validatePhone);
    document.querySelector('#password').addEventListener('blur', validatePassword);
    document.querySelector('#re-password').addEventListener('blur', validateRePassword);
    const reSpaces = /^\S*$/;
    function validateUsername(e) {
        const username = document.querySelector('#username');
        if (username.value != "" && reSpaces.test(username.value)) {
            username.classList.remove('is-invalid');
            username.classList.add('is-valid');
            return true;
        } else if (username.length < 7) {
            username.classList.remove('is-valid');
            username.classList.add('is-invalid');
            return false;
        } else {
            username.classList.remove('is-valid');
            username.classList.add('is-invalid-2');
            return false;
        }
    }
    function validateName(e) {
        const name = document.querySelector('#name');
        if (name.value != "") {
            name.classList.remove('is-invalid');
            name.classList.add('is-valid');
            return true;
        } else {
            name.classList.remove('is-valid');
            name.classList.add('is-invalid');
            return false;
        }
    }
    function validateEmail(e) {
        const email = document.querySelector('#email');
        const re = /^([a-zA-Z0-9_\-?\.?]){3,}@([a-zA-Z]){3,}\.([a-zA-Z]){2,5}$/;
        if (reSpaces.test(email.value) && re.test(email.value)) {
            email.classList.remove('is-invalid');
            email.classList.add('is-valid');
            return true;
        } else {
            email.classList.add('is-invalid');
            email.classList.remove('is-valid');
            return false;
        }
    }
    function validatePhone(e) {
        const phone = document.querySelector('#phone');
        const re = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
        if (reSpaces.test(phone.value) && re.test(phone.value)) {
            phone.classList.remove('is-invalid');
            phone.classList.add('is-valid');
            return true;
        } else {
            phone.classList.add('is-invalid');
            phone.classList.remove('is-valid');
            return false;
        }
    }
    function validatePassword() {
        const password = document.querySelector('#password');
        const re = /(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.{8,})(?=.*[!@#$%^&*])/;
        if (re.test(password.value) && reSpaces.test(password.value)) {
            password.classList.remove('is-invalid');
            password.classList.add('is-valid');
            return true;
        } else {
            password.classList.add('is-invalid');
            password.classList.remove('is-valid');
            return false;
        }
    }
    function validateRePassword() {
        const password = document.querySelector('#password');
        const re_password = document.querySelector('#re-password');
        if (password.value == re_password.value) {
            re_password.classList.remove('is-invalid');
            re_password.classList.add('is-valid');
            return true;
        } else {
            re_password.classList.add('is-invalid');
            re_password.classList.remove('is-valid');
            return false;
        }
    }
    (function () {
    const forms = document.querySelectorAll('.needs-validation');
    for (let form of forms) {
        form.addEventListener(
        'submit',
        function (event) {
            if (
            !form.checkValidity() ||
            !validateEmail() ||
            !validateUsername() ||
            !validateName() ||
            !validatePhone() ||
            !validatePassword() ||
            !validateRePassword()
            ) {
                event.preventDefault();
                event.stopPropagation();
                Swal.fire('','Please double check the fields','warning')
            } else {
                event.preventDefault();
                axios.post("register-user", {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    phone: $('#phone').val(),
                    username: $('#username').val(),
                    pass: $('#password').val(),
                })
                .then(function (response) {
                    switch(response.data) {
                        case 0:
                            Swal.fire('','This account already has users','warning')
                            break;
                        case 1:
                            Swal.fire('','This e-mail is already taken','warning')
                            break;
                        case 2:
                            Swal.fire('','This phone number is already in use','warning')
                            break;
                        case 3:
                            Swal.fire({
                                title: "Success",
                                text: "Successful account registration, go to the login page?",
                                icon: "success",
                                showCancelButton: true,
                                confirmButtonText: "Ok!",
                                cancelButtonText: "No"
                            })
                                .then(function(result) {
                                    if (result.value) {
                                        location.href="login";
                                    }
                                });
                            break;
                    }
                })
            }
        },
        false
        );
    }
    })();
</script>
@endsection
