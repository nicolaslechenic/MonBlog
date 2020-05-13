/*
                                | -------------------------------BOUTON VERS LE HAUT------------------------------- | 
                                |                                                                                   |                                                           
                                |-----------------------------------------------------------------------------------|
*/



let mybutton = document.getElementById("myBtn");

// Le bouton "retour vers le haut" apparaît à la fonction scrollFunction
window.onscroll = function() {
  scrollFunction()
};

// Quand on descend sur la page/element a 150 vers le bas alors on fait apparaitre le bouton "retour vers le haut"
function scrollFunction() {
  if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000) {
    mybutton.style.display = "block";
    // sinon il est désactivé
  } else {
    mybutton.style.display = "none";
  }
}

// Quand je clique sur le bouton je retourne en haut de la page
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
