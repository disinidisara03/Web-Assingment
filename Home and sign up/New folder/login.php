<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
        body{
            background: url('image/9eeab0fb045184bde87504e12a564b50.jpg') no-repeat;
            background-size: 100%;
            }
       .box{
            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left:65%;
            transform: translate(-50%,-50%);
            background:  #bcabee;
            text-align: center;
            opacity: 0.82;
           }
        .box h1{
            color: white;
            text-transform: uppercase;
            font-weight: 500;
             }  
        .box input[type = "number"],.box input[type = "password"]{
            border:0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #3498db;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
             } 
         .box input[type = "number"]:focus,.box input[type = "password"]:focus{
             width: 280px;
             border-color: #2ecc71;
             }
         .box input[type = "submit"]{
             border:0;
             background: none;
             display: block;
             margin: 20px auto;
             text-align: center;
             border: 2px solid #2ecc71;
             padding: 14px 40px;
             outline: none;
             color: white;
             border-radius: 24px;
             transition: 0.25s;
             cursor: pointer;
             }
        .box input[type = "submit"]:hover{
             background: #2ecc71;
             }

    </style>
   
  </head>
  <body>

<form class="box"  method="post">
  <h1>Login</h1>
  <input type="number" name="" placeholder="NICNumber">
  <input type="password" name="" placeholder="Password">
  <input type="submit" name="" value="Login">
</form>


  </body>
</html>
