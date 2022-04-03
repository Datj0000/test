@extends('userlayout')
@section('content')
<!-- header begin -->
<header class="transparent header-light scroll-light">
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
                                </div>
                            </div>
                            <?php
                            }
                            else {
                            ?>
                            <a href="{{ URL::to('/login') }}" class="btn-main btn-wallet"><span>Login</span></a>
                            <a href="{{ URL::to('/register') }}" class="btn-main btn-wallet"><span>Register</span></a>
                            <?php
                            }
                            ?>
                            <span id="btn-"></span>
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
    <section id="section-hero" aria-label="section" class="no-top no-bottom vh-100" data-bgimage="url(frontend/images/background/bg-shape-1.jpg) bottom">
        <div class="v-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="spacer-single"></div>
                        <h6 class="wow fadeInUp" data-wow-delay=".25s"><span class="text-uppercase id-color-2">Happy FPI Day!</span></h6>
                        <div class="spacer-10"></div>
                        <h1 class="wow fadeInUp" data-wow-delay=".35s">Fan Pi Network Token</h1>
                        <p class="wow fadeInUp lead" data-wow-delay=".5s">
                            The coin was created and built by the Pi Network community. <br> Used as peer-to-peer payments.<br> Contract Address: 0x8A751ab17A5E81acf3CcBE2a695f84bF55A3523A
                        </p>
                        <div class="spacer-10"></div>
                        <a href="#" class="btn-main wow fadeInUp lead" data-wow-delay="1.25s">Explore</a>

                        <a href="https://drive.google.com/file/d/1FFBpfCfUvNIh7ONvXGLCWOO8IpLqaHTX/view" class="btn-main wow fadeInUp lead" data-wow-delay=".75s" style="background-color:#ffd700;" target="blank">White Paper</a>
                        <div class="mb-sm-30"></div>

                        <div class="col wow fadeInUp" style="margin-top:20px;" data-wow-delay=".5s">
                            <a class="app-apple" href="#" title="Download">
                                <img src="https://imgmainsite.be.com.vn/2020/11/b4d3eb95-app_apple@2x.png" alt="" style="width: 138px;">
                            </a>

                            <a class="app-android" href="#" title="Download">
                                <img src="https://imgmainsite.be.com.vn/2020/11/425a09db-app_android@2x.png" alt="" style="width: 151px;">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('frontend/images/bgtop.png')}}" class="lazy img-fluid wow fadeIn" data-wow-delay=".75s" alt="" style="width: 320px;margin: 66px 30px 30px 30px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-intro" class="no-bottom" style="background-size: cover;margin-top: 240px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Simpler to easily pay</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_genius"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Decentralized</h4>
                            <p class="wow fadeInUp" data-wow-delay=".15s">
                                Decentralized Secure, Immutable, non-counterfeitable and interoperable digital money.</p>
                        </div>
                        <i class="wm icon_genius"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_ribbon"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Ownership of rights</h4>
                            <p class="wow fadeInUp" data-wow-delay=".15s">Relinquishment of token ownership by the founder<br><br><br></p>
                        </div>
                        <i class="wm icon_ribbon"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_chat"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Community</h4>
                            <p class="wow fadeInUp" data-wow-delay=".15s">Over 10 million members worldwide<br><br><br></p>
                        </div>
                        <i class="wm icon_chat"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-sm-30">
                    <div class="feature-box f-boxed style-3">
                        <i class="wow fadeInUp bg-color-2 i-boxed icon_target"></i>
                        <div class="text">
                            <h4 class="wow fadeInUp">Mission</h4>
                            <p class="wow fadeInUp" data-wow-delay=".15s">We are created to replace BTC<br><br><br></p>
                        </div>
                        <i class="wm icon_target"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section-collections" class="no-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Distribution</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2"> </div>
                <div class="col-lg-8">
                    <img src="{{ asset('frontend/images/background-finall.png')}}" class="lazy img-fluid wow fadeIn" data-wow-delay=".75s" alt="">
                </div>
                <div class="col-lg-2"> </div>

            </div>
    </section>

    <section id="section-items" class="no-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Information FPI</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 mb-sm-30">
                        <h6 class="wow fadeInUp" data-wow-delay=".25s"><span class="text-uppercase id-color-2">Happy Pi Day!<br></span></h6>
                        <p class="wow fadeInUp lead" data-wow-delay=".5s">
                            Today the FPi is worth around $0/euro etc. similar to Bitcoin in 2008. The value of FPi will be backed by the time, attention, goods and services provided by other members of the network.<br> By pooling our attention,
                            goods and services around a common currency, FPi members seek to capture more value than is normally reserved for banks, tech giants (e.g. Facebook, Amazon) and other intermediaries.<br> Today, we are laying the groundwork
                            for this digital currency and marketplace by distributing the currency, building the community, and developing the technology to ensure its security.
                        </p>
                    </div>

                    <div class="col-lg-6 col-md-6 mb-sm-30">
                        <img src="{{ asset('frontend/images/bgmid.png')}}" class="lazy img-fluid wow fadeIn" data-wow-delay=".75s" alt="" style="width: 316p;">
                    </div>
                </div>
            </div>
    </section>

    <section id="section-popular" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Road Map</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <div class="col-md-12 wow fadeIn">
                    <div class="timeline2">
                        <div class="container2 left2">
                            <div class="date2">Q1-2022</div>
                            <i class="icon fa fa-home"></i>
                            <div class="content2">
                                <h2>PHASE 1</h2>
                                <p>
                                    Website creation<br> Create social media presence<br> Telegram calls channels<br> Twitter influencers<br> Youtube influencers
                                </p>
                            </div>
                        </div>
                        <div class="container2 right2">
                            <div class="date2">Q2-2022</div>
                            <i class="icon fa fa-gift"></i>
                            <div class="content2">
                                <h2>PHASE 2</h2>
                                <p>
                                    Open the public sell<br> Build a community of $FPI fans (in progress)<br> Apply for Coingeco list when reaching 1000 holders<br> Apply for Coinmarketcap list when reaching 1500 holders<br> Certik audit
                                </p>
                            </div>
                        </div>
                        <div class="container2 left2">
                            <div class="date2">Q2-2022</div>
                            <i class="icon fa fa-user"></i>
                            <div class="content2">
                                <h2>PHASE 3</h2>
                                <p>
                                    1M cap, organize internal meetings, extract charity money. build community image $FPI<br> Building a community of buying and selling goods that accept using $FPI<br> Link Attendance challenge using $FPI.<br>
                                </p>
                            </div>
                        </div>
                        <div class="container2 right2">
                            <div class="date2">Q3-2022</div>
                            <i class="icon fa fa-bar-chart"></i>
                            <div class="content2">
                                <h2>PHASE 4</h2>
                                <p>
                                    Open sale NFT FPI<br> Launch of NFT FPI<br> Application platform<br> 10M cap: List MEXC<br> Reach 100,000 holders to make a weekly random reward for the top 1000 holders.
                                </p>
                            </div>
                        </div>
                        <div class="container2 left2">
                            <div class="date2">Q4-2022</div>
                            <i class="icon fa fa-cog"></i>
                            <div class="content2">
                                <h2>PHASE 5</h2>
                                <p>
                                    Link building payment consensus with the worldwide community.<br> Launching its own payment app FPI<br>
                                </p>
                            </div>
                        </div>
                        <div class="container2 right2">
                            <div class="date2">Next<br> year</div>
                            <i class="icon fa fa-certificate"></i>
                            <div class="content2">
                                <h2>PHASE 6</h2>
                                <p>
                                    Building an investment fund FPI<br> Coming soon
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <section id="section-category" class="no-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h2>Frequently Questions</h2>
                        <div class="small-border bg-color-2"></div>
                    </div>
                </div>
                <!-- Thêm câu hỏi + Js poup -->
                <div class="col-md-12 wow fadeIn">
                    <div class="accordion__item">
                        <button class="accordion__btn">

                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>Does joining FPI have money?</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                      </button>

                        <div class="accordion__content">
                            <p>Ecosystem creates FPI value. The community that makes up the FPI development.</p>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__btn">

                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>How to buy FPI?</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                      </button>

                        <div class="accordion__content">
                            <p>You can go to pancake swap or intermediary exchanges like poocoin to buy.</p>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__btn">

                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>Where is the FPI community connection?</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                      </button>

                        <div class="accordion__content">
                            <p>You can go on twitter, or the project's official telegram group
                            </p>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__btn">

                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>Where is the FPI community connection?</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                      </button>

                        <div class="accordion__content">
                            <p>That is when you join the game with everyone, the loser loses all FPI and passes to the winner.</p>
                        </div>
                    </div>

                    <div class="accordion__item">
                        <button class="accordion__btn">

                        <span class="accordion__caption"><i class="far fa-lightbulb"></i>What is a bonus exchange?</span>
                        <span class="accordion__icon"><i class="fa fa-plus"></i></span>
                      </button>

                        <div class="accordion__content">
                            <p>That is when you buy a lottery ticket, you will have a chance to win valuable products.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
