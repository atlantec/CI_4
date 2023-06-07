<?= $this->extend('Manager/layout/main') ?>

<?= $this->section('title') ?>


<?= $title ?? '' ?>

<?= $this->endSection() ?>

<?= $this->section('styles') ?>
<link href="https://cdn.datatables.net/v/bs5/dt-1.13.4/r-2.4.1/datatables.min.css" rel="stylesheet" />
<?= $this->endSection() ?>


<?= $this->section('content') ?>

<!-- Envio para o template principal o conteudo dessa view -->

<div class="container-fluid pt-3">


	<div class="row">
		<div class="col-md-6">
			<div class="card shadow-lg">
				<div class="card-header">
					<h5>
						<?= $title ?? ''; ?>
					</h5>
				</div>
				<div class="card-body">
					<table class="table table-borderless table-striped nowrap dt-responsive" id="example" width="100%">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nome</th>
								<th scope="col">Slog</th>
								<th scope="col">Ações</th>

							</tr>
						</thead>
					</table>

				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="categoryModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
	aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="categoryModalLabel">Criar Categoria</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<?php echo form_open(route_to('categories.create'), ['id' => 'categories-form'], ['id' => '']) ?>
			<div class="modal-body">

				<div class="mb-3">
					<label for="name" class="form-label">Nome</label>
					<input type="text" class="form-control" name="name" id="name">
					<span class="text-danger error-text name"></span>
				</div>

				<div class="mb-3">
					<label for="parent_id" class="form-label">Categoria Pai</label>
					<span id="boxParents"></span>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Sair</button>
				<button type="submit" class="btn btn-primary btn-sm">Salvar</button>
			</div>
			<?= form_close(); ?>
		</div>
	</div>
</div>


<?= $this->endSection() ?>


<?= $this->section('scripts') ?>
<script src="https://cdn.datatables.net/v/bs5/dt-1.13.4/r-2.4.1/datatables.min.js"></script>

<?= $this->include('Manager/Categories/Scripts/_datatable_all'); ?>
<?= $this->include('Manager/Categories/Scripts/_get_category_info'); ?>

<?= $this->endSection() ?>