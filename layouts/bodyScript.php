<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-analytics.js";
  import { } from "https://www.gstatic.com/firebasejs/9.8.4/firebase-database.js"
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyCmV7Ya0cyFesqiAB8XTxIxJkcg6kiCwOg",
    authDomain: "cyc-acabados-arquitectonicos.firebaseapp.com",
    projectId: "cyc-acabados-arquitectonicos",
    storageBucket: "cyc-acabados-arquitectonicos.appspot.com",
    messagingSenderId: "26227357137",
    appId: "1:26227357137:web:ab2e654ce6ade2a9b4dcf0",
    measurementId: "G-YPXNC5K04M"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>
<script>
      document.addEventListener('DOMContentLoaded', function() {
        const loadEl = document.querySelector('#load');
        // 🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥
        // The Firebase SDK is initialized and available here!
        //
        firebase.auth().onAuthStateChanged(user => { });
        firebase.database().ref('/path/to/ref').on('value', snapshot => { });
        firebase.firestore().doc('/foo/bar').get().then(() => { });
        firebase.functions().httpsCallable('yourFunction')().then(() => { });
        firebase.messaging().requestPermission().then(() => { });
        firebase.storage().ref('/path/to/ref').getDownloadURL().then(() => { });
        firebase.analytics(); // call to activate
        firebase.analytics().logEvent('tutorial_completed');
        firebase.performance(); // call to activate
        //
        // 🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥🔥

        try {
          let app = firebase.app();
          let features = [
            'auth', 
            'database', 
            'firestore',
            'functions',
            'messaging', 
            'storage', 
            'analytics', 
            'remoteConfig',
            'performance',
          ].filter(feature => typeof app[feature] === 'function');
          loadEl.textContent = `Firebase SDK loaded with ${features.join(', ')}`;
        } catch (e) {
          console.error(e);
          loadEl.textContent = 'Error loading the Firebase SDK, check the console.';
        }
      });
    </script>