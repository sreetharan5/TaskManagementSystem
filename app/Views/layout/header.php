<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Task Management</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php if (session()->get('isLoggedIn')){ ?>
              <a class="nav-link" href="<?php echo base_url(); ?>home">Home</a>
              <a class="nav-link" href="<?php echo base_url(); ?>dashboard">Dashboard</a>
              <a class="nav-link" href="<?php echo base_url(); ?>newtask">Add New Task</a>
              <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>logout">Logout</a>
              <?php } else { ?>
                <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>login">Login</a>
              <a class="nav-link" href="<?php echo base_url(); ?>register">Register</a>

                <?php } ?>

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
</nav>