<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário HTML e PHP</title>
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
        $nome = $_GET["nome"];
        $snome = $_GET["sobrenome"];
        echo "Meu nome é $nome $snome";
        
        ?>
    </main>
</body>
</html>