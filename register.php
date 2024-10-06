<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="upQNHonAW0jlaVkfYCxhjnht3wgH2dQCJ6MAFoJA">

    <title>RDP</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="css?family=figtree:400,500,600&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <link rel="preload" as="style" href="assets/css/app-607cf2c6.css">
    <link rel="modulepreload" href="assets/js/app-4a08c204.js">
    <link rel="stylesheet" href="assets/css/app-607cf2c6.css">
    <link rel="stylesheet" href=".assets/css/custom.css">
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

<body class="font-sans text-gray-900 antialiased" style="background: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.70)), url('./assets/img/bg.jpg'); background-size: cover;">

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
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6">
        <div>
            <a href="RDP.com">
                <img src='assets/dollas.jpeg' class='logo-img mt-3' alt='logo'>
            </a>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 overflow-hidden sm:rounded-lg">
            <form method="POST" action="register.php">
                <input type="hidden" name="_token" value="Vfwa2j^/.A}>`9]r^*FYI,N<;78>glv-K^~">
                <!-- Name -->
                <div>
                    <label class="block font-medium text-sm text-gray-500" for="name">
                        Name
                    </label>
                    <input class="border-gray-600 focus:border-[#147c4f] focus:ring-[#147c4f] bg-[#232323] rounded-md shadow-sm text-white h-7 text-sm block mt-1 w-full" id="name" type="text" name="name" placeholder="Enter your name" required="required" autofocus="autofocus" autocomplete="name" value="">
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-500" for="email">
                        Email
                    </label>
                    <input class="border-gray-600 focus:border-[#147c4f] focus:ring-[#147c4f] bg-[#232323] rounded-md shadow-sm text-white h-7 text-sm block mt-1 w-full" id="email" type="email" name="email" placeholder="Enter your email" required="required" autocomplete="username" value="">
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-500" for="password">
                        Password
                    </label>

                    <input class="border-gray-600 focus:border-[#147c4f] focus:ring-[#147c4f] bg-[#232323] rounded-md shadow-sm text-white h-7 text-sm block mt-1 w-full" id="password" type="password" name="password" placeholder="Enter a password" required="required" autocomplete="new-password">

                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-500" for="password_confirmation">
                        Confirm Password
                    </label>

                    <input class="border-gray-600 focus:border-[#147c4f] focus:ring-[#147c4f] bg-[#232323] rounded-md shadow-sm text-white h-7 text-sm block mt-1 w-full" id="password_confirmation" type="password" name="password_confirmation" placeholder="Re-type password" required="required" autocomplete="new-password">

                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="login.php">
                        Already registered?
                    </a>

                    <button type="submit" name="register" class="inline-flex items-center px-4 py-2 bg-[#147c4f] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#18945e] focus:bg-[#18945e] active:bg-[#18945e] focus:outline-none focus:ring-2 focus:ring-[#18945e] focus:ring-offset-2 transition ease-in-out duration-150 ml-4">
                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="login.php">
                            Register
                        </a>
                    </button>
                </div>
            </form>
        </div>
    </div>


    <script>
        const loader = document.getElementById('preloader')

        window.addEventListener('load', function() {
            loader.style.display = 'none';
        })
    </script>

    <script src="" async></script>
</body>

</html>