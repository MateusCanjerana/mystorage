<h1>Nova Saída</h1>
<form action="?page=saida-salvar" method="POST">
<input type="hidden" name="acao" value="saida-cadastrar"0 >
    <div class="mb-3">
        <label>Nome do produto</label>
        <select name="geral_id_geral" class="form-control">
            <option>-=Escolha a opção=-</option>
            <?php
                $sql = "SELECT * FROM geral";
                $res = $conn->query($sql);

                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_geral."'>";
                    print $row->geral_item. "</option>";
                }
            ?>
        </select>
    <div class="mb-3">
        <label>Quantidade</label>
        <input type="number" name="saida_qtd" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="saida_descricao" class="form-control" maxlength="45" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-warning">Enviar</button>
    </div>
</form>
