
<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary text-center rounded p-4">
    <div class="row">
        <div class="col-4 offset-4 pb-4">
            <table class="table mytable text-white">
                <tr class="text-center"> 
                    <th colspan="3"><h3>Exam Veda</h3></th>
                </tr>
                <tr>
                    <th class="text-start">Student ID:</th>
                            <td colspan="2" class="text-end pl-5">1268203</td>
                        
                </tr>
                <tr>
                    <th class="text-start">Subject:</th>
                        
                            <td colspan="2" class="text-end pl-5">CodeIgniter</td>
                        
                </tr>
                <tr>
                    <th class="text-start">Marks:</th>
                    <td colspan="2" class="text-end pl-5">20</td>
                </tr>
            </table>
        </div>
    </div>
      <div class="d-flex align-items-center justify-content-between mb-4">
          <h6 class="mb-0">Result Details</h6>
          <?php if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
          } ?>
      </div>
      <div class="table-responsive">
          <table class="table text-start align-middle table-bordered table-hover mb-0">
              <thead>	
                  <tr class="text-white">
                      
                      <th >Question</th>
                      <th >Option 1</th>
                      <th >Option 2</th>
                      <th >Option 3</th>
                      <th >Option 4</th>
                      <th >Correct Answer</th>
                      <th >Student Ans</th>
                  </tr>
              </thead>
              <tbody>
              
                  <?php
                 // print_r($rsd);
                      if($rsd){
                          foreach($rsd as $rs){
                  ?>
                  <tr>
                      
                      
                      <td><?= $rs->question ?></td>
                      <td><?= $rs->option_one ?></td>
                      <td><?= $rs->option_two ?></td>
                      <td><?= $rs->option_three ?></td>
                      <td><?= $rs->option_four ?></td>
                      <td>Option No <?= $rs->ans ?></td>
                      <td>Option No <?= $rs->stu_ans ?></td>
                  </tr>
                  <?php } } ?>
              </tbody>
          </table>
      </div>
  </div>
</div>
