<?php
     switch ($_REQUEST['acao']) {
        case 'saida-cadastrar':
            $sql = "INSERT INTO saida(
                geral_id_geral, saida_qtd, saida_descricao
                )VALUES(
                    ".$_POST["geral_id_geral"].",
                    ".$_POST["saida_qtd"].",
                    '".$_POST["saida_descricao"]."'
                ) ";
                $res = $conn -> query($sql); 
                
                //Puxar do Banco
                $geral_qtd_saida =  $_POST["saida_qtd"];
                $geral_id = $_POST["geral_id_geral"];
            
                $geral_qtd = "SELECT * FROM geral WHERE id_geral= $geral_id";
                $res_geral = $conn->query($geral_qtd);
                $row = $res_geral->fetch_object();
            
                $geral_qtd_saida_up =  "UPDATE geral SET geral_qtd_saida='{$geral_qtd_saida}' WHERE id_geral= $geral_id";
                $resul_geral_qtd_saida = $conn->query($geral_qtd_saida_up);
            
                $geral_qtd_again = "SELECT * FROM geral WHERE id_geral= $geral_id";
                $res_geral_again = $conn->query($geral_qtd_again);
                $row_again = $res_geral_again->fetch_object();



                //Calculo
                $soma = $row->geral_qtd - $row_again->geral_qtd_saida;
                
                $soma_up = "UPDATE geral SET geral_qtd='{$soma}' WHERE id_geral= $geral_id";
                $res_soma = $conn->query($soma_up);
           
               if($res_soma==true){
                   print "<script>alert('Cadastrado com sucesso!');</script>";
                   print "<script>location.href='?page=saida-consultar';</script>"; 
               }else{
                   print "<script>alert('Não foi possível cadastrar!');</script>";
                   print "<script>location.href='?page=saida-consultar';</script>";
                }
              
        break;
        case 'saida-editar':
            $saida_descricao = $_POST['saida_descricao'];
            
            $sql = "UPDATE saida SET saida_descricao='{$saida_descricao}' WHERE  id_saida=".$_REQUEST["id"];

            $res = $conn -> query($sql);
            if($res==true){
                print "<script>alert('Editado com sucesso!');</script>";
                print "<script>location.href='?page=saida-consultar';</script>";
            }else{
                print "<script>alert('Não foi possível editar!');</script>";
                print "<script>location.href='?page=saida-consultar';</script>";
            }
        break;
     }
?>
