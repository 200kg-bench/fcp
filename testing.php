<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCPPOCHENTONG</title>
</head>
<style>
    *{
        text-decoration: none;
    }
    body{
        background: black !important;
        color: white !important;
        overflow: hidden;
    }
    .nav-bar{
        padding: 0rem;
    }
    .nav-bar li{
        list-style: none;
        display: inline-block;
    }
    .nav-bar li a{
        list-style: none;
        display: inline-block;
        padding-left: 1rem;
        padding-right: 1rem;
        color: #BFCDE0;
        font-weight: bold;
    }
    .nav-bar .nav-div ul{
        padding-right: 1.5rem;
    }
    .nav-div{
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .logo{
        font-size: 1.5rem;
    }
    .logo a{
        text-decoration: none !important;
        font-weight: 600;
        color: white;
    }
    .activities-album{
    }
    #image-track .image{
        width: 40vh;
        height: 40vh;
        object-fit: cover;
        object-position: center;
        border: white solid 2px;

    }
    #image-track {
        display: flex;
        gap: 4vmin;
        position: relative;
        top: 25%;
        left: 50%;
        padding-bottom: 1.5rem;
        transform: translate(0%, 0%);
        user-select: none;
    }
    </style>
<script>
    
</script>
<body>
    <?php
        include 'navigation.php';
    ?>
    <div>
        <h1>This is our church Activities</h1>
        <h1>Year 2024</h1>
        <ul>
            <li>Langham</li>
            <li>Veal Veng</li>
        </ul>
            
    </div>
    <div class="image-track-container">
        <div id="image-track" data-mouse-down-at="0" data-prev-percentage="0">
            <img class="image" src="photo1.jpg" draggable="false" />
            <img class="image" src="photo2.jpg" draggable="false" />
            <img class="image" src="photo3.jpg" draggable="false" />
            <img class="image" src="photo4.jpg" draggable="false" />
            <img class="image" src="photo5.jpg" draggable="false" />
            <img class="image" src="photo6.jpg" draggable="false" />
        </div>
    </div>

    <?php 
        include 'footer.php'
    ?>
    <script>
const track = document.getElementById("image-track");

const handleOnDown = e => track.dataset.mouseDownAt = e.clientX;

const handleOnUp = () => {
  track.dataset.mouseDownAt = "0";  
  track.dataset.prevPercentage = track.dataset.percentage;
}

const handleOnMove = e => {
  if(track.dataset.mouseDownAt === "0") return;
  
  const mouseDelta = parseFloat(track.dataset.mouseDownAt) - e.clientX,
        maxDelta = window.innerWidth / 2;
  
  const percentage = (mouseDelta / maxDelta) * -100,
        nextPercentageUnconstrained = parseFloat(track.dataset.prevPercentage) + percentage,
        nextPercentage = Math.max(Math.min(nextPercentageUnconstrained, 0), -100);
  
  track.dataset.percentage = nextPercentage;
  
  track.animate({
    transform: `translate(${nextPercentage}%, 0%)`
  }, { duration: 1200, fill: "forwards" });
  
  for(const image of track.getElementsByClassName("image")) {
    image.animate({
      objectPosition: `${100 + nextPercentage}% center`
    }, { duration: 1200, fill: "forwards" });
  }
}

/* -- Had to add extra lines for touch events -- */

window.onmousedown = e => handleOnDown(e);

window.ontouchstart = e => handleOnDown(e.touches[0]);

window.onmouseup = e => handleOnUp(e);

window.ontouchend = e => handleOnUp(e.touches[0]);

window.onmousemove = e => handleOnMove(e);

window.ontouchmove = e => handleOnMove(e.touches[0]);</script>
</body>
</html>


