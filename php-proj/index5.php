<html>
 
<head>
<link href="css/gaming.css" rel="stylesheet" type="text/css">
<script src="slider.js"> </script>
<title>SLIDER</title>
</head>
 
<body>
    
    
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
            <div id="img9" class="content">

            </div>
            <div id="img10" class="content">
            
            

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
            <li class="itemLinks" data-pos="-4400px"></li>
            <li class="itemLinks" data-pos="-4950px"></li>
        </ul>
        </div>
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
     
</body>
</html>