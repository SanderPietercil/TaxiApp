<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ritten lijst</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ritten/add'); ?>" class="btn btn-success btn-sm">Toevoegen</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Auto</th>
						<th>Klant</th>
						<th>Beginlocatie</th>
						<th>Eindlocatie</th>
						<th>Afstand</th>
						<th>Prijs</th>
						<th>Datum</th>
						<th>Vertrektijd</th>
						<th>Aankomsttijd</th>
						<th>Actie</th>
                    </tr>
                    <?php foreach($ritten as $r){ ?>
                    <tr>
						<td><?php echo $r['nummerplaat']; ?></td>
						<td><?php echo $r['voornaam'].' '.$r['achternaam']; ?></td>
						<td><?php echo $r['beginlocatie']; ?></td>
						<td><?php echo $r['eindlocatie']; ?></td>
						<td><?php echo $r['afstand']; ?></td>
						<td><?php echo $r['prijs']; ?></td>
						<td><?php echo $r['datum']; ?></td>
						<td><?php echo $r['vertrektijd']; ?></td>
						<td><?php echo $r['aankomsttijd']; ?></td>
						<td>
                            <button type="button" class="btn btn-info" onclick="window.location.href='<?php echo site_url('ritten/edit/'.$r['ritten_id']); ?>'">
                                <span class="fa fa-pencil"></span> Bewerk
                            </button>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-default">
                                <span class="fa fa-trash"></span> Verwijder
                            </button>
                        </td>
                    </tr>
                    <?php } ?>
                    <tr>
                        
                    </tr>
                </table>
                <?php echo $this->pagination->create_links(); ?>                
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
        <h4 class="modal-title">Rit verwijderen</h4>
        </div>
        <div class="modal-body">
        <p>Weet u zeker dat u deze rit wilt verwijderen?</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Sluiten</button>
        <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo site_url('ritten/remove/'.$r['ritten_id']); ?>'">Verwijderen</button>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->