(function(){
var img = document.getElementById("info1");
    var rs1 = document.getElementById("semi_circle_content");
    var rs2 = document.getElementById("semi_circle");

    function toggle() {
        if (rs1.style.visibility === "hidden") {
            rs1.style.visibility = "visible";
        } else {
            rs1.style.visibility = "hidden";
        }
        if (rs2.style.visibility === "visible") {
            rs2.style.visibility = "hidden";
        } else {
            rs2.style.visibility = "visible";
        }
    }

    img.addEventListener("click", toggle, false);
})()