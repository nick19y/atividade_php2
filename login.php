<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    form{
        display: flex;
        flex-direction: column;
    }
</style>
<body style="display:flex; justify-content:center; align-items:center;">
    <main style="display:flex; justify-content: center; align-items:ceter; margin-top: 150px; outline: 1px solid; width: 25%; margin-left:">
        <form action="verificar.php" method="POST">
            <h1>Formulário de Login</h1>
            <label for="email">Email:</label>
            <input name="email" type="text">
            <label for="senha">Senha:</label>
            <input name="senha" type="password">
            <div class="buttons" style = "margin: 10px 5px 10px 0px;">
                <button type = "submit">Efetuar login</button>
                <button type = "reset">Cancelar</button>
            </div>
        </form>
    </main>
</body>
</html>