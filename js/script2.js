// Load Ajax
//As soon as the document has been loaded
$(document).ready(function() {
 function update() {
  //create an ajax request
  $.ajax({
   type: "GET", //retrieving info, not posting it
   url: "../php/staffProfileupload.php", //load our php
   dataType: "html", //expect html to be returned
   //if the ajax request worked
   success: function(response) {
    //update our #staff list by 
    //inserting the result of our php code
    $("#staff_list").html(response);
    //keep doing this every 5 seconds
    setTimeout(update, 5000);
   }
  });
 }
 update(); //calls the update function
});



// Blog 1 ----------------------
$(function() {

 $('#blogReadBtn1').on("click", function() {
  $('.blogHide_one').animate({ height: "toggle", width: "toggle" });
 });
});

// Blog 2 ----------------------
$(function() {

 $('#blogReadBtn2').on("click", function() {
  $('.blogHide_two').animate({ height: "toggle", width: "toggle" })
 });
});



// Blog 3 ----------------------
$(function() {

 $('#blogReadBtn3').click(function() {
  $('.blogHide_three').animate({ height: "toggle", width: "toggle" })
 });
});