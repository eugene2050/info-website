<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<head>
        <meta charset="UTF-8">
        <title>Home | Biochem</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Tailwind CSS Saas & Software Landing Page Template">
        <meta name="keywords" content="agency, application, business, clean, creative, cryptocurrency, it solutions, modern, multipurpose, nft marketplace, portfolio, saas, software, tailwind css">
        <meta name="author" content="Shreethemes">
        <meta name="website" content="https://shreethemes.in/">
        <meta name="email" content="support@shreethemes.in">
        <meta name="version" content="1.9.5">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">


        <link rel="shortcut icon" href="assets/images/favicon.ico">

 
        <link href="{{asset('assets/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">

        <link href="{{asset('assets/libs/%40iconscout/unicons/css/line.css')}}" type="text/css" rel="stylesheet">
        <link href="{{asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('assets/css/tailwind.min.css')}}">

    </head>
    
    <body class="font-nunito text-base text-black dark:text-white dark:bg-slate-900">



        <nav id="topnav" class="defaultscroll is-sticky bg-white dark:bg-slate-900">
            <div class="container relative">
        
                <a class="logo" href="index-2.html">
                    <img src="assets/images/logo-dark.png" class="inline-block dark:hidden" alt="">
                    <img src="assets/images/logo-light.png" class="hidden dark:inline-block" alt="">
                </a>

        
                <div class="menu-extras">
                    <div class="menu-item">
            
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
        
                    </div>
                </div>


                <div id="navigation">
                    
                    <ul class="navigation-menu">
                        <li><a href="{{route('home')}}" class="sub-menu-item">Home</a></li>

                        <li><a href="{{route('about')}}" class="sub-menu-item">About Us</a></li>

                        <li><a href="{{route('products')}}" class="sub-menu-item">Products</a></li>

                        <li><a href="{{route('contact')}}" class="sub-menu-item">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
     




        <div id="ContactUs" tabindex="-1" class="fixed z-50 hidden overflow-hidden inset-0 m-auto">
            <div class="relative w-full h-auto max-w-lg p-4">
                <div class="relative bg-white dark:bg-slate-900 rounded-lg shadow dark:shadow-gray-800">
                    <button type="button" class="absolute -top-4 -end-4 text-gray-400 bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 hover:text-gray-900 rounded-full text-sm p-1.5 ms-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="ContactUs">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                    <div class="p-6 py-10 text-center">

                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-32 w-32 fill-red-600/5 mx-auto"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-red-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                                <i class="uil uil-heart-break"></i>
                            </div>
                        </div>
                
                        <h4 class="text-xl font-semibold mt-6">Your wishlist is empty.</h4>
                        <p class="text-slate-400 my-3">Create your first wishlist request...</p>

                        <a href="#" class="py-[5px] px-4 inline-block font-semibold tracking-wide align-middle transition duration-500 ease-in-out text-sm text-center bg-transparent hover:bg-indigo-600 border border-indigo-600 text-indigo-600 hover:text-white rounded-md mt-2">Create a new wishlist</a>
                    </div>
                </div>
            </div>
        </div>

        <section class="relative mt-20">
            <div class="container-fluid relative">
                <div class="relative py-48 table w-full shadow-md overflow-hidden">
    
                    <div class="absolute inset-0 bg-[url{{asset('assets/images/construction/1.jpg')}}] bg-no-repeat md:bg-left bg-center bg-cover">
                        <img src="{{asset('assets/images/740142.jpg')}}" alt="">
                    </div>
                    <div class="absolute inset-0 bg-slate-950/30"></div>
                    <div class="container relative">
                        <div class="grid grid-cols-1">
                            <div class="md:text-start text-center">
                                <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">New Accessories <br> Collections</h1>
                                <p class="text-white/70 text-xl max-w-xl">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                <div class="mt-6">
                                    <a href="#" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="mdi mdi-cart-outline"></i> Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      

        <section class="relative py-16">
            <div class="container relative">
                <div id="grid" class="md:flex w-full justify-center mx-auto mt-4">
                    <div class="md:w-1/2 p-3 picture-item">
                        <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <img src="assets/images/shop/hoodie.jpg" class="group-hover:scale-110 transition-all duration-500" alt="">
                            <div class="absolute bottom-4 start-4">
                                <a href="#" class="text-xl font-semibold hover:text-indigo-600 transition-all duration-500">Hoodies</a>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 p-3 picture-item">
                        <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <img src="assets/images/shop/beanie.jpg" class="group-hover:scale-110 transition-all duration-500" alt="">
                            <div class="absolute bottom-4 start-4">
                                <a href="#" class="text-xl font-semibold hover:text-indigo-600 transition-all duration-500">Beanies for Man & Women</a>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2 p-3 picture-item">
                        <div class="group relative overflow-hidden rounded-md shadow dark:shadow-gray-800">
                            <img src="assets/images/shop/glasses.jpg" class="group-hover:scale-110 transition-all duration-500" alt="">
                            <div class="absolute bottom-4 start-4">
                                <a href="#" class="text-xl font-semibold hover:text-indigo-600 transition-all duration-500">Glasses</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container relative mt-16">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                    <div class="lg:col-span-8 md:col-span-6 md:text-start text-center">
                        <h3 class="text-2xl leading-normal font-semibold">Most Lastest Products</h3>
                    </div>

                    <div class="lg:col-span-4 md:col-span-6 md:text-end hidden md:block">
                        <a href="shop-grid-two.html" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View More Items <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>

  
                @livewire('latest-products')
                <div class="grid md:grid-cols-12 grid-cols-1 md:hidden mt-8">
                    <div class="md:col-span-12 text-center">
                        <a href="shop-grid-two.html" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-slate-400 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">View More Items <i class="uil uil-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div>

            <div class="container relative mt-16">
                <div class="grid grid-cols-1 items-center">
                    <h3 class="text-2xl leading-normal font-semibold">Top Categories</h3>
                </div>

                <div class="grid lg:grid-cols-6 md:grid-cols-3 grid-cols-2 mt-8 gap-[30px]">
                    <div class="group relative overflow-hidden hover:shadow-lg hover:dark:shadow-gray-800 rounded-md transition-all duration-500 p-6 text-center">
                        <img src="assets/images/shop/categories/electronics.jpg" class="rounded-full shadow-md dark:shadow-gray-800 h-20 w-20 block mx-auto mb-2" alt="">

                        <a href="#" class="font-semibold hover:text-indigo-600 text-lg">Electronics</a>
                    </div>

                    <div class="group relative overflow-hidden hover:shadow-lg hover:dark:shadow-gray-800 rounded-md transition-all duration-500 p-6 text-center">
                        <img src="assets/images/shop/categories/fashion.jpg" class="rounded-full shadow-md dark:shadow-gray-800 h-20 w-20 block mx-auto mb-2" alt="">

                        <a href="#" class="font-semibold hover:text-indigo-600 text-lg">Fashion</a>
                    </div>

                    <div class="group relative overflow-hidden hover:shadow-lg hover:dark:shadow-gray-800 rounded-md transition-all duration-500 p-6 text-center">
                        <img src="assets/images/shop/categories/furniture.jpg" class="rounded-full shadow-md dark:shadow-gray-800 h-20 w-20 block mx-auto mb-2" alt="">

                        <a href="#" class="font-semibold hover:text-indigo-600 text-lg">Furniture</a>
                    </div>

                    <div class="group relative overflow-hidden hover:shadow-lg hover:dark:shadow-gray-800 rounded-md transition-all duration-500 p-6 text-center">
                        <img src="assets/images/shop/categories/mobile.jpg" class="rounded-full shadow-md dark:shadow-gray-800 h-20 w-20 block mx-auto mb-2" alt="">

                        <a href="#" class="font-semibold hover:text-indigo-600 text-lg">Mobile</a>
                    </div>

                    <div class="group relative overflow-hidden hover:shadow-lg hover:dark:shadow-gray-800 rounded-md transition-all duration-500 p-6 text-center">
                        <img src="assets/images/shop/categories/music.jpg" class="rounded-full shadow-md dark:shadow-gray-800 h-20 w-20 block mx-auto mb-2" alt="">

                        <a href="#" class="font-semibold hover:text-indigo-600 text-lg">Music</a>
                    </div>

                    <div class="group relative overflow-hidden hover:shadow-lg hover:dark:shadow-gray-800 rounded-md transition-all duration-500 p-6 text-center">
                        <img src="assets/images/shop/categories/sports.jpg" class="rounded-full shadow-md dark:shadow-gray-800 h-20 w-20 block mx-auto mb-2" alt="">

                        <a href="#" class="font-semibold hover:text-indigo-600 text-lg">Sports</a>
                    </div>
                </div>
            </div>

            <div class="container relative mt-16">
                <div class="grid grid-cols-1 items-center">
                    <h3 class="text-2xl leading-normal font-semibold">Affordable Products</h3>
                </div>

                @livewire('lowest-price')
            </div>
        </section>
    

        <section class="py-28 w-full table relative bg-center bg-no-repeat bg-cover jarallax" style="background-image: url('{{asset('assets/images/bg.jpg')}}');" data-jarallax data-speed="0.5">
            <div class="absolute inset-0 bg-slate-900/30">
            </div>
            <div class="container relative">
                
                <div class="grid grid-cols-1 text-center">
                    <h3 class="mb-4 md:text-4xl text-3xl text-white font-bold">End of Season Clearance <br> Sale upto 30%</h3>

                    <p class="text-white/80 max-w-xl mx-auto">Start working with Techwind that can provide everything you need to generate awareness, drive traffic, connect.</p>

                    <div class="mt-6">
                        <a href="#" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md me-2 mt-2"><i class="mdi mdi-cart-outline"></i> Shop Now</a>
                    </div>
                </div>
            </div>

        </section>

        <section class="relative py-16">
            <div class="container relative">
                <div class="grid grid-cols-1 items-center">
                    <h3 class="text-2xl leading-normal font-semibold">Popular Products</h3>
                </div>

              
                
                    @livewire('popular-products')
      
      
            </div>
            <div class="container relative mt-16">
                <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                    <div class="lg:col-span-5 md:col-span-6">
                        <img src="assets/images/illustrator/envelope.svg" class="mx-auto d-block" alt="">
                    </div>

                    <div class="lg:col-span-7 md:col-span-6">
                        <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile Apps</span>
                        <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">Available for your <br> Smartphones</h4>
                        <p class="text-slate-400 max-w-xl mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                        <div class="my-5">
                            <a href="#"><img src="assets/images/app/app.png" class="m-1 inline-block" alt=""></a>

                            <a href="#"><img src="assets/images/app/playstore.png" class="m-1 inline-block" alt=""></a>
                        </div>

                        <div class="inline-block">
                            <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
                                <i data-feather="smartphone" class="me-2 text-indigo-600 h-10 w-10"></i>
                                <div class="content">
                                    <h6 class="text-base font-medium">Install app now on your cellphones</h6>
                                    <a href="#" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn More <i class="uil uil-angle-right-b"></i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   

        <footer class="footer bg-dark-footer relative text-gray-200 dark:text-gray-200">    
            <div class="container relative">
                <div class="grid grid-cols-12">
                    <div class="col-span-12">
                        <div class="py-[60px] px-0">
                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                                <div class="lg:col-span-3 md:col-span-12">
                                    <a href="#" class="text-[22px] focus:outline-none">
                                        <img src="assets/images/logo-light.png" alt="">
                                    </a>
                                    <p class="mt-6 text-gray-300">Start working with Tailwind CSS that can provide everything you need to generate awareness, drive traffic, connect.</p>
                                    <ul class="list-none mt-6">
                                        <li class="inline"><a href="https://1.envato.market/techwind" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                                        <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                                        <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-behance" title="Behance"></i></a></li>
                                        <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-linkedin" title="Linkedin"></i></a></li>
                                        <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                                        <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                                        <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center border-gray-800 rounded-md border hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                                    </ul>
                                </div>
                        
                                <div class="lg:col-span-6 md:col-span-12">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Shopping & Clothes</h5>

                                    <div class="grid md:grid-cols-12 grid-cols-1">
                                        <div class="md:col-span-4">
                                            <ul class="list-none footer-list mt-6">
                                                <li><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Men</a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Jackets & Coats </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Jeans </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i>  Loungewear </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Polo shirts </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Shirts</a></li>
                                            </ul>
                                        </div>
                                
                                        <div class="md:col-span-4">
                                            <ul class="list-none footer-list mt-6">
                                                <li><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Shorts </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Suits Swimwear </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> T-shirts </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Tracksuits </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Trousers</a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Shirts</a></li>
                                            </ul>
                                        </div>
                                
                                        <div class="md:col-span-4">
                                            <ul class="list-none footer-list mt-6">
                                                <li><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> My account </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Order History </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Wish List </a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Newsletter</a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Affiliate</a></li>
                                                <li class="mt-[10px]"><a href="#" class="text-gray-300 hover:text-gray-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b"></i> Returns</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
    
                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Newsletter</h5>
                                    <p class="mt-6">Sign up and receive the latest tips via email.</p>
                                    <form>
                                        <div class="grid grid-cols-1">
                                            <div class="my-3">
                                                <label class="form-label">Write your email <span class="text-red-600">*</span></label>
                                                <div class="form-icon relative mt-2">
                                                    <i data-feather="mail" class="w-4 h-4 absolute top-3 start-4"></i>
                                                    <input type="email" class="form-input ps-12 rounded w-full py-2 px-3 h-10 bg-gray-800 border-0 text-gray-100 focus:shadow-none focus:ring-0 placeholder:text-gray-200" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        
                                            <button type="submit" id="submitsubscribe" name="send" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1">
                    <div class="py-[30px] px-0 border-t border-slate-800">
                        <div class="grid lg:grid-cols-4 md:grid-cols-2">
                            <div class="flex items-center lg:justify-center">
                                <i class="uil uil-truck align-middle text-lg mb-0 me-2"></i>
                                <h6 class="mb-0 font-medium">Free delivery</h6>
                            </div>

                            <div class="flex items-center lg:justify-center">
                                <i class="uil uil-archive align-middle text-lg mb-0 me-2"></i>
                                <h6 class="mb-0 font-medium">Non-contact shipping</h6>
                            </div>

                            <div class="flex items-center lg:justify-center">
                                <i class="uil uil-transaction align-middle text-lg mb-0 me-2"></i>
                                <h6 class="mb-0 font-medium">Money-back quarantee</h6>
                            </div>

                            <div class="flex items-center lg:justify-center">
                                <i class="uil uil-shield-check align-middle text-lg mb-0 me-2"></i>
                                <h6 class="mb-0 font-medium">Secure payments</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-[30px] px-0 border-t border-slate-800">
                <div class="container relative text-center">
                    <div class="grid md:grid-cols-2 items-center">
                        <div class="md:text-start text-center">
                            <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> Techwind. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>

                        <ul class="list-none md:text-end text-center mt-6 md:mt-0">
                            <li class="inline"><a href="#"><img src="assets/images/payments/american-ex.png" class="max-h-6 inline" title="American Express" alt=""></a></li>
                            <li class="inline"><a href="#"><img src="assets/images/payments/discover.png" class="max-h-6 inline" title="Discover" alt=""></a></li>
                            <li class="inline"><a href="#"><img src="assets/images/payments/master-card.png" class="max-h-6 inline" title="Master Card" alt=""></a></li>
                            <li class="inline"><a href="#"><img src="assets/images/payments/paypal.png" class="max-h-6 inline" title="Paypal" alt=""></a></li>
                            <li class="inline"><a href="#"><img src="assets/images/payments/visa.png" class="max-h-6 inline" title="Visa" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
  

 
        <div class="cookie-popup fixed max-w-lg bottom-3 end-3 start-3 sm:start-0 mx-auto bg-white dark:bg-slate-900 shadow dark:shadow-gray-800 rounded-md py-5 px-6 z-50">
            <p class="text-slate-400">This website uses cookies to provide you with a great user experience. By using it, you accept our <a href="https://shreethemes.in/" target="_blank" class="text-emerald-600 dark:text-emerald-500 font-semibold">use of cookies</a></p>
            <div class="cookie-popup-actions text-end">
                <button class="absolute border-none bg-none p-0 cursor-pointer font-semibold top-2 end-2"><i class="uil uil-times text-dark dark:text-slate-200 text-2xl"></i></button>
            </div>
        </div>
    
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-indigo-600 text-white leading-9"><i class="uil uil-arrow-up"></i></a>


  
        <div class="fixed top-[30%] -right-2 z-50">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-800 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>

        <div class="fixed top-[40%] -right-3 z-50">
            <a href="#" id="switchRtl">
                <span id="directionText" class="py-1 px-3 relative inline-block rounded-t-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-bold">LTR</span>
            </a>
        </div>


        <script src="{{asset('assets/libs/shufflejs/shuffle.min.js')}}"></script>
        <script src="{{asset('assets/libs/jarallax/jarallax.min.js')}}"></script>
        <script src="{{asset('assets/libs/tiny-slider/min/tiny-slider.js')}}"></script>
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{asset('assets/js/plugins.init.js')}}"></script>
        <script src="{{asset('assets/js/app.js')}}"></script>
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