// alert("connec");
var numToUse = Math.floor(Math.random() * 6 + 1);
// document.body.style.backgroundImage = url('/img/transform' + numToUse + '.png')
window.onload = function() {
  document.body.style.backgroundImage =
    'url("img/transform' + numToUse + '.png")';
};
