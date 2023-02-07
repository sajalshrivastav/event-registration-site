<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Parivartan "Ek Chakra"</title>
  <link rel="shortcut icon" href="images/tyro_trp.png">
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <style>

====== Zoom-out effect ======

*/
.mfp-zoom-out {
  
  /* start state */
  .mfp-with-anim {
    opacity: 0;
    transition: all 0.3s ease-in-out; 
    transform: scale(1.3); 
  }
  
  &.mfp-bg {
    opacity: 0;
	  transition: all 0.3s ease-out;
  }
  
  /* animate in */
  &.mfp-ready {
    .mfp-with-anim {
      opacity: 1;
      transform: scale(1); 
    }
    &.mfp-bg {
      opacity: 0.8;
    }
  }
  
  /* animate out */
  &.mfp-removing {
    
    .mfp-with-anim {
      transform: scale(1.3); 
      opacity: 0;
    }
    &.mfp-bg {
      opacity: 0;
    }
    
  }
  
}


/* fade in */
div {
  animation: fadeIn 5s;
  -webkit-animation: fadeIn 5s;
  -moz-animation: fadeIn 5s;
  -o-animation: fadeIn 5s;
  -ms-animation: fadeIn 5s;
}

@keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-moz-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-webkit-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-o-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}

@-ms-keyframes fadeIn {
  0% { opacity: 0; }
  100% { opacity: 1; }
}
    *::after,
*,
*::before {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  background-color: #000;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
  gap: 50px;
  padding: 50px;
  min-height: 100vh;
  font-family: sans-serif;
  color: #efe;
  font-weight: 600;
}

.card {
  background: #09220c;
  width: 300px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 20px;
  position: relative;
  padding: 20px;
  box-shadow: 2px 2px 2px 2px;
}

.card::after {
  content: "";
  position: absolute;
  border: 20px solid;
  color: #343;
  border-color: currentColor currentColor transparent transparent;
  right: 0;
  top: 0;
}

/* active state */

.card.active p {
  height: auto;
}

.card.active .p-background {
  background: none;
}

.card.active h2,
.card.active a,
.card.active img {
  background-color: #008616;
}

.card.active::after {
  color: #008616;
}

img {
  width: 220px;
  height: 110px;
  border-radius: 15px;
  margin-top: -40px;
  background: #343;
  align-self: start;
  margin-bottom: 70px;
  object-fit: cover;
}

h2 {
  text-transform: capitalize;
  background: #343;
  border-radius: 30px;
  padding: 0.5em 1em;
  white-space: nowrap;
  position: absolute;
  top: 100px;
  left: -25px;
}

h2::after {
  position: absolute;
  content: "";
  width: 25px;
  height: 50px;
  border: 10px;
  border-radius: 35px 0 0 35px;
  background: inherit;
  left: 0px;
  top: 52px;
  filter: brightness(80%);
}

h2::before {
  position: absolute;
  content: "";
  width: 25px;
  height: 48px;
  background: inherit;
  left: 0;
  top: 29px;
  z-index: -1;
}

p {
  height: 150px;
  overflow: hidden;
  transition: 500ms;
  position: relative;
}

.p-background {
  position: absolute;
  transition: 500ms;
  background: linear-gradient(transparent 50%, #09220c);
  inset: 0;
}

a {
  padding: 0.5em 1em;
  background: #343;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: bold;
  border-radius: 5px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

a:is(:hover, :active, :visited) {
  color: #efe;
}

  </style>
</head>
<body>

  
  <!-- solo Event -->

<div>
  <h1>Fine Arts Club</h1> 

</div><br>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Gratis<br>Hand Free Paintings</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Mehendika (Mehndi)</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>You're a Quizzical</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Sketching</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <br>
  
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Origami</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Rangoli Making</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Paper Fashionisha <br>(Newspaper Dress)</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Best Out of Waste</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Tattoo Making</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
    
  <h1>Informals Committee</h1>
  <div class="card mfp-zoom-out">
    <img src="#img" alt="cat">
    <h2>Short Play</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Situational Antakshari</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>90's Guess The Song</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Treasure Hunt</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Zest Got Talent</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  
  <h1>Dance Club</h1>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Group Dance(Foot Lose)</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Solo Dance </h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Duet Dance </h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Best Dancer</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Face-Off</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <h1>Dramatics Club</h1>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Multiscene</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Street Play</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Mime</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Mono Act</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Movie Spoof</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <h1>Music Club</h1>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Solo Singing</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Duet Song </h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Voice Of Zest</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Battle Of Bands</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Theme Solo</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>RAP BATTLE</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Instrumental</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <h1>Game Parlour</h1>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>BGMI</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>FIFA</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>TEKKEN 3</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>COUNTER STRIKE</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <h1>Literary Club</h1>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Wah Wah Kya baat hain</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Escape the Room</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Memory quiz</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Bollywood mimics</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Crack the buzzer</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
    </div>
    <h1>Renaissance</h1>
  <div class="card">
    <img src="#img" alt="cat">
    <h2>Renaissance</h2>
    <p id="article">
      <span class="p-background"></span>
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Optio sunt
      ipsam repellat assumenda! Explicabo modi maxime maiores magnam alias
      corporis optio adipisci animi possimus amet illo id veniam facilis
      minima exercitationem suscipit accusantium, debitis eum eligendi quasi
      quisquam! Quas laudantium non aperiam, accusantium praesentium
      necessitatibus sed accusamus architecto dicta cupiditate!
    </p>
    <a href="#" class="btn">read more</a>
  </div>
 
    <script>
      const readMoreBtns = document.querySelectorAll(".btn");
      

    </script>
  </div>
</body>
</html>