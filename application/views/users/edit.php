
<div class="container-fluid pt-4 px-4">
    <div>
        <?php if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
        } ?>
    </div>
    <div class="row g-4">
        <div class="col-sm-12 ">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-0">Update Student</h6>
                <?= form_open('') ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name:</label>
                        <input type="text" value="<?= set_value('name',$user->name); ?>" class="form-control" id="name" name="name">
                        <span class="text-danger"><?= form_error('name'); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="contact" class="form-label">Contact:</label>
                        <input type="text" value="<?= set_value('contact',$user->contact); ?>" class="form-control" id="contact" name="contact">
                        <span class="text-danger"><?= form_error('contact'); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="email"  class="form-label">Email:</label>
                        <input type="email" value="<?= set_value('email',$user->email); ?>" class="form-control" id="email" name="email">
                        <span class="text-danger"><?= form_error('email'); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="pwd"  class="form-label">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="password">
                        <span class="text-danger"><?= form_error('password'); ?></span>
                    </div>
                    <div class="mb-3">
                        <label for="cpwd"  class="form-label">Confirm Password:</label>
                        <input type="password" class="form-control" id="cpwd" name="cpassword">
                        <span class="text-danger"><?= form_error('cpassword'); ?></span>
                    </div> 
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>



