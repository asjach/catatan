- cek uuid drive: `lsblk -f`
- buat folder untuk menempatkan drive yang dimount:
    - /mnt/data : biasanya untuk drive
    - /media/data : biasanya untuk removable drive
    - /home/data : biasanya untuk spesifik user

- agar bisa melakukan modifikasi file maka foldernya harus diubah permissionnya (jika disimpan di luar folder user)
    `sudo chown -R $USER:$USER /mnt/data`
    contoh: `sudo chown -R $USER:$USER /mnt/master`

- buka fstab dengan `sudo vim /etc/fstab`
     
- tambahkan ke file `/etc/fstab`:

    ```
    untuk ntfs
    UUID= /mnt/madrasah ntfs defaults,noatime 0 0

    untuk ext4
    UUID=xxxx /mnt/madrasah ext4 defaults,noatime 0 2
    ```

- unmount seluruh drive dulu: `sudo umount -a`
- mount ulang `sudo mount -a`
- reboot

