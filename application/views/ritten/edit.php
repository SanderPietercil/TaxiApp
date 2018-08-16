<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Rit bewerken</h3>
            </div>
			<?php echo form_open('ritten/edit/'.$ritten['ritten_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="klant_id" class="control-label">Klant</label>
						<div class="form-group">
							<select name="klant_id" class="form-control">
								<option value="">selecteer klant</option>
								<?php 
								foreach($all_klanten as $klanten)
								{
									$selected = ($klanten['klant_id'] == $ritten['klant_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$klanten['klant_id'].'" '.$selected.'>'.$klanten['voornaam'].' '.$klanten['achternaam'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="auto_id" class="control-label">Auto</label>
						<div class="form-group">
							<select name="auto_id" class="form-control">
								<option value="">selecteer auto</option>
								<?php 
								foreach($all_autos as $autos)
								{
									$selected = ($autos['auto_id'] == $ritten['auto_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$autos['auto_id'].'" '.$selected.'>'.$autos['nummerplaat'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="beginlocatie" class="control-label">Beginlocatie</label>
						<div class="form-group">
							<input type="text" name="beginlocatie" value="<?php echo ($this->input->post('beginlocatie') ? $this->input->post('beginlocatie') : $ritten['beginlocatie']); ?>" class="form-control" id="beginlocatie" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="eindlocatie" class="control-label">Eindlocatie</label>
						<div class="form-group">
							<input type="text" name="eindlocatie" value="<?php echo ($this->input->post('eindlocatie') ? $this->input->post('eindlocatie') : $ritten['eindlocatie']); ?>" class="form-control" id="eindlocatie" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="afstand" class="control-label">Afstand</label>
						<div class="form-group">
							<input type="text" name="afstand" value="<?php echo ($this->input->post('afstand') ? $this->input->post('afstand') : $ritten['afstand']); ?>" class="form-control" id="afstand" onchange="berekenPrijs()" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="prijs" class="control-label">Prijs</label>
						<div class="form-group">
							<input type="text" name="prijs" value="<?php echo ($this->input->post('prijs') ? $this->input->post('prijs') : $ritten['prijs']); ?>" class="form-control" id="prijs" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="datum" class="control-label">Datum</label>
						<div class="form-group">
							<input type="date" name="datum" value="<?php echo ($this->input->post('datum') ? $this->input->post('datum') : $ritten['datum']); ?>" class="form-control" id="datum" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="vertrektijd" class="control-label">Vertrektijd</label>
						<div class="form-group">
							<input type="text" name="vertrektijd" value="<?php echo ($this->input->post('vertrektijd') ? $this->input->post('vertrektijd') : $ritten['vertrektijd']); ?>" class="form-control" id="vertrektijd" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="aankomsttijd" class="control-label">Aankomsttijd</label>
						<div class="form-group">
							<input type="text" name="aankomsttijd" value="<?php echo ($this->input->post('aankomsttijd') ? $this->input->post('aankomsttijd') : $ritten['aankomsttijd']); ?>" class="form-control" id="aankomsttijd" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mail_chauffeur" class="control-label">Stuur deze rit naar chauffeur?</label>
						<div class="form-group">
							<input type="radio" name="mail_chauffeur" value="true" id="mail_chauffeur"> Ja
							<input type="radio" name="mail_chauffeur" value="false" checked id="mail_chauffeur"> Nee
						</div>
					</div>
					<div class="col-md-6">
						<label for="mail_klant" class="control-label">Stuur bevestiging naar klant?</label>
						<div class="form-group">
							<input type="radio" name="mail_klant" value="true" id="mail_klant"> Ja
							<input type="radio" name="mail_klant" value="false" checked id="mail_klant"> Nee
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

<script>
	// Als de afstand is ingevuld, wordt de prijs berekend.
	function berekenPrijs() {
		var afstand = parseFloat(document.getElementById('afstand').value);
		var startTarief = parseFloat(<?php echo $instellingen['start_tarief'] ?>);
		var prijsPerKm = parseFloat(<?php echo $instellingen['prijs_per_km'] ?>);
		var prijs = afstand * prijsPerKm + startTarief;

		document.getElementById('prijs').value = prijs;
	}
</script>