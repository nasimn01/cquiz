      <!-- Navbar End -->


            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-6 col-xl-3 p-4">
                        <a href="<?= base_url('qchoose') ?>"><button class="btn btn-primary btnmy w-100"><h3>Exam</h3></button></a>
                    </div>
                    <div class="col-sm-6 col-xl-3 p-4">
                        <a href="<?= base_url('result') ?>"><button class="btn btn-primary btnmy w-100"><h3>Result</h3></button></a>
                    </div>
                    <div class="col-sm-6 col-xl-3 p-4">
                        <a href="<?= base_url('ques') ?>"><button class="btn btn-primary btnmy w-100"><h3>Question</h3></button></a>
                    </div>
                    <div class="col-sm-6 col-xl-3 p-4">
                        <a href=""><button class="btn btn-primary btnmy w-100"><h3>About Us</h3></button></a>
                    </div>
                  
                </div>
            </div>
            <!-- Sale & Revenue End -->


            <!-- Sales Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Student Statistic</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="worldwide-sales"></canvas>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Student Results</h6>
                                <a href="">Show All</a>
                            </div>
                            <canvas id="salse-revenue"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            