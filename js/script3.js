function draw() {
 //from rectangle.html
 var drawing = document.getElementById("canvas");
 var con = drawing.getContext("2d");
 con.fillStyle = "red";
 con.strokeStyle = "green";
 con.lineWidth = "5";
 con.fillRect(10, 10, 180, 80);
 con.strokeRect(10, 100, 180, 80);
} // end draw