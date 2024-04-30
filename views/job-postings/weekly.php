<div class="p-15 text-center">
  <h1>Applications Per Week </h1>
</div>

<div class="container mt-5">    
    <table id='per_week_dt' class="table table-striped" style="width:100%">
        <thead>
            <th>Year</th>
            <th>Week</th>
            <th>Month</th>
            <th>Week Count</th>
        </thead>
        <tbody>
                <?php 
                    if (isset($weeklyReport) && !empty($weeklyReport) && sizeof($weeklyReport) > 0 ) {
                        foreach($weeklyReport as $weekReport) { ?>
                    <tr >
                        <td><?= $weekReport['posting_year'] ?></td>
                        <td><?= $weekReport['posting_week'] ?></td>
                        <td><?= $weekReport['posting_month'] ?></td>
                        <td><?= $weekReport['week_count'] ?></td>
                    </tr>
                <?php } } ?>
            </tbody>
    </table>
</div>