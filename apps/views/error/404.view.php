<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <title>404 Error Page</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
    <style type="text/css">
        body{
            font-family: 'Love Ya Like A Sister', cursive;
        }
        body{
            background:#eaeaea;
        }
        .wrap{
            margin:0 auto;
            width:1000px;
        }
        .logo{
            text-align:center;
            margin-top:200px;
        }
        .logo img{
            width:350px;
        }
        .logo p{
            color:#272727;
            font-size:40px;
            margin-top:1px;
        }
        .logo p span{
            color:lightgreen;
        }
        .sub a{
            color:#fff;
            background:#272727;
            text-decoration:none;
            padding:10px 20px;
            font-size:13px;
            font-family: arial, serif;
            font-weight:bold;
            -webkit-border-radius:.5em;
            -moz-border-radius:.5em;
            -border-radius:.5em;
        }
        .footer{
            color:black;
            position:absolute;
            right:10px;
            bottom:10px;
        }
        .footer a{
            color:rgb(114, 173, 38);
        }
    </style>
</head>


<body>
<div class="wrap">
    <div class="logo">
        <p>OOPS! - Alamat yang anda tuju tidak ada</p>
        <img src="<?php $baseUrl; ?>public/img/error/404.png"/>
        <div class="sub">
            <p><a href="javascript:history.back()">Back </a></p>
        </div>
    </div>
</div>


<div class="footer">
    Design by-<a href="http://w3layouts.com" target="_blank">W3Layouts</a>
</div>

</body>