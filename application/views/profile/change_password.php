
<div class="container-fluid pt-4 px-4" >
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex   mb-4" style="text-align: left;">
            <h6 class="mb-0">Change Password</h6>
            <?php if($this->session->flashdata('msg')){
                echo $this->session->flashdata('msg');
            } ?>
        
            <div class="col-sm-8 offset-sm-2">
                        <?php $attributes = array('class' => 'form-horizontal'); ?>
						<?= form_open('',$attributes) ?>
                        
                        <div class="row mb-3">
                            <label for="opassword" class="col-sm-3 col-form-label">Old Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="opassword" id="opassword">
                                <span class="help-block"><small><?= form_error('opassword'); ?></small></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-3 col-form-label">New Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="password">
                                <span class="help-block"><small><?= form_error('password'); ?></small></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="password" class="col-sm-3 col-form-label">Confirm Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="cpassword" id="cpassword">
                                <span class="help-block"><small><?= form_error('cpassword'); ?></small></span>
                            </div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                
            </div>
        </div>
    </div>
</div>
