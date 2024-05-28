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

<script src="../path/to/flowbite/dist/datepicker.js"></script>

</head>

<body>
    {{-- <h3 class="font-Kanit font-semibold text-6xl pt-12 pb-12 bg-yellow-400 flex justify-center">Progresss</h3> --}}

    {{-- Daftar Akun Start --}}
    {{-- <div class="bg-cover bg-center max-h-max pb-20" style="background-image: url('asset/testback.png')"><h1>tes</h1></div> --}}

    <div class="bg-auto bg-center h-screen pt-28" style="background-image: url('asset/testback.png')">
        <div class="container">
            <div class="w-full flex justify-center mb-2">
                <img src="asset/Logo.png" alt="" width="200">
            </div>
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 border-2 border-black">
                        <div class="py-8 px-8">
                            <img src="asset/statusbar-1.png" alt="" class="mx-auto flex justify-center">
                            <div class="mb-0">
                                <label for="name" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit">Nama</label>
                                <input type="email" id="email" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan email kamu..." required />
    
                                <label for="text" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit">Tempat Lahir</label>
                                <input type="text" id="email" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Asal kelahiran..." required />
    
                                <label for="date" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit">Tanggal Lahir</label>
                                <input type="text" id="email" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="DD/MM/YY" required />
    
                                <label for="button" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit mb-2">Jenis Kelamin</label>
                                <div class="flex justify-between mb-2 pr-36">
                                    <div class="flex items-center">
                                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-20">
                                        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-600">Pria</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-5 h-5 text-pink-600 bg-gray-100 border-gray-300 focus:ring-pink-500 dark:focus:ring-pink-600 dark:ring-offset-gray-800 focus:ring-20">
                                        <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-600">Wanita</label>
                                    </div>
                                </div>
                            </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section id="daftarakun" class="pt-36 pb-32 bg-sky-400">
        <div class="container">
            <div class="w-full flex justify-center mb-2">
                <img src="asset/Logo.png" alt="" width="200">
            </div>
    
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 border-2 border-black">
                        <div class="py-8 px-8">
                            <img src="asset/statusbar-1.png" alt="" class="mx-auto flex justify-center">
                            <div class="mb-0">
                                <label for="name" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit">Nama</label>
                                <input type="email" id="email" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan email kamu..." required />
    
                                <label for="text" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit">Tempat Lahir</label>
                                <input type="text" id="email" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Asal kelahiran..." required />
    
                                <label for="date" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit">Tanggal Lahir</label>
                                <input type="text" id="email" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="DD/MM/YY" required />
    
                                <label for="button" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit mb-2">Jenis Kelamin</label>
                                <div class="flex justify-between mb-2 pr-36">
                                    <div class="flex items-center">
                                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-5 h-5 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-20">
                                        <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-600">Pria</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-5 h-5 text-pink-600 bg-gray-100 border-gray-300 focus:ring-pink-500 dark:focus:ring-pink-600 dark:ring-offset-gray-800 focus:ring-20">
                                        <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-600">Wanita</label>
                                    </div>
                                </div>
                                {{-- Start --}}
                                <div class="flex gap-4 w-max">
                                    <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="black">
                                            <input name="color" type="radio"
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                            id="black" />
                                            <span
                                            class="absolute text-gray-900 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                            </svg>
                                            </span>
                                        </label>
                                        </div>
                                        <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="gray">
                                            <input name="color" type="radio"
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-gray-900 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                                            id="gray" />
                                            <span
                                            class="absolute text-gray-900 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                            </svg>
                                            </span>
                                        </label>
                                        </div>
                                        <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="blue">
                                            <input name="color" type="radio"
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-blue-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-blue-500 checked:before:bg-blue-500 hover:before:opacity-10"
                                            id="blue" />
                                            <span
                                            class="absolute text-blue-500 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                            </svg>
                                            </span>
                                        </label>
                                        </div>
                                        <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="green">
                                            <input name="color" type="radio"
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-green-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-green-500 checked:before:bg-green-500 hover:before:opacity-10"
                                            id="green" />
                                            <span
                                            class="absolute text-green-500 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                            </svg>
                                            </span>
                                        </label>
                                        </div>
                                        <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="red">
                                            <input name="color" type="radio"
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-red-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-red-500 checked:before:bg-red-500 hover:before:opacity-10"
                                            id="red" />
                                            <span
                                            class="absolute text-red-500 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                            </svg>
                                            </span>
                                        </label>
                                        </div>
                                        <div class="inline-flex items-center">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="amber">
                                            <input name="color" type="radio"
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-pink-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-amber-500 checked:before:bg-amber-500 hover:before:opacity-10"
                                            id="amber" />
                                            <span
                                            class="absolute transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 text-pink-500 peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                            </svg>
                                            </span>
                                        </label>
                                        </div>
                                        <div class="inline-flex items-center opacity-50 pointer-events-none">
                                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="purple">
                                            <input name="color" type="radio" disabled
                                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-full border border-blue-gray-200 text-purple-500 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-purple-500 checked:before:bg-purple-500 hover:before:opacity-10"
                                            id="purple" />
                                            <span
                                            class="absolute text-purple-500 transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 16 16" fill="currentColor">
                                                <circle data-name="ellipse" cx="8" cy="8" r="8"></circle>
                                            </svg>
                                            </span>
                                        </label>
                                        </div>
                                    </div>  
                                    {{-- END --}}

                                    {{-- TES START--}}


                                    {{-- TES END --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section>
    
    {{-- Daftar Akun End --}}

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

</html>