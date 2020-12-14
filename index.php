<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <?php 
            include 'header.php';
        ?>
        <meta charset="UTF-8">
        <title></title>
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
                        <h3 class="display-3">Forretter opskrifter</h3>
                        <button type="button" class="btn btn-outline-dark btn-lg">Klik her</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Billeder/carousel2.png">
                    <div class="carousel-captions">
                        <h3 class="display-3">Hovedretter opskrifter</h3>
                        <button type="button" class="btn btn-outline-dark btn-lg">Klik her</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="Billeder/carousel1.png">
                    <div class="carousel-captions">
                        <h3 class="display-3">Dessert/kage opskrifter</h3>
                        <button type="button" class="btn btn-outline-dark btn-lg">Klik her</button>
                    </div>
                </div>
            </div>
                
            </div>
                
        </div>
        <?php
        ?>
    </body>
</html>
