<table class="table table-bordered" id="datatablesSimple">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Employee Name</th>
            <th scope="col">Employee Code</th>
            <th scope="col">From Date</th>
            <th scope="col">To Date</th>
            <th scope="col">Number of Days</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employees_leave as $employee) { ?>
            <tr>
                <th scope="row"><?php echo $employee['id'] ?></th>
                <td><?php echo $employee['employee_name'] ?></td>
                <td><?php echo $employee['employee_code'] ?></td>
                <td><?php echo $employee['fromdate'] ?></td>
                <td><?php echo $employee['todate'] ?></td>
                <td><?php echo $employee['numberofDays'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>