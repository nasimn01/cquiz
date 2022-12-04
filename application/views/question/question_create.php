
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex   mb-4" style="text-align: left;">
            <h6 class="mb-0">Question</h6>
            <div>
                <?php if($this->session->flashdata('msg')){
                    echo $this->session->flashdata('msg');
                } ?>
            </div>
            <div class="col-sm-8 offset-sm-2">
                        <?php $attributes = array('class' => 'form-horizontal'); ?>
						<?= form_open('',$attributes) ?>
                        
                        <div class="row mb-3">
                            <label for="ques" class=" col-form-label">Question</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?= set_value('ques')?>" name="ques" id="ques">
                                <span class="help-block"><small><?= form_error('ques'); ?></small></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="option_one" class=" col-form-label">Opt</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?= set_value('option_one')?>" name="option_one" id="option_one">
                                <span class="help-block"><small><?= form_error('option_one'); ?></small></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="option_two" class=" col-form-label">Opt</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?= set_value('option_two')?>" name="option_two" id="option_two">
                                <span class="help-block"><small><?= form_error('option_two'); ?></small></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="option_three" class=" col-form-label">Opt</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?= set_value('option_three')?>" name="option_three" id="option_three">
                                <span class="help-block"><small><?= form_error('option_three'); ?></small></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="option_four" class=" col-form-label">Opt</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" value="<?= set_value('option_four')?>" name="option_four" id="option_four">
                                <span class="help-block"><small><?= form_error('option_four'); ?></small></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                
                            <select multiple class=" form-select" id="ans" name="ans[]"
                                    aria-label="Floating label select example">
                                    <option <?= set_value('ans')?> value="">Select Answer</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    
                                </select>
                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                
                                <select class="form-select" id="sub" name="sub"
                                    aria-label="Floating label select example">
                                    <option <?= set_value('sub')?> value="">Select Subject</option>
                                    <option value="Laravel">Laravel</option>
                                    <option value="CodeIgniter">CodeIgniter</option>
                                    <option value="JavaScript">JavaScript</option>
                                    <option value="jQuery">jQuery</option>
                                    <option value="PHP">PHP</option>
                                    <option value="HTML">HTML</option>
                                    
                                </select>
                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-10">
                                
                                <select class="form-select" id="grade" name="grade"
                                    aria-label="Floating label select example">
                                    <option value="">Select Chapter</option>
                                    <?php for($i=1; $i <= 18; $i++){ ?>
                                        <option value="<?= $i ?>" <?= set_value('grade')== $i ?"selected":"" ?>>Chapter <?= $i ?></option>
                                    <?php } ?>
                                </select>
                                
                            </div>
                        </div>
                        
                        
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                
            </div>
        </div>
    </div>
</div>