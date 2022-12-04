
<?php $this->load->view('include/header') ?>


<!-- Sign Up Start -->
<div class="container-fluid">
    <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="bg-secondary rounded p-0 p-sm-5 my-0 mx-3 mt-4">
                <div>
                <?php echo validation_errors(); ?>
                </div>
                <?= form_open('') ?>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h4 class="text-primary"><i class="fa fa-user-edit me-2"></i>Exam Veda</h4>
                        </a>
                        <h4>Sign Up</h4>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="text" value="<?= set_value('name') ?>" class="form-control" id="name" name="name" placeholder="Enter Name">
                        <label for="name">Enter Name</label>
                        <b class="text-danger"><?= form_error('name'); ?></b>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="email" value="<?= set_value('email') ?>" class="form-control" id="email" name="email" placeholder="Email address">
                        <label for="email">Email address</label>
                        <b class="text-danger"><?= form_error('email'); ?></b>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="contact" value="<?= set_value('contact') ?>" class="form-control" id="contact" name="contact" placeholder="Contact No">
                        <label for="text">Contact No</label>
                        <b class="text-danger"><?= form_error('contact'); ?></b>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <label for="pwd">Password</label>
                        <b class="text-danger"><?= form_error('password'); ?></b>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
                        <label for="cpwd">Confirm Password</label>
                        <b class="text-danger"><?= form_error('cpassword'); ?></b>
                    </div>
                    
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                    <p class="text-center mb-0">Already have an Account? <a href="<?= base_url('login') ?>">Sign In</a></p>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- Sign Up End -->

<?php $this->load->view('include/footer') ?>