<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Cliente #<?=$cliente['id']?></h1>
 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Atualização</h6>
    </div>
    <div class="card-body">
    <form action='cliente.php' method='post'>
        <input type='hidden' name='id' value='<?=$cliente['id']?>'>
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input value='<?=$cliente['nome']?>' type="text" class="form-control" name="nome" aria-describedby="nomeCliente">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input value='<?=$cliente['email']?>' type="email" class="form-control" name="email">
        </div>
        <a href='cliente.php' class='btn btn-secondary'>Cancelar</a>
        <a href='cliente.php?excluir=<?=$cliente['id']?>' class='btn btn-danger'>Excluir</a>
        <button type="submit" class="btn btn-primary" name='atualizar'>Atualizar</button>
    </form>
    </div>
</div>