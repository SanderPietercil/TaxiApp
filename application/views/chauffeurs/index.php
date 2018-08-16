<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Chauffeurs lijst</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('chauffeurs/add'); ?>" class="btn btn-success btn-sm">Toevoegen</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Status</th>
						<th>Achternaam</th>
						<th>Voornaam</th>
						<th>Straat</th>
						<th>Postcode</th>
						<th>Plaats</th>
						<th>Telefoon</th>
						<th>Email</th>
						<th>Opmerking</th>
						<th>Actie</th>
                    </tr>
                    <?php foreach($chauffeurs as $c){ ?>
                    <tr>
						<td><?php echo $c['status']; ?></td>
						<td><?php echo $c['achternaam']; ?></td>
						<td><?php echo $c['voornaam']; ?></td>
						<td><?php echo $c['straat']; ?></td>
						<td><?php echo $c['postcode']; ?></td>
						<td><?php echo $c['plaats']; ?></td>
						<td><?php echo $c['telefoon']; ?></td>
						<td><?php echo $c['email']; ?></td>
						<td><?php echo $c['c_opmerking']; ?></td>
						<td>
                            <button type="button" class="btn btn-info" onclick="window.location.href='<?php echo site_url('chauffeurs/edit/'.$c['chauffeur_id']); ?>'">
                                <span class="fa fa-pencil"></span> Bewerk
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
                                <span class="fa fa-trash"></span> Verwijder
                            </button>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>

<!-- Popup verschijnt ter bevestiging verwijderen record -->
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Chauffeur verwijderen</h4>
        </div>
        <div class="modal-body">
        <p>Weet u zeker dat u deze chauffeur wilt verwijderen?</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Sluiten</button>
        <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo site_url('chauffeurs/remove/'.$c['chauffeur_id']); ?>'">Verwijderen</button>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->