<?php
include 'conexao.php';

$sql = "SELECT ID, Nome, Email FROM Clientes";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "<ul>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<li><strong>{$row['Nome']}</strong> - {$row['Email']}</li>";
    }
    echo "</ul>";
} else {
    echo "Nenhum cliente encontrado.";
}

$conn->close();
?>

