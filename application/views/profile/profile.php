<?php
    $userdata=$this->session->get_userdata()['ud'];
?>
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-left rounded p-4">
        <div class="d-flex   mb-2" style="text-align: left;">
            <h3 class="mb-0">Profile</h3>
        </div>
        <div>
            <?php if($this->session->flashdata('msg')){
                    echo $this->session->flashdata('msg');
            } ?>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="text-center position-relative">
                    <img class="rounded-circle" src="<?= base_url('upload/profile/'.$userdata->photo) ?>" alt="" style="width: 200px; height: 220px;">
                    <h5 class="mt-2"><?= $userdata->name ?></h5>
                    <p><?= $userdata->role_name ?></p>
                </div>
            </div>
            <div class="col-md-8">
                <?php $attributes = array('class' => 'form-horizontal'); ?>
                <?= form_open_multipart('',$attributes) ?>
                    
                    <div class="row mb-3">
                        <label for="uname" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="<?= set_value('name', $userdata->name) ?>" name="name" id="uname">
                            <span class="help-block"><small><?= form_error('name'); ?></small></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email_address" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" id="email_address" name="email_address" class="form-control" value="<?= set_value('email_address)', $userdata->email_address) ?>">
                            <span class="help-block"><small><?= form_error('email_address'); ?></small></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="username" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input type="text" id="username" name="username" class="form-control" value="<?= set_value('username)', $userdata->username) ?>">
                            <span class="help-block"><small><?= form_error('username'); ?></small></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="contact_no" class="col-sm-2 col-form-label">Contact</label>
                        <div class="col-sm-10">
                            <input type="text" id="contact_no" name="contact_no" class="form-control" value="<?= set_value('contact_no)', $userdata->contact_no) ?>">
                            <span class="help-block"><small><?= form_error('contact_no'); ?></small></span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="photo" class="col-sm-2 col-form-label">Photo</label>
                        <div class="col-sm-10">
                            
                            <input type="file" id="photo" name="photo" class="form-control bg-dark" onchange="pview(this)">
                            <img src="<?= base_url('upload/profile/demo.png') ?>" id="photo_p" class="my-1" width="100px" alt="">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
	function pview(e){
		document.getElementById('photo_p').src=window.URL.createObjectURL(e.files[0]);
	}
</script>