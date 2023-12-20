<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
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
                        <svg width="41" height="41" viewBox="0 0 41 41" fill="none"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle cx="20.5" cy="20.5" r="20.5" fill="url(#pattern0)" />
                        <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1"
                                height="1">
                                <use xlink:href="#image0_699_5799" transform="scale(0.00195312)" />
                            </pattern>
                            <image id="image0_699_5799" width="512" height="512"
                                xlink:href="data:image/png;base64,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" />
                        </defs>
                    </svg>
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
                    <li  class="bg-[#EDF2F7] shadow py-2 my-5 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="">Promosi></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="/staff-manajemen" class="text-red-600">Manajemen staff></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="">Manajemen Vendor></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="">Manajemen Klaim></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="">Manajemen Persetujuan></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="">Manajemen Keuangan></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="/gudang-manajemen">Manajemen Gudang></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="/outlet-manajemen">Manajemen Outlet></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="">Manajemen BPP></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="">Manajemen Summary BPP></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="">Manajemen User></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="">Pelaporan></a>
                    </li>
                    <li class="shadow bg-[#EDF2F7] py-2 my-4 font-semibold shadow-md shadow-gray-500 text-center">
                        <a href="">Manajemen Tanggal></a>
                    </li>
                </ul>
            </div>
            <button class="bg-[#F15858] mx-6 text-[24px] my-5 mb-7">
                Dashboard
            </button>
        </div>
    </div>
    <section class="ml-[400px] mr-[60px] py-1 mt-20">
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

        {{-- CONTENT --}}

        <div class="w-full bg-[#D8D9DA] px-7 py-7">
            <h1 class="text-md font-bold text-[18px] mb-6">
                Form Edit Gudang Virtual Manajemen
            </h1>
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-[400px]">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="id_staff">
                        ID Gudang
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="id_staff" type="text" placeholder="id" value="R004">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Nama Gudang
                    </label>
                    <input
                        class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="username" type="text" placeholder="username" value="SA'ID">
                    <p class="text-red-500 text-xs italic">Please input only text.</p>
                </div>
                <div class="flex items-center justify-between">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
        <footer class="pt-8 pb-6 mt-16">
            <div class="container mx-auto px-4 text-sm">
                <h1 class="font-bold">Copyright PPL Horeey</h1>
            </div>
        </footer>
    </section>

</body>

</html>
