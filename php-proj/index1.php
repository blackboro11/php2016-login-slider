<html>
 
<head>
<link href="css/main.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<script src="slider.js"> </script>
<title>SLIDER</title>
</head>
 
<body>
    
<!--NAVIGATION-->
    
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index1.html">IKING SLIDER</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index1.html">Welcome, Guest <span class="sr-only">(current)</span></a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href = "logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!--NAVIGATION END!-->

<div id="wholeWrap">

    <!--main container sa slider-->
    <div id="sliderContainer">
        <div id="contentContainer">
            <div id="wrapper">
            <div id="img1" class="content">
        
            </div>
            <div id="img2" class="content">
        
            </div>
            <div id="img3" class="content">
        
            </div>
            <div id="img4" class="content">

            </div>
            <div id="img5" class="content">

            </div>
            <div id="img6" class="content">

            </div>
            <div id="img7" class="content">
            
            </div>
            <div id="img8" class="content">
            
            

            </div>
            </div>
        </div>
        
        <!--navigation links-->
        
        <div id="navLinks">
        <ul>
            <li class="itemLinks" data-pos="0px"></li>
            <li class="itemLinks" data-pos="-550px"></li>
            <li class="itemLinks" data-pos="-1100px"></li>
            <li class="itemLinks" data-pos="-1650px"></li>
            <li class="itemLinks" data-pos="-2200px"></li>
            <li class="itemLinks" data-pos="-2750px"></li>
            <li class="itemLinks" data-pos="-3300px"></li>
            <li class="itemLinks" data-pos="-3850px"></li>
        </ul>
        </div>
    </div>

    <div id="descript1"> </div>

<!--DAGHAN PA NGA SLIDER!-->
<!--BARKADA-->
<div id="objcont2"> 
        <div id="descript2"> </div>
    <OBJECT width="600" height="450" data="index2.php" id="obj2"> </OBJECT>    
</div>      

<!--ETERNITY-->
<div id="objcont3"> 
        <div id="descript3"> </div>
    <OBJECT width="600" height="450" data="index3.php" id="obj3"> </OBJECT>
</div>

<!--HEART-->
<div id="objcont4"> 
        <div id="descript4"> </div>
<OBJECT width="600" height="450" data="index4.php" id="obj4"> </OBJECT>
</div>

<!--GAMING-->
<div id="objcont5"> 
        <div id="descript5"> </div>
<OBJECT width="600" height="450" data="index5.php" id="obj5"> </OBJECT>
</div>

        
     <!--SCRIPT di mu load kung i external, wa ko kahibaw ngano :( -->

<script>

    
    // just querying the DOM...like a boss!
var links = document.querySelectorAll(".itemLinks");
var wrapper = document.querySelector("#wrapper");
 
// the activeLink provides a pointer to the currently displayed item
var activeLink = 0;
 
// setup the event listeners
for (var i = 0; i < links.length; i++) {
    var link = links[i];
    link.addEventListener('click', setClickedItem, false);
 
    // identify the item for the activeLink
    link.itemID = i;
}
 
// set first item as active
links[activeLink].classList.add("active");
 
function setClickedItem(e) {
    removeActiveLinks();
 
    var clickedLink = e.target;
    activeLink = clickedLink.itemID;
 
    changePosition(clickedLink);
}
 
function removeActiveLinks() {
    for (var i = 0; i < links.length; i++) {
        links[i].classList.remove("active");
    }
}
 
// Handle changing the slider position as well as ensure
// the correct link is highlighted as being active
function changePosition(link) {
    var position = link.getAttribute("data-pos");
 
    var translateValue = "translate3d(" + position + ", 0px, 0)";
    wrapper.style.transform = translateValue;
 
    link.classList.add("active");
}        
//
// The code for sliding the content automatically
//
var timeoutID;
 
function startTimer() {
    // wait 2 seconds before calling goInactive
    timeoutID = window.setInterval(goToNextItem, 2000);
}
startTimer();
 
function resetTimer() {
    window.clearInterval(timeoutID);
    startTimer();
}
 
function goToNextItem() {
    removeActiveLinks();
 
    if (activeLink < links.length - 1) {
        activeLink++;
    } else {
        activeLink = 0;
    }
 
    var newLink = links[activeLink];
    changePosition(newLink);
}
        


</script>
</div>  

<footer align="center">
 <small>© Copyright 2016, Michael Jed Galon</small>
</footer>

</body>
</html>