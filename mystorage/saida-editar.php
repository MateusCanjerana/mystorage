<h1>Nova Saída</h1>
<?php
    $sql = "SELECT * FROM saida WHERE id_saida=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=saida-salvar" method="POST">
    <input type="hidden" name="acao" value="saida-editar"0 >
    <input type="hidden" name="id" value="<?php print $row->id_saida; ?>">
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="saida_descricao" class="form-control" value= "<?php print $row->saida_descricao ?>" maxlength="45" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-warning">Enviar</button>
    </div>
</form>
