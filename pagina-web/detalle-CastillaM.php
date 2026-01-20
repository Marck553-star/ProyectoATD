<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Madrid · Análisis</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        header.banner {
            background: #1e3a8a;
            color: white;
            padding: 18px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .banner-img {
            height: 60px;
            object-fit: contain;
            background: white;
            padding: 6px;
            border-radius: 6px;
        }

        .banner-text h1 {
            margin: 0;
            font-size: 28px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 40px 20px;
        }

        /* ---------- DESCRIPCIÓN ---------- */
        .descripcion {
            background: white;
            padding: 25px;
            border-radius: 12px;
            font-size: 18px;
            line-height: 1.5;
            margin-bottom: 40px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        /* ---------- ESTADÍSTICAS ---------- */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: white;
            padding: 22px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .stat-card h3 {
            font-size: 17px;
            color: #1e3a8a;
            margin-bottom: 8px;
        }

        .stat-card p {
            font-size: 22px;
            font-weight: bold;
        }

        /* ---------- CONCLUSIÓN ---------- */
        .final {
            background: white;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 6px 14px rgba(0,0,0,0.12);
            margin: 40px 0;
        }

        .final h3 {
            margin-top: 0;
            font-size: 22px;
            margin-bottom: 15px;
        }

        .final p {
            font-size: 18px;
            margin: 14px 0;
        }

        .linea {
            display: inline-block;
            min-width: 200px;
            border-bottom: 2px solid #333;
            margin-left: 10px;
        }

        /* ---------- IMAGEN ---------- */
        .image-box {
            text-align: center;
            margin: 40px 0;
        }

        .image-box img {
            width: 100%;
            max-width: 650px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.15);
        }

        /* ---------- BOTÓN ---------- */
        .home {
            text-align: center;
            margin-bottom: 40px;
        }

        .home a {
            padding: 14px 30px;
            background: linear-gradient(135deg, #1e3a8a, #2563eb);
            color: white;
            text-decoration: none;
            font-size: 18px;
            border-radius: 30px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }

        footer {
            background: #ddd;
            text-align: center;
            padding: 15px;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<header class="banner">
    <img src="logo1.jpg" class="banner-img" alt="Logo">
    <div class="banner-text">
        <h1>Castilla-La Mancha</h1>
    </div>
    <img src="logo2.jpg" class="banner-img" alt="Logo">
</header>

<div class="container">

    <!-- DESCRIPCIÓN -->
    <div class="descripcion">
    Castilla-La Mancha ofrece precios de vivienda muy accesibles y tranquilidad. Aunque la contaminación es baja, la comunidad tiene una menor densidad de servicios y el mercado laboral es menos dinámico que en zonas urbanas.
    </div>
    <!-- 9 INDICADORES -->
    <div class="stats">

        <div class="stat-card"><h3>Delitos</h3><p>16.153</p></div>
        <div class="stat-card"><h3>Accidentes mortales</h3><p>5.014</p></div>
        <div class="stat-card"><h3>Ruido</h3><p>19.7%</p></div>

        <div class="stat-card"><h3>Gastos de vida</h3><p>11.766€</p></div>
        <div class="stat-card"><h3>Desempleo</h3><p>13.2%</p></div>
        <div class="stat-card"><h3>Demora médica</h3><p>1.709</p></div>

        <div class="stat-card"><h3>Población extranjera</h3><p>9.39 %</p></div>
        <div class="stat-card"><h3>Capital formativo Bach</h3><p>53.9</p></div>
        <div class="stat-card"><h3>Salario medio</h3><p>15.388 €</p></div>

    </div>


    <!-- CONCLUSIÓN -->
    <div class="final">
        <h3>Conclusión y Nota Final</h3>
        <p>Puntuación: 6</span></p>
        <p>Comentarios:  Coste de vida bajo y buena sanidad, aunque el mercado laboral limita su puntuación global.</span></p>
    </div>

    

    <!-- BOTÓN -->
    <div class="home">
        <a href="autonoma.php">Volver</a>
    </div>

</div>

<footer>
    Proyecto ATD · Comparador de viviendas y salarios · 2025
</footer>

</body>
</html>
