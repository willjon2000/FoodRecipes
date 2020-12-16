
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="CSS/navbarStl.css">

<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="Billeder/logo.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive"
         aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

       <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li id="home" class="nav-item active">
                    <a class="nav-link" href="index.php">Forside</a>
                </li>
                <li id="selection" class="nav-item">
                    <a class="nav-link" href="#">Udvalg</a>
                </li>
                <li id="starters" class="nav-item">
                    <a class="nav-link" href="startersRecipes.php">Neme forretter opskrifter</a>
                </li>
                <li id="dinner" class="nav-item">
                    <a class="nav-link" href="dinnerRecipes.php">Neme aftenmads opskrifter</a>
                </li>
                <li id="dessert" class="nav-item">
                    <a class="nav-link" href="dessertRecipes.php">Gode kager opskrifter</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    
    $(function (){
        const path = window.location.pathname;
        alert(path);
        switch (path){
            case "/FoodRecipes/index.php":
                $("#home").attr("class",'nav-item active');
                $("#selection").attr("class", "nav-item");
                $("#starters").attr("class",'nav-item');
                $("#dinner").attr("class",'nav-item');
                $("#dessert").attr("class",'nav-item');
                break;
            case "/FoodRecipes/index.php#":
                $("#home").attr("class",'nav-item');
                $("#selection").attr("class",'nav-item active');
                $("#starters").attr("class",'nav-item');
                $("#dinner").attr("class",'nav-item');
                $("#dessert").attr("class",'nav-item');
                break;
            case "/FoodRecipes/startersRecipes.php":
                $("#home").attr("class",'nav-item');
                $("#selection").attr("class",'nav-item');
                $("#starters").attr("class",'nav-item active');
                $("#dinner").attr("class",'nav-item');
                $("#dessert").attr("class",'nav-item');
                break;
            case "/FoodRecipes/dinnerRecipes.php":
                $("#home").attr("class",'nav-item');
                $("#selection").attr("class",'nav-item');
                $("#starters").attr("class",'nav-item');
                $("#dinner").attr("class",'nav-item active');
                $("#dessert").attr("class",'nav-item');
                break;
            case "/FoodRecipes/dessertRecipes.php":
                $("#home").attr("class",'nav-item');
                $("#selection").attr("class",'nav-item');
                $("#starters").attr("class",'nav-item');
                $("#dinner").attr("class","nav-item");
                $("#dessert").attr("class",'nav-item active');
                break;
        }
    });
</script>
