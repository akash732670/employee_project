<head>
  <title>Project codeigniter</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/style.css' ?>">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="<?php echo base_url()  ?>">HEad</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <?php
          if ($this->session->userdata('id') != '') {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/leave') ?>">Enter employee on leave</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('/logout') ?>">Logout</a>
            </li>
            <?php } else {
            if ($islogin == '1') {
            ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/signup') ?>">Signup</a>
              </li>
            <?php } else { ?>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/login') ?>">Login</a>
              </li>
            <?php } ?>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </header>