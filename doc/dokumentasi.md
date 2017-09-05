# FLS VoteApp
Merupakan aplikasi yang digunakan untuk pemilihan kelas dan voting komunitas pada acara Future Leader Summit 2017. Aplikasi ini ditenagai oleh Codeigniter Versi 3.

## CHANGELOG
### Release for V.1.1
- Penambahan fitur pilih makanan untuk `delegates`
- Penambahan `bukaTutupKelas` menu makanan untuk `admin`
- penulisan ulang URL MainController => `members` untuk fungsi vote, pilih-workshop dan pilih-menu
- Memperbaiki Tampilan E-Ticket `delegates`
- Penambahan `Pilih Makanan` di dashboard `delegates`
- Perbaikan bug pada issue #17 

***
## Release for V.1.0
- 2 September 2017 (updated)

## User Groups
- Rangers | admin
  - Merupakan Rangers FLS 2017 (PID)
  - Dapat mengelola user (aktif/menonaktifkan members) *
  - Dapat melihat hasil voting komunitas
  - Dapat melihat list delegates pada kelas workshop
  - Dapat membuka dan menutup kelas/voting *
  - Dapat melakukan update password

- Delegates | members
  - Login sesuai email pendaftaran
  - Dapat memilih kelas (Hanya satu kali | tidak bisa berubah) **
  - Dapat melakukan vote komunitas (hanya satu kali | tidak bisa dirubah) **
  - Melihat informasi kelas & organisasi
  - Dapat melakukan update password

Catatan :
- _* IT Only_
- _** Jika kelas sudah dibuka_

## Tools Development
- **Atom** | Text Editor
- **Codeigniter 3.1.5** | PHP Framework
- **Bootstrap 3** | CSS Framework
- **Paper Bootstrap** | Basic Template by CreativeTIM
- **Ion Auth** | Library for Autentifikasi Codeigniter
- **Font Awesome & Themify Icons** | Icon
- **Git on Github** | Version Control
- **Trello** | Collaboration Issue
