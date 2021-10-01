<?php $uri = service('uri'); ?>
<!-- Content Nav Start -->
<div class="content--nav pb--30">
    <ul class="nav ff--primary fs--14 fw--500 bg-lighter">
        <li class="<?= $uri->getSegment(1) == 'perfil' ? 'active' : '' ?>"><a href="<?= base_url('perfil') ?>/<?= $uri->getSegment(2) ?>">Perfi</a></li>
        <li class="<?= $uri->getSegment(1) == 'quem-amigo-segue' ? 'active' : '' ?>"><a href="<?= base_url('quem-amigo-segue') ?>/<?= $uri->getSegment(2) ?>">Seguindo</a></li>
        <li class="<?= $uri->getSegment(1) == 'seguidores-do-amigo' ? 'active' : '' ?>"><a href="<?= base_url('seguidores-do-amigo') ?>/<?= $uri->getSegment(2) ?>">Seguidores</a></li>
        <li class="<?= $uri->getSegment(1) == 'curso-do-usuario' ? 'active' : '' ?>"><a href="<?= base_url('curso-do-usuario') ?>/<?= $uri->getSegment(2) ?>">Cursos de <?= $instructor[0] ?></a></li>
        <li class="<?= $uri->getSegment(1) == 'assistidos-por' ? 'active' : '' ?>"><a href="<?= base_url('assistidos-por') ?>/<?= $uri->getSegment(2) ?>">Cursos assistidos por <?= $instructor[0] ?></a></li>
    </ul>
</div>
<!-- Content Nav End -->
