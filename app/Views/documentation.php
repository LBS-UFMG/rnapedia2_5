<?= $this->extend('template') ?>
<?= $this->section('conteudo') ?>
<div class="container py-5 text-secondary">
    <!-- Conteúdo personalizado -->

    <h1 class="pb-5 text-dark">Documentation</h1>


    <h2>RNApedia: A Database of Protein-RNA Interactions</h2>
    <p>RNApedia collects data from the Protein Data Bank (PDB) and organizes structures into interaction pairs composed of a protein chain and an RNA chain. For each complex, RNApedia provides detailed information:</p>

    <h3>RNA Information</h3>
    <ul>
        <li><strong>RNA Type:</strong> Classification of RNA based on RNAcentral. Example: "misc_RNA" – for RNAs that do not fit other classifications.</li>
        <li><strong>Base Composition (A|C|G|U):</strong> Number of each nitrogenous base in the RNA sequence.</li>
        <li><strong>GC Content (%):</strong> Percentage of Guanine (G) and Cytosine (C), influencing stability.</li>
    </ul>

    <h3>RNA Secondary Structure</h3>
    <ul>
        <li><strong>Dot-Bracket Notation:</strong> Representation of secondary structure using symbols:
            <ul>
                <li>"(" and ")" indicate paired bases.</li>
                <li>"." represents unpaired bases.</li>
            </ul>
        </li>
        <li><strong>Free Energy (kcal/mol):</strong> Stability measure calculated by RNAfold (negative values indicate more stability).</li>
    </ul>

    <h3>Protein Properties</h3>
    <ul>
        <li><strong>Molecular Weight (Da):</strong> Based on amino acid composition.</li>
        <li><strong>Aromaticity:</strong> Fraction of aromatic amino acids (phenylalanine, tyrosine, tryptophan).</li>
        <li><strong>Instability Index:</strong> In vitro stability measure (values >40 suggest instability).</li>
        <li><strong>Isoelectric Point (pI):</strong> pH at which the protein has no net charge.</li>
    </ul>

    <h3>Binding Affinity Data</h3>
    <ul>
        <li><strong>ProNAB ID:</strong> Identification of the complex in ProNAB database.</li>
        <li><strong>Kd - ProNAB (nM):</strong> Dissociation constant measuring molecule affinity (lower values = stronger interactions).</li>
        <li><strong>ΔG - ProNAB (kcal/mol):</strong> Gibbs free energy of interaction (negative values indicate spontaneous binding).</li>
        <li><strong>Kd - PDBbind v.2020:</strong> Dissociation constant from PDBbind 2020 database.</li>
    </ul>

    <h3>Accessible Surface Area (ASA) Calculations</h3>
    <ul>
        <li><strong>All-atoms ASA Protein/RNA/Complex:</strong> Measures exposure of molecules to solvent.</li>
        <li><strong>ΔASA All-atoms:</strong> Difference between total ASA before and after complex formation.</li>
        <li><strong>BSA All-atoms:</strong> Buried surface area, related to interaction stability.</li>
        <li><strong>Non-polar ASA:</strong> Evaluates hydrophobic interaction contributions.</li>
        <li><strong>Polar ASA:</strong> Measures potential for hydrogen bonding and electrostatic interactions.</li>
    </ul>

    <h3>Secondary Structure Mapping</h3>
    <p>RNApedia provides a detailed representation of RNA secondary structure, identifying internal loops, hairpins, and multi-loops. The format follows:</p>
    <pre>[TYPE] (Start_Position, End_Position) [Paired_Bases] ; (Start_Position, End_Position) [Paired_Bases]: [Energy]</pre>
    <p><strong>Example:</strong></p>
    <pre>Interior loop (1,117) GC; (2,116) CG: -340 kcal/mol</pre>

    <h3>What is RpID?</h3>

    <p>RpID is the RNApedia entry ID. Each complex has an unique identification code composed of eight characteres (1ABC-X-X, <em>i.e.</em>, PDB_ID-RNA_CHAIN-PROTEIN_CHAIN). </p>

    <h4 class=""><strong>How to cite:</strong></h4>
    <p class="small" id="browse">BASTOS, Luana Luiza et al. A strategy for refining the calculation of contacts in protein-RNA complexes. In: Simpósio Brasileiro de Bioinformática (BSB). SBC, 2024. p. 241-246.</p>

    <!-- / FIM Conteúdo personalizado -->
</div>
<?= $this->endSection() ?>