{{--
Penggunaan

@component('components.input', ['type' => 'text', 'name' => 'username', 'value' => '', 'placeholder' => ''])
@endcomponent

Properti
    label (string) : untuk label
    type (string, default: 'text'): Tipe input, seperti text, email, atau password.
    name (string): Nama input.
    value (string): Nilai default input.
    placeholder (string): Nilai default input.

--}}



<div>
    <label
        for="{{ $id }}"
        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" >
        {{ $label }}
    </label>
    <input
        type="{{ $type  }}"
        id="{{ $id  }}"
        name="{{ $id  }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder  }}"

        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
    />
</div>
