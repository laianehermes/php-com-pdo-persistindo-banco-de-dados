<?php 

require_once 'classes/Categoria.php';
require_once 'cabecalho.php';

$categoria = new Categoria();
$categoria->id = $_GET['id'];
$resultado = $categoria->carregar();

?>
<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>
<form action="#" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome da Categoria</label>
                <input type="text" value="<?php echo $resultado['nome'] ?>" class="form-control" placeholder="Nome da Categoria">
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>
<?php require_once 'rodape.php' ?>
