<template>
    <div>
        <label
            :for="id"
            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
        >
            {{ label }}
        </label>
        <input
            :type="type"
            :id="id"
            v-model="internalValue"
            :placeholder="placeholder"
            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"

        />
    </div>
</template>

<script setup>
import { ref, watch } from 'vue';

const props = defineProps({
    label: {
        type: String,
        required: true
    },
    type: {
        type: String,
        default: 'text'
    },
    id: {
        type: String,
        required: true
    },
    modelValue: {
        type: [String, Number],
        default: ''
    },
    placeholder: {
        type: String,
        default: ''
    }
});
const internalValue = ref(props.modelValue);

const  emit = defineEmits(['update:modelValue']);

watch(internalValue, (newValue) => {
    emit('update:modelValue', newValue);
});


</script>
