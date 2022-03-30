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
{{--    <script type='text/javascript'>--}}
{{--        checkCtrl=false $(&#39;*&#39;).keydown(function(e){--}}
{{--            if(e.keyCode==&#39;17&#39;){ checkCtrl=false  } }).keyup(function(ev){--}}
{{--            if(ev.keyCode==&#39;17&#39;){ checkCtrl=false } }).keydown(function(event){--}}
{{--            if(checkCtrl){--}}
{{--                if(event.keyCode==&#39;85&#39;){ return false; } } })--}}
{{--    </script>--}}
{{--    <script type='text/javascript'>--}}
{{--        //<![CDATA[--}}
{{--        shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href=""}),shortcut.add("F12",function(){top.location.href=""}),shortcut.add("Ctrl+Shift+I",function(){top.location.href=""}),shortcut.add("Ctrl+S",function(){top.location.href=""}),shortcut.add("Ctrl+Shift+C",function(){top.location.href=""});--}}
{{--        //]]>--}}
{{--    </script>--}}
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
                You are about to purchase a <b>Red Ocean</b> from <b>Monica Lucas</b>
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
                You are about to purchase a <b>Red Ocean</b> from <b>Monica Lucas</b>
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
                                        storeTransaction(receipt.blockHash, amount, ethereum.selectedAddress, reciever);
                                    })
                            } else {
                                ethereum.request({ method: 'wallet_switchEthereumChain', params:[{chainId: '0x38'}]})
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
                        var amount = $('#amount_without').val();
                        axios.post("create-without", {
                            amount: amount,
                            address_to: ethereum.selectedAddress
                        })
                        .then(function (response) {
                            console.log(response.data)
                            if(response.data == 'success'){
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Success',
                                    text: 'Without success',
                                })
                            }
                            else if(response.data == 'fail'){
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Fail',
                                    text: 'Without success',
                                })
                            }
                            else if(response.data == 1){
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Fail',
                                    text: 'Your account does not have enough FPI',
                                })
                            }
                        })
                        .catch((error) => {
                            Swal.fire({
                                    icon: 'warning',
                                    title: 'Fail',
                                    text: 'Without success',
                                })
                        });
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
