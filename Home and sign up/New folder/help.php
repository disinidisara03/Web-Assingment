<html>
<head>

<style>

.button1 {
  background-color: #8080FF; 
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius:90%;
}



body{
    display: flex;
    justify-content: center;
    align-items: center;
    background: url('image/OG1FLx.jpg') no-repeat;
    background-size: 100%;
}

.container{
    position: relative;
    width: 1100px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    padding: 30px;


}

.container .card{
    max-width: 300px;
    height: 215px;
    position: relative;
    background: #fff;
    margin: 30px 10px;
    padding: 20px 15px;
    display: flex;
    flex-direction: column;
    box-shadow: 0 5px 202px rgba(0,0,0,0,5);
    transition: 0.3s ease-in-out;

}

.container .card:hover{
    height: 420px;

}


.container .card .imgBx{
    width: 260px;
    height: 260px;
    position: relative;
    top: -60px;
    left: 20px;
    box-shadow: 0 5px 20px rgba(0,0,0,0,2);
    z-index: 1;
    
}

.container .card .imgBx img{
      max-width: 100%;
      border-radius: 4px;

}

.container .card .content{
     position: relative;
     margin-top: -140px;
     padding: 10px 15px;
     text-align: center;
     color:#111;
     visibility: hidden;
     opacity: 0;
     transition: 0.3s ease-in-out;

}

.container .card:hover .content{
            visibility: visible;
            opacity: 1;
            margin-top: -40px;
            transition-delay: 0.3s;



}

</style>
</head>
<body>

    <div class="container"> 
      <div class="card">
        <div class="imgBx">
            <img src="image/depositphotos_122972216-stock-photo-basket-full-of-fruits.jpg">
              </div>
      <div class="content">
         <h2></h2>
           <p>
           </p>
    </div>
  </div>

      
  <div class="card">
    <div class="imgBx">
        <img src="image/colourful-food-salad.jpg">
          </div>
  <div class="content">
     <h2></h2>
       <p>
       </p>
 </div>
</div>

  <div class="card">
    <div class="imgBx">
        <img src="image/bucket-vegetables.jpg">
          </div>
  <div class="content">
     <h2></h2>
       <p>
       </p>
</div>
</div>
</div>







</body>





</html>