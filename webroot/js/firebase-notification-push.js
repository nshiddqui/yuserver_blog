// Initialize Firebase
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

// Retrieve Firebase Messaging object.
const messaging = firebase.messaging();

messaging.requestPermission()
    .then(function () {
        console.log('Notification permission granted.');
        // TODO(developer): Retrieve an Instance ID token for use with FCM.
        if (isTokenSentToServer()) {
            console.log('Token already saved.');
        } else {
            getRegToken();
        }

    })
    .catch(function (err) {
        console.log('Unable to get permission to notify.', err);
    });

function getRegToken(argument) {
    messaging.getToken()
        .then(function (currentToken) {
            if (currentToken) {
                saveToken(currentToken);
                console.log(currentToken);
                setTokenSentToServer(true);
            } else {
                console.log('No Instance ID token available. Request permission to generate one.');
                setTokenSentToServer(false);
            }
        })
        .catch(function (err) {
            console.log('An error occurred while retrieving token. ', err);
            setTokenSentToServer(false);
        });
}

function setTokenSentToServer(sent) {
    window.localStorage.setItem('sentToServer', sent ? 1 : 0);
}

function isTokenSentToServer() {
    return window.localStorage.getItem('sentToServer') == 1;
}

function saveToken(currentToken) {
    $.ajax({
        url: '/add-token',
        method: 'get',
        data: 'token=' + currentToken
    }).done(function (result) {
        console.log(result);
    })
}

messaging.onMessage(function (payload) {
    console.log("Message received. ", payload);
    notificationTitle = payload.data.title;
    notificationOptions = {
        body: payload.data.body,
        icon: payload.data.icon,
        image: payload.data.image
    };
    var notification = new Notification(notificationTitle, notificationOptions);
});