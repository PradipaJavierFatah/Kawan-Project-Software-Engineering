<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Kawan | Homepage</title>
    {{-- <link rel="stylesheet" href="style.css"> --}}
    
</head>

<body class="font-body">
    <!-- NAVBAR -->
    <nav class="py-4 bg-[#F9C5D5]">
        <div class="container mx-auto flex justify-between items-center">
            <!-- LOGO -->
            <div>
                <a href="/KawanWEB/home.html" class="flex items-center pl-3">
                    <img src="asset/home/logoonly.png" alt="logo">
                    <span class="text-3xl font-bold ml-2">Kawan</span>
                </a>
            </div>

            <!-- MENU NAVBAR -->
            <div class="hidden justify-center md:flex -ml-8">
                <a href="/KawanWEB/home.html" class="text-xl font-medium mx-4 md:mx-6 hover:underline">Home</a>
                <a href="#" class="text-xl font-medium mx-4 md:mx-6 hover:underline">Services</a>
                <a href="#" class="text-xl font-medium mx-4 md:mx-6 hover:underline">Payments</a>
            </div>

            <!-- SIGN IN BUTTON -->
            <div class="md:flex items-center">
                <a href="login">
                    <button class="hidden md:inline-block px-4 py-2 me-5 bg-[#D87CA1] rounded-lg font-semibold hover:bg-blue-700 hover:text-white">
                        SIGN IN
                    </button>
                </a>
            </div>

            <!-- HAMBURG ICON FOR SMALLER WINDOWS -->
            <div class="flex md:hidden items-center justify-end">
                <button id="dropdown-menu-toggle" class="focus:outline-none">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>
    </nav>
    <!-- MENU DROPDOWN NAVBAR -->
    <div id="dropdown-menu" class="md:hidden bg-[#F9C5D5]">
        <div class="px-2 py-2 flex flex-col">
            <a href="/KawanWEB/home.html" class="text-xl font-medium me-4 md:me-6 hover:underline">Home</a>
            <a href="#" class="text-xl font-medium me-4 md:me-6 hover:underline">Services</a>
            <a href="#" class="text-xl font-medium me-4 md:me-6 hover:underline">Payments</a>
        </div>
    </div>

    <div>
        <!-- JUMBOTRON -->
        <section class="bg-[#D87CA1] flex-col md:flex-row items-center justify-between">
            <div class="p-10 text-center sm:text-lg md:text-xl lg:text-2xl">
                <p>
                    Kawan is a comprehensive online platform offering <strong class="font-semibold">professional mental health consultation and mentoring services.</strong>
                    With a team of <strong class="font-semibold">licensed therapists, psychologists, and counselors,</strong> the website provides 
                    <strong class="font-semibold">personalized guidance and support</strong> for individuals facing various mental health challenges or seeking personal development.
                </p>
            </div>
        </section>

        <!-- OUR SERVICES -->
        <section>
                <div class="text-2xl font-semibold text-center py-5">
                    <span>OUR SERVICES</span>
                </div>
                <div class="flex justify-center space-x-6 font-medium mb-8">
                    <a href="/KawanWEB/mentoring.html" class="bg-gray-200 flex flex-col items-center py-2 px-4 w-40 rounded shadow-lg hover:bg-[#F9C5D5]">
                        <img src="/KawanWEB/PhotoProperty/image 15.png" alt="Services" class="w-16 h-16 mb-2">
                        Mentoring
                    </a>
                    <a href="/KawanWEB/consult.html" class="bg-gray-200 flex flex-col items-center py-2 px-4 w-40 rounded shadow-lg hover:bg-[#F9C5D5]">
                        <img src="/KawanWEB/PhotoProperty/image 15.png" alt="Services" class="w-16 h-16 mb-2">
                        Consulting
                    </a>
                    <a href="#" class="bg-gray-200 flex flex-col items-center py-2 px-4 w-40 rounded shadow-lg hover:bg-[#F9C5D5]">
                        <img src="/KawanWEB/PhotoProperty/image 15.png" alt="Services" class="w-16 h-16 mb-2">
                        Personality Test
                    </a>
                    <a href="#" class="bg-gray-200 flex flex-col items-center py-2 px-4 w-40 rounded shadow-lg hover:bg-[#F9C5D5]">
                        <img src="/KawanWEB/PhotoProperty/image 15.png" alt="Services" class="w-16 h-16 mb-2">
                        Stress Test
                    </a>
                </div>
        </section>

        <!-- ARTICLES -->
        <section>
            <div class="text-2xl font-semibold text-center py-5">
                <span>ARTICLES</span>
            </div>
            <div class="flex justify-center mb-4 space-x-2 font-medium text-sm">
                <button class="py-2 px-4 border border-black shadow hover:bg-[#F9C5D5]">
                    CATEGORY
                </button>
                <button class="py-2 px-4 border border-black shadow hover:bg-[#F9C5D5]">
                    CATEGORY
                </button>
                <button class="py-2 px-4 border border-black shadow hover:bg-[#F9C5D5]">
                    CATEGORY
                </button>
                <button class="py-2 px-4 border border-black shadow hover:bg-[#F9C5D5]">
                    CATEGORY
                </button>
            </div>
            <div class="flex items-center justify-center container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                    <div class="card p-5">
                        <div class="rounded-xl bg-gray-200 p-5 flex-col">
                            <div class="rounded-xl overflow-hidden">
                                <img src="/KawanWEB/PhotoProperty/artikel-cover.jpg" alt="Article">
                            </div>
                            <h4 class="text-2xl md:text-3xl font-medium mt-3">Article - Article Title</h4>
                            <p class="text-black text-lg text-justify my-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem laborum quam minus a sunt error.
                            </p>
                            <a href="#Article" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-[#D87CA1] rounded-lg hover:bg-blue-700 hover:text-white">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="card p-5">
                        <div class="rounded-xl bg-gray-200 p-5 flex-col">
                            <div class="rounded-xl overflow-hidden">
                                <img src="/KawanWEB/PhotoProperty/artikel-cover.jpg" alt="Article">
                            </div>
                            <h4 class="text-2xl md:text-3xl font-medium mt-3">Article - Article Title</h4>
                            <p class="text-black text-lg text-justify my-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem laborum quam minus a sunt error.
                            </p>
                            <a href="#Article" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-[#D87CA1] rounded-lg hover:bg-blue-700 hover:text-white">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="card p-5">
                        <div class="rounded-xl bg-gray-200 p-5 flex-col">
                            <div class="rounded-xl overflow-hidden">
                                <img src="/KawanWEB/PhotoProperty/artikel-cover.jpg" alt="Article">
                            </div>
                            <h4 class="text-2xl md:text-3xl font-medium mt-3">Article - Article Title</h4>
                            <p class="text-black text-lg text-justify my-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem laborum quam minus a sunt error.
                            </p>
                            <a href="#Article" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-[#D87CA1] rounded-lg hover:bg-blue-700 hover:text-white">
                                Read More
                            </a>
                        </div>
                    </div>
                    <div class="card p-5">
                        <div class="rounded-xl bg-gray-200 p-5 flex-col">
                            <div class="rounded-xl overflow-hidden">
                                <img src="/KawanWEB/PhotoProperty/artikel-cover.jpg" alt="Article">
                            </div>
                            <h4 class="text-2xl md:text-3xl font-medium mt-3">Article - Article Title</h4>
                            <p class="text-black text-lg text-justify my-3">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem laborum quam minus a sunt error.
                            </p>
                            <a href="#Article" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-black bg-[#D87CA1] rounded-lg hover:bg-blue-700 hover:text-white">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section> 
        
        <!-- TESTIMONIALS -->
        <section>
            <div class="text-2xl font-semibold text-center py-5">
                <span>TESTIMONIALS</span>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 mx-2 mb-4 border border-gray-200 rounded-lg shadow-sm bg-gray-200">
                <div class="flex flex-col items-center justify-center p-8 text-center bg-[#D87CA1]">
                    <blockquote class="max-w-2xl mx-auto mb-4 lg:mb-8">
                        <h3 class="text-xl font-semibold">
                            Main Point
                        </h3>
                        <p class="my-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, eius?
                        </p>
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <img src="/KawanWEB/PhotoProperty/profile.png" alt="User Profile" class="rounded-full w-12 h-12">
                        <div class="flex flex-col space-y-0.5 font-medium text-left ms-3">
                            <span>Name</span>
                            <span class="text-sm">Job</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center p-8 text-center bg-[#F9C5D5]">
                    <blockquote class="max-w-2xl mx-auto mb-4 lg:mb-8">
                        <h3 class="text-xl font-semibold">
                            Main Point
                        </h3>
                        <p class="my-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, eius?
                        </p>
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <img src="/KawanWEB/PhotoProperty/profile.png" alt="User Profile" class="rounded-full w-12 h-12">
                        <div class="flex flex-col space-y-0.5 font-medium text-left ms-3">
                            <span>Name</span>
                            <span class="text-sm">Job</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center p-8 text-center bg-[#F9C5D5]">
                    <blockquote class="max-w-2xl mx-auto mb-4 lg:mb-8">
                        <h3 class="text-xl font-semibold">
                            Main Point
                        </h3>
                        <p class="my-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, eius?
                        </p>
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <img src="/KawanWEB/PhotoProperty/profile.png" alt="User Profile" class="rounded-full w-12 h-12">
                        <div class="flex flex-col space-y-0.5 font-medium text-left ms-3">
                            <span>Name</span>
                            <span class="text-sm">Job</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-col items-center justify-center p-8 text-center bg-[#D87CA1]">
                    <blockquote class="max-w-2xl mx-auto mb-4 lg:mb-8">
                        <h3 class="text-xl font-semibold">
                            Main Point
                        </h3>
                        <p class="my-4">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur, eius?
                        </p>
                    </blockquote>
                    <div class="flex items-center justify-center">
                        <img src="/KawanWEB/PhotoProperty/profile.png" alt="User Profile" class="rounded-full w-12 h-12">
                        <div class="flex flex-col space-y-0.5 font-medium text-left ms-3">
                            <span>Name</span>
                            <span class="text-sm">Job</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- FOOTER -->
    <footer class="bg-[#F9C5D5] mt-5">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="KawanWEB/home.html" class="flex items-center">
                        <img src="/KawanWEB/PhotoProperty/Logo only.png" alt="Kawan">
                        <span class="text-3xl font-bold ml-2">Kawan</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-10">
                    <div>
                        <h2 class="mb-6 text-lg font-semibold">Tentang Kawan</h2>
                        <ul>
                            <li class="mb-6">
                                <a href="#AboutUs" class="hover:underline">About Us</a>
                            </li>
                            <li class="mb-6">
                                <a href="#AboutUs" class="hover:underline">Blog</a>
                            </li>
                            <li>
                                <a href="#AboutUs" class="hover:underline">Privacy & Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-lg font-semibold">Find Us On</h2>
                        <ul>
                            <li class="mb-2">
                                <a href="https://instagram.com" class="hover:underline">Instagram</a>
                            </li>
                            <li class="mb-2">
                                <a href="https://x.com" class="hover:underline">Twitter/X</a>
                            </li>
                            <li class="mb-2">
                                <a href="https://linkedin.com" class="hover:underline">LinkedIn</a>
                            </li>
                            <li>
                                <a href="https://facebook.com" class="hover:underline">Facebook</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="sm:flex sm:items-center sm:justify-between">
            <span class="text-sm sm:text-center">
                © 2023 Kawan™ All Rights Reserved.
            </span>
            <div class="flex mt-4 sm:justify-center sm:mt-0">
                <a href="https://instagram.com" class="text-black" target="_blank">
                    <img src="/KawanWEB/PhotoProperty/instagram.png" alt="Instagram" class="h-6 w-6">
                    <span class="sr-only">Instagram page</span>
                </a>
                <a href="https://x.com" class="ms-5">
                    <img src="/KawanWEB/PhotoProperty/twitter.png" alt="Twitter/X" class="h-6 w-6">
                    <span class="sr-only">Twitter/X page</span>
                </a>
                <a href="https://linkedin.com" class="ms-5">
                    <img src="/KawanWEB/PhotoProperty/linkedin.png" alt="LinkedIn" class="h-6 w-6">
                    <span class="sr-only">LinkedIn page</span>
                </a>
                <a href="https://facebook.com" class="ms-5 me-10">
                    <img src="/KawanWEB/PhotoProperty/facebook.png" alt="Facebook" class="h-6 w-6">
                    <span class="sr-only">Facebook account</span>
                </a>
            </div>
        </div>
        
    </footer>

    <script>
        document.getElementById('dropdown-menu-toggle').addEventListener('click', function(){
            var dropdownMenu = document.getElementById('dropdown-menu');
            dropdownMenu.classList.toggle('hidden')
        });
    </script>
</body>
</html>