@extends('userlayout')
@section('content')
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

    <!-- section begin -->
    <section id="subheader" class="text-light" data-bgimage="url(frontend/images/background/subheader.jpg) top">
        <div class="center-y relative text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>Transaction history</h1>
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
                    <div class="de_tab tab_simple">
                        <ul class="de_nav">
                            <li onclick="load_recharge()" class="active"><span><i class="fa fa-user"></i>Recharge history</span></li>
                            <li onclick="load_package()"><span><i class="fa fa-exclamation-circle"></i>Package purchase history</span></li>
                        </ul>
                        <div class="de_tab_content">
                            <div class="col-lg-12 mb-sm-20" id="view_history">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script type="text/javascript">
    load_recharge();
    function load_recharge(){
        axios.get("load-recharge")
        .then(function(response) {
            $("#view_history").html(response.data)
        })
        .catch((error) => {
            console.log(error);
        });
    }
    function load_package(){
        axios.get("load-package")
        .then(function(response) {
            $("#view_history").html(response.data)
        })
        .catch((error) => {
            console.log(error);
        });
    }
</script>
@endsection
