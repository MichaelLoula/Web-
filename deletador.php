<?php 

    if(!empty($_GET['id']))
    {

        include_once('configura.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM pessoa WHERE id = $id"

        $result = $connect->query($sqlSelect)

        if($result->num_rows > 0)
        {

            $sqldelete = "DELETE FROM pessoa WHERE id=$id";
            $resultDelete = connect->query($sqlSelect)

            while ($user_data = mysqli_fetch_assoc($result)) 
            {
                $Nome = $user_data['Nome'];
                $data_nasc = $user_data['data_nascimento'];
                $CPF = $user_data['CPF'];
                $Endereco = $user_data['Endereco'];
                $Faculdade = $user_data['Faculdade'];
            }
        }    
        header('Location: tela_de_listagem.php')    
    }

?>