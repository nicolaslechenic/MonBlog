/*
                                | -----------------------------------MODAL COOKIE---------------------------------- | 
                                |                                                                                   |                                                             
                                |-----------------------------------------------------------------------------------|
*/

// Via le DOM je récupére mes noeuds/class
let modalOK = document.querySelector(".agree");
let modal = document.querySelector(".modal-cookie");

// A l'ouverture de la page, la boite modal s'ouvre
window.onload = function() {
    myFunction()
};
// En appliquant le css
 function myFunction() {
    modal.classList.add("bg-active");
}

// Si l'utilisateur accepte
modalOK.addEventListener("click", hideModal);
function hideModal() {
  // Alors je fait disparaître la boite modal
  modal.style.display = 'none';
  // Et je stocke dans cookieAgree
  sessionStorage.setItem("cookieAgree", "true")
};

// Si le cookie est bien stoocké alors la boite modal ne se ré-ouvre pas pendant 24h
if(sessionStorage.getItem("cookieAgree") == "true"){
  // si oui elle est stockée donc display none
  modal.style.display = 'none';
}
