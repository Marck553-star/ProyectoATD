<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ranking de Comunidades Autónomas</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        /* ---------- BANNER ---------- */
        header.banner {
            background: #1e3a8a;
            color: white;
            padding: 20px 22px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .banner-img {
            height: 70px;
            object-fit: contain;
            background: white;
            padding: 6px;
            border-radius: 6px;
        }

        .banner-text h1 {
            margin: 0;
            font-size: 34px;
        }

        .banner-text p {
            margin-top: 6px;
            font-size: 18px;
            opacity: 0.9;
        }

        /* ---------- CONTENEDOR ---------- */
        .container {
            max-width: 1100px;
            margin: auto;
            padding: 40px 20px;
        }

        .intro {
            background: white;
            padding: 28px;
            border-radius: 14px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.12);
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 40px;
        }

        /* ---------- TABLA ---------- */
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 4px 14px rgba(0,0,0,0.10);
        }

        thead {
            background: #1e3a8a;
            color: white;
            font-size: 18px;
        }

        th, td {
            padding: 16px;
            text-align: center;
            font-size: 17px;
        }

        tbody tr:nth-child(even) {
            background: #f1f3f7;
        }

        tbody tr:hover {
            background: #e4e8f3;
        }

        .medalla {
            font-size: 22px;
            font-weight: bold;
        }

        /* BOTÓN */
        .home {
            text-align: center;
            margin-top: 40px;
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
            padding: 18px;
            margin-top: 40px;
        }
    </style>
</head>

<body>

<!-- BANNER -->
<header class="banner">
    <img src="logo1.jpg" class="banner-img" alt="Logo 1">

    <div class="banner-text">
        <h1>Ranking General de Comunidades Autónomas</h1>
        <p>Clasificación final basada en 9 indicadores oficiales</p>
    </div>

    <img src="logo2.jpg" class="banner-img" alt="Logo 2">
</header>

<div class="container">

    <!-- INTRO -->
    <div class="intro">
        Este ranking compara las 18 comunidades (juntando Ceuta y Melilla) y ciudades autónomas de España utilizando 9 indicadores:
        delitos, accidentes, ruido, gastos de vida, desempleo, demora médica, población extranjera,
        capital formativo y salario medio.  
        Cada comunidad recibe una nota ponderada final, ordenándose de mejor a peor.
    </div>

    <!-- RANKING -->
    <table>
        <thead>
            <tr>
                <th>Posición</th>
                <th>Comunidad</th>
                <th>Nota Final</th>
                <th>Detalle</th>
            </tr>
        </thead>

        <tbody>
            <!-- EJEMPLOS (tú cambias los datos reales) -->

            <tr>
                <td class="medalla">🥇 1</td>
                <td>Cantabria</td>
                <td>7.33</td>
                <td><a href="detalle-cantabria.php">Ver más</a></td>
            </tr>

            <tr>
                <td class="medalla">🥈 2</td>
                <td>Navarra</td>
                <td>7.13</td>
                <td><a href="detalle-navarra.php">Ver más</a></td>
            </tr>

            <tr>
                <td class="medalla">🥉 3</td>
                <td>País Vasco</td>
                <td>6.89</td>
                <td><a href="detalle-paisvasco.php">Ver más</a></td>
            </tr>

            <tr>
                <td>4</td>
                <td>Castilla y León</td>
                <td>6.65</td>
                <td><a href="detalle-castillaL.php">Ver más</a></td>
            </tr>

            <tr>
                <td>5</td>
                <td>Asturias</td>
                <td>6.60</td>
                <td><a href="detalle-asturias.php">Ver más</a></td>
            </tr>

            <tr>
                <td>6</td>
                <td>La Rioja</td>
                <td>6.53</td>
                <td><a href="detalle-rioja.php">Ver más</a></td>
            </tr>

            <tr>
                <td>7</td>
                <td>Aragón</td>
                <td>6.38</td>
                <td><a href="detalle-aragon.php">Ver más</a></td>
            </tr>

            <tr>
                <td>8</td>
                <td>Galicia</td>
                <td>6.30</td>
                <td><a href="detalle-galicia.php">Ver más</a></td>
            </tr>

            <tr>
                <td>9</td>
                <td>Extremadura</td>
                <td>6.13</td>
                <td><a href="detalle-extremadura.php">Ver más</a></td>
            </tr>

            <tr>
                <td>10</td>
                <td>Castilla-La Mancha</td>
                <td>6.00</td>
                <td><a href="detalle-CastillaM.php">Ver más</a></td>
            </tr>

            <tr>
                <td>11</td>
                <td>Canarias</td>
                <td>5.70</td>
                <td><a href="detalle-canarias.php">Ver más</a></td>
            </tr>

            <tr>
                <td>12</td>
                <td>Murcia</td>
                <td>5.67</td>
                <td><a href="detalle-murcia.php">Ver más</a></td>
            </tr>

            <tr>
                <td>13</td>
                <td>Islas Baleares</td>
                <td>5.66</td>
                <td><a href="detalle-baleares.php">Ver más</a></td>
            </tr>

            <tr>
                <td>14</td>
                <td>Madrid</td>
                <td>5.38</td>
                <td><a href="detalle-madrid.php">Ver más</a></td>
            </tr>

            <tr>
                <td>15</td>
                <td>Ceuta y Melilla</td>
                <td>5.33</td>
                <td><a href="detalle-cym.php">Ver más</a></td>
            </tr>

            <tr>
                <td>16</td>
                <td>Comunidad Valenciana</td>
                <td>4.42</td>
                <td><a href="detalle-valencia.php">Ver más</a></td>
            </tr>

            <tr>
                <td>17</td>
                <td>Cataluña</td>
                <td>4.38</td>
                <td><a href="detalle-cataluña.php">Ver más</a></td>
            </tr>


            <tr>
                <td>18</td>
                <td>Andalucía</td>
                <td>3.29</td>
                <td><a href="detalle-andalucia.php">Ver más</a></td>
            </tr>

        </tbody>
    </table>

    <!-- BOTÓN -->
    <div class="home">
        <a href="index.php">Inicio</a>
    </div>

</div>

<footer>
    Proyecto ATD · Ranking comparativo de comunidades · 2025
</footer>

</body>
</html>
