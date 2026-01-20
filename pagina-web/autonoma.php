<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>¿Dónde es mejor vivir?</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f4f4f4;
        }

        header.banner {
            background: #1e3a8a;
            color: white;
            padding: 18px 22px;          /* antes 10px 25px */
            display: flex;
            align-items: center;
            justify-content: space-between;

            height: auto;               /* antes 110px → ahora automático */
        }

        .banner-img {
            width: 85px;                /* tamaño razonable */
            background: white;
            padding: 5px;
            border-radius: 6px;
        }

        .banner-text h1 {
            font-size: 26px;            /* sigue grande y claro */
            margin: 0;
        }

        .banner-text p {
            font-size: 14px;
            margin-top: 4px;
            opacity: 0.9;
        }


        .banner-img {
            width: 100px;
            height: auto;
            object-fit: contain;
            background: white;
            padding: 8px;
            border-radius: 8px;
        }

        /* GRID DE 3 COLUMNAS */
        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            padding: 30px;
            max-width: 1300px;
            margin: auto;
        }

        .card {
            position: relative;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
            cursor: pointer;
            background: white;
            height: 220px;
        }

        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .card:hover img {
            transform: scale(1.08);
        }

        .card-title {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: rgba(0,0,0,0.6);
            color: white;
            padding: 15px;
            font-size: 20px;
            text-align: center;
        }

        /* BOTÓN INICIO */
        .home {
            text-align: center;
            margin: 40px 0;
        }

        .home a {
            display: inline-flex;
            align-items: center;
            padding: 14px 30px;
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
            transition: 0.2s;
        }

        .home a:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(0,0,0,0.25);
        }

        footer {
            text-align: center;
            padding: 15px;
            background: #ddd;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body>

<header class="banner">
    <img src="logo1.jpg" class="banner-img" alt="ETSINF">

    <div class="banner-text">
        <h1>¿Dónde es mejor vivir en España?</h1>
        <p>Comparativa de precios de vivienda entre plataformas distintas y salarios medios</p>
    </div>

    <img src="logo2.jpg" class="banner-img" alt="UPV">
</header>


<!-- GRID 3x6 = 18 TARJETAS -->
<div class="grid">

    <!-- FILA 1 -->
    <a href="detalle-madrid.php" class="card">
        <img src="madrid.jpg" alt="Madrid">
        <div class="card-title">Comunidad de Madrid</div>
    </a>

    <a href="detalle-cataluña.php" class="card">
        <img src="barcelona.jpg" alt="Barcelona">
        <div class="card-title">Cataluña</div>
    </a>

    <a href="detalle-valencia.php" class="card">
        <img src="valencia.jpg" alt="Valencia">
        <div class="card-title">Comunidad Valenciana</div>
    </a>

    <!-- FILA 2 -->
    <a href="detalle-andalucia.php" class="card">
        <img src="andalucia.jpg" alt="Andalucia">
        <div class="card-title">Andalucia</div>
    </a>

    <a href="detalle-galicia.php" class="card">
        <img src="galicia.jpg" alt="Galicia">
        <div class="card-title">Galicia</div>
    </a>

    <a href="detalle-murcia.php" class="card">
        <img src="murcia.jpg" alt="Murcia">
        <div class="card-title">Murcia</div>
    </a>

    <!-- FILA 3 -->
    <a href="detalle-paisvasco.php" class="card">
        <img src="paisvasco.jpg" alt="Pais Vasco">
        <div class="card-title">Pais Vasco</div>
    </a>

    <a href="detalle-aragon.php" class="card">
        <img src="aragon.jpg" alt="Aragon">
        <div class="card-title">Aragón</div>
    </a>

    <a href="detalle-baleares.php" class="card">
        <img src="baleares.jpg" alt="Baleares">
        <div class="card-title">Baleares</div>
    </a>

    <!-- FILA 4 -->
    <a href="detalle-CastillaM.php" class="card">
        <img src="cuenca.jpg" alt="Castilla">
        <div class="card-title">Castilla-La Mancha</div>
    </a>

    <a href="detalle-castillaL.php" class="card">
        <img src="leon.jpg" alt="Castilla y Leon">
        <div class="card-title">Castilla y Leon</div>
    </a>

    <a href="detalle-rioja.php" class="card">
        <img src="rioja.jpg" alt="La Rioja">
        <div class="card-title">La Rioja</div>
    </a>

    <!-- FILA 5 -->
    <a href="detalle-navarra.php" class="card">
        <img src="navarra.jpg" alt="Navarra">
        <div class="card-title">Navarra</div>
    </a>

    <a href="detalle-canarias.php" class="card">
        <img src="canarias.jpg" alt="Las Canarias">
        <div class="card-title">Las Canarias</div>
    </a>

    <a href="detalle-cantabria.php" class="card">
        <img src="cantabria.jpg" alt="Cantabria">
        <div class="card-title">Cantabria</div>
    </a>

    <!-- FILA 6 -->
    <a href="detalle-extremadura.php" class="card">
        <img src="extremadura.jpg" alt="Extremadura">
        <div class="card-title">Extremadura</div>
    </a>

    <a href="detalle-asturias.php" class="card">
        <img src="asturias.jpg" alt="Asturias">
        <div class="card-title">Asturias</div>
    </a>

    <a href="detalle-cym.php" class="card">
        <img src="melilla.jpg" alt="Ceuta y Melilla">
        <div class="card-title">Ceuta y Melilla</div>
    </a>

</div>

<!-- BOTÓN INICIO ABAJO -->
<div class="home">
    <a href="index.php">Inicio</a>
</div>

<footer>
    Proyecto ATD · Comparador de análisis de viviendas y salarios · 2025
</footer>

</body>
</html>
