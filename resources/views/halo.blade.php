@extends('layout.navbar')

@section('title', 'Beranda')

@section('content')
    <section>
        <div>
            <img src="{{ asset('img/banner.jpg') }}" alt="Banner" style="max-width:100%; height:auto;">
            <p>Halo, ini adalah halaman Beranda.</p>
        </div>
    </section>
@endsection