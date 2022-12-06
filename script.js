function togglePopup(){
    document.getElementById("popup-1").classList.toggle("active");
}

function confirmDeny(){
    alert("yo");
   var confirmDeny = document.getElementById("Confirm");
   
    
}

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}