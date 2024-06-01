let profileDropdownList = document.querySelector(".profile-dropdown-list");
let btn = document.querySelector(".profile-dropdown-btn");

let classList = profileDropdownList.classList;

const toggle = () => classList.toggle("active");

window.addEventListener("click", function (e) {
  if (!btn.contains(e.target)) classList.remove("active");
});

document.getElementById('logout-link').addEventListener('click', function(event) {
  event.preventDefault();  // Prevent the link from being followed immediately

  // Make a request to end_session.php
  fetch('end_session.php')
  .then(function() {
      // After the session has been ended, follow the link
      window.location.href = 'menu.php';
      alert("Berhasil melakukan logout");
  });
});
