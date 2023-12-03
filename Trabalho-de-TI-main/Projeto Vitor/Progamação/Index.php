<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto V</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-image: linear-gradient(45deg, #4a148c, #1a237e);
            margin: 0;
            padding: 0;
            color: white;
        }

        .logo {
            text-align: center;
            margin-top: 30px;
        }

        .container {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .column {
            flex: 0 0 48%; 
            margin-bottom: 30px;
            background-color: #311b92; 
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }

        form {
            margin-top: 20px;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: white;
        }

        input {
            width: calc(100% - 12px); 
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #7e57c2; 
            border-radius: 4px;
            box-sizing: border-box;
        }

       
        button {
            background-color: #7e57c2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

       
        button:hover {
            background-color: #5d37a8;
        }
    </style>
</head>
<body>
    <div class="logo">
        <img src="Recursos/logo.png" alt="" srcset="">
    </div>
    <div class="container text-center mt-5">
        <div class="column">
            <form action="CadastrosPro.php" method="post">
                <h1>Alimentos Frescos</h1>
                <div class="row">
                    <div class="col-md-6">
                        <label for="Frutas">Frutas</label>
                        <input type="number" name="Frutas" id="Frutas">
                    </div>
                    <div class="col-md-6">
                        <label for="Verduras">Verduras</label>
                        <input type="number" name="Verduras" id="Verduras">
                    </div>
                    <div class="col-md-6">
                        <label for="Leite">Leite</label>
                        <input type="number" name="Leite" id="Leite">
                    </div>
                    <div class="col-md-6">
                        <label for="Queijo">Queijo</label>
                        <input type="number" name="Queijo" id="Queijo">
                    </div>
                    <div class="col-md-6">
                        <label for="Ovos">Ovos</label>
                        <input type="number" name="Ovos" id="Ovos">
                    </div>
                </div>

                <h1>Produtos de Despensa</h1>
                <div class="row">
                    <div class="col-md-6">
                        <label for="Arroz">Arroz</label>
                        <input type="number" name="Arroz" id="Arroz">
                    </div>
                    <div class="col-md-6">
                        <label for="Feijão">Feijão</label>
                        <input type="number" name="Feijão" id="Feijão">
                    </div>
                    <div class="col-md-6">
                        <label for=" Macarrão">Macarrão</label>
                        <input type="number" name="Macarrão" id="Macarrão">
                    </div>
                    <div class="col-md-6">
                        <label for="Enlatados">Enlatados</label>
                        <input type="number" name="Enlatados" id="Enlatados">
                    </div>
                    <div class="col-md-6">
                        <label for="Molhos">Molhos</label>
                        <input type="number" name="Molhos" id="Molhos">
                        </div>
                </div>

                <h1>Congelados</h1>
                <div class="row">
                    <div class="col-md-6">
                        <label for="Pizzas">Pizzas</label>
                        <input type="number" name="Pizzas" id="Pizzas">
                    </div>
                    <div class="col-md-6">
                        <label for="Sorvetes">Sorvetes</label>
                        <input type="number" name="Sorvetes" id="Sorvetes">
                    </div>
                    <div class="col-md-6">
                        <label for="Carnes">Carnes</label>
                        <input type="number" name="Carnes" id="Carnes">
                    </div>
                

                    <h1>Bebidas</h1>
                <div class="row">
                    <div class="col-md-6">
                        <label for="Refrigerantes">Refrigerantes</label>
                        <input type="number" name="Refrigerantes" id="Refrigerantes">
                    </div>
                    <div class="col-md-6">
                        <label for="Sucos">Sucos</label>
                        <input type="number" name="Sucos" id="Sucos">
                    </div>
                    <div class="col-md-6">
                        <label for="Água">Água</label>
                        <input type="number" name="Água" id="Água">
                    </div>
                    <div class="col-md-6">
                        <label for="Café">Café</label>
                        <input type="number" name="Café" id="Café">
                    </div>
            
                 <button type="submit">Enviar</button>
            </form>
        </div>
</body>
</html>
