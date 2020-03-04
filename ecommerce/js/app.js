// Your web app's Firebase configuration
var firebaseConfig = {
apiKey: "AIzaSyDJJj9fiAiav-VfhFpNz8nnqE6ghchwgjY",
authDomain: "ecommerce-31f3f.firebaseapp.com",
databaseURL: "https://ecommerce-31f3f.firebaseio.com",
projectId: "ecommerce-31f3f",
storageBucket: "ecommerce-31f3f.appspot.com",
messagingSenderId: "130755120658",
appId: "1:130755120658:web:643f891a20b8ac4492d2cb"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

const txtEmail = document.getElementById('correo');
const txtPassword = document.getElementById('pass');
const btnLogin = document.getElementById('login');

btnLogin.addEventListener('click', e => {
    const email = txtEmail.value;
    const pass = txtPassword.value;
    const auth = firebase.auth();

    const promesa = auth.signInWithEmailAndPassword(email, pass);
    promesa.catch(e => location.href = 'admin/error.php');

});

//comprueba si la sesion
firebase.auth().onAuthStateChanged(firebaseUser => {
    if(firebaseUser) {
        location.href = 'admin';
    }
});