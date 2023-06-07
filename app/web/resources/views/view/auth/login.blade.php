@extends('layouts.app')



@section('main')

    @if (session()->has('alert'))
        <p>  {{ session('alert.message') }}</p>
    @endif


    <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
        <a href="https://flowbite-admin-dashboard.vercel.app/"
           class="flex items-center justify-center mb-8 text-2xl font-semibold lg:mb-10 dark:text-white">
            <span class="my-20"></span>
        </a>
        <!-- Card -->
        <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
            <h2 class="text-2xl font-bold text-center text-gray-900 dark:text-white">
                Login Sistem
            </h2>
            <form class="mt-8 space-y-6">
                @csrf

                @component('components.input.input', ['label' => 'Username', 'type' => 'text', 'id' => 'username', 'placeholder' => 'Masukan Username',  'value' => '' ])
                @endcomponent

                @component('components.input.input', ['label' => 'Password', 'type' => 'password', 'id' => 'password', 'placeholder' => 'Masukan Password',  'value' => null ])
                @endcomponent

                @component('components.button.button', ['label' => 'Login', 'type' => 'submit'])
                    Login
                @endcomponent

                <div class="text-sm font-medium text-gray-500 dark:text-gray-400">
                    Tidak Terdaftar? <a class="text-blue-700 hover:underline dark:text-blue-500">Hubungi Penjaga</a>
                </div>
            </form>
        </div>
    </div>

@endsection
