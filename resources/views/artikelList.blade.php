<x-header>Artikel</x-header>
<x-navbar></x-navbar>
<!-- Mobile menu, hidden by default -->
<div id="mobile-menu-modal" class="hidden fixed inset-0 z-50 modal-overlay">
    <div
        class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
            <a href="#" class="-m-1.5 p-1.5 rounded-lg focus:outline-none focus:ring focus:ring-indigo-300">
                <span class="sr-only">Your Company</span>
                <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt=""
                    class="h-8 w-auto">
            </a>
            <button type="button" id="close-mobile-menu"
                class="-m-2.5 rounded-md p-2.5 text-gray-700 hover:bg-gray-100 transition">
                <span class="sr-only">Tutup menu</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                    <a href="/"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 transition">Home</a>
                    <a href="about"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 transition">About</a>
                    <a href="contact"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 transition">Contact</a>
                    <a href="artikel"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 transition">Article</a>
                </div>
                <div class="py-6">
                    <a href="#"
                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 transition">Log
                        in</a>
                </div>
            </div>
        </div>
    </div>
</div>
</header>

<main class="isolate pt-24 px-6 lg:px-8">
    <!-- Section: Artikel Terbaru -->
    <section id="articles" class="mx-auto max-w-4xl py-12 sm:py-16 lg:py-20">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 mb-8">Artikel Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Artikel-->
            @if ($artikelList->isEmpty())
                <div class="col-span-full text-center text-gray-500">
                    <p>Tidak ada data anggota tim.</p>
                </div>
            @else
                @foreach ($artikelList as $artikel)
                    <div
                        class="bg-white p-6 rounded-2xl shadow-lg border border-gray-200 hover:shadow-xl transition-shadow">
                        <h3 class="text-lg font-semibold leading-6 text-gray-900">
                            <a href="{{ $artikel->id }}"
                                class="hover:text-indigo-600 transition">{{ $artikel->title }}</a>
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            {{ Str::limit($artikel->body, 200) }}
                        </p>
                    </div>
                @endforeach
            @endif
            <div class="mt-12 text-center flex justify-center">
                <a href="/artikel"
                    class="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 transition">
                    &laquo; Kembali
                </a>
            </div>
    </section>
</main>


<!-- JavaScript untuk fungsionalitas menu mobile -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openMenuBtn = document.getElementById('open-mobile-menu');
        const closeMenuBtn = document.getElementById('close-mobile-menu');
        const mobileMenuModal = document.getElementById('mobile-menu-modal');

        openMenuBtn.addEventListener('click', () => {
            mobileMenuModal.classList.remove('hidden');
            document.body.style.overflow = 'hidden'; // Mencegah scrolling pada body
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenuModal.classList.add('hidden');
            document.body.style.overflow = ''; // Mengembalikan scrolling
        });
    });
</script>
<x-footer></x-footer>
