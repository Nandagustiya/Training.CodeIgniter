<?php $this->load->view('layout/header');?>
           <!-- Basic Examples -->
           <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                BASIC EXAMPLE
                            </h2>

                            <div class="align-right">
                                <a href="<?php echo site_url("user/create_user")?>" class="btn btn-primary waves-effect">
                                <i class="material-icons">person_add</i>
                                <span>Tambah User</span>
                                </a>
                            </div>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php
                                            foreach ($users as $key=>$value){
                                                ?>
                                                <tr>
                                                    <td><?php echo $key+1;?></td>
                                                    <td><?php echo $value->nama_user;?></td>
                                                    <td><?php echo $value->email;?></td>
                                                    <td><?php echo $value->password;?></td>
                                                    <td>
                                                    <a href="<?php echo site_url('user/delete/'.$value->id_user)?>"
                                                    type="button" class="btn bg-red btn-circle waves-effect-circle"> 
                                                        <i class="material-icons">delete</i>
                                                    </a>    
                                                    <a href="<?php echo site_url('user/edit/'.$value->id_user)?>"
                                                        type="button" class="btn bg-red btn-circle waves-effect-circle"> 
                                                        <i class="material-icons">mode_edit</i>
                                                    </a>
                                                    </td>
                                                </tr>
                                                <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <?php $this->load->view('layout/footer');?>
            <script type="text/javascript">
                $(function(){
                    $('.js-basic-example').DataTable({
                        responsive:true
                    });
                });
            </script>
