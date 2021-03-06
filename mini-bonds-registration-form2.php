<?php

function minibond_registration_step2() {
    ?>
    <input type="hidden" name="plugin_dir1" value="<?php echo plugins_url( 'SPLGetFullAddressStep1.php', __FILE__ ); ?>" />
    <input type="hidden" name="plugin_dir2" value="<?php echo plugins_url( 'SPLGetFullAddressStep2.php', __FILE__ ); ?>" />
    <script type="text/javascript" src="<?php echo plugins_url( 'assets/js/SPL_AJAX_Full.js', __FILE__ ); ?>"></script>
    <div class="row registration-container step2">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="row col-xs-12 col-md-6 col-lg-6">
                <h1 class="register-account-title">INVESTMENT PROCESS</h1>
            </div>
            <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 nopadding">
                <img src="<?php echo plugins_url( 'img/step2.png', __FILE__ ) ?>" alt="Registration Steps 2" class="register-steps pull-right" />
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
            <h2 class="smaller form-title" style="padding:12px 0px;">YOUR ADDRESS</h2>
            <span>Please provide us with your address so that we may electronically verify your identity.</span>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
        <input type="hidden" value="<?php echo wp_create_nonce( 'getukaddress' ); ?>" id="ukaddress_nonce" />
        <form method="post" data-parsley-validate="" role="form" novalidate="" class="step2-form">
            <input type="hidden" name="step2" value="true" />
            <div class="row">
			<div class="col-xs-12 col-md-6">
				<div class="form-group" style="height: 54px;">
					<label for="postcode">Postcode: <span class="red">*</span></label>
					<div class="controls form-inline postcodelookup">
                        <div class="col-xs-12 col-md-7 nopadding">
                            <input type="text" class="form-control col-xs-12 col-md-5" id="postcode" name="postcode" data-parsley-required="true" data-parsley-error-message="Please enter your postcode" data-parsley-errors-container="#postcodeerror" value="" style="width:160px;" />
                            <input type="button" id="sfindaddress" class="btn btn-default col-xs-12 col-md-5" onClick= "javascript:SPLGetAddressData(document.getElementById('postcode').value, 0)" value="Find Address" />
                        </div>
                        <div class="col-xs-12 col-md-5 text-left nopadding">
                            <span style="font-size:12px !important;">Please, find easiest your address<br /> with the Post Code finder</span>
                        </div>
				    </div>
				    <div id="postcodeerror"><ul class="parsley-errors-list" /></ul></div>
				</div>
                <div class="form-group" id="SPLSearchArea0">
				</div>
                <div class="form-group">
					<label for="housenumber">House Name/Number: <span class="red">*</span></label>
					<input type="text" class="form-control" id="housenumber" name="housenumber" data-parsley-required="true" data-parsley-error-message="Please enter a house number" value="" />
				</div>
				<div class="form-group">
					<label for="street">Address: <span class="red">*</span></label>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="col-xs-12 col-md-6 nopadding"><input type="text" class="form-control" id="street" name="street" data-parsley-required="true" data-parsley-error-message="Please enter a address" /></div>
                            <div class="col-xs-12 col-md-6 nopadding" style="padding-left: 10px !important;"><input type="text" class="form-control" id="street2" name="street2" /></div>
                        </div>
                    </div>
				</div>
				<div class="form-group">
					<label for="city">Town/City: <span class="red">*</span></label>
				    <input type="text" class="form-control" id="city" name="city" data-parsley-required="true" data-parsley-error-message="Please enter a town/city" value="" data-parsley-id="0316"><ul class="parsley-errors-list" id="parsley-id-0316"></ul>
				</div>
			</div>
			<div class="col-xs-12 col-md-6">
				<!--<div class="form-group">
					<label for="county">County: <span class="red">*</span></label>
					<input type="text" class="form-control" id="county" name="county" data-parsley-required="true" data-parsley-error-message="Please enter a county" value="" />
				</div>-->
				<div class="form-group">
					<label for="addresscountry" class="col-md-12 col-xs-12 nopadding">Country: <span class="red">*</span></label>
				    <select id="addresscountry" class="form-control" name="addresscountry" />
				    	<option value="Afghanistan">Afghanistan</option>
				    	<option value="Aland Islands">Aland Islands</option>
				    	<option value="Albania">Albania</option>
				    	<option value="Algeria">Algeria</option>
				    	<option value="American Samoa">American Samoa</option>
				    	<option value="Andorra">Andorra</option>
				    	<option value="Angola">Angola</option>
				    	<option value="Anguilla">Anguilla</option>
				    	<option value="Antarctica">Antarctica</option>
				    	<option value="Antigua and Barbuda">Antigua and Barbuda</option>
				    	<option value="Argentina">Argentina</option>
				    	<option value="Armenia">Armenia</option>
				    	<option value="Aruba">Aruba</option>
				    	<option value="Asia/Pacific Region">Asia/Pacific Region</option>
				    	<option value="Australia">Australia</option>
				    	<option value="Austria">Austria</option>
				    	<option value="Azerbaijan">Azerbaijan</option>
				    	<option value="Bahamas">Bahamas</option>
				    	<option value="Bahrain">Bahrain</option>
				    	<option value="Bangladesh">Bangladesh</option>
				    	<option value="Barbados">Barbados</option>
				    	<option value="Belarus">Belarus</option>
				    	<option value="Belgium">Belgium</option>
				    	<option value="Belize">Belize</option>
				    	<option value="Benin">Benin</option>
				    	<option value="Bermuda">Bermuda</option>
				    	<option value="Bhutan">Bhutan</option>
				    	<option value="Bolivia">Bolivia</option>
				    	<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
				    	<option value="Botswana">Botswana</option>
				    	<option value="Bouvet Island">Bouvet Island</option>
				    	<option value="Brazil">Brazil</option>
				    	<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
				    	<option value="Brunei Darussalam">Brunei Darussalam</option>
				    	<option value="Bulgaria">Bulgaria</option>
				    	<option value="Burkina Faso">Burkina Faso</option>
				    	<option value="Burundi">Burundi</option>
				    	<option value="Cambodia">Cambodia</option>
				    	<option value="Cameroon">Cameroon</option>
				    	<option value="Canada">Canada</option>
				    	<option value="Cape Verde">Cape Verde</option>
				    	<option value="Cayman Islands">Cayman Islands</option>
				    	<option value="Central African Republic">Central African Republic</option>
				    	<option value="Chad">Chad</option>
				    	<option value="Chile">Chile</option>
				    	<option value="China">China</option>
				    	<option value="Christmas Island">Christmas Island</option>
				    	<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
				    	<option value="Colombia">Colombia</option>
				    	<option value="Comoros">Comoros</option>
				    	<option value="Congo">Congo</option>
				    	<option value="Congo, The Democratic Republic of the">Congo, The Democratic Republic of the</option>
				    	<option value="Cook Islands">Cook Islands</option>
				    	<option value="Costa Rica">Costa Rica</option>
				    	<option value="Cote D'Ivoire">Cote D'Ivoire</option>
				    	<option value="Croatia">Croatia</option>
				    	<option value="Cuba">Cuba</option>
				    	<option value="Cyprus">Cyprus</option>
				    	<option value="Czech Republic">Czech Republic</option>
				    	<option value="Denmark">Denmark</option>
				    	<option value="Djibouti">Djibouti</option>
				    	<option value="Dominica">Dominica</option>
				    	<option value="Dominican Republic">Dominican Republic</option>
				    	<option value="Ecuador">Ecuador</option>
				    	<option value="Egypt">Egypt</option>
				    	<option value="El Salvador">El Salvador</option>
				    	<option value="Equatorial Guinea">Equatorial Guinea</option>
				    	<option value="Eritrea">Eritrea</option>
				    	<option value="Estonia">Estonia</option>
				    	<option value="Ethiopia">Ethiopia</option>
				    	<option value="Europe">Europe</option>
				    	<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
				    	<option value="Faroe Islands">Faroe Islands</option>
				    	<option value="Fiji">Fiji</option>
				    	<option value="Finland">Finland</option>
				    	<option value="France">France</option>
				    	<option value="French Guiana">French Guiana</option>
				    	<option value="French Polynesia">French Polynesia</option>
				    	<option value="French Southern Territories">French Southern Territories</option>
				    	<option value="Gabon">Gabon</option>
				    	<option value="Gambia">Gambia</option>
				    	<option value="Georgia">Georgia</option>
				    	<option value="Germany">Germany</option>
				    	<option value="Ghana">Ghana</option>
				    	<option value="Gibraltar">Gibraltar</option>
				    	<option value="Greece">Greece</option>
				    	<option value="Greenland">Greenland</option>
				    	<option value="Grenada">Grenada</option>
				    	<option value="Guadeloupe">Guadeloupe</option>
				    	<option value="Guam">Guam</option>
				    	<option value="Guatemala">Guatemala</option>
				    	<option value="Guernsey">Guernsey</option>
				    	<option value="Guinea">Guinea</option>
				    	<option value="Guinea-Bissau">Guinea-Bissau</option>
				    	<option value="Guyana">Guyana</option>
				    	<option value="Haiti">Haiti</option>
				    	<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
				    	<option value="Honduras">Honduras</option>
				    	<option value="Hong Kong">Hong Kong</option>
				    	<option value="Hungary">Hungary</option>
				    	<option value="Iceland">Iceland</option>
				    	<option value="India">India</option>
				    	<option value="Indonesia">Indonesia</option>
				    	<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
				    	<option value="Iraq">Iraq</option>
				    	<option value="Ireland">Ireland</option>
				    	<option value="Isle of Man">Isle of Man</option>
				    	<option value="Israel">Israel</option>
				    	<option value="Italy">Italy</option>
				    	<option value="Jamaica">Jamaica</option>
				    	<option value="Japan">Japan</option>
				    	<option value="Jersey">Jersey</option>
				    	<option value="Jordan">Jordan</option>
				    	<option value="Kazakhstan">Kazakhstan</option>
				    	<option value="Kenya">Kenya</option>
				    	<option value="Kiribati">Kiribati</option>
				    	<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
				    	<option value="Korea, Republic of">Korea, Republic of</option>
				    	<option value="Kuwait">Kuwait</option>
				    	<option value="Kyrgyzstan">Kyrgyzstan</option>
				    	<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
				    	<option value="Latvia">Latvia</option>
				    	<option value="Lebanon">Lebanon</option>
				    	<option value="Lesotho">Lesotho</option>
				    	<option value="Liberia">Liberia</option>
				    	<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
				    	<option value="Liechtenstein">Liechtenstein</option>
				    	<option value="Lithuania">Lithuania</option>
				    	<option value="Luxembourg">Luxembourg</option>
				    	<option value="Macau">Macau</option>
				    	<option value="Macedonia">Macedonia</option>
				    	<option value="Madagascar">Madagascar</option>
				    	<option value="Malawi">Malawi</option>
				    	<option value="Malaysia">Malaysia</option>
				    	<option value="Maldives">Maldives</option>
				    	<option value="Mali">Mali</option>
				    	<option value="Malta">Malta</option>
				    	<option value="Marshall Islands">Marshall Islands</option>
				    	<option value="Martinique">Martinique</option>
				    	<option value="Mauritania">Mauritania</option>
				    	<option value="Mauritius">Mauritius</option>
				    	<option value="Mayotte">Mayotte</option>
				    	<option value="Mexico">Mexico</option>
				    	<option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
				    	<option value="Moldova, Republic of">Moldova, Republic of</option>
				    	<option value="Monaco">Monaco</option>
				    	<option value="Mongolia">Mongolia</option>
				    	<option value="Montenegro">Montenegro</option>
				    	<option value="Montserrat">Montserrat</option>
				    	<option value="Morocco">Morocco</option>
				    	<option value="Mozambique">Mozambique</option>
				    	<option value="Myanmar">Myanmar</option>
				    	<option value="Namibia">Namibia</option>
				    	<option value="Nauru">Nauru</option>
				    	<option value="Nepal">Nepal</option>
				    	<option value="Netherlands">Netherlands</option>
				    	<option value="Netherlands Antilles">Netherlands Antilles</option>
				    	<option value="New Caledonia">New Caledonia</option>
				    	<option value="New Zealand">New Zealand</option>
				    	<option value="Nicaragua">Nicaragua</option>
				    	<option value="Niger">Niger</option>
				    	<option value="Nigeria">Nigeria</option>
				    	<option value="Niue">Niue</option>
				    	<option value="Norfolk Island">Norfolk Island</option>
				    	<option value="Northern Mariana Islands">Northern Mariana Islands</option>
				    	<option value="Norway">Norway</option>
				    	<option value="Oman">Oman</option>
				    	<option value="Pakistan">Pakistan</option>
				    	<option value="Palau">Palau</option>
				    	<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
				    	<option value="Panama">Panama</option>
				    	<option value="Papua New Guinea">Papua New Guinea</option>
				    	<option value="Paraguay">Paraguay</option>
				    	<option value="Peru">Peru</option>
				    	<option value="Philippines">Philippines</option>
				    	<option value="Poland">Poland</option>
				    	<option value="Portugal">Portugal</option>
				    	<option value="Puerto Rico">Puerto Rico</option>
				    	<option value="Qatar">Qatar</option>
				    	<option value="Qatar">Reunion</option>
				    	<option value="Romania">Romania</option>
				    	<option value="Russian Federation">Russian Federation</option>
				    	<option value="Rwanda">Rwanda</option>
				    	<option value="Saint Helena">Saint Helena</option>
				    	<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
				    	<option value="Saint Lucia">Saint Lucia</option>
				    	<option value="Saint Martin">Saint Martin</option>
				    	<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
				    	<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
				    	<option value="Samoa">Samoa</option>
				    	<option value="San Marino">San Marino</option>
				    	<option value="Sao Tome and Principe">Sao Tome and Principe</option>
				    	<option value="Satellite Provider">Satellite Provider</option>
				    	<option value="Saudi Arabia">Saudi Arabia</option>
				    	<option value="Senegal">Senegal</option>
				    	<option value="Serbia">Serbia</option>
				    	<option value="Seychelles">Seychelles</option>
				    	<option value="Sierra Leone">Sierra Leone</option>
				    	<option value="Singapore">Singapore</option>
				    	<option value="Slovakia">Slovakia</option>
				    	<option value="Slovenia">Slovenia</option>
				    	<option value="Solomon Islands">Solomon Islands</option>
				    	<option value="Somalia">Somalia</option>
				    	<option value="South Africa">South Africa</option>
				    	<option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
				    	<option value="Spain">Spain</option>
				    	<option value="Sri Lanka">Sri Lanka</option>
				    	<option value="Sudan">Sudan</option>
				    	<option value="Suriname">Suriname</option>
				    	<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
				    	<option value="Swaziland">Swaziland</option>
				    	<option value="Sweden">Sweden</option>
				    	<option value="Switzerland">Switzerland</option>
				    	<option value="Syrian Arab Republic">Syrian Arab Republic</option>
				    	<option value="Taiwan">Taiwan</option>
				    	<option value="Tajikistan">Tajikistan</option>
				    	<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
				    	<option value="Thailand">Thailand</option>
				    	<option value="Timor-Leste">Timor-Leste</option>
				    	<option value="Togo">Togo</option>
				    	<option value="Tokelau">Tokelau</option>
				    	<option value="Tonga">Tonga</option>
				    	<option value="Trinidad and Tobago">Trinidad and Tobago</option>
				    	<option value="Tunisia">Tunisia</option>
				    	<option value="Turkey">Turkey</option>
				    	<option value="Turkmenistan">Turkmenistan</option>
				    	<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
				    	<option value="Tuvalu">Tuvalu</option>
				    	<option value="Uganda">Uganda</option>
				    	<option value="Ukraine">Ukraine</option>
				    	<option value="United Arab Emirates">United Arab Emirates</option>
				    	<option value="United Kingdom" selected="selected">United Kingdom</option>
				    	<option value="United States">United States</option>
				    	<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
				    	<option value="Uruguay">Uruguay</option>
				    	<option value="Uzbekistan">Uzbekistan</option>
				    	<option value="Vanuatu">Vanuatu</option>
				    	<option value="Venezuela">Venezuela</option>
				    	<option value="Vietnam">Vietnam</option>
				    	<option value="Virgin Islands, British">Virgin Islands, British</option>
				    	<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
				    	<option value="Wallis and Futuna">Wallis and Futuna</option>
				    	<option value="Western Sahara">Western Sahara</option>
				    	<option value="Yemen">Yemen</option>
				    	<option value="Zambia">Zambia</option>
				    	<option value="Zimbabwe">Zimbabwe</option>
			    	</select><ul class="parsley-errors-list" id="parsley-id-2038"></ul>
				</div>
				<div class="form-group">
					<label for="addressyears" class="col-xs-12 col-md-12 nopadding">How Long Have You Lived Here: <span class="red">*</span></label>
                    <div class="col-xs-12 col-md-8 nopadding">
                        <div class="col-xs-12 col-md-6 nopadding">
                            <select id="addressyears" name="addressyears" class="form-control" data-parsley-required="true" data-parsley-error-message="Please enter how long you have lived at this address" data-parsley-errors-container="#timeerror">
                                <option value="">Years</option>
                                <option value="0 Years">0 Years</option>
                                <option value="1 Years">1 Year</option>
                                <option value="2 Years">2 Years</option>
                                <option value="3 Years">3 Years</option>
                                <option value="4 Years">4 Years</option>
                                <option value="5 Years">5 Years</option>
                                <option value="6 Years">6 Years</option>
                                <option value="7 Years">7 Years</option>
                                <option value="8 Years">8 Years</option>
                                <option value="9 Years">9 Years</option>
                                <option value="10 Years">10+ Years</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-md-6 nopadding">
                            <select id="addressmonths" name="addressmonths" class="form-control">
                                <option value="0 Months">0 Months</option>
                                <option value="1 Months">1 Month</option>
                                <option value="2 Months">2 Months</option>
                                <option value="3 Months">3 Months</option>
                                <option value="4 Months">4 Months</option>
                                <option value="5 Months">5 Months</option>
                                <option value="6 Months">6 Months</option>
                                <option value="7 Months">7 Months</option>
                                <option value="8 Months">8 Months</option>
                                <option value="9 Months">9 Months</option>
                                <option value="10 Months">11 Months</option>
                            </select>
                        </div>
                        <div id="timeerror"></div>
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