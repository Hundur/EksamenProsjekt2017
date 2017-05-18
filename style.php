<?php
    header('Content-type: text/css; charset:UTF-8');
?>

#container {
    position: fixed;
    width:  80%;
    top: 15%;
    left: 12%;
    height: 500px;
    background: #f1f1f1;
    border: 2px dotted white;
    opacity: 1;
    overflow: hidden;
}

.textbox
{
    background: rgba(255,255,255,0.4);
    position: absolute;
    bottom: 5%;
    left: 15%;
    right: 5%;
    height: 60%;
    width: 70%;
    padding: 20px;
    overflow: hidden;
}

p {
  font-family: 'Helvetica', sans-serif;
  font-weight: 300;
}

h4 { 
  font-weight: 600;
  text-align: center;
}

html {
    background-image: url('img/Vulkan1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
    font-family: 'Raleway', sans-serif;
}

#heading {
    position: absolute;
    font-family: Raleway;
    color: #f1f1f1;
    top: 25%;
    left: 36.5%;
    font-size: 2.3em;
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

.menucircle {
    position: fixed;
    text-align: center;
    height: 135px;
    width: 135px;
    border-radius: 200px;
    border: 2px dotted white;
    -webkit-transition: all 200ms linear;
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -ms-transition: all 200ms linear;
    transition: all 200ms linear;
}

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

.menutext2 {
    color: white;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: 300;
    letter-spacing: 1.5pt;
    font-family: 'Oswald', sans-serif; 
    float: left;
    width: 100%;
    padding-top: 25%;
    font-size: 0.5em;
    line-height: 2.3em;
    margin-top: -0.5em;
}


.menucircle2 { 
 position: fixed;
    text-align: center;
    height: 90px;
    width: 90px;
    border-radius: 200px;
    -webkit-transition: all 200ms linear;
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -ms-transition: all 200ms linear;
    transition: all 200ms linear;
}

.menucircle2:hover {
    font-weight: 500;
    border: 2px solid transparent;
}

#food2 {
    left: 3%;
    top: 15%;
    text-algin: center;
    background-color: #7d5179;
}

#transport2 {
    left: 3%;
    top: 31.5%;
    background-color: #6aafc8;
}

#shopping2 {
    margin-left: 3%;
    top: 48%;
    background-color: #ff5252;
}

#activities2 {
    left: 3%;
    top: 64.5%;
    background-color: #ffd460;
}

#arrangement2 {
    left: 3%;
    top: 80.5%;
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

.menucircle a {
    background-color: red;
}

.menucircle:hover {
    font-weight: 500;
    border: 2px solid transparent;
}

#food {
    left: 22%;
    top: 41%;
    text-algin: center;
    background-color: #transparent;
}

#transport {
    left: 33%;
    top: 59.6%;
}

#shopping {
    margin-left: 44.2%;
    top: 41%;
}

#activities {
    right: 33%;
    top: 59.6%;
}

#arrangement {
    right: 22%;
    top: 41%;
}

#icons {
    position: absolute;
}


/* Html, body */


/* Navigation-bar */ 
 
 html,
 body,
 h1,
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
    width: 25%;
    float: left;
    padding-top: 0px;
    padding-bottom: 4px;
 }
 

 /* End Logo */

/* Start Title */

#title {
  display: inline-block;
  padding: 20px;
  float: left;
  text-transform: uppercase;
  font-family: Raleway; 
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