<html>
<title>W3.CSS</title>
<style>
.mySlides {display:none;}
</style>
<body>

<div class="w3-container">
</div>
<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides w3-animate-top" src="Images/7.jpg" style="width:97%;height:23%;">
  <img class="mySlides w3-animate-bottom" src="Images/5.jpg" style="width:97%;height:23%;">
  <img class="mySlides w3-animate-top" src="Images/BloodImage_15.jpg" style="width:97%;height:23%;">
  <img class="mySlides w3-animate-bottom" src="Images/BloodImage_4.png" style="width:97%;height:23%;">
  <img class="mySlides w3-animate-top" src="Images/BloodImage_10.jpg" style="width:97%;height:23%;">
  <img class="mySlides w3-animate-bottom" src="Images/BloodImage_6.jpg" style="width:97%;height:23%;">
  <img class="mySlides w3-animate-top" src="Images/BloodImage_9.png" style="width:97%;height:23%;">
  <img class="mySlides w3-animate-bottom" src="Images/k.jpg" style="width:97%;height:23%;">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2500);    
}
</script>

</body>
</html>
