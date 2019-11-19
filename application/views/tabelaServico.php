<?php if ($servicos) : ?>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2><i class="fa fa-list"></i>    Serviços Cadastrados</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="datatable_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Descriçao</th>
                                                <th>Preço</th>
                                                <th>Data da Entrega</th>
                                                <th>Carro</th>
                                                <th>Cliente</th>
                                                <th colspan='2'>Opções</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                foreach ($servicos as $linha) {
                                                    echo    "<tr>" .
                                                        "<td>" . $linha->descricao . "</td>" .
                                                        "<td>" . $linha->preco . "</td>" .
                                                        "<td>" . $linha->dataentrega . "</td>" .
                                                        "<td>" . $linha->modelo . "</td>" .
                                                        "<td>" . $linha->nome . "</td>" .
                                                        "<td>" .
                                                        "<a class='btn btn-success'<a href='/servicos/alterar/" . $linha->idord . " '>Alterar</a>" .
                                                        "</td>" .
                                                        "<td>" .
                                                        "<a class='btn btn-danger'<a href='/servicos/excluirContato/" . $linha->idord . " '>Excluir</a>" .
                                                        "</td>" .
                                                        "</tr>";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <div class="dataTables_info" id="datatable_info" role="status" aria-live="polite">Total de Registros: <?php echo $this->Servicos_Model->CountAll() ?></div>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate">
                                                <ul class="pagination">
                                                    <?php echo $pagination; ?>
                                                <?php else : ?>
                                                    <p class="alert alert-info">Página inexistente</p>
                                                <?php endif; ?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>