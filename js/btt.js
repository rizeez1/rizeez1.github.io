//mengambil id button
let mybutton = document.getElementById("btn-back-to-top");

// ketika user menscroll hingga 450 px akan muncul tombol back-to-top
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 450 ||
    document.documentElement.scrollTop > 450
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// menyecroll ke atas
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}