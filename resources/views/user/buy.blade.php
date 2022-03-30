@extends('userlayout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
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
                                $customer_type = Session::get('customer_type');
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
                                        if(isset($customer_image) && isset($customer_type)){
                                    ?>
                                        <img src="{{ $customer_image}}" class="img-fluid" alt="">
                                    <?php
                                        }else if(isset($customer_image)){
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
                                        <?php
                                            $check_pass = Session::get('customer_pass');
                                            if($check_pass){
                                        ?>
                                            <li><a href="{{ URL::to('/changepass') }}"><i class="fa fa-pencil"></i> Change your password</a>
                                        <?php
                                        }
                                        ?>
                                        <li><a href="#" id="logout"><i class="fa fa-sign-out"></i> Sign out</a>
                                    </ul>
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
    <?php
        if($buypackage_id > 0){
    ?>
    <!-- section begin -->
    <section id="subheader" class="text-light" data-bgimage="url(frontend/images/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Attendance Challege</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <section aria-label="section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 ">
                    <div id="calendar"></div>
                </div>
            </div>
            <div class="row d-flex justify-content-center" style="margin-top: 20px">
                <div class="col-md-8 ">
                    @php
                        $check_hour = Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('H-i');
                        if('06-00' <= $check_hour && $check_hour <= '06-30'){
                            echo '<a href="#" data-buypackage_id="'.$buypackage_id.'" id="attendance" class="btn-main">
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    Attendance</a>';
                        }
                    @endphp
                </div>
            </div>
        </div>
    </section>
    <?php
        }
        else{
    ?>
    <!-- section begin -->
    <section id="subheader" class="text-light" data-bgimage="url(frontend/images/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Buy attendance package</h1>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- section begin -->
    <section aria-label="section">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-6">
                    <style>
                        @media screen and (max-width: 767.98px) {
                            .opt-create{
                                display: block;
                                margin-bottom: 10px;
                            }
                        }
                    </style>
                    @php
                    $check_hour = Carbon\Carbon::now('Asia/Ho_Chi_Minh')->format('H-i');
                    if($check_hour > '06-30'){
                        echo '
                        <p>Select the attendance package you want to buy. Attend attendance continuously for 7 days from 6:00 am to 6:30 am to get back the money spent and get more rewards</p>
                        <span data-package="1000000" class="opt-create buy-package">
                            <img src="frontend/images/box-bronze.png" alt="">
                            <h3>1.000.000 FPI</h3>
                        </span>
                        <span data-package="3000000" class="opt-create buy-package">
                            <img src="frontend/images/box-gold.png" alt="">
                            <h3>3.000.000 FPI</h3>
                        </span>
                        <span data-package="7000000" class="opt-create buy-package">
                            <img src="frontend/images/box-platinum.png" alt="">
                            <h3>7.000.000 FPI</h3>
                        </span>
                        <span data-package="10000000" class="opt-create buy-package">
                            <img src="frontend/images/box-diamond.png" alt="">
                            <h3>10.000.000 FPI</h3>
                        </span>';
                    }
                    else {
                        echo '<p>Currently not open to buy list points, please re-order later</p>';
                    }
                    @endphp
                </div>
            </div>
        </div>
    </section>
    <?php
        }
    ?>
</div>
{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>
<script type="text/javascript">
    var calendar = $("#calendar").fullCalendar({
        editable: true,
        header: {
            left: "title",
            center: "",
            right: "prev,next today",
        },
        events: "load-calendar/" + {{$buypackage_id}},
        selectable: true,
        selectHelper: true,
        editable: true,
    });
    $(document).on('click', '#attendance', function(e) {
        event.preventDefault()
        axios.get("attendance/"+ {{$buypackage_id}})
        .then(function (response) {
            switch(response.data) {
                case 0:
                    Swal.fire('','You have completed the attendance package, please wait to receive the reward','success');
                    break;
                case 1:
                    Swal.fire('','Attendance success','success');
                    break;
                case 2:
                    Swal.fire('','You have already registered','warning')
                    break;
            }
        })
        .catch((error) => {
            console.log(error);
        });
    })
    $(document).on('click', '.buy-package', function(e) {
        e.preventDefault();
        var package = $(this).data('package');
        Swal.fire({
            title: "Question",
            text: "Are you sure you want to buy this package??",
            icon: "question",
            showCancelButton: true,
            confirmButtonText: "Ok!",
            cancelButtonText: "No"
        })
        .then(function(result) {
            if (result.value) {
                axios.get('buy/' + package)
                .then(function (response) {
                    switch(response.data) {
                        case 0:
                            Swal.fire('','Successful transaction','success');
                            location.reload();
                            break;
                        case 1:
                            Swal.fire('','7 days from the date of purchase of the package, you can buy a new package','warning');
                            location.reload();
                            break;
                        case 2:
                            Swal.fire('','Your account does not have enough money','warning');
                            break;
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
            }
        });
        e.preventDefault();
    })
</script>
@endsection
