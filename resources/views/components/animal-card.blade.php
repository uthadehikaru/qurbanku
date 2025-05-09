<div class="p-4 md:w-1/3">
    <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
        <img class="lg:h-48 md:h-36 w-full object-contain object-center"
            src="{{ $animal->image ? asset('storage/' . $animal->image) : asset('livestock.png') }}" alt="blog">
        <div class="p-6">
            <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">{{ $animal->type }}</h2>
            <h1 class="title-font text-lg font-medium text-gray-900 mb-3">{{ $animal->name }}</h1>
            <p class="leading-relaxed mb-3">{{ $animal->description }}</p>
            <div class="flex items-center flex-wrap ">
                <a class="p-2 bg-primary rounded rounded-lg text-white inline-flex items-center md:mb-2 lg:mb-0" 
                href="https://wa.me/6281234567890?text=Halo, saya ingin memesan hewan qurban {{ $animal->name }}">Pesan Whatsapp
                </a>
                <span
                    class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                    <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                        stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path>
                    </svg>{{ $animal->weight }} Kg
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 mr-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9.568 3H5.25A2.25 2.25 0 0 0 3 5.25v4.318c0 .597.237 1.17.659 1.591l9.581 9.581c.699.699 1.78.872 2.607.33a18.095 18.095 0 0 0 5.223-5.223c.542-.827.369-1.908-.33-2.607L11.16 3.66A2.25 2.25 0 0 0 9.568 3Z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 6h.008v.008H6V6Z" />
                </svg>Rp {{ number_format($animal->price, 0, ',', '.') }}
                </span>
            </div>
        </div>
    </div>
</div>