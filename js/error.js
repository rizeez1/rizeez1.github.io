var test = document.getElementById("test");

var text = "ACARA SUDAH SELESAI!!!"; //put your text here
var result = "";
//Press rerun button to see effect
window.addEventListener("load", (event) => {
  for (let i = 0; i < text.length; i++) {
    setTimeout(function () {
      result += text[i];
      test.innerHTML = result;
    }, 120 * i);
  }
});

