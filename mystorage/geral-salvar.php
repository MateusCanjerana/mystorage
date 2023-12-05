<?php
    switch ($_REQUEST['acao']) {
        case 'geral-cadastrar':
            $geral_item = $_POST['geral_item'];
            $geral_qtd = $_POST['geral_qtd'];

            $sql = "INSERT INTO geral (geral_item, geral_qtd) VALUES ('{$geral_item}', '{$geral_qtd}')";

            $res = $conn -> query($sql); 
            if($res==true){
                print "<script>alert('Cadastrado com sucesso!');</script>";
                print "<script>location.href='?page=geral-consultar';</script>";
            }else{
                print "<script>alert('Não foi possível cadastrar!');</script>";
                print "<script>location.href='?page=geral-consultar';</script>";
            }
        break;
        case 'geral-editar':
            $geral_item = $_POST['geral_item'];
            $geral_qtd = $_POST['geral_qtd'];
            
            $sql = "UPDATE geral SET geral_item='{$geral_item}', geral_qtd='{$geral_qtd}' WHERE  id_geral=".$_REQUEST["id"];

            $res = $conn -> query($sql);
            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=geral-consultar';</script>";
            }else{
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=geral-consultar';</script>";
            }
        break;
        case 'geral-excluir':
            
            $sql = "DELETE FROM geral  WHERE id_geral=".$_REQUEST["id"];

            $res = $conn -> query($sql);

            if($res==true){
                print "<script>alert('Excluído com sucesso!');</script>";
                print "<script>location.href='?page=geral-consultar';</script>";
            }else{
                print "<script>alert('Não foi possível excluir!');</script>";
                print "<script>location.href='?page=geral-consultar';</script>";
            }

        break;
        
        default:
        
        break;
    }
?>