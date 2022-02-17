<?php 

    $pdo = new PDO('mysql:host=localhost;dbname=dev_heart','root','123@ldz');
    // $PDO = new PDO( 'mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD );

    $query = $pdo->prepare("SELECT * FROM bebidas");
    $query->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TABELA DE BEBIDAS</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>ML</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($query->fetchAll(PDO::FETCH_ASSOC) as $row){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nome']; ?></td>
                <td><?php echo $row['ml']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <h3>Cadastro de bebida</h3>
    <form action="cadastrar.php" method="POST">
        <label for="name">Nome da bebida</label>
        <input type="text" id="name" name="nome" placeholder="Nome da bebida">
        <label for="ml">ML</label>
        <input type="number" name="ml" id="">
        <button type="submit">Cadastrar bebida</button>
    </form>
</body>
</html>
