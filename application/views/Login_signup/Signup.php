<div class="container">
<?php if ($error != '') { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php } ?>
<form action="<?php echo site_url('home/signup') ?>" method="post">
    <div class="form-group">
        <label for="employee_code">Employee Code</label>
        <input type="text" class="form-control" name="employee_code" id="employee_code" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="employee_name">Employee Name</label>
        <input type="text" class="form-control" name="employee_name" id="employee_name" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="first_name">First Name</label>
        <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="last_name">last Name</label>
        <input type="text" class="form-control" name="last_name" id="last_name" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="text" class="form-control" name="phone" id="phone" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" id="address" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="country">Country</label>
        <input type="text" class="form-control" name="country" id="country" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control" name="state" id="state" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" name="city" id="city" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="zipcode">Zip</label>
        <input type="text" class="form-control" name="zipcode" id="zipcode" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>