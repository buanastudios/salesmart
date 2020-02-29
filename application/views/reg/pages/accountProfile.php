    <section class="thecontent account">
        <div class="container">
            <div id="profile" class="row">                    
                <div class="col-12">                    
                    <h1 class="hide-on-mobile">PROFILE</h1>                    
                    <div class="profile_box">
                      <?php
                      // var_dump($list_user_info);
                       if($list_user_info){
                          foreach ($list_user_info as $row) {
                              // echo "<pre>";
                              // var_dump($row);
                              // echo "</pre>";
                      ?>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-3">
                                <div class="card p-3 hide-border-on-mobile">
                                    <img id="account_avatar" src="<?=$row->photo;?>" alt="account-profile-user" />
                                    <h6 class="hide-on-mobile text-center text-wrap text-monospace"><?=$row->full_name;?></h6>
                                    <table class="hide-on-desktop table table-borderless edit-profile">                                  
                                      <tbody>
                                        <tr>
                                          <th scope="row">Name</th>
                                          <td><span id="placeholder_profile-name" class="on-mobile"><?=$row->full_name;?></span><span><a id="edit_profile-name" class="editbutton" href="#">Edit</a></span></td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Sex</th>
                                          <td><span id="profile-sex" class="on-mobile"><?php if($row->jenis_kelamin=="1") { echo "Man"; } else{ echo "Woman"; } ?></span><span><a class="editbutton" href="#jk">Edit</a></span></td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Email</th>
                                          <td><span id="profile-email" class="on-mobile"><?=$row->email;?></span><span><a class="editbutton" href="#">Edit</a></span></td>    
                                        </tr>
                                        <tr>
                                          <th scope="row">Phone Number</th>
                                          <td><span id="profile-phone" class="on-mobile"><?=$row->no_hp;?></span><span><a class="editbutton" href="#">Edit</a></span></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <button class="btn btn-outline-primary">Change Photo</button>
                                </div>
                                <div class="card p-3">                                    
                                    <button id="changePasswordButton_forDesktop" data-toggle="modal" data-target="#changePasswordModal"  class="btn btn-outline-primary">Change Password</button>
                                    &nbsp;
                                    <button id="changePINButton_forDesktop" data-toggle="modal" data-target="#changePINModal"  class="btn btn-outline-primary">Change PIN</button>
                                </div>
                            </div>
                            <div class="hide-on-mobile col-lg-9 col-0">
                                <h4>Edit Profile</h4>                                
                                <table class="table for-desktop">                                  
                                  <tbody>
                                    <tr>
                                      <th scope="row">Name</th>
                                      <td><span id="placeholder_profile-name"><?=$row->full_name;?></span></td>
                                      <td><a id="edit_profile-name" href="#">Edit</a></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Sex</th>
                                      <td><?=($row->jenis_kelamin=="1") ? "Man"  : "Woman"; ?></td>
                                      <td><a href="#">Edit</a></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Email</th>
                                      <td><?=$row->email;?></td>  
                                      <td><a href="#">Edit</a></td>                                    
                                    </tr>
                                    <tr>
                                      <th scope="row">Phone Number</th>
                                      <td><?=$row->no_hp;?></td>        
                                      <td><a href="#">Edit</a></td>                              
                                    </tr>
                                  </tbody>
                                </table>
                            </div>                            
                        </div>
                      <?php                              
                          }
                        }else{
                      ?>
                        <div class="row">
                            <div class="col-12 col-sm-12 col-lg-3">
                                <div class="card p-3 hide-border-on-mobile">
                                    <img id="account_avatar" src="<?=base_url(IMAGEPATH);?>/salesmart/photo-sakti.png" alt="account-profile-user" />
                                    <h6 class="hide-on-mobile text-center text-wrap text-monospace">Arti Hikmatullah Perbawana Sakti Buana</h6>
                                    <table class="hide-on-desktop table table-borderless edit-profile">                                  
                                      <tbody>
                                        <tr>
                                          <th scope="row">Name</th>
                                          <td><span id="profile-name" class="on-mobile">Arti Hikmatullah Perbawana Sakti Buana</span><span><a class="editbutton" href="#">Edit</a></span></td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Sex</th>
                                          <td><span id="profile-sex" class="on-mobile">Man</span><span><a class="editbutton" href="#">Edit</a></span></td>
                                        </tr>
                                        <tr>
                                          <th scope="row">Email</th>
                                          <td><span id="profile-email" class="on-mobile">sakti@buana.studio</span><span><a class="editbutton" href="#">Edit</a></span></td>    
                                        </tr>
                                        <tr>
                                          <th scope="row">Phone Number</th>
                                          <td><span id="profile-phone" class="on-mobile">085720502217</span><span><a class="editbutton" href="#">Edit</a></span></td>
                                        </tr>
                                      </tbody>
                                    </table>
                                    <button class="btn btn-outline-primary">Change Photo</button>
                                </div>
                                <div class="card p-3">                                    
                                    <button id="changePasswordButton_forMobile" data-toggle="modal" data-target="#changePasswordModal"  class="btn btn-outline-primary">Change Password</button>
                                    &nbsp;
                                    <button id="changePINButton_forMobile" data-toggle="modal" data-target="#changePINModal"  class="btn btn-outline-primary">Change PIN</button>
                                </div>
                            </div>
                            <div class="hide-on-mobile col-lg-9 col-0">
                                <h4>Edit Profile</h4>                                
                                <table class="table">                                  
                                  <tbody>
                                    <tr>
                                      <th scope="row">Name</th>
                                      <td>Arti Hikmatullah Perbawana Sakti Buana</td>
                                      <td><a href="#">Edit</a></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Sex</th>
                                      <td>Man</td>
                                      <td><a href="#">Edit</a></td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Email</th>
                                      <td>sakti@buana.studio</td>  
                                      <td><a href="#">Edit</a></td>                                    
                                    </tr>
                                    <tr>
                                      <th scope="row">Phone Number</th>
                                      <td>085720502217</td>        
                                      <td><a href="#">Edit</a></td>                              
                                    </tr>
                                  </tbody>
                                </table>
                            </div>                            
                        </div> 
                        <?php
                          } 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>                                                                        