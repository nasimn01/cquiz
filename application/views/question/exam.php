
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-left rounded p-4">
        <?= form_open('exam_start') ?>
            <div class="row mb-4" style="text-align: left;">
                <div class="col-12">
                <h3 class="mb-2">Choose Subject and Grade to start exam</h3>
                    <?php if($this->session->flashdata('msg')){
                        echo $this->session->flashdata('msg');
                    } ?>
                </div>
                <div class="col-sm-3 pt-3">
                    
                    <h5 class="btn btn-primary mb-3">Choose Subject</h5>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="subject[]" value="CodeIgniter">
                                <label for="codeigniter" class="form-check-label">CodeIgniter</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="subject[]" value="JavaScript">
                                <label for="javascript" class="form-check-label">JavaScript</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="subject[]" value="jQuery">  
                                <label class="form-check-label" for="jq">jQuery</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="subject[]" value="PHP">
                                <label for="php" class="form-check-label">PHP</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="subject[]" value="HTML">
                                <label for="html" class="form-check-label">HTML</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 pt-3">
                    
                    <h5 class="btn btn-primary mb-3">Choose grade</h5>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="grade" value="WDPF">
                                <label for="codeigniter" class="form-check-label">WDPF</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 pt-3">
                    <div class="bg-primary">
                        <div class="p-4">
                            <h4>Important Notes</h4>
                            <ul>
                                <li class="text-white">Choose your subject and grade</li>
                                <li class="text-white">You will get 20 Question</li>
                                <li class="text-white">The duration of this exam will be 20 minutes</li>
                                <li class="text-white">After end this exam you will get your result shortly</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-5 text-end ">
                    <button type="submit" class="btn btn-outline-primary">Get Question</button>
                </div>
            </div>
        </form>
    </div>
</div>