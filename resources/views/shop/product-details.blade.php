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
    <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css') }}" rel="stylesheet">
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
    <nav id="topnav" class="defaultscroll is-sticky bg-white dark:bg-slate-900">
        <div class="container relative">
            <!-- Logo container-->
            <a class="logo" href="{{ route('home') }}">
                <img src="{{ asset('assets/images/logo-dark.png') }}" class="inline-block dark:hidden" alt="">
                <img src="{{ asset('assets/images/logo-light.png') }}" class="hidden dark:inline-block" alt="">
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
                <li class="dropdown inline-block relative me-1">
                    <button data-dropdown-toggle="dropdown" class="dropdown-toggle text-[20px]" type="button">
                        <i class="uil uil-search align-middle"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute overflow-hidden end-0 m-0 mt-4 z-10 w-52 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden"
                        onclick="event.stopPropagation();">
                        <div class="relative">
                            <i class="uil uil-search text-lg absolute top-[3px] end-3"></i>
                            <input type="text" class="form-input h-9 pe-10 sm:w-44 w-36 border-0 focus:ring-0"
                                name="s" id="searchItem" placeholder="Search...">
                        </div>
                    </div>
                </li>

                <li class="dropdown inline-block relative">
                    <button data-dropdown-toggle="dropdown"
                        class="dropdown-toggle h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"
                        type="button">
                        <i class="mdi mdi-cart"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-60 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden"
                        onclick="event.stopPropagation();">
                        <ul class="py-3 text-start" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                    <span class="flex items-center">
                                        <img src="{{ asset('assets/images/shop/items/s1.png') }}"
                                            class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                        <span class="ms-3">
                                            <span class="block font-semibold">T-shirt (M)</span>
                                            <span class="block text-sm text-slate-400">$320 X 2</span>
                                        </span>
                                    </span>

                                    <span class="font-semibold">$640</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                    <span class="flex items-center">
                                        <img src="{{ asset('assets/images/shop/items/s2.png') }}"
                                            class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                        <span class="ms-3">
                                            <span class="block font-semibold">Bag</span>
                                            <span class="block text-sm text-slate-400">$50 X 5</span>
                                        </span>
                                    </span>

                                    <span class="font-semibold">$250</span>
                                </a>
                            </li>


                            <li>
                                <a href="#" class="flex items-center justify-between py-1.5 px-4">
                                    <span class="flex items-center">
                                        <img src="{{ asset('assets/images/shop/items/s3.png') }}"
                                            class="rounded shadow dark:shadow-gray-800 w-9" alt="">
                                        <span class="ms-3">
                                            <span class="block font-semibold">Watch (Men)</span>
                                            <span class="block text-sm text-slate-400">$800 X 1</span>
                                        </span>
                                    </span>

                                    <span class="font-semibold">$800</span>
                                </a>
                            </li>

                            <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>

                            <li class="flex items-center justify-between py-1.5 px-4">
                                <h6 class="font-semibold mb-0">Total($):</h6>
                                <h6 class="font-semibold mb-0">$1690</h6>
                            </li>

                            <li class="py-1.5 px-4">
                                <a href="javascript:void(0)"
                                    class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle transition duration-500 ease-in-out text-sm text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white">View
                                    Cart</a>
                                <a href="javascript:void(0)"
                                    class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle transition duration-500 ease-in-out text-sm text-center rounded-md bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white">Checkout</a>
                                <p class="text-sm text-slate-400 mt-1">*T&C Apply</p>
                            </li>

                        </ul>
                    </div>
                </li>

                <li class="inline-block">
                    <a href="javascript:void(0)"
                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"
                        data-modal-toggle="ContactUs">
                        <i class="mdi mdi-heart"></i>
                    </a>
                </li>

                <li class="dropdown inline-block relative">
                    <button data-dropdown-toggle="dropdown"
                        class="dropdown-toggle h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border border-indigo-600 hover:border-indigo-700 text-white"
                        type="button">
                        <i class="mdi mdi-account"></i>
                    </button>
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hidden"
                        onclick="event.stopPropagation();">
                        <ul class="py-2 text-start" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="shop-account.html" class="block py-1.5 px-4 hover:text-indigo-600"><i
                                        class="uil uil-user align-middle me-1"></i> Account</a>
                            </li>
                            <li>
                                <a href="shop-cart.html" class="block py-1.5 px-4 hover:text-indigo-600"><i
                                        class="uil uil-clipboard-notes align-middle me-1"></i> Order History</a>
                            </li>
                            <li>
                                <a href="shop-checkout.html" class="block py-1.5 px-4 hover:text-indigo-600"><i
                                        class="uil uil-arrow-circle-down align-middle me-1"></i> Download</a>
                            </li>
                            <li class="border-t border-gray-100 dark:border-gray-800 my-2"></li>
                            <li>
                                <a href="auth-login.html" class="block py-1.5 px-4 hover:text-indigo-600"><i
                                        class="uil uil-sign-out-alt align-middle me-1"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul> --}}
            <!--Login button End-->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu">
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



    <!-- Start Modal -->
    <div id="ContactUs" tabindex="-1" class="fixed z-50 hidden overflow-hidden inset-0 m-auto">
        <div class="relative w-full h-auto max-w-lg p-4">
            <div class="relative bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-800">
                <button type="button"
                    class="absolute -top-4 -end-4 text-gray-400 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hover:text-gray-900 rounded-full text-sm p-1.5 ms-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="ContactUs">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="p-6 py-10 text-center">

                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-red-600/5 mx-auto"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-red-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-heart-break"></i>
                        </div>
                    </div>

                    <h4 class="text-xl font-semibold mt-6">Your wishlist is empty.</h4>
                    <p class="text-slate-400 my-3">Create your first wishlist request...</p>

                    <a href="#"
                        class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle transition duration-500 ease-in-out text-sm text-center bg-transparent hover:bg-indigo-600 border border-indigo-600 text-indigo-600 hover:text-white rounded-md mt-2">Create
                        a new wishlist</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <!-- Start Hero -->
    <section class="relative table w-full py-20 lg:py-24 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1 mt-14">
                <h3 class="text-3xl leading-normal font-semibold">Product / Item Detail</h3>
            </div>
            <!--end grid-->

            <div class="relative mt-3">
                <ul class="tracking-[0.5px] mb-0 inline-block">
                    <li class="inline uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600">
                        <a href="index-shop.html">Techwind</a>
                    </li>
                    <li class="inline text-base text-slate-950 dark:text-white mx-0.5"><i
                            class="uil uil-angle-right-b"></i></li>
                    <li class="inline uppercase text-[13px] font-bold text-indigo-600" aria-current="page">Item Detail
                    </li>
                </ul>
            </div>
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] items-center">
                <div class="lg:col-span-5 md:col-span-6">
                    <div class="tiny-single-item">
                        <div class="tiny-slide">
                            <img src="{{ asset('assets/images/shop/single/single-2.jpg') }}"
                                class="rounded-md shadow dark:shadow-gray-800" alt="">
                        </div>
                        <!--end content-->

                        <div class="tiny-slide">
                            <img src="{{ asset('assets/images/shop/single/single-3.jpg') }}"
                                class="rounded-md shadow dark:shadow-gray-800" alt="">
                        </div>
                        <!--end content-->

                        <div class="tiny-slide">
                            <img src="{{ asset('assets/images/shop/single/single-4.jpg') }}"
                                class="rounded-md shadow dark:shadow-gray-800" alt="">
                        </div>
                        <!--end content-->

                        <div class="tiny-slide">
                            <img src="{{ asset('assets/images/shop/single/single-5.jpg') }}"
                                class="rounded-md shadow dark:shadow-gray-800" alt="">
                        </div>
                        <!--end content-->

                        <div class="tiny-slide">
                            <img src="{{ asset('assets/images/shop/single/single-6.jpg') }}"
                                class="rounded-md shadow dark:shadow-gray-800" alt="">
                        </div>
                        <!--end content-->
                    </div>
                    <!--end tiny slider-->
                </div>
                <!--end col-->

                <div class="lg:col-span-7 md:col-span-6">
                    <div class="lg:ms-6">
                        <h5 class="text-2xl font-semibold">Branded T-Shirts</h5>
                        <div class="mt-2">
                            <span class="text-slate-400 font-semibold me-1">$16USD <del
                                    class="text-red-600">$21USD</del></span>

                            <ul class="list-none inline-block text-orange-400">
                                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                <li class="inline text-slate-400 font-semibold">4.8 (45)</li>
                            </ul>
                        </div>

                        <div class="mt-4">
                            <h5 class="text-lg font-semibold">Overview :</h5>
                            <p class="text-slate-400 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Vero exercitationem, unde molestiae sint quae inventore atque minima natus fugiat nihil
                                quisquam voluptates ea omnis. Modi laborum soluta tempore unde accusantium.</p>

                            <ul class="list-none text-slate-400 mt-4">
                                <li class="mb-1 flex"><i
                                        class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Digital
                                    Marketing Solutions for Tomorrow</li>
                                <li class="mb-1 flex"><i
                                        class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Our Talented &
                                    Experienced Marketing Agency</li>
                                <li class="mb-1 flex"><i
                                        class="uil uil-check-circle text-indigo-600 text-xl me-2"></i> Create your own
                                    skin to match your brand</li>
                            </ul>
                        </div>

                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px] mt-4">
                            <div class="flex items-center">
                                <h5 class="text-lg font-semibold me-2">Size:</h5>
                                <div class="">
                                    <a href="#"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white">S</a>
                                    <a href="#"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white">M</a>
                                    <a href="#"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white">L</a>
                                    <a href="#"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white">XL</a>
                                </div>
                            </div>
                            <!--end content-->

                            <div class="flex items-center">
                                <h5 class="text-lg font-semibold me-2">Quantity:</h5>
                                <div class="qty-icons ms-3">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 border hover:border-indigo-600 text-indigo-600 hover:text-white minus">-</button>
                                    <input min="0" name="quantity" value="0" type="number"
                                        class="h-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white pointer-events-none w-16 ps-4 quantity">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                        class="h-9 w-9 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white plus">+</button>
                                </div>
                            </div>
                            <!--end content-->
                        </div>
                        <!--end grid-->

                        <div class="mt-4">
                            <a href="#"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2">Shop
                                Now</a>
                            <a href="#"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center rounded-md bg-indigo-600/5 hover:bg-indigo-600 border-indigo-600/10 hover:border-indigo-600 text-indigo-600 hover:text-white mt-2">Add
                                to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-10 gap-[30px]">
                <div class="lg:col-span-3 md:col-span-5">
                    <div class="sticky top-20">
                        <ul class="flex-column p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md"
                            id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-start text-base font-semibold rounded-md w-full hover:text-indigo-600 transition-all duration-500 ease-in-out"
                                    id="description-tab" data-tabs-target="#description" type="button"
                                    role="tab" aria-controls="description"
                                    aria-selected="true">Description</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 transition-all duration-500 ease-in-out"
                                    id="addinfo-tab" data-tabs-target="#addinfo" type="button" role="tab"
                                    aria-controls="addinfo" aria-selected="false">Additional Information</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-start text-base font-semibold rounded-md w-full mt-3 transition-all duration-500 ease-in-out"
                                    id="review-tab" data-tabs-target="#review" type="button" role="tab"
                                    aria-controls="review" aria-selected="false">Review</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-9 md:col-span-7">
                    <div id="myTabContent"
                        class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md">
                        <div class="" id="description" role="tabpanel" aria-labelledby="profile-tab">
                            <p class="text-slate-400">Due to its widespread use as filler text for layouts,
                                non-readability is of great importance: human perception is tuned to recognize certain
                                patterns and repetitions in texts. If the distribution of letters and 'words' is random,
                                the reader will not be distracted from making a neutral judgement on the visual impact
                                and readability of the typefaces (typography), or the distribution of text on the page
                                (layout or type area). For this reason, dummy text usually consists of a more or less
                                random series of words or syllables.</p>
                        </div>

                        <div class="hidden" id="addinfo" role="tabpanel" aria-labelledby="addinfo-tab">
                            <table class="w-full text-start">
                                <tbody>
                                    <tr
                                        class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                        <td class="font-semibold py-4" style="width: 100px;">Color</td>
                                        <td class="text-slate-400 py-4">Red, White, Black, Orange</td>
                                    </tr>

                                    <tr
                                        class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                        <td class="font-semibold py-4">Material</td>
                                        <td class="text-slate-400 py-4">Cotton</td>
                                    </tr>

                                    <tr
                                        class="bg-white dark:bg-slate-900 border-b border-gray-100 dark:border-gray-700">
                                        <td class="font-semibold py-4">Size</td>
                                        <td class="text-slate-400 py-4">S, M, L, XL, XXL</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="hidden" id="review" role="tabpanel" aria-labelledby="review-tab">
                            <div>
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/01.jpg" class="h-11 w-11 rounded-full shadow"
                                            alt="">

                                        <div class="ms-3 flex-1">
                                            <a href="#"
                                                class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin
                                                Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="#"
                                        class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ms-5"><i
                                            class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div
                                    class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <ul class="list-none inline-block text-orange-400">
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline text-slate-400 font-semibold">5.0</li>
                                    </ul>

                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem
                                        Ipsum available, but the majority have suffered alteration in some form, by
                                        injected humour "</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/02.jpg" class="h-11 w-11 rounded-full shadow"
                                            alt="">

                                        <div class="ms-3 flex-1">
                                            <a href="#"
                                                class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin
                                                Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="#"
                                        class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ms-5"><i
                                            class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div
                                    class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <ul class="list-none inline-block text-orange-400">
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline text-slate-400 font-semibold">5.0</li>
                                    </ul>

                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem
                                        Ipsum available, but the majority have suffered alteration in some form, by
                                        injected humour "</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/03.jpg" class="h-11 w-11 rounded-full shadow"
                                            alt="">

                                        <div class="ms-3 flex-1">
                                            <a href="#"
                                                class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin
                                                Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="#"
                                        class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ms-5"><i
                                            class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div
                                    class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <ul class="list-none inline-block text-orange-400">
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline text-slate-400 font-semibold">5.0</li>
                                    </ul>

                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem
                                        Ipsum available, but the majority have suffered alteration in some form, by
                                        injected humour "</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/04.jpg" class="h-11 w-11 rounded-full shadow"
                                            alt="">

                                        <div class="ms-3 flex-1">
                                            <a href="#"
                                                class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin
                                                Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="#"
                                        class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ms-5"><i
                                            class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div
                                    class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <ul class="list-none inline-block text-orange-400">
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline"><i class="mdi mdi-star text-lg"></i></li>
                                        <li class="inline text-slate-400 font-semibold">5.0</li>
                                    </ul>

                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem
                                        Ipsum available, but the majority have suffered alteration in some form, by
                                        injected humour "</p>
                                </div>
                            </div>

                            <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                                <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                                <form class="mt-8">
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
                                        class="py-2 px-5 inline-block tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Send
                                        Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container relative mt-16">
            <div class="grid grid-cols-1 items-center">
                <h3 class="text-2xl leading-normal font-semibold">Recent Products</h3>
            </div>
            <!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div class="group">
                    <div
                        class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="{{ asset('assets/images/shop/items/s13.jpg') }}" alt="">
                        <div
                            class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add
                                to Cart</a>
                        </div>

                        <ul
                            class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Wooden
                            Chair</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end content-->

                <div class="group">
                    <div
                        class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="{{ asset('assets/images/shop/items/s14.jpg') }}" alt="">
                        <div
                            class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add
                                to Cart</a>
                        </div>

                        <ul
                            class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Women
                            Block Heels</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end content-->

                <div class="group">
                    <div
                        class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="{{ asset('assets/images/shop/items/s15.jpg') }}" alt="">
                        <div
                            class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add
                                to Cart</a>
                        </div>

                        <ul
                            class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Shorts</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end content-->

                <div class="group">
                    <div
                        class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="{{ asset('assets/images/shop/items/s16.jpg') }}" alt="">
                        <div
                            class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html"
                                class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add
                                to Cart</a>
                        </div>

                        <ul
                            class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)"
                                    class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i
                                        class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Masks</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--end content-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container relative mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                <div class="lg:col-span-5 md:col-span-6">
                    <img src="{{ asset('assets/images/illustrator/envelope.svg') }}" class="mx-auto d-block" alt="">
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile
                        Apps</span>
                    <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">Available for
                        your <br> Smartphones</h4>
                    <p class="text-slate-400 max-w-xl mb-0">Search all the open positions on the web. Get your own
                        personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                    <div class="my-5">
                        <a href="#"><img src="assets/images/app/app.png" class="m-1 inline-block"
                                alt=""></a>

                        <a href="#"><img src="assets/images/app/playstore.png" class="m-1 inline-block"
                                alt=""></a>
                    </div>

                    <div class="inline-block">
                        <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
                            <i data-feather="smartphone" class="me-2 text-indigo-600 h-10 w-10"></i>
                            <div class="content">
                                <h6 class="text-base font-medium">Install app now on your cellphones</h6>
                                <a href="#"
                                    class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn
                                    More <i class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end gird-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Footer Start -->
    <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">
        <div class="container relative">
            <div class="grid grid-cols-12">
                <div class="col-span-12">
                    <div class="py-[60px] px-0">
                        <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                            <div class="lg:col-span-3 md:col-span-12">
                                <a href="#" class="text-[22px] focus:outline-none">
                                    <img src="{{asset('assets/images/logo-light.png')}}" alt="">
                                </a>
                                <p class="mt-6 text-gray-300">Start working with Tailwind CSS that can provide
                                    everything you need to generate awareness, drive traffic, connect.</p>
                                <ul class="list-none mt-6">
                                    <li class="inline"><a href="https://1.envato.market/techwind" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a>
                                    </li>
                                    <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                    <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-behance" title="Behance"></i></a></li>
                                    <li class="inline"><a href="http://linkedin.com/company/shreethemes"
                                            target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                    <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                    <li class="inline"><a href="https://www.instagram.com/shreethemes/"
                                            target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                    <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank"
                                            class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i
                                                class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                </ul>
                                <!--end icon-->
                            </div>
                            <!--end col-->

                            <div class="lg:col-span-6 md:col-span-12">
                                <h5 class="tracking-[1px] text-gray-100 font-semibold">Shopping & Clothes</h5>

                                <div class="grid md:grid-cols-12 grid-cols-1">
                                    <div class="md:col-span-4">
                                        <ul class="list-none footer-list mt-6">
                                            <li><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Men</a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Jackets & Coats </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Jeans </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Loungewear </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Polo shirts </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Shirts</a></li>
                                        </ul>
                                    </div>
                                    <!--end col-->

                                    <div class="md:col-span-4">
                                        <ul class="list-none footer-list mt-6">
                                            <li><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Shorts </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Suits Swimwear </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> T-shirts </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Tracksuits </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Trousers</a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Shirts</a></li>
                                        </ul>
                                    </div>
                                    <!--end col-->

                                    <div class="md:col-span-4">
                                        <ul class="list-none footer-list mt-6">
                                            <li><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> My account </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Order History </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Wish List </a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Newsletter</a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Affiliate</a></li>
                                            <li class="mt-[10px]"><a href="#"
                                                    class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i
                                                        class="uil uil-angle-right-b"></i> Returns</a></li>
                                        </ul>
                                    </div>
                                    <!--end col-->
                                </div>
                            </div>

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

            <div class="grid grid-cols-1">
                <div class="py-[30px] px-0 border-t border-slate-800">
                    <div class="grid lg:grid-cols-4 md:grid-cols-2">
                        <div class="flex items-center lg:justify-center">
                            <i class="uil uil-truck align-middle text-lg mb-0 me-2"></i>
                            <h6 class="mb-0 font-medium">Free delivery</h6>
                        </div>
                        <!--end content-->

                        <div class="flex items-center lg:justify-center">
                            <i class="uil uil-archive align-middle text-lg mb-0 me-2"></i>
                            <h6 class="mb-0 font-medium">Non-contact shipping</h6>
                        </div>
                        <!--end content-->

                        <div class="flex items-center lg:justify-center">
                            <i class="uil uil-transaction align-middle text-lg mb-0 me-2"></i>
                            <h6 class="mb-0 font-medium">Money-back quarantee</h6>
                        </div>
                        <!--end content-->

                        <div class="flex items-center lg:justify-center">
                            <i class="uil uil-shield-check align-middle text-lg mb-0 me-2"></i>
                            <h6 class="mb-0 font-medium">Secure payments</h6>
                        </div>
                        <!--end content-->
                    </div>
                    <!--end grid-->
                </div>
                <!--end-->
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
    <script src="{{ asset('assets/libs/shufflejs/shuffle.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
    <script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.init.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>
