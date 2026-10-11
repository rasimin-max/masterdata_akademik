
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Kegiatan Mahasiswa</title>
    <meta name="description" content="Formulir pendaftaran kegiatan mahasiswa STTI NIIT I-Tech menggunakan HTML5 lanjutan.">
</head>
<body>
    <!-- Header & Navigasi Semantik -->
    <header>
        <h1>Pendaftaran Kegiatan Mahasiswa</h1>
        <nav aria-label="Navigasi Utama">
            <ul>
                <li><a href="#informasi">Informasi Kegiatan</a></li>
                <li><a href="#jadwal">Jadwal Acara</a></li>
                <li><a href="#formulir">Formulir Pendaftaran</a></li>
                <li><a href="#kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>

    <!-- Konten Utama -->
    <main>
        <!-- Section 1: Informasi dan Media -->
        <section id="informasi">
            <h2>Informasi Kegiatan Seminar & Workshop IT 2026</h2>
            <p>Selamat datang di halaman pendaftaran resmi kegiatan kampus. Silakan baca ketentuan dan informasi di bawah ini sebelum mengisi formulir.</p>
            
            <!-- Elemen Multimedia: Figure & Figcaption -->
            <figure>
                <img src="img/kegiatan.jpg" alt="Suasana workshop teknologi di auditorium kampus" width="600">
                <figcaption>Suasana kegiatan workshop pengembangan web dan aplikasi tahun sebelumnya.</figcaption>
            </figure>

            <!-- Elemen Interaktif: Details & Summary -->
            <details>
                <summary>Ketentuan dan Syarat Peserta</summary>
                <ul>
                    <li>Peserta merupakan mahasiswa aktif STTI NIIT I-Tech.</li>
                    <li>Wajib mengisi formulir dengan data yang valid dan benar.</li>
                    <li>Mengikuti seluruh rangkaian kegiatan dari awal hingga akhir.</li>
                </ul>
            </details>
        </section>

        <!-- Section 2: Tabel Akademik / Kegiatan -->
        <section id="jadwal">
            <h2>Jadwal Tahapan Kegiatan</h2>
            <table border="1" cellpadding="8" cellspacing="0">
                <caption>Tabel Jadwal Pelaksanaan Kegiatan Mahasiswa</caption>
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pendaftaran & Seleksi Berkas</td>
                        <td>12 - 20 Oktober 2026</td>
                        <td>08:00 - 16:00 WIB</td>
                        <td>Dibuka</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Technical Meeting</td>
                        <td>22 Oktober 2026</td>
                        <td>13:00 - selesai</td>
                        <td>Menunggu</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Pelaksanaan Seminar Utama</td>
                        <td>25 Oktober 2026</td>
                        <td>09:00 - 15:00 WIB</td>
                        <td>Menunggu</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Workshop Praktis & Mentoring</td>
                        <td>26 Oktober 2026</td>
                        <td>09:00 - 16:00 WIB</td>
                        <td>Menunggu</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Pengumuman & Penutupan</td>
                        <td>28 Oktober 2026</td>
                        <td>16:00 WIB</td>
                        <td>Menunggu</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <!-- Section 3: Form Pendaftaran (Minimal 12 Kontrol & Validasi) -->
        <section id="formulir">
            <h2>Formulir Pendaftaran Kegiatan</h2>
            <form action="proses.php" method="POST" enctype="multipart/form-data">
                
                <!-- Fieldset 1: Data Pribadi -->
                <fieldset>
                    <legend>Data Pribadi Mahasiswa</legend>
                    
                    <!-- Kontrol 1: Text (NIM) -->
                    <p>
                        <label for="nim">NIM</label><br>
                        <input type="text" id="nim" name="nim" placeholder="Contoh: 422231001" pattern="[0-9]{9,12}" required>
                    </p>

                    <!-- Kontrol 2: Text (Nama Lengkap) -->
                    <p>
                        <label for="nama">Nama Lengkap</label><br>
                        <input type="text" id="nama" name="nama" minlength="3" maxlength="100" required>
                    </p>

                    <!-- Kontrol 3: Email -->
                    <p>
                        <label for="email">Email Kampus / Pribadi</label><br>
                        <input type="email" id="email" name="email" placeholder="nama@email.com" required>
                    </p>

                    <!-- Kontrol 4: Telepon -->
                    <p>
                        <label for="telepon">Nomor Telepon / WhatsApp</label><br>
                        <input type="tel" id="telepon" name="telepon" pattern="[0-9]{10,15}" placeholder="081234567890" required>
                    </p>

                    <!-- Kontrol 5: Date (Tanggal Lahir) -->
                    <p>
                        <label for="tgl_lahir">Tanggal Lahir</label><br>
                        <input type="date" id="tgl_lahir" name="tgl_lahir" required>
                    </p>
                </fieldset>

                <!-- Fieldset 2: Data Akademik & Pilihan -->
                <fieldset>
                    <legend>Detail Akademik & Minat</legend>

                    <!-- Kontrol 6: Select (Program Studi) -->
                    <p>
                        <label for="prodi">Program Studi</label><br>
                        <select id="prodi" name="prodi" required>
                            <option value="">-- Pilih Program Studi --</option>
                            <option value="ti">Teknik Informatika</option>
                            <option value="si">Sistem Informasi</option>
                        </select>
                    </p>

                    <!-- Kontrol 7: Number (Semester) -->
                    <p>
                        <label for="semester">Semester</label><br>
                        <input type="number" id="semester" name="semester" min="1" max="14" required>
                    </p>

                    <!-- Kontrol 8: Textarea (Alamat) -->
                    <p>
                        <label for="alamat">Alamat Domisili</label><br>
                        <textarea id="alamat" name="alamat" rows="4" required></textarea>
                    </p>

                    <!-- Kontrol 9: Radio (Jenis Kelamin) -->
                    <fieldset>
                        <legend>Jenis Kelamin</legend>
                        <label><input type="radio" name="jenis_kelamin" value="L" required> Laki-laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
                    </fieldset>

                    <!-- Kontrol 10: Checkbox (Bidang Minat) -->
                    <fieldset>
                        <legend>Bidang Minat Kegiatan</legend>
                        <label><input type="checkbox" name="minat[]" value="web"> Web Development</label>
                        <label><input type="checkbox" name="minat[]" value="mobile"> Mobile Apps</label>
                        <label><input type="checkbox" name="minat[]" value="ai"> Artificial Intelligence</label>
                    </fieldset>

                    <!-- Kontrol 11: File Upload (Bukti/Foto) -->
                    <p>
                        <label for="berkas">Unggah Berkas / Kartu Mahasiswa (JPG/PNG)</label><br>
                        <input type="file" id="berkas" name="berkas" accept=".jpg, .jpeg, .png" required>
                    </p>

                    <!-- Kontrol 12: Checkbox Persetujuan -->
                    <p>
                        <label>
                            <input type="checkbox" name="persetujuan" required> Saya menyatakan bahwa data yang diisi sudah benar dan dapat dipertanggungjawabkan.
                        </label>
                    </p>
                </fieldset>

                <!-- Tombol Submit & Reset -->
                <button type="submit">Kirim Pendaftaran</button>
                <button type="reset">Reset Formulir</button>
            </form>
        </section>

        <!-- Informasi Tambahan (Article/Aside) -->
        <aside>
            <h2>Pengumuman Penting</h2>
            <article>
                <h3>Batas Akhir Pendaftaran</h3>
                <p>Pendaftaran akan ditutup otomatis pada tanggal 20 Oktober 2026 pukul 23:59 WIB. Pastikan seluruh berkas terunggah dengan benar.</p>
            </article>
        </aside>
    </main>

    <!-- Footer & Address Semantik -->
    <footer id="kontak">
        <address>
            Panitia Kegiatan Mahasiswa STTI NIIT I-Tech<br>
            Jl. Gedung Hijau Raya, Jakarta Selatan / Cikarang, Jawa Barat<br>
            Email: panitia@niit-itech.ac.id
        </address>
        <p>&copy; 2026 STTI NIIT I-Tech. Hak cipta dilindungi undang-undang.</p>
    </footer>
</body>
</html>