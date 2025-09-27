<x-header>Contact</x-header>

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
<!-- Section: Kontak Kami -->
<main class="isolate pt-24 px-6 lg:px-8">
    <section id="contact" class="mx-auto max-w-4xl py-12 sm:py-16 lg:py-20">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 bg-white p-8 rounded-2xl shadow-lg border border-gray-200">
            <!-- Tambahan informasi kontak, telepon, email, dan medsos -->
            <div>
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 mb-6">Kontak Kami</h2>
                <p class="mb-6 text-gray-600">
                    Kami di sini untuk membantu! Jika kamu memiliki pertanyaan, saran, atau ingin berkolaborasi,
                    jangan ragu untuk menghubungi kami melalui informasi di bawah ini.
                </p>
                <ul class="space-y-4">
                    <li>
                        <p class="font-semibold text-gray-900">Email</p>
                        <a href="mailto:contoh.email@gmail.com"
                            class="text-indigo-600 hover:underline">contoh.email@gmail.com</a>
                    </li>
                    <li>
                        <p class="font-semibold text-gray-900">Telepon</p>
                        <a href="tel:+6281234567890" class="text-indigo-600 hover:underline">+62 812-3456-7890</a>
                    </li>
                    <li>
                        <p class="font-semibold text-gray-900">Media Sosial</p>
                        <div class="flex space-x-4 mt-2">
                            <!-- Facebook Icon (contoh SVG) -->
                            <a href="https://www.facebook.com" class="text-indigo-600 hover:text-indigo-800 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-3 7h-1.924c-.615 0-1.076.252-1.076.99v1.27h3l-.369 3.125h-2.631v7.615h-3v-7.615h-2.001v-3.125h2.001v-1.729c0-1.921 1.065-2.956 3.012-2.956h2.488v3z" />
                                </svg>
                            </a>
                            <!-- Instagram Icon (contoh SVG) -->
                            <a href="https://www.instagram.com"
                                class="text-indigo-600 hover:text-indigo-800 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.675 1.636 4.803 4.85.058 1.265.069 1.645.069 4.849 0 3.204-.012 3.584-.069 4.849-.128 3.215-1.551 4.69-4.803 4.849-1.266.058-1.645.069-4.849.069-3.204 0-3.584-.012-4.849-.069-3.252-.148-4.675-1.636-4.803-4.849-.058-1.265-.068-1.644-.068-4.849 0-3.204.012-3.584.069-4.849.128-3.215 1.551-4.69 4.803-4.849 1.265-.058 1.644-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.203-6.185 2.18-6.387 6.387-.059 1.28-.073 1.687-.073 4.947 0 3.259.014 3.667.072 4.947.203 4.358 2.18 6.185 6.387 6.387 1.28.058 1.687.072 4.947.072 3.259 0 3.667-.014 4.947-.072 4.358-.203 6.185-2.18 6.387-6.387.058-1.28.073-1.687.073-4.947 0-3.259-.014-3.667-.072-4.947-.203-4.358-2.18-6.185-6.387-6.387-1.28-.058-1.687-.072-4.947-.072zm0 6.848c-2.459 0-4.442 1.984-4.442 4.442s1.984 4.442 4.442 4.442 4.442-1.984 4.442-4.442-1.983-4.442-4.442-4.442zm0 7.337c-1.556 0-2.815-1.26-2.815-2.815s1.259-2.815 2.815-2.815 2.815 1.26 2.815 2.815-1.259 2.815-2.815 2.815zm5.225-7.442c-.604 0-1.094.49-1.094 1.094s.49 1.094 1.094 1.094 1.094-.49 1.094-1.094-.49-1.094-1.094-1.094z" />
                                </svg>
                            </a>
                            <!-- Twitter Icon (contoh SVG) -->
                            <a href="https://www.twitter.com" class="text-indigo-600 hover:text-indigo-800 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="currentColor">
                                    <path
                                        d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.071 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Formulir Kontak -->
            <div>
                <form action="{{ route('contact') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama
                            Lengkap</label>
                        <div class="mt-2">
                            <input id="nama" name="nama" type="text" autocomplete="nama" required
                                class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
                        </div>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Alamat
                            Email</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4">
                        </div>
                    </div>
                    <div>
                        <label for="pesan" class="block text-sm font-medium leading-6 text-gray-900">Pesan</label>
                        <div class="mt-2">
                            <textarea id="pesan" name="pesan" rows="4" required
                                class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6 px-4"></textarea>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                            class="flex w-full justify-center rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 transition">
                            Kirim Pesan
                        </button>
                    </div>
                    <div class="container mx-auto mt-4">

                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4"
                                role="alert">
                                <span class="block sm:inline">{{ session('success') }}</span>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative mb-4"
                                role="alert">
                                <p>Terdapat beberapa kesalahan input. Silakan periksa kembali formulir Anda.</p>
                            </div>
                        @endif

                    </div>
                </form>
            </div>
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
