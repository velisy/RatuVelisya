<style>
        body {
            margin: 0;
            background-image: url('carlos.jpg'); /* ganti dengan path gambar latar kamu */
            color:rgb(71, 62, 60);
            font-weight: bold;
        }

        nav a:hover {
            background-color: #c0392b;
        }

        input[type="text"] {
        
            border: none;
            border-radius: 6px;
            margin-bottom: 15px;
            background-color: #fff;
            color: #2c3e50;
        }

        button {
            
            border: none;
            border-radius: 6px;
            background-color:rgb(51, 55, 58);
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color:rgb(32, 38, 43);
        }

        
    </style>

<?php include("header.php"); ?>

<center><h2>Tambah Barang</h2> </center>

<form method="post"> 
  <center>  Kode Barang: <input type="text" name="kode_barang" ><br> </center>
   <center>  Nama Barang: <input type="text" name="nama_barang"><br> </center>
   <?php
     echo ".";
     echo ".";
     $nama = "webhozz";
?>
   <center> <button type="submit">Simpan</button> </center>
</form>

<?php include("footer.php"); ?>