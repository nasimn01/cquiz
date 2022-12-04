<?php $this->load->view('include/header') ?>


    <!-- Sign In Start -->
    <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                <?= form_open('') ?>
                    <div class="d-flex align-items-center justify-content-between mb-3">
                        <a href="index.html" class="">
                            <h4 class="text-primary"><i class="fa fa-user-edit me-2"></i>Exam Veda</h4>
                        </a>
                        <h4>Sign In</h4>
                        <?php echo validation_errors(); ?>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" value="<?= set_value('euc') ?>" class="form-control" id="email" name="euc" placeholder="Enter Email/Username/Contact No">
                        <label for="euc">Enter Email/Username/Contact</label>
                        <b class="text-danger"><?= form_error('euc'); ?></b>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" class="form-control" id="pwd" name="pswd" placeholder="Password">
                        <label for="pwd">Password</label>
                        <b class="text-danger"><?= form_error('pswd'); ?></b>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input type="checkbox" checked value="1" name="logintype" class="form-check-input" id="logintype">
                            <label class="form-check-label" for="logintype">Login as Student</label>
                        </div>
                        <a href="">Forgot Password</a>
                    </div>
                    <?php if($this->session->flashdata('msg')){
                    echo $this->session->flashdata('msg');
                    } ?><br>
                    <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign In</button>
                    <p class="text-center mb-0">Don't have an Account? <a href="<?= base_url('stu_register') ?>">Sign Up</a></p>
                </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Sign In End -->
</div>
<?php $this->load->view('include/footer') ?>
