<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tela de Login</title>
    <meta chartset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(90deg, rgb(20, 108, 196), rgb(50, 214, 255));
        }
        div{
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;

        }
        input{

            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        .inputSubmit:hover{
            background-color: deepskyblue;
            cursor: pointer;

        }

        a{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        a{
            
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }
        a:hover{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div>
        
        <h1>Login</h1>
        <form action="testador.php" method="POST">
            <input type="text" name="Nome" placeholder="Nome">
            <br><br>
            <input type="text" name="CPF" placeholder="CPF">
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar">
            <br><br>
        </form>
        <form action="tela_inicial.php" method="POST">
        <input  class="inputSubmit" type="submit" name="submit" value="Voltar para o inicio">
        </form>   
    </div>
</body>
</html>