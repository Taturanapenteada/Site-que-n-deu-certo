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

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["id"])) {
    $id = test_input($_GET["id"]);

    $sql = "SELECT * FROM estoque WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "Produto não encontrado.";
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = test_input($_POST["id"]);
    $frutas = test_input($_POST["Frutas"]);
    $verduras = test_input($_POST["Verduras"]);
    $leite = test_input($_POST["Leite"]);
    $queijo = test_input($_POST["Queijo"]);
    $ovos = test_input($_POST["Ovos"]);
   

    $sql = "UPDATE estoque SET frutas='$frutas', verduras='$verduras', leite='$leite', queijo='$queijo', ovos='$ovos' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Produto atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar produto: " . $conn->error;
    }
   
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <title>Editar Produto</title>
</head>
<body>
    <h2>Editar Produto</h2>
    <form method="post" action="">
      
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
        <label for="Frutas">Frutas</label>
        <input type="number" name="Frutas" value="<?php echo $row["frutas"]; ?>">

        <label for="Verduras">Verduras</label>
        <input type="number" name="Verduras" value="<?php echo $row["Verduras"]; ?>">

        <label for="Leite">Leite</label>
        <input type="number" name="Leite" value="<?php echo $row["Leite"]; ?>">
        
        <label for="Queijo">Queijo</label>
        <input type="number" name="Queijo" value="<?php echo $row["Queijo"]; ?>">

        <label for="Ovos">Ovos</label>
        <input type="number" name="Ovos" value="<?php echo $row["Ovos"]; ?>">
    
        <button type="submit">Atualizar</button>
    </form>
</body>
</html>

