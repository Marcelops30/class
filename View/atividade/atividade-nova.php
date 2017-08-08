<h1 class="page-header">
    Nova Atividade
</h1>

<ol class="breadcrumb">
  <li><a href="?c=atividade">Atividade</a></li>
  <li class="active">Nova Atividade</li>
</ol>

<form id="frm-atividade" action="?c=atividade&a=Guardar" method="post" enctype="multipart/form-data">

    <!--<div class="form-group">
      <label>ID</label>
      <input type="text" name="id_asm" value="<?php echo $ativ->id_asm; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:20" />
    </div>-->

    <div class="form-group">
        <label>Nome</label>
        <input type="text" name="nome_asm" value="<?php echo $ativ->nome_asm; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Tempo</label>
        <input type="text" name="tempo_asm" value="<?php echo $ativ->tempo_asm; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Pontuação</label>
        <input type="text" name="pontuacao_asm" value="<?php echo $ativ->pontuacao_asm; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Imagem</label>
        <input type="file" name="imagem_asm" value="<?php echo $ativ->imagem_asm; ?>" class="form-control" placeholder="" data-validacion-tipo="requerido|min:240" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-atividade").submit(function(){
            return $(this).validate();
        });
    })
</script>
