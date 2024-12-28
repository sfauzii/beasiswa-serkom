# 🎓 PintuBeasiswa

PintuBeasiswa adalah sebuah aplikasi web untuk pendaftaran dan pengelolaan beasiswa. Aplikasi ini dibangun menggunakan Laravel, Livewire, dan Chart.js untuk memberikan pengalaman pengguna yang interaktif dan responsif.

## 🎨 Tampilan Desain:

-   [**Desain Figma**](https://www.figma.com/design/g3cAvEyLDWdHdOgXRTgcog/serkom-jwd?node-id=0-1&t=NSGfIPkPhGxTb0jZ-1)

## 🛠️ **Teknologi yang Digunakan**

| Teknologi       | Deskripsi                    |
|------------------|------------------------------|
| **Laravel**     | Framework PHP untuk backend  |
| **Livewire**    | Komponen frontend dinamis    |
| **Chart.js**    | Visualisasi data interaktif  |
| **Bootstrap**   | Styling UI yang modern       |
| **MySQL**       | Database Relasional          |


## ✨ Fitur

✅ **Pendaftaran Beasiswa** – Pengguna dapat mendaftar beasiswa dengan mengisi formulir yang tersedia.  
✅ **Pengelolaan Data Pendaftar** – Dapat melihat data pendaftar beasiswa.  
✅ **Grafik Visualisasi Data** – Statistik jumlah dan jenis beasiswa menggunakan **Chart.js**.    
✅ **Antarmuka Responsif** – Desain ramah pengguna dan responsif di berbagai perangkat.  



## Instalasi

1. Clone repository ini:
    ```bash
    git clone https://github.com/username/PintuBeasiswa.git
    cd PintuBeasiswa
    ```

2. Install dependencies menggunakan Composer:
    ```bash
    composer install
    ```

3. Copy file [.env.example](http://_vscodecontentref_/0) menjadi [.env](http://_vscodecontentref_/1) dan sesuaikan konfigurasi database:
    ```bash
    cp .env.example .env
    ```

4. Generate application key:
    ```bash
    php artisan key:generate
    ```

5. Migrasi database:
    ```bash
    php artisan migrate
    ```

6. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

## 📚 Penggunaan

- **Halaman Pendaftaran**: Pengguna dapat mengakses halaman pendaftaran beasiswa dan mengisi formulir yang tersedia.
- **Halaman Hasil**: Admin dapat melihat daftar pendaftar beasiswa beserta statusnya.
- **Halaman Grafik**: Menampilkan statistik jenis beasiswa dalam bentuk grafik.

## 📂 Struktur Direktori

- **app/Http/Controllers**: Berisi controller untuk mengelola logika aplikasi.
- **app/Models**: Berisi model untuk mengelola data aplikasi.
- **resources/views**: Berisi file blade template untuk tampilan aplikasi.
- **routes/web.php**: Berisi definisi route untuk aplikasi.

## 🔗 Repository
- **Backend (Laravel):** [beasiswa-serkom](https://github.com/sfauzii/beasiswa-serkom.git)
- **Frontend (HTML & JavaScript):** [beasiswa-frontend](https://github.com/sfauzii/beasiswa-frontend.git)
- **Desain UI/UX (Figma):** [Desain Figma](https://www.figma.com/design/g3cAvEyLDWdHdOgXRTgcog/serkom-jwd?node-id=0-1&t=yppTM4jK0k8D34ce-1)
- **Database:** [Struktur Database](https://drive.google.com/drive/folders/1zLXa_CeS5fEQwNK8hOZ-qJ9gUraWIVV8?usp=sharing)


## 🤝 Kontribusi

Jika Anda ingin berkontribusi pada proyek ini, silakan fork repository ini dan buat pull request dengan perubahan yang Anda buat.

## 📄 Lisensi

Proyek ini dilisensikan di bawah lisensi MIT. Lihat file LICENSE untuk informasi lebih lanjut.

---

Dibuat dengan ❤️ oleh **Syahrul Fauzi**
