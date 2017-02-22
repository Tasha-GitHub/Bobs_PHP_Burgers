<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
</head>
<body>
<div class="content">
    <header>
        <h1>Bobs Burgers</h1>
    </header>
    <div class="row pageContent">
        <section class="col-md-6 restaurantContent">
            <div class="row">
                <section class="col-md-12 Menu">
                    @yield('addToMenu')
                </section>
                <section class="col-md-12 Burger">
                    @yield('burgerOfTheDay')
                </section>
            </div>
        </section>
        <section class="col-md-6 Order">
            <article>
                @yield('yourOrder')
            </article>
        </section>
    </div>
</div>
<footer>
    &copy; Tasha Casagni
</footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="assets/javascript/javascript.js"></script>
</html>
