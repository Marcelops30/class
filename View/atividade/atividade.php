<h1 class="page-header">Atividade </h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=item&a=Novo">Novo Item</a>
    <a class="btn btn-primary" href="?c=atividade&a=Novo">Nova Atividade</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:120px;">Nome</th>
            <th style="width:120px;">Tempo</th>
            <th style="width:120px;">Pontuação</th>
            <th style="width:120px;">Imagem</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->nome_asm; ?></td>
            <td><?php echo $r->tempo_asm; ?></td>
            <td><?php echo $r->pontuacao_asm; ?></td>
            <td><?php echo $r->imagem_asm; ?></td>
            <td>
                <a href="?c=atividade&a=Crud&id_asm=<?php echo $r->id_asm; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Tem certeza que quer apagar este registro?');" href="?c=atividade&a=Eliminar&id_asm=<?php echo $r->id_asm; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
