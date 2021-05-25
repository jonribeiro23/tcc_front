<!-- Modal Bio Start -->
<div class="media--modal type--img modal fade" id="bio">
    <div class="modal-dialog">
        <div class="row gutter--0">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb--15">
                <form action="<?= base_url('editar-dados') ?>" method="post">
                    <h3>Mensagem</h3>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <textarea id="txtBio" name="habilidades" placeholder="Escreva uma mensagem *" class="form-control" required><?= isset($perfil)  ? $perfil->bio : '' ?></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary mt--10">Salvar</button>
                        <button type="button" class="btn btn-danger mt--10" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<!-- Modal Bio End -->

<!-- Modal Sobre mim Start -->
<div class="media--modal type--img modal fade" id="sobreMim">
    <div class="modal-dialog">
        <div class="row gutter--0">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb--15">
                <form action="<?= base_url('editar-dados') ?>" method="post">
                    <h3>Minhas principais habilidades</h3>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <textarea id="txtSobreMim" name="habilidades" placeholder="Suas habilidades *" class="form-control" required><?= isset($perfil)  ? $perfil->habilidades : '' ?></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary mt--10">Salvar</button>
                        <button type="button" class="btn btn-danger mt--10" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<!-- Modal Sobre mim End -->

<!-- Modal Sobre biografia Start -->
<div class="media--modal type--img modal fade" id="biografia">
    <div class="modal-dialog">
        <div class="row gutter--0">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb--15">
                <form action="<?= base_url('editar-dados') ?>" method="post">
                    <h3>Biografia</h3>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <textarea id="txtBiografia" name="habilidades" placeholder="Suas biografia *" class="form-control" required><?= isset($perfil)  ? $perfil->biografia : '' ?></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary mt--10">Salvar</button>
                        <button type="button" class="btn btn-danger mt--10" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<!-- Modal Sobre biografia End -->

<!-- Modal Sobre contato Start -->
<div class="media--modal type--img modal fade" id="contato">
    <div class="modal-dialog">
        <div class="row gutter--0">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb--15">
                <form action="<?= base_url('editar-dados') ?>" method="post">
                    <h3>Contato</h3>

                    <div class="row gutter--20">
                        <div class="col-xs-6 col-xxs-12">
                            <div class="form-group">
                                <label for="website"><strong>Website</strong></label>
                                <input id="website" type="text" name="website" placeholder="Website *" class="form-control" value="<?= isset($perfil)  ? $perfil->website : '' ?>">
                            </div>
                        </div>

                        <div class="col-xs-6 col-xxs-12">
                            <div class="form-group">
                                <label for="instagram"><strong>Instagram</strong></label>
                                <input id="instagram" type="text" name="instagram" placeholder="Instagram *" class="form-control" value="<?= isset($perfil)  ? $perfil->instagram : '' ?>" required>
                            </div>
                        </div>

                        <div class="col-xs-6 col-xxs-12">
                            <div class="form-group">
                                <label for="youtube"><strong>YouTube</strong></label>
                                <input id="youtube" type="text" name="youtube" placeholder="YouTube *" class="form-control" value="<?= isset($perfil)  ? $perfil->youtube : '' ?>" required>
                            </div>
                        </div>

                        <div class="col-xs-6 col-xxs-12">
                            <div class="form-group">
                                <label for="facebook"><strong>Facebook</strong></label>
                                <input id="facebook" type="text" name="facebook" placeholder="Facebook *" class="form-control" value="<?= isset($perfil)  ? $perfil->facebook : '' ?>" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary mt--10">Salvar</button>
                        <button type="button" class="btn btn-danger mt--10" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</div>
<!-- Modal Sobre contato End -->
