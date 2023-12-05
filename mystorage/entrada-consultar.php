<h1>Listar Entrada</h1>
<?php
    $sql = "SELECT * FROM entrada AS ent 
    INNER JOIN geral AS g 
    ON ent.geral_id_geral = g.id_geral";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    
    
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    if($qtd > 0){
                print "<table class='table table-bordered table-hover'>";
                    print "<tr>";
                    print "<th>#</th>";
                    print "<th>Data/Hora</th>";
                    print "<th>Nome do item</th>";
                    print "<th>Quantidade</th>";
                    print "<th>Descrição</th>";
                    print "<th>Ação</th>";
                    print "</tr>";
                    while($row = $res ->fetch_object()){
                        print "<tr>";
                        print "<td>".$row->id_entrada."</td>";
                        print "<td>".date('d/m/Y H:i:s', strtotime($row->entrada_dt))."</td>";
                        print "<td>".$row->geral_item."</td>";
                        print "<td>".$row->entrada_qtd."</td>";
                        print "<td>".$row->entrada_descricao."</td>";
                        print "<td><button onclick=\"location.href='?page=entrada-editar&id=".$row->id_entrada."';\" class='btn btn-warning'>Editar</button></td>";

                        print "</tr>";
                    }
                print "</table>";
    }else{
        print "<h3>Não encontrou resultados!</h3>";
    }
?>

