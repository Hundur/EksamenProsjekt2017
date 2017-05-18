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


#container {
    position: fixed;
    width: 78%;
    top: 15%;
    left: 13%;
    height: 500px;
    background: #f1f1f1;
    border: 4px solid #ccc;
    opacity: 1;
    overflow: hidden;
}


/* Slider */ 

.textbox
{
    background: rgba(255,255,255,0.9);
    position: absolute;
    bottom: 5%;
    left: 9%;
    right: 9%;
    height: 60%;
    width: 80%;
    padding: 20px;
    overflow: hidden;
}

p a {
  font-family: 'Helvetica Neue', sans-serif;
  font-size: 0.8em;
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
    top: 27%;
    left: 32.5%;
    font-size: 2.2em;
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
    letter-spacing: 1.7pt;
    font-family: 'Oswald', sans-serif; 
    float: left;
    width: 100%;
    padding-top: 25%;
    font-size: 0.7em;
    line-height: 2.3em;
    margin-top: -0.5em;
}

#menutext1 {
    padding-top: 28%;
    line-height: 1.5em;
}


/* Circles */ 

.menucircle {
    position: fixed;
    text-align: center;
    height: 145px;
    width: 145px;
    border-radius: 200px;
    -webkit-transition: all 200ms linear;
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -ms-transition: all 200ms linear;
    transition: all 200ms linear;
    opacity: 0.8;
}

.menucircle:hover {
    border: 2px dashed #f1f1f1;
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

#arrangement {
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
    height: 55px;
    width: 55px;
    border: 10px dashed #transparent;
    border-radius: 200px;
    -webkit-transition: all 200ms linear;
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -ms-transition: all 200ms linear;
    transition: all 200ms linear;
}

.menucircle2:hover {
    height: 60px;
    width: 60px;
}

#food2 {
    top: 27%;
    left: 4%;
    text-algin: center;
    background-color: #7d5179;
}

#transport2 {
    top: 37.5%;
    left: 4%;
    background-color: #6aafc8;
}

#shopping2 {
    top: 48%;
    left: 4%;
    background-color: #ff5252;
}

#activities2 {
    top: 58.5%;
    left: 4%;
    background-color: #ffd460;
}

#arrangement2 {
    top: 69%;
    left: 4%;
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
    margin: 6px;
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
    padding-bottom: 4px;
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
       display: block;
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
