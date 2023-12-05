<h1>Listar Estoque</h1>
<?php
    $sql = "SELECT * FROM geral";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    if($qtd > 0){
        print "<div class='tabela'>";
                print "<table class='table table-bordered table-hover'>";
                    print "<tr>";
                    print "<th>#</th>";
                    print "<th>Nome do item</th>";
                    print "<th>Quantidade</th>";
                    print "<th>Ações</th>";
                    print "</tr>";
                    while($row = $res ->fetch_object()){
                        print "<tr>";
                        print "<td>".$row->id_geral."</td>";
                        print "<td>".$row->geral_item."</td>";
                        print "<td>".$row->geral_qtd."</td>";
                        print "<td>
                            <button onclick=\"location.href='?page=geral-editar&id=".$row->id_geral."';\" class='btn btn-warning'>Editar</button>
                            <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=geral-salvar&acao=geral-excluir&id=".$row->id_geral."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                        </td>";
                        print "</tr>";
                    }
                    print "</tr>";
                print "</table>";
        print "</div>";
    }else{
        print "<h3>Não encontrou resultados!</h3>";
    }
?>
