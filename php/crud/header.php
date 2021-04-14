<?php 
session_start();

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
		.col{
		text-align:center;
		padding:20px;
		background:#17a2b8;}
		.col a{ text-decoration:none;
		padding:30px;
		font-family:terminal;
		color:white;
		font-size:25px;
		}
		.col i {font-size:30px; float:left;margin-left:80px;}
		.col a span { border-radius:5px;padding:0 5px;  color:#17a2b8; }
.white { background:white; }
#head{background:#17a2b8;
border-radius:15px 15px 0px 0px;
padding:10px;
color:white;
font-family:terminal;}
</style>
<script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
</script>
</head>
<body>
<div class= "row">
	<div class="col">
	<i class="fa fa-home">&nbsp;Home</i></a>
	<span class="white">C</span></a> 
	 <span class="white">R</span></a> 
	<span  class="white">U</span></a> 
	<span  class="white">D</span></a>
	</div>
</div></body></html>