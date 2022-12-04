
<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary text-center rounded p-4">
        <div class="row">
            <?php if($this->session->flashdata('msg')){
                echo $this->session->flashdata('msg');
            } ?>
      </div>
      <div class="d-flex align-items-center justify-content-between mb-4">
          <h3 class="mb-0">Our Admin</h3>
          <a href="<?= base_url() ?>register" class="btn btn-sm btn-primary float-end">Add New</a>
      </div>
      
      <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                  <tr class="text-white">
                      <th >ID</th>
                      <th >Full Name</th>
                      <th >Email</th>
                      <th >Contact</th>
                      
                  </tr>
              </thead>
              <tbody>
                  <?php
                      if($auth_user){
                          foreach($auth_user as $u){
                  ?>
                  <tr>
                      
                      <td><?= $u->id ?></td>
                      <td><?= $u->name ?></td>
                      <td><?= $u->email_address ?></td>
                      <td><?= $u->contact_no ?></td>
                      
                  </tr>
                  <?php } } ?>
              </tbody>
          </table>
      </div>
  </div>
</div>
