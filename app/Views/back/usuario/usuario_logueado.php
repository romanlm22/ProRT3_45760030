<div class="container mt-5">
<div class="row justify-content-md-center">
<div class="col-5">
	<?php if(session()->getFlashdata('msg')):?>
	<div class="alert alert-warning">
	<?= session()->getFlashdata('msg')?>
	</div>
<?php endif;?>
<br><br>
	<?php if(session()->perfil_id == 1): ?>
	<div>
	<center><img class="center" height="100px" width="100px" src="<?php echo base_url ('assets/img/imagenes/acceso.png'); ?>">
</center>
	</div>
	<?php elseif(session()->perfil_id == 2): ?>
	<div>
		<center><img class="center" height="100px" width="100px" src="<?php echo base_url ('assets/img/imagenes/acceso.png'); ?>">
</center>
	</div>
	<?php endif;?>
</div>
</div>
</div>