@extends('components.template')
@section('title', 'Landing Page')
@section('content')
    <div class="flex flex-col   items-center justify-center h-screen bg-gradient-to-r from-blue-400 to-blue-600">
        <h1 class="text-5xl font-bold text-white mb-6">Selamat Datang di Contact App</h1>
        <p class="text-xl text-white text-center mb-4">Temukan dan kelola semua kontak Anda dengan mudah.</p>
        <a href="/register" class="mt-2 bg-transparent border border-white text-white font-semibold py-2 px-6 rounded-full shadow hover:bg-white hover:text-blue-600 transition duration-300">Mulai</a>
    </div>
@endsection
