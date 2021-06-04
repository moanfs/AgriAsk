# AgriAsk

<ul>
    <li> Pararel            : P1 </li>
    <li> Kelompok           : 5 </li>
</ul>

Asisten Praktikum :
| Nama | NIM |
| ---- | --- |
| Indah Puspita | G64170035 |
| Qoriatul Khairunnisa | G64170014 |

## Anggota Kelompok dan Masing-Masing Role

| Nama                      | NIM       | ROLE                                 |
| ------------------------- | --------- | ------------------------------------ |
| Muhammad Ilham Fadillah   | G64190028 | Project Manager & Back-End Developer |
| I Dewa Putu Semadi        | G64190021 | Front-End Developer                  |
| Nisma Karmiahtun Fadilah  | G64190036 | UI Designer                          |
| Fryda Lucyana Permatasari | G64190015 | UX Researcher                        |

## Deskripsi Singkat Aplikasi

AgriAsk adalah sebuah website forum diskusi yang dikhususkan untuk kalangan atau komunitas petani modern. Petani atau user dapat mengajukan pertanyaan yang berkaitan tentang pertanian. Nantinya, user lain yang sekiranya memiliki ilmu yang lebih baik tentang pertanian, dapat menjawab pertanyaan yang diajukan oleh user tersebut. Harapannya dengan website ini, dapat membantu petani/user untuk menjalankan kegiatan pertanian modernnya seperti hidroponik, aquaponik, dan sebagainya.

## User Analisis

### User Profile

Target user aplikasi AgriAsk adalah masyarakat umum tanpa batasan usia dan latar belakang pendidikan tertentu, serta tertarik untuk menambah wawasan seputar pertanian.

### User Story

<ul>
    <li>Sebagai seorang petani, saya ingin berdiskusi dan bertanya mengenai pertanian dan teknologinya agar dapat menemukan solusi dari permasalahan saya. </li>
    <li>Sebagai seorang pengguna, saya ingin membuat akun dengan mendaftar menggunakan alamat email agar bisa mengakses website. </li>
    <li>Sebagai pengguna yang telah mendaftar, saya bisa memasukkan alamat email dan password untuk masuk ke website. </li>
    <li>Sebagai pengguna yang lupa dengan password, saya dapat memberikan informasi alamat email yang terdaftar pada website agar akun saya dapat digunakan kembali. </li>
    <li>Sebagai seorang masyarakat umum, saya ingin membantu petani dalam menunjang kegiatan pertanian berkelanjutan.</li>
    <li>Sebagai pengguna, saya ingin mendapatkan poin pada setiap jawaban yang saya jawab, agar mendapatkan reputasi dalam website.</li>
    <li>Sebagai seorang pengguna, saya ingin melihat statistik pengguna lain dalam penggunaan website, agar mengetahui sejauh mana saya telah menelusuri website.</li>
    <li> Sebagai seorang petani, saya ingin membantu menjawab pertanyaan agar petani lain dapat menemukan solusi dari permasalahan mereka.</li>
    <li>Sebagai seorang petani, saya ingin membuat postingan/artikel untuk membantu memberikan informasi terkait dengan pertanian dalam membantu petani lain melangsungkan kegiatan pertaniannya.</li>
    <li>Sebagai seorang masyarakat umum, saya dapat mencari informasi seputar pertanian agar menambah wawasan saya.</li>
</ul>

## Spesifikasi Teknis Lingkungan Pengembangan

### Software

<ul>
    <li> Database       : MySQL </li>
    <li> Server         : Apache </li>
    <li> Text Editor    : Visual Studio Code </li>
    <li> UI Design      : Figma </li>
</ul>

### Hardware

<ul>
    <li> Prosesor       : Acer Intel Core i3-8130U 2.20GHz </li>
    <li> Memori         : 8 GB DDR4 </li>
    <li> Graphic card   : NVIDIA GeForce MX150 2GB VRAM </li>
    <li> Storage        : HDD 1 TB </li>
</ul>

### Tech Stack

<ul>
    <li> Front-end       : HTML, CSS/SCSS/SASS, Bootstrap, Vanilla Javascript </li>
    <li> Back-end        : PHP, Laravel, NodeJS </li>
</ul>

### Lainnya

<ul>
    <li> Task Management : Trello </li>
    <li> Software documentation   : Google Slide </li>
    <li> Version control dan collaboration platform : Github </li>
</ul>

## Hasil dan Pembahasan

### Use Case Diagram

![use_case](https://user-images.githubusercontent.com/66185022/120827451-054ea480-c58e-11eb-8c5a-dcfc421e4e9c.png)

### Activity Diagram

### Class Diagram

### Entity Relationship Diagram (ERD)

![ERD](https://user-images.githubusercontent.com/66185022/120827582-2c0cdb00-c58e-11eb-80cf-1f8214348a99.png)

### Software Architecture

![Arsitektur_agriask](https://user-images.githubusercontent.com/66185022/120827674-4646b900-c58e-11eb-9487-049abc02a41a.png)

### Fungsi Utama yang Dikembangkan

<ul>
    <li> User dapat mendaftar terlebih dahulu menggunakan alamat email di website AgriAsk untuk menggunakan fasilitas yang ada. </li>
    <li> User dapat membuat, mengedit, dan menghapus pertanyaa</li>
    <li> Version control dan collaboration platform : Github </li>
    <li> Satu postingan dapat memiliki banyak komentar/jawaban oleh user lain. </li>
    <li> Setiap user memiliki poin reputasi tergantung seberapa sering user membantu menjawab pertanyaan-pertanyaan dan poin pada permulaan dimulai dari 0. </li>
    <li> Jika komentar/jawaban dari user lain sekiranya membantu menjawab pertanyaan dari user yang mengajukan pertanyaan, maka user-user yang terdaftar di website dapat menambahkan skor kepada user yang menjawab dengan menekan tombol commend. Tombol commend akan menambah 10 poin kepada user yang menjawab. Jika jawaban tidak membantu, user lain dapat menekan tombol uncommend yang akan mengakibatkan pengurangan poin sebesar 5 kepada user yang menjawab. </li>
</ul>

### Fungsi CRUD

## Hasil Implementasi

## Testing (Test Cases)

### Positive Case

### Negative Case

## Saran untuk Pengembangan Berikutnya

## Menjalankan Aplikasi Pada Localhost

Repositori ini dibangun dengan Laravel versi 6.02 ke atas. Lakukanlah langkah-langkah di bawah ini untuk menjalankan project.

-   masuk ke direktori AgriAsk

```bash
$ cd AgriAsk
```

-   jalankan perintah composer install untuk mendownload direktori vendor

```bash
$ composer install
```

-   buat file .env lalu isi file tersebut dengan seluruh isi dari file .env.example (copy isi dari .env.example lalu paste di file .env)

-   jalankan perintah php artisan key generate

```bash
$ php artisan key:generate
```

-   Sesuaikan nama database, username dan password nya di file .env dengan database kalian.

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=<NAMA_DATABASE>
DB_USERNAME=root
DB_PASSWORD=
```

Jangan lupa untuk menjalankan server laravel

```bash
$ php artisan serve
```

Pastikan server Apache dan MySQL berjalan di XAMPP

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
