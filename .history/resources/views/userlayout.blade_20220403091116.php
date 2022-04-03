<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Fan Pi Network Token</title>
    <link rel="icon" href="{{ asset('frontend/images/favicon.ico')}}" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Fan Pi Network Token" name="description" />
    <meta content="Fan Pi Network Token, fpi, token, nft, fan pi, pi, blockchain" name="keywords" />
    <meta content="" name="author" />
    <meta name=csrf-token content="{{ csrf_token() }}">
    <!-- CSS Files
    ================================================== -->
    <link id="bootstrap" href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link id="bootstrap-grid" href="{{ asset('frontend/css/bootstrap-grid.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link id="bootstrap-reboot" href="{{ asset('frontend/css/bootstrap-reboot.min.css')}}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('frontend/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/owl.carousel.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/owl.theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/owl.transitions.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/magnific-popup.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/jquery.countdown.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css" />
    <!-- color scheme -->
    <link id="colors" href="{{ asset('frontend/css/colors/scheme-01.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('frontend/css/coloring.css')}}" rel="stylesheet" type="text/css" />
{{--    <SCRIPT TYPE='TEXT/JAVASCRIPT'>--}}
{{--        CHECKCTRL=FALSE $(&#39;*&#39;).KEYDOWN(FUNCTION(E){--}}
{{--            IF(E.KEYCODE==&#39;17&#39;){ CHECKCTRL=FALSE  } }).KEYUP(FUNCTION(EV){--}}
{{--            IF(EV.KEYCODE==&#39;17&#39;){ CHECKCTRL=FALSE } }).KEYDOWN(FUNCTION(EVENT){--}}
{{--            IF(CHECKCTRL){--}}
{{--                IF(EVENT.KEYCODE==&#39;85&#39;){ RETURN FALSE; } } })--}}
{{--    </SCRIPT>--}}
{{--    <SCRIPT TYPE='TEXT/JAVASCRIPT'>--}}
{{--        //<![CDATA[--}}
{{--        SHORTCUT={ALL_SHORTCUTS:{},ADD:FUNCTION(A,B,C){VAR D={TYPE:"KEYDOWN",PROPAGATE:!1,DISABLE_IN_INPUT:!1,TARGET:DOCUMENT,KEYCODE:!1};IF(C)FOR(VAR E IN D)"UNDEFINED"==TYPEOF C[E]&&(C[E]=D[E]);ELSE C=D;D=C.TARGET,"STRING"==TYPEOF C.TARGET&&(D=DOCUMENT.GETELEMENTBYID(C.TARGET)),A=A.TOLOWERCASE(),E=FUNCTION(D){D=D||WINDOW.EVENT;IF(C.DISABLE_IN_INPUT){VAR E;D.TARGET?E=D.TARGET:D.SRCELEMENT&&(E=D.SRCELEMENT),3==E.NODETYPE&&(E=E.PARENTNODE);IF("INPUT"==E.TAGNAME||"TEXTAREA"==E.TAGNAME)RETURN}D.KEYCODE?CODE=D.KEYCODE:D.WHICH&&(CODE=D.WHICH),E=STRING.FROMCHARCODE(CODE).TOLOWERCASE(),188==CODE&&(E=","),190==CODE&&(E=".");VAR F=A.SPLIT("+"),G=0,H={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},I={ESC:27,ESCAPE:27,TAB:9,SPACE:32,"RETURN":13,ENTER:13,BACKSPACE:8,SCROLLLOCK:145,SCROLL_LOCK:145,SCROLL:145,CAPSLOCK:20,CAPS_LOCK:20,CAPS:20,NUMLOCK:144,NUM_LOCK:144,NUM:144,PAUSE:19,"BREAK":19,INSERT:45,HOME:36,"DELETE":46,END:35,PAGEUP:33,PAGE_UP:33,PU:33,PAGEDOWN:34,PAGE_DOWN:34,PD:34,LEFT:37,UP:38,RIGHT:39,DOWN:40,F1:112,F2:113,F3:114,F4:115,F5:116,F6:117,F7:118,F8:119,F9:120,F10:121,F11:122,F12:123},J=!1,L=!1,M=!1,N=!1,O=!1,P=!1,Q=!1,R=!1;D.CTRLKEY&&(N=!0),D.SHIFTKEY&&(L=!0),D.ALTKEY&&(P=!0),D.METAKEY&&(R=!0);FOR(VAR S=0;K=F[S],S<F.LENGTH;S++)"CTRL"==K||"CONTROL"==K?(G++,M=!0):"SHIFT"==K?(G++,J=!0):"ALT"==K?(G++,O=!0):"META"==K?(G++,Q=!0):1<K.LENGTH?I[K]==CODE&&G++:C.KEYCODE?C.KEYCODE==CODE&&G++:E==K?G++:H[E]&&D.SHIFTKEY&&(E=H[E],E==K&&G++);IF(G==F.LENGTH&&N==M&&L==J&&P==O&&R==Q&&(B(D),!C.PROPAGATE))RETURN D.CANCELBUBBLE=!0,D.RETURNVALUE=!1,D.STOPPROPAGATION&&(D.STOPPROPAGATION(),D.PREVENTDEFAULT()),!1},THIS.ALL_SHORTCUTS[A]={CALLBACK:E,TARGET:D,EVENT:C.TYPE},D.ADDEVENTLISTENER?D.ADDEVENTLISTENER(C.TYPE,E,!1):D.ATTACHEVENT?D.ATTACHEVENT("ON"+C.TYPE,E):D["ON"+C.TYPE]=E},REMOVE:FUNCTION(A){VAR A=A.TOLOWERCASE(),B=THIS.ALL_SHORTCUTS[A];DELETE THIS.ALL_SHORTCUTS[A];IF(B){VAR A=B.EVENT,C=B.TARGET,B=B.CALLBACK;C.DETACHEVENT?C.DETACHEVENT("ON"+A,B):C.REMOVEEVENTLISTENER?C.REMOVEEVENTLISTENER(A,B,!1):C["ON"+A]=!1}}},SHORTCUT.ADD("CTRL+U",FUNCTION(){TOP.LOCATION.HREF=""}),SHORTCUT.ADD("F12",FUNCTION(){TOP.LOCATION.HREF=""}),SHORTCUT.ADD("CTRL+SHIFT+I",FUNCTION(){TOP.LOCATION.HREF=""}),SHORTCUT.ADD("CTRL+S",FUNCTION(){TOP.LOCATION.HREF=""}),SHORTCUT.ADD("CTRL+SHIFT+C",FUNCTION(){TOP.LOCATION.HREF=""});--}}
{{--        //]]>--}}
{{--    </SCRIPT>--}}
</head>
<input type="hidden" id="wallet_address">
<body>
    <div id="wrapper">
        @yield('content')
        <!-- content close -->

        <a href="#" id="back-to-top"></a>

        <!-- footer begin -->
        <footer class="footer-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Marketplace</h5>
                            <ul>
                                <li><a href="#">All NFTs</a></li>
                                <li><a href="#">Art</a></li>
                                <li><a href="#">Music</a></li>
                                <li><a href="#">Domain Names</a></li>
                                <li><a href="#">Virtual World</a></li>
                                <li><a href="#">Collectibles</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Resources</h5>
                            <ul>
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Suggestions</a></li>
                                <li><a href="#">Discord</a></li>
                                <li><a href="https://drive.google.com/file/d/1FFBpfCfUvNIh7ONvXGLCWOO8IpLqaHTX/view">White Paper</a></li>
                                <li><a href="#">Newsletter</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Community</h5>
                            <ul>
                                <li><a href="#">Community</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Mailing Project:</a></li>
                                <li><a href="#">sale@fanpinetwork.vip</a></li>
                                <li><a href="#">marketing@fanpinetwork.vip</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-1">
                        <div class="widget">
                            <h5>Newsletter</h5>
                            <p>Signup for our newsletter to get the latest news in your inbox.</p>
                            <form action="blank.php" class="row form-dark" id="form_subscribe" method="post" name="form_subscribe">
                                <div class="col text-center">
                                    <input class="form-control" id="txt_subscribe" name="txt_subscribe" placeholder="enter your email" type="text" /> <a href="#" id="btn-subscribe"><i class="arrow_right bg-color-secondary"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                            <div class="spacer-10"></div>
                            <small>Your email is safe with us. We don't spam.</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="de-flex">
                                <div class="de-flex-col">
                                    <a href="index.html">
                                        <img alt="" class="f-logo" src="{{ asset('frontend/images/logo.png')}}" /><span class="copy">&copy; 2022-Fan Pi Network Token</span>
                                    </a>
                                </div>
                                <div class="de-flex-col">
                                    <div class="social-icons">
                                        <a href="https://www.facebook.com/fanpivietnam/"><i class="fa fa-facebook fa-lg"></i></a>
                                        <a href="https://twitter.com/FanPiNetworkFPI"><i class="fa fa-twitter fa-lg"></i></a>
                                        <a href="https://t.me/fanpinetwork"><i class="fa fa-telegram fa-lg"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>
    <div class="modal fade" id="payoutmodel" tabindex="-1" aria-labelledby="payout" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered de-modal">
          <div class="modal-content">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="modal-body">
            <div class="p-3 form-border">
                <h3>Without</h3>
                It will cost you an extra 1% to make the without
                <div class="spacer-single"></div>
                <h6>Enter quantity amount</h6>
                <input type="number" name="amount" id="amount_without" class="form-control" value="1" />
                <div class="spacer-single"></div>
                <div class="spacer-single"></div>
                <button id="withoutEthButton" class="btn-main btn-fullwidth">Without</button>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="modal fade" id="rechargemodel" tabindex="-1" aria-labelledby="recharge" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered de-modal">
        <div class="modal-content">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="modal-body">
            <div class="p-3 form-border">
                <h3>Deposit</h3>
                You are about to purchase a <b>FPI</b> from <b>0x8A751ab17A5E81acf3CcBE2a695f84bF55A3523A</b>
                <div class="spacer-single"></div>
                <h6>Enter quantity amount</h6>
                <input type="number" name="amount" id="inp_amount" class="form-control" value="1" />
                <div class="spacer-single"></div>
                <div class="spacer-single"></div>
                <button id="sendEthButton" class="btn-main btn-fullwidth">Deposit</button>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- Javascript Files
    ================================================== -->
    <script src="{{ asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('frontend/js/wow.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.isotope.min.js')}}"></script>
    <script src="{{ asset('frontend/js/easing.js')}}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('frontend/js/enquire.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.plugin.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.countTo.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.countdown.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.lazy.min.js')}}"></script>
    <script src="{{ asset('frontend/js/jquery.lazy.plugins.min.js')}}"></script>
    <script src="{{ asset('frontend/js/designesia.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- COOKIES NOTICE  -->
    <script src="{{ asset('frontend/js/cookit.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/gh/ethereum/web3.js@1.0.0-beta.36/dist/web3.min.js"></script>
    <script type="text/javascript">
        load_setting();
        function load_setting() {
            axios.get('fetchdata-wallet')
            .then(function (response) {
                $('#wallet_address').val(response.data.wallet_address);
            })
            .catch((error) => {
                console.log(error);
            });
        }
        var abi = JSON.parse('[{"inputs":[],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"owner","type":"address"},{"indexed":true,"internalType":"address","name":"spender","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Approval","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"uint256","name":"minTokensBeforeSwap","type":"uint256"}],"name":"MinTokensBeforeSwapUpdated","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"uint256","name":"tokensSwapped","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"ethReceived","type":"uint256"},{"indexed":false,"internalType":"uint256","name":"tokensIntoLiqudity","type":"uint256"}],"name":"SwapAndLiquify","type":"event"},{"anonymous":false,"inputs":[{"indexed":false,"internalType":"bool","name":"enabled","type":"bool"}],"name":"SwapAndLiquifyEnabledUpdated","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"inputs":[],"name":"Launch","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"_burnFee","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"_devFee","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"_liquidityFee","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"_maxTxAmount","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"_taxFee","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"owner","type":"address"},{"internalType":"address","name":"spender","type":"address"}],"name":"allowance","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"approve","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"burnAddress","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"decimals","outputs":[{"internalType":"uint8","name":"","type":"uint8"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"subtractedValue","type":"uint256"}],"name":"decreaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"devAddress","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"excludeFromFee","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"geUnlockTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"husdtToken","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"includeInFee","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"spender","type":"address"},{"internalType":"uint256","name":"addedValue","type":"uint256"}],"name":"increaseAllowance","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"account","type":"address"}],"name":"isExcludedFromFee","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"isLaunch","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"time","type":"uint256"}],"name":"lock","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"name","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"ownerAddres","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"tAmount","type":"uint256"},{"internalType":"bool","name":"deductTransferFee","type":"bool"}],"name":"reflectionFromToken","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"removeMaxtxAmount","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"renounceOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"burnFee","type":"uint256"}],"name":"setBurnFeePercent","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"devFee","type":"uint256"}],"name":"setDevFeePercent","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"liquidityFee","type":"uint256"}],"name":"setLiquidityFeePercent","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"maxTxPercent","type":"uint256"}],"name":"setMaxTxPercent","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"bool","name":"_enabled","type":"bool"}],"name":"setSwapAndLiquifyEnabled","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"bool","name":"_enabled","type":"bool"}],"name":"setSwapDevEnabled","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"uint256","name":"taxFee","type":"uint256"}],"name":"setTaxFeePercent","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"swapAndLiquifyEnabled","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"swapDevEnabled","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"symbol","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"uint256","name":"rAmount","type":"uint256"}],"name":"tokenFromReflection","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalFees","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"sender","type":"address"},{"internalType":"address","name":"recipient","type":"address"},{"internalType":"uint256","name":"amount","type":"uint256"}],"name":"transferFrom","outputs":[{"internalType":"bool","name":"","type":"bool"}],"stateMutability":"nonpayable","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"},{"inputs":[],"name":"uniswapV2Pair","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"uniswapV2Router","outputs":[{"internalType":"contract IPancakeRouter02","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"unlock","outputs":[],"stateMutability":"nonpayable","type":"function"},{"stateMutability":"payable","type":"receive"}]');
        const contractAddress = '0x8a751ab17a5e81acf3ccbe2a695f84bf55a3523a';
        const sendEthButton = document.querySelector('#sendEthButton');
        sendEthButton.addEventListener('click', () => {
            (async ()=>{
                if (typeof window.ethereum !== 'undefined') {
                    try{
                        ethereum.request({ method: 'eth_requestAccounts' });
                        let web3;
                        if(window.ethereum){
                            web3 = new Web3(window.ethereum);
                            await ethereum.enable();
                            if(window.ethereum.chainId == '0x38'){
                                var amount = $('#inp_amount').val();
                                const contract = new web3.eth.Contract(abi, contractAddress);
                                const reciever =  $('#wallet_address').val();
                                await contract.methods.transfer(reciever, '0x' + ((amount * 1000000000000000000).toString(16)))
                                    .send({from:ethereum.selectedAddress})
                                    .on('receipt',(receipt)=>{
                                        console.log(receipt)
                                        storeTransaction(receipt.blockHash, amount, ethereum.selectedAddress, reciever);
                                    })
                            } else {
                                ethereum.request({ method: 'wallet_switchEthereumChain', params:[{chainId: '0x38'}]})
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Warning',
                                    text: 'Please connect with BCS network in Metamask Wallet',
                                })
                            }
                        }
                    }
                    catch (e) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Warning',
                            text: 'Please check Metamask wallet',
                        })
                    }
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Warning',
                        text: 'Not able to locate an Ethereum connection, please install a Metamask wallet',
                    })
                }
            })()
        });
        const withoutEthButton = document.querySelector('#withoutEthButton');
        withoutEthButton.addEventListener('click', () => {
            (async ()=>{
                if (typeof window.ethereum !== 'undefined') {
                    try {
                        ethereum.request({ method: 'eth_requestAccounts' });
                        let web3;
                        if(window.ethereum){
                            web3 = new Web3(window.ethereum);
                            await ethereum.enable();
                            if(window.ethereum.chainId == '0x38'){
                                var amount = $('#amount_without').val();
                                var fee = amount/100 * 1;
                                axios.post("create-without", {
                                    amount: amount,
                                    fee: fee,
                                    address_to: ethereum.selectedAddress
                                })
                                .then(function (response) {
                                    switch(response.data) {
                                        case 2:
                                            Swal.fire({
                                                icon: 'success',
                                                title: 'Success',
                                                text: 'Without success, please wait minutes',
                                            })
                                            break;
                                        case 3:
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Fail',
                                                text: 'Without fail',
                                            })
                                            break;
                                        case 1:
                                            Swal.fire({
                                                icon: 'warning',
                                                title: 'Fail',
                                                text: 'Your account does not have enough FPI',
                                            })
                                            break;
                                    }
                                })
                                .catch((error) => {
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Fail',
                                        text: 'Without fail',
                                    })
                                });
                            } else {
                                ethereum.request({ method: 'wallet_switchEthereumChain', params:[{chainId: '0x38'}]})
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Warning',
                                    text: 'Please connect with BCS network in Metamask Wallet',
                                })
                                Swal.fire({
                                title: "Warning",
                                text: "Your account does not have enough money. Do you want to deposit?",
                                icon: "Warning",
                                showCancelButton: true,
                                confirmButtonText:
                                    '<span data-bs-toggle="modal" data-bs-target="#rechargemodel">Ok!</span>',
                                cancelButtonText: "No"
                            })
                            }
                        }
                    } catch (Exception) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Warning',
                            text: 'Please check Metamask wallet',
                        })
                    }
                } else {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Warning',
                        text: 'Not able to locate an Ethereum connection, please install a Metamask wallet',
                    })
                }
            })()
        });
        function storeTransaction(txHash, amount, tran_from, tran_to){
            axios.post("create-recharge", {
                txHash: txHash,
                amount: amount,
                from: tran_from,
                to: tran_to
            })
            .then(function (response) {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'Payment success',
                })
            })
            .catch((error) => {
                console.log(error);
            });
        }
        load_noti();
        function load_noti(){
            axios.get("load-noti")
            .then(function (response) {
                $("#load_noti").html(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
        }
        $(document).on('click', '#logout', function(e) {
            event.preventDefault()
            axios.get("logout")
            .then(function (response) {
                location.reload();
            })
            .catch((error) => {
                console.log(error);
            });
        })
        $(document).on('click', '#logout', function(e) {
            event.preventDefault()
            axios.get("logout")
            .then(function (response) {
                location.reload();
            })
            .catch((error) => {
                console.log(error);
            });
        })
    </script>
    <!-- FAQ JS -->
    <script>
        // select all accordion items
        const accItems = document.querySelectorAll(".accordion__item");

        // add a click event for all items
        accItems.forEach((acc) => acc.addEventListener("click", toggleAcc));

        function toggleAcc() {
        // remove active class from all items exept the current item (this)
        accItems.forEach((item) => item != this ? item.classList.remove("accordion__item--active") : null
        );

        // toggle active class on current item
        if (this.classList != "accordion__item--active") {
            this.classList.toggle("accordion__item--active");
        }
        }
    </script>

    <script>
        $(document).ready(function() {
        $.cookit({
          backgroundColor: '#101010',
          messageColor: '#fff',
          linkColor: '#FEF006',
          buttonColor: '#FEF006',
          messageText: "This website uses cookies to ensure you get the best experience on our website.",
          linkText: "Learn more",
          linkUrl: "index.html",
          buttonText: "I accept",
        });
      });
    </script>

</body>

</html>
