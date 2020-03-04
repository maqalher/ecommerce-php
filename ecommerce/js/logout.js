const btnLogout = document.getElementById('logout');

btnLogout.addEventListener('click', e => {
    /*firebase.auth().signOut();
    location.href = "../";*/

    firebase.auth().signOut()
    .then(function(){
        location.href = "../";
    })
    .catch(function(error){
      console.log(error)
    })
});


  