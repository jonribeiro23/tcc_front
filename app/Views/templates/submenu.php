<?php $uri = service('uri'); ?>
<!-- Content Nav Start -->
<div class="content--nav pb--30">
    <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
        <li class="<?= $uri->getSegment(1) == 'home' ? 'active' : '' ?>"><a href="<?= base_url('home') ?>">Perfi</a></li>
        <li class="<?= $uri->getSegment(1) == 'seguindo' ? 'active' : '' ?>"><a href="<?= base_url('seguindo') ?>">Seguindo</a></li>
        <li class="<?= $uri->getSegment(1) == 'seguidores' ? 'active' : '' ?>"><a href="<?= base_url('seguidores') ?>">Seguidores</a></li>
        <li class="<?= $uri->getSegment(1) == 'pessoas' ? 'active' : '' ?>"><a href="<?= base_url('pessoas') ?>">Buscar pessoas</a></li>
    </ul>
</div>
<!-- Content Nav End -->