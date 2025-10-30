<?= $this->extend('template/layout') ?>

<?= $this->section('content') ?>

<head>
    <style>
        /* Default font */
        body {
            font-family: 'Quicksand', sans-serif;
        }

        /* Font MISS RHINETTA */
        @font-face {
            font-family: 'MissRhinetta';
            src: url('<?= base_url(' assets/fonts/MISS-RHINETTA.woff') ?>') format('woff');
            font-weight: normal;
            font-style: normal;
        }

        /* Font RENE BIEDER MILLIARD BOLD */
        @font-face {
            font-family: 'MilliardBold';
            src: url('<?= base_url(' assets/fonts/RENE-BIEDER-MILLIARD-BOLD.woff2') ?>') format('woff2');
            font-weight: bold;
            font-style: normal;
        }

        /* Font ADOLPHUS */
        @font-face {
            font-family: 'Adolphus';
            src: url('<?= base_url(' assets/fonts/ADOLPHUS.woff2') ?>') format('woff2');
            font-weight: bold;
            font-style: italic;
        }

        .font-adolphus {
            font-family: 'Adolphus', sans-serif;
            font-weight: normal;
            letter-spacing: 0.05em;
        }

        /* Style font MISS RHINETTA */
        .font-rhinetta {
            font-family: 'MissRhinetta', cursive !important;
            font-size: 3.5rem;
            font-weight: 400;
            letter-spacing: 0.05em;
        }

        /* Style font MILLIARD BOLD */
        .font-milliard-global {
            font-family: 'MissRhinetta', cursive !important;
        }

        /* Style font MILLIARD BOLD */
        .font-rhinetta-global {
            font-family: 'MissRhinetta', cursive !important;
            font-size: 2.5rem;
            font-weight: 400;
        }

        .font-milliard {
            font-family: 'MilliardBold', sans-serif !important;
            font-size: 1.7rem;
            font-weight: 700;
            letter-spacing: 0.2rem;
        }

        .animate-click {
            animation: clickEffect 1.5s ease-in-out infinite;
        }

        @keyframes clickEffect {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(0.95);
            }
        }

        .hero-bg-gradient {
            background-image: url("<?= base_url('assets/background LP 1.webp') ?>");
            background-size: cover;
            background-position: center 180%;
        }

        .section2-bg-gradient {
            background-image: url("<?= base_url('assets/bg-section2.webp') ?>");
            background-size: cover;
            background-position: center 50%;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        a {
            font-family: 'Quicksand', sans-serif;
        }

        .text-highlight {
            color: #22d3ee;
        }

        /* Mobile Responsive Styles */
        @media (max-width: 768px) {

            /* Adjust font sizes */
            .font-rhinetta {
                font-size: 2rem;
                /* Reduced for mobile */
            }

            .font-milliard {
                font-size: 1.2rem;
                letter-spacing: 0.1rem;
            }

            .font-adolphus {
                font-size: 1.5rem;
            }

            /* Adjust header and logo */
            header {
                padding: 1rem;
                margin-top: 2rem;
            }

            .absolute.mx-[60px] {
                margin: -20px 0 0 20px;
            }

            .absolute.mx-[60px] img {
                width: 100px;
                /* Smaller logo on mobile */
            }

            /* Adjust navigation */
            nav .lg\:flex {
                display: none;
                /* Hide nav links on mobile */
            }

            /* Adjust hero section */
            .min-h-screen.hero-bg-gradient {
                background-position: center 100%;
            }

            .relative.flex {
                padding: 0 1rem;
            }

            .w-full.lg\:w-1\/1 {
                padding: 0 1rem;
            }

            .text-lg {
                font-size: 1rem;
            }

            .text-sm {
                font-size: 0.875rem;
            }

            .lg\:pl-10 {
                padding-left: 0;
            }

            /* Adjust images */
            .inline-block.mb-1 img {
                width: 60px;
                /* Smaller images on mobile */
            }

            .w-36.h-36 {
                width: 100px;
                height: 100px;
            }

            /* Adjust button and text */
            .absolute.w-full.h-40 {
                margin-top: 300px;
                margin-left: 0;
                text-align: center;
            }

            button.font-milliard-global {
                font-size: 0.9rem;
                padding: 0.5rem 1rem;
                letter-spacing: 0.1em;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
            }

            span.absolute.text-white {
                font-size: 0.8rem;
                bottom: 2rem;
                left: 50%;
                transform: translateX(-50%);
                margin-left: 0;
            }

            /* Adjust section 2 */
            .bg-\[\#000d1a\] {
                margin-top: -50px;
                padding: 2rem 1rem;
            }

            .bg-\[\#000d1a\] h2 {
                font-size: 2rem;
            }
        }

        @media (max-width: 480px) {
            .font-rhinetta {
                font-size: 1.5rem;
            }

            .font-milliard {
                font-size: 1rem;
            }

            .absolute.mx-[60px] img {
                width: 80px;
            }

            .inline-block.mb-1 img {
                width: 40px;
            }

            .w-36.h-36 {
                width: 80px;
                height: 80px;
            }

            button.font-milliard-global {
                font-size: 0.8rem;
                padding: 0.4rem 0.8rem;
            }

            span.absolute.text-white {
                font-size: 0.7rem;
            }
        }
    </style>
</head>

<body class="text-white">

    <div class="min-h-screen hero-bg-gradient overflow-hidden relative">
        <header class="p-4 md:px-12 text-center flex m-auto mt-10 relative z-20">
            <nav class="flex items-center text-center m-auto justify-between">
                <div class="hidden lg:flex items-center space-x-6 text-sm">
                    <a href="#" class="text-cyan-400 hover:text-white transition duration-300">HOME</a>
                    <a href="#" class="text-white hover:text-cyan-400 transition duration-300">ABOUT</a>
                    <a href="#" class="text-white hover:text-cyan-400 transition duration-300">SERVICES</a>
                    <a href="#" class="text-white hover:text-cyan-400 transition duration-300">PRODUCT</a>
                    <a href="#" class="text-white hover:text-cyan-400 transition duration-300">INNOVATION</a>
                    <a href="#" class="text-white hover:text-cyan-400 transition duration-300">SIMULATION</a>
                    <a href="#" class="text-white hover:text-cyan-400 transition duration-300">BEAUTYVERSITY</a>
                    <span class="text-gray-500">|</span>
                    <a href="#" class="text-white hover:text-cyan-400 transition duration-300">FAQ</a>
                    <a href="#" class="text-white hover:text-cyan-400 transition duration-300">LOGIN</a>
                </div>
            </nav>
            <div class="absolute mx-[60px]" style="margin: -40px 0 0 40px;">
                <img src="<?= base_url('assets/logo.webp') ?>" alt="" style="width: 140px;">
            </div>
        </header>

        <div class="absolute w-full h-40 ml-[553px]" style="margin: 10px 0 0 250px;">
           <img width="600" class="" src="<?= base_url('assets/Vector Smart Object.webp') ?>" alt="" style="">
        </div>
        <div class="relative flex flex-col lg:flex-row items-center pb-16 md:px-[80px] z-10">
            <div class="w-full lg:w-1/1 px-4 md:px-0 lg:pr-16 space-y-4">
                <!-- Font Miss Rhinetta -->
                <h1 class="font-rhinetta text-cyan-300">
                    Where Science and Innovation Meet Beauty
                </h1>

                <!-- Font Milliard Bold -->
                <div class="inline-block mb-1">
                    <p class="font-milliard text-white leading-tight flex">
                        <img width="100" src="<?= base_url('assets/layer646.webp') ?>" alt=""
                            style="transform: scaleX(-1);">
                        <span class="mx-2">LUNARAY BEAUTY INNOVATION</span>
                        <img width="100" src="<?= base_url('assets/layer646.webp') ?>" alt="">
                    </p>
                </div>

                <p class="text-lg text-white leading-snug">
                    Empowered by Scientists, Research, AI Technology, and Smart Manufacturing. <br>
                    <span>Shaping the <span class="text-highlight font-semibold">Now & Next of Beauty
                            Manufacturing.</span></span>
                </p>

                <div class="lg:pl-10 space-y-4">
                    <p class="text-sm text-white leading-snug">
                        Dari laboratorium hingga cahaya yang menyentuh kulit, setiap formula di Lunaray adalah harmoni
                        dari perjalanan sains, pengalaman, dan ketulusan.
                    </p>
                    <p class="text-sm text-white leading-snug">
                        Dengan visi menjadi pabrik maklon kosmetik terbaik di Indonesia, setiap inovasi di Lunaray lahir
                        dari perpaduan sains, teknologi, keahlian, kolaborasi ilmiah dan estetika. Dari riset hingga
                        produksi, kami menjaga presisi dan keindahan di setiap langkah. Kami percaya bahwa setiap
                        molekul, setiap formula, dan setiap penelitian adalah langkah menuju kecantikan yang lebih
                        cerdas, beretika, dan berkelanjutan.
                    </p>

                    <p class="text-sm font-bold mt-1 text-cyan-400 leading-snug">
                        Driven by Research. Perfected by Expertise.
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-1/2 relative h-[550px] lg:mt-0">
                <div class="absolute bottom-10 right-10 w-36 h-36 overflow-hidden z-10 flex m-auto">
                    <div class="flex flex-col items-center justify-end h-full pb-2">
                        <img src="<?= base_url('assets/luna-ask-me-update.webp') ?>" alt="AI Avatar"
                            class="w-full h-full object-cover absolute top-0 left-0 animate-click">
                    </div>
                </div>
            </div>
           
            <div class="absolute w-full h-40 ml-[553px]" style="margin: 355px 0 0 -60px;">
                <img width="700" class="" src="<?= base_url('assets/Vector Smart Object-1.webp') ?>" alt="" style="">
             </div>
            <div class="absolute w-full h-40 mt-[405px]" style="margin: 405px 0 0 515px;">
                <button
                    class="rounded-lg font-milliard-global absolute bottom-10 left-1/2 transform -translate-x-1/2 
                            md:bottom-16 md:left-40 md:transform-none 
                            px-2 py-1 text-sm italic font-extrabold text-white 
                            bg-transparent border-2 border-cyan-400 
                            hover:bg-cyan-400/10 transition duration-300 
                            focus:outline-none tracking-widest"
                    style="letter-spacing: 0.15em;">
                    EXPLORE
                </button>

                <span class="absolute text-white bottom-[2.75rem] left-1/2 transform -translate-x-1/2 
                            md:bottom-[4.5rem] md:left-[17rem] md:transform-none 
                            text-xm md:text-base italic ml-4">
                    our vision and value
                </span>
            </div>

        </div>
    </div>
    
    <div class="bg-[#000d1a] py-12 px-4 md:px-12 text-center font-adolphus "
        style="z-index: 9999 !important;">
        <h2 class="text-3xl md:text-5xl lg:text-6xl font-script text-white italic tracking-wider">
            Beauty Manufacturing Made Simple
        </h2>
    </div>

    <div class="min-h-screen section2-bg-gradient overflow-hidden">
        <!-- Header Section -->
        <div class="text-center py-10">
            <h1 class="text-4xl font-bold text-black ">Transforming Dreams Into Reality</h1>
        </div>
        <!-- Product Tabs -->
        <div class="flex flex-wrap gap-2 justify-center text-center">
            <div class="bg-black p-2 rounded-lg">
                <button
                    class="px-3 py-1 font-semibold text-cyan-400 hover:text-cyan-300 cursor-pointer rounded-lg hover:bg-gray-700">Skincare</button>
                <button
                    class="px-3 py-1 font-semibold text-white hover:text-cyan-300 cursor-pointer rounded-lg hover:bg-gray-700">Bodycare</button>
                <button
                    class="px-3 py-1 font-semibold text-white hover:text-cyan-300 cursor-pointer rounded-lg hover:bg-gray-700">Haircare</button>
                <button
                    class="px-3 py-1 font-semibold text-white hover:text-cyan-300 cursor-pointer rounded-lg hover:bg-gray-700">Babycare</button>
                <button
                    class="px-3 py-1 font-semibold text-white hover:text-cyan-300 cursor-pointer rounded-lg hover:bg-gray-700">Mommycare</button>
                <button
                    class="px-3 py-1 font-semibold text-white hover:text-cyan-300 cursor-pointer rounded-lg hover:bg-gray-700">Mancare</button>
                <button
                    class="px-3 py-1 font-semibold text-white hover:text-cyan-300 cursor-pointer rounded-lg hover:bg-gray-700">Therapeutic</button>
                <button
                    class="px-3 py-1 font-semibold text-white hover:text-cyan-300 cursor-pointer rounded-lg hover:bg-gray-700">Decorative</button>
                <button
                    class="px-3 py-1 font-semibold text-white hover:text-cyan-300 cursor-pointer rounded-lg hover:bg-gray-700">Perfume</button>
            </div>
        </div>

        <!-- Product Cards -->
        <div class="p-4 flex flex-wrap justify-center gap-4">
            <div class="flex-shrink-0 w-80 relative overflow-hidden rounded-lg">
                <div class="relative flex flex-col items-center justify-center">
                    <img class="w-full h-72 object-cover" src="<?= base_url('assets/body_wash_lunaray.webp') ?>"
                        alt="Body Wash">
                    <div class="">
                        <span class="justify-center ml-auto text-xl text-center text-black flex">Body Wash</span>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 w-80 relative overflow-hidden rounded-lg">
                <div class="relative flex flex-col items-center justify-center">
                    <img class="w-full h-72 object-cover" src="<?= base_url('assets/hair_conditioner_lunaray.webp') ?>"
                        alt="Hair Conditioner">
                    <div class="">
                        <span class="justify-center ml-auto text-xl text-center text-black flex">Hair Conditioner</span>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 w-80 relative overflow-hidden rounded-lg">
                <div class="relative flex flex-col items-center justify-center">
                    <img class="w-full h-72 object-cover" src="<?= base_url('assets/hair_shampoo_lunaray.webp') ?>"
                        alt="Hair Shampoo">
                    <div class="">
                        <span class="justify-center ml-auto text-xl text-center text-black flex">Hair Shampoo</span>
                    </div>
                </div>
            </div>
        </div>

        <section class="relative py-8 px-4 text-center">
            <div class="max-w-5xl mx-auto">
                <!-- Kutipan -->
                <p class="font-rhinetta-global text-2xl md:text-3xl italic font-semibold text-black leading-snug">
                    “From research to radiance
                </p>
                <p
                    class="font-rhinetta-global text-2xl md:text-3xl -mt-7 italic font-semibold text-black leading-snug">
                    every drop tells the story of science meet beauty.”
                </p>

                <!-- Deskripsi -->
                <p class="mt-4 text-black md:text-lg leading-snug text-center mx-auto">
                    Sebagai maklon skincare berbasis riset ilmiah, Lunaray menjembatani sains dan estetika untuk
                    melahirkan
                    produk kosmetik yang tidak hanya indah secara tampilan, tapi juga bermakna secara ilmiah dan etis.
                    Melalui
                    riset multidisipliner, keahlian, pengalaman, teknologi, dan kolaborasi global, kami mewujudkan mimpi
                    setiap
                    brand menjadi inovasi yang berdaya saing tinggi yang membantu mewujudkan impian anda.
                </p>
            </div>

            <!-- Tombol Discover -->
            <div class="absolute top-20 right-4 md:right-56">
                <a href="#"
                    class="border border-blue-400 text-blue-600 font-semibold rounded-lg px-5 py-1 text-sm hover:bg-blue-50 transition inline-block">
                    DISCOVER
                    <span class="block text-xs text-blue-400 font-normal -mt-1">our product range</span>
                </a>
            </div>
        </section>
    </div>


   <div class="flex justify-center min-h-screen">
    <div class="flex flex-col md:flex-row w-full">
        
        <!-- Card 1 -->
        <div class="relative w-full md:w-1/2 rounded-none  overflow-hidden"
            style="background-image: url('<?= base_url('assets/Background LP 3 kiri.webp') ?>'); background-size: cover; ">
        <div class="relative flex items-end ">
            <div class="p-6 text-white" style="margin: 700px 0 0 50px;">
                <h2 style="font-size: 4rem;" class="text-2xl font-rhinetta text-[#07143c]  font-bold">In Lunaray,  <br> creation begins with purpose</h2>
            </div>
        </div>
        </div>

        <!-- Card 2 -->
        <div class="relative w-full md:w-1/2 rounded-none overflow-hidden"
            style="background-image: url('<?= base_url('assets/Background LP 3 kanan.webp') ?>'); background-size: cover; ">
        <!-- Overlay biru transparan -->
        <div class="absolute inset-0 bg-[#07143c]/90"></div>

        <div class="relative flex items-end " >
            <div class="p-6 text-black ">
            <h2 class="text-2xl md:text-3xl font-bold mb-2">The Scientist's Choice</h2>
            <img src="<?= base_url('assets/elemen putih kanan.webp') ?>" class="absolute" alt="">
            <p class="text-sm md:text-base text-gray-100">
                Setiap formulasi unggulan ini kami pilih berdasarkan hasil riset ilmiah dan pengujian mendalam.
                Dirancang bukan sekadar menarik — tapi efektif, aman, dan bermanfaat bagi kulit anda.
            </p>
            </div>
        </div>
        </div>
        
    </div>
    </div>


</body>
<?= $this->endSection() ?>
