<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Autos lijst</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('autos/add'); ?>" class="btn btn-success btn-sm">Toevoegen</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Status</th>
						<th>Chauffeur</th>
						<th>Nummerplaat</th>
						<th>Km Stand</th>
						<th>Onderhoud</th>
						<th>Keuring</th>
						<th>Merk</th>
						<th>Type</th>
						<th>Opmerking</th>
						<th>Actie</th>
                    </tr>
                    <?php foreach($autos as $a){ ?>
                    <tr>
						<td><?php echo $a['status']; ?></td>
						<td><?php echo $a['voornaam'].' '.$a['achternaam']; ?></td>
						<td><?php echo $a['nummerplaat']; ?></td>
						<td><?php echo $a['km_stand']; ?></td>
						<td><?php echo $a['onderhoud']; ?></td>
						<td><?php echo $a['keuring']; ?></td>
						<td><?php echo $a['merk']; ?></td>
						<td><?php echo $a['type']; ?></td>
						<td><?php echo $a['a_opmerking']; ?></td>
						<td>
                            <button type="button" class="btn btn-info" onclick="window.location.href='<?php echo site_url('autos/edit/'.$a['auto_id']); ?>'">
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
        <h4 class="modal-title">Auto verwijderen</h4>
        </div>
        <div class="modal-body">
        <p>Weet u zeker dat u deze auto wilt verwijderen?</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Sluiten</button>
        <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo site_url('autos/remove/'.$a['auto_id']); ?>'">Verwijderen</button>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->