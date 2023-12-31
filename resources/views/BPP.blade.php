<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
    <style>
        /* body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        } */

        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        section {
            max-width: 800px;
            margin: 2rem auto;
            padding: 2rem;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, p {
            color: #333;
        }

        .promo-card {
            background-color: #f8f8f8;
            padding: 1rem;
            margin: 1rem 0;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .promo-card h2 {
            color: #e44d26;
        }

        /* footer {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        } */
    </style>
</head>

<body>

    {{-- NAVBAR --}}
    <nav
        class="top-0 h-[54px] fixed z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-[#61677A]">
        <svg width="28" height="31" viewBox="0 0 28 31" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_699_6406)" filter="url(#filter0_d_699_6406)">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7 6.125H18.375V8.75H7V6.125ZM7 13.125H21V15.75H7V13.125ZM7 20.125H18.375V22.75H7V20.125Z"
                    fill="white" />
            </g>
            <defs>
                <filter id="filter0_d_699_6406" x="-4" y="0" width="36" height="36" filterUnits="userSpaceOnUse"
                    color-interpolation-filters="sRGB">
                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                        result="hardAlpha" />
                    <feOffset dy="4" />
                    <feGaussianBlur stdDeviation="2" />
                    <feComposite in2="hardAlpha" operator="out" />
                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_699_6406" />
                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_699_6406" result="shape" />
                </filter>
                <clipPath id="clip0_699_6406">
                    <rect width="28" height="28" fill="white" />
                </clipPath>
            </defs>
        </svg>

        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
            <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start ">
                <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white"
                    href="#">Notus JS</a>
                <button
                    class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none"
                    type="button" onclick="toggleNavbar('example-collapse-navbar')">
                    <i class="text-white fas fa-bars"></i>
                </button>
            </div>
            <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden bg-gray-800"
                id="example-collapse-navbar">
                <ul class="flex flex-col lg:flex-row list-none mr-auto">
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-200 text-gray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://www.creative-tim.com/learning-lab/tailwind/js/overview/notus?ref=njs-register"><i
                                class="lg:text-gray-200 text-gray-400 far fa-file-alt text-lg leading-lg mr-2"></i>
                            Docs</a>
                    </li>
                </ul>
                <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
                    <li class="inline-block relative">
                        <a class="lg:text-white lg:hover:text-gray-200 text-gray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="#pablo" onclick="openDropdown(event,'demo-pages-dropdown')">
                            Demo Pages
                        </a>
                        <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48"
                            id="demo-pages-dropdown">
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-gray-400">
                                Admin Layout
                            </span>
                            <a href="#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                Dashboard
                            </a>
                            <a href="#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                Settings
                            </a>
                            <a href="#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                Tables
                            </a>
                            <a href="#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                Maps
                            </a>
                            <div class="h-0 mx-4 my-2 border border-solid border-gray-100"></div>
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-gray-400">
                                Auth Layout
                            </span>
                            <a href="#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                Login
                            </a>
                            <a href="#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                Register
                            </a>
                            <div class="h-0 mx-4 my-2 border border-solid border-gray-100"></div>
                            <span
                                class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-gray-400">
                                No Layout
                            </span>
                            <a href="#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                Landing
                            </a>
                            <a href=".#"
                                class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700">
                                Profile
                            </a>
                        </div>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-200 text-gray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F"
                            target="_blank"><i
                                class="lg:text-gray-200 text-gray-400 fab fa-facebook text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Share</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-200 text-gray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F&amp;text=Start%20your%20development%20with%20a%20Free%20Tailwind%20CSS%20and%20JavaScript%20UI%20Kit%20and%20Admin.%20Let%20Notus%20JS%20amaze%20you%20with%20its%20cool%20features%20and%20build%20tools%20and%20get%20your%20project%20to%20a%20whole%20new%20level."
                            target="_blank"><i
                                class="lg:text-gray-200 text-gray-400 fab fa-twitter text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Tweet</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="lg:text-white lg:hover:text-gray-200 text-gray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold"
                            href="https://github.com/creativetimofficial/notus-js?ref=njs-register" target="_blank"><i
                                class="lg:text-gray-200 text-gray-400 fab fa-github text-lg leading-lg"></i><span
                                class="lg:hidden inline-block ml-2">Star</span></a>
                    </li>
                    <li class="flex items-center">
                        <a class="bg-white text-gray-700 active:bg-gray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150"
                            href="https://www.creative-tim.com/product/notus-js?ref=njs-index" target="_blank">
                            <i class="fas fa-arrow-alt-circle-down"></i> Download
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- SIDEBAR --}}

    <div class="bg-[#D8D9DA] h-screen fixed text-[#2D3748] w-[343px] top-0">
        <div class="pt-[70px] h-full flex flex-col justify-between">
            <h1 class="text-center text-[26px] font-semibold">
                Project PPL
            </h1>
            <div>
                <ul>
                    <li class="shadow bg-[#EDF2F7] py-2 my-5 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="promosi">Promosi></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="staff-manajemen" >Manajemen staff></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="vendor-manajemen">Manajemen Vendor></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="klaim-manajemen">Manajemen Klaim></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="persetujuan">Manajemen Persetujuan></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="keuangan">Manajemen Keuangan></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="/gudang-manajemen">Manajemen Gudang></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="/outlet-manajemen">Manajemen Outlet></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="BPP"class="text-red-600">Manajemen BPP></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="SummaryBPP">Manajemen Summary BPP></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="user">Manajemen User></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="laporan">Pelaporan></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="tunggal">Manajemen Tanggal></a>
                    </li>
                </ul>
            </div>
            <button class="bg-[#F15858] mx-6 text-[24px] my-5 mb-7">
                Dashboard
            </button>
        </div>
    </div>
    <section>
         {{-- Menu --}}
         <div class="mt-[70px] text-[#2D3748] text-sm w-full mb-4">
            <ul class="flex">
                <li>
                    <a href="">Lorem > </a>
                </li>
                <li>
                    <a href="">Lorem > </a>
                </li>
                <li>
                    <a href="" class="text-red-500">Lorem > </a>
                </li>
            </ul>
        </div>
        <h2>Welcome to Our Special Offers!</h2>
        <p>Discover exclusive promotions tailored just for you.</p>
    
        <div class="promo-card">
            <h2>Special Deal 1</h2>
            <p>Save 20% on selected items. Limited time offer!</p>
        </div>
    
        <div class="promo-card">
            <h2>Flash Sale</h2>
            <p>Get an extra 15% off during our 24-hour flash sale. Don't miss out!</p>
        </div>
    
        <div class="promo-card">
            <h2>Buy One Get One Free</h2>
            <p>Buy any product, and get a second one for free. Limited stock available!</p>
        </div>
    </section>

</body>

</html>
