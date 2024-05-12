var isPasswordValid = false;
var isPho = false;
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("sign-btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}



document.addEventListener('DOMContentLoaded', function() {
  var inputElement = document.getElementById('phone'); // Ganti dengan ID input HTML Anda
  var message = document.getElementById('p-message2')
  // Fungsi untuk memeriksa apakah input memenuhi kondisi Anda
  function validateInput(value) {
    // Ganti ini dengan logika validasi Anda
    var isNumeric = /^[0-9]+$/.test(value);
    return value.startsWith('08') && isNumeric && value.length >= 2;
  }

  // Event listener untuk saat pengguna mengetik di input
  inputElement.addEventListener('input', function(event) {
    if (validateInput(event.target.value)) {
      event.target.style.borderBottomColor  = 'black'; // Ubah ke hijau jika kondisi terpenuhi
      message.innerHTML = '';
      isPho = true;
    } else {
      event.target.style.borderBottomColor  = 'red';   // Ubah ke merah jika kondisi tidak terpenuhi
      message.innerHTML = 'Format nomor handphone salah';
      isPho = false;
    }
  });
  inputElement.addEventListener('blur', function(event) {
    if (!validateInput(event.target.value)) {
      event.target.style.borderColor = 'red'; // Tetap merah jika input tidak valid
    } else {
      event.target.style.borderColor = 'grey'; // Ubah ke hitam jika input valid
    }
  });
  // Event listener untuk saat input kehilangan fokus
  
});

var validateElement = document.getElementById('pwd');
document.addEventListener('DOMContentLoaded', function() {
  var nmessage = document.getElementById('pwd2');
  
  function validateInput(value) {
    return value.length >= 8;
  }
  
  validateElement.addEventListener('input', function(event) {
    if (validateInput(event.target.value)) {
      event.target.style.borderColor = 'green';
      nmessage.innerHTML = '';
      isPasswordValid = true;
  } else if(event.target.value === "") {
      event.target.style.borderColor = 'red';
      nmessage.innerHTML = 'Masukkan password';
      isPasswordValid = false;
  } else {
      event.target.style.borderColor = 'red';
      nmessage.innerHTML = 'Password harus berisi min. 8 karakter';
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


var button = document.getElementById('button-login');

var  inputs = document.querySelectorAll('input');

function toggleButton() {
  if (isPho && isPasswordValid) {
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