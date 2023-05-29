<template>
    <button type="submit"   class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <slot></slot>
    </button>
</template>

<script>
export default {
    props: {
        btnClass: {
            type: String,
            default: "btn-primary",
        },
    },
    methods: {

    },
};
</script>

<style scoped>
.btn {
    /* gaya tombol */
}

.btn-primary {
    /* gaya tombol primer */
}

/* Tambahkan gaya lain sesuai kebutuhan */
</style>
