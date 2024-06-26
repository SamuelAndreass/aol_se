var isEmailValid = false;
var isPhoneValid = false;
var isPasswordValid = false;
var isPasswordMatch = false;
var isNamaValid = true;

// Listen for input on email field
document.addEventListener('DOMContentLoaded', function() {
  var inputElement = document.getElementById('mail'); // Ganti dengan ID input HTML Anda
  var emessage = document.getElementById('e-response'); // Ganti dengan ID elemen pesan error Anda

  // Fungsi untuk memeriksa apakah input memenuhi kondisi Anda
  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }

  // Event listener untuk saat pengguna mengetik di input
  // Event listener untuk saat pengguna mengetik di input
inputElement.addEventListener('input', function(event) {
  // Kirim permintaan AJAX
  $.ajax({
    url: '../validationDB/check_email.php',
    type: 'POST',
    data: { email: event.target.value },
    success: function(response) {
      // Tampilkan respons
      $('#e-response').html(response);

      // Jika email sudah ada dalam database
      if (response.trim() === 'Email already exists') { // Ganti dengan pesan error yang sesuai dari server Anda
        event.target.style.borderColor = 'red'; // Ubah ke hitam
        isEmailValid = false; // Ubah status validasi email
        emessage.innerHTML = 'Email sudah digunakan untuk akun yang lain';
      } else if (validateEmail(event.target.value)) {
        event.target.style.borderColor = 'green'; // Ubah ke hijau jika kondisi terpenuhi
        emessage.innerHTML = ''; // Hapus pesan error
        isEmailValid = true;
      } else {
        event.target.style.borderColor = 'red'; // Ubah ke merah jika kondisi tidak terpenuhi
        emessage.innerHTML = 'Format email harus seperti blabla@blabla.com'; // Tampilkan pesan error
        isEmailValid = false;
      }
    }
  });
});

inputElement.addEventListener('blur', function(event) {
  if (isEmailValid === false) {
    event.target.style.borderColor = 'red'; // Tetap merah jika input tidak valid
  } else {
    event.target.style.borderColor = 'rgb(210, 210, 210)'; // Ubah ke hitam jika input valid
  }
});
});





var phoneIsValid = false; // Variable to hold the phone validation status
$(document).ready(function() {
  
  var phonemessage = document.getElementById("p-response")
  // Listen for input on phone field
  $('#phone').on('input', function() {
    // Get phone value
    var phone = $(this).val();

    // Define the pattern for valid phone number
    var pattern = /^08[0-9]{8,12}$/;

    // Check the phone number
   
     if(phone.length === 0){
      phoneIsValid = false; // Set phone validation status to true
      phonemessage.innerHTML = "Masukkan nomor telpon"
      isPhoneValid = false;
    }   
    else if(/^[0-9]+$/.test(phone) === false){
      phoneIsValid = false;
      phonemessage.innerHTML = "Nomor handphone hanya bisa diisi dengan angka";
      isPhoneValid = false;
    }else if(phone.length >= 15){
      phoneIsValid = false;
      phonemessage.innerHTML = "Nomor handphone lebih dari 14 karakter";
      isPhoneValid = false;
    } 
    else if(!phone.startsWith('08')) {
      phoneIsValid = false; // Set phone validation status to false
      phonemessage.innerHTML = "Nomor telepon harus dimulai dengan 08";
      isPhoneValid = false;
    } 
    else if(phone.length < 10 ){
      phoneIsValid = false;
      phonemessage.innerHTML = "Nomor handphone kurang dari 10 karakter";
      isPhoneValid = false;
    }  else {
      phoneIsValid = true; // Set phone validation status to true
      phonemessage.innerHTML = ""
      isPhoneValid = true;
    }
    var ajax_response;
    // Send AJAX request
    $.ajax({
      url: '../validationDB/chek_phone.php',
      type: 'POST',
      data: { phone: phone },
      success: function(response) {
        // Check the response
        if (response.indexOf('Phone already exists!') !== -1) {
          phoneIsValid = false; // Set phone validation status to false
          phonemessage.innerHTML = "Nomor telepon sudah digunakan untuk akun yang lain"
          isPhoneValid = false;
          phone.style.borderColor = 'red'
        }
      }
    });
  });
});


document.addEventListener('DOMContentLoaded', function() {
  var inputElement = document.getElementById('phone'); // Ganti dengan ID input HTML Anda
  var message = document.getElementById('p-message')
  // Fungsi untuk memeriksa apakah input memenuhi kondisi Anda
  function validateInput(value) {
    // Ganti ini dengan logika validasi Anda
    var isNumeric = /^[0-9]+$/.test(value);
    return value.startsWith('08') && value.length <= 14 && isNumeric && value.length>=10 && isPhoneValid === true;
  }

  // Event listener untuk saat pengguna mengetik di input
  inputElement.addEventListener('input', function(event) {
    if (validateInput(event.target.value)) {
      event.target.style.borderColor = 'green'; // Ubah ke hijau jika kondisi terpenuhi
      isPhoneValid = true
    } else {
      event.target.style.borderColor = 'red';   // Ubah ke merah jika kondisi tidak terpenuhi
    }
  });
  inputElement.addEventListener('blur', function(event) {
    if (!validateInput(event.target.value)) {
      event.target.style.borderColor = 'red'; // Tetap merah jika input tidak valid
    } else {
      event.target.style.borderColor = 'rgb(210, 210, 210)'; // Ubah ke hitam jika input valid
    }
  });
  // Event listener untuk saat input kehilangan fokus
  
});

// nama
document.addEventListener('DOMContentLoaded', function() {
  var inputElement = document.getElementById('name2'); // Ganti dengan ID input HTML Anda
  var nmessage = document.getElementById('n-message'); // Ganti dengan ID elemen pesan kesalahan

  // Fungsi untuk memeriksa apakah input memenuhi kondisi Anda
  function validateInput(value) {
    // Allow only alphabetical characters (letters)
    var isAlphabetical = /^[a-zA-Z\s]+$/.test(value);
    return value.length === 0 || isAlphabetical;
  }

  // Event listener untuk saat pengguna mengetik di input
  inputElement.addEventListener('input', function(event) {
    if (validateInput(event.target.value)) {
      event.target.style.borderColor = 'green'; // Ubah ke hijau jika kondisi terpenuhi
      // Event listener untuk saat input kehilangan fokus
      nmessage.innerHTML = ''; // Hapus pesan kesalahan
      isNamaValid = true;
      
    } else {
      event.target.style.borderColor = 'red'; // Ubah ke merah jika kondisi tidak terpenuhi
      nmessage.innerHTML = 'Harus karakter alphabet'; // Tampilkan pesan kesalahan
      isNamaValid = false;
    }
  });
  inputElement.addEventListener('blur', function(event) {
    if (!validateInput(event.target.value)) {
      event.target.style.borderColor = 'red'; // Tetap merah jika input tidak valid
    } else {
      event.target.style.borderColor = 'rgb(210, 210, 210)'; // Ubah ke hitam jika input valid
    }
  });
});

var validateElement = document.getElementById('password22');
document.addEventListener('DOMContentLoaded', function() {
  var nmessage = document.getElementById('message2');
  
  function validateInput(value) {
    var output = /^(?=.*\d)(?=.*[a-zA-Z]).{8,}$/.test(value); 
    return output;
  }
  
  validateElement.addEventListener('input', function(event) {
    if (validateInput(event.target.value)) {
      event.target.style.borderColor = 'green';
      nmessage.innerHTML = '';
      isPasswordValid = true;
    } else {
      event.target.style.borderColor = 'red';
      nmessage.innerHTML = 'Password harus berisi min. 8 karakter, kombinasi angka (0-9) dan huruf alfabet (A-Z)';
      isPasswordValid = false;
    }
  });
  validateElement.addEventListener('blur', function(event) { // Ganti 'inputElement' dengan 'validateElement'
    if (isPasswordValid === false) {
      event.target.style.borderColor = 'red';
      console.log('blur triggred')
    } else {
      event.target.style.borderColor = 'rgb(210, 210, 210)';
      console.log('blur triggred')
    }
    });
});





document.addEventListener('DOMContentLoaded', function() {
  var validateElement = document.getElementById('r-password');
  var nmessage = document.getElementById('r-message'); // Replace with the ID of your error message element
  // Function to check if the input meets your conditions
  var inputElement22 = document.getElementById('password22'); // Replace with the ID of your HTML input
  function validateInput(value) {
    return value === inputElement22.value;
  }
  
  // Event listener for when the user types in the input
  validateElement.addEventListener('input', function(event) { // Change 'input' to 'keyup'
    var isValid = validateInput(event.target.value); // Corrected event reference
    if (isValid) {
      event.target.style.borderColor = 'green'; // Change to green if the condition is met
      nmessage.innerHTML = ''; // Clear error message
      isPasswordMatch = true
    } else {
      event.target.style.borderColor = 'red'; // Change to red if the condition is not met
      nmessage.innerHTML = 'Password harus sama dengan password baru'; // Display error message
      isPasswordMatch = false;
      
    }
  });
  validateElement.addEventListener('blur', function(event) {
    if (!validateInput(event.target.value)) { // Jika input tidak valid
      event.target.style.borderColor = 'red'; // Ubah ke merah
    } else { // Jika input valid
      event.target.style.borderColor = 'rgb(210, 210, 210)'; // Ubah ke hitam
    }
  });
});






var button = document.getElementById('button-login'); 
// Daftar semua elemen input
var inputs = document.querySelectorAll('input');

// Fungsi untuk memeriksa apakah semua field telah diisi
function checkFields() {
  var empty = false;
  for (var i = 0; i < inputs.length; i++) {
      if (inputs[i].value === '') {
          empty = true;
      }
  }
  return empty;
}

// Fungsi untuk mengaktifkan atau menonaktifkan tombol submit
function toggleButton() {
  if (!checkFields() && isNamaValid && isPhoneValid && isEmailValid && isPasswordValid && isPasswordMatch) {
      button.removeAttribute('disabled');
      button.style.backgroundColor = 'rgb(70, 171, 72)';
      button.style.color = 'white';
  } else {
      button.setAttribute('disabled', 'disabled');
      button.style.backgroundColor= '#dcdcdc';
      button.style.color = 'rgb(164, 164, 164)';
  }
}


// Event listener untuk setiap perubahan pada field input
inputs.forEach(function(input) {
  input.addEventListener('keyup', function() {
      toggleButton();
  });
});
const togglePassword = document.querySelector('#togglePassword');
const password = document.getElementById('password22');
togglePassword.addEventListener('click', function (e) {
  // toggle the type attribute
  const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
  password.setAttribute('type', type);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
});

const togglePassword2 = document.querySelector('#togglePassword2');
const password2 = document.getElementById('r-password');
togglePassword2.addEventListener('click', function (e) {
  // toggle the type attribute
  const type2 = password2.getAttribute('type') === 'password' ? 'text' : 'password';
  password2.setAttribute('type', type2);
  // toggle the eye / eye slash icon
  this.classList.toggle('bi-eye');
});