@extends('layouts.web')
@section('content')
<!-- mulai hero -->
<section class="text-gray-600 body-font">
    <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
        <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-contain object-center rounded" alt="hero"
                src="{{ asset('no photo.jpg') }}">
        </div>
        <div
            class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Selamat Datang di Website Kami
            </h1>
            <p class="mb-8 leading-relaxed">Kami menyediakan layanan terbaik untuk memenuhi kebutuhan Anda. Dengan pengalaman bertahun-tahun dan tim ahli kami, kami siap membantu Anda mencapai tujuan Anda dengan solusi yang inovatif dan efektif.</p>
            <div class="flex justify-center">
                <button
                    class="inline-flex text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Mulai Sekarang</button>
                <button
                    class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Pelajari Lebih Lanjut</button>
            </div>
        </div>
    </div>
</section>
<!-- akhir hero -->
<!-- mulai fitur -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Layanan Unggulan Kami
            <br class="hidden sm:block">Untuk Kesuksesan Anda
        </h1>
        <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
            <div class="p-4 md:w-1/3 flex">
                <div
                    class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-primary mb-4 flex-shrink-0">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <div class="flex-grow pl-6">
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Konsultasi Bisnis</h2>
                    <p class="leading-relaxed text-base">Kami menyediakan layanan konsultasi bisnis yang komprehensif untuk membantu Anda mengembangkan strategi yang efektif dan mencapai pertumbuhan yang berkelanjutan.</p>
                    <a class="mt-3 text-primary inline-flex items-center">Pelajari Lebih Lanjut
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
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
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Pengembangan Teknologi</h2>
                    <p class="leading-relaxed text-base">Tim ahli kami siap membantu Anda dalam mengembangkan solusi teknologi yang inovatif dan sesuai dengan kebutuhan bisnis Anda, mulai dari aplikasi web hingga sistem manajemen yang kompleks.</p>
                    <a class="mt-3 text-primary inline-flex items-center">Pelajari Lebih Lanjut
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
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
                    <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Pelatihan SDM</h2>
                    <p class="leading-relaxed text-base">Kami menawarkan program pelatihan yang dirancang khusus untuk meningkatkan keterampilan dan produktivitas tim Anda, memastikan bahwa sumber daya manusia Anda siap menghadapi tantangan bisnis modern.</p>
                    <a class="mt-3 text-primary inline-flex items-center">Pelajari Lebih Lanjut
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                            <path d="M5 12h14M12 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- akhir fitur -->
<!-- mulai blog -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                    <img class="lg:h-48 md:h-36 w-full object-contain object-center"
                        src="{{ asset('no photo.jpg') }}" alt="blog">
                    <div class="p-6">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">BISNIS</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Strategi Pemasaran Digital 2023</h1>
                        <p class="leading-relaxed mb-3">Pelajari strategi pemasaran digital terbaru yang dapat membantu bisnis Anda tumbuh di era digital ini.</p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-primary inline-flex items-center md:mb-2 lg:mb-0">Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span
                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>6
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                    <img class="lg:h-48 md:h-36 w-full object-contain object-center"
                        src="{{ asset('no photo.jpg') }}" alt="blog">
                    <div class="p-6">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">TEKNOLOGI</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Tren Teknologi AI Terbaru</h1>
                        <p class="leading-relaxed mb-3">Temukan bagaimana kecerdasan buatan (AI) dapat meningkatkan efisiensi dan inovasi dalam bisnis Anda.</p>
                        <div class="flex items-center flex-wrap">
                            <a class="text-primary inline-flex items-center md:mb-2 lg:mb-0">Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span
                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>6
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-4 md:w-1/3">
                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                    <img class="lg:h-48 md:h-36 w-full object-contain object-center"
                        src="{{ asset('no photo.jpg') }}" alt="blog">
                    <div class="p-6">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">MANAJEMEN</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Tips Memimpin Tim Jarak Jauh</h1>
                        <p class="leading-relaxed mb-3">Pelajari cara efektif mengelola dan memotivasi tim Anda dalam era kerja jarak jauh yang semakin umum.</p>
                        <div class="flex items-center flex-wrap ">
                            <a class="text-primary inline-flex items-center md:mb-2 lg:mb-0">Baca Selengkapnya
                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                            </a>
                            <span
                                class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>1.2K
                            </span>
                            <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>6
                            </span>
                        </div>
                    </div>
                </div>
            </div>
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
            <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Hubungi Kami</h2>
            <p class="leading-relaxed mb-5 text-gray-600">Kami siap membantu Anda. Silakan isi formulir di bawah ini untuk menghubungi kami.</p>
            <div class="relative mb-4">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full bg-white rounded border border-gray-300 focus:border-primary focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative mb-4">
                <label for="message" class="leading-7 text-sm text-gray-600">Pesan</label>
                <textarea id="message" name="message"
                    class="w-full bg-white rounded border border-gray-300 focus:border-primary focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
            </div>
            <button
                class="text-white bg-primary border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Kirim</button>
            <p class="text-xs text-gray-500 mt-3">Kami akan merespons pesan Anda secepat mungkin. Terima kasih atas kepercayaan Anda.</p>
        </div>
    </div>
</section>
<!-- akhir kontak -->
<!-- mulai langganan -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Berlangganan Newsletter Kami</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Dapatkan informasi terbaru tentang bisnis, teknologi, dan tips manajemen langsung di kotak masuk Anda. Berlangganan sekarang!</p>
        </div>
        <div
            class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
            <div class="relative flex-grow w-full">
                <label for="full-name" class="leading-7 text-sm text-gray-600">Nama Lengkap</label>
                <input type="text" id="full-name" name="full-name"
                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-primary focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <div class="relative flex-grow w-full">
                <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                <input type="email" id="email" name="email"
                    class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-primary focus:bg-transparent focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
            </div>
            <button
                class="text-white bg-primary border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Berlangganan</button>
        </div>
    </div>
</section>
<!-- akhir langganan -->
@endsection
