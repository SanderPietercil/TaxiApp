<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
            	<form>
              	<h3 class="box-title">Rit toevoegen</h3>
            </div>
            <?php echo form_open('ritten/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="klant_id" class="control-label">Klant</label>
						<div class="form-group">
							<select name="klant_id" class="form-control">
								<option id="klantNaam" required value="">selecteer klant</option>
								<?php 
								foreach($all_klanten as $klanten)
								{
									$selected = ($klanten['klant_id'] == $this->input->post('klant_id')) ? ' selected="selected"' : "";

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
									$selected = ($autos['auto_id'] == $this->input->post('auto_id')) ? ' selected="selected"' : "";

									echo '<option value="'.$autos['auto_id'].'" '.$selected.'>'.$autos['nummerplaat'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="beginlocatie" class="control-label">Beginlocatie</label>
						<div class="form-group">
							<input required type="text" name="beginlocatie" value="<?php echo $this->input->post('beginlocatie'); ?>" class="form-control" id="beginlocatie" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="eindlocatie" class="control-label">Eindlocatie</label>
						<div class="form-group">
							<input required type="text" name="eindlocatie" value="<?php echo $this->input->post('eindlocatie'); ?>" class="form-control" id="eindlocatie" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="afstand" class="control-label">Afstand</label>
						<div class="form-group">
							<input required type="text" name="afstand" value="<?php echo $this->input->post('afstand'); ?>" class="form-control" id="afstand" onchange="berekenPrijs()" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="prijs" class="control-label">Prijs</label>
						<div class="form-group">
							<input type="text" name="prijs" value="<?php echo $this->input->post('prijs'); ?>" class="form-control" id="prijs" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="datum" class="control-label">Datum</label>
						<div class="form-group">
							<input required type="date" name="datum" value="<?php echo $this->input->post('datum'); ?>" class="form-control" id="datum" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="vertrektijd" class="control-label">Vertrektijd</label>
						<div class="form-group">
							<input type="text" name="vertrektijd" value="<?php echo $this->input->post('vertrektijd'); ?>" class="form-control" id="vertrektijd" />
						</div>
					</div>
					<div class="col-md-4">
						<label for="aankomsttijd" class="control-label">Aankomsttijd</label>
						<div class="form-group">
							<input type="text" name="aankomsttijd" value="<?php echo $this->input->post('aankomsttijd'); ?>" class="form-control" id="aankomsttijd" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="mail_chauffeur" class="control-label">Stuur deze rit naar chauffeur</label>
						<div class="form-group">
							<button onclick="sendMailChauffeur(); return false" class="btn btn-default"><i class="fa fa-envelope"></i> Stuur</button>
							<!-- <input type="checkbox" name="mail_chauffeur" value="true" checked id="mail_chauffeur"> Ja -->
							<!-- <input type="radio" name="mail_chauffeur" value="false" id="mail_chauffeur"> Nee -->
						</div>
					</div>
					<div class="col-md-6">
						<label for="mail_klant" class="control-label">Stuur bevestiging naar klant</label>
						<div class="form-group">
							<button onclick="sendMailKlant(); return false" class="btn btn-default"><i class="fa fa-envelope"></i> Stuur</button>
							<!-- <input type="checkbox" name="mail_klant" value="true" checked id="mail_klant"> Ja -->
							<!-- <input type="radio" name="mail_klant" value="false" id="mail_klant"> Nee -->
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Opslaan
            	</button>
          	</div>
          	</form>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>

<script type="text/javascript">
	// Mail functie klant
	function sendMailKlant() {
    		var link = "mailto:sander.syntra@gmail.com"
             + "?cc=myCCaddress@example.com"
             + "&subject=" + escape("Bevestiging taxirit")
             + "&body=Beste klant," + "%0D%0A" + "%0D%0A" + "we sturen deze mail als bevestiging voor de taxi die u geboekt heeft."
             + "%0D%0A" + "%0D%0A" + "Hieronder staan de gegevens van de rit." + "%0D%0A" + "%0D%0A"
             + "Vertreklocatie: " + document.getElementById('beginlocatie').value + "%0D%0A"
             + "Aankomstlocatie: " + document.getElementById('eindlocatie').value + "%0D%0A"
             + "Totale afstand van de rit: " + document.getElementById('afstand').value + " km" + "%0D%0A"
             + "Totale prijs van de rit: €" + document.getElementById('prijs').value + "%0D%0A"
             + "Datum: " + document.getElementById('datum').value + "%0D%0A"
             + "Vertrektijd: " + document.getElementById('vertrektijd').value + " uur" + "%0D%0A"
             + "Aankomsttijd: " + document.getElementById('aankomsttijd').value + " uur" + "%0D%0A" + "%0D%0A"
             + "Als u nog vragen heeft mag u ons altijd contacteren." + "%0D%0A" + "%0D%0A"
             + "Vriendelijke groeten HackWorldClowns!"
    	;

    window.location.href = link;
	}

	// Mail functie chauffeur
	function sendMailChauffeur() {
    		var link = "mailto:sander.syntra@gmail.com"
             + "?cc=myCCaddress@example.com"
             + "&subject=" + escape("This is my subject")
             + "&body=Beste chauffeur," + "%0D%0A" + "%0D%0A" + "Hier zijn de gegevens voor uw volgende rit."
             + "%0D%0A" + "%0D%0A"
             + "Vertreklocatie: " + document.getElementById('beginlocatie').value + "%0D%0A"
             + "Aankomstlocatie: " + document.getElementById('eindlocatie').value + "%0D%0A"
             + "Totale afstand van de rit: " + document.getElementById('afstand').value + " km" + "%0D%0A"
             + "Totale prijs van de rit: €" + document.getElementById('prijs').value + "%0D%0A"
             + "Datum: " + document.getElementById('datum').value + "%0D%0A"
             + "Vertrektijd: " + document.getElementById('vertrektijd').value + " uur" + "%0D%0A"
             + "Aankomsttijd: " + document.getElementById('aankomsttijd').value + " uur" + "%0D%0A" + "%0D%0A"
             + "Drive safe!"
    	;

    window.location.href = link;
	}

	// Als de afstand is ingevuld, wordt de prijs berekend.
	function berekenPrijs() {
		var afstand = parseFloat(document.getElementById('afstand').value);
		var startTarief = parseFloat(<?php echo $instellingen['start_tarief'] ?>);
		var prijsPerKm = parseFloat(<?php echo $instellingen['prijs_per_km'] ?>);
		var prijs = afstand * prijsPerKm + startTarief;

		document.getElementById('prijs').value = prijs;
	}
</script>