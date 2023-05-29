<script setup>

</script>

<template>
    <main class="bg-gray-50 dark:bg-gray-900 h-screen">
        <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
            <div class="flex flex-col w-full max-w-xl p-6 space-y-8 items-center justify-center mb-8  rounded-lg shadow-xl  lg:mb-10 dark:text-white">
                <div class="space-y-6"><h1 class="p-5 font-bold text-2xl"> HALAMAN PENGHUNI </h1></div>
            </div>
            <!-- Card -->
            <div class="w-full max-w-xl p-6 h-full space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">

                <div class="relative overflow-x-auto">
                    <div class="space-y-6 text-center">
                        <h1 class="p-5 font-bold text-2xl"> List Penghuni Perumahan </h1>
                    </div>
                    <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                        <button type="button" data-modal-toggle="add-user-modal" class="inline-flex items-center justify-center ml-auto my-4 w-1/3 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">
                            <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                            Add user
                        </button>

                    </div>
                    <div class="flex flex-col">
                        <div class="overflow-x-auto">
                            <div class="inline-block min-w-full align-middle">
                                <div class="overflow-hidden shadow">
                                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                                        <thead class="bg-gray-100 dark:bg-gray-700">
                                        <tr>
                                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Name
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Alamat Rumah
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Pemilik Rumah
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Plat Nomor
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Akun
                                            </th>
                                            <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                                Actions
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">

                                        <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">

                                            <td class="max-w-sm p-4 overflow-hidden text-base font-normal text-gray-500 truncate xl:max-w-xs dark:text-gray-400">Andi</td>
                                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">JL. Lorem ipsum dolor sit amet No 66</td>
                                            <td class="p-4 text-base font-medium text-gray-900 whitespace-nowrap dark:text-white">Pak Roni</td>
                                            <td class=" items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                                <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                    <div class="text-base font-semibold text-gray-900 dark:text-white">N 1111 ABC</div>
                                                    <div class="text-base font-semibold text-gray-900 dark:text-white">N 1111 ABC</div>
                                                </div>
                                            </td>
                                            <td class=" items-center p-4 mr-12 space-x-6 whitespace-nowrap">
                                                <div class="text-sm font-normal text-gray-500 dark:text-gray-400">
                                                    <div class="text-base font-semibold text-gray-900 dark:text-white">penghuni1</div>
                                                    <div class="text-sm font-normal text-gray-500 dark:text-gray-400">*******</div>
                                                </div>
                                            </td>

                                            <td class="p-4 space-x-2 whitespace-nowrap">
                                                <button type="button" data-modal-toggle="edit-user-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-primary-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z"></path><path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd"></path></svg>
                                                    Edit user
                                                </button>
                                                <button type="button" data-modal-toggle="delete-user-modal" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                                                    Delete user
                                                </button>
                                            </td>
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
</template>

<style scoped>

</style>
