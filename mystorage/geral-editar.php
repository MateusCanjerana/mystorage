<h1>Editar Produto</h1>
<?php
    $sql = "SELECT * FROM geral WHERE id_geral=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=geral-salvar" method="POST">
    <input type="hidden" name="acao" value="geral-editar"0 >
    <input type="hidden" name="id" value="<?php print $row->id_geral; ?>">
    <div class="mb-3">
        <label>Nome do produto</label>
        <input type="text" name="geral_item" class="form-control" value="<?php print $row->geral_item ?>" required>
    </div>
    <div class="mb-3">
        <label>Quantidade</label>
        <input type="number" name="geral_qtd" class="form-control"  value="<?php print $row->geral_qtd ?>" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-warning">Enviar</button>
    </div>
</form>