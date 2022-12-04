<?php
    $userdata=$this->session->get_userdata()['ud'];
?>
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="<?= base_url('dashboard') ?>" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>Exam Veda</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?= base_url('upload/profile/'.$userdata->photo) ?>" alt="" style="width: 40px; height: 45px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0"><?= $userdata->name ?></h6>
                        <span><?= $userdata->role_name ?></span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?= base_url('dashboard') ?>" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?= base_url('user') ?>" class="dropdown-item">Admin list</a>
                            <a href="<?= base_url('users') ?>" class="dropdown-item">Student list</a>
                            
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-question me-2"></i>Questions</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?= base_url('queslist') ?>" class="dropdown-item">Question list</a>
                            <a href="<?= base_url('results') ?>" class="dropdown-item">Results</a>
                            
                            
                        </div>
                    </div>
                  
                </div>
            </nav>
        </div>