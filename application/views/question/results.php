
<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary text-center rounded p-4">
      <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">Results</h6>
          <?php if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
          } ?>
      </div>
      <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>
                  <tr class="text-white">
                      <th >ID</th>
                      <th >Student ID</th>
                      <th >Obtain Marks</th>
                      <th >Total Marks</th>
                      
                  </tr>
              </thead>
              <tbody>
                  <?php
                      if($rs){
                          foreach($rs as $r){
                  ?>
                  <tr>
                      
                      <td><?= $r->id ?></td>
                      <td><?= $r->student_id ?></td>
                      <td><?= $r->obtain_marks ?></td>
                      <td><?= $r->total_marks ?></td>
                      
                  </tr>
                  <?php } } ?>
              </tbody>
          </table>
      </div>
  </div>
</div>
