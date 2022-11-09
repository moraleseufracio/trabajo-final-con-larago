<?php
echo " City Tours"
?>

<button type="button" class="btn btn-primary btn-sm"> <a href="https://www.google.com.mx/" class="underline text-gray-900 dark:text-white">BUSCAR TU LUGAR TURISTICOS</a></button>
<head>
    <style>
        body {
            background-color:#0100ff20;
        }
        a{ 
            Color:#f00;
        }
        img{
            border:3px solid #000;
            border: radius 15px;
            display:block;
            margin:50px;
            width:700px;
            height:auto;

        }
    </style>
</head>


<BODY>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="sona turistico">
    <div class="cusco">
      <img src="https://travel1tours.com/wp-content/uploads/2018/09/cusco-lugares-turisticos.jpg" class="d-block w-100" alt="lugar turistico de cusco">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="lima">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="tingo maria">
      <img src="..." class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</BODY>