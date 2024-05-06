// check re-password
var repass = document.getElementById("r-password")
var rmassage = document.getElementById("r-message")
repass.oninput = function() {
  if (this.value != password){
    rmassage.innerHTML = "Password harus sama dengan password baru"
  } else {
    rmassage.innerHTML = ""
  }
}

var password = document.getElementById("password");
var message = document.getElementById("message");

password.oninput = function() {
var pattern = /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/;
if(!pattern.test(this.value) ) {
   message.innerHTML = "Password harus berisi min. 8 karakter, kombinasi angka (0-9) dan huruf alfabet (A-Z)";
} else if(this.value === ''){
    message.innerHTML = "Password harus berisi 8 karakter";
} else{
  message.innerHTML = ""
  }
};

// Listen for input on email field
$('#mail').on('input', function() {
  // Get email value
  var email = $(this).val();
  // Send AJAX request
  $.ajax({
    url: '../php/check_email.php',
    type: 'POST',
    data: { email: email },
    success: function(response) {
      // Display response
      $('#e-response').html(response);
    }
  });
});

// Fungsi untuk memeriksa apakah semua field sudah terisi dan valid
function checkAllFieldsValid() {
  var nama2 = document.getElementsByName('nama2')[0].value;
  var phonenum2 = document.getElementsByName('phonenum2')[0].value;
  var mail = document.getElementsByName('mail')[0].value;
  var password = document.getElementsByName('password')[0].value;
  var rpassword = document.getElementsByName('r-password')[0].value;

  // Periksa apakah semua field sudah terisi dan valid
  if (nama2 && phonenum2 && mail && password && rpassword && password === rpassword) {
    return true;
  } else {
    return false;
  }
}

// Fungsi untuk mengaktifkan atau menonaktifkan tombol submit
function toggleSubmitButton() {
  var button = document.getElementById('button-login');

  if (checkAllFieldsValid()) {
    button.disabled = false;
    button.style.backgroundColor = 'green'; // Merubah warna tombol
  } else {
    button.disabled = true;
    button.style.backgroundColor = 'grey'; // Merubah warna tombol
  }
}

// Panggil fungsi toggleSubmitButton setiap kali input berubah
$('input').on('input', toggleSubmitButton);



$(document).ready(function() {
  var phoneIsValid = false; // Variable to hold the phone validation status
  var phonemessage = document.getElementById("p-response")
  // Listen for input on phone field
  $('#phone').on('input', function() {
    // Get phone value
    var phone = $(this).val();

    // Define the pattern for valid phone number
    var pattern = /^08[0-9]{8,12}$/;

    // Check the phone number
    if(phone.length >= 15){
      phoneIsValid = false;
      phonemessage.innerHTML = "tidak boleh lebih dari 14 digit";
    } else if(/^[0-9]+$/.test(phone) === false){
      phoneIsValid = false;
      phonemessage.innerHTML = "Hanya bole diisi dengan angka";
    } else if(!phone.startsWith('08')) {
      phoneIsValid = false; // Set phone validation status to false
      phonemessage.innerHTML = "Nomor telepon harus dimulai dengan 08";
    } else {
      phoneIsValid = true; // Set phone validation status to true
      phonemessage.innerHTML = ""
    }

    // Send AJAX request
    $.ajax({
      url: '../php/chek_phone.php',
      type: 'POST',
      data: { phone: phone },
      success: function(response) {
        // Check the response
        if (response.indexOf('Phone already exists!') !== -1) {
          phoneIsValid = false; // Set phone validation status to false
          phonemessage.innerHTML = "Nomor telepon sudah digunakan untuk akun yang lain"
        }
      }
    });
  });
});


document.addEventListener('DOMContentLoaded', function() {
  var inputElement = document.getElementById('phone'); // Ganti dengan ID input HTML Anda

  // Fungsi untuk memeriksa apakah input memenuhi kondisi Anda
  function validateInput(value) {
    // Ganti ini dengan logika validasi Anda
    var isNumeric = /^[0-9]+$/.test(value);
    return value.startsWith('08') && value.length <= 14 && isNumeric;
  }

  // Event listener untuk saat pengguna mengetik di input
  inputElement.addEventListener('input', function(event) {
    if (validateInput(event.target.value)) {
      event.target.style.borderColor = 'green'; // Ubah ke hijau jika kondisi terpenuhi
    } else {
      event.target.style.borderColor = 'red';   // Ubah ke merah jika kondisi tidak terpenuhi
    }
  });

  // Event listener untuk saat input kehilangan fokus
  inputElement.addEventListener('blur', function(event) {
    event.target.style.borderColor = 'black';   // Kembalikan ke hitam saat berpindah dari input
  });
});


