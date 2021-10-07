<div class="cover--user-desc fw--400 fs--18 fstyle--i text-darkest">
    <p><?= $perfil[0]->bio ?></p>
    <a data-overlay="0.1">
        <?php if ($is_following->isFollowing): ?>
            <small id="to-follow" onclick="unfollowUser('<?= $perfil[0]->id ?>')" class="btn btn-danger">
                Deixar de seguir
            </small>
        <?php else: ?>
            <small id="to-follow" onclick="followUser('<?= $perfil[0]->id ?>')" class="btn btn-success">
                Seguir
            </small>
        <?php endif ?>
    </a>
</div>
