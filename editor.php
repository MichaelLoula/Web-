<?php 

    if(!empty($_GET['id']))
    {
   
    include_once('configura.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM pessoa WHERE id = $id"

    $result = $connect->query($sqlSelect)

        if($result->num_rows > 0)
        {
            while ($user_data = mysqli_fetch_assoc($result)) 
            {
                $Nome = $user_data['Nome'];
                $data_nasc = $user_data['data_nascimento'];
                $CPF = $user_data['CPF'];
                $Endereco = $user_data['Endereco'];
                $Faculdade = $user_data['Faculdade'];
            }
            
        }
        else
        {
            header('Location: tela_de_listagem.php')
    }    
     
    else
    {
        header('Location: tela_de_listagem.php')
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tela de Cadastro</title>
    <meta chartset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>

        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: rgb(60, 158, 255);

        }
        .box{
            color: dodgerblue;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.7);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            
        }
        fieldset{
            border:3px solid dodgerblue;
        
        }

        legend{
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: white;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid dodgerblue;
            outline: none;
            color: dodgerblue;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events:none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            
            top: -20px;
            font-size:12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius:10px;
            outline: none;
            font-size:15px;
        }
        #Atualizar{
            background-image: linear-gradient(to right,rgb(0, 92, 197), rgb(55, 124, 226));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #Atualizar:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(24, 154, 214));
        }
    </style>

</head>

<body>
    <a href="tela_de_listagem.php">Retornar</a>
    <div class="box">
        <form action="salvandoedit.php" method="POST">
            <fieldset>
                <legend><b>Cadastre-se</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="Nome" id="Nome" class="inputUser" value="<?php echo $Nome ?>" required>
                    <label for="Nome" class="labelInput">Nome</label>
                <br><br>

                <div class="inputBox">
                    <input type="text" name="CPF" id="CPF" class="inputUser" value="<?php echo $CPF ?>" required>
                    <label for="CPF" class="labelInput">CPF</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="Endereco" id="Endereco" class="inputUser" value="<?php echo $Endereco ?>" required>
                    <label for="Endereco" class="labelInput">Endereco</label>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="Faculdade" id="Faculdade" class="inputUser" value="<?php echo $Faculdade ?>" required>
                    <label for="Faculdade" class="labelInput">Faculdade</label>
                </div>
                <br>

                <div class="inputBox">
                    <label for="data_nascimento"><b>Data de nascimento:</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nasc ?>" required>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="Atualizar" id="Atualizar">
            </fieldset>

        </form>

    </div>
</body>

</html>