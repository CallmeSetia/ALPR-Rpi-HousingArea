{{--
## Dokumentasi Komponen Button

Komponen `button` digunakan untuk menampilkan tombol dengan berbagai gaya dan perilaku.

### Penggunaan
```html
@component('components.button', ['type' => 'submit', 'label' => 'Submit'])
@endcomponent
```

### Properti
- `type` (string, default: 'button'): Tipe tombol, seperti `button`, `submit`, atau `reset`.
- `label` (string): Teks yang akan ditampilkan di dalam tombol.

### Contoh Penggunaan
```html
@component('components.button', ['type' => 'submit', 'label' => 'Submit'])
@endcomponent

@component('components.button', ['type' => 'button', 'label' => 'Cancel'])
@endcomponent
```

Anda dapat menyesuaikan kelas CSS sesuai dengan kebutuhan desain Anda pada atribut `class`. Properti-properti tambahan juga dapat ditambahkan sesuai kebutuhan.

Pastikan Anda telah memasukkan file komponen dalam direktori yang benar dan telah menjalankan view dengan benar dengan memanggil komponen menggunakan perintah `@component` dan `@endcomponent`.

Gunakan komponen `button` ini untuk membangun tampilan yang lebih modular dan efisien dalam aplikasi Anda. Anda dapat mengatur properti sesuai kebutuhan untuk menyesuaikan penampilan dan perilaku tombol sesuai kebutuhan Anda.

Selamat menggunakan komponen `button` ini!
--}}


<button
    type="{{ $type }}"
    class="w-full px-5 py-3 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300  dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
    {{ $slot }}
</button>
