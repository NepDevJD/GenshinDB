var more = document.getElementsByClassName("adv");
    
for(var i = 0; i < more.length; i++){
    more[i].addEventListener("click", function() {
        var advUp = this.nextElementSibling;
        if (advUp.style.display === "block") {
          advUp.style.display = "none";
        } else {
          advUp.style.display = "block";
        }
    });
}