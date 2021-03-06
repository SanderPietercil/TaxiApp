<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Klant bewerken</h3>
            </div>
			<?php echo form_open('klanten/edit/'.$klanten['klant_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="achternaam" class="control-label">Achternaam</label>
						<div class="form-group">
							<input type="text" name="achternaam" value="<?php echo ($this->input->post('achternaam') ? $this->input->post('achternaam') : $klanten['achternaam']); ?>" class="form-control" id="achternaam" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="voornaam" class="control-label">Voornaam</label>
						<div class="form-group">
							<input type="text" name="voornaam" value="<?php echo ($this->input->post('voornaam') ? $this->input->post('voornaam') : $klanten['voornaam']); ?>" class="form-control" id="voornaam" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="straat" class="control-label">Straat</label>
						<div class="form-group">
							<input type="text" name="straat" value="<?php echo ($this->input->post('straat') ? $this->input->post('straat') : $klanten['straat']); ?>" class="form-control" id="straat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="postcode" class="control-label">Postcode</label>
						<div class="form-group">
							<input type="text" name="postcode" value="<?php echo ($this->input->post('postcode') ? $this->input->post('postcode') : $klanten['postcode']); ?>" class="form-control" id="postcode" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="plaats" class="control-label">Plaats</label>
						<div class="form-group">
							<input type="text" name="plaats" value="<?php echo ($this->input->post('plaats') ? $this->input->post('plaats') : $klanten['plaats']); ?>" class="form-control" id="plaats" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefoon" class="control-label">Telefoon</label>
						<div class="form-group">
							<input type="text" name="telefoon" value="<?php echo ($this->input->post('telefoon') ? $this->input->post('telefoon') : $klanten['telefoon']); ?>" class="form-control" id="telefoon" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="control-label">Email</label>
						<div class="form-group">
							<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $klanten['email']); ?>" class="form-control" id="email" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="k_opmerking" class="control-label">Opmerking</label>
						<div class="form-group">
							<textarea name="k_opmerking" class="form-control" id="k_opmerking"><?php echo ($this->input->post('k_opmerking') ? $this->input->post('k_opmerking') : $klanten['k_opmerking']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Opslaan
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>