<?php 
include ("../page/config.php");
if (isset($_POST["submit"])) {
    $transactionDate = $_POST['begin'];
    $biaya_sewa = floatval($_POST['biaya-sewa2']); 
    $biaya_aplikasi = floatval($_POST['biaya-sewa3']);
    $totalbayar = $biaya_sewa + $biaya_aplikasi;
    $totalpenyewa = $_POST['jumlah-penyewa'];
    $durasisewa = $_POST['durasi-sewa'];
    $pencariID = $_POST['idPencari'];
    $idkos = $_POST['idKos'];
 

   
    
       $sql = "INSERT INTO `pembayaran`( `transactionDate`, `total_bayar`, `total_penyewa`, `durasi_sewa`, `idKos`, `pencariID`) VALUES ('$transactionDate','$totalbayar','$totalpenyewa','$durasisewa', '$idkos', '$pencariID')";
       $result = mysqli_query($con, $sql);
 
       if ($result) {
          // If the user was created successfully, return a success message
          echo "<script>alert('ubah data sukses')
            document.location='../page_afterlogin/menu2.php'</script>";
       } else {
        echo "<script>alert('ubah data gagal')
       document.location='../page_afterlogin/menu2.php'</script>";
         
       }
}?>