## Perintah Dasar
- `rm -r nama_folder`   # menghapus direktori yang ada isinya
- `rmdir nama_folder`   # menghapus direktori yang kosong


## Manajemen Sistemu
- sudo pacman -Syu          # Update sistem
- sudo pacman -Syyu         # Force refresh repo + update
- sudo pacman -S paket      # Install paket
- sudo pacman -R paket      # Hapus paket
- sudo pacman -Rs paket     # Hapus + dependensi
- sudo pacman -Rns paket    # Hapus bersih (termasuk config)
- sudo pacman -Ss keyword   # Cari paket
- sudo pacman -Qi paket     # Info paket terpasang
- sudo pacman -Ql paket     # Lihat file paket


## Pembersihan Sistem
- sudo pacman -Sc           # Hapus cache lama
- sudo pacman -Scc          # Hapus semua cache
- sudo paccache -r          # Simpan 3 versi paket terakhir
- sudo paccache -ruk0       # Hapus semua cache


## Informasi Sistem
- neofetch                  # Info sistem
- fastfetch                 # Alternatif neofetch (lebih cepat)
- uname -a                  # Info kernel
- lsb_release -a            # Info distro
- free -h                   # RAM
- df -h                     # Storage
- lsblk                     # Disk & partisi
- lsblk -f                  # Disk & Partisi dengan UUID nya

