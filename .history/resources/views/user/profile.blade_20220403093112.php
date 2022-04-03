@extends('userlayout')
@section('content')
<style>
    .shape {
        width: 200px;
        height: 200px;
        -webkit-clip-path: circle(50% at 50% 50%);
        clip-path: circle(50% at 50% 50%);
        shape-outside: circle(50% at 50% 50%);
        border-radius: 50%;
        border: 1px solid black;
    }

    .shape img {
        width: 100%;
        height: 100%;
    }

    @media screen and (max-width: 374.98px) {
        .shape {
            width: 100px;
            height: 100px;
        }
    }
</style>
<!-- header begin -->
<header class="transparent">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="de-flex sm-pt10">
                    <div class="de-flex-col">
                        <div class="de-flex-col">
                            <!-- logo begin -->
                            <div id="logo">
                                <a href="{{URL::to('/')}}">
                                    <img alt="" src="{{ asset('frontend/images/logo.png')}}" />
                                </a>
                            </div>
                            <!-- logo close -->
                        </div>
                    </div>
                    <div class="de-flex-col header-col-mid">
                        <!-- mainmenu begin -->
                        <ul id="mainmenu">
                            <li>
                                <a href="{{URL::to('/home')}}">Home<span></span></a>
                            </li>
                            <li>
                                <a href="#">Explore<span></span></a>

                            </li>
                            <li>
                                <a href="#">Pages<span></span></a>
                                <ul>
                                    <li><a href="{{ URL::to('/attendance-challenge')}}">Attendance challenge</a></li>
                                    <li><a href="#">Ecommerce</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Stats<span></span></a>

                            </li>
                            <li>
                                <a href="#">Elements<span></span></a>

                            </li>
                        </ul>
                        <div class="menu_side_area">
                            <?php
                            $customer_id = Session::get('customer_id');
                            $customer_name = Session::get('customer_name');
                            $customer_image = Session::get('customer_image');
                            if(isset($customer_id)){
                            ?>
                            <div class="de-login-menu">
                        <span id="de-click-menu-notification" class="de-menu-notification">
                            {{-- <span class="d-count">8</span> --}}
                            <i class="fa fa-bell"></i>
                        </span>

                                <span id="de-click-menu-profile" class="de-menu-profile">
                            <?php
                                    $customer_image = Session::get('customer_image');
                                    if(isset($customer_image)){
                                    ?>
                                <img src="{{ asset('uploads/avatar/' . $customer_image . '')}}" class="img-fluid" alt="">
                            <?php
                                    }else{
                                    ?>
                                <img src="{{ asset('backend/media/users/blank.png')}}" class="img-fluid" alt="">
                            <?php
                                    }
                                    ?>
                        </span>

                                <div id="de-submenu-notification" class="de-submenu">
                                    <div class="de-flex">
                                        <div>
                                            <h4>Notifications</h4>
                                        </div>
                                    </div>
                                    <ul id="load_noti"></ul>
                                </div>

                                <div id="de-submenu-profile" class="de-submenu">
                                    <div class="d-name">
                                        <h4>{{$customer_name}}</h4>
                                        <a href="{{ URL::to('/profile') }}">Set display name</a>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="d-wallet">
                                        <h4>Balance</h4>
                                        <span id="wallet"class="d-wallet-address">{{Session::get('customer_balance')}} FPI</span>
                                    </div>
                                    <div class="spacer-10"></div>
                                    <div class="d-balance">
                                        <div style="display: flex">
                                            <button id="btn_copy2"><a href="#" data-bs-toggle="modal" data-bs-target="#payoutmodel">without</a></button>&nbsp;&nbsp;
                                            <button id="btn_copy3"><a href="#" data-bs-toggle="modal" data-bs-target="#rechargemodel">deposit</a></button>
                                        </div>
                                    </div>
                                    <div class="d-line"></div>
                                    <ul class="de-submenu-profile">
                                        <li><a href="{{ URL::to('/history') }}"><i class="fa fa-history"></i> Transaction history</a>
                                        <li><a href="{{ URL::to('/profile') }}"><i class="fa fa-user"></i> Edit profile</a>
                                        <li><a href="{{ URL::to('/changepass') }}"><i class="fa fa-pencil"></i> Change your password</a>
                                        <li><a href="#" id="logout"><i class="fa fa-sign-out"></i> Sign out</a>
                                    </ul>
                                    <span id="menu-btn"></span>
                                </div>
                            </div>
                            <?php
                            }
                            else {
                            ?>
                            <a href="{{ URL::to('/login') }}" class="btn-main btn-wallet"><i
                                    class="icon_wallet_alt"></i><span>Login</span></a>
                            <a href="{{ URL::to('/register') }}" class="btn-main btn-wallet"><i
                                    class="icon_wallet_alt"></i><span>Register</span></a>
                            <?php
                            }
                            ?>
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
    <section id="subheader" class="text-light" data-bgimage="url(frontend/images/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Edit Profile</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section close -->


    <!-- section begin -->
    <section id="section-main" aria-label="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form id="form-create-item" class="form-border needs-validation">
                        <div class="de_tab tab_simple">
                            <div class="de_tab_content">
                                <div class="tab-1">
                                    <div class="row wow fadeIn">
                                        <div class="col-lg-8 mb-sm-20">
                                            <div class="field-set">
                                                <h5>Full name</h5>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="Enter full name" />

                                                <div class="spacer-10"></div>
                                                <div class="invalid-feedback">Full name field cannot be blank!</div>
                                                <div class="spacer-10"></div>
                                                <h5>Email</h5>
                                                <input type="text" name="email" id="email" class="form-control"
                                                    placeholder="Enter your email" />

                                                <div class="spacer-10"></div>
                                                <div class="invalid-feedback">Please check email again.</div>
                                                <div class="spacer-10"></div>

                                                <h5>Phone number</h5>
                                                <input type="text" name="phone" id="phone" class="form-control"
                                                    placeholder="Enter your phone number" />

                                                <div class="spacer-10"></div>
                                                <div class="invalid-feedback">Please check phone number again.</div>
                                                <div class="spacer-10"></div>
                                            </div>
                                        </div>

                                        <div id="sidebar" class="col-lg-4">
                                            <h5>Profile image <i class="fa fa-info-circle id-color-2"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    title="Recommend 400 x 400. Max size: 50MB. Click the image to upload."></i>
                                            </h5>
                                            <?php
                                                $customer_image = Session::get('customer_image');
                                                if(isset($customer_image) && isset($customer_type)){
                                            ?>
                                            <div class="shape">
                                                <img src="{{ $customer_image}}" id="click_profile_img"
                                                    class="d-profile-img-edit img-fluid" alt="">
                                            </div>
                                            <?php
                                                }else if(isset($customer_image)){
                                                ?>
                                            <div class="shape">
                                                <img src="{{ asset('uploads/avatar/' . $customer_image . '')}}"
                                                    id="click_profile_img" class="d-profile-img-edit img-fluid" alt="">
                                            </div>
                                            <?php
                                                }else{
                                                ?>
                                            <div class="shape">
                                                <img src="{{ asset('backend/media/users/blank.png')}}"
                                                    id="click_profile_img" class="d-profile-img-edit img-fluid" alt="">
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            <input onchange="ImagesFileAsURL()" type="file" id="upload_profile_img"
                                                accept=".png, .jpg, .jpeg">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="spacer-30"></div>
                        <input type="submit" id="submit" class="btn-main" value="Update profile">
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    function ImagesFileAsURL() {
        var fileToLoad = $('#upload_profile_img').get(0).files[0];
        var fileReader = new FileReader();
        fileReader.onload = function(fileLoaderEvent) {
            var srcData = fileLoaderEvent.target.result;
            $('#click_profile_img').attr('src',srcData);
        }
        fileReader.readAsDataURL(fileToLoad);
    }
    load_profile();
    function load_profile(){
        axios.get("load-profile-user")
            .then(function (response) {
                $('#name').val(response.data.customer_name);
                $('#email').val(response.data.customer_email);
                $('#phone').val(response.data.customer_phone);
            })
            .catch((error) => {
                console.log(error);
            });
    }
    document.querySelector('#name').addEventListener('blur', validateName);
    document.querySelector('#email').addEventListener('blur', validateEmail);
    document.querySelector('#phone').addEventListener('blur', validatePhone);
    const reSpaces = /^\S*$/;
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
    (function () {
    const forms = document.querySelectorAll('.needs-validation');
    for (let form of forms) {
        form.addEventListener(
        'submit',
        function (event) {
            if (
            !form.checkValidity() ||
            !validateEmail() ||
            !validateName() ||
            !validatePhone()
            ) {
                event.preventDefault();
                event.stopPropagation();
                Swal.fire("","Please double check the fields","warning");
            } else {
                event.preventDefault();
                var form_data = new FormData();
                form_data.append("image", $('#upload_profile_img').get(0).files[0]);
                form_data.append("name", $('#name').val());
                form_data.append("email", $('#email').val());
                form_data.append("phone", $('#phone').val());
                axios({
                    url : 'update-profile-user',
                    method : 'POST',
                    data: form_data,
                    headers: {
                        'cache': false,
                        'Content-Type' : false,
                        'processData': false,
                    },
                    withCredentials: true,
                })
                .then(function (response) {
                    if (response.data == 0) {
                        Swal.fire("", "This email has been used then!", "warning");
                    } else if (response.data == 1) {
                        Swal.fire("", "This phone number has been used then!", "warning");
                    }else if (response.data == 2) {
                        Swal.fire({
                            text: "Update information successfully",
                            icon: "success",
                            showCancelButton: false,
                            confirmButtonText: "Ok!",
                        })
                        .then(function(result) {
                            if (result.value) {
                                location.reload();
                            }
                        });
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
            }
        },
        false
        );
    }
    })();
</script>
@endsection
