
function modalOn(msg) {
   document.getElementById('myModal').className = "modal fade in";
   document.getElementById('myModal').style.display = "block";

   document.getElementById('msg').innerHTML = msg;

}


function modalOff() {
   document.getElementById('myModal').className = "modal fade";
   document.getElementById('myModal').style.display = "none";
}