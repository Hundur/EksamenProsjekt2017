<?php
    header('Content-type: text/css; charset:UTF-8');
?>

/* CSS main-navbar */



#container
{
    background: #ebd9f9;
    width:  70%;
    top: 40%;
    margin: auto;
    height: 800px;
    opacity: 1;
}

.menutext
{

  float: left;
  width: 100%;
  padding-top: 25%;
  font-size: 0.7em;
  line-height: 2.3em;
  margin-top: -0.5em;
}

.menutext a 
{
text-decoration: none;
  color: white;
  text-transform: uppercase;
  font-weight: 300;
  letter-spacing: 1.7pt;
  font-family: 'Oswald', sans-serif; 
}

.menutext a:hover 
{
letter-spacing: 1.7pt;
font-weight: 400;
font-size: 1.2em;
}

.menucircle
{
    text-align: center;
    position: fixed;
    height: 130px;
    width: 130px;
    border-radius: 200px;
    background-color: #FFFFFF;
    opacity: 0.8;
-webkit-box-shadow: 6px 10px 49px -9px #333;
-moz-box-shadow: 6px 10px 49px -9px #333;
box-shadow: 6px 10px 49px -9px #333;
}

#food
{
    left: 3%;
    top: 10%;
    text-algin: center;
    background-color: #7d5179;
    opacity: 0.4;
}

#transport
{
    left: 3%;
    top: 25%;
    background-color: #6aafc8;
}

#shopping
{
    margin-left: 3%;
    top: 40%;
    background-color: #ff5252;
}

#activities
{
    left: 3%;
    top: 55%;
    background-color: #ffd460;
}

#arrangement
{
    left: 3%;
    top: 70%;
    background-color: #8ac394;
}


html 
{
    background-image: url('img/vulkan.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
}

#icons
{
 position: absolute;  
}

/* CSS body style */


html, body
{
    
    font-family: 'Helvetica Neue', sans-serif;
    margin: 0px;
    padding: 0px;
}


/* CSS Footer Menu */

.footer 
{
  position: absolute;
  right: 0;
  bottom: -300px;
  width: 100%;
  left: 0;
  padding: 5rem;
  background-color: #efefef;
  text-align: center;
}


nav 
{
	position: absolute;
	bottom: 100px;
	width: 100%;
	height: 0px;
	background: #6aafc8;
    opacity: 0.8;
}

nav li
{
	display: inline-block;
	padding: 0px 35px;
}

nav li a {
    font-family: 'Oswald', sans-serif;
    font-size: 0.7em;
    letter-spacing: 0.2pt;
    text-decoration: none;
	color: #f1f1f1;
	text-transform: uppercase;
}


/* For mobile, Ipad */

@media only screen and (max-width: 520px) 
{

	nav li {
		padding: 24px 4px;
	}

	nav li a {
		font-size: 14px;
	}

}

#logo { 
   position: absolute; 
   bottom: 40px; 
   background-color: red;
}