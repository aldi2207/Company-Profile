<div id="modal-backdrop"
    class="fixed inset-0 z-40 hidden bg-gray-900/50 backdrop-blur-sm transition-opacity duration-300 ease-out"
    aria-hidden="true"></div>

<div id="login-modal"
    class="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-0 transition-transform duration-300 ease-out translate-y-full opacity-0">
    <div class="relative w-full max-w-md overflow-hidden rounded-lg bg-white p-8 shadow-2xl ring-1 ring-gray-900/50">

        <button id="close-modal"
            class="absolute right-4 top-4 rounded-full p-1 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <h3 class="text-2xl font-bold tracking-tight text-gray-900">Sign in to your account</h3>

        <form action="#" method="POST" class="mt-8 space-y-6">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                </div>
                <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required
                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                {{-- <div class="text-sm">
                    <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot
                        password?</a>
                </div> --}}
            </div>

            <div>
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-amber-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-amber-500 focus-visible:outline focus-visible:outline-offset-2 focus-visible:outline-amber-600">
                    Sign in
                </button>
            </div>
            {{-- <p class="mt-2 text-sm text-gray-500">
                Don't have an account?
                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Sign up</a>
            </p> --}}
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const openModalBtn = document.getElementById('open-login-modal');
        const closeModalBtn = document.getElementById('close-modal');
        const modal = document.getElementById('login-modal');
        const backdrop = document.getElementById('modal-backdrop');

        const showModal = () => {
            modal.classList.remove('hidden');
            backdrop.classList.remove('hidden');

            setTimeout(() => {
                modal.classList.remove('translate-y-full', 'opacity-0');
                modal.classList.add('translate-y-0', 'opacity-100');
                backdrop.classList.remove('opacity-0');
                backdrop.classList.add('opacity-100');
            }, 10);
        };

        const hideModal = () => {
            modal.classList.remove('translate-y-0', 'opacity-100');
            modal.classList.add('translate-y-full', 'opacity-0');
            backdrop.classList.remove('opacity-100');
            backdrop.classList.add('opacity-0');

            setTimeout(() => {
                modal.classList.add('hidden');
                backdrop.classList.add('hidden');
            }, 300);
        };

        openModalBtn.addEventListener('click', showModal);
        closeModalBtn.addEventListener('click', hideModal);

        // Menutup modal jika klik di luar form
        backdrop.addEventListener('click', hideModal);
    });
</script>
