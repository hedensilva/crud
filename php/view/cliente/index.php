 <!-- Page Heading -->
 <h1 class="h3 mb-4 text-gray-800">Cliente</h1>
 <?php if($msgAlert != '') :?>
 <div class="alert alert-<?=$typeAlert?> alert-dismissible fade show" role="alert">
    <?=$msgAlert?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
 </div>
 <?php endif ?>
 <!-- Basic Card Example -->
 <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Cadastro</h6>
    </div>
    <div class="card-body">
    <form action='' method='post'>
        <div class="form-group">
            <label for="nome">Nome Completo</label>
            <input type="text" class="form-control" name="nome" aria-describedby="nomeCliente">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email">
        </div>
        <button type="submit" class="btn btn-primary" name='cadastroCliente'>Cadastrar</button>
    </form>
    </div>
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Lista</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach($clientes as $c) : ?>
                    <tr>
                        <td><?=$c['id']?></td>
                        <td>
                            <a href="cliente.php?id=<?=$c['id']?>">
                                <?=$c['nome']?>
                            </a>
                        </td>
                        <td><?=$c['email']?></td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>