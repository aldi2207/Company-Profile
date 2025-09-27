<x-header>Artikel</x-header>
<x-navbar></x-navbar>

<main class="isolate pt-24 px-6 lg:px-8">
    <section id="article-detail" class="mx-auto max-w-4xl py-12 sm:py-16 lg:py-20">

        <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-gray-900 mb-4">
            {{ $artikelId->title }}
        </h1>

        <p class="text-base text-gray-500 mb-8">
            Oleh: <span class="font-medium text-gray-700">{{ $artikelId->author }}</span>
        </p>

        <div class="prose max-w-none prose-lg text-gray-700">
            <p>
                {{ $artikelId->body }}
            </p>
        </div>
        <div class="pt-10">
            <a href="/artikel"
                class="inline-block px-6 py-3 border border-transparent text-base font-medium rounded-lg shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 transition">
                &laquo; Kembali
            </a>
        </div>

    </section>
</main>
<x-footer></x-footer>
