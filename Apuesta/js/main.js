tYc = false;

function terminosYcondiciones() {
   
    if (tYc) {
        document.getElementById("b2").style.display = "none";
        tYc = false
    } else {
    document.getElementById("b2").style.display = "block";
        document.getElementById('b2').scrollIntoView(true);
        
        tYc = true}
}
