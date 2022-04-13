@extends('userlayout')
@section('content')
<!-- header begin -->
<style>
    #ForgotForm, #ChangePassForm  {
        display: none;
    }
</style>
<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col customer">
                            <!-- logo begin -->
                            <div id="logo" style="padding: 20px 0;">
                                <a href="{{URL::to('/')}}">
                                    <img alt="" src="{{ asset('frontend/images/logo.png')}}" />
                                </a>
                            </div>
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

    <section class="full-height relative no-top no-bottom vertical-center"
        data-bgimage="url({{ asset('frontend/images/background/subheader.jpg')}}) top"
        data-stellar-background-ratio=".5">
        <div class="overlay-gradient t50">
            <div class="center-y relative">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 text-light wow fadeInRight" data-wow-delay=".5s">
                            <div class="spacer-10"></div>
                            <h1>Create, sell or collect digital items.</h1>
                        </div>

                        <div class="col-lg-4 offset-lg-2 wow fadeIn" data-wow-delay=".5s">
                            <div id='LoginForm' class="box-rounded padding40" data-bgcolor="#ffffff">
                                <h3 class="mb10">Sign In</h3>
                                <p>Login using an existing account or create a new account <a
                                        href="{{ URL::to('/register') }}">here<span></span></a>.</p>
                                <form class="form-border" novalidate>
                                    <div class="field-set">
                                        <input type='text' name='username' id='username' class="form-control"
                                            placeholder="username" required>
                                    </div>
                                    <div class="field-set">
                                        <input type='password' name='password' id='password' class="form-control"
                                            placeholder="password" required>
                                    </div>
                                    <div class="field-set">
                                        <input type='submit' id='login' value='Submit'
                                            class="btn btn-main btn-fullwidth color-2">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="spacer-single"></div>
                                    <ul class="list s3">
                                        <li><a href="#" onclick="forgotpass()">Forgot password?</a></li>
                                        {{-- <li>Login with:</li>
                                        <li><a href="{{ URL::to('/login-facebook') }}">Facebook</a></li>
                                        <li><a href="{{ URL::to('/login-google') }}">Google</a></li> --}}
                                    </ul>
                                </form>
                            </div>
                            <div id='ForgotForm' class="box-rounded padding40" data-bgcolor="#ffffff">
                                <h3 class="mb10">Forgot password</h3>
                                <p>Enter the account you forgot the password and check your email
                                <form class="form-border" novalidate>
                                    <div class="field-set">
                                        <input type='text' name='username' id='username_fg' class="form-control"
                                            placeholder="username" required>
                                    </div>
                                    <div class="field-set">
                                        <input type='submit' id='forgotpass' value='Submit'
                                            class="btn btn-main btn-fullwidth color-2">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="spacer-single"></div>
                                    <!-- social icons -->
                                    <ul class="list s3">
                                        <li><a href="#" onclick="login()">Back</a></li>
                                    </ul>
                                    <!-- social icons close -->
                                </form>
                            </div>
                            <div id='ChangePassForm' class="box-rounded padding40" data-bgcolor="#ffffff">
                                <h3 class="mb10">Resset password</h3>
                                <p>Import token code and change new password
                                <form class="form-border needs-validation" novalidate>
                                    <div class="field-set">
                                        <input type='text' name='token' id='token' class="form-control"
                                            placeholder="token" required>
                                        <div class="invalid-feedback">Token field cannot be blank!</div>
                                    </div>
                                    <div class="field-set">
                                        <input type='password' name='password' id='rspassword' class="form-control"
                                            placeholder="password" required>
                                        <div class="invalid-feedback">Please make sure your password contains at least (a
                                            Capital
                                            letter, a number and a
                                            special charcter).</div>
                                    </div>
                                    <div class="field-set">
                                        <input type='password' name='repassword' id='repassword' class="form-control"
                                            placeholder="re-password" required>
                                        <div class="invalid-feedback">Two Passwords are not the same</div>
                                    </div>
                                    <div class="field-set">
                                        <input type='submit' id='ressetpass' value='Submit'
                                            class="btn btn-main btn-fullwidth color-2">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="spacer-single"></div>
                                    <!-- social icons -->
                                    <ul class="list s3">
                                        <li><a href="#" onclick="forgotpass()">Back</a></li>
                                    </ul>
                                    <!-- social icons close -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    function forgotpass() {
        $("#LoginForm").hide();
        $("#ForgotForm").show();
        $("#ChangePassForm").hide();
    }
    function login() {
        $("#LoginForm").show();
        $("#ForgotForm").hide();
        $("#ChangePassForm").hide();
    }
    $(document).on('click', '#login', function(e) {
        e.preventDefault()
        var username = $('#username').val();
        var password = $('#password').val();
        if(username != "" && password != ""){
            axios.post("login-user", {
                username: username,
                password: password,
            })
            .then(function (response) {
                if(response.data == 1){
                    window.location = 'attendance-challenge';
                }
                else{
                    Swal.fire('','Wrong account or password','warning')
                }
            })
        }
        else{
            Swal.fire('','Please enter your account or password','warning')
        }
    });
    $(document).on('click', '#forgotpass', function(e) {
        event.preventDefault()
        var username = $('#username_fg').val();
        if(username != ""){
            axios.post("forgot-pass", {
                username: username
            })
            .then(function (response) {
                if(response.data == 1){
                    $("#ForgotForm").hide();
                    $("#ChangePassForm").show();
                    Swal.fire('','Please check your email to reset your password','success')
                }
                else{
                    Swal.fire('','This account is not registered','warning')
                }
            })
        }
        else{
            Swal.fire('','Please enter your account','warning')
        }
    });
    document.querySelector('#token').addEventListener('blur', validateToken);
    document.querySelector('#rspassword').addEventListener('blur', validatePassword);
    document.querySelector('#repassword').addEventListener('blur', validateRePassword);
    const reSpaces = /^\S*$/;
    function validateToken(e) {
        const token = document.querySelector('#token');
        if (token.value != "") {
            token.classList.remove('is-invalid');
            token.classList.add('is-valid');
            return true;
        } else {
            token.classList.remove('is-valid');
            token.classList.add('is-invalid');
            return false;
        }
    }
    function validatePassword() {
        const password = document.querySelector('#rspassword');
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
        const password = document.querySelector('#rspassword');
        const re_password = document.querySelector('#repassword');
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
            !validateToken() ||
            !validatePassword() ||
            !validateRePassword()
            ) {
                event.preventDefault();
                event.stopPropagation();
                Swal.fire('','Please double check the fields','warning')
            } else {
                event.preventDefault();
                axios.post("resset-pass", {
                    token: $('#token').val(),
                    username: $('#username_fg').val(),
                    pass: $('#rspassword').val(),
                })
                .then(function (response) {
                    switch(response.data) {
                        case 1:
                            $("#LoginForm").hide();
                            $("#ChangePassForm").hide();
                            Swal.fire('','Change password successfully','success')
                            break;
                        case 0:
                            Swal.fire('','Token False','warning')
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
<!-- footer close -->
@endsection
