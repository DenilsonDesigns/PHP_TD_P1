// get a random number to generate random pic
var numToUse = Math.floor(Math.random() * 6 + 1);
//changes background image
window.onload = function() {
  document.body.style.backgroundImage =
    'url("img/transform' + numToUse + '.PNG")';
};
