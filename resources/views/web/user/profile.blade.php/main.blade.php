<div class="col-lg-6 col-md-8 col-12">
    <div class="tab-content">
        <div class="tab-pane active" id="edit-profile">
            <div class="timeline">
                <div class="tab-content-heading">
                    <h4>Profile Information</h4>
                    <a href="my_profile_dashbord.html"><i class="fas fa-angle-double-left"></i>Back to Profile</a>
                </div>
                <div class="edit-profile">
                    <form>
                        <div class="setting-dt">
                            <h4>Avatar</h4>										
                            <div class="avtar">
                                <img src="images/profile/avatar.jpg" alt="">											
                            </div>
                            <div class="upload-avatar">
                                <div class="input-heading">Upload a New Avatar*</div>	
                                <div class="input-container">																					
                                    <input class="file-upload-input" type="file" onchange="readURL(this);" accept="image/*">
                                    <button class="browse-btn">
                                      Choose File
                                    </button>
                                    <span class="file-info">Upload a file</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nameUser">Full Name*</label>
                            <input type="text" class="video-form" id="nameUser"  placeholder="John Doe">							
                        </div>
                        <div class="form-group">
                            <label for="locationUser">Where Are You Live?*</label>
                            <div class="field-input">
                                <input type="email" class="video-form" id="locationUser" placeholder="Sydney">							
                                <i class="fas fa-search"></i>
                            </div>											
                        </div>
                        <div class="form-group">
                            <label for="textareaDescription">Description*</label>
                            <textarea class="text-area" id="textareaDescription" placeholder="Description"></textarea>							
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Email Address*</label>
                            <input type="text" class="video-form" id="emailAddress" placeholder="johndoe@gmail.com">							
                        </div>
                        <div class="form-group">
                            <label for="telPhone">Phone Number*</label>
                            <input type="text" class="video-form" id="telPhone" placeholder="+02 123 456 7890">							
                        </div>
                        <div class="form-group">
                            <label for="webSite">Website*</label>
                            <input type="text" class="video-form" id="webSite" placeholder="http://ww.yoursite.com/">							
                        </div>
                        <button type="submit" class="change-btn btn-link">Save Changes</button>
                    </form>
                </div>
            </div>							
        </div>						
        <div class="tab-pane" id="notification-setting">
            <div class="profile-about">
                <div class="tab-content-heading">
                    <h4>Notification Setting</h4>
                    <a href="my_profile_dashbord.html"><i class="fas fa-angle-double-left"></i>Back to Profile</a>
                </div>
                <div class="noti-setting">
                    <div class="noti-all-st">
                        <ul>
                            <li>
                            <div class="noti-st">
                                <div class="noti-left-t">
                                    Activity on my photos
                                </div>
                                <div class="noti-right-b">
                                    <div class="custom-control custom-switch">
                                      <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                      <label class="custom-control-label" for="customSwitch1"></label>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="noti-st">
                                <div class="noti-left-t">
                                    Activity on my reviews
                                </div>
                                <div class="noti-right-b">
                                    <div class="custom-control custom-switch">
                                      <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                      <label class="custom-control-label" for="customSwitch2"></label>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="noti-st">
                                <div class="noti-left-t">
                                    Someone follows me
                                </div>
                                <div class="noti-right-b">
                                    <div class="custom-control custom-switch">
                                      <input type="checkbox" class="custom-control-input" id="customSwitch3">
                                      <label class="custom-control-label" for="customSwitch3"></label>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="noti-st">
                                <div class="noti-left-t">
                                    Update from Natto
                                </div>
                                <div class="noti-right-b">
                                    <div class="custom-control custom-switch">
                                      <input type="checkbox" class="custom-control-input" id="customSwitch4">
                                      <label class="custom-control-label" for="customSwitch4"></label>
                                    </div>
                                </div>
                            </div>
                            </li>
                            <li>
                            <div class="noti-st">
                                <div class="noti-left-t">
                                    Hide my profile from search engine
                                </div>
                                <div class="noti-right-b">
                                    <div class="custom-control custom-switch">
                                      <input type="checkbox" class="custom-control-input" id="customSwitch5">
                                      <label class="custom-control-label" for="customSwitch5"></label>
                                    </div>
                                </div>
                            </div>
                            </li>											
                        </ul>
                    </div>
                </div>
            </div>
        </div>						
        <div class="tab-pane" id="change-password">						
            <div class="timeline">
                <div class="tab-content-heading">
                    <h4>Change Password</h4>
                    <a href="my_profile_dashbord.html"><i class="fas fa-angle-double-left"></i>Back to Profile</a>
                </div>
                <div class="edit-profile">
                    <form>										
                        <div class="form-group">
                            <label for="OldPassword">Old Password*</label>
                            <input type="password" class="video-form" id="OldPassword" placeholder="Enter Old Password">							
                        </div>										
                        <div class="form-group">
                            <label for="newPassword">New Password*</label>
                            <input type="password" class="video-form" id="newPassword" placeholder="Enter New Password">							
                        </div>
                        <div class="form-group">
                            <label for="confirmPassword">Confirm Password*</label>
                            <input type="password" class="video-form" id="confirmPassword" placeholder="Enter Confirm Password">							
                        </div>
                        <button type="submit" class="change-btn btn-link">Save Password</button>
                    </form>
                </div>
            </div>							
        </div>
        <div class="tab-pane" id="delete-account">
            <div class="timeline">
                <div class="tab-content-heading">
                    <h4>Deactivate Account</h4>
                    <a href="my_profile_dashbord.html"><i class="fas fa-angle-double-left"></i>Back to Profile</a>
                </div>
                <div class="edit-profile">
                    <form>										
                        <div class="form-group">
                            <label for="yourPassword">Your Password*</label>
                            <input type="password" class="video-form" id="yourPassword" placeholder="Enter Your Password">							
                        </div>																
                        <button type="submit" class="change-btn btn-link">Deactivate Account</button>
                    </form>
                </div>
            </div>					
        </div>																													
    </div>
</div>
