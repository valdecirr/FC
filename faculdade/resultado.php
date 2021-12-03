<?php

require_once("dados.php");

$hostname = "localhost";
$usuario = "root";
$senha = "";
$bancodedados = "uniasselvipaper";


$conn = mysqli_connect($hostname, $usuario, $senha, $bancodedados);

$x = 0;
$y = 0;
$mediapeso = 0;
$contt = 0;
$maiorpeso=array();

//Percorre o banco
$result_n = "SELECT * FROM usuarios";
$result_x = mysqli_query($conn, $result_n);

while ($result_n = mysqli_fetch_assoc($result_x)) {
    if ($result_n['sexo'] == "M") {
        $x++;
    } else {
        $y++;
    };       
    $contt++;
    $mediapeso += $result_n['peso'];
}
$calculoBD = number_format($mediapeso / $contt);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>CÁLCULO IMC</title>
</head>

<body>
    <div id="paralelograma"></div>
    <section>
        <form>
            <!-- Título do formulário -->
            <h1>Cálculo IMC</h1>
            <!-- Agrupar elementos em um formulário -->
            <fieldset>
                <!-- Container utilizável para css -->
                <div class="container">
                    <h1>Resultado do seu teste</h1>
                    <div style="margin-left: 138px;">
                        <?php
                        echo "Sua Massa Corporal é: <b><spam style='font-size:20px'> $massa </spam></b><br>";
                        echo "Estado Atual: <b><spam style='font-size:20px'>$mensagem</spam></b><br>";
                        ?>
                    </div>
                    <div id="donutchart" style="width: 550px; height: 300px; margin-top: 50px;"></div>
                    <div style="width:100%;text-align:right;" class="row">
                        <button type="button" style="margin-top:-40px;width: 100px; height: 40px; background-color: #145A32;border-radius: 10px;position:absolute;color:white;font-weight: bold;" onclick="teste()">Voltar</button>
                    </div>
                </div>
            </fieldset>
        </form>
        <img src="image/users.png">
    </section>
    <script src="javascript.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {
            packages: ["corechart"]
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Masculino', <?= $x ?>],
                ['Feminino', <?= $y ?>],
            ]);

            var options = {
                is3D: true,
                title: 'Quantidade de Registro por Gênero',
                pieHole: 0.4,
                pieSliceText: 'none',
                legend: {
                    position: 'labeled',
                    labeledValueText: 'both',
                    maxLines: '10',
                    textStyle: {
                        color: 'black',
                        fontSize: 12,
                        bold: true,
                        italic: true,
                    }
                },
                pieSliceTextStyle: {
                    color: 'black',
                    position: 'top'
                },
            };

            var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
            chart.draw(data, options);
        }
    </script>
</body>

</html>