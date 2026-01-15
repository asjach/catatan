# APLIKASI
## google
    -google chrome: `paru google-chrome`

## XAMPP atau LAMPP
- download di `https://www.apachefriends.org/download.html`
- buat file bisa dieksekusi dengan cara:
`chmod +x namafile`
- eksekusi file run tersebut dengan perintah:
`sudo ./namafile`
- folder instalasi di `/opt/lampp`
- untuk menjalankan panel lampp: 
`sudo ./manager-linux-x64.run` di folder /opt/lampp

- ubah permission di /opt/lampp/htdocs/
    ```
    sudo chmod -R 777 /opt/lampp/htdocs
    ```

- aktifasi server melalui terminal
    `sudo /opt/lampp/lampp start`
    `sudo /opt/lampp/lampp stop`
    `sudo /opt/lampp/lampp restart`