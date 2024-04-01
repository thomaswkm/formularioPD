<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario</title>
    <link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
    <div id="form">
        <h1>Propuesta formación de la Selección Chilena</h1>
        <form name="form" method="POST" action="procesar_formulario.php">

            <label for="arq">ARQ:</label>
            <select id="arq" name="arq">
                <option value="">Elige</option>
                <option value="Claudio Bravo">Claudio Bravo</option>
                <option value="Brayán Cortés">Brayán Cortés</option>
                <option value="Gabriel Arias">Gabriel Arias</option>
            </select>
            <br><br>
            
            <label for="li">LI:</label>
            <select id="li" name="li">
                <option value="">Elige</option>
                <option value="Gabriel Suazo">Gabriel Suazo</option>
                <option value="Thomas Galdames">Thomas Galdames</option>
            </select>
            <label for="def1">DEF:</label>
            <select id="def1" name="def1">
                <option value="">Elige</option>
                <option value="Francisco Sierralta">Francisco Sierralta</option>
                <option value="Paulo Díaz">Paulo Díaz</option>
                <option value="Igor Lichnovsky">Igor Lichnovsky</option>
            </select>
            <label for="def2">DEF:</label>
            <select id="def2" name="def2">
                <option value="">Elige</option>
                <option value="Francisco Sierralta">Francisco Sierralta</option>
                <option value="Paulo Díaz">Paulo Díaz</option>
                <option value="Igor Lichnovsky">Igor Lichnovsky</option>
            </select>
            <label for="ld">LD:</label>
            <select id="ld" name="ld">
                <option value="">Elige</option>
                <option value="Mauricio Isla">Mauricio Isla</option>
                <option value="Matias Catalán">Matias Catalán</option>
                <option value="Nicolas Fernández">Nicolas Fernández</option>
            </select>
            <br><br>
            <label for="mc1">MC:</label>
            <select id="mc1" name="mc1">
                <option value="">Elige</option>
                <option value="Marcelino Nuñez">Marcelino Nuñez</option>
                <option value="César Pérez">César Pérez</option>
                <option value="Lucas Assadi">Lucas Assadi</option>
            </select>
            <label for="mcd">MCD:</label>
            <select id="mcd" name="mcd">
                <option value="">Elige</option>
                <option value="Rodrigo Echeverría">Rodrigo Echeverría</option>
                <option value="Esteban Pavez">Esteban Pavez</option>
            </select>
            <label for="mc2">MC:</label>
            <select id="mc2" name="mc2">
                <option value="">Elige</option>
                <option value="Marcelino Nuñez">Marcelino Nuñez</option>
                <option value="César Pérez">César Pérez</option>
                <option value="Lucas Assadi">Lucas Assadi</option>
            </select>
            <br><br>

            </select>
            <label for="ei">EI:</label>
            <select id="ei" name="ei">
                <option value="">Elige</option>
                <option value="Ben Brereton">Ben Brereton</option>
                <option value="Alexander Aravena">Alexander Aravena</option>
                <option value="Darío Osorio">Darío Osorio</option>
                <option value="Cristián Zavala">Cristián Zavala</option>
                <option value="Marcos Bolados">Marcos Bolados</option>
                <option value="Victor Dávila">Victor Dávila</option>
                <option value="Alexis Sánchez">Alexis Sánchez</option>
                <option value="Eduardo Vargas">Eduardo Vargas</option>
            </select>

            <label for="dc">DC:</label>
            <select id="dc" name="dc">
                <option value="">Elige</option>
                <option value="Ben Brereton">Ben Brereton</option>
                <option value="Alexander Aravena">Alexander Aravena</option>
                <option value="Darío Osorio">Darío Osorio</option>
                <option value="Cristián Zavala">Cristián Zavala</option>
                <option value="Marcos Bolados">Marcos Bolados</option>
                <option value="Victor Dávila">Victor Dávila</option>
                <option value="Alexis Sánchez">Alexis Sánchez</option>
                <option value="Eduardo Vargas">Eduardo Vargas</option>
            </select>

            <label for="ed">ED:</label>
            <select id="ed" name="ed">
                <option value="">Elige</option>
                <option value="Ben Brereton">Ben Brereton</option>
                <option value="Alexander Aravena">Alexander Aravena</option>
                <option value="Darío Osorio">Darío Osorio</option>
                <option value="Cristián Zavala">Cristián Zavala</option>
                <option value="Marcos Bolados">Marcos Bolados</option>
                <option value="Victor Dávila">Victor Dávila</option>
                <option value="Alexis Sánchez">Alexis Sánchez</option>
                <option value="Eduardo Vargas">Eduardo Vargas</option>
            </select>
            <input type="submit" value="Enviar">
        </form>

    </div>
</body>
</html>
