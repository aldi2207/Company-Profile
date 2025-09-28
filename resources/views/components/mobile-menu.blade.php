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
                    <a id = "open-login-modal" type = "button"
                        class="-mx-3 block rounded-lg px-3 py-2.5 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50 hover curson-pointer transition">Log
                        in</a>
                </div>
            </div>
        </div>
    </div>
</div>
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
