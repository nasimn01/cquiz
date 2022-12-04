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
            <div class="col-6 offset-3 text-center p-2">
              <h1 class="mb-0">Questions</h1>
            </div>
        </div>
        <form action="" method="get">
        <div class="row  mb-4">
            <div class="col-sm-3">
              <select class="form-select" id="sub" name="sub" aria-label="Floating label select example">
                  <option value="">Select Subject</option>
                  <option <?php if(isset($_GET['sub']) && $_GET['sub']=="Laravel") echo "selected" ?> value="Laravel">Laravel</option>
                  <option <?php if(isset($_GET['sub']) && $_GET['sub']=="CodeIgniter") echo "selected" ?> value="CodeIgniter">CodeIgniter</option>
                  <option <?php if(isset($_GET['sub']) && $_GET['sub']=="JavaScript") echo "selected" ?> value="JavaScript">JavaScript</option>
                  <option <?php if(isset($_GET['sub']) && $_GET['sub']=="jQuery") echo "selected" ?> value="jQuery">jQuery</option>
                  <option <?php if(isset($_GET['sub']) && $_GET['sub']=="PHP") echo "selected" ?> value="PHP">PHP</option>
                  <option <?php if(isset($_GET['sub']) && $_GET['sub']=="HTML") echo "selected" ?> value="HTML">HTML</option>
              </select>
            </div>
            <div class="col-sm-3">
              <select class="form-select" id="grade" name="grade"
                  aria-label="Floating label select example">
                  <option value="">Select Chapter</option>
                  <?php for($i=1; $i <= 18; $i++){ ?>
                      <option value="<?= $i ?>" <?php if(isset($_GET['grade']) && $_GET['grade']==$i) echo "selected" ?>>Chapter <?= $i ?></option>
                  <?php } ?>
              </select>
            </div>
            <div class="col-sm-3">
              <button type="submit" class="btn btn-primary"> Search</button>
            </div>
            <div class="col-3 text-end">
            <a href="<?= base_url() ?>ques/add" class="btn btn btn-primary float-end">Add New Question</a>
            </div>
        </div>
        </form>
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
                    <button type="button" onclick="$('.ansall').hide(); $('.ans<?= $q->id ?>').toggle()" class="btn btn-sm m-2 btn-info">Answer</button>
                    <div class="ans<?= $q->id ?> ansall text-primary p-2 hidden">
                      <?php
                          if($q->ans){
                            $ans=explode(',',$q->ans);
                            foreach($ans as $as){
                              if($as==1){
                                echo htmlspecialchars($q->option_one). " <br>";
                              }elseif($as==2){
                                echo htmlspecialchars($q->option_two). " <br>";
                              }elseif($as==3){
                                echo htmlspecialchars($q->option_three). " <br>";
                              }else{
                                echo htmlspecialchars($q->option_four). " <br>";
                              }
                            }
                          }
                      ?>
                    </div>
                    
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
