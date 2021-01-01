<html>
<head>
<style>


body 
  {
  background: url(image/photo-1469715670736-059afa7dee7c.jpg) no-repeat;
  background-size: 100%;
}


.button1 {
  background-color:#FFB6C1; 
  border: none;
  color: white;
  padding: 10px 32px;
  text-align:center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:90%;
}

h1,h2{
   margin:0;
   padding: 0;
   text-align: center;
   font-family:castellar;
   background-position:center ;

}


.contact-title{

margin-top: 100px;
color:brown;
text-transform: uppercase;
transition:all 4s ease-in-out ;


}
.contact-title h1{
    font-size: 32px;
}

.contact-title h2{

font-size: 16px;



}

.contact-form{
     text-align: center;

}

.form{
    margin-top: 50px;
    transition: all 4s ease-in-out;
}


.form-control{
 width: 600px;
 background: transparent;
 border: none;
 outline: none;
 border-bottom: 1px solid gray;
 color: #fff;
 font-size: 18px;
 margin-bottom: 16px;


}


input{

    height: 45px;
    
}
.form-control-submit{
    background: #a19895;
    border-color: transparent;
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    letter-spacing: 2px;
    height: 50px;
    margin-top: 20px;
    border-style: ridge;


}

.form-control-submit:hover{
    background-color: #b3605a;
    cursor: pointer;
}





.nav-area {
		text-align: center;
	}
  .nav-area li a {
		padding: 5px;
		font-size: 15px;
	}
  .nav-area {
		float: none;
		margin-top: 0; 
	}
  .nav-area {
	float: right;
	list-style: none;
	margin-top: 30px;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: #800000;
	text-decoration: none;
	padding: 5px 20px;
	font-family: poppins;
	font-size: 16px;
	text-transform: uppercase;
}
.nav-area li a:hover {
	background: #fff;
	color: #333;
}
#footer{
  position: fixed;
  bottom: 0;
  z-index: 100;
  
}



</style>
</head>

<body>

<br>
<br>
<br>


     <div class="contact-title">
        <h1><i>Say Hello</i><h2>
        <h2><i>We are alwayes ready to serve you!</i></h2>
     </div>


     <div class="contact-form">
           <form id=contact-form method="POST" action="contactDB.php">
            <input name="name" type="text" id="name" class="form-control" placeholder="Your Name" required>  <br>
            <input name="number" type="number" id="number" class="form-control" placeholder="Your Phone Number" required>  <br>
            
            
            
        <input name="message" type="text" id = "message" class="form-control" placeholder="Message" row="6" required><br>
             <input type="submit" class="form-control-submit" value="SEND MESSAGE">
           </form> 

     </div>

             
</body>




<div id= "footer" style="text-align: center">	
<ul class="nav-area">
<li><a href="#"   ONCLICK="window.location.href='homepage.html'"><b><u>GO BACK</u></b></a></li>
</ul>
</div>


</html>