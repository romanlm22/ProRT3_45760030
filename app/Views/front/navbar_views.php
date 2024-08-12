<?php
$session = session();
$nombre = $session->get('nombre');
$perfil=$session->get('perfil_id');
?>

<nav class="navbar navbar-expand-lg header-custom">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand me-auto barra" href="<?php echo base_url('principal_ultimo')?>">
<img src="<?php echo base_url ('assets/img/imagenes/logo.png')?>" alt="Principal" width="90 br-50px">
</a>
</div>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<?php if(session()->perfil_id == 1): ?>
<div class="btn btn-secondary active btnUser btn-sm">
<a href="">ADMIN: <?php echo session('nombre'); ?> </a>
</div>

<a class="navbar-brand" href="#"></a>
<div class="container-fluid" id="navbarTogglerDemo03">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link" href='registro'>Registrarse</a></li>
</li>
<li class="nav-item">
<a class="nav-link" href='login'>Login</a></li>
</li>
<li class="nav-item">
<a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
</li>
</ul>
</div>

<?php elseif (session()->perfil_id == 2): ?>
<div class="btn btn-info active btnUser btn-sm">
<a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
</div>

<!-- NAVBAR PARA CLIENTES que pueden comprar-->

<a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<a class="nav-link" href='acerca_de'>Contacto</a></li>
</li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Articulos</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href='alpha_romero'>Alpha Romero</a></li>
                  <li><a class="dropdown-item" href='alpha_tauri'>Alpha Tauri</a></li>
                </ul>
            </li>  
<li class="nav-item">
<a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
</li>
</ul>
</div>

<?php else:?>

<!-- NAVBAR PARA CLIENTES np logueados_-->
<a class="navbar-brand" href="#"></a>
<div class="collapse navbar-collapse" id="navbarTogglerDemo03">
<ul class="navbar-nav me-auto mb-2 mb-lg-0">
<li class="nav-item">
<li class="nav-item">
<a class="nav-link" href='acerca_de'>Contacto</a></li>
</li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Articulos</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href='alpha_romero'>Alpha Romero</a></li>
                  <li><a class="dropdown-item" href='alpha_tauri'>Alpha Tauri</a></li>
                </ul>
            </li>
<a class="nav-link" href='registro'>Registrarse</a></li>
</li>
<li class="nav-item">
<a class="nav-link" href='login'>Login</a></li>
</li>
</ul>
</div>

<form class="d-flex" role="buscar">
<input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
<button class="btn btn-outline-success" type="submit">Buscar</button>
</form>

<?php endif;?>

</div>
</div>

</nav>