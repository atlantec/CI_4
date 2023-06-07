<?= $this->extend('Manager/layout/main') ?>

<?= $this->section('title') ?>


<?= $title ?? '' ?>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>

<?= $this->endSection() ?>


<?= $this->section('content') ?>

<!-- Envio para o template principal o conteudo dessa view -->

<div class="container-fluid">
	<h1 class="mt-4"><?= $title ?? ''; ?></h1>
</div>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>

<!-- Envio para o template principal os arquivos de scripts dessa view -->

<?= $this->endSection() ?>
