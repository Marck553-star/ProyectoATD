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
            padding: 13px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .banner-text {
            text-align: center;
            max-width: 600px;
        }

        .banner-text h1 {
            margin: 0;
            font-size: 36px;
        }

        .banner-text p {
            margin-top: 10px;
            font-size: 17px;
            opacity: 0.9;
        }

        .banner-img {
            width: 120px;
            height: auto;
            object-fit: contain;
            background: white;
            padding: 8px;
            border-radius: 8px;
        }

        /* INTRODUCCIÓN */
        .intro {
            max-width: 1000px;
            margin: 50px auto 20px;
            background: white;
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            text-align: center;
        }

        .intro h2 {
            color: #1e3a8a;
            font-size: 30px;
            margin-bottom: 15px;
        }

        .intro p {
            font-size: 18px;
            line-height: 1.6;
            color: #333;
        }

        /* TARJETAS GRANDES CLICABLES */
        .menu-container {
            max-width: 1100px;
            margin: 60px auto;
            display: flex;
            justify-content: center;
            gap: 50px;
        }

        .menu-card {
            background: white;
            border-radius: 18px;
            width: 420px;
            padding: 45px 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.18);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            text-decoration: none;
            color: inherit;
            display: block;
            cursor: pointer;
        }

        .menu-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
        }

        .menu-card h2 {
            margin: 0;
            font-size: 28px;
            color: #1e3a8a;
            margin-bottom: 18px;
        }

        .menu-card p {
            font-size: 17px;
            margin-bottom: 5px;
            color: #333;
            line-height: 1.5;
        }

        footer {
            text-align: center;
            padding: 15px;
            background: #ddd;
            margin-top: 60px;
        }
    </style>
</head>
<body>

<header class="banner">
    <img src="logo1.jpg" class="banner-img" alt="ETSINF">

    <div class="banner-text">
        <h1>¿Dónde es mejor vivir en España?</h1>
        <p>Ranking basado en datos reales y comparativas entre comunidades autónomas</p>
    </div>

    <img src="logo2.jpg" class="banner-img" alt="UPV">
</header>

<!-- INTRODUCCIÓN GRANDE -->
<div class="intro">
    <h2>Proyecto de comparación de datos</h2>
    <p>
        Somos un equipo dedicado al análisis comparativo de datos socioeconómicos.
        A través de múltiples datasets públicos recopilados del INE mayoritariamente,
        evaluamos y comparamos todas las comunidades autónomas de España.
        Nuestro objetivo es determinar, mediante datos objetivos y una nota final ponderada,
        cuál es la mejor comunidad autónoma para vivir considerando factores como
        costes de vida, paro, criminalidad, inmigración y otros indicadores clave.
    </p>
</div>

<!-- TARJETAS CLICABLES -->
<div class="menu-container">

    <a href="ranking.php" class="menu-card">
        <h2>📊 Ranking General</h2>
        <p>Accede a la clasificación completa de las 19 comunidades autónomas basada en 9 indicadores principales.</p>
    </a>

    <a href="autonoma.php" class="menu-card">
        <h2>🌍 Explorar por Comunidad</h2>
        <p>Consulta la ficha individual de cada comunidad autónoma con todos sus datos detallados.</p>
    </a>

</div>

<footer>
    Proyecto ATD · Ranking de Comunidades Autónomas · 2025
</footer>

</body>
</html>
