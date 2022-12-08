<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FitHome</title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    
</head>
 <style>
html {
    scroll-behavior: smooth;
    font-family: Helvetica, sans-serif, Arial;
}

body {
    margin: 0 auto;
    background-image: url('/images/fithomebg.png');
    background-size: cover;
    background-repeat: no-repeat;
    
    /* background-color: #222; */
}
 .topnav {
    background-color: #222222;
    overflow: hidden;
  }
  
  /* Style the links inside the navigation bar */
  .topnav a {
    float: left;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 17px;
  }
  
  /* Change the color of links on hover */
  /* .topnav a:hover {
    background-color: rgb(204, 18, 18);
    color: white;
  } */
  
  /* Add a color to the active/current link */
  .topnav a.active {
    background-color: #d21212;
    color: white;
  }
  .card {
  width: 12rem;
  cursor: pointer;
}

/*ABOUT*/
.flip-card1 {
  background-color: transparent;
  width: 190px;
  height: 254px;
  perspective: 1000px;
  font-family: sans-serif;
  left: 35px;
  position: relative;
  bottom: -120px;
  
}

.title {
  font-size: 1.5em;
  font-weight: 900;
  text-align: center;
  margin: 0;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-card1:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border: 1px solid coral;
  border-radius: 1rem;
}

.flip-card-front {
  background: rgb(0,0,0);
background: linear-gradient(142deg, rgba(0,0,0,1) 23%, rgba(255,0,0,1) 93%);
  color: white;
}

.flip-card-back {
  background: rgb(0,0,0);
background: linear-gradient(142deg, rgba(0,0,0,1) 23%, rgba(255,0,0,1) 93%);
  color: white;
  transform: rotateY(180deg);
}

/*devs*/
.flip-card2 {
  background-color: transparent;
  width: 190px;
  height: 254px;
  perspective: 1000px;
  font-family: sans-serif;
  left: 20%;
  position: relative;
  bottom: 134px;
}

.title {
  font-size: 1.5em;
  font-weight: 900;
  text-align: center;
  margin: 0;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-card2:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border: 1px solid coral;
  border-radius: 1rem;
}

.flip-card-front {
  background: rgb(0,0,0);
background: linear-gradient(142deg, rgba(0,0,0,1) 23%, rgba(255,0,0,1) 93%);
  color: white;
}

.flip-card-back {
  background: rgb(0,0,0);
background: linear-gradient(142deg, rgba(0,0,0,1) 23%, rgba(255,0,0,1) 93%);
  color: white;
  transform: rotateY(180deg);
}

/*contacts*/
.flip-card3 {
  background-color: transparent;
  width: 190px;
  height: 254px;
  perspective: 1000px;
  font-family: sans-serif;
  left: 38%;
  position: relative;
  bottom: 387px;
}

.title {
  font-size: 1.5em;
  font-weight: 900;
  text-align: center;
  margin: 0;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.8s;
  transform-style: preserve-3d;
}

.flip-card3:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  box-shadow: 0 8px 14px 0 rgba(0,0,0,0.2);
  position: absolute;
  display: flex;
  flex-direction: column;
  justify-content: center;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  border: 1px solid coral;
  border-radius: 1rem;
}

.flip-card-front {
  background: rgb(0,0,0);
background: linear-gradient(142deg, rgba(0,0,0,1) 23%, rgba(255,0,0,1) 93%);
  color: white;
}

.flip-card-back {
  background: rgb(0,0,0);
background: linear-gradient(142deg, rgba(0,0,0,1) 23%, rgba(255,0,0,1) 93%);
  color: white;
  transform: rotateY(180deg);
}

/* WELCOME TEXT */
.text{
    font-family: Helvetica;
    font-weight: 900;
    font-size: 100px;
    position: relative;
    left: 150%;
    bottom: 250px;
}

/* LOADER OF THE WEBPAGE */
.loader {
	position: fixed;
	top: 0;
	left: 0;
	width: 100vw;
	height: 100vh;
	display: flex;
	align-items: center;
	justify-content: center;
	background: #ef3131;
	transition: opacity 15s, visibility 1s;
  }
  
  .loader--hidden {
	opacity: 0;
	visibility: hidden;
  }
  
  .loader::after {
	content: "";
	width: 75px;
	height: 75px;
	border: 15px solid #dddddd;
	border-top-color: #000000;
	border-radius: 50%;
	animation: loading 0.75s ease infinite;
  }
  
  @keyframes loading {
	from {
	  transform: rotate(0turn);
	}
	to {
	  transform: rotate(1turn);
	}
  }

 </style>

 <body>

<div class="topnav">
  <a class="active" href="/" style="color: white;">FitHome</a>
  <a href="welcome" style="color: white;">Talk to FitChat</a>
 
</div>

<!-- about -->
<div class="flip-card1">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <p class="title">ABOUT FITCHAT</p>
            
        </div>
        <div class="flip-card-back">
            <p class="title">BACK PAGE</p>
            <p>FitChat, your personal health and lifestlye bot. You can ask anything about health and lifestyle, from effective workout plan to healthy dietary stratagem.</p>
        </div>
    </div>
</div>

<!-- devs -->
<div class="flip-card2">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <p class="title">FITDEVS</p>
          
        </div>
        <div class="flip-card-back">
            <p class="title">BACK PAGE</p>
            <p>1.John Rey Tolosa <br>2.John Matthew Lirio<br> 3.JM Fuentes</p>
        </div>
    </div>
</div>

<!-- contacts -->
<div class="flip-card3">
    <div class="flip-card-inner">
        <div class="flip-card-front">
            <p class="title">CONTACTS</p>
          
        </div>
        <div class="flip-card-back">
            <p class="title">BACK PAGE</p>
            <p>1.XXX <br>2.XXX<br> 3.XXX</p>
        </div>
    </div>

    <div class="text">
        <p style="color: white;">WELCOME TO<span style="color: #ff0000;">FITCHAT</span></p>
    </div>
</div>

<div class="loader"></div>

	<script>
		window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});

	</script>


</body>
</html>