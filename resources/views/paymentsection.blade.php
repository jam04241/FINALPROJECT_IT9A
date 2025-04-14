<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>


<body class="font-sans h-screen w-full">
    <!-- MAIN BODY -->
    <div class="bg-white-100 text-black/100 h-screen w-full flex flex-col">

        <!-- HEADER LOCATE: resources/views/profile/partials/header.blade.php-->
        @section('content')
        @include('profile.partials.userheader')

        <!-- Main Content -->
        <main class="flex-1 mt-16">
            <!-- Hero Section -->
            <!-- Hero Section -->
            <!-- FIRST CONTAINER -->
            <section class="relative bg-[#0f1021] text-white py-50 text-center flex flex-col justify-center">
                <div class="container">
                    <div class="content">



                    </div>
                    <div class="content">

                    </div>
                </div>

            </section>



            <!-- Social Media and Copyright -->
            <div class="mt-10">
                <img src="{{ asset('assets/bmp_logo.png') }}" alt="BMP Footer Logo" class="mx-auto h-14">
                <div class="flex justify-center space-x-6 mt-4">
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-x-twitter text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-facebook text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-instagram text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-tiktok text-2xl"></i></a>
                    <a href="#" class="text-[#0f294c]"><i class="fab fa-github text-2xl"></i></a>
                </div>
                <p class="mt-5 text-sm text-center">© 2025, BMP Car Rental. All Rights Reserved</p>
            </div>
            </footer>

    </div>
    </main>
    </div>
</body>

</html>















{{-- <div class="absolute inset-0 flex justify-between">
    <img src="{{ asset('assets/carleft.svg') }}" class="w-[35%]" alt="Car Left">
    <img src="{{ asset('assets/carright.svg') }}" class="w-[35%]" alt="Car Right">
</div>
<div class="relative z-10 container mx-auto px-6">
    <h1 class="text-5xl font-bold uppercase">RENT A CAR <span class="text-[#ff335f] italic">TODAY</span>
    </h1>
    <p class="mt-2 text-lg uppercase font-semibold tracking-wide">PAYMENT SECTION</p>
    <p class="mt-2 text-sm max-w-2xl mx-auto">
        Find the perfect rental car for your family and enjoy a smooth, stress-free journey wherever you
        go.
        <br>
        With a wide range of comfortable and reliable vehicles, you get the freedom to travel on your
        terms!
    </p>
    <a href="#"
        class="mt-6 inline-block bg-white text-black px-6 py-3 rounded-md text-lg font-semibold hover:bg-gray-200 transition">
        BOOK NOW
    </a>
</div> --}}