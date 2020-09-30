# Editor.md

![](https://i.ibb.co/pyg87Zy/iconfinder-10-avatar-2754575-120521-Copy.png)

![](https://img.shields.io/github/stars/pandao/editor.md.svg) ![](https://img.shields.io/github/forks/pandao/editor.md.svg) ![](https://img.shields.io/github/tag/pandao/editor.md.svg) ![](https://img.shields.io/github/release/pandao/editor.md.svg) ![](https://img.shields.io/github/issues/pandao/editor.md.svg) ![](https://img.shields.io/bower/v/editor.md.svg)

**Daftar Isi**

[TOCM]

#Cloud Dark Pos
Beberapa fitur yang ada dalam aplikasi point of sale ini antara lain :
##Feature
- Pengaturan data barang
- Manajemen data kategori
- Manajemen user
- Manajemen Supplier
- Manajemen penyedia barang
- Transaksi pembelian
- Transaksi penjualan eceran dan grosir
- Retur penjualan
- Report data produk
- Report stok barang
- Report penjualan
- Laporan penjualan per tanggal
- Laporan penjualan per bulan
- Report penjualan per tahun
- Report untung / rugi
- Grafik stok barang
- Grafik penjualan per bulan
- Grafik penjualan pertahun
- Lokasi Toko
##Config File
Anda dapat mengubah Config file dengan configuration seperti ini pada config.php `Line 25` (Application/config.php).

    <?php
       $config['base_url'] = 'http://localhost/penjualan2/github';
    ?>
##Database File
Anda dapat mengubah Config Database file dengan configuration seperti ini pada config.php `Line 25` (Application/database.php).

    <?php
       $db['default']['hostname'] = 'localhost:3308';
	   $db['default']['username'] = 'root';
	   $db['default']['password'] = '1';
	   $db['default']['database'] = 'penjualan2';
	   $db['default']['dbdriver'] = 'mysqli';
    ?>





