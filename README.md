# ALPR-Rpi-HousingArea

## Deskripsi

ALPR-Rpi-HousingArea adalah sebuah proyek yang mengimplementasikan sistem Automatic License Plate Recognition (ALPR) dengan menggunakan Raspberry PI dan OpenCV untuk mendeteksi plat nomor kendaraan di Indonesia di sebuah area perumahan.

## Alat dan Software yang Digunakan

- Raspi 4
- Webcam C92x Series
- Sensor Proximity

Software:

- GPIO
- Python 3.7+
- MySQL
- Laravel 9 (BACKEND) + Vue 3 (Front) (digabungkan dengan laravel-mix)
- Android Studio : For Notification Controller & WebView
- OpenCV 3+  
- PyTesseract (OCR) 
- PyTorch
- Yolo Tiny

## Konsep Alat

Terdapat 3 entitas dalam sistem ini: PENJAGA, PENGHUNI PERUMAHAN, dan TAMU.

Perumahan memiliki sistem gate satu pintu di mana semua kendaraan yang masuk dan keluar melewati pintu tersebut. Untuk bisa masuk, kendaraan perlu memindai plat nomor yang kemudian dicek oleh sistem. Jika plat tersebut terdaftar dalam sistem, maka kendaraan tersebut dikatakan sebagai penghuni dari perumahan tersebut. Jika tidak, maka dikatakan sebagai tamu.

Ada dua cara untuk tamu bisa masuk:

1. **TAMU masuk by PENJAGA**: Tamu dapat masuk dengan konfirmasi dari penjaga. Jika penjaga mengizinkan, maka penghuni rumah tujuan akan menerima notifikasi bahwa ada tamu yang datang.

2. **TAMU masuk by TAMU sendiri**: Tamu harus terkoneksi ke jaringan, kemudian memilih rumah tujuan. Mereka harus menunggu persetujuan dari penghuni rumah, jika disetujui, maka tamu dapat masuk. Jika ditolak atau tidak ada tindakan, maka tamu tidak boleh masuk.

## Blok Diagram

+-------------------+   +-------------------+   +---------------+
|   Kamera          |   |  Sensor Proximity |   |    Raspi      |
|   (Input)         |-->|  (Input)          |-->|    (Proses)   |
+-------------------+   +-------------------+   +---------------+
                                                     |
                                                     |
                                                     V
                                               +---------------+
                                               |    Servo      |
                                               |   (Output)    |
                                               +---------------+


## License

Proyek ini berada di bawah lisensi [MIT](https://opensource.org/licenses/MIT).
