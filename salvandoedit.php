<?php 

include_once(configura.php);

if(isset($_POST['Atualizar']))
{
    $Nome = $user_data['Nome'];
    $data_nasc = $user_data['data_nascimento'];
    $CPF = $user_data['CPF'];
    $Endereco = $user_data['Endereco'];
    $Faculdade = $user_data['Faculdade'];

    $sqlUpdate = "UPDATE pessoa SET nome = '$Nome',data_nascimento = '$data_nasc', CPF='$CPF', 
    Endereco='$Endereco', Faculdade = '$Faculdade' WHERE id='$id'";

    $result = $connect->query($sqlUpdate);
}
header('Location:tela_de_listagem.php');



?>