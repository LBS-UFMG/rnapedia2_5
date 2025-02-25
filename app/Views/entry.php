<?= $this->extend('template') ?>
<?= $this->section('conteudo') ?>
<!-- Conteúdo personalizado -->
<div class="container py-5">

    <div class="row">
        <div class="col-md-7 col-12" style="overflow: auto; height: 800px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="thumbnail" style="border-left: #031430 5px solid; color: #ccc">
                        <div class="caption">
                            <div class="row">
                                <div class="col">
                                    <h1 class="pt-1 m-1 ms-2 texto-azul">
                                        <strong style="padding-right: 3px"><?= $id ?></strong>
                                    </h1>
                                </div>
                                <div class="col text-end">
                                    <div class="dropdown mt-3">
                                        <button class="dropdown-toggle btn azul text-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Download
                                        </button>
                                        <ul class="dropdown-menu">
                                            <p class="ms-3 mb-1 text-muted small">
                                                <b>FROM RNAPEDIA</b>
                                            </p>

                                            <li><a class="dropdown-item" href='<?= base_url() ?>data/structures/<?= $id ?>/<?= $id ?>.pdb'>PDB</a></li>

                                            <li><hr class="dropdown-divider"></li>

                                            <p class="ms-3 mb-1 text-muted small">
                                                <b>FROM RCSB/PDB</b>
                                            </p>


                                            <li><a class="dropdown-item" href="https://files.rcsb.org/view/<?= substr($id, 0,4) ?>.cif" target="_blank">mmcif</a></li>

                                            <li><a class="dropdown-item" href="https://files.rcsb.org/view/<?= substr($id, 0,4) ?>.pdb" target="_blank">Full PDB</a></li>

                                            <li><a class="dropdown-item" href="https://www.rcsb.org/fasta/entry/<?= substr($id, 0,4) ?>/display" target="_blank">FASTA</a></li>

                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>




                            <div style="margin: 10px 0 30px 0">
                                <a target="_blank" style='text-decoration:none' title="Search in PDB" href="https://www.rcsb.org/structure/<?= substr($id, 0, 4) ?>">
                                    <span class="badge bg-dark text-light ms-2">PDB</span>
                                </a>

                                <a target="_blank" style='text-decoration:none' title="Search in UniProt" href="https://www.uniprot.org/uniprot/?query=<?= substr($id, 0, 4) ?>+database:pdb">
                                    <span class="badge bg-info">UniProt</span>
                                </a>

                                <a target="_blank" style='text-decoration:none' title="Search in PubMed" href="https://www.ncbi.nlm.nih.gov/pubmed/?term=<?= substr($id, 0, 4) ?>">
                                    <span class="badge bg-warning">PubMed</span>
                                </a>


                            </div>

                            <table class="table table-condensed table-striped">
                                <tr>
                                    <th>Name</th>
                                    <td><?= $info[1] ?></td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td><?= $info[2] ?></td>
                                </tr>

                                <tr>
                                    <th>RNA length</th>
                                    <td><?= $info[3] ?></td>
                                </tr>

                                <tr>
                                    <th>Protein length</th>
                                    <td><?= $info[4] ?></td>
                                </tr>

                                <tr>
                                    <th>Number of contacts</th>
                                    <td><?= $info[5] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="thumbnail" style="border-left: #031430 5px solid; color: #ccc">
                        <div class="caption">
                            <h4 class="texto-azul m-2"><strong>RNA</strong></h4>
                            <table class="table table-condensed table-striped">
                                <tr><th>Base Composition (A)</th><td><?= $rna['A'] ?></td></tr>
                                <tr><th>Base Composition (C)</th><td><?= $rna['C'] ?></td></tr>
                                <tr><th>Base Composition (G)</th><td><?= $rna['G'] ?></td></tr>
                                <tr><th>Base Composition (U)</th><td><?= $rna['U'] ?></td></tr>

                                <tr>
                                    <th>GC content (%)</th>
                                    <td>
                                        <div class="progress">

                                            <div class="progress-bar" role="progressbar" style="width: <?= intval($rna['GC_content']) ?>%;"><?= intval($rna['GC_content']) ?>%</div>
                                        </div>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <th>Sequence</th>
                                    <td style="width: 200px; display: inline-block; word-wrap:break-word;"><strong>
                                        <?= $rna['seq'] ?></strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-12 col-lg-12">
                    <div class="thumbnail" style="border-left: #031430 5px solid; color: #ccc">
                        <div class="caption">
                            <h4 class="texto-azul m-2"><strong>Protein</strong></h4>
                            <table class="table table-condensed table-striped">
                                <tr>
                                    <th>Molecular weight</th>
                                    <td><?= number_format($protein['molecular_weight'],2) ?></td>
                                </tr>
                                <tr>
                                    <th>Aromaticity</th>
                                    <td><?= number_format($protein['aromaticity'],2) ?></td>
                                </tr>
                                <tr>
                                    <th>Instability</th>
                                    <td><?= number_format($protein['instability'],2) ?></td>
                                </tr>
                                <tr>
                                    <th>Isoelectric point</th>
                                    <td><?= number_format($protein['isoelectric_point'],2) ?></td>
                                </tr>
                                
                                <tr>
                                    <th>Sequence</th>
                                    <td style="width: 450px; display: inline-block; word-wrap:break-word;"><strong>
                                    <?= $protein['seq'] ?></strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="thumbnail" style="border-left: #031430 5px solid; color: #ccc">
                        <div class="caption">
                            <h4 class="texto-azul m-2"><strong>Contacts</strong></h4>
                            <table class="table table-condensed table-striped small">

                                <?php $ct = 0; foreach($contacts as $contact): ?>
                                <tr>
                                    <?php $ct++; if($ct>1): ?>
                                        <?php foreach($contact as $c): ?>
                                            <?php if(strlen($c)>15): ?>
                                                <td><?= number_format(floatval($c),2) ?>
                                            <?php else: ?>
                                                <td><?= $c ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <th>Resn_1</th><th>ResID_1</th><th>Atm_1</th><th>AtmID_1</th>
                                        <th>Resn_2</th><th>ResID_2</th><th>Atm_2</th><th>AtmID_2</th>
                                        <th>Dist</th><th>Contact</th>
                                    <?php endif; ?>

                                </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-5 col-12">
            <input id="pdb" value="</?=''?>" hidden></input>
            <input id="peptide_chain" value="</?=''?>" hidden></input>
            <input id="receptor_chain" value="</?=''?>" hidden></input>

            <div id="3DmolViewerComplex" style="min-height: 800px; margin:10px 0; width: 100%; position: relative;"></div>
        </div>
    </div>

</div>
<!-- / FIM Conteúdo personalizado -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    $(function() {
        let BASE_URL = "";
        let PDB_DIR = BASE_URL + "/data/structures/<?= $id ?>/"

        let rna_chain = "<?= substr($id, 5, 1) ?>";

        // GLOBAL VAR
        viewer = $3Dmol.createViewer("3DmolViewerComplex", {
            defaultcolors: $3Dmol.rasmolElementColors
        });
        viewer.setBackgroundColor(0xeeeeee);

        var id_complex = "<?= $id ?>";

        //codigo herdado do betagdb
        var atomcallback = function(atom, viewer) {
            if (atom.clickLabel === undefined ||
                !atom.clickLabel instanceof $3Dmol.Label) {
                atom.clickLabel = viewer.addLabel(atom.resn + " " + atom.resi + " (" + atom.elem + ")", {
                    fontSize: 10,
                    position: {
                        x: atom.x,
                        y: atom.y,
                        z: atom.z
                    },
                    backgroundColor: "black"
                });
                atom.clicked = true;
            }

            //toggle label style
            else {

                if (atom.clicked) {
                    var newstyle = atom.clickLabel.getStyle();
                    newstyle.backgroundColor = 0x66ccff;

                    viewer.setLabelStyle(atom.clickLabel, newstyle);
                    atom.clicked = !atom.clicked;
                } else {
                    viewer.removeLabel(atom.clickLabel);
                    delete atom.clickLabel;
                    atom.clicked = false;
                }

            }
        };

        $.get(PDB_DIR + id_complex + ".pdb", function(data) {
            model = viewer.addModel(data, 'pdb', {
                keepH: true
            });
            viewer.setStyle({
                chain: receptor_chain
            }, {
                cartoon: {
                    color: 'spectrum'
                }
            });

            /* colore por estrutura secundaria */
            var m = viewer.getModel();
            viewer.setStyle({}, {
                cartoon: {}
            }); /* Cartoon */

            viewer.setStyle({}, {
                cartoon: {
                    color: 'spectrum'
                }
            });


            viewer.setStyle({}, {
                cartoon: {
                    color: 'white'
                },
                line: {}
            }, {
                chain: rna_chain
            }); /* lines */


            /* Name of the atoms */
            atoms = m.selectedAtoms({});
            for (var i in atoms) {
                var atom = atoms[i];
                atom.clickable = true;
                atom.callback = atomcallback;
            }

            viewer.setStyle({
                chain: rna_chain
            }, {
                cartoon: {
                    colorscheme: 'blue'
                }
            });

            // viewer.setStyle({
            //     chain: rna_chain
            // }, {
            //     stick: {
            //         colorscheme: 'blueCarbon'
            //     }
            // });
            viewer.addSurface(
                $3Dmol.SurfaceType.VDW, {
                    'opacity': 0.6,
                    'color': 'blue'
                }, {
                    chain: rna_chain
                }
            );
            viewer.zoomTo();
            viewer.render();
        })


    });
</script>

<?= $this->endSection() ?>