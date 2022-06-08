(function () {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    let birthday = "Jun 24, 2022 08:00:00",
        countDown = new Date(birthday).getTime(),
        x = setInterval(function () {

            let now = new Date().getTime(),
                distance = countDown - now;

                document.getElementById("days").innerText = Math.floor(distance / (day)),
                document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

            //do something later when date is reached
            if (distance < 0) {
                window.location.replace("error.html");

                clearInterval(x);
            }
            //seconds
        }, 0)

        //ciluba
function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 190;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  
  window.addEventListener("scroll", reveal);
}());