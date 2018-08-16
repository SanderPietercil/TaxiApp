<table class="table table-striped table-bordered">
    <tr>
		<th>Start Tarief</th>
		<th>Prijs Per Km</th>
		<th>Email</th>
		<th>Actie</th>
    </tr>
	<?php foreach($instellingen as $i){ ?>
    <tr>
		<td><?php echo $i['start_tarief']; ?></td>
		<td><?php echo $i['prijs_per_km']; ?></td>
		<td><?php echo $i['email']; ?></td>
		<td>
            <a href="<?php echo site_url('instellingen/edit/'.$i['instellingen_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
        </td>
    </tr>
	<?php } ?>
</table>
