<!-- modelo para criação de views: copie este arquivo e apague os comentários -->
<?= $this->extend('template') ?>

<?= $this->section('scripts') ?>
<!-- adicione links para scripts aqui -->
<?= $this->endSection() ?>

<?= $this->section('conteudo') ?>

<div class="container col-xxl-10 px-2 py-0">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-4">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?= base_url('/img/home.png') ?>" class="d-block mx-lg-auto img-fluid" width="450" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Welcome to RNApedia</h1>
            <p class="lead"><b>RNApedia</b> is an innovative database designed to store and manage three-dimensional (3D) structures of protein-RNA complexes. RNApedia offer a comprehensive platform for researchers to access, share, and analyze 3D structural data, facilitating advancements in molecular biology, bioinformatics, and related fields.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="<?= base_url('/explore') ?>" class="btn btn-primary btn-lg px-4 me-md-2 azul">Explore</a>
                <a href="<?= base_url('/documentation') ?>" class="btn btn-outline-secondary btn-lg px-4">Documentation</a>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-12">
            <div class="alert alert-light shadow my-4 " style="border-left: #031430 5px solid">
                <div class="caption">
                    <div class="row">
                        <div class="col-md-12 p-4">
                            <h4 class=""><strong>How to cite:</strong></h4>
                            <p class="small" id="browse">Bastos et al. RNApedia. Software. Laboratory of Bioinformatics and Systems. Universidade Federal de Minas Gerais. 2024.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row bg-light mt-5 px-2" id="explore">

</div>

<?= $this->endSection() ?>