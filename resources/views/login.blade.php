<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" sizes="32x32" href="asset/faviconlogo.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
{{-- <style>
    #Login {
        position: relative;
        overflow: hidden;
    }
    #Login::before {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        background-color:  #F2789F; 
        z-index: -100;
    }
</style> --}}

</head>

<body>
    <div class=" hidden md:block absolute inset-y-0 right-0 w-1/2 bg-primary z-0"></div>
    
    {{-- Tes coba end--}}
    <section id="Login" class="pt-32 pb-0">
        <div class="container mx-auto flex">
            <div class="w-full lg:w-1/2 px-4">
                <div class="w-full lg:w-2/3 p-6 mx-auto">
                    <img src="asset/Logo.png" alt="Logo" width="250">
                    <h1 class="text-2xl my-4 font-Kanit font-semibold">Hai Selamat Datang Kawan!</h1>
                    <form>
                        <div class="grid gap-6 mb-2">
                            <div class="mb-0">
                                {{-- <label for="email" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black font-Kanit">Email address</label> --}}
                                <input type="email" id="email" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan email kamu..." required />
                            </div>
                            <div class="mb-0">
                                {{-- <label for="password" class="block mb-2 text-lg font-medium text-gray-900 dark:text-black font-Kanit">Password</label> --}}
                                <input type="password" id="password" class="font- font-Kanit bg-gray-50 border-2 border-black text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan password kamu..." required />
                                <div class="flex justify-end">
                                    <h1 class="text-sm text-sky-600 cursor-pointer mb-0 mt-2"><a href="forgetpassword">Forget Password?</a></h1>
                                </div>
                                <div class="-pt-2">
                                    <button type="submit" class="font-Kanit  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-base w-full sm:w-auto px-8 py-2.5 text-center dark:bg-secondery dark:hover:bg-secondery dark:focus:ring-sky-400 dark:focus:ring-2 hover:shadow-lg hover:opacity-80 transistion duration-300 ease-in-out">Login</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="flex justify-center mt-16">
                        <h1>Belum memiliki akun? <a href="#"><span class="cursor-pointer underline">Daftar disini</span></a></h1>
                    </div>
                </div>
            </div>
            <div class="hidden lg:block w-1/2 flex items-center justify-center z-10">
                <img src="asset/gambarlogin.png" alt="Gambar Login" class="mx-auto pt-20" width="500">
            </div>
        </div>
    </section>
    
    

    {{-- Tes End --}}
</body>

</html>