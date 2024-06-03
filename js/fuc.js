
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
      event.target.style.borderColor = 'rgb(210, 210, 210)'; // Ubah ke hitam jika input valid
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




var isPho3 = false;
var isPasswordValid3 = false;
// modal 3
document.addEventListener('DOMContentLoaded', function() {
  var inputElement3 = document.getElementById('phone3'); // Ganti dengan ID input HTML Anda
  var message3 = document.getElementById('p-message3')


  // Fungsi untuk memeriksa apakah input memenuhi kondisi Anda
  function validateInput2(value) {
    // Ganti ini dengan logika validasi Anda
    var isNumeric = /^[0-9]+$/.test(value);
    return value.startsWith('08') && isNumeric && value.length >= 2;
  }

  // Event listener untuk saat pengguna mengetik di input
  inputElement3.addEventListener('input', function(event) {
    if (validateInput2(event.target.value)) {
      event.target.style.borderBottomColor  = 'green'; // Ubah ke hijau jika kondisi terpenuhi
      message3.innerHTML = '';
      isPho3 = true;
      
    } else {
      event.target.style.borderBottomColor  = 'red';   // Ubah ke merah jika kondisi tidak terpenuhi
      message3.innerHTML = 'Format nomor handphone salah';
      isPho3 = false;
    }
  });
  inputElement3.addEventListener('blur', function(event) {
    if (!validateInput2(event.target.value)) {
      event.target.style.borderColor = 'red'; // Tetap merah jika input tidak valid
      
    } else {
      event.target.style.borderColor = 'rgb(210, 210, 210)'; // Ubah ke hitam jika input valid
    }
  });
  // Event listener untuk saat input kehilangan fokus
  
  var validateElement3 = document.getElementById('pwd3');
  var nmessage3 = document.getElementById('pwd4');
  
  function validateInput(value) {
    return value.length >= 8;
  }
  
  validateElement3.addEventListener('input', function(event) {
    if (validateInput(event.target.value)) {
      event.target.style.borderColor = 'green';
      nmessage3.innerHTML = '';
      isPasswordValid3 = true;
    } else if(event.target.value === "") {
      event.target.style.borderColor = 'red';
      nmessage3.innerHTML = 'Masukkan password';
      isPasswordValid3 = false;
    } else {
      event.target.style.borderColor = 'red';
      nmessage3.innerHTML = 'Password harus berisi min. 8 karakter';
      isPasswordValid3 = false;
    }
  });
  validateElement3.addEventListener('blur', function(event) { // Ganti 'inputElement' dengan 'validateElement'
    if (isPasswordValid3 === false) {
      event.target.style.borderColor = 'red';
      console.log('blur triggred')
    } else {
      event.target.style.borderColor = 'rgb(210, 210, 210)';
      console.log('blur triggred')
    }
  });

  var button3 = document.getElementById('button-login3');

  var  inputs3 = document.querySelectorAll('input');

  function toggleButton() {
    if (isPho3 && isPasswordValid3) {
        button3.removeAttribute('disabled');
        button3.style.backgroundColor = 'rgb(70, 171, 72)';
        button3.style.color = 'white';
    } else {
        button3.setAttribute('disabled', 'disabled');
        button3.style.backgroundColor= '#dcdcdc';
        button3.style.color = 'rgb(164, 164, 164)';
    }
  }

  // Event listener untuk setiap perubahan pada field input
  inputs3.forEach(function(input) {
    input.addEventListener('keyup', function() {
        toggleButton();
    });
  });
});




var modal2 = document.getElementById("modallogin");

  function showModal2() {
    // Display myModal2
    modal2.style.display = "block";
    modal.style.display = "none";
  }

// Get the modal
var modallogin = document.getElementById("modallogin");


// Get the <span> element that closes the modal
var tutup = document.getElementsByClassName("tutup")[0];



// When the user clicks on <span> (x), close the modal
tutup.onclick = function() {
  modallogin.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  } else if (event.target == modallogin) {
    modallogin.style.display = "none";
  }
};



var modal3 = document.getElementById("modallogin2");

  function showModal3() {
    // Display myModal2
    modal3.style.display = "block";
    modal.style.display = "none";
  }

  

// Get the modal
var modallogin3 = document.getElementById("modallogin2");


// Get the <span> element that closes the modal
var tutup2 = document.getElementsByClassName("tutup2")[0];



// When the user clicks on <span> (x), close the modal
tutup2.onclick = function() {
  modallogin3.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  } else if (event.target == modallogin) {
    modallogin3.style.display = "none";
  }
};