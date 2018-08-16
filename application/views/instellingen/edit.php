<?php echo form_open('instellingen/edit/'.$instellingen['instellingen_id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="start_tarief" class="col-md-4 control-label">Start Tarief</label>
		<div class="col-md-8">
			<input type="text" name="start_tarief" value="<?php echo ($this->input->post('start_tarief') ? $this->input->post('start_tarief') : $instellingen['start_tarief']); ?>" class="form-control" id="start_tarief" />
		</div>
	</div>
	<div class="form-group">
		<label for="prijs_per_km" class="col-md-4 control-label">Prijs Per Km</label>
		<div class="col-md-8">
			<input type="text" name="prijs_per_km" value="<?php echo ($this->input->post('prijs_per_km') ? $this->input->post('prijs_per_km') : $instellingen['prijs_per_km']); ?>" class="form-control" id="prijs_per_km" />
		</div>
	</div>
	<div class="form-group">
		<label for="email" class="col-md-4 control-label">Email</label>
		<div class="col-md-8">
			<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $instellingen['email']); ?>" class="form-control" id="email" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>