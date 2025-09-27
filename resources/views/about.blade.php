<x-header>About</x-header>

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
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-indigo-600">About</a>
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
    <!-- Section: Kisah Kami -->
    <section class="mx-auto max-w-4xl py-12 sm:py-16 lg:py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 bg-white p-8 rounded-2xl shadow-lg border border-gray-200">
            <div class="flex flex-col justify-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 mb-6">Kisah Kami</h2>
                <p class="mb-4 text-gray-600">
                    Didirikan pada tahun 2020, perusahaan kami dimulai dengan visi sederhana: untuk memberdayakan
                    bisnis kecil dengan solusi web yang inovatif dan terjangkau. Kami percaya bahwa setiap ide hebat
                    layak mendapatkan platform yang indah.
                </p>
                <p class="text-gray-600">
                    Sejak saat itu, kami telah berkembang menjadi tim yang beragam, penuh dengan bakat-bakat dari
                    berbagai latar belakang, semuanya didedikasikan untuk satu tujuan: membantu klien kami mencapai
                    impian mereka.
                </p>
            </div>
            <div class="flex items-center justify-center">
                <img src="https://placehold.co/500x300/a3a3a3/ffffff?text=Our+Story" alt="Tim kami sedang bekerja sama"
                    class="rounded-lg shadow-md">
            </div>
        </div>
    </section>

    <!-- Section: Tim Kami -->
    <section class="mx-auto max-w-4xl py-12 sm:py-16 lg:py-20">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 text-center mb-12">Temui Tim Kami</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @if ($aboutData->isEmpty())
                <div class="col-span-full text-center text-gray-500">
                    <p>Tidak ada data anggota tim.</p>
                </div>
            @else
                @foreach ($aboutData as $data)
                    <div
                        class="text-center bg-white p-6 rounded-2xl shadow-lg border border-gray-200 hover:shadow-xl transition-shadow">
                        <img src="https://placehold.co/128x128/9089fc/ffffff?text=Person+{{ $data->id }}"
                            alt="Foto anggota tim 1" class="w-32 h-32 rounded-full mx-auto mb-4">
                        <h3 class="text-xl font-semibold text-gray-900">{{ $data->nama }}</h3>
                        <p class="text-sm text-indigo-600">{{ $data->nomor }}</p>
                        <p class="mt-2 text-sm text-gray-600">
                            Seorang pemimpin visioner dengan pengalaman lebih dari 15 tahun di industri teknologi.
                        </p>
                    </div>
                @endforeach
            @endif
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
