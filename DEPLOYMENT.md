# Panduan Deployment ke Render.com 🚀

Proyek ini telah siap untuk langsung di-deploy ke **Render.com**. Berikut adalah 2 pilihan cara deploy:

---

## 🎯 Pilihan 1: Deploy Otomatis via Blueprint (`render.yaml`) - SANGAT DIREKOMENDASIKAN

1. Login ke akun [Render.com](https://dashboard.render.com/).
2. Klik tombol **New +** di pojok kanan atas, lalu pilih **Blueprint**.
3. Hubungkan akun GitHub Anda dan pilih repositori `Nurlelarofiwoh/Portfolio-NurlelaRofiqoh`.
4. Render akan membaca file [`render.yaml`](file:///c:/xampp/htdocs/portofolio_NR/render.yaml) secara otomatis.
5. Klik **Apply**. Render akan secara otomatis membangun (build) container Docker dan mendeploy aplikasi Anda!

---

## 🛠️ Pilihan 2: Deploy Manual via Render Dashboard (Docker Web Service)

Jika ingin membuat Web Service secara manual di Render:

1. Buka [Render Dashboard](https://dashboard.render.com/).
2. Klik **New +** -> **Web Service**.
3. Pilih **Build and deploy from a Git repository**, lalu hubungkan ke `Nurlelarofiwoh/Portfolio-NurlelaRofiqoh`.
4. Isi konfigurasi berikut:
   - **Name**: `portfolio-nurlela-rofiqoh` (atau sesuai keinginan Anda)
   - **Language / Runtime**: `Docker`
   - **Branch**: `main`
   - **Region**: `Singapore` (atau terdekat)
   - **Instance Type**: `Free`
5. Masukkan **Environment Variables** di bagian **Advanced**:
   - `APP_ENV` = `production`
   - `APP_DEBUG` = `false`
   - `APP_KEY` = (Buka terminal lokal Anda dan jalankan `php artisan key:generate --show`, lalu paste hasilnya di sini, misal `base64:...`)
   - `APP_URL` = `https://<nama-app-anda>.onrender.com`
   - `DB_CONNECTION` = `sqlite`
   - `LOG_CHANNEL` = `stderr`
   - `SESSION_DRIVER` = `file`
   - `CACHE_STORE` = `file`
6. Klik **Create Web Service**.

---

## 💡 Troubleshooting & Catatan Penting
- **APP_KEY**: Pastikan nilai `APP_KEY` terisi di Environment Variables agar enkripsi laravel berfungsi.
- **Log**: Jika terjadi kendala saat build/runtime, buka tab **Logs** di Render dashboard. `LOG_CHANNEL=stderr` akan menampilkan error log Laravel secara realtime.
- **Gambar Profile**: Pastikan file gambar profile ada di folder `public/images/profil_cv.jpg` atau `public/images/profile_cv.jpg`.
