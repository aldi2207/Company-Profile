<x-header>Dashboard</x-header>
<x-navbar></x-navbar>
<x-mobile-menu></x-mobile-menu>

<div class="relative isolate px-6 lg:px-8">
    {{-- Decorative Background Top (Consistent with Home) --}}
    <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
            class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75">
        </div>
    </div>

    <div class="mx-auto max-w-4xl py-20 sm:py-32 lg:py-40">
        <div class="text-center">
            <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-6xl">
                Halo, {{ Auth::guard('admin')->user()->nama }}!
            </h1>
            <p class="mt-4 text-xl/8 font-medium text-gray-500">
                Selamat datang di Dashboard Anda. Ini adalah pusat kontrol untuk aktivitas Anda.
            </p>
        </div>

        {{-- Dashboard Content/Widgets --}}
        <div class="mt-16 grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

            {{-- Card 1: Informasi Profil --}}
            <div
                class="rounded-lg bg-white p-6 shadow-xl ring-1 ring-gray-900/5 transition duration-300 hover:shadow-2xl">
                <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                    <svg class="h-6 w-6 text-amber-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    Informasi Akun
                </h2>
                <p class="text-gray-600">Email: <strong>{{ Auth::guard('admin')->user()->email }}</strong></p>
                <p class="text-gray-600 mt-1">Terdaftar Sejak:
                    {{ Auth::guard('admin')->user()->created_at->format('d M Y') }}</p>
                <a href="#"
                    class="mt-4 inline-block text-sm font-semibold text-indigo-600 hover:text-indigo-800">Ubah Profil
                    &rarr;</a>
            </div>

            {{-- Card 2: Pengaturan Cepat --}}
            <div
                class="rounded-lg bg-white p-6 shadow-xl ring-1 ring-gray-900/5 transition duration-300 hover:shadow-2xl">
                <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                    <svg class="h-6 w-6 text-amber-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.5.308 1.11.395 1.757.266z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Pengaturan
                </h2>
                <p class="text-gray-600">Kelola preferensi notifikasi dan keamanan akun Anda.</p>
                <a href="#"
                    class="mt-4 inline-block text-sm font-semibold text-indigo-600 hover:text-indigo-800">Pergi ke
                    Pengaturan &rarr;</a>
            </div>

            {{-- Card 3: Link Utama --}}
            <div
                class="rounded-lg bg-white p-6 shadow-xl ring-1 ring-gray-900/5 transition duration-300 hover:shadow-2xl">
                <h2 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                    <svg class="h-6 w-6 text-amber-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Aktivitas
                </h2>
                <ul class="text-gray-600 space-y-2">
                    <li><a href="artikel" class="text-sm hover:text-amber-600">Lihat Postingan Anda</a></li>
                    <li><a href="/listcontact" class="text-sm hover:text-amber-600">List Contact From User</a></li>
                </ul>
            </div>
        </div>
    </div>

    {{-- Decorative Background Bottom (Consistent with Home) --}}
    <div aria-hidden="true"
        class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
            class="relative left-[calc(50%+3rem)] aspect-1155/678 w-144.5 -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-288.75">
        </div>
    </div>
</div>

<x-modal-login></x-modal-login>
<x-footer></x-footer>
