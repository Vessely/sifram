<div class="container w-50">
	<h1 class="text-center">Ejemplo de formulario +  tabla en tiempo real.</h1>
	<hr>
	<div class="container-fluid colored m-30 mb-30">
		<input type="text" class="form-control m-10" placeholder="Nombre del Equipo" name="txt_name">
		<input type="text" class="form-control m-10" placeholder="Dirección IP" name="txt_ip">
		<button class="btn btn-primary btn-lg m-10 float-right" name="send_data" disabled>Guardar</button>
		<button class="btn btn-secondary btn-lg m-10 float-right" name="check_data">Verificar</button>
	</div>
	<hr>
	<div class="container-fluid white">
		<div class="container-fluid colored">
		<div class="col-md-4">
			<h3 class="text-center">IP</h3>
		</div>
		<div class="col-md-4">
			<h3 class="text-center">PC</h3>
		</div>
		<div class="col-md-4">
			<h3 class="text-center">Fecha</h3>
		</div>
		</div>
		<hr>
		<div class="container-fluid m-10 data-table"></div>	
	</div>
	
</div>
<script type="text/javascript" src="<?php echo pc_table_js;?>"></script>
