<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Token Perangkat</title>
</head>
<body>
<div class="container">
    <div>Token Perangkat:</div>
    <div class="message" style="max-width: 80px"></div>
</div>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-appcompat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.22.1/firebase-messagingcompat.js"></script>
<script>
    const firebaseConfig = {
    apiKey: "AIzaSyAlIFpBdPuDrGVa3qFCfvXreXXQJM2w0_M",
    authDomain: "testing-f3d9c.firebaseapp.com",
    projectId: "testing-f3d9c",
    storageBucket: "testing-f3d9c.appspot.com",
    messagingSenderId: "1043428294968",
    appId: "1:1043428294968:web:8bfa5e4b8a450e8ff9c1cd"
    };
    const app = firebase.initializeApp(firebaseConfig);
    const messaging = firebase.messaging();
    messaging
    .getToken({
        vapidKey: "BD-e29IDonUn7ddXcZLYduSNBeOHLgp9ivVd2tx6gOVOWQjfN7yEjzlMcQZzTuyuHPz3a3jnIiCpQJYOsQC0etU",
    })
    .then((currentToken) => {
        if (currentToken) {
          // Menampilkan token perangkat
        document.querySelector(".message").textContent = currentToken;
        } else {
          // Menghandle kasus ketika token tidak tersedia
        document.querySelector(".message").textContent = "Token tidak tersedia";
        }
    })
    .catch((err) => {
        // Menghandle kesalahan yang terjadi saat mengambil token
        document.querySelector(".message").textContent = "Error: " + err;
    });
</script>
</body>
</html>
