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
    {{-- Daftar Akun Start --}}
    <section id="daftarakun" class="pt-24 pb-0">
        <div class="container">
            <div class="w-full flex justify-center mb-2">
                <img src="asset/Logo.png" alt="" width="200">
            </div>
    
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10 border-2 border-black">
                        <div class="py-8 px-8">
                            <img src="asset/statusbar-1.png" alt="" class="mx-auto flex justify-center pb-2">
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

                                <div class="flex justify-center pt-4">
                                    <button type="submit" class="font-Kanit  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-base w-full sm:w-auto px-8 py-2.5 text-center dark:bg-secondery dark:hover:bg-secondery dark:focus:ring-sky-400 dark:focus:ring-2 hover:shadow-lg hover:opacity-80 transistion duration-300 ease-in-out">Next</button>
                                </div>
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