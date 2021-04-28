window.addEventListener("load", function(){
function hamburger() {
  document.getElementById('line1').classList.toggle('line_1');
  document.getElementById('line2').classList.toggle('line_2');
  document.getElementById('line3').classList.toggle('line_3');
  document.getElementById('line4').classList.toggle('line_4');
  document.getElementById('nav').classList.toggle('open');
  document.getElementById('hamburger').classList.toggle('hamburger_fixed');
};

document.getElementById('hamburger').addEventListener('click' , function () {
  hamburger();
} );
})