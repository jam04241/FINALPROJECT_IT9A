 <!-- Header -->
 <header class="fixed top-0 w-full bg-white text-black py-4 z-50">
    <div class="container mx-auto flex justify-between items-center px-6s">
        <!-- Logo -->
        <a href="#" class="flex items-center">
            <img src="{{asset('assets/bmp_logo.png')}}" alt="BMP Logo" class="h-8">
            <!-- Update with actual logo path -->
        </a>

        <!-- Navigation Menu -->
        @if (Route::has('login'))
        <nav class="flex space-x-8 uppercase font-semibold tracking-wide">
            @auth
                <a href="{{ url('/dashboard') }}" class="hover:text-gray-700 dark:hover:text-gray-300">Dashboard</a>
            @else
            <a href="#" class="hover:text-gray-700 dark:hover:text-gray-300">Home</a>
            <a href="{{ route('cars') }}" class="hover:text-gray-700 dark:hover:text-gray-300">Cars</a>
            <a href="{{ route('booking') }}" class="hover:text-gray-700 dark:hover:text-gray-300">Booking</a>
            <a href="#" class="hover:text-gray-700 dark:hover:text-gray-300">Contacts</a>
            <a href="{{ route('login') }}" class="hover:text-gray-700 dark:hover:text-gray-300">
                <i class="fa-solid fa-user text-lg"></i>
            </a>
            @endif
        </nav>
        @endif
    </div>
</header>