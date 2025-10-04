<x-header>Daftar Pesan</x-header>
<x-navbar></x-navbar>
<x-mobile-menu></x-mobile-menu>

<div class="relative isolate px-6 lg:px-8 py-16 sm:py-24 lg:py-32">

    {{-- Decorative Background Top (Consistent with Home) --}}
    <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
        <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
            class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75">
        </div>
    </div>

    <div class="mx-auto max-w-7xl">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Kotak Masuk Pesan</h1>
            <p class="mt-4 text-lg text-gray-500">Daftar semua pesan yang diterima melalui formulir kontak.</p>
        </div>

        <div class="overflow-hidden shadow-xl ring-1 ring-gray-900/5 sm:rounded-lg bg-white">
            <div class="min-w-full divide-y divide-gray-300">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                                Nama
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Alamat Email
                            </th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                Pesan
                            </th>
                            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                <span class="sr-only">Aksi</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">

                        {{-- Looping data pesan (asumsi variabel $pesans tersedia) --}}
                        @forelse ($data as $pesan)
                            <tr class="hover:bg-amber-50/50">
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                    {{ $pesan->nama_lengkap }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ $pesan->email }}
                                </td>
                                <td class="py-4 px-3 text-sm text-gray-500 max-w-md truncate">
                                    {{ Str::limit($pesan->pesan, 200) }}
                                </td>
                                <td
                                    class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                    <a href="#" class="text-amber-600 hover:text-amber-900">Lihat Detail</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center py-10 text-gray-500">
                                    <p>Tidak ada pesan yang masuk saat ini.</p>
                                </td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
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
