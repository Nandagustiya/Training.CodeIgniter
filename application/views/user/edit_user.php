<?php $this->load->view('layout/header');?>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT DATA USER
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="create_user" method="POST" action="<?php echo site_url('user/edit_action')?>">
                            <input type="hidden" name="id_user" value="<?php if (isset($user->id_user)){echo $user->id_user;} ?>">
                            <label for="email_address">Nama</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="name" class="form-control" placeholder="Enter your email address" value="<?php if (isset($user->nama_user)){echo $user->nama_user;} ?>">
                                    </div>
                                </div>
                                <label for="email_address">Email Address</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="email" class="form-control" placeholder="Enter your email address" value="<?php if (isset($user->email)){echo $user->email;} ?>">
                                    </div>
                                </div>
                                <label for="password">Password</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="password" name="password" class="form-control" placeholder="Enter your password" value="<?php if (isset($user->password)){echo $user->password;} ?>">
                                    </div>
                                </div>


                                <button type="submit" class="btn btn-primary m-t-15 waves-effect">Edit Data</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php $this->load->view('layout/footer');?>