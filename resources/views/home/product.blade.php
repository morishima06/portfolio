<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/1badf6b7f8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.min.css" />
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" >
    <link rel="stylesheet" href="{{ asset('/css/swiper-bundle.min.css')  }}" >
    <script src="{{ asset('/js/swiper/swiper-bundle.min.js') }}"></script>


    <title>Document</title>
</head>
<body class="">
    @include('layouts.header')
    <div class="sm:flex sm:justify-center pt-28 mb-12 mx-2">
        <!-- Slider main container -->
        <div class=" ">
            <div class=" flex justify-center">
                <div class="swiper mySwiper2  w-full aspect-square  sm:w-80 sm:h-80 lg:w-96 lg:h-96">
                <!-- Additional required wrapper -->
                    <div class="swiper-wrapper  ">
                        <!-- Slides -->
                        <div class="swiper-slide flex justify-center "><img src="../{{$product[0]->image_path1}}" alt="" class=" mx-2  sm:w-80 sm:h-80 lg:w-96 lg:h-96 "></div>
                        <div class="swiper-slide  {{ $product[0]->image_path2 == null ? 'hidden':''}}"><img src="{{asset($product[0]->image_path2)}}" alt="" class="w-full h-full sm:w-80 sm:h-80 lg:w-96 lg:h-96"></div>
                        <div class="swiper-slide  {{ $product[0]->image_path3 == null ? 'hidden':''}}"><img src="{{asset($product[0]->image_path3)}}" alt="" class=" w-full h-full sm:w-80 sm:h-80 lg:w-96 lg:h-96"></div>
                        <div class="swiper-slide  {{ $product[0]->image_path4 == null ? 'hidden':''}}"><img src="{{asset($product[0]->image_path4)}}" alt="" class=" w-full h-full sm:w-80 sm:h-80 lg:w-96 lg:h-96 "></div>
                    </div>
                <!-- ????????????????????????????????? -->
                    <div class="swiper-button-prev after:bg-[url('../image/left_button.png')] after:bg-no-repeat after:w-8 after:h-8  after:bg-contain w-8 h-8 pt-4"></div>
                    <div class="swiper-button-next after:bg-[url('../image/right_button.png')] after:bg-no-repeat after:w-8 after:h-8  after:bg-contain h-8 w-8 pt-4"></div>
                </div>
            </div>
            <div class="swiper mySwiper w-full  sm:w-80 lg:w-96 flex justify-center">
                <!-- Additional required wrapper -->
                    <div class="swiper-wrapper   sm:h-20  lg:h-24 ">
                        <!-- Slides -->
                        <div class="swiper-slide  cursor-pointer before:my-2  sm:w-20 sm:h-20 lg:w-24 lg:h-24 {{ $product[0]->image_path1 == null ? 'hidden':''}} "><img src="{{asset($product[0]->image_path1)}}" alt="" class="w-full h-full aspect-square sm:w-20 sm:h-20 lg:w-24 lg:h-24"></div>
                        <div class="swiper-slide  cursor-pointer before:my-2  sm:w-20 sm:h-20 lg:w-24 lg:h-24 {{ $product[0]->image_path2 == null ? 'hidden':''}} "><img src="{{asset($product[0]->image_path2)}}" alt="" class="w-full h-full aspect-square sm:w-20 sm:h-20 lg:w-24 lg:h-24"></div>
                        <div class="swiper-slide  cursor-pointer before:my-2  sm:w-20 sm:h-20 lg:w-24 lg:h-24 {{ $product[0]->image_path3 == null ? 'hidden':''}} "><img src="{{asset($product[0]->image_path3)}}" alt="" class="w-full h-full aspect-square sm:w-20 sm:h-20 lg:w-24 lg:h-24"></div>
                        <div class="swiper-slide  cursor-pointer before:my-2  sm:w-20 sm:h-20 lg:w-24 lg:h-24 {{ $product[0]->image_path4 == null ? 'hidden':''}} "><img src="{{asset($product[0]->image_path4)}}" alt="" class="w-full h-full aspect-square sm:w-20 sm:h-20 lg:w-24 lg:h-24"></div>
                    </div>
            </div>
        </div>

        <div class="w-full sm:w-80 flex justify-center sm:ml-4 md:ml-10 mt-2 sm:mt-0 ">
            <div class=" w-full">
                <h2 class="text-2xl  mx-2 sm:mx-0 font-medium ">{{$product[0]->brand_name}}</h2>
                <h2 class="text-xl  mx-2 sm:mx-0 font-light"> {{$product[0]->product_name}}</h2>
                <h3 class="text-2xl my-3 sm:mx-0 mx-2 font-medium">??{{$product[0]->price}}</h3>
                <button class="bg-black w-full text-white py-2 ">??????????????????</button>
            </div>
        </div>
    </div>
        @include('layouts.footer')

        <script src="{{ asset('/js/swiper/double_config.js') }}"></script>
</body>
</html>
