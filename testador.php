<?php 
    

    if(isset($_POST['submit']) && !empty($_POST['Nome']) && !empty($_POST['CPF']))
    {

        include_once('configura.php');
        $Nome = $_POST['Nome'];
        $CPF = $_POST['CPF'];



        $sql = "SELECT * FROM pessoa WHERE Nome = '$Nome' and CPF = '$CPF'";

        $result = $connect->query($sql);

       if(mysqli_num_rows($result) < 1)
       {
        unset($_SESSION['Nome']);
        unset($_SESSION['CPF']);
        header('location: login.php');
       }
       else
       {
        $_SESSION['Nome'] = $Nome;
        $_SESSION['CPF'] = $CPF;      
        header('location: tela_de_listagem.php');
       }

    }
    else
    {

        header('Location: login.php');
    }
?>