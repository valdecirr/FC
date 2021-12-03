<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>CÁLCULO IMC</title>
</head>

<body>
    <div id="paralelograma"></div>
    <section>
        <form action="resultado.php" method="POST">
            <!-- id="insert_form" -->
            <!-- Título do formulário -->
            <h1>Cálculo IMC</h1>
            <!-- Agrupar elementos em um formulário -->
            <fieldset>
                <!-- Container utilizável para css -->
                <div class="container">
                    <!-- inserir um input para o nome da pessoa -->
                    <input type="text" required name="nome">

                    <label>Nome</label>
                </div>
                <div class="container">
                    <!-- inserir um input para a data de nascimento -->
                    <input type="text" required name="data">

                    <label>Data de Nascimento</label>
                </div>
            </fieldset>
            <fieldset>
                <!-- Container utilizável para css -->
                <div class="container">
                    <!-- inserir um input para o nome da pessoa -->
                    <input type="text" required name="peso">

                    <label>Peso</label>
                </div>
                <div class="container">
                    <!-- inserir um input para a data de nascimento -->
                    <input type="text" required name="altura">

                    <label>Altura</label>
                </div>
            </fieldset>
            <fieldset>
                <!-- <div class="contorno"> -->
                    <!-- <div id="mprincipal"> -->
                        <div class="input-group" style="margin-left: 10px;">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="selectgenero" id="descrgenero">Gênero</label>
                                <select style="width: 175px;height:30px;" class="form-control" name="genero" id="selectgenero">                                
                                    <option value=""></option>
                                    <option value="F">Feminino</option>
                                    <option value="M">Masculino</option>
                                </select>
                            </div>
                        </div>
                    <!-- </div> -->
                <!-- </div> -->
            </fieldset>
            <fieldset>
                <button type="submit" name="CadVariavel" id="CadVariavel" class="buttonenv">Salvar Dados</button>
            </fieldset>
        </form>
        <img src="image/users.png">
      
        <script src="javascript.js"></script>
    
</body>

</html>