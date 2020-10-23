<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Polaroid - Rayc DG</title>
        <link rel="stylesheet" href="./style.css">
    </head>
    <body>
        <header>
            <img src="./img/logo_transparente_branco1.png" width="100px"> 
                <h2>Polaroid Rayc_DG</h2>
        </header>

        <div id="divForm">
            <h2>Faça seu pedido</h2>
            <hr>

            <form>
                <label>Nome</label>
                <input type="text" ><br>
                <label>E-mail</label>
                <input type="email"><br>
                <label>WhatsApp</label>
                <input type="text"><br>

                <label>Pacote</label>
                <select>
                    <option>6 fotos</option>
                    <option>12 fotos</option>
                    <option>18 fotos</option>
                </select>
                <br>
                <hr>
                <div id="div6pic">    
                    <input type="text" placeholder="Legenda(Opcional)">
                    <input type="file"><br>

                    <input type="text" placeholder="Legenda(Opcional)">
                    <input type="file"><br>

                    <input type="text" placeholder="Legenda(Opcional)">
                    <input type="file"><br>

                    <input type="text" placeholder="Legenda(Opcional)">
                    <input type="file"><br>

                    <input type="text" placeholder="Legenda(Opcional)">
                    <input type="file"><br>

                    <input type="text" placeholder="Legenda(Opcional)">
                    <input type="file"><br>
                </div>
                <div id="div12pic" style="display:none">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                </div>
                <div id="div12pic" style="display:none"> 
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                    <input type="file">
                </div>
            </form>
        </div>
    </body>
</html>