@extends('components.template')
@section('title', 'homepage')
@section('content')
    <div>
        <h2 class="text-2xl font-bold text-center mb-6">SELAMAT DATANG DI CONTACT APP</h2>
    </div>
    <div class="max-w-4xl mx-auto mt-10">
        <table class="min-w-full border border-grey-300">
            <thead class="bg-blue-100">
                <tr>
                    <th class="border border-gray-300 p-4 text-center">No.</th>
                    <th class="border border-gray-300 p-4 text-center">Name</th>
                    <th class="border border-gray-300 p-4 text-center">Email</th>
                    <th class="border border-gray-300 p-4 text-center">Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr class="hover:bg-gray-50">
                        <td class="border border-gray-300 p-4 text-center">{{ $loop->iteration }}</td>
                        <td class="border border-gray-300 p-4 text-center">{{ $contact['name'] }}</td>
                        <td class="border border-gray-300 p-4 text-center">{{ $contact['email'] }}</td>
                        <td class="border border-gray-300 p-4 text-center">{{ $contact['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection


