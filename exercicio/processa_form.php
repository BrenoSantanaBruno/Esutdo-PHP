<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if (!empty($nome) && !empty($email)) {
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "E-mail: " . htmlspecialchars($email) . "<br>";
    } else {
        echo "Por favor, preencha todos os campos!";
    }
}
?>