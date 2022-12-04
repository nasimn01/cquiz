
<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary text-center rounded p-4">
      <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">Student</h6>
          <a href="<?= base_url() ?>users/add" class="btn btn-sm btn-primary float-end">Add New</a>
          <?php if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
          } ?>
      </div>
      <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                  <tr class="text-white">
                      <th >ID</th>
                      <th >Full Name</th>
                      <th >Contact</th>
                      <th >Email</th>
                      <th >Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                      if($users){
                          foreach($users as $u){
                  ?>
                  <tr>
                      
                      <td><?= $u->id ?></td>
                      <td><?= $u->name ?></td>
                      <td><?= $u->contact ?></td>
                      <td><?= $u->email ?></td>
                      <td>
                        <a href="<?= base_url() ?>users/edit/<?= $u->id ?>" class="btn btn-sm btn-info">Edit</a>
                        <a onclick="return confirm('Are you sure?')" href="<?= base_url() ?>users/delete/<?= $u->id ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                  </tr>
                  <?php } } ?>
              </tbody>
          </table>
      </div>
  </div>
</div>
