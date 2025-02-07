<?php
include "koneksi.php";

    $no = $_GET['kode'] ;
    
    if(hapus($no) > 0){
            echo "
                <script>
                    alert('data berhasil dihapus') ;
                    document.location.href='index.php' ;
                </script>
            ";
    }
    else{
            echo "
                <script>
                    alert('data tidak berhasil dihapus') ;
                    document.location.href='index.php' ;
                </script>

            ";
    }



?>

<!-- end -->