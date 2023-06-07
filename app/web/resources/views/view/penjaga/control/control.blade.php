@extends('layouts.app')

@section('main')
    <main class="bg-gray-50 dark:bg-gray-900 h-screen">
        <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
            <div class="flex flex-col w-full max-w-xl p-6 space-y-8 items-center justify-center mb-8  rounded-lg shadow-xl  lg:mb-10 dark:text-white">
                <div class="space-y-6"><h1 class="p-5 font-bold text-2xl"> HALAMAN CONTROL </h1></div>
            </div>
            <!-- Card -->
            <div class="w-full max-w-xl p-6 h-full space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">

                <div class="relative overflow-x-auto">
                    <div class="space-y-6 text-center">
                        <h1 class="p-5 font-bold text-2xl"> STATUS SENSOR & GATE</h1>
                    </div>
                    <div class="flex flex-row items-center text-center ">

                        <a href="#" class="block max-w-sm p-6 mx-2 bg-red-100 border border-gray-200 rounded-lg shadow">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PROXIMITY MASUK</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">NO OBJECT</p>
                        </a>

                        <a href="#" class="block max-w-sm p-6 mx-2 bg-green-100 border border-gray-200 rounded-lg shadow">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">PROXIMITY BELAKANG</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">OBJECT DETECTED</p>
                        </a>


                    </div>
                    <div class="flex flex-col  items-center text-center mt-2 ">
                        <a href="#" class="block max-w-sm p-6 w-full bg-green-100 border border-gray-200 rounded-lg shadow ">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">STATUS GATE</h5>
                            <p class="font-normal text-gray-700 dark:text-gray-400">OPEN</p>
                        </a>

                    </div>

                </div>

            </div>
            <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
            <div class="w-full max-w-xl p-6 h-full space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">

                <div class="relative overflow-x-auto">
                    <div class="space-y-6 text-center">
                        <h1 class="p-5 font-bold text-2xl"> CONTROL GATE</h1>
                    </div>
                    <div class="flex flex-col  items-center text-center mt-2 ">
                        <a href="#" class="block max-w-sm p-6 w-full bg-blue-100 border border-gray-200 rounded-lg shadow ">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">OPEN/CLOSE GATE</h5>

                        </a>

                    </div>

                </div>

            </div>
            <div class="w-full max-w-xl p-6  space-y-8 sm:p-8    dark:bg-gray-800">
                <a  href="/penjaga" class="text-white block text-center w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm mt-10 px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Kembali Ke Halaman Utama
                </a>
                <a  href="/login/loading" class="text-white block text-center w-full bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm mt-10 px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    Logout
                </a>
            </div>
        </div>

    </main>
@endsection
