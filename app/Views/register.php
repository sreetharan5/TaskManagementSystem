<header class="bg-primary text-white text-center py-5 bg-gradient">
    <div class="container">
        <h1>Sign Up</h1>
        <p class="lead">It's quick and easy</p>
    </div>
</header>

<section>
    <form method="post" action="<?php echo base_url();?>register">
        <div class="container py-5">
            <div class="card">
                <div class="card-header bg-secondary">Register Here</div>
                <div class="card-body">
                    
                    <?php if (session()->getFlashdata('error')) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php } ?>

                    <div class="container text-start mt-2">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Please enter your full name" required>
                    </div>
                    <div class="container text-start mt-5">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" name="username" placeholder="Please enter your username" required>
                    </div>
                    <div class="container text-start mt-5">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Please enter your email" required>
                    </div>
                    <div class="container text-start mt-5">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Please enter your password" required>
                    </div>
                    <div class="container text-start mt-5">
                        <button class="btn btn-outline-dark" type="submit">Submit</button>
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