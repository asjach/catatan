## sinkronisasi jam dual boot:
- di terminal linux: `sudo timedatectl set-local-rtc 1 --adjust-system-clock`
- lakukan sinkronisasi waktu di windows


## setting grub dual boot
- cek `ls /sys/firmware/efi` jika UEFI dan windows juga UEFI bisa muncul
- install pendeteksi os di linux: `sudo pacman -S os-prober` 
- lalu ubah file grub:
    - `sudo vim /etc/default/grub`
    - aktifkan bagian yang dikomentari: `#GRUB_DISABLE_OS_PROBER=false`
    - generate ulang grub : `sudo grub-mkconfig -o /boot/grub/grub.cfg`
    - akan muncul tulisan: Found Windows Boot Manager on ....
    - reboot
    
    - untuk mengubah urutan grub: 

