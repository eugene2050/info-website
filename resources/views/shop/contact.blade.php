<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">


<head>
    <meta charset="UTF-8">
    <title>Techwind - Tailwind CSS Multipurpose Landing Page Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template">
    <meta name="keywords"
        content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
    <meta name="author" content="Shreethemes">
    <meta name="website" content="https://shreethemes.in/">
    <meta name="email" content="support@shreethemes.in">
    <meta name="version" content="1.9.5">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Css -->
    <link href="{{ asset('assets/libs/tobii/css/tobii.min.css') }}" rel="stylesheet">
    <!-- Main Css -->
    <link href="{{ asset('assets/libs/%40iconscout/unicons/css/line.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet"
        type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.min.css') }}">

</head>

<body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">
    <!-- Loader Start -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader End -->


    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky">
        <div class="container relative">
            <!-- Logo container-->
            <a class="logo" href="index-2.html">
                <span class="inline-block dark:hidden">
                    <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                    <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                </span>
                <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
            </a>

            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>

            <!--Login button Start-->
            {{-- <ul class="buy-button list-none mb-0">
                <li class="inline mb-0">
                    <a href="#">
                        <span class="login-btn-primary"><span
                                class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white"><i
                                    data-feather="settings" class="h-4 w-4"></i></span></span>
                        <span class="login-btn-light"><span
                                class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 border hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                    data-feather="settings" class="h-4 w-4"></i></span></span>
                    </a>
                </li>

                <li class="inline ps-1 mb-0">
                    <a href="https://1.envato.market/techwind" target="_blank">
                        <div class="login-btn-primary"><span
                                class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"><i
                                    data-feather="shopping-cart" class="h-4 w-4"></i></span></div>
                        <div class="login-btn-light"><span
                                class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-gray-50 hover:bg-gray-200 dark:bg-slate-900 dark:hover:bg-gray-700 border hover:border-gray-100 dark:border-gray-700 dark:hover:border-gray-700"><i
                                    data-feather="shopping-cart" class="h-4 w-4"></i></span></div>
                    </a>
                </li>
            </ul> --}}
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-light">
                    <li><a href="{{ route('home') }}" class="sub-menu-item">Home</a></li>

                    <li><a href="{{ route('about') }}" class="sub-menu-item">About Us</a></li>


                    <li><a href="{{ route('products') }}" class="sub-menu-item">Products</a></li>

                    <li><a href="{{ route('contact') }}" class="sub-menu-item">Contact</a></li>
                </ul>
                <!--end navigation menu-->
            </div>
            <!--end navigation-->
        </div>
        <!--end container-->
    </nav>
    <!--end header-->
    <!-- End Navbar -->

    <!-- Start Hero -->
    <section
        class="relative table w-full py-36 bg-[url('../../assets/images/company/aboutus.html')] bg-center bg-no-repeat bg-cover">
        <div class="absolute inset-0 bg-black opacity-75"></div>
        <div class="container relative">
            <div class="grid grid-cols-1 pb-8 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal tracking-wide leading-normal font-medium text-white">
                    Contact Us</h3>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="absolute text-center z-10 bottom-5 start-0 end-0 mx-3">
            <ul class="tracking-[0.5px] mb-0 inline-block">
                <li
                    class="inline uppercase text-[13px] font-bold duration-500 ease-in-out text-white/50 hover:text-white">
                    <a href="index-2.html">Techwind</a></li>
                <li class="inline text-base text-white/50 mx-0.5"><i class="uil uil-angle-right-b"></i></li>
                <li class="inline uppercase text-[13px] font-bold duration-500 ease-in-out text-white"
                    aria-current="page">Contact Us</li>
            </ul>
        </div>
    </section>
    <!--end section-->
    <div class="relative">
        <div
            class="shape absolute sm:-bottom-px -bottom-[2px] start-0 end-0 overflow-hidden z-1 text-white dark:text-slate-900">
            <svg class="w-full h-auto scale-[2.0] origin-top" viewBox="0 0 2880 48" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <!-- Start Section-->
    <section class="relative md:py-24 py-16">
        <div class="container relative">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-phone"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Phone</h5>
                        <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and
                            benefit</p>

                        <div class="mt-5">
                            <a href="tel:+152534-468-854"
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">+152
                                534-468-854</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-envelope"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Email</h5>
                        <p class="text-slate-400 mt-3">The phrasal sequence of the is now so that many campaign and
                            benefit</p>

                        <div class="mt-5">
                            <a href="mailto:contact@example.com"
                                class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">contact@example.com</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6 mt-6">
                    <div
                        class="w-20 h-20 bg-indigo-600/5 text-indigo-600 rounded-xl text-3xl flex align-middle justify-center items-center shadow-sm dark:shadow-gray-800 mx-auto">
                        <i class="uil uil-map-marker"></i>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Location</h5>
                        <p class="text-slate-400 mt-3">C/54 Northwest Freeway, Suite 558, <br> Houston, USA 485</p>

                        <div class="mt-5">
                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                                data-type="iframe"
                                class="video-play-icon read-more lightbox relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View
                                on Google map</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-7 md:col-span-6">
                    <img src="assets/images/contact.svg" alt="">
                </div>

                <div class="lg:col-span-5 md:col-span-6">
                    <div class="lg:ms-5">
                        <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-800 p-6">
                            <h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch !</h3>

                            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-start">
                                            <label for="name" class="font-semibold">Your Name:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input name="name" id="name" type="text"
                                                    class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                    placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-start">
                                            <label for="email" class="font-semibold">Your Email:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input name="email" id="email" type="email"
                                                    class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                    placeholder="Email :">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <div class="text-start">
                                            <label for="subject" class="font-semibold">Your Question:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="book" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input name="subject" id="subject"
                                                    class="form-input ps-11 w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                    placeholder="Subject :">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <div class="text-start">
                                            <label for="comments" class="font-semibold">Your Comment:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="message-circle"
                                                    class="w-4 h-4 absolute top-3 start-4"></i>
                                                <textarea name="comments" id="comments"
                                                    class="form-input ps-11 w-full py-2 px-3 h-28 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0"
                                                    placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send"
                                    class="py-2 px-5 font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md justify-center flex items-center">Send
                                    Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Section-->

    <div class="container-fluid relative">
        <div class="grid grid-cols-1">
            <div class="w-full leading-[0] border-0">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                    style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
            </div>
        </div>
        <!--end grid-->
    </div>
    <!--end container-->

    <!-- Footer Start -->
    <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
        <div class="container relative">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="py-[60px] px-0">
                        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                            <div class="lg:col-span-4 md:col-span-12">
                                <a href="#" class="text-[22px] focus:outline-none">
                                    <img src="assets/images/logo-light.png" alt="">
                                </a>
                                <p class="mt-6 text-gray-300">Start working with Tailwind CSS that can provide
                                    everything you need to generate awareness, drive traffic, connect.</p>
                                <ul class="list-none mt-6">
                                    <li class="inline"><a href="https://1.envato.market/techwind" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a>
                                    </li>
                                    <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                    <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-behance" title="Behance"></i></a></li>
                                    <li class="inline"><a href="http://linkedin.com/company/shreethemes"
                                            target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                    <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                    <li class="inline"><a href="https://www.instagram.com/shreethemes/"
                                            target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                    <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                    <li class="inline"><a href="mailto:support@shreethemes.in"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-envelope align-middle" title="email"></i></a></li>
                                    <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border border-gray-800 rounded-md hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-file align-middle" title="customization"></i></a></li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->

                            <div class="lg:col-span-2 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                                <ul class="list-none footer-list mt-6">
                                    <li><a href="page-aboutus.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> About us</a></li>
                                    <li class="mt-[10px]"><a href="page-services.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Services</a></li>
                                    <li class="mt-[10px]"><a href="page-team.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Team</a></li>
                                    <li class="mt-[10px]"><a href="page-pricing.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Pricing</a></li>
                                    <li class="mt-[10px]"><a href="portfolio-creative-four.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Project</a></li>
                                    <li class="mt-[10px]"><a href="blog.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Blog</a></li>
                                    <li class="mt-[10px]"><a href="auth-login.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Login</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="lg:col-span-3 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                                <ul class="list-none footer-list mt-6">
                                    <li><a href="page-terms.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Terms of Services</a></li>
                                    <li class="mt-[10px]"><a href="page-privacy.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Privacy Policy</a></li>
                                    <li class="mt-[10px]"><a href="documentation.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Documentation</a></li>
                                    <li class="mt-[10px]"><a href="changelog.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Changelog</a></li>
                                    <li class="mt-[10px]"><a href="widget.html"
                                            class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                class="uil uil-angle-right-b"></i> Widget</a></li>
                                </ul>
                            </div>
                            <!--end col-->

                            <div class="lg:col-span-3 md:col-span-4">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                                <p class="mt-6">Sign up and receive the latest tips via email.</p>
                                <form>
                                    <div class="grid grid-cols-1">
                                        <div class="my-3">
                                            <label class="form-label">Write your email <span
                                                    class="text-red-600">*</span></label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                <input type="email"
                                                    class="form-input ps-12 rounded w-full py-2 px-3 h-10 bg-gray-800 border-0 text-gray-100 focus:shadow-none focus:ring-0 placeholder:text-gray-200"
                                                    placeholder="Email" name="email" required="">
                                            </div>
                                        </div>

                                        <button type="submit" id="submitsubscribe" name="send"
                                            class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end grid-->
                    </div>
                    <!--end col-->
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="py-[30px] px-0 border-t border-slate-800">
            <div class="container relative text-center">
                <div class="grid md:grid-cols-2 items-center">
                    <div class="md:text-start text-center">
                        <p class="mb-0">©
                            <script>
                                document.write(new Date().getFullYear())
                            </script> Techwind. Design with <i class="mdi mdi-heart text-red-600"></i>
                            by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.
                        </p>
                    </div>

                    <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                        <li class="inline"><a href="#"><img src="assets/images/payments/american-ex.png"
                                    class="max-h-6 inline" title="American Express" alt=""></a></li>
                        <li class="inline"><a href="#"><img src="assets/images/payments/discover.png"
                                    class="max-h-6 inline" title="Discover" alt=""></a></li>
                        <li class="inline"><a href="#"><img src="assets/images/payments/master-card.png"
                                    class="max-h-6 inline" title="Master Card" alt=""></a></li>
                        <li class="inline"><a href="#"><img src="assets/images/payments/paypal.png"
                                    class="max-h-6 inline" title="Paypal" alt=""></a></li>
                        <li class="inline"><a href="#"><img src="assets/images/payments/visa.png"
                                    class="max-h-6 inline" title="Visa" alt=""></a></li>
                    </ul>
                </div>
                <!--end grid-->
            </div>
            <!--end container-->
        </div>
    </footer>
    <!--end footer-->
    <!-- Footer End -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->

    <!-- Switcher -->
    <div class="fixed top-[30%] -right-2 z-50">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
            <label
                class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                <span
                    class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
            </label>
        </span>
    </div>
    <!-- Switcher -->

    <!-- LTR & RTL Mode Code -->
    <div class="fixed top-[40%] -right-3 z-50">
        <a href="#" id="switchRtl">
            <span
                class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-bold rtl:block ltr:hidden">LTR</span>
            <span
                class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-bold ltr:block rtl:hidden">RTL</span>
        </a>
    </div>
    <!-- LTR & RTL Mode Code -->

    <!-- JAVASCRIPTS -->
    <script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- JAVASCRIPTS -->
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            // Theme toggle
            if (localStorage.getItem('theme') === 'dark') {
                document.documentElement.classList.add('dark');
                document.getElementById('chk').checked = true;
            } else {
                document.documentElement.classList.remove('dark');
            }
    
            // Direction toggle
            if (localStorage.getItem('direction') === 'rtl') {
                document.documentElement.setAttribute('dir', 'rtl');
                document.getElementById('directionText').textContent = 'RTL';
            } else {
                document.documentElement.setAttribute('dir', 'ltr');
                document.getElementById('directionText').textContent = 'LTR';
            }
        });
    
        document.getElementById('chk').addEventListener('change', function(event) {
            if (this.checked) {
                localStorage.setItem('theme', 'dark');
                document.documentElement.classList.add('dark');
            } else {
                localStorage.setItem('theme', 'light');
                document.documentElement.classList.remove('dark');
            }
        });
    
        document.getElementById('switchRtl').addEventListener('click', function(event) {
            event.preventDefault();
            if (document.documentElement.getAttribute('dir') === 'ltr') {
                localStorage.setItem('direction', 'rtl');
                document.documentElement.setAttribute('dir', 'rtl');
                document.getElementById('directionText').textContent = 'RTL';
            } else {
                localStorage.setItem('direction', 'ltr');
                document.documentElement.setAttribute('dir', 'ltr');
                document.getElementById('directionText').textContent = 'LTR';
            }
        });
    </script>
    
    
</body>


</html>
