<?php
    require "koneksi.php";

    if(isset($_POST['submit'])){
        if(tambah($_POST) > 0){
            echo "
                <script>
                    alert('data berhasil ditambahkan') ;
                    document.location.href='tambah.php' ;
                </script>

            ";
        }
        else{
            echo "
                <script>
                    alert('data tidak berhasil ditambahkan') ;
                   
                </script>

            ";
        }
    }
    
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Tambah Article</title>
        <style>
            * {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            body {
                font-family: Arial, sans-serif;
                background-color: #f1f1f1;
            }

            .container {
                max-width: 500px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            h1 {
                text-align: center;
                margin-bottom: 20px;
            }

            form ul {
                padding: 0;
            }

            form li {
                margin-bottom: 20px;
                display: flex;
                align-items: center;
            }

            form label {
                width: 120px;
                font-weight: bold;
            }

            form input,
            form textarea {
                width: 100%;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
            }

            form button {
                padding: 10px 20px;
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }
        </style>
        </style>
    </head>

    <body>
        <div class="container">
            <h1>Form Tambah Article</h1>
            <form action="" method="post" enctype="multipart/form-data">
                <ul>
                    <li>
                        <label for="judul">Judul</label>
                        <input type="text" id="judul" name="judul" required>
                    </li>
                    <li>
                        <label for="tanggal">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" required>
                    </li>
                    <li>
                        <label for="gambar">Gambar</label>
                        <input type="file" id="gambar" name="gambar" required>
                    </li>
                    <li>
                        <label for="deskripsi">Deskripsi:</label>
                        <input type="text" id="deskripsi" name="deskripsi"  required>
                    </li>
                    <li>
                        <button type="submit" name="submit">Submit</button>
                    </li>
                </ul>
            </form>
        </div>
    </body>

    </html>
