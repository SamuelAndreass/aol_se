<?php 
  session_start();
  include("config.php");
  if((!isset($_SESSION['role']) || $_SESSION['role'] != 'pemilik kos') || (!isset($_SESSION['role']) || $_SESSION['role'] != 'pencari kos')){
    echo "<script>alert('forbbiden access to this page')
    document.location='../page/menu.php'</script>";
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }
        .container {
            background-color: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
        }
        .section {
            margin-bottom: 20px;
        }
        .section h2 {
            margin-bottom: 10px;
        }
        .section div {
            margin-bottom: 5px;
        }
        .section label {
            display: block;
            margin-bottom: 5px;
        }
        .section input, .section select {
            width: calc(100% - 10px);
            padding: 5px;
            margin-bottom: 10px;
        }
        .section .payment-options {
            display: flex;
            justify-content: center; /* Center the QR code */
        }
        .section .payment-options img {
            width: 150px; /* Adjust this value to make the QR code smaller */
            height: auto; /* Maintain aspect ratio */
        }
        .section .room-image {
            width: 100%; /* Default to 100% width */
            max-width: 200px; /* Limit the maximum width to 200px */
            height: auto; /* Maintain aspect ratio */
            display: block; /* Make sure the image is displayed as a block element */
            margin: 0 auto; /* Center the image */
        }
        .confirm-button {
            display: flex;
            justify-content: center;
        }
        .confirm-button button {
            padding: 10px 20px;
            background-color: green;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<?php $id = $_SESSION['id']; 
    $q1 = mysqli_query($con, "SELECT * FROM pencari_kos where pencariID = '$id'");
    if($q1){
        $row = mysqli_fetch_assoc($q1);
        if($row){
            $name = $row['namaUser'];
            $phone = $row['nomorTelpon'];
        }
    }
?>
<div class="container">
    <div class="section">
    <form action="../validationDB/phpinsertPembayaranDatabase.php" method="POST">
        <h2>Informasi Penyewa</h2>
        <div>Nama penyewa: <span id="nama-penyewa"><?php echo "$name"?></span></div>
        <div>Nomor HP: <span id="nomor-hp"><?php echo "$phone"?></span></div>
    </div>

    <div class="section">
        <h2>Scan Disini</h2>
        <div class="payment-options">
            <img src="../images/properties/image.png" alt="QR Code">
        </div>
    </div>

    <div class="section">
        <h2>Detail Order</h2>
        <img src="../images/properties/1.jpg" alt="kamar kost" class="room-image">
        <div style="margin-top:2rem;">Kost Coliving Ciputat | Putra</div>
        <div>WiFi · Kasur · K. Mandi Dalam</div>
    </div>
    <div class="section">
    <div>Jumlah Penyewa: <input type="number" id="jumlah-penyewa" name="jumlah-penyewa" value="1" min="1" max="2"></div>
    <div>Durasi Sewa/bulan: <input type="number" id="durasi-sewa" name="durasi-sewa" value="1" min="1" max="12"></div>
    <div>Tanggal mulai menyewa: <input type="date" id="begin" name="begin" placeholder="dd-mm-yyyy" value="" max="2030-12-31"></div>
    <div>Biaya sewa kos: <span id="biaya-sewa">Rp1.200.000</span></div>
    <div>Biaya layanan: Rp2.000</div>
    <input type="hidden" id="biaya-sewa2" name="biaya-sewa2">
    <input type="hidden" value="2000" name="biaya-sewa3">
</div>


    <div class="confirm-button">
        <button name="submit" value="submit" >CONFIRM</button>
    </div>
</form>
</div>

<script>
    function editInfo() {
        var newName = prompt("Enter new name:");
        if (newName !== null) {
            document.getElementById('nama-penyewa').innerText = newName;
        }
        var newNumber = prompt("Enter new phone number:");
        if (newNumber !== null) {
            document.getElementById('nomor-hp').innerText = newNumber;
        }
        var newDate = prompt("Enter new rental start date (DD - MM - YYYY):");
        if (newDate !== null) {
            document.getElementById('tanggal-sewa').innerText = newDate;
        }
    }

    function confirmOrder() {
        // Implement your confirmation logic here
        alert("Berhasil melakukan pembayaran");
        window.location.href ='menu.php';
    }

    var today = new Date().toISOString().split('T')[0];
    document.getElementById('begin').setAttribute('min', today);

    var dateInput = document.getElementById('begin');

    // Dapatkan nilai dari elemen input
    var selectedDate = dateInput.value;
    

    // Cetak nilai ke konsol
    
var durasiSewaInput = document.getElementById('durasi-sewa');
var biayaSewaSpan = document.getElementById('biaya-sewa');

// Fungsi untuk mengubah biaya sewa
function ubahBiayaSewa() {
    var durasiSewa = durasiSewaInput.value;
    var biayaSewa;

    // Mengubah biaya sewa berdasarkan durasi sewa
    if (durasiSewa == 1) {
        biayaSewa = 1200000;
    } else if (durasiSewa == 3) {
        biayaSewa = 3100000;
    } else if (durasiSewa == 12) {
        biayaSewa = 12100000;
    } else {
        biayaSewa = 1200000 * durasiSewa;
    }

    // Memperbarui biaya sewa di HTML
    biayaSewaSpan.textContent = 'Rp' + biayaSewa.toLocaleString('id-ID');

    document.getElementById('biaya-sewa2').value = biayaSewa;
}

// Menambahkan event listener untuk event 'change'
durasiSewaInput.addEventListener('change', ubahBiayaSewa);



// Memanggil fungsi untuk mengatur biaya sewa awal
ubahBiayaSewa();
</script>

</body>
</html>