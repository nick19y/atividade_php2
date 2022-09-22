<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <fieldset>
                <h1>Informações atualizadas</h1>
                <h2><?= $_POST["nome"] ?></h2>
                <h3>Endereço: <?php echo $_POST["cidade"] . " - ". $_POST["estado"] . " - " . $_POST["endereco"]?></h3>
                <h3>Setor: <?= $_POST["natureza_cargo"]?></h3>
                <h3>Área de interesse: <br>
                <?php
                    $areaInteresse = null;
                    if(isset($_POST["area_interesse"])){
                        $areaInteresse = $_POST["area_interesse"];
                    }
                    if($areaInteresse !== null){
                        for($i = 0; $i < count($areaInteresse); $i++){
                            echo ($i + 1) . " " . $areaInteresse[$i] . "<br>";
                        }
                    }
                ?>
                </h3>
                <div class="area_interesse">
                    <!-- <p><?= $_POST["computacao"] ?></p>
                    <p><?= $_POST["biologia"] ?></p>
                    <p><?= $_POST["meio_ambiente"] ?></p>
                    <p><?= $_POST["engenharia"] ?></p>
                    <p><?= $_POST["historia"] ?></p>
                    ! -->
                </div>
                <h3>Tempo de serviço: <?= $_POST["tempo_servico"] ?> ano(s)</h3>
                <h3>Salário correspondente:
                    <?php
                include "funcoes.php";
                $salarioAtual = verifcarSalario($_POST["natureza_cargo"]);
                echo "R$ $salarioAtual";
                    ?></h3>
                <h3>Aumento por tempo de serviço:
                    <?php
                    $salarioComAumento = atualizarSalario($salarioAtual, $_POST["tempo_servico"]);
                    $aumento = $salarioComAumento - $salarioAtual;
                    echo "R$ $aumento";
                    ?>
                </h3>
                <h3>Salário Atual: 
                    <?php
                    echo "R$ $salarioComAumento";
                    ?></h3>
            <a href="login.php">Sair</a>
        </fieldset>
    </form>
</body>
</html>