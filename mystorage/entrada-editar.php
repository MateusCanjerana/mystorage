<h1>Nova Entrada</h1>
<?php
    $sql = "SELECT * FROM entrada WHERE id_entrada=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=entrada-salvar" method="POST">
    <input type="hidden" name="acao" value="entrada-editar"0 >
    <input type="hidden" name="id" value="<?php print $row->id_entrada; ?>">
    <div class="mb-3">
        <label>Descrição</label>
        <input type="text" name="entrada_descricao" class="form-control" value= "<?php print $row->entrada_descricao ?>" maxlength="45" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-warning">Enviar</button>
    </div>
</form>
