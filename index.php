<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php 
            include 'navbar.php';
        ?>
        <meta charset="UTF-8">
        <title></title>
        <link href="CSS/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="slides" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Billeder/carousel3.png">
                    <div class="carousel-captions">
                        <h3 class="display-4">Forretter opskrifter</h3>
                        <button onclick="location.href='startersRecipes.php'"
                            type="button" class="btn btn-outline-light btn-lg">Opskrifterne
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Billeder/carousel2.png">
                    <div class="carousel-captions">
                        <h3 class="display-4">Aftensmads opskrifter</h3>
                        <button onclick="location.href='dinnerRecipes.php'"
                            type="button" class="btn btn-outline-light btn-lg">Opskrifterne
                        </button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Billeder/carousel1.png">
                    <div class="carousel-captions">
                        <h3 class="display-4">Dessert/kage opskrifter</h3>
                        <button onclick="location.href='dessertRecipes.php'"
                            type="button" class="btn btn-outline-light btn-lg">Opskrifterne
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="">
            
        </div>
    </body>
</html>
