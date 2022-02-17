<?php 

    var_dump($_POST);
    $pdo = new PDO('mysql:host=localhost;dbname=dev_heart','root','123@ldz');
   
    // $q = "INSERT INTO bebidas VALUES (null, '" . $_POST['nome'] . "', " . $_POST['ml'] . ")";
    
    // Nunca se deve adicionar variáveis diretamente dentro da Query por que
    // Existe a possibilidade de se executar uma query no cadastro:
    // 100); DELETE FROM bebidas; ==

    $q = "INSERT INTO bebidas VALUES (null, :nome, :ml)";

    $query = $pdo->prepare($q);

    // Filtrar variáveis
    $query->bindParam(':nome', $_POST['nome'], PDO::PARAM_STR);
    $query->bindParam(':ml', $_POST['ml'], PDO::PARAM_INT);

    $query->execute();

    header('Location:/index.php');