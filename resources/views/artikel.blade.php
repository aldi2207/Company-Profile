<x-header>Artikel</x-header>
<x-navbar></x-navbar>
<x-mobile-menu></x-mobile-menu>
<main class="isolate pt-24 px-6 lg:px-8">
    <!-- Section: Artikel Terbaru -->
    <section id="articles" class="mx-auto max-w-4xl py-12 sm:py-16 lg:py-20">
        <h2 class="text-3xl font-bold tracking-tight text-gray-900 mb-8">Artikel Terbaru</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Artikel-->
            @if ($dataArticle->isEmpty())
                <div class="col-span-full text-center text-gray-500">
                    <p>Tidak ada data anggota tim.</p>
                </div>
            @else
                @foreach ($dataArticle as $artikel)
                    <div
                        class="bg-white p-6 rounded-2xl shadow-lg border border-gray-200 hover:shadow-xl transition-shadow">
                        <h3 class="text-lg font-semibold leading-6 text-gray-900">
                            <a href="artikel/{{ $artikel->id }}"
                                class="hover:text-indigo-600 transition">{{ $artikel->title }}</a>
                        </h3>
                        <p class="mt-2 text-sm leading-6 text-gray-600">
                            {{ Str::limit($artikel->body, 200) }}
                        </p>
                    </div>
                @endforeach
            @endif
            <div class="mt-12 text-center flex justify-center">
                <a href="artikel/list"
                    class="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-amber-600 hover:bg-amber-700 transition">
                    Lihat Semua Artikel &raquo;
                </a>
            </div>
    </section>
</main>
<x-modal-login></x-modal-login>
<x-footer></x-footer>
