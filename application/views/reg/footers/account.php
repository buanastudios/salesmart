    <!-- MODAL CHANGE PASSWORD -->
    <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title w-100" id="changePasswordModalLabel">CHANGE PASSWORD</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="changepassword_form" method="POST" action="<?php base_url()?>account/changepassword" >
                <div class="form-group has-feedback">                    
                    <label class="changepassword_old">
                      <input type="password" name="password" id="old_password" class="input form-control" size="20" placeholder="Old Password" />
                    </label>
                </div>
                <p class="forgot">
                    <span class="spaceholder">&nbsp;</span><a href="forgot">Forgot Password</a>
                </p>

                <div class="form-group has-feedback">
                    <label class="changepassword_new">
                      <input type="password" name="password" id="new_password" class="input form-control" value="" size="20" placeholder="New Password1" />
                    </label>
                </div>                

                <div class="form-group has-feedback">
                    <label class="changepassword_confirm">
                    <input type="password" name="password" id="confirm_new_password" class="input form-control" value="" size="20" placeholder="Confirm New Password" />                  
                    </label>
                </div>                

                <div class="form-group form-buttons">
                    <input type="buton" name="cancel" id="cancelPasswordButton" class="btn btn-outline-primary" data-dismiss="modal" aria-label="Cancel" value="CANCEL">
                    <input type="submit" name="submit" id="submitPasswordButton" class="btn btn-primary" value="CHANGE">
                </div>
            </form>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
    <!--- END OF MODAL CHANGE PASSWORD-->

        <!-- MODAL CHANGE PIN -->
    <div class="modal fade" id="changePINModal" tabindex="-1" role="dialog" aria-labelledby="changePINModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center">
            <h5 class="modal-title w-100" id="changePINModalLabel">CHANGE PIN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="changepin_form" method="POST" action="<?php base_url()?>account/changepin" >
                <div class="form-group has-feedback">                    
                    <label class="changepin_old">
                      <input type="password" name="password" id="old_pin" class="input form-control" size="20" placeholder="Old PIN" />
                    </label>
                </div>
                <p class="forgot">
                    <span class="spaceholder">&nbsp;</span><a href="forgot">Forgot Password</a>
                </p>

                <div class="form-group has-feedback">
                    <label class="changepin_new">
                      <input type="password" name="password" id="new_pin" class="input form-control" value="" size="20" placeholder="New PIN" />
                    </label>
                </div>                

                <div class="form-group has-feedback">
                    <label class="changepin_confirm">
                    <input type="password" name="password" id="confirm_new_pin" class="input form-control" value="" size="20" placeholder="Confirm New PIN" />                  
                    </label>
                </div>                

                <div class="form-group form-buttons">
                    <input type="buton" name="cancel" id="cancelPINButton" class="btn btn-outline-primary" data-dismiss="modal" aria-label="Cancel" value="CANCEL">
                    <input type="submit" name="submit" id="submitPINButton" class="btn btn-primary" value="CHANGE">
                </div>
            </form>
          </div>
          <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div> -->
        </div>
      </div>
    </div>
    <!--- END OF MODAL CHANGE PIN-->