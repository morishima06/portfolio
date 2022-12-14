<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <script src="https://cdn.tailwindcss.com"></script>
        <script src="https://kit.fontawesome.com/1badf6b7f8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css')  }}" >
        <script src="{{ asset('/js/swiper/swiper-bundle.min.js') }}"></script>


    </head>
    <body class="antialiased ">
    @include('layouts.header')
    <section class="pt-24  ">
            <div class="px-3">
            <h1 class="w-full  text-lg text-black font-bold border-b  mb-3  border-black">???????????????</h1>
            </div>
            <!-- ?????????????????????????????? -->
                <div class="swiper  ">
                    <!-- ??????????????????wrapper -->
                    <div class="swiper-wrapper ">
                    <!-- ???????????? -->
                        <div class="swiper-slide   h-full    px-3 ">
                                <a href="{{route('category', ['category' => 'wear' ])}}" class=" bg-slate-400"> <img src="{{ asset('image/apparel.jpg')}}" class="h-80 sm:h-96 object-cover" alt=""></a>
                                <h2 class=" px-1 text-white font-semibold bg-black  inline-block  "> ?????????</h2>
                        </div>
                        <div class="swiper-slide   w-full  px-3 ">
                                <a href="{{route('category', ['category' => 'shoes'])}}" class=" bg-slate-400"> <img src="{{ asset('image/shoes.jpg')}}" class="h-80 sm:h-96 object-cover w-full " alt=""></a>
                                <h2 class="px-1 text-white font-semibold bg-black inline-block  "> ????????????</h2>
                        </div>
                        <div class="swiper-slide   w-full  px-3">
                                <a href="{{route('category', ['category' => 'accessories'])}}" class=" bg-slate-400"> <img src="{{ asset('image/accessories.jpg')}}" class="h-80 sm:h-96 object-cover" alt=""></a>
                                <h2 class="px-1 text-white font-semibold bg-black inline-block  "> ??????????????????</h2>
                        </div>
                        <div class="swiper-slide   w-full   px-3">
                            <a  href="{{route('category', ['category' => 'lifestyle'])}}" class=" bg-slate-400"> <img src="{{ asset('image/lifestyle.jpg')}}" class="h-80 sm:h-96 object-cover" alt=""></a>
                            <h2 class="px-1 text-white font-semibold bg-black  inline-block  ">?????????????????????</h2>
                        </div>
                    </div>
                    <div class="swiper-button-prev after:bg-[url('./image/left_button.png')] after:bg-no-repeat after:w-12 after:h-12  after:bg-contain w-10 h-10   pl-2 pb-1  sm:pt-6"></div>
                    <div class="swiper-button-next  after:bg-[url('./image/right_button.png')] after:bg-no-repeat after:w-12 after:h-12   after:bg-contain w-10 h-10   pr-2 pb-1  sm:pt-6"></div>
                </div>

            <div class="flex justify-center items-center mt-8 sm:mt-12 mb-5 ">
                <h2 class=" border-black border   text-sm font-semibold"><a  href="{{route('category', ['category' => 'all'])}}" class="p-2 inline-block w-full h-wull" href="">?????????????????????????????????</a></h2>
            </div>
            
            <div class="px-3">
                <h1 class="w-full text-lg text-black font-bold border-b pb mb-3 mt-12  border-black">????????????</h1>
                <h2 class="text-sm  text-slate-600 font-semibold  mb-2 line-through"><span class="  w-full h-wull border-b border-slate-600 pb-1 " href="">?????????????????????</span> </h2>
            
                <div class="flex mb-16">
                    <div class="sm:flex w-1/2 inline-block">
                        <div class="w-full sm:w-1/2">
                            <span class="inline-block mb-1 text-sm font-bold">#</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => '1017 ALYX 9SM'])}}">1017 ALYX 9SM</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => '424'])}}">424</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">A</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'APC'])}}">APC</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'ADIDAS'])}}">ADIDAS</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">B</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'BURBERRY'])}}">BURBERRY</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">C</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'C.P COMPANY'])}}">C.P COMPANY</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'CONVERSE'])}}">CONVERSE</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">E</span>
                            <ul>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'EAST PACK'])}}">EAST PACK</a></li>
                            </ul>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <span class="inline-block mb-1 text-sm font-bold">F</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'FEAR OF GOD'])}}">FEAR OF GOD</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'FOLK'])}}">FOLK</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">H</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'HUMAN MADE'])}}">HUMAN MADE</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">J</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'JIL SANDER'])}}">JIL SANDER</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">L</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'LACOSTE'])}}">LACOSTE</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">M</span>
                            <ul>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'MAISON MALGELA'])}}">MAISON MALGELA</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'MAISON KITUNE'])}}">MAISON KITUNE</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'MONCLER'])}}">MONCLER</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sm:flex w-1/2 inline-block">
                        <div class="w-full sm:w-1/2">
                            <span class="inline-block mb-1 text-sm font-bold">N</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'NANAMICA'])}}">NANAMICA</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'NEIGHBORHOOD'])}}">NEIGHBORHOOD</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'NEW BALANCE'])}}">NEW BALANCE</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'NIKE'])}}">NIKE</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">O</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'OFF-WHITE'])}}">OFF-WHITE</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'OAMC'])}}">OAMC</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">P</span>
                            <ul>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'PALM ANGLES'])}}">PALM ANGLES</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'PRADA'])}}">PRADA</a></li>
                            </ul>
                        </div>

                        <div class="w-full sm:w-1/2">
                            <span class="inline-block mb-1 text-sm font-bold">R</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'RAF SIMONS'])}}">RAF SIMONS</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'RHUDE'])}}">RHUDE</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">S</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'STUSSY'])}}">STUSSY</a></li>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'STONE ILAND'])}}">STONE ILAND</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">U</span>
                            <ul class="mb-2">
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'UNDER COVER'])}}">UNDER COVER</a></li>
                            </ul>
                            <span class="inline-block mb-1 text-sm font-bold">V</span>
                            <ul>
                                <li class="text-xs font-bold"><a href="{{route('brands',['brand' => 'VANS'])}}">VANS</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    @include('layouts.footer')
    </body>
    <script src="{{ asset('/js/swiper/single_config.js') }}"></script>


