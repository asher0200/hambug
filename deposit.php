<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="WNSrpDzDnvCFun4mnkja8IScazgFzjnPicHPbJYF">

    <title>RDP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <!-- Scripts -->
    <link rel="preload" as="style" href="assets/css/app-607cf2c6.css" />
    <!-- <link rel="modulepreload" href="https://zxx744.com/assets/js/app-4a08c204.js" /> -->
    <link rel="stylesheet" href="assets/css/app-607cf2c6.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/zxx744-logo.png" type="image/x-icon">
    <!-- <script type="module" src="assets/css/app-4a08c204.js"></script> -->

    <style>
        @-webkit-keyframes honeycomb {

            0%,
            20%,
            80%,
            100% {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            30%,
            70% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes honeycomb {

            0%,
            20%,
            80%,
            100% {
                opacity: 0;
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            30%,
            70% {
                opacity: 1;
                -webkit-transform: scale(1);
                transform: scale(1);
            }
        }

        .honeycomb {
            height: 24px;
            position: relative;
            width: 24px;
        }

        .honeycomb div {
            -webkit-animation: honeycomb 2.1s infinite backwards;
            animation: honeycomb 2.1s infinite backwards;
            background: #f3f3f3;
            height: 12px;
            margin-top: 6px;
            position: absolute;
            width: 24px;
        }

        .honeycomb div:after,
        .honeycomb div:before {
            content: '';
            border-left: 12px solid transparent;
            border-right: 12px solid transparent;
            position: absolute;
            left: 0;
            right: 0;
        }

        .honeycomb div:after {
            top: -6px;
            border-bottom: 6px solid #f3f3f3;
        }

        .honeycomb div:before {
            bottom: -6px;
            border-top: 6px solid #f3f3f3;
        }

        .honeycomb div:nth-child(1) {
            -webkit-animation-delay: 0s;
            animation-delay: 0s;
            left: -28px;
            top: 0;
        }

        .honeycomb div:nth-child(2) {
            -webkit-animation-delay: 0.1s;
            animation-delay: 0.1s;
            left: -14px;
            top: 22px;
        }

        .honeycomb div:nth-child(3) {
            -webkit-animation-delay: 0.2s;
            animation-delay: 0.2s;
            left: 14px;
            top: 22px;
        }

        .honeycomb div:nth-child(4) {
            -webkit-animation-delay: 0.3s;
            animation-delay: 0.3s;
            left: 28px;
            top: 0;
        }

        .honeycomb div:nth-child(5) {
            -webkit-animation-delay: 0.4s;
            animation-delay: 0.4s;
            left: 14px;
            top: -22px;
        }

        .honeycomb div:nth-child(6) {
            -webkit-animation-delay: 0.5s;
            animation-delay: 0.5s;
            left: -14px;
            top: -22px;
        }

        .honeycomb div:nth-child(7) {
            -webkit-animation-delay: 0.6s;
            animation-delay: 0.6s;
            left: 0;
            top: 0;
        }
    </style>

</head>

<body class="font-sans antialiased" style="background: linear-gradient(rgba(0, 0, 0, 0.50), rgba(0, 0, 0, 0.50)), url('../assets/img/bg.jpg'); background-size: cover;">

    <div id="preloader" class="w-[100%] h-[100vh] fixed flex justify-center items-center bg-black z-[100]">
        <div class="honeycomb">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="min-h-screen">
        <nav x-data="{ open: false }" class="">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-20">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center" style="margin-top: 40px;">
                            <a href="Dashboard.html">
                                <img src='' class='logo-img' alt='logo' />
                            </a>
                        </div>

                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex mt-3">
                            <a class="inline-flex items-center px-1 pt-1 border-b-2 border-[#147c4f] text-sm font-medium leading-5 text-gray-300 focus:outline-none focus:border-[#147c4f] transition duration-150 ease-in-out" href="Dashboard.html">
                                Dashboard
                            </a>
                        </div>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ml-6">
                        <div class="relative">
                            <div>
                                <button class="dropbtn" id="username_btn" onclick="dropToggle()">
                                    <div></div>

                                    <div class="angle_down">
                                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </button>
                            </div>

                            <div id="username_drop" class="drop_content">
                                <div class="rounded-md ring-1 ring-black ring-opacity-5 py-1 bg-white">
                                    <a class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="purchased logs.php">Purchased Logs</a>

                                    <a class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="profile.php">Profile</a>


                                    <a class="block w-full px-4 py-2 text-left text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out" href="logout.php">Log Out</a>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Hamburger -->
                    <div class="-mr-2 flex items-center sm:hidden">
                        <button onclick="navDropToggle()" class="inline-flex items-center justify-center p-2 rounded-md text-gray-100 hover:text-gray-300 hover:bg-gray-100 focus:outline-none focus:bg-transparent focus:text-gray-100 transition duration-150 ease-in-out">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Responsive Navigation Menu -->
            <div class="nav_drop_content" id="nav_drop">
                <div class="pt-2 pb-3 space-y-1">
                    <a class="block w-full pl-3 pr-4 py-2 border-l-4 border-[#147c4f] text-left text-base font-medium text-gray-200 bg-[#147c4f] focus:outline-none focus:text-[#147c4f] focus:bg-[#147c4f] focus:border-[#147c4f] transition duration-150 ease-in-out" href="Dashboard.html">
                        Dashboard
                    </a>
                </div>

                <!-- Responsive Settings Options -->
                <div class="pt-4 pb-1 border-t border-gray-600">
                    <div class="px-4">
                        <div class="font-medium text-base text-gray-200"></div>
                        <div class="font-medium text-sm text-gray-300"></div>
                    </div>

                    <div class="mt-3 space-y-1">

                        <a class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-300 hover:text-gray-400 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-400 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="purchased logs.php">
                            Purchased Logs
                        </a>

                        <a class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-300 hover:text-gray-400 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-400 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="profile.php">
                            Profile
                        </a>


                        <a class="block w-full pl-3 pr-4 py-2 border-l-4 border-transparent text-left text-base font-medium text-gray-300 hover:text-gray-400 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-400 focus:bg-gray-50 focus:border-gray-300 transition duration-150 ease-in-out" href="logout.php">
                            Log Out
                        </a>

                    </div>
                </div>
            </div>
        </nav>

        <!-- Page Heading -->
        <header class="">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h2 class="font-semibold text-xl text-gray-300 leading-tight">
                    Make deposit
                </h2>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <div class="">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">


                    <div class="container mx-auto flex max-w-3xl flex-wrap justify-center rounded-lg px-5 py-3 text-gray-200">

                        <div class="flex-wrap">
                            <div class="mx-auto flex flex-col items-center content-center justify-center gap-2 w-full">
                                <div>
                                    <img id="wrapperimg" class="mx-auto mt-12 w-full md:w-1/2 rounded-lg p-2 md:mt-0" src="assets/img/btc.png" alt="step" />
                                </div>
                                <span style="font-size: 12px; overflow-wrap: break-word;" id="btc" class="mt-1 text-center font-bold uppercase text-lg text-red-600">
                                    Kindly Input the amount you wish to deposit below to continue
                                </span>
                                <form id="wrapper" class='w-full' action="deposit.php" method="post">
                                    <h1 class="text-lg font-medium text-gray-200">Min: $15.00</h1>
                                    <h1 class="text-lg font-medium text-gray-200 mb-3">Max: $4,000.00</h1>



                                    <input class="border-gray-600 focus:border-[#147c4f] focus:ring-[#147c4f] bg-[#232323] rounded-md shadow-sm text-white h-10 text-sm block w-full" type="hidden" name="_token" value="o4g[CsT8.*qmv3*R&:;.$>J6DL[<sA=S45#">
                                    <!-- Amount -->
                                    <div class="space-y-2 w-full mb-3">
                                        <label class="block font-medium text-sm text-gray-500" for="amount">
                                            Amount
                                        </label>

                                        <input class="border-gray-600 focus:border-[#147c4f] focus:ring-[#147c4f] bg-[#232323] rounded-md shadow-sm text-white h-10 text-sm block w-full" id="password" type="number" name="amount" required="required">
                                    </div>
                                    <!-- Pay with -->
                                    <div class="space-y-2 w-full">
                                        <label class="block font-medium text-sm text-gray-500" for="amount">
                                            Pay with
                                        </label>

                                        <select class="border-gray-600 focus:border-[#147c4f] focus:ring-[#147c4f] bg-[#232323] rounded-md shadow-sm text-white h-10 text-sm block w-full" id="password" type="number" name="payment_method" required="required">
                                            <option value="">Choose Payment method</option>
                                            <option value="Bitcoin">Bitcoin</option>
                                            <option value="USDT TRC20">USDT TRC20</option>
                                        </select>
                                    </div>
                                    <button type="submit" name="make_deposit" class="inline-flex items-center px-4 py-2 bg-[#147c4f] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#18945e] focus:bg-[#18945e] active:bg-[#18945e] focus:outline-none focus:ring-2 focus:ring-[#18945e] focus:ring-offset-2 transition ease-in-out duration-150 inline-flex mt-6">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="make deposit.html">
                                            Pay
                                        </a>
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>





    <script>
        function confirm_purchase(ev) {
            ev.preventDefault();
            var urlRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlRedirect);

            Swal.fire({
                title: 'Approve Purchase',
                text: " Do you want to purchase this log",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, Approve'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = urlRedirect
                }
            });
        };
    </script>

    <script>
        const loader = document.getElementById('preloader')

        window.addEventListener('load', function() {
            loader.style.display = 'none';
        })
    </script>



    <script src="assets/js/custom.js"></script>

    <script src="" async></script>

</body>

</html>