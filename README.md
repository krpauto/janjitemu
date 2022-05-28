1.Buat Folder di htdocs bernama wacnk

2.kemudian jalankan di localhost/wacnk

3. upload file sql di phpmyadmin yang bernama waci

4. jika ada tulisan Composer detected issues in your platform: Your Composer dependencies require a PHP version ">= 7.3.0". 
![ubah](https://user-images.githubusercontent.com/82790760/170815665-da5e3cc6-f86c-423c-a320-0c895299e06a.JPG)
ubah angka di line 7 dengan tulisan 70100

5. kemudian ubah koneksi database seperti gambar di bawah ini
![database](https://user-images.githubusercontent.com/82790760/170815753-d8335b39-cc1f-40a3-bcf6-73611c8e28af.JPG)

'hostname' => ('localhost'),
'username' => ('root'),
'password' => (''),
'database' => ('waci'),

6. kemudian buka file server.js dan buka terminal kemudian ketik npm install
![npm](https://user-images.githubusercontent.com/82790760/170815833-c3ae4add-2d4f-439f-b0cb-1d3a011cf6a0.JPG)

7. kemudian ketik node server.js di terminal
![node](https://user-images.githubusercontent.com/82790760/170815901-de7ed212-112e-4e25-8bf0-bea8c615da3c.JPG)
