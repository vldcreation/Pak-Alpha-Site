------------------------------------------------------------
Build with Framework Yii 2.0
Fitur:
CRUD produk;
CRUD kategori;
CRUD supplier;
Bootstrap Yii:
Login
Register with encrypt password
Logout
RBAC Hak Akses User
Redirect all user if not logged in
------------------------------------------------------------
DB_Name		: db_pos.sql
------------------------------------------------------------
-------------------Info Akun--------------------------------
Super User Admin Pak Alpha

username = admin
password = viktor

Default-user
username = percobaan
password = percobaan

username = percobaan3
password = percobaan

username = ad
password = ad


----------------------default theme------------------------
Default-Them = Yii/theme
Theme-Current = Interior

Cara Set ke Default-Theme

Cek app/config/web.php

'view' => [
        'theme' => [
        'pathMap' => ['@app/views' => '@app/themes/interior'],
        'baseUrl' => '@web/../themes/interior',
        ],
    ],
*Hapus Potongan Kode tersebut
-------------------------------------------------------------
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////
Step:
1.Menggunakan php 5.6++
2.create dan import db.sql
3.akses viewPath index (__CODEFILE__)----->(localhost/..direktori/TASK1/web)
4.done
/////////////////////////////////////////////////////////////
@path:@view/views/web

Author | 11319028 |@&cVLD