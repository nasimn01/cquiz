
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-left rounded p-4">
        <?= form_open('exam_submit') ?>
            <div class="row">
                <div class="col-4 offset-4 pb-4">
                    <table class="table mytable text-white">
                        <tr class="text-center"> 
                            <th colspan="3"><h3>Exam Veda</h3></th>
                        </tr>
                        <tr>
                            <th class="text-start">Subject:</th>
                                <?php 
                                    foreach($subject as $s){
                                ?>
                                    <td colspan="2" class="text-end pl-5"><?= $s?></td>
                                <?php }?>
                        </tr>
                        <tr>
                            <th class="text-start">Marks:</th>
                            <td colspan="2" class="text-end pl-5">20</td>
                        </tr>
                        <tr>
                            <th class="text-start">Duration:</th>
                            <td colspan="2" class="text-end pl-5">20 minutes</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div >
                <input type="hidden" name="result_id" value="<?= $result_id ?>">
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
                        <label> <input class="form-check-input" type="radio" name="q_answer[<?= $q->id ?>]" value="4-<?= $q->ans ?>"> <?= htmlspecialchars($q->option_four) ?></label>
                        </div>
                <?php }} ?>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary m-3">Submit</button>
            </div>
        </form>
    </div>
</div>