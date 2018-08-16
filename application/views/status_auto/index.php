<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Status auto lijst</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('status_auto/add'); ?>" class="btn btn-success btn-sm">Toevoegen</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Status</th>
						<th>Actie</th>
                    </tr>
                    <?php foreach($status_auto as $s){ ?>
                    <tr>
						<td><?php echo $s['status']; ?></td>
						<td>
                            <button type="button" class="btn btn-info" onclick="window.location.href='<?php echo site_url('status_auto/edit/'.$s['status_auto_id']); ?>'">
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
        <h4 class="modal-title">Status auto verwijderen</h4>
        </div>
        <div class="modal-body">
        <p>Weet u zeker dat u deze status auto wilt verwijderen?</p>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Sluiten</button>
        <button type="button" class="btn btn-danger" onclick="window.location.href='<?php echo site_url('status_auto/remove/'.$s['status_auto_id']); ?>'">Verwijderen</button>
        </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->