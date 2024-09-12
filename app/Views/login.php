<header class="bg-primary text-white text-center py-5 bg-gradient">
        <div class="container">
            <h1>Login</h1>
            <p class="lead">Its quick and easy</p>
        </div>
    </header>

    <section>
    <form method="post" action="<?php echo base_url();?>login">
        <div class="container py-5">
        <div class="card" >
            <div class="card-header bg-secondary">Login Here</div>
            <div class="card-body">
            <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php } ?>
        <div class="container text-start mt-2">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Please enter your username">
        </div>
        <div class="container text-start mt-5">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Please enter your password">
        </div>
        <div class="container text-start mt-5">
            <button class="btn btn-outline-dark" type="submit">Login</button>
        </div>
        </div>
        </div>
        </div>
            </form>            
    </section>
    <?php if (session()->getFlashdata('error')) { ?>
    <script>
    Swal.fire({
        icon: "error",
        title: "Oops...",
        text: "<?php echo session()->getFlashdata('error'); ?>",
    });
    </script>
<?php } ?>