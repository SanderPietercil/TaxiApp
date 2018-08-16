<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Auto bewerken</h3>
            </div>
			<?php echo form_open('autos/edit/'.$autos['auto_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="status_auto_id" class="control-label">Status</label>
						<div class="form-group">
							<select name="status_auto_id" class="form-control">
								<option value="">selecteer status</option>
								<?php 
								foreach($all_status_auto as $status_auto)
								{
									$selected = ($status_auto['status_auto_id'] == $autos['status_auto_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$status_auto['status_auto_id'].'" '.$selected.'>'.$status_auto['status'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="chauffeur_id" class="control-label">Chauffeur</label>
						<div class="form-group">
							<select name="chauffeur_id" class="form-control">
								<option value="">selecteer chauffeur</option>
								<?php 
								foreach($all_chauffeurs as $chauffeurs)
								{
									$selected = ($chauffeurs['chauffeur_id'] == $autos['chauffeur_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$chauffeurs['chauffeur_id'].'" '.$selected.'>'.$chauffeurs['voornaam'].' '.$chauffeurs['achternaam'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nummerplaat" class="control-label">Nummerplaat</label>
						<div class="form-group">
							<input type="text" name="nummerplaat" value="<?php echo ($this->input->post('nummerplaat') ? $this->input->post('nummerplaat') : $autos['nummerplaat']); ?>" class="form-control" id="nummerplaat" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="km_stand" class="control-label">Km Stand</label>
						<div class="form-group">
							<input type="text" name="km_stand" value="<?php echo ($this->input->post('km_stand') ? $this->input->post('km_stand') : $autos['km_stand']); ?>" class="form-control" id="km_stand" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="onderhoud" class="control-label">Onderhoud</label>
						<div class="form-group">
							<input type="text" name="onderhoud" value="<?php echo ($this->input->post('onderhoud') ? $this->input->post('onderhoud') : $autos['onderhoud']); ?>" class="form-control" id="onderhoud" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="onderhoud" class="control-label">Keuring</label>
						<div class="form-group">
							<input type="text" name="keuring" value="<?php echo ($this->input->post('keuring') ? $this->input->post('keuring') : $autos['keuring']); ?>" class="form-control" id="keuring" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="merk" class="control-label">Merk</label>
						<div class="form-group">
							<input type="text" name="merk" value="<?php echo ($this->input->post('merk') ? $this->input->post('merk') : $autos['merk']); ?>" class="form-control" id="merk" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="type" class="control-label">Type</label>
						<div class="form-group">
							<input type="text" name="type" value="<?php echo ($this->input->post('type') ? $this->input->post('type') : $autos['type']); ?>" class="form-control" id="type" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="a_opmerking" class="control-label">Opmerking</label>
						<div class="form-group">
							<textarea name="a_opmerking" class="form-control" id="a_opmerking"><?php echo ($this->input->post('a_opmerking') ? $this->input->post('a_opmerking') : $autos['a_opmerking']); ?></textarea>
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