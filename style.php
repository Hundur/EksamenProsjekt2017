<?php
    header('Content-type: text/css; charset:UTF-8');
?>


/* Font-family */

html, 
#heading,
#title,
h2, 
h3,
h4,
p {
  font-family: 'Raleway', sans-serif;
} 

/* Slider */ 

* {box-sizing:border-box}


/* Slideshow container */

.slide-container {
    position: fixed;
    width: 64%;
    top: 19%;
    left: 18%;
    height: 470px;
    background: #f1f1f1;
    border: 1px dashed #f1f1f1;
    outline: 1px solid white;
    outline-offset: 6px;
    opacity: 1;
    overflow: hidden;
}
  
img {
    opacity: 0.8;
}

.Slide {
    display: none;
}

/* Forward and back buttons */

.back, .forward {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

.forward {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover effect */

.back:hover, .forward:hover {
  background-color: rgba(0,0,0,0.5);
}

/* Textbox */

.textbox
{
    background: rgba(255,255,255,0.7);
    position: absolute;
    bottom: 10%;
    left: 9%;
    right: 9%;
    height: 70%;
    width: 80%;
    padding: 40px;
    overflow: hidden;
}


.dots {
  cursor:pointer;
  height: 12px;
  width: 12px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* Slider End */ 

p a {
  font-family: 'Helvetica Neue', sans-serif;
  font-size: 0.7em;
  letter-spacing: -0.1pt;
}

h3, p { 
  font-weight: 300;
  text-align: center;
}

html {
    background-image: url('img/Vulkan1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}

#heading {
    position: absolute;
    color: #f1f1f1;
    top: 25%;
    left: 32.5%;
    font-size: 2.1em;
    font-weight: 200;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 4pt;
}


/* Circle-navbar for frontpage */


/* For images inside circles */


#icons {
    position: absolute;
}


/* For text inside circles */

.menutext {
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 300;
    letter-spacing: 1.0pt;
    font-family: 'Raleway', sans-serif; 
    float: left;
    width: 100%;
    padding-top: 26%;
    font-size: 0.7em;
    line-height: 2.9em;
    margin-top: -0.5em;
}

#menutext1 {
    padding-top: 28%;
    line-height: 2.0em;
}


/* Circles for index.php */ 

.menucircle {
    position: fixed;
    text-align: center;
    height: 145px;
    width: 145px;
    border-radius: 200px;
    opacity: 0.9;
    -webkit-transition: width 0s, height 0s, 
    -webkit-transform 0s; 
    transition: width 0s, height 0s, transform 0s;
}

.menucircle:hover {
    width: 175px;
    height: 175px;
    box-shadow: 0 20px 10px 0 rgba(0, 0, 0, 0.2), 0 10px 20px 0 rgba(0, 0, 0, 0.19);
}

#food {
    left: 22%;
    top: 41%;
    text-algin: center;
    background-color: #7d5179;
}

#transport {
    left: 33%;
    top: 59.6%;
    background-color: #6aafc8;
}

#shopping {
    margin-left: 44.2%;
    top: 41%;
    background-color: #ff5252;
}

#activities {
    right: 33%;
    top: 59.6%;
    background-color: #ffd460;
}

#contact {
    right: 22%;
    top: 41%;
    background-color: #8ac394;
}

#icons {
    position: absolute;
}

/* End circle-navbar frontpage */ 


/* Circle-navbar frontpage Responsive */ 

@media screen and (max-width: 480px) {
#heading {
    left: 5%;

}    
.menucircle {
        height: 60px;
        width: 60px;
        border: 2px solid transparent;
    }
}


/* Circle-navbar for underpages */ 

.menucircle2 { 
 position: fixed;
    text-align: center;
    height: 59px;
    width: 59px;
    border: 10px solid #transparent;
    border-radius: 200px;
    -webkit-transition: all 200ms linear;
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -ms-transition: all 200ms linear;
    transition: all 200ms linear;
}

.menucircle2:hover {
    width: 70px;
}

#food2 {
    top: 30%;
    left: 8%;
    text-algin: center;
    background-color: #7d5179;
}

#food2::before{
  content: '';
  position: absolute;
  border-left: 2px;
  background: dodgerblue;
  z-index: 1;
}

#transport2 {
    top: 43.5%;
    left: 8%;
    background-color: #6aafc8;
}

#shopping2 {
    top: 57.3%;
    left: 8%;
    background-color: #ff5252;
}

#activities2 {
    top: 70.6%;
    left: 8%;
    background-color: #8ac394;
}

#contact2 {
    top: 81%;
    left: 5%;
    background-color: #8ac394;
}

/* End of circle-navbar for underpages */ 

}

@media screen and (max-width: 480px) {
#heading {
    left: 5%;

}    
.menucircle2 {
        height: 60px;
        width: 60px;
        border: 2px solid transparent;
    }
}

/* End circle-navbar for underpages */


/* Html, body */



/* Navigation-bar */ 

 ol,
 ul {
    margin: 0;
    padding: 0;
 }
 
 ul,
 ol {
    list-style: none;
 }
 
 a {
    text-decoration: none;
 }
 
 .clearfix {
    clear: both;
 }

 /* End Reset Some Elements */
 
 
.nav {
    background-color: #f1f1f1;
    opacity: 1;
 }
 
 .container {
    width: 65%;
    margin: 0 auto;
 }

 /* Start Toggle */
 
  
 .toggle {
    width: 30px;
    padding-top: 15px;
    float: right;
    margin: 3px;
    cursor: pointer;
    display: none;
 } 
 
 .toggle span {
    width: 100%;
    height: 4px;
    background-color: #222;
    display: block;
    margin-bottom: 3px;
 }

 /* End Toggle */



/* Start Logo */

 .nav .container .logo {
    width: 5%;
    float: left;
    padding-top: 0px;
    padding-bottom: 0px;
 }
 
/* End Logo */



/* Start Title */

#title {
  display: inline-block;
  padding: 23px;
  float: left;
  text-transform: uppercase;
}

/* End Title */

 
/* Start Links */
 
 .nav .container .links {
    width: 45%;
    float: right;
 }
 
 .nav .container .links ul {
    float: center;
 }
 
 .nav .container .links ul li {
    display: inline-block;
    padding: 20px;
 }
 
 .nav .container .links ul li a {
    color: #333;
    font-size: 0.7em;
    font-family: Raleway;
    text-transform: uppercase;
    letter-spacing: 0.8pt;
 }

.nav .container .links ul li a:hover {
   color: #f1f1f1;
   padding: 10px 0 10px;
}
 /* End Links */

 

@media(max-width:768px) {
    .toggle {
       display: block;
    }
    .links {
       display: none;
    }
    .nav .container .links ul li {
       display: block;21
       text-align: center;
       padding: 10px;
    }
    .nav .container .links ul {
       float: none;
    }
    .nav .container .logo {
       padding-top: 10px;
    }
 }

#Kart {
    position: absolute;
    width: 100%;
    opacity: 1;
}

#OlafRyes {
    width: 30px;
    opacity: 1;
    position: relative;
    left: 510px;
    top: -30px;
}

#OlafRyes:hover ~ #OR{
    opacity: 1;
}

#OR {
    outline: #d1c69a dotted;
    position: relative;
    background: #f7ebb7;
    width: 130px;
    height: 50px;
    top: -70px;
    left: 540px;
    opacity: 1;
}

#Mollerveien {
    width: 30px;
    opacity: 1;
    position: relative;
    top: 350px;
    left: 210px;
}

#Mollerveien:hover ~ #MV{
    opacity: 1;
}

#MV {
    outline: #d1c69a dotted;
    position: relative;
    background: #f7ebb7;
    width: 110px;
    height: 50px;
    top: 310px;
    left: 240px;
    opacity: 1;
}

#Schousplass {
    width: 30px;
    opacity: 1;
    position: relative;
    top: 100px;
    left: 515px;
}

#Schousplass:hover ~ #SP{
    opacity: 1;
}

#SP {
    outline: #d1c69a dotted;
    position: relative;
    background: #f7ebb7;
    width: 110px;
    height: 50px;
    top: 60px;
    left: 550px;
    opacity: 1;
}
 
#telthusbakken {
    width: 30px;
    opacity: 1;
    position: relative;
    top: -35px;
    left: 175px;
}

#telthusbakken:hover ~ TB{
    opacity: 1;
}

#TB{
    outline: #d1c69a dotted;
    position: relative;
    background: #f7ebb7;
    width: 110px;
    height: 50px;
    top: -80px;
    left: 210px;
    opacity: 1;
}

<script>
/* Javascript goes here */ 

$(document).ready(function() {
    $(".toggle").click(function() {
       $('.links').slideToggle();
    });
    $(window).resize(function() {
       if ($(window).width() > 768) {
          $('.links').show();
       } else {
          $('.links').hide();
       }
    });
});
	
/* Javascript End */ 
	</script>