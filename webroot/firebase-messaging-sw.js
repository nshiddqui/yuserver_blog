importScripts('https://www.gstatic.com/firebasejs/7.24.0/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.24.0/firebase-messaging.js');
/*Update this config*/
var config = {
    apiKey: "AIzaSyCKRdwNIGsULwj_syxI_Ds2gDaFLsEe8Z8",
    authDomain: "yuserver-blog.firebaseapp.com",
    databaseURL: "https://yuserver-blog.firebaseio.com",
    projectId: "yuserver-blog",
    storageBucket: "yuserver-blog.appspot.com",
    messagingSenderId: "973066581540",
    appId: "1:973066581540:web:724d42569d71ac9c2b0ab1",
    measurementId: "G-N77W5Y5Z3N"
};
firebase.initializeApp(config);

const messaging = firebase.messaging();
messaging.usePublicVapidKey('AAAA4o9JtiQ:APA91bE11qo51ERa9wi-l7Z9SndxW1VKPRels5JM7uQi5vp6QIDcaoReS6Oi5jzsO0D2H_R2BFfson0tWS6tG3lGjtHLw9O593LmftvC_dLfR_Flplnme9kQ6vx0Gk5rRw8q5LcZ3eCn');
messaging.setBackgroundMessageHandler(function (payload) {
    console.log('[firebase-messaging-sw.js] Received background message ', payload);
    // Customize notification here
    const notificationTitle = payload.data.title;
    const notificationOptions = {
        body: payload.data.body,
        icon: 'https://yuserver.in/favicon.ico',
        image: 'https://yuserver.in/favicon.ico',
        click_action: payload.data.click_action,
    };

    return self.registration.showNotification(notificationTitle,
        notificationOptions);
});
// [END background_handler]