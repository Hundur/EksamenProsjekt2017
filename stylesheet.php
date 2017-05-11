<?php
    header('Content-type: text/css; charset:UTF-8');
?>


#container {
    position: fixed;
    overflow: hidden;
    height: 100%;
    width: 100%;
    background-image:url('img/Vulkan.jpg');
    background-repeat: no-repeat;
}

/* CSS circle-navbar */

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

/* For underpages */ 

.menucircle2 
{ 
    position: fixed;
    text-align: center;
    height: 100px;
    width: 100px;
    border-radius: 200px;
    border: 2px dotted white;
    -webkit-transition: all 200ms linear;
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -ms-transition: all 200ms linear;
    transition: all 200ms linear;
}

@media screen and (max-width: 480px) 
{
    #heading 
    {
        left: 5%;

    }    
    .menucircle 
    {
        height: 60px;
        width: 60px;
        border: 2px solid transparent;
    }
}

.menucircle2:hover 
{
    font-weight: 500;
    border: 2px solid transparent;
}

#menucircle21 
{
    left: 3%;
    top: 12%;
    text-algin: center;
    background-color: #transparent;
}

#menucircle22 
{
    left: 3%;
    top: 30%;
}

#menucircle23 
{
    margin-left: 3%;
    top: 48%;
}

#menucircle24 
{
    left: 3%;
    top: 59;
}

#menucircle25 
{
    left: 8%
    bottom: 15%;
}

#icons
{
    position: absolute;
}

@media screen and (max-width: 480px) 
{
    #heading 
    {
        left: 5%;

    }    
    .menucircle2 
    {
        height: 60px;
        width: 60px;
        border: 2px solid transparent;
    }
}

.menucircle a 
{
    background-color: red;
}

.menucircle:hover 
{
    font-weight: 500;
    border: 2px solid transparent;
}

#menucircle1 
{
    left: 22%;
    top: 41%;
    text-algin: center;
    background-color: #transparent;
}

#menucircle2 
{
    left: 33%;
    top: 59.6%;
}

#menucircle3 
{
    margin-left: 44.2%;
    top: 41%;
}

#menucircle4 
{
    right: 33%;
    top: 59.6%;
}

#menucircle5 
{
    right: 22%;
    top: 41%;
}

#icons 
{
    position: absolute;
}


/* Html, body */


html, body 
{
    font-family: 'Helvetica Neue', sans-serif;
    margin: 0px;
    padding: 0px;
}


/* Navigation-bar */ 
 
html,
body,
h1,
ol,
ul 
{
    margin: 0;
    padding: 0;
 }
 
ul,
ol 
{
    list-style: none;
}
 
a 
{
    text-decoration: none;
}
 
.clearfix 
{
    clear: both;
}

 /* End Reset Some Elements */
 
.nav 
{
    background-color: #fff;
    opacity: 0.9;
}
 
.container 
{
    width: 65%;
    margin: 0 auto;
}

 /* Start Toggle */
 
  
.toggle 
{
    width: 30px;
    padding-top: 15px;
    float: right;
    margin: 6px;
    cursor: pointer;
    display: none;
} 
 
.toggle span 
{
    width: 100%;
    height: 4px;
    background-color: #222;
    display: block;
    margin-bottom: 3px;
}

 /* End Toggle */

 /* Start Logo */
 

.nav .container .logo 
{
    width: 25%;
    float: left;
    padding-top: 0px;
    padding-bottom: 4px;
}
 

 /* End Logo */

 /* Start Links */
 
.nav .container .links 
{
    width: 45%;
    float: right;
}
 
.nav .container .links ul 
{
    float: center;
}
 
.nav .container .links ul li 
{
    display: inline-block;
    padding: 20px;
}
 
.nav .container .links ul li a 
{
    color: #333;
    font-size: 0.7em;
    font-family: Raleway;
    text-transform: uppercase;
    letter-spacing: 0.8pt;
}

.nav .container .links ul li a:hover 
{
   color: #f1f1f1;
   padding: 10px 0 10px;
}
 /* End Links */

@media(max-width:768px) 
{
    .toggle 
    {
        display: block;
    }
    .links 
    {
        display: none;
    }
    .nav .container .links ul li 
    {
        display: block;
        text-align: center;
        padding: 10px;
    }
    .nav .container .links ul 
    {
        float: none;
    }
    .nav .container .logo 
    {
        padding-top: 10px;
    }
}


<script>

/* Javascript goes here */ 

$(document).ready(function() 
{
    $(".toggle").click(function() 
    {
        $('.links').slideToggle();
    });
    $(window).resize(function() 
    {
       if ($(window).width() > 768) 
       {
           $('.links').show();
       } 
        else 
       {
          $('.links').hide();
       }
    });
});
	
/* Javascript End */ 

	</script>
