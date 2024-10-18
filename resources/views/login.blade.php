@extends('components.template')
@section('title', 'login')
@section('content')
    <div class="max-w-md mx-auto bg-blue-300 p-8 mt-10 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-6">LOGIN</h2>
        <form form action="/home" method="GET">
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" class="mt-1 block w-full border border-gray-300 rounded-md p-2" required>
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-500">Login</button>
        </form>
        <p class="text-center mt-4">Belum punya akun? <a href="/register" class="text-blue-600 underline">Daftar disini</a></p>
    </div>
@endsection


