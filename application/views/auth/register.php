

        <!-- Sign Up Start -->
        <div class="container-fluid pt-4 px-4">
        <?php echo validation_errors(); ?>
            <div class="row g-4">
                <div class="col-sm-12">
                    <div class="bg-secondary rounded p-4">
                    <div>
                        <h3>Admin Register Form</h3>
                    </div>
                    <?= form_open('') ?>
                        <div class="form-floating mb-3">
                            <select class="form-select" id="role" name="role"
                                aria-label="Floating label select example">
                                <option value="">Select Role</option>
                                <?php
                                    if($role){
                                        foreach($role as $r){
                                ?>  
                                    <option <?= set_value('role')==$r->id?"selected":"" ?> value="<?= $r->id ?>"> <?= $r->role_name ?> </option>
                                <?php }} ?>
                            </select>
                            <label for="role">select role</label>
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
                            <input type="uname" value="<?= set_value('uname') ?>" class="form-control" id="uname" name="uname" placeholder="User Name">
                            <label for="text">User Name</label>
                            <b class="text-danger"><?= form_error('uname'); ?></b>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="pwd" name="pswd" placeholder="Password">
                            <label for="pwd">Password</label>
                            <b class="text-danger"><?= form_error('pswd'); ?></b>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="cpwd" name="cpswd" placeholder="Confirm Password">
                            <label for="cpwd">Confirm Password</label>
                            <b class="text-danger"><?= form_error('cpswd'); ?></b>
                        </div>
                        
                        <button type="submit" class="btn btn-primary   mb-4">Submit</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign Up End -->
