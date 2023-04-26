<div id="JanelaModal<?php echo $exibe[0] ?>" class="modal fade">
            <!-- Você pode utilizar as classes: "modal-dialog modal-sm", "modal-fullscreen" e "modal-dialog-scrollable" -->
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Atenção!</h3>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        Tem certeza que deseja excluir esse registro?
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-danger" href="../controllers/deletarAluno.php?ida=<?php echo $exibe[0] ?>">Confirmar</a>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
</div>
