<div class="row">
    <div class="col-md-12">
        
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                Auto's die binnen 5.000 km op onderhoud moeten
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Status</th>
                            <th>Nummerplaat</th>
                            <th>Km Stand</th>
                            <th>Onderhoud</th>
                            <th>Keuring</th>
                            <th>Merk</th>
                            <th>Type</th>
                        </tr>
                        <?php foreach($keuring as $a){ ?>
                        <tr>
                            <td><?php echo $a['status']; ?></td>
                            <td><?php echo $a['nummerplaat']; ?></td>
                            <td><?php echo $a['km_stand']; ?></td>
                            <td><?php echo $a['onderhoud']; ?></td>
                            <td><?php echo $a['keuring']; ?></td>
                            <td><?php echo $a['merk']; ?></td>
                            <td><?php echo $a['type']; ?></td>
                        </tr>
                        <?php } ?>
                    </table>                
                </div>
                </h3>
            </div>
        </div>

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">
                Auto's die binnen 30 dagen op keuring moeten
                <div class="box-body">
                    <table class="table table-striped">
                        <tr>
                            <th>Status</th>
                            <th>Nummerplaat</th>
                            <th>Km Stand</th>
                            <th>Onderhoud</th>
                            <th>Keuring</th>
                            <th>Merk</th>
                            <th>Type</th>
                        </tr>
                        <?php foreach($keuring as $a){ ?>
                        <tr>
                            <td><?php echo $a['status']; ?></td>
                            <td><?php echo $a['nummerplaat']; ?></td>
                            <td><?php echo $a['km_stand']; ?></td>
                            <td><?php echo $a['onderhoud']; ?></td>
                            <td><?php echo $a['keuring']; ?></td>
                            <td><?php echo $a['merk']; ?></td>
                            <td><?php echo $a['type']; ?></td>
                        </tr>
                        <?php } ?>
                    </table>                
                </div>
                </h3>
            </div>
        </div>
    </div>
</div>