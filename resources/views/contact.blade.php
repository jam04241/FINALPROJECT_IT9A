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

            <section class="relative bg-[#0f1021] text-white py-10 text-center">
                <!-- FIFTH CONTAINER -->
                <section
                    class="relative py-10 text-center bg-gray-100 dark:bg-gray-900 text-black dark:text-white min-h-screen flex flex-col justify-center">

                    <!-- Background Image -->
                    <img src="{{ asset('assets/body5/line_up_car.png') }}" alt="Line-up cars"
                        class="absolute top-0 left-0 w-full h-full object-cover opacity-50">

                    <!-- Content -->
                    <div class="relative z-10 flex flex-col items-center">

                        <!-- Heading -->
                        <h2 class="text-4xl font-bold">GET IN TOUCH</h2>
                        <p class="text-lg">Want to get in touch? We’d love to hear from you. Here’s how you can reach us
                        </p>

                        <!-- Contact Cards -->
                        <div class="flex flex-row items-center justify-center gap-10 mt-10">

                            <!-- Sales Contact -->
                            <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm text-center">
                                <img src="{{ asset('assets/body5/telephone.svg') }}" alt="telephone"
                                    class="h-20 mx-auto">
                                <h3 class="font-bold text-xl mt-4">TALK TO SALES</h3>
                                <p class="text-gray-600">Connect with our sales team for personalized recommendations
                                    and
                                    exclusive deals.</p>
                                <p class="mt-2 font-semibold text-blue-600">+639 123 456 88</p>
                                <p class="font-semibold text-blue-600">+639 987 621 31</p>
                            </div>

                            <!-- Email Contact -->
                            <div class="bg-white shadow-lg rounded-lg p-9 max-w-sm text-center">
                                <img src="{{ asset('assets/body5/message.svg') }}" alt="message" class="h-20 mx-auto">
                                <h3 class="font-bold text-xl mt-4">EMAIL US</h3>
                                <p class="text-gray-600">Reach out to us via email for inquiries, support, or assistance
                                    anytime.</p>
                                <p class="mt-2 font-semibold text-blue-600">bmpcarrentals@gmail.com</p>
                            </div>

                        </div>

                    </div>
                </section>
            </section>


            <!-- footer -->
            <div class="flex flex-col min-h-auto bg-white">
                <!-- Footer Section -->
                <footer class="bg-white py-10 text-[#0f294c] text-sm text-center">
                    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                        <!-- Quick Links -->
                        <div>
                            <h3 class="font-bold text-base">QUICK LINKS</h3>
                            <ul class="space-y-2 mt-2">
                                <li><a href="#" class="hover:underline text-sm">Home</a></li>
                                <li><a href="#" class="hover:underline text-sm">Cars</a></li>
                                <li><a href="#" class="hover:underline text-sm">Bookings</a></li>
                                <li><a href="#" class="hover:underline text-sm">Contacts</a></li>
                            </ul>
                        </div>

                        <!-- About Us -->
                        <div>
                            <h3 class="font-bold text-base">ABOUT US</h3>
                            <ul class="space-y-2 mt-2">
                                <li><a href="#" class="hover:underline text-sm">Services</a></li>
                                <li><a href="#" class="hover:underline text-sm">Rental Deals</a></li>
                                <li><a href="#" class="hover:underline text-sm">Car Brands</a></li>
                                <li><a href="#" class="hover:underline text-sm">Branches</a></li>
                            </ul>
                        </div>

                        <!-- Customer Support -->
                        <div>
                            <h3 class="font-bold text-base">CUSTOMER SUPPORT</h3>
                            <ul class="space-y-2 mt-2">
                                <li><a href="#" class="hover:underline text-sm">Help Center</a></li>
                                <li><a href="#" class="hover:underline text-sm">Terms and Conditions</a></li>
                                <li><a href="#" class="hover:underline text-sm">Privacy Policy</a></li>
                                <li><a href="#" class="hover:underline text-sm">Damage & Return Policy</a></li>
                            </ul>
                        </div>
                    </div>

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
                        <p class="mt-5 text-sm">© 2025, BMP Car Rental. All Rights Reserved</p>
                    </div>
                </footer>

            </div>
            <p>Explore Our Premium Car Brands for Rent
                Choose from a Wide Range of Trusted and Automakers.</p>
        </main>
    </div>
</body>

</html>