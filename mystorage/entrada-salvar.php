<?php
     switch ($_REQUEST['acao']) {
        case 'entrada-cadastrar':
            $sql = "INSERT INTO entrada(
                geral_id_geral, entrada_qtd, entrada_descricao
                )VALUES(
                    ".$_POST["geral_id_geral"].",
                    ".$_POST["entrada_qtd"].",
                    '".$_POST["entrada_descricao"]."'
                ) ";
                $res = $conn -> query($sql); 
                
                //Puxar do Banco
                $geral_qtd_entrada =  $_POST["entrada_qtd"];
                $geral_id = $_POST["geral_id_geral"];
            
                $geral_qtd = "SELECT * FROM geral WHERE id_geral= $geral_id";
                $res_geral = $conn->query($geral_qtd);
                $row = $res_geral->fetch_object();
            
                $geral_qtd_entrada_up =  "UPDATE geral SET geral_qtd_entrada='{$geral_qtd_entrada}' WHERE id_geral= $geral_id";
                $resul_geral_qtd_entrada = $conn->query($geral_qtd_entrada_up);
            
                $geral_qtd_again = "SELECT * FROM geral WHERE id_geral= $geral_id";
                $res_geral_again = $conn->query($geral_qtd_again);
                $row_again = $res_geral_again->fetch_object();



                //Calculo
                $soma = $row->geral_qtd + $row_again->geral_qtd_entrada;
                
                $soma_up = "UPDATE geral SET geral_qtd='{$soma}' WHERE id_geral= $geral_id";
                $res_soma = $conn->query($soma_up);
           
               if($res_soma==true){
                   print "<script>alert('Cadastrado com sucesso!');</script>";
                   print "<script>location.href='?page=entrada-consultar';</script>"; 
               }else{
                   print "<script>alert('Não foi possível cadastrar!');</script>";
                   print "<script>location.href='?page=entrada-consultar';</script>";
                }
              
        break;
        case 'entrada-editar':
            $entrada_descricao = $_POST['entrada_descricao'];
            
            $sql = "UPDATE entrada SET entrada_descricao='{$entrada_descricao}' WHERE  id_entrada=".$_REQUEST["id"];

            $res = $conn -> query($sql);
            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=entrada-consultar';</script>";
            }else{
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=entrada-consultar';</script>";
            }
        break;
     }
?>
