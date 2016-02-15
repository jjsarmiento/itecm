
    <form method="POST" action="<?=base_url()?>Main/doLogin">
        <div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Discipulus Bookshop - Login</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="loginEmail" name="loginEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" id="loginPassword" name="loginPassword" placeholder="Password">
                        </div>

                        <center>
                            <span style="font-size: 0.9em;">
                                Not registered yet?<br/>Start shopping and Register <a href="#" data-toggle="modal" data-target="#registerModal">here</a>!<br/>
                            </span>

                            <?php
                                if(@$_SESSION['errorMsg']){
                                    echo $_SESSION['errorMsg'];
                                    $this->session->sess_destroy();
                                }
                            ?>
                        </center>
                        <!--                    <p>One fine body&hellip;</p>-->
                    </div>
                    <div class="modal-footer">
                        <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
    </form>

    <?=form_open_multipart('Main/doRegister')?>
        <div class="modal fade" tabindex="-1" role="dialog" id="registerModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Discipulus Bookshop - Register</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <center><h4><i class="fa fa-user"></i> Personal Information</h4></center>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regFirstname" name="regFirstname" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regLastname" name="regLastname" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regAddress" name="regAddress" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" id="regAbout" name="regAbout" placeholder="About Me"></textarea>
                                </div>
                                <div class="form-group">
                                    Gender&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="regGender" value="MALE"> Male
                                    <input type="radio" name="regGender" value="FEMALE"> Female<br>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regBdate" name="regBdate" placeholder="Birthdate" readonly />
                                </div>

                                <div class="well">
                                    <?php
                                    if(isset($_SESSION['errorMsg'])){
                                        echo '<span style="color: red;"><i class="fa fa-warning"></i> '.$_SESSION['errorMsg'].'</span><br/><br/>';
                                        unset($_SESSION['errorMsg']);
                                    }
                                    ?>
                                    Upload Profile Picture<Br/>
                                <span style="color: #7F8C8D; font-size: 0.9em;">
                                    <span style="color:red">*</span> Image file size must be below 4mb<br/>
                                    <span style="">*</span> Recommended dimensions must be 320x150 Width = 320, Height = 150
                                </span>
                                    <br/>
                                    <br/>
                                    <input class="form-control" name="regDPic" type="file" accept="image/*" required="required"/>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <center><h4><i class="fa fa-list"></i> Account Information</h4></center>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regContact" name="regContact" placeholder="Contact Info">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="regEmail" name="regEmail" placeholder="E-mail">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="regCPassword" name="regCPassword" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="regTOS" name="regTOS" title="You must approve by the terms and conditions of service to register." required="required"> <a href="#" data-toggle="modal" data-target="#TOSModal">Terms of Service</a>
                                </div>

                                <?php $cap_code = $captcha[rand(0, 5)]; ?>
                                <div class="form-group well">
                                    <img id="captchaImg" data-code="<?=$cap_code?>" src="<?=base_url()?>assets/img/captcha/<?=$cap_code?>.gif" style="margin-bottom: 1em;">
                                    <div class="input-group">
                                    <input type="text" class="form-control" id="regCaptcha" name="regCaptcha" placeholder="Enter captcha">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button" id="captchaBtn">Check</button>
                                    </span>
                                    </div>
                                    <span style="font-size: 0.9em"><span style="color: red;">*</span><i>You must first enter the correct captcha to register</i></span><br/>
                                    <span style="font-size: 0.9em; color: red;" id="errorSpan"></span>
                                    <span style="font-size: 0.9em; color: green;" id="successSpan"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
                        <button type="submit" class="btn btn-primary" id="regBtn" disabled="disabled">Register</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

    <div class="modal fade" tabindex="-1" role="dialog" id="TOSModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Terms and Conditions of Services</h4>
                </div>
                <div class="modal-body" style="text-align: justify;">
                    Terms and Conditions


                    In General
                    Discipulus owns and operate this website.  This document governs your relationship with Discipulus. Access to and use of this website and the products and services available through this website (collectively, the "Services") are subject to the following terms, conditions and notices (the "Terms of Service"). By using the Services, you are agreeing to all of the Terms of Service, as may be updated by us from time to time. You should check this page regularly to take notice of any changes we may have made to the Terms of Service.

                    Privacy Policy
                    Our privacy policy, will set out how we will use your information. By using this Website, you consent to the processing described therein and warrant that all data provided by you is accurate. You permit that your name and contact number will solely be used with the intention of doing business with other users of the website, Discipulus.
                    Prohibitions
                    You must not misuse this Website. You will not: commit or encourage a criminal offense; transmit or distribute a virus, trojan, worm, logic bomb or any other material which is malicious, technologically harmful, in breach of confidence or in any way offensive or obscene; hack into any aspect of the Service. Breaching this provision would constitute a criminal offense and Discipulus will report any such breach to the relevant law enforcement authorities and disclose your identity to them.

                    Limitations of Liability
                    In no event shall Discipulusbe liable for direct, indirect, incidental, special, consequential or exemplary damages (even if Discipulus has been advised of the possibility of such damages), resulting from any aspect of your use of the website or the service, including without limitation whether the damages arise from use or misuse of the website or the service, from inability to use the website or the service, or the interruption, suspension, modification, alteration, or termination of the website or the service. Such limitation of liability shall also apply with respect to damages incurred by reason of other services or products received through or advertised in connection with the website or the service or any links on the website, as well as by reason of any information, opinions or advice received through or advertised in connection with the website or the service or any links on the Discipulus site. These limitations shall apply to the fullest extent permitted by law. You specifically acknowledge and agree that Discipulus shall not be liable for user submissions or the defamatory, offensive, or illegal conduct of any user or third party and that the risk of harm or damage from the foregoing rests entirely with you. The website is controlled and offered by Discipulus. Discipulus makes no representations or warranties that the website is appropriate for use in other locations. Those who access or use the website from other jurisdictions do so at their own volition and risk and are responsible for compliance with local law.

                    Featured Ads
                    Discipulus may offer a service known as "Featured Ads" where users may pay a non-refundable fee to have their ads posted prominently in the Website, thus potentially increasing an ads' visibility. In order to purchase a Featured Ad, you may be required to transmit certain information through a third party service provider, which may be governed by its own terms of use and other policies. Discipulus makes no representation or guarantee as to the safety or security of the information transmitted to any Third Party service provider, and your linking to any Third Party service is completely at your own risk, and Discipulus disclaims all liability related thereto.

                    Discipulus, as a community-based system, aims for a "self-moderated" community where members are encouraged to moderate their own posts and also allowed to help others moderate theirs. This way, it will be easier to manage a continually growing community. The members manage the community and administrators. Any member is encouraged to report anything they believe is a violation of these rules and policies.

                    Your use of Discipulus is voluntary. We encourage, but do not require, you to become a member of the site. When you access or use our services or sign up for a membership, you agree to abide by all our rules and policies (including any amendments, revisions, additions), which you affirm to have read and understood. Necessarily, this includes these Terms and Conditions.


                    Entire Agreement
                    The above Terms of Service constitute the entire agreement of the parties and supersede any and all preceding and contemporaneous agreements between you Discipulus, and the community.



                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    </form>
    </body>
</html>