<x-header>About</x-header>
<x-navbar></x-navbar>
<x-modal-login></x-modal-login>
<x-mobile-menu></x-mobile-menu>
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

<x-footer></x-footer>
