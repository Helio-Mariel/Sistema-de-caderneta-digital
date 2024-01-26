<?php
require_once('views\layout\layout_aluno.php');
?>

<div id="layoutSidenav_content">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="container" id="resultado1">
                <div id="my-tab-content" class="tab-content">
                    <br>
                    <div class="tab-pane active" id="red">
                        <main>
                            <div class="container-fluid px-4 mt-4">
                                <div class="table-responsive" data-pattern="">
                                    <h4>Avaliações Contínuas</h4>
                                    <!-- tabela-->
                                    <table width="100%" class="table table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="width:80px; background-color: #005384; color: white;">
                                                    DISCIPLINA</th>
                                                <th style="width:10px; background-color: #005384; color: white">AC1</th>
                                                <th style="width:10px; background-color: #005384; color: white">AC2</th>
                                                <th style="width:10px; background-color: #005384; color: white">AC3</th>
                                                <th style="width:10px; background-color: #005384; color: white">AC4</th>
                                                <th style="width:10px; background-color: #005384; color: white">AC5</th>
                                                <th style="width:10px; background-color: #005384; color: white">AC6</th>
                                                <th style="width:10px; background-color: #005384; color: white">Média
                                                </th>
                                                <th style="width:10px; background-color: #005384; color: white">MACs
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="table1S">
                                            <?php foreach ($notas as $nota) :
                                            ?>
                                            <tr>
                                                <td style="background-color: #005384 ; color: white">
                                                    <?php echo $nota['nome'] ?></td>
                                                <td><?php echo $nota['AC1'] ?></td>
                                                <td><?php echo $nota['AC2'] ?></td>
                                                <td><?php echo $nota['AC3'] ?></td>
                                                <td><?php echo $nota['AC4'] ?></td>
                                                <td><?php echo $nota['AC5'] ?></td>
                                                <td><?php echo $nota['AC6'] ?></td>
                                                <?php $m_avaliacoes = (
                                                        ($nota['AC1'] + $nota['AC2'] + $nota['AC3'] + $nota['AC4'] + $nota['AC5'] + $nota['AC6']) / 6
                                                    ) ?>
                                                <td><?php echo $m_avaliacoes // $nota['AC_media']
                                                        ?></td>
                                                <?php $mac = ($m_avaliacoes * 4) ?>
                                                <td><?php echo $mac // $nota['MAC']
                                                        ?></td>
                                            </tr>
                                            <?php endforeach;
                                            ?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                                <br>
                                <div class="table-responsive" data-pattern="">
                                    <h4>Avaliação Normal</h4>
                                    <!-- tabela -->
                                    <table width="100%" class="table table-bordered" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th style="width:10px; background-color: #005384; color: white">
                                                    DISCIPLINA
                                                </th>
                                                <th style="width:10px; background-color: #005384; color: white">PP1</th>
                                                <th style="width:10px; background-color: #005384; color: white">PT1</th>
                                                <th style="width:10px; background-color: #005384; color: white">MT1</th>
                                                <th style="width:10px; background-color: #005384; color: white">PP2</th>
                                                <th style="width:10px; background-color: #005384; color: white">PT2</th>
                                                <th style="width:10px; background-color: #005384; color: white">MT2</th>
                                                <th style="width:10px; background-color: #005384; color: white">PP3</th>
                                                <th style="width:10px; background-color: #005384; color: white">PT3</th>
                                                <th style="width:10px; background-color: #005384; color: white">MT3</th>
                                                <th style="width:10px; background-color: #005384; color: white">Situação
                                                </th>
                                                <th style="width:10px; background-color: #005384; color: white">Média
                                                    Final
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="table1S">
                                            <?php foreach ($notas_ as $nota) :
                                            ?>
                                            <tr>
                                                <td style="background-color: #005384 ; color: white">
                                                    <?php echo $nota['nome'] ?></td>
                                                <td><?php echo $nota['PP1'] ?></td>
                                                <td><?php echo $nota['PT1'] ?></td>

                                                <?php $mt1 = (
                                                        ($nota['PP1'] + $nota['PT1']) / 2) ?>

                                                <td><?php echo $mt1 // $['MT1'] 
                                                        ?></td>
                                                <td><?php echo $nota['PP2'] ?></td>
                                                <td><?php echo $nota['PT2'] ?></td>

                                                <?php $mt2 = (
                                                        ($nota['PP2'] + $nota['PT2']) / 2) ?>

                                                <td><?php echo $mt2 // // $['MT2'] 
                                                        ?></td>
                                                <td><?php echo $nota['PP3'] ?></td>
                                                <td><?php echo $nota['PT3'] ?></td>

                                                <?php $mt3 = (
                                                        ($nota['PP3'] + $nota['PT3']) / 2) ?>

                                                <td><?php echo $mt3 // // $['MT3'] 
                                                        ?></td>

                                                <?php $media_final = (
                                                        ($mt1 + $mt2 + $mt3) / 3) ?>

                                                <td><?php echo $media_final //$nota['m_final'] 
                                                        ?></td>

                                                <?php if ($media_final > 10) {
                                                        $situacao = "APROVADO";
                                                    } else {
                                                        $situacao = "REPROVADO";
                                                    }  ?>

                                                <td><?php echo $situacao //$nota['situacao'] 
                                                        ?></td>

                                            </tr>
                                            <?php endforeach;
                                            ?>
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>