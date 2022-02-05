$(document).ready(function() {

 var active1 = false;
 var active2 = false;
 var active3 = false;
 var active4 = false;
 var active5 = false;
 var active6 = false;


 $('.radial-menu').on('mousedown touchstart', function() {
  // Counselling Button
  if (!active1) $(this).find('.menu-item1').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'translate(-30px,85px)',
   'opacity': '80%'
  });
  else $(this).find('.menu-item1').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'none'
  });
  // Finance Button
  if (!active2) $(this).find('.menu-item2').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'translate(25px,80px)',
   'opacity': '80%'
  });
  else $(this).find('.menu-item2').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'none'
  });
  // Mental Button
  if (!active3) $(this).find('.menu-item3').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'translate(70px,45px)',
   'opacity': '80%'
  });
  else $(this).find('.menu-item3').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'none'
  });
  // Family Button
  if (!active4) $(this).find('.menu-item4').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'translate(83px,-10px)',
   'opacity': '80%'
  });

  else $(this).find('.menu-item4').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'none'
  });
  // lifestyle Button
  if (!active5) $(this).find('.menu-item5').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'translate(60px,-62px)',
   'opacity': '80%'
  });
  else $(this).find('.menu-item5').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'none'
  });
  // Close Button
  if (!active6) $(this).find('.menu-item6').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'translate(10px,-85px)',
   'opacity': '80%'
  });
  else $(this).find('.menu-item6').css({
   'background-color': 'rgb(22, 132, 151)',
   'transform': 'none'
  });

  active1 = !active1;
  active2 = !active2;
  active3 = !active3;
  active4 = !active4;
  active5 = !active5;
  active6 = !active6;

 });

 // ------------------------------------------ MouseOver Events ------------------------------------------ //

 // Mouseover Event 1
 $('.menu-item1').text("");
 $('.menu-item1').hover(function() {
   $(this).css("background-color", "green").css("opacity", "100%").text("Counselling").css("text-indent", "15px").animate();
  },
  function() {
   $(this).text("");
   $(this).css('opacity', '80%');
   $(this).css('background-color', 'rgb(22, 132, 151)');

  });

 // Mouseover Event 2
 $('.menu-item2').text("");
 $('.menu-item2').hover(function() {
   $(this).css("background-color", "green").css("opacity", "100%").text("Financial").css("text-indent", "15px");
  },
  function() {
   $(this).text("");
   $(this).css('opacity', '80%');
   $(this).css('background-color', 'rgb(22, 132, 151)');

  });

 // Mouseover Event 3
 $('.menu-item3').text("");
 $('.menu-item3').hover(function() {
   $(this).css("background-color", "green").css("opacity", "100%").text("Mental").css("text-indent", "15px");
  },
  function() {
   $(this).text("");
   $(this).css('opacity', '80%');
   $(this).css('background-color', 'rgb(22, 132, 151)');

  });

 // Mouseover Event 4
 $('.menu-item4').text("");
 $('.menu-item4').hover(function() {
   $(this).css("background-color", "green").css("opacity", "100%").text("Family").css("text-indent", "15px");
  },
  function() {
   $(this).text("");
   $(this).css('opacity', '80%');
   $(this).css('background-color', 'rgb(22, 132, 151)');

  });

 // Mouseover Event 5
 $('.menu-item5').text("");
 $('.menu-item5').hover(function() {
   $(this).css("background-color", "green").css("opacity", "100%").text("Lifestyle").css("text-indent", "15px");
  },
  function() {
   $(this).text("");
   $(this).css('opacity', '80%');
   $(this).css('background-color', 'rgb(22, 132, 151)');

  });

 // Mouseover Event 6
 $('.menu-item6').text("");
 $('.menu-item6').hover(function() {
   $(this).css("background-color", "red").css("opacity", "100%").text("Close").css("text-indent", "15px");
  },
  function() {
   $(this).text("");
   $(this).css('opacity', '80%');
   $(this).css('background-color', 'rgb(22, 132, 151)');

  });

 // ------------------------------------------ Display Service Text ------------------------------------------ //

 // Services Objects
 service = [];

 function Services(title, text, img) {
  this.title = title + "</h1 class='display-3'><br/>";
  this.text = "<p class='lead'>" + text + "<hr/>";
  this.imgSrc = "<img src='../img/" + img + "' class='img-fluid imgService'>";
  service.push(this);
 }
 var counsel = new Services("Counselling", "We offer both individual and group counselling sessions with trained professionals who can help you deal with any problems in your life or simple provide advice on ways to manage things a little better.", "img_counsel.jpg");
 var mental = new Services("Mental Health", "We offer a range of mental health support and coping services including counselling, meditation and mindfulness training, stress management and many more services.", "img_mental.jpg");
 var financial = new Services("Financial", "Our trained financial analysts can work with you to help you manage your finances and budget your income to achieve the financial goals that you want.", "img_finance.jpg");
 var family = new Services("Family", "If you are having difficulties at home, we offer a range of services to help including marriage counselling and parenting workshops.", "img_family.jpg");
 var lifeStyle = new Services("Life Style", "Having trouble losing weight, maintaining a healthy diet or general living a healthy lifestyle? WE have support services, lifestyle coaches, nutritionists and personal trainers for all levels here and waiting to help you become the best and healthiest you and to get you feeling good about yourself again.", "img_lifestyle.jpg");

 console.table(service);

 // Counselling Service Animation and Text Display on DOM
 $("#councillAnimate").mousedown(function() {
  $(".showHideDisplay").fadeOut("fast");
  $("#showHideDisplay1").html("<h1 class='display-4 text-info'>" + service[0].title + service[0].text + service[0].imgSrc);
  $("#showHideDisplay1").fadeIn(1500);
 });

 // Finance Service Animation and Text Display on DOM
 $("#financeAnimate").mousedown(function() {
  $(".showHideDisplay").fadeOut("fast");
  $("#showHideDisplay2").html("<h1 class='display-4 text-info'>" + service[2].title + "</h1><br/>" + service[2].text + service[2].imgSrc);
  $("#showHideDisplay2").fadeIn(1500);
 });

 // Mantal Health Service Animation and Text Display on DOM
 $("#mentalAnimate").mousedown(function() {
  $(".showHideDisplay").fadeOut("fast");
  $("#showHideDisplay3").html("<h1 class='display-4 text-info'>" + service[1].title + "</h1><br/>" + service[1].text + service[1].imgSrc);
  $("#showHideDisplay3").fadeIn(1500);
 });

 // Family Service Animation and Text Display on DOM
 $("#familyAnimate").mousedown(function() {
  $(".showHideDisplay").fadeOut("fast");
  $("#showHideDisplay4").html("<h1 class='display-4 text-info'>" + service[3].title + "</h1><br/>" + service[3].text + service[3].imgSrc);
  $("#showHideDisplay4").fadeIn(1500);
 });

 // LifeStyle Service Animation and Text Display on DOM
 $("#lifeAnimate").mousedown(function() {
  $(".showHideDisplay").fadeOut("fast");
  $("#showHideDisplay5").html("<h1 class='display-4 text-info'>" + service[4].title + "</h1><br/>" + service[4].text + service[4].imgSrc);
  $("#showHideDisplay5").fadeIn(1500);
 });

 // Close Animation Reset everything
 $("#closeAnimate").mousedown(function() {
  $(".showHideDisplay").fadeOut(1500);
 });





})