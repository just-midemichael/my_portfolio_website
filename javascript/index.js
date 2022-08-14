
function hmDis() {
    var ham = document.getElementById("ham-menu-cont");
    var hbg = document.getElementById("hamburger");
    var hbb = document.getElementById("ham-menu-btm-bg");
    if (ham.style.transform === "translateY(5%)") {
        ham.style.transform = "translateY(100%)" 
        hbb.style.display = "none";
         hbg.src = "logo-icon/hamburger-1.png"
    }else {
        ham.style.display = "flex";
        ham.style.transform = "translateY(5%)";
        hbb.style.display = "flex";
        hbg.src = "logo-icon/hamburger-2.png"
    }
}




  

