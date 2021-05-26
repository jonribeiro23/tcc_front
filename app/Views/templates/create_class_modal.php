<!-- Modal Bio Start -->
<div class="media--modal type--img modal fade" id="aula">
    <div class="modal-dialog">
        <div class="row gutter--0">
            <div class="col-md-2"></div>
            <div class="col-md-8 mb--15">
                <form action="<?= base_url('criar-aula') ?>" method="post">
                    <h3>Cadastrar aula</h3>
                    <div class="col-xs-12 col-xxs-12">
                        <div class="form-group">
                            <label for="nome"><strong>Nome da aula</strong></label>
                            <input id="nome" type="text" name="nome" placeholder="Nome *" class="form-control" value="<?= isset($perfil)  ? $perfil->website : '' ?>">
                        </div>
                    </div>
                    <div class="col-xs-12 col-xxs-12">
                        <div class="form-group">
                            <label for="link"><strong>Link</strong></label>
                            <input id="link" type="text" name="link" placeholder="Link *" class="form-control" value="<?= isset($perfil)  ? $perfil->website : '' ?>">
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="descricao"><strong>Descrição</strong></label>
                            <textarea id="descricao" name="descricao" placeholder="***" class="form-control" required></textarea>
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