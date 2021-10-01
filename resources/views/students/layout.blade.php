<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application - ItSolutionStuff.com</title>
    
</head>

<style>
/*Photo by Samantha Gades on Unsplash*/
/*Photo by Jill Heyer on Unsplash*/
/*Photo by Joe Lavigne on Unsplash*/

/*the table*/
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
  margin:10px;
  margin-left:auto;
  margin-right:auto;
  letter-spacing:1px;
}

table td, table th {
  border: 1px solid #fff;
  padding: 8px;
}
table tr {background-color: #a2d9f2;}
table tr:nth-child(even){background-color: #daeef7;}


table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #094dba;
  color: white;
}

.cover1{
	background:url(samantha-gades-BlIhVfXbi9s-unsplash.jpg);
	background-attachment:fixed;
	background-position:center;
	background-repeat:no-repeat;
}
.cover2{
	background:url(joe-lavigne-DPcIH-tt1uU-unsplash.jpg);
	background-attachment:fixed;
	background-position:center;
	background-repeat:no-repeat;
}
.cover3{
	background:url(jill-heyer-03ztkGdYWU8-unsplash.jpg);
	background-attachment:fixed;
	background-position:center;
	background-repeat:no-repeat;
}
.main-container{
	width:90%;
	margin:auto;
	margin-top:20px;
	padding:20px;
	border-radius:20px;
	background-color:rgba(255,255,255,0.9);
}
.container{
	width:45%;
	border:2px solid #b8bab9;
	margin:auto;
	margin-top:10%;
	padding:20px;
	border-radius:20px;
	background-color:rgba(255,255,255,0.9);
}
.input-group{
	padding:8px;
	width:100%;
}
.input-group label{
	font-size:17px;
	width:120px;
	letter-spacing:1px;
	display:inline-block;
	font-weight:bold;
}

.input-group input, select{
	width:65%;
	padding:7px;
	border-radius:7px;
	border:1px solid gray;
	font-size:15px;
}
select{
	width:120px;
}
.input-group button{
	width:100px;
	padding: 5px;
	border-radius:10px;
	color:white;
	background-color:#128c2d;
	border: 1px solid green;
	font-size:15px;
	letter-spacing:1px;
	margin-top:10px;
}
p.error{
	color:red;
	padding:5px;
}
</style>
<body>
  
<div class="cover1">
<div class="main-container">
    @yield('content')
</div>
</div>
   
</body>
</html>