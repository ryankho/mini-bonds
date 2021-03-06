<?php

function minibond_registration_step3() {
    ?>
    <div class="row registration-container step3">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="row col-xs-12 col-md-6 col-lg-6">
                <h1 class="register-account-title">INVESTMENT PROCESS</h1>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 nopadding">
                <img src="<?php echo plugins_url( 'img/step3.png', __FILE__ ) ?>" alt="Registration Steps 3" class="register-steps pull-right" />
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
            <h2 class="smaller form-title" style="padding:12px 0px;">ACCOUNT SECURITY</h2>
            <span>We'll ask for this information every time you sign in, to be sure it's you.</span>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
            <form method="post" data-parsley-validate="" role="form" novalidate="" class="step3-form">
                <input type="hidden" name="step3" value="true" />
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="password">Password: <span class="red">*</span></label>
                            <input type="password" class="form-control" id="password" name="password" value="" data-parsley-minlength="6" data-parsley-pattern="^(?=.*[A-Z])(?=.*[a-z])(?=.*\d).*$" data-parsley-error-message="Your password must: <br>
                            Be atleast 6 characters<br>
                            Contain upper and lowercase characters<br>
                            Contain characters and numbers" required="" maxlength="150" />
                        </div>
                        <div class="form-group">
                            <label for="passwordconfirm">Confirm Password: <span class="red">*</span></label>
                            <input type="password" class="form-control" id="passwordconfirm" size="2" value="" name="passwordconfirm" data-parsley-equalto="#password" data-parsley-error-message="Passwords do not match" required="" maxlength="150" />
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="form-group">
                            <label for="securityquestion">Security Question: <span class="red">*</span></label>
                            <input type="text" class="form-control" id="securityquestion" name="securityquestion" value="" data-parsley-required="true" data-parsley-error-message="Please enter a security question" maxlength="250" />
                        </div>
                        <div class="form-group">
                            <label for="securityanswer">Security Answer: <span class="red">*</span></label>
                            <input type="text" class="form-control" id="securityanswer" name="securityanswer" value="" data-parsley-required="true" data-parsley-error-message="Please enter an answer to your security question" maxlength="250" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6 agreeterms">
                        <label class="smaller" style="padding:12px 0px;">CUSTOMER AGREEMENT</label><br />
                        <div class="col-xs-12 col-md-12" style="padding:20px 0;">
                            <div class="col-xs-12 col-md-12 nopadding" style="height: 25px;">
                                <input type="checkbox" id="agreelender" data-parsley-required="true" data-parsley-error-message="Please agree to the terms of the Lender Agreement" data-parsley-errors-container="#agreelendererror" data-parsley-multiple="agreelender" /> I confirm that I agree to the <a style="color: #0f3269 !important;" href="#" target="_blank">Lender Agreement</a> <span class="red">*</span>.
                                <div id="agreelendererror"></div>
                            </div>
                            <div class="col-xs-12 col-md-12 nopadding">
                                <input type="checkbox" id="agreeother" data-parsley-required="true" data-parsley-error-message="Please agree to the Privacy Policy, Website Terms of Use" data-parsley-errors-container="#agreeothererror" data-parsley-multiple="agreeother" /> I confirm that I have read the <a style="color: #0f3269 !important;" href="#" target="_blank">Privacy Policy</a>, <a style="color: #0f3269 !important;" href="#" target="_blank">Website Terms of Use</a> and <a style="color: #0f3269 !important;" href="#" target="_blank">Cookie Policy</a>. <span class="red">*</span>
                                <div id="agreeothererror"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 financiainformation">
                        <label class="smaller" style="padding:12px 0px;">FINANCIAL INFORMATION</label><br />
                        <span>We are required to understand your financial situation for the purposes of financial crime prevention.</span>
                        <div class="col-xs-12 col-md-12" style="padding:20px 0;">
                            <div class="col-xs-12 col-md-6" style="padding:0;">
                                <span>Please confirm your approximate net worth</span>
                                <span style="display: block; font-size: 12px;">(excluding your primary residence) <span class="red">*</span></span>
                            </div>
                            <div class="col-xs-12 col-md-6" style="padding:0;">
                                <select name="networth" class="form-control" id="networth" data-parsley-required="true" data-parsley-error-message="Please select a valid approximate net worth" data-parsley-errors-container="#networtherror" style="display: none;">
                                    <option value="">Select</option>
                                    <option value="Under &pound;35,000">Under &pound;35,000</option>
                                    <option value="&pound;35,000 - &pound;100,000">&pound;35,000 - &pound;100,000</option>
                                    <option value="&pound;100,000 - &pound;250,000">&pound;100,000 - &pound;250,000</option>
                                    <option value="&pound;250,000 - &pound;500,000">&pound;250,000 - &pound;500,000</option>
                                    <option value="&pound;500,000 +">&pound;500,000 +</option>
                                </select>
                                <div id="networtherror"></div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-12" style="padding:0;">
                            <div class="col-xs-12 col-md-6" style="padding:0;">
                                <span>Please confirm the source of the funds that</span>
                                <span style="display: block;">you wish to invest <span class="red">*</span></span>
                            </div>
                            <div class="col-xs-12 col-md-6" style="padding:0;">
                                <select name="fundsource" class="form-control" id="fundsource" data-parsley-required="true" data-parsley-error-message="Please select a valid fund source" data-parsley-errors-container="#fundsourceerror" />
                                    <option value="">Select</option>
                                    <option value="Savings from employment income" displayother="0">Savings from employment income</option>
                                    <option value="Profits from your business" displayother="0">Profits from your business</option>
                                    <option value="Retirement income" displayother="0">Retirement income</option>
                                    <option value="Pension fund encashment" displayother="0">Pension fund encashment</option>
                                    <option value="Maturing investments / sale of investments" displayother="0">Maturing investments / sale of investments</option>
                                    <option value="Fixed deposit savings" displayother="0">Fixed deposit savings</option>
                                    <option value="Property sale" displayother="0">Property sale</option>
                                    <option value="Company sale or sale of an interest in company" displayother="0">Company sale or sale of an interest in company </option>
                                    <option value="Inheritance" displayother="0">Inheritance</option>
                                    <option value="Loan" displayother="0">Loan</option>
                                    <option value="Divorce settlement" displayother="0">Divorce settlement</option>
                                    <option value="Gift" displayother="0">Gift</option>
                                    <option value="Other income sources (please state)" displayother="1">Other income sources (please state)</option>
                                </select>
                                <div id="fundsourceerror"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-success continue" value="CONFIRM" />
                </form>
        </div>
        <div class="col-xs-12 col-md-12 bottom-tel">
            <div class="col-xs-1 col-md-1">
                <img src="<?php echo plugins_url( 'img/icon_call_us.png', __FILE__ ) ?>" alt="Telephone Number" class="pull-left" />
            </div>
            <div class="col-xs-11 col-md-11">
                <h2>If you have any problem please feel free to call us <a href="tel:03456076001" style="color: #0f3269 !important;">0345 607 6001</a></h2>
                <span>Monday - Friday 07:30-21:00 - Saturday 09:00-15:00</span>
            </div>
        </div>
    </div>
    <?php
}