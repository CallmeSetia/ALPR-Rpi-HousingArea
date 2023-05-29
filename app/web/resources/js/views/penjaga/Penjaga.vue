<script setup>

</script>

<template>
    <main class="bg-gray-50 dark:bg-gray-900 h-screen">
        <div class="flex flex-col items-center justify-center px-6 pt-8 mx-auto md:h-screen pt:mt-0 dark:bg-gray-900">
            <div class="flex flex-col w-full max-w-xl p-6 space-y-8 items-center justify-center mb-8  rounded-lg shadow-xl  lg:mb-10 dark:text-white">
                <div class="space-y-6"><h1 class="p-5 font-bold text-2xl"> Informasi Akun Penjaga </h1></div>
                <div  class="space-y-6 text-start items-start justify-content-start text-start">
                    <span class="font-medium">Nama :  </span> Pak Adi <br>
                    <span class="font-medium">Username :  </span> penjaga1 <br>
                </div>
            </div>
            <!-- Card -->
            <div class="w-full max-w-xl p-6 h-full space-y-8 sm:p-8 bg-white rounded-lg shadow-xl dark:bg-gray-800">
                <div class="space-y-6"><h1 class="p-5 font-bold text-2xl text-center"> Adminitrasi Penjaga </h1></div>
                <a  href="/penjaga/tamu" class="text-white block text-center w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm  px-5 py-2.5 mr-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    TAMU
                </a>
                <a  href="/penjaga/penghuni" class="text-white block text-center w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm  px-5 py-2.5 mr-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    PENGHUNI
                </a>
                <a  href="/penjaga/control" class="text-white block text-center w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm  px-5 py-2.5 mr-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    CONTROL
                </a>
                <a  href="/login/loading" class="text-white block text-center w-full bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm  px-5 py-2.5 mr-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                    LOGOUT
                </a>

            </div>

        </div>

    </main>
</template>

<style scoped>

</style>
