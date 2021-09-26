<?php $uri = service('uri'); ?>
<!-- Content Nav Start -->
<div class="content--nav pb--30">
    <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
        <li class="<?= $uri->getSegment(1) == 'perfil' ? 'active' : '' ?>"><a href="<?= base_url('home') ?>">Perfi</a></li>
        <li class="<?= $uri->getSegment(1) == 'amigos' ? 'active' : '' ?>"><a href="<?= base_url('amigos') ?>">Amigos</a></li>
        <li class="<?= $uri->getSegment(1) == 'cursos' ? 'active' : '' ?>"><a href="<?= base_url('amigos') ?>">Cursos</a></li>
    </ul>
</div>
<!-- Content Nav End -->