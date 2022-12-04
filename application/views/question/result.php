
<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary text-center rounded p-4">
      <div class="d-flex align-items-center justify-content-between mb-4">
          <h3 class="mb-0">Results</h3>
          <?php if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
          } ?>
      </div>
      <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                  <tr class="text-white">
                      
                      <th >Student ID</th>
                      <th >Obtain Marks</th>
                      <th >Total Marks</th>
                      <th >Action</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                 // print_r($rs);
                      if($rs){
                          foreach($rs as $r){
                  ?>
                  <tr>
                      
                      
                      <td><?= $r->student_id ?></td>
                      <td><?= $r->obtain_marks ?></td>
                      <td><?= $r->total_marks ?></td>
                      <td>
                        <a href="<?= base_url('result_details/'.$r->id) ?>" class="btn btn-sm btn-info">Details</a>
                        
                    </td>
                  </tr>
                  <?php } } ?>
              </tbody>
          </table>
      </div>
  </div>
</div>
