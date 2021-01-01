<html>
    <head>


        <style>
           
 #myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
}


.content {
  position: fixed;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}


#myBtn {
  width: 200px;
  font-size: 18px;
  padding: 10px;
  border: none;
  background: #000;
  color: #fff;
  cursor: pointer;
}

#myBtn:hover {
  background: #ddd;
  color: black;
}





  


         </style>
    </head>
    <body>
      
          
<video autoplay muted loop id="myVideo">
           <a href="https://www.youtube.com/watch?v=ppSykw3jZbI" type="video/mp4">
</video>


<div class="content">
  <h1>How to market and sell your product</h1>
  <p>click this..</p>
  
  <button id="myBtn" onclick="myFunction()">Pause</button>
</div>
    </body>

  
    
    
  


</html>



<script>
// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>
