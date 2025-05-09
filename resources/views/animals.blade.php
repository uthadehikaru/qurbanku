@extends('layouts.web')
@section('content')
<!-- mulai blog -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
        <h1 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">Hewan Qurban Terbaik
        </h1>
        <div class="flex justify-center gap-4 mb-20">
            <a href="{{ url('/hewan-qurban') }}" class="btn hover:bg-warning {{ $type == null ? 'btn-primary' : 'btn-success' }}">Semua</a>
            <a href="{{ url('/hewan-qurban/sapi') }}" class="btn hover:bg-warning {{ $type == 'sapi' ? 'btn-primary' : 'btn-success' }}">Sapi</a>
            <a href="{{ url('/hewan-qurban/kambing') }}" class="btn hover:bg-warning {{ $type == 'kambing' ? 'btn-primary' : 'btn-success' }}">Kambing</a>
            <a href="{{ url('/hewan-qurban/domba') }}" class="btn hover:bg-warning {{ $type == 'domba' ? 'btn-primary' : 'btn-success' }}">Domba</a>
            <a href="{{ url('/hewan-qurban/kerbau') }}" class="btn hover:bg-warning {{ $type == 'kerbau' ? 'btn-primary' : 'btn-success' }}">Kerbau</a>
        </div>
        <div class="flex flex-wrap -m-4 mb-4">
            @foreach ($animals as $animal)
                <x-animal-card :animal="$animal" />
            @endforeach
        </div>
        {{ $animals->links() }}
    </div>
</section>
<!-- akhir blog -->
@endsection
