<?php
// $host = "localhost";
// $user = "root";
// $pass = "";
// $name = "data_mahasiswa";



$conn = mysqli_connect("localhost", "root", "", "data_mahasiswa",) or die ("Koneksi ke database gagal!");
if (!$conn) {
    echo "<script>
        alert('Gagal connect cuy, kayak hubungan lu sama dia hehe!')
    </script>";
}
?>

<?php

    function tambah($data){
        global $conn ;
        $judul = htmlspecialchars($data["judul"]) ;
        $tanggal = htmlspecialchars($data["tanggal"]) ;
        $deskripsi = htmlspecialchars($data["deskripsi"]) ;
        
        $gambar = upload() ;
        if(!$gambar){
            return false ;
        }


        $query = "INSERT INTO table_articel
                VALUES
                ( '','$judul','$tanggal','$gambar','$deskripsi')
            " ;
        mysqli_query($conn,$query) ;
                return mysqli_affected_rows($conn) ;

    }

?>

<?php 

    function upload(){
        
        $namafile = $_FILES['gambar']['name'] ;
        $ukuranfile = $_FILES['gambar']['size'] ;
        $error = $_FILES['gambar']['error'] ;
        $tmp = $_FILES['gambar']['tmp_name'] ;

        //lolos pengecekan gambar siap diupload
        move_uploaded_file($tmp,'foto/'.$namafile) ;
        return $namafile ;

    }

?>
<?php
    function tampil($query){
        global $conn ;
        $rows = [] ;
        $result = mysqli_query($conn,$query) ;
            while($row = mysqli_fetch_assoc($result)){
                $rows[] = $row ;
            }
        return $rows ;  
    }

?>


<?php

    function hapus($n){
        global $conn ;
        mysqli_query($conn,"DELETE FROM table_articel WHERE id = $n ") ;
        return mysqli_affected_rows($conn) ;
    }

?>

<?php 

    function ubah($data){
        global $conn ;
        $no = $data["id"] ;
        $judul = htmlspecialchars($data["judul"]) ;
        $tanggal = htmlspecialchars($data["tanggal"]) ;
        $deskripsi = htmlspecialchars($data["deskripsi"]) ;
        $gambarlama = htmlspecialchars($data["gambarlama"]) ;

        //cek apakah user pilih gamabr baru atau tidak
        if($_FILES['gambar']['error'] === 4){
            $gambar = $gambarlama ;
        }
        else{
            $gambar = upload() ;
        }

        $query = "UPDATE table_articel SET 
                    judul = '$judul',
                    tanggal = '$tanggal',
                    deskripsi = '$deskripsi',
                    gambar = '$gambar'
                    WHERE id = $no ;
            " ;
        mysqli_query($conn,$query) ;

        return mysqli_affected_rows($conn) ;
    }
    

?>