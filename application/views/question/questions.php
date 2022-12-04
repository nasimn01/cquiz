<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<div class="container-fluid pt-4 px-4">
  <div class="bg-secondary rounded p-4">
      <div class="row">
        <div>
          <?php if($this->session->flashdata('msg')){
            echo $this->session->flashdata('msg');
          } ?>
        </div>
        <div class="row  mb-4">
            <div class="col-6 offset-3 text-center">
              <h3 class="mb-0">Questions</h3>
            </div>
        </div>
        <div class="row  mb-4">
            <div class="col-3 text-start">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Subject
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <input class="form-control" id="myInput" type="text" placeholder="Search..">
                  <li><a href="#">HTML</a></li>
                  <li><a href="#">CSS</a></li>
                  <li><a href="#">JavaScript</a></li>
                  <li><a href="#">jQuery</a></li>
                  <li><a href="#">Bootstrap</a></li>
                  <li><a href="#">Laravel</a></li>
                </ul>
              </div>
            </div>
            <div class="col-3 text-start">
              <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Choose Grade
                <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <input class="form-control" id="myInput" type="text" placeholder="Search..">
                  <li><a href="#">WDPF</a></li>
                  <li><a href="#">GAVE</a></li>
                  
                </ul>
              </div>
            </div>
            
        </div>
        
        <div >
          
          <?php
              if($questions){
                  foreach($questions as $i=>$q){
          ?>      
                  <div class="mt-3">
                      <h6><?= ++$i ?>) <?= htmlspecialchars($q->question) ?></h6>
                  </div>
                  <div class=" p-4 pt-2 pb-0">
                    <label> <input class="form-check-input" type="radio" name="q_answer[<?= $q->id ?>]" value="1-<?= $q->ans ?>"> <?= htmlspecialchars($q->option_one) ?></label><br>
                    <label> <input class="form-check-input" type="radio" name="q_answer[<?= $q->id ?>]" value="2-<?= $q->ans ?>"> <?= htmlspecialchars($q->option_two) ?></label><br>
                    <label> <input class="form-check-input" type="radio" name="q_answer[<?= $q->id ?>]" value="3-<?= $q->ans ?>"> <?= htmlspecialchars($q->option_three) ?></label><br>
                    <label> <input class="form-check-input" type="radio" name="q_answer[<?= $q->id ?>]" value="4-<?= $q->ans ?>"> <?= htmlspecialchars($q->option_four) ?></label><br>
                    <button type="button" class="btn btn-sm m-2 btn-info">Answer</button>
                  </div>
                  
          <?php }} ?>
            
        </div>
        <div class="row m-4">
          <div class="col-6 offset-4">
            <nav aria-label="Page navigation">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
  </div>
</div>
