<form action="{{ route('config.modal.valores_e_taxas.store') }}" method="POST" enctype="multipart/form-data">
    <div class="modal fade" id="modal-create" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Cadastrar Nova Taxa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf()
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                    </div>
                    <div class="form-group">
                        <label for="valor">Valor</label>
                        <input type="text" class="form-control" name="valor" placeholder="Valor">
                    </div>
                    <div class="form-group">
                        <label for="taxa_perm_minima">Permanência mínima</label>
                        <input type="text" class="form-control" name="taxa_perm_minima" placeholder="Permanência mínima">
                    </div>
                    <div class="form-group">
                        <label for="taxa_vlr_adicional">Valor Adicional</label>
                        <input type="text" class="form-control" name="taxa_vlr_adicional" placeholder="Valor Adicional">
                    </div>
                    <div class="form-group">
                        <label for="taxa_perm_dia_adicional">Permanência mínima dias adicionais</label>
                        <input type="text" class="form-control" name="taxa_perm_dia_adicional" placeholder="Permanência mínima dias adicionais">
                    </div>
                    <div class="form-group">
                        <fieldset>
                            <label for="taxa_ativa">Ativo</label>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="taxa_ativa" value="1">
                                <label class="form-check-label" for="radioSim">Sim</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="taxa_ativa" value="0">
                                <label class="form-check-label" for="radioNao">Não</label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-custom" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn-custom">Salvar</button>
                </div>
            </div>
        </div>
    </div>
</form>

