@extends('layouts.web')
@section('content')
<!-- mulai hero -->
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-contain object-center rounded" alt="hero"
                src="{{ asset('hero.jpg') }}">
        </div>
        <div
            class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Pilihan Hewan Qurban Terbaik
            </h1>
            <p class="mb-8 leading-relaxed">Selamat datang di website penjualan hewan qurban terpercaya. Kami menyediakan berbagai pilihan hewan qurban berkualitas seperti sapi, kambing, domba, dan kerbau yang sehat dan sesuai syariat. Dengan pengalaman bertahun-tahun, kami berkomitmen memberikan pelayanan terbaik untuk memudahkan Anda dalam menunaikan ibadah qurban.</p>
            
        </div>
    </div>
</section>
<!-- akhir hero -->
<!-- mulai fitur -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Layanan Hewan Qurban Kami
            <br class="hidden sm:block">Untuk Ibadah Qurban Anda
        </h1>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-primary mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Hewan Sehat & Berkualitas</h2>
                    <p class="leading-relaxed text-base">Kami menyediakan hewan qurban yang sehat, berkualitas, dan sesuai syariat. Setiap hewan telah melalui pemeriksaan kesehatan oleh dokter hewan berpengalaman.</p>
                    
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-primary mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Gratis Perawatan</h2>
                    <p class="leading-relaxed text-base">Kami akan memberikan perawatan gratis untuk hewan qurban Anda hingga menjelang penyembelihan.</p>
                    
                </div>
            </div>
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-primary mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Gratis Pengiriman</h2>
                    <p class="leading-relaxed text-base">Kami akan mengirim hewan qurban Anda ke tempat Anda dengan gratis sesuai dengan jarak yang ditentukan.</p>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<!-- akhir fitur -->
<!-- mulai blog -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Hewan Qurban Terbaik
        </h1>
        <div class="flex flex-wrap -m-4">
            @foreach ($animals as $animal)
                <x-animal-card :animal="$animal" />
            @endforeach
        </div>
        <div class="flex justify-center mt-4">
            <a href="{{ url('/hewan-qurban') }}" class="btn btn-success">Lihat Semua</a>
        </div>
    </div>
</section>
<!-- akhir blog -->
<!-- mulai kontak -->
<section class="text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no"
            src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=jakarta&ie=UTF8&t=&z=14&iwloc=B&output=embed"
            style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
        <div
            class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Kunjungi Kami</h2>
            <p class="leading-relaxed text-base">Jl. Raya No. 123, Jakarta, Indonesia</p>
            <p class="leading-relaxed text-base">Telp: 081234567890</p>
            <p class="leading-relaxed text-base">Email: qurban@example.com</p>
        </div>
    </div>
</section>
<!-- akhir kontak -->
@endsection
