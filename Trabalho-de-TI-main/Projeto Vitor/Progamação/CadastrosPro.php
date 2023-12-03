<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "produtos";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}


function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $frutas = test_input($_POST["Frutas"]);
    $verduras = test_input($_POST["Verduras"]);
    $leite = test_input($_POST["Leite"]);
    $queijo = test_input($_POST["Queijo"]);
    $ovos = test_input($_POST["Ovos"]);

   
    $arroz = test_input($_POST["Arroz"]);
    $feijao = test_input($_POST["Feijão"]);  
    $macarrao = test_input($_POST["Macarrão"]);
    $enlatados = test_input($_POST["Enlatados"]);
    $molhos = test_input($_POST["Molhos"]);

    $pizzas = test_input($_POST["Pizzas"]);
    $sorvetes = test_input($_POST["Sorvetes"]);
    $carnes = test_input($_POST["Carnes"]);


    $refrigerantes = test_input($_POST["Refrigerantes"]);
    $sucos = test_input($_POST["Sucos"]);
    $agua = test_input($_POST["Água"]);
    $cafe = test_input($_POST["Café"]);


    $sql = "INSERT INTO estoque (frutas, verduras, leite, queijo, ovos, arroz, feijao, macarrao, enlatados, molhos, pizzas, sorvetes, carnes, refrigerantes, sucos, agua, cafe) VALUES ('$frutas', '$verduras', '$leite', '$queijo', '$ovos', '$arroz', '$feijao', '$macarrao', '$enlatados', '$molhos', '$pizzas', '$sorvetes', '$carnes', '$refrigerantes', '$sucos', '$agua', '$cafe')";
    

    if ($conn->query($sql) === TRUE) {
        header('Location: editar.php');            
         exit();
    } else {
        echo "Erro ao cadastrar produtos: " . $conn->error;
    }

    $conn->close();
}
?>
