<?= $this->extend('template') ?>
<?= $this->section('conteudo') ?>
<!-- Conteúdo personalizado -->
<div class="container py-5">

    <div class="row">
        <div class="col-md-7 col-12" style="">
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

                                            <li><a class="dropdown-item" href='<?= base_url() ?>data/structures/<?= $id ?>/<?= $id ?>_contacts.csv'>Contacts</a></li>

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

                                <a target="_blank" style='text-decoration:none' title="See 3D view" href="https://www.rcsb.org/3d-view/<?= substr($id, 0, 4) ?>">
                                    <span class="badge bg-success">Full 3D-view</span>
                                </a>

                                

                            </div>

                            <table class="table table-condensed table-striped">
                                <tr>
                                    <th class="col-4">Name</th>
                                    <td><?= $info[1] ?></td>
                                </tr>
                                <tr>
                                    <th>Description</th>
                                    <td><?= $info[2] ?></td>
                                </tr>
                                <tr>
                                    <th>PDB ID</th>
                                    <td><?= substr($id, 0, 4) ?></td>
                                </tr>
                                <tr>
                                    <th>Number of contacts protein-RNA
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Total of contacts calculated using RNApedia contact algorithm. See Contacts section for more details."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td><?= $info[5] ?></td>
                                </tr>
                                <tr>
                                    <th>Pronab ID 
                                        <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Identification of the complex in the ProNAB database contains information on protein-RNA interactions. More details at https://web.iitm.ac.in/bioinfo2/pronab"><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td><?= $rna['pronab_id'] ?></td>
                                </tr>
                                <tr>
                                    <th>K<sub>D</sub> - Pronab (nM)
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Kd - ProNAB (nM): Dissociation constant (Kd) obtained from the ProNAB database, measuring the affinity between two molecules. It is calculated as the ratio between the dissociation and association rates. Lower values indicate stronger interactions, while higher values suggest weaker binding."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td><?= $rna['kd_pronab'] ?></td>


                                </tr>
                                <tr>
                                    <th>ΔG - Pronab (Kcal/mol)
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="ΔG - ProNAB (kcal/mol): Gibbs free energy associated with protein-RNA interaction, expressed in kcal/mol. Negative values indicate spontaneous and stable interactions."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td><?= $rna['dg_pronab'] ?></td>
                                </tr>
                                <tr>
                                    <th>All-atoms ASA Complex                                   
                                        <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="All-atoms ASA Complex (Å²): Determines the ASA of the protein-RNA complex considering all atoms of both molecules together, reflecting the global exposure of the interaction surface"><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td><?= explode('.',$rna['all_attoms_asa_complex'])[0] ?></td>
                                </tr>
                                <tr>
                                    <th>ΔASA All-atoms
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="ΔASA All-atoms (Å²): Calculates the difference between the total ASA of the individual molecules (protein and RNA separately) and the ASA of the formed complex. It represents the surface area that was buried due to the interaction.
"><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td><?= explode('.',$rna['delta_asa'])[0] ?></td>
                                </tr>
                                <tr>
                                    <th>BSA All-atoms
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="BSA All-atoms (Å²): Measures the buried surface area (BSA) considering all atoms. This metric is directly related to the stability of the protein-RNA complex."><i class="bi bi-question-circle-fill"></i></a>

                                    </th>
                                    <td><?= explode('.',$rna['bsa_all_atoms'])[0] ?></td>
                                </tr>
                                <!-- <tr>
                                    <th>Non-polar ASA
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content=""><i class="bi bi-question-circle-fill"></i></a>

                                    </th>
                                    <td><//?= $rna['non_polar_asa'] ?></td>
                                </tr> -->
                                <tr>
                                    <th>Non-polar ASA Complex
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Non-polar ASA Complex (Å²): Determines the non-polar ASA of the protein-RNA complex, allowing evaluation of the impact of hydrophobic interactions at the complex interface."><i class="bi bi-question-circle-fill"></i></a>

                                    </th>
                                    <td><?= explode('.',$rna['non_polar_asa_complexo'])[0] ?></td>
                                </tr>
                                <tr>
                                    <th>ΔASA Non-polar
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="ΔASA Non-polar (Å²): Calculates the difference between the non-polar ASA before and after complex formation. It indicates which hydrophobic regions were buried in the interaction."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td><?= explode('.',$rna['delta_asa_non_polar'])[0] ?></td>
                                </tr>
                                <tr>
                                    <th>BSA Non-polar
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="BSA Non-polar (Å²): Determines the buried surface area considering only non-polar regions. This metric helps evaluate the hydrophobic contribution to the stability of the complex."><i class="bi bi-question-circle-fill"></i></a>

                                    </th>
                                    <td><?= explode('.',$rna['bsa_non_polar'])[0] ?></td>
                                </tr>
                                <tr>
                                    <th>All polar ASA Complex
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="All polar ASA Complex (Å²): Determines the polar ASA of the complex, allowing evaluation of the contribution of polar regions to the protein-RNA interaction."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td><?= explode('.',$rna['all_polar_asa_complexo'])[0] ?></td>
                                </tr>
                                <tr>
                                    <th>ΔASA All polar
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="ΔASA All polar (Å²): Measures the difference between the polar ASA before and after complex formation, indicating which polar regions were buried in the interaction."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td><?= explode('.',$rna['delta_asa_all_polar'])[0] ?></td>
                                </tr>
                                <tr>
                                    <th>BSA All polar
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="BSA All polar (Å²): Calculates the buried surface area considering only polar regions, highlighting the contribution of polar interactions to the stability of the protein-RNA complex."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td><?= explode('.',$rna['bsa_all_polar'])[0] ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="thumbnail" style="border-left: #ff2233 5px solid; color: #ccc">
                        <div class="caption">
                            <h4 class="m-2" style="color:#ff2233"><strong>RNA</strong></h4>
                            <table class="table table-condensed table-striped">
                                <tr>
                                    <th>RNA chain</th>
                                    <td><?= substr($id, 5, 1) ?></td>
                                </tr>
                                <tr>
                                    <th>RNA length</th>
                                    <td><?= $info[3] ?></td>
                                </tr>
                                <tr>
                                    <th  class="col-4">Type
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="RNA Type: Classification of RNA according to RNAcentral. Example: 'misc_RNA' (miscellaneous RNA) – a category used for RNAs that do not fit into other classifications, such as rRNA or tRNA."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td>
                                        <?= $rna['type'] ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>Base Composition (A|C|G|U)
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Base Composition (A|C|G|U): Indicates the number of each nitrogenous base in the RNA sequence."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td>
                                        <?= $rna['A'] ?>|<?= $rna['C'] ?>|<?= $rna['G'] ?>|<?= $rna['U'] ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th>GC content
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="GC Content (%): Percentage of Guanine (G) and Cytosine (C) bases in the sequence, influencing structural stability."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td>
                                        <div class="progress">

                                            <div class="progress-bar" role="progressbar" style="width: <?= intval($rna['GC_content']) ?>%;"><?= intval($rna['GC_content']) ?>%</div>
                                        </div>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <th>Dot-Bracket Notation for RNA Secondary Structure
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Dot-Bracket Notation for RNA Secondary Structure: A simplified representation of RNA secondary structure calculated by RNAfold using symbols:
'(' and ')' indicate paired bases;
'.' represents unpaired bases;
This notation helps visualize RNA structural organization, including loops and stems."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td>
                                        <?= $rna['notation'] ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Free Energy of the RNA Secondary Structure
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Free Energy of the RNA Secondary Structure (kcal/mol): Free energy of the RNA secondary structure, calculated by the RNAfold software. Negative values indicate greater structural stability."><i class="bi bi-question-circle-fill"></i></a>
                                    </th>
                                    <td>
                                        <?= str_replace("= ","",$rna['delta_g']) ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Secondary structure mapping
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Representation: Detailed information about the RNA secondary structure, identifying internal loops, hairpins, and multi-loops.
Format: Each line follows a standardized format:
[TYPE] (Start_Position, End_Position) [Paired_Bases] ; (Start_Position, End_Position) [Paired_Bases]: [Energy] –
Example:
Interior loop (1,117) GC; (2,116) CG: -340 kcal/mol
"><i class="bi bi-question-circle-fill"></i></a>

                                    </th>
                                    <td>
                                        <a target="_blank" href="<?= base_url('data/structures/'.$id.'/parsed_energy_details.txt') ?>">Download</a>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Sequence</th>
                                    <td style="width: 500px; display: inline-block; word-wrap:break-word;"><strong>
                                        <?= str_replace("\n", "<br>", $rna['seq']) ?></strong></td>
                                </tr>
                                <tr>
                                    <td colspan="2"> 
                                    <img src="<?=base_url('/data/structures/'.$id.'/rna_structure.jpg')?>" class="w-100">
                                    </td>
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
                                    <th>Protein chain</th>
                                    <td><?= substr($id, 7, 1) ?></td>
                                </tr>
                                <tr>
                                    <th>Protein chain length</th>
                                    <td><?= $info[4] ?></td>
                                </tr>
                                <tr>
                                    <th class="col-4">Molecular weight
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Molecular Weight (Da): The molecular weight of the protein in Daltons (Da) is calculated based on amino acid composition."><i class="bi bi-question-circle-fill"></i></a>

                                    </th>
                                    <td><?= number_format($protein['molecular_weight'],2) ?></td>
                                </tr>
                                <tr>
                                    <th>Aromaticity
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Aromaticity: Aromaticity index of the protein, representing the fraction of aromatic amino acids (phenylalanine, tyrosine, and tryptophan) in the sequence."><i class="bi bi-question-circle-fill"></i></a>

                                    </th>
                                    <td><?= number_format($protein['aromaticity'],2) ?></td>
                                </tr>
                                <tr>
                                    <th>Instability
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Instability Index: Indicates the in vitro stability of the protein. Values above 40 suggest an unstable protein."><i class="bi bi-question-circle-fill"></i></a>

                                    </th>
                                    <td><?= number_format($protein['instability'],2) ?></td>
                                </tr>
                                <tr>
                                    <th>Isoelectric point
                                    <a data-bs-toggle="popover" data-bs-title="Help" data-bs-trigger="hover focus" data-bs-content="Isoelectric Point (pI): The isoelectric point of the protein is the pH at which the molecule has no net charge."><i class="bi bi-question-circle-fill"></i></a>

                                    </th>
                                    <td><?= number_format($protein['isoelectric_point'],2) ?></td>
                                </tr>
                                
                                <tr>
                                    <th>Sequence</th>
                                    <td style="width: 500px; display: inline-block; word-wrap:break-word;"><strong>
                                    <?= $protein['seq'] ?></strong></td>
                                </tr>
                               
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="thumbnail" style="border-left: #52af33 5px solid; color: #ccc">
                        <div class="caption">
                            <h4 class="text-success m-2"><strong>Contacts</strong></h4>
                            <table class="table table-condensed table-striped small">

                                <?php $ct = 0; foreach($contacts as $contact): ?>
                                <tr>
                                    <?php $ct++; if($ct>1): ?>
                                        <?php foreach($contact as $c): ?>
                                            <?php if(strlen($c)>15): ?>
                                                <td><?= number_format(floatval($c),2) ?>
                                            <?php elseif((trim($c) == 'hydrogen bond')or(trim($c) == 'HB')): ?>
                                                <td><span class="badge bg-success" title="Hydrogen Bond">HB</span></td>
                                            <?php elseif(trim($c) == 'HY'): ?>
                                                <td><span class="badge bg-info" title="Hydrophobic">HY</span></td>
                                            <?php else: ?>
                                                <td><?= $c ?>
                                            <?php endif; ?>
                                        <?php endforeach; ?>
                                    <?php else: ?>
                                        <th>Chain <label class="badge bg-success">1</label></th>
                                        <th>Res <label class="badge bg-success">1</label></th>
                                        <th>ResName <label class="badge bg-success">1</label></th>
                                        <th>Atom <label class="badge bg-success">1</label></th>
                                        <th>Chain <label class="badge bg-danger">2</label></th>
                                        <th>Res <label class="badge bg-danger">2</label></th>
                                        <th>ResName <label class="badge bg-danger">2</label></th>
                                        <th>Atom <label class="badge bg-danger">2</label></th>
                                        <th>Distance</th>
                                        <th>Contact</th>
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
            <div id="3DmolViewerComplex" style="min-height: 800px; margin:10px 0; width: 100%; position: sticky; top:0;"></div>
        </div>
    </div>

</div>
<!-- / FIM Conteúdo personalizado -->
<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script>
    $(function() {
        // habilita popover
        const popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
        popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl);
        });


        let BASE_URL = "<?= base_url() ?>";
        let PDB_DIR = BASE_URL + "/data/structures/<?= $id ?>/"

        let rna_chain = "<?= substr($id, 5, 1) ?>";
        let protein_chain = "<?= substr($id, 7, 1) ?>";

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

            viewer.addSurface(
                $3Dmol.SurfaceType.VDW, {
                    'opacity': 0.6,
                    'color': 'white'
                }, {
                    chain: protein_chain
                }
            );


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