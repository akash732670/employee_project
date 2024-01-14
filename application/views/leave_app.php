<div class="container">
<?php if ($error != '') { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php } ?>
<form action="<?php echo site_url('employee/leave_app') ?>" method="post">
    <div class="form-group">
        <label for="employee_code">Employee Code</label>
        <input type="text" class="form-control" value="<?php echo $employee_code ?>" name="employee_code" id="employee_code" aria-describedby="emailHelp" placeholder="Enter Employee Code" readonly>
    </div>
    <div class="form-group">
        <label for="from_date">From Date</label>
        <input type="text" class="form-control datepicker" name="from_date" id="from_date" aria-describedby="emailHelp" placeholder="Enter From Date">
    </div>
    <div class="form-group">
        <label for="end_date">End Date</label>
        <input type="text" class="form-control datepicker" name="end_date" id="end_date" aria-describedby="emailHelp" placeholder="Enter End Date">
    </div>
    <div class="form-group">
        <label for="leave_type">Leave type</label>
        <select class="form-select" aria-label="Default select example" id="leave_type" name="leave_type">
            <option value="">Please select leave type</option>
            <?php foreach ($leave_type as $leave) { ?>
                <option value="<?php echo $leave['id'] ?>"><?php echo $leave['leavetype'] ?></option>
            <?php } ?>
        </select>
    </div>
    <div class="form-group">
        <label for="comment">Enter Comment</label></br>
        <textarea name="comment" id="comment" style="width: 100%; min-height: 100px" onkeyup="countChars(this);" maxlength="300"></textarea>
        <p id="charNum">(0/300) characters</p>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>