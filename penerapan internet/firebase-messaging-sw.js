importScripts("https://www.gstatic.com/firebasejs/9.22.1/firebase-app-compat.js");
importScripts("https://www.gstatic.com/firebasejs/9.22.1/firebase-messaging-compat.js");

const firebaseConfig = {
    apiKey: "AIzaSyAlIFpBdPuDrGVa3qFCfvXreXXQJM2w0_M",
    authDomain: "testing-f3d9c.firebaseapp.com",
    projectId: "testing-f3d9c",
    storageBucket: "testing-f3d9c.appspot.com",
    messagingSenderId: "1043428294968",
    appId: "1:1043428294968:web:8bfa5e4b8a450e8ff9c1cd"
};

// Inisialisasi Firebase
const app = firebase.initializeApp(firebaseConfig);
const messaging = firebase.messaging();

messaging.onBackgroundMessage(function (payload) {
const notificationTitle = payload.data.title;
const notificationOptions = {
    body: payload.data.body,
    icon: payload.data.icon,
    image: payload.data.image,
};

self.registration.showNotification(notificationTitle, notificationOptions);

self.addEventListener("notificationclick", function (event) {
    const clickedNotification = event.notification;
    clickedNotification.close();
    event.waitUntil(clients.openWindow(payload.data.click_action));
});
});
