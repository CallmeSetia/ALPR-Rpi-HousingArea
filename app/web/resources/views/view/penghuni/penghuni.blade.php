
@extends('layouts.app')

@section('main')
    <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
        <div class="flex flex-col w-full max-w-xl p-6 space-y-8 items-center justify-center mb-8  rounded-lg shadow-xl  lg:mb-10 dark:text-white">
            <div class="space-y-6"><h1 class="p-5 font-bold text-2xl"> Informasi Akun </h1></div>
            <div  class="space-y-6 text-start items-start justify-content-start text-start">
                <span class="font-medium">Nama Akun :  </span> Andi <br>
                <span class="font-medium">Pemilik Rumah :  </span> Pak Roni <br>
                <span class="font-medium">Plat Nomor :  </span> Pak Roni <br>
                <span class="font-medium">Alamat Rumah :  </span> JL. Lorem ipsum dolor  No 66 <br>
            </div>
        </div>
        <!-- Card -->
        <div class="w-full max-w-xl p-6 h-full space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">

            <div class="relative overflow-x-auto">
                <div class="space-y-6 text-center">
                    <h1 class="p-5 font-bold text-2xl"> Informasi Tamu </h1>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Tamu
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jam
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Approval
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2023-05-01
                        </td>
                        <td class="px-6 py-4">
                            John Doe
                        </td>
                        <td class="px-6 py-4">
                            10:00 AM
                        </td>
                        <td class="px-6 py-4">
                            Approved
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2023-05-02
                        </td>
                        <td class="px-6 py-4">
                            Jane Smith
                        </td>
                        <td class="px-6 py-4">
                            02:30 PM
                        </td>
                        <td class="px-6 py-4">
                            Pending
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2023-05-03
                        </td>
                        <td class="px-6 py-4">
                            Mark Johnson
                        </td>
                        <td class="px-6 py-4">
                            09:15 AM
                        </td>
                        <td class="px-6 py-4">
                            Denied
                        </td>
                    </tr>
                    </tbody>
                </table>

            </div>

        </div>
        <div class="w-full max-w-xl p-6  space-y-8 sm:p-8    dark:bg-gray-800">

            <a  href="/login/loading" class="text-white block text-center w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm mt-10 px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Logout
            </a>
        </div>
    </div>
@endsection
