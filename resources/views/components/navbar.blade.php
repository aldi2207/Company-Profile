<body class="h-full">

    <!-- Header & Navigasi -->
    <header class="absolute inset-x-0 top-0 z-50">
        <nav class="flex items-center justify-between p-2 lg:px-8 shadow-lg shadow-grey-300/50" aria-label="Global">
            <div class="flex lg:flex-1">
                <a href="#" class="-m-1.5 p-1.5 rounded-lg focus:outline-none focus:ring focus:ring-indigo-300">
                    <span class="sr-only">Your Company</span>
                    <img src="{{ asset('img/logo.png') }}" alt="" class="h-auto w-20">
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" id="open-mobile-menu"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700 hover:bg-gray-100 transition">
                    <span class="sr-only">Buka menu utama</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                        aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                <a href="/"
                    class="text-sm font-semibold leading-6 text-gray-900 hover:text-amber-600 transition">Home</a>
                <a href="/about"
                    class="text-sm font-semibold leading-6 text-gray-900 hover:text-amber-600 transition">About</a>
                <a href="/contact"
                    class="text-sm font-semibold leading-6 text-gray-900 hover:text-amber-600 transition">Contact</a>
                <a href="/artikel"
                    class="text-sm font-semibold leading-6 text-gray-900 hover:text-amber-600 transition">Article</a>
                @if (Auth::guard('admin')->check())
                    <a href="/dashboard"
                        class="text-sm font-semibold leading-6 text-gray-900 hover:text-amber-600 transition">Dashboard</a>
            </div>
            {{-- Tombol Logout --}}
            <form method="POST" action="{{ route('logout') }}" class="hidden lg:flex lg:flex-1 lg:justify-end">
                @csrf
                <button type="submit"
                    class="logout-btn rounded-md bg-gray-200 px-3.5 py-2 text-sm font-semibold text-gray-800 shadow-xs hover:bg-gray-300">
                    Logout
                </button>
            </form>
        @else
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <a id = "open-login-modal" type = "button"
                    class="text-sm font-semibold leading-6 text-gray-900 hover:text-amber-600 transition hover cursor-pointer">Log
                    in <span aria-hidden="true">&rarr;</span></a>
            </div>
            @endif
        </nav>
