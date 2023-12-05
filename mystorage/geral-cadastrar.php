<h1>Novo produto</h1>
<form action="?page=geral-salvar" method="POST" >
    <input type="hidden" name="acao" value="geral-cadastrar"0 >
    <div class="mb-3">
        <label>Nome do produto</label>
        <input type="text" name="geral_item" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Quantidade</label>
        <input type="number" name="geral_qtd" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-warning">Enviar</button>
    </div>
</form>