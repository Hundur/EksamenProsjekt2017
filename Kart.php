
<!DOCTYPE html>
<html>
<head>
	<title>Prosjekt</title>
    <?php
        require 'headScript.php';
    ?>
    
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    
    <style>     
        #submit:active{
            background-color: black;
        }
        
        #save:active{
            background-color: black;
        }
        
        #formpost, #formadd {
            margin-top: 20px;
            margin-left: 8px;
            margin-bottom: 8px;
        }
        
        input[type=checkbox]:not(old){
            width: 2em;
            margin: 0;
            padding: 0;
            font-size: 1em;
            opacity: 0;
            cursor:pointer;
        }
        
        input[type=checkbox]:not(old) + label{
            display: inline-block;
            margin-left: -2em;
            line-height: 1.5em;
        }
        
        input[type=checkbox]:not(old) + label > span{
            display: inline-block;
            width: 0.875em;
            height: 0.875em;
            margin: 0.25em 0.5em 0.25em 0.25em;
            border: 1.2px solid black;
            background: rgb(224,224,224);
            background-color: white;
            vertical-align: bottom;
            
        }
        
        input[type=checkbox]:not(old):checked + label > span{
            background-color: white;
        }
        
        input[type=checkbox]:not(old):checked + label > span:before{
            content: '✓';
            display: block;
            color: #4d4d4d;
            font-size: 20px;
            line-height: 7px;
            text-shadow: 0 0 0.0714em #262626;
            font-weight: 900;
        }
        
        label{
            font-size: 15px;
            padding-left: 10px;
            margin-bottom: 8px;
        }
        
        #textbox{
            width: 170px;
            height: 100px;
            text-align: center;
            border: 3px solid #f1f1f1;
            background-color:white;
        }
        
        #textbox:focus {
            outline:none !important;
        }
        
        #submit{
            border: none;
            color: white;
            padding: 10px 23px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            background-color: #555555;
        }
        .dataadd:focus {
            outline:none !important;
        }
        
        #type:focus{
            outline:none !important;
        }
        
        #submit:focus{
            outline:none !important;
        }
        
        #save:focus{
            outline:none !important;
        }
        
        .dataadd{
            margin-top:10px;
            margin-bottom: 10px;
        }
        
        #type{
            width:150px;
            margin-bottom:10px;
        }
        
        #save{
            border: none;
            color: white;
            padding: 10px 23px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            background-color: #555555;
        }
        
        #type * {
            background-color:#DCDCDC;
            color:#555555;
            border: 1px solid black; 
        }
        
        #description{
            resize:none;
        }
        
        #description:focus {
            outline:none !important;
        }
        
        div.tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            padding: 0;
        }
        
        div.tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }
        
        div.tab button:hover {
            background-color: #ddd;
        }
        
        div.tab button.active {
            background-color: #ccc;
        }
        
        .tabcontent {
            display: none;
        }
        
        .tablinks{
            width: 94.2px;
        }
        
        .ui-menu-item{
            padding: 10px;
        }
        
        #travelbutton{
            margin-top: 10px;
            margin-right: 10px;
            border: none;
            color: white;
            padding: 7px 7px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            cursor: pointer;
            background-color: #555555;
        }
        
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }
        
        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            top: 200px;
            width: 400px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }
        
        @-webkit-keyframes animatetop {
            from {top:-300px; opacity:0} 
            to {top:0; opacity:1}
        }

        @keyframes animatetop {
            from {top:-300px; opacity:0}
            to {top:200px; opacity:1}
        }
        
        .close {
            color: white;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-header {
            padding: 2px 16px;
            background-color: #ddd;
            color: white;
        }

        .modal-body {
            padding: 2px 16px;
        }

        .modal-footer {
            padding: 2px 16px;
            background-color: #ddd;
            padding: 10px;
        }
         #formaddvalidate p{
            border:none;
        }       
        #formpostvalidate p{
            border:none;
        }
    </style>
</head>
<body>
    
    <div id="wrap">
        
        <?php
            require 'header.php'
        ?>

        <div id="content">

            <h1>Kart</h1>
            <br>
            <?php
                require 'testkart.php';
            ?>

        </div>
        
        
        
    </div>
</body>
</html>