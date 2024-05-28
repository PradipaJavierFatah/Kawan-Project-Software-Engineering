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
        <div class="container mx-auto">
            <div class="w-full flex justify-center mb-2">
                <img src="asset/login/Logo.png" alt="" width="200">
            </div>
    
            <div class="flex flex-wrap justify-center">
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-6 border-2 border-black">
                        <div class="py-8 px-8">
                            <img src="asset/login/statusbar-3.png" alt="" class="mx-auto flex justify-center pb-2">
                            <div class="mb-0">
                                <label for="whatsapp" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit">Whatsapp</label>
                                <input type="text" id="whatsapp" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan nomor WA kamu..." required />
                                

                                <label for="instagram" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit">Instagram</label>
                                <input type="text" id="instagram" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ketik username instagram..." required />

                                <label for="pekerjaan" class="block text-lg font-medium text-gray-900 dark:text-black font-Kanit">Pekerjaan</label>
                                <input type="text" id="pekerjaan" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Status kamu..." required />

                                
                                <div class="flex justify-between pt-4">
                                    <a href="daftarakun">
                                        <button type="submit" class="font-Kanit  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-base w-full sm:w-auto px-8 py-2.5 text-center dark:bg-primary dark:hover:bg-primary dark:focus:ring-pr dark:focus:ring-2 hover:shadow-lg hover:opacity-80 transistion duration-300 ease-in-out">Back</button>
                                    </a>
                                    <button type="submit" class="font-Kanit  text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-semibold rounded-lg text-base w-full sm:w-auto px-8 py-2.5 text-center dark:bg-secondery dark:hover:bg-secondery dark:focus:ring-sky-400 dark:focus:ring-2 hover:shadow-lg hover:opacity-80 transistion duration-300 ease-in-out">Next</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center">
            <h1>Sudah punya akun? <a href="login"><span class="cursor-pointer underline">Login disini</span></a></h1>
        </div>
    </section>
    
    {{-- Daftar Akun End --}}

</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/datepicker.min.js"></script>

</html>