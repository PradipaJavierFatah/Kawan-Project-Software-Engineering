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
    {{-- <div class=" hidden md:block absolute inset-y-0 right-0 w-1/2 bg-primary z-0"></div> --}}
    
    {{-- Tes coba end--}}    
    <section id="forgetpassword" class="pt-32 pb-0">
        <div class="container">
            <div class="w-full px-4">
                <div class="max-w-xl mx-auto mb-16">
                    <img src="asset/Logo.png" alt="Logo" width="250">
                    <h1 class="text-6xl my-4 font-Kanit font-semibold flex">LUPA PASSWORD</h1>
                    <p>Masukkan email yang berhubungan dengan akunmu dan kami akan mengirim email serta panduan untuk mengatur ulang kata sandimu.</p>
                    <form class="pt-4 flex space-x-4"> <!-- Added flex and space-x-4 -->
                        <div class="max-w-xs flex-1"> <!-- Added flex-1 -->
                            <input type="email" id="email" class="font-Kanit bg-gray-50 border-2 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:border-gray-600 dark:placeholder-gray-400 dark:text-black dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukan email kamu..." required />
                        </div>
                        <div class="flex-shrink-0"> <!-- Added flex-shrink-0 -->
                            <button type="submit" class="font-Kanit text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-base px-8 py-2.5 text-center dark:bg-secondary dark:hover:bg-secondary dark:focus:ring-sky-400 dark:focus:ring-2 hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    

    {{-- Tes End --}}
</body>

</html>