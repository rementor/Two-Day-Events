<?php
$exitpop = 'false';
include('../../eventvars.php');
include('../../header.php');
?>
  	<div id="main">
		<section class="step1">
			<p align="center">
			<img src="img/productshot.png" width="359" height="311" alt="Chris Bowser eBay Home Study Kit">
			</p>
			<script type="text/javascript" src="https://m160.infusionsoft.com/js/sink_jq.jsp?b=1.25.6.37"></script>
			<script type="text/javascript" src="https://m160.infusionsoft.com/js/sink_js.jsp?b=1.25.6.37"></script>
			<form id="orderForm" action="https://m160.infusionsoft.com/AddForms/processFormSecure.jsp" method='Post' onsubmit="var form = document.forms[0];
			var resolution = document.createElement('input');
			resolution.setAttribute('id', 'screenResolution');
			resolution.setAttribute('type', 'hidden');
			resolution.setAttribute('name', 'screenResolution');
			var resolutionString = screen.width + 'x' + screen.height;
			resolution.setAttribute('value', resolutionString);
			form.appendChild(resolution);
			var pluginString = '';
			for (var i = 0; i &lt; navigator.plugins.length; i++) {
			    pluginString += navigator.plugins[i].name + ',';
			}
			pluginString = pluginString.substring(0, pluginString.lastIndexOf(','));
			var plugins = document.createElement('input');
			plugins.setAttribute('id', 'pluginList');
			plugins.setAttribute('type', 'hidden');
			plugins.setAttribute('name', 'pluginList');
			plugins.setAttribute('value', pluginString);
			form.appendChild(plugins);
			var java = navigator.javaEnabled();
			var javaEnabled = document.createElement('input');
			javaEnabled.setAttribute('id', 'javaEnabled');
			javaEnabled.setAttribute('type', 'hidden');
			javaEnabled.setAttribute('name', 'javaEnabled');
			javaEnabled.setAttribute('value', java);
			form.appendChild(javaEnabled);">
			<input name="infusion_xid" value="cea87ac07768fd774753d1d486eb58a1" type="hidden" id="infusion_xid" />
			<input name="infusion_type" value="CustomFormSale" type="hidden" id="infusion_type" />
			<input name="infusion_name" value="Teleseminar 12/20/11 - Chris Bowser" type="hidden" id="infusion_name" />
			<input name="CAttempt" type="hidden" id="CAttempt" />
			<input type="hidden" value="<?php echo $promoCode;?>" id="PromoCode" name="PromoCode" />
			<input class='sale-text' type='hidden' name="infusion_custom_url" value='<?php echo $path;?>'>
			<div class="formsection">		
			<table cellpadding="5" class='sale-table' align="center">
				<tr>
					<td colspan="2" class='sale-header'>
					<h2>Billing Information</h2>
					</td>
				</tr>
				<tr>
					<td height="15" colspan="2">
					
					</td>
				</tr>
				<input name="NotLegacy" value="true" type="hidden" id="NotLegacy" />
				<tr>
					<td class='sale-label-req'>
					First Name *
					</td>
					<td class='sale-label-req'>
					<input type='text' name='Contact0FirstName' value="<?php echo $FirstName;?>" id="Contact0FirstName">
					</td>
				</tr>
				<tr>
					<td class='sale-label-req'>
					Last Name *
					</td>
					<td class='sale-label-req'>
					<input type='text' name='Contact0LastName' value='<?php echo $LastName;?>' id="Contact0LastName">
					</td>
				</tr>
				<tr>
					<td class='sale-label-req'>
					Phone *
					</td>
					<td class='sale-label-req'>
					<input type='text' name='Contact0Phone1' value="" id="Contact0Phone">
					</td>
				</tr>
				<tr>
					<td class='sale-label-req'>
					Email *
					</td>
					<td class='sale-label-req'>
					<input type='text' name='Contact0Email' value="" id="Contact0Email">
					</td>
				</tr>
				<tr>
					<td class="sale-label-req" valign="top" nowrap="nowrap">
					Street Address 1 <span class='sale-req'>*</span>
					</td>
					<td id="Contact0StreetAddress1_data" valign="top" align="left">
					<input name="Contact0StreetAddress1" type="text" id="Contact0StreetAddress1" size="35" />
					</td>
				</tr>
				<tr>
					<td class="sale-label" valign="top" nowrap="nowrap">
					Street Address 2
					</td>
					<td id="Contact0StreetAddress2_data" valign="top" align="left">
					<input name="Contact0StreetAddress2" type="text" id="Contact0StreetAddress2" class="default-input sale-text" size="35" />
					</td>
				</tr>
				<tr>
					<td class="sale-label-req" valign="top" nowrap="nowrap">
					City <span class='sale-req'>*</span>
					</td>
					<td id="Contact0City_data" valign="top" align="left">
					<input name="Contact0City" type="text" id="Contact0City" value='<?php echo $City;?>' class="default-input sale-text-req" id="Contact0City" size="25" onBlur="calcTotals()" />
					</td>
				</tr>
				<tr>
					<td class="sale-label-req" valign="top" nowrap="nowrap">
					State <span class='sale-req'>*</span>
					</td>
					<td id="Contact0State_data" valign="top" align="left">
					<input name="Contact0State" type="text" id="Contact0State" value='<?php echo $State;?>' class="default-input sale-text-req" id="Contact0State" size="2" maxlength=2 onBlur="calcTotals()" />
					</td>
				</tr>
				<tr>
					<td class="sale-label-req" valign="top" nowrap="nowrap">
					Postal Code <span class='sale-req'>*</span>
					</td>
					<td id="Contact0PostalCode_data" valign="top" align="left">
					<input name="Contact0PostalCode" type="text" id="Contact0PostalCode" size="15" />
					</td>
				</tr>
				<tr>
					<td class="sale-label" valign="top" nowrap="nowrap">
					Country
					</td>
					<td id="Contact0Country_data" valign="top" align="left">
					<select class="inf-select default-input sale-text" id="Contact0Country" name="Contact0Country" class="Required" onChange="calcTotals()"><option value="">Please select a country</option><option value="Afghanistan">Afghanistan</option>
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
					<option value="Australia">Australia</option>
					<option value="Austria">Austria</option>
					<option value="&Aring;land Islands">Åland Islands</option>
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
					<option value="Democratic Republic Of Congo">Democratic Republic Of Congo</option>
					<option value="Cook Islands">Cook Islands</option>
					<option value="Costa Rica">Costa Rica</option>
					<option value="Croatia">Croatia</option>
					<option value="Cuba">Cuba</option>
					<option value="Cyprus">Cyprus</option>
					<option value="Czech Republic">Czech Republic</option>
					<option value="C&ocirc;te D'Ivoire">Côte D'Ivoire</option>
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
					<option value="Falkland Islands">Falkland Islands</option>
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
					<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
					<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
					<option value="Honduras">Honduras</option>
					<option value="Hong Kong">Hong Kong</option>
					<option value="Hungary">Hungary</option>
					<option value="Iceland">Iceland</option>
					<option value="India">India</option>
					<option value="Indonesia">Indonesia</option>
					<option value="Iran">Iran</option>
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
					<option value="North Korea">North Korea</option>
					<option value="South Korea">South Korea</option>
					<option value="Kuwait">Kuwait</option>
					<option value="Kyrgyzstan">Kyrgyzstan</option>
					<option value="Laos">Laos</option>
					<option value="Latvia">Latvia</option>
					<option value="Lebanon">Lebanon</option>
					<option value="Lesotho">Lesotho</option>
					<option value="Liberia">Liberia</option>
					<option value="Libya">Libya</option>
					<option value="Liechtenstein">Liechtenstein</option>
					<option value="Lithuania">Lithuania</option>
					<option value="Luxembourg">Luxembourg</option>
					<option value="Macao">Macao</option>
					<option value="Republic of Macedonia">Republic of Macedonia</option>
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
					<option value="Federated States of Micronesia">Federated States of Micronesia</option>
					<option value="Moldova">Moldova</option>
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
					<option value="Palestine">Palestine</option>
					<option value="Panama">Panama</option>
					<option value="Papua New Guinea">Papua New Guinea</option>
					<option value="Paraguay">Paraguay</option>
					<option value="Peru">Peru</option>
					<option value="Philippines">Philippines</option>
					<option value="Pitcairn">Pitcairn</option>
					<option value="Poland">Poland</option>
					<option value="Portugal">Portugal</option>
					<option value="Puerto Rico">Puerto Rico</option>
					<option value="Qatar">Qatar</option>
					<option value="Romania">Romania</option>
					<option value="Russian Federation">Russian Federation</option>
					<option value="Rwanda">Rwanda</option>
					<option value="R&eacute;union">Réunion</option>
					<option value="St. Barth&eacute;lemy">St. Barthélemy</option>
					<option value="St. Helena, Ascension and Tristan Da Cunha">St. Helena, Ascension and Tristan Da Cunha</option>
					<option value="St. Kitts And Nevis">St. Kitts And Nevis</option>
					<option value="St. Lucia">St. Lucia</option>
					<option value="St. Martin">St. Martin</option>
					<option value="St. Pierre And Miquelon">St. Pierre And Miquelon</option>
					<option value="St. Vincent And The Grenedines">St. Vincent And The Grenedines</option>
					<option value="Samoa">Samoa</option>
					<option value="San Marino">San Marino</option>
					<option value="Sao Tome and Principe">Sao Tome and Principe</option>
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
					<option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option>
					<option value="Swaziland">Swaziland</option>
					<option value="Sweden">Sweden</option>
					<option value="Switzerland">Switzerland</option>
					<option value="Syrian Arab Republic">Syrian Arab Republic</option>
					<option value="Taiwan">Taiwan</option>
					<option value="Tajikistan">Tajikistan</option>
					<option value="Tanzania">Tanzania</option>
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
					<option value="United Kingdom">United Kingdom</option>
					<option value="United States" selected="selected">United States</option>
					<option value="US Minor Outlying Islands">US Minor Outlying Islands</option>
					<option value="Uruguay">Uruguay</option>
					<option value="Uzbekistan">Uzbekistan</option>
					<option value="Vanuatu">Vanuatu</option>
					<option value="Venezuela">Venezuela</option>
					<option value="Viet Nam">Viet Nam</option>
					<option value="Virgin Islands, British">Virgin Islands, British</option>
					<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
					<option value="Wallis and Futuna">Wallis and Futuna</option>
					<option value="Western Sahara">Western Sahara</option>
					<option value="Yemen">Yemen</option>
					<option value="Zambia">Zambia</option>
					<option value="Zimbabwe">Zimbabwe</option>
					</select>
					</td>
				</tr>
			</table>
			</div>
			<div class="formsection">
			<table cellpadding="5" border="0" align="center">
				<tr>
					<td colspan=99 class='sale-header'>
					<h2>Credit Card Information</h2>
					</td>
				</tr>
				<tr>
					<td height="15" colspan="2">
					
					</td>
				</tr>
				<tr>
					<td class="sale-label-req" valign="top" nowrap="nowrap">
					Card Type <span class='sale-req'>*</span>
					</td>
					<td id="CreditCard0CardType_data" valign="top" align="left">
						<table cellpadding="0px" cellspacing="0px" border="0px">
							<tr>
								<td>
								<select class="Required" id="CreditCard0CardType" name="CreditCard0CardType" >
								<option value="">Please select a card type <span class='sale-req'>*</span></option>
								<option value="American Express">American Express</option>
								<option value="Master Card">Master Card</option>
								<option value="Visa">Visa</option>
								<option value="Discover">Discover</option>
								</select>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="sale-label-req" valign="top" nowrap="nowrap">
					Card Number <span class='sale-req'>*</span>
					</td>
					<td id="CreditCard0CardNumber_data" valign="top" align="left">
						<table cellpadding="0px" cellspacing="0px" border="0px">
							<tr>
								<td>
								<input name="CreditCard0CardNumber" maxlength="16" type="text" id="CreditCard0CardNumber" size="35" autocomplete="off" />
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="sale-label-req" valign="top" nowrap="nowrap">
					Expiration Month <span class='sale-req'>*</span>
					</td>
					<td id="CreditCard0ExpirationMonth_data" valign="top" align="left">
						<table cellpadding="0px" cellspacing="0px" border="0px">
							<tr>
								<td>
									<select class="Required" id="CreditCard0ExpirationMonth" name="CreditCard0ExpirationMonth" >
									<option value="01">01</option>
									<option value="02">02</option>
									<option value="03">03</option>
									<option value="04">04</option>
									<option value="05">05</option>
									<option value="06">06</option>
									<option value="07">07</option>
									<option value="08">08</option>
									<option value="09">09</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									</select>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="sale-label-req" valign="top" nowrap="nowrap">
					Expiration Year <span class='sale-req'>*</span>
					</td>
					<td id="CreditCard0ExpirationYear_data" valign="top" align="left">
						<table cellpadding="0px" cellspacing="0px" border="0px">
							<tr>
								<td>
								<select class="Required" id="CreditCard0ExpirationYear" name="CreditCard0ExpirationYear" >
								<option value="2012">2012</option>
								<option value="2013">2013</option>
								<option value="2014">2014</option>
								<option value="2015">2015</option>
								<option value="2016">2016</option>
								<option value="2017">2017</option>
								<option value="2018">2018</option>
								<option value="2019">2019</option>
								<option value="2020">2020</option>
								<option value="2021">2021</option>
								<option value="2022">2022</option>
								<option value="2023">2023</option>
								<option value="2024">2024</option>
								<option value="2025">2025</option>
								<option value="2026">2026</option>
								</select>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="sale-label-req" valign="top" nowrap="nowrap">
					CVC <span class='sale-req'>*</span>
					</td>
					<td id="CreditCard0VerificationCode_data" valign="top" align="left">
						<table cellpadding="0px" cellspacing="0px" border="0px">
							<tr>
								<td>
								<input name="CreditCard0VerificationCode" type="text" id="CreditCard0VerificationCode" size="5" />
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			</div>
			<div class="formsection">
			<table cellpadding="5" border="0" align="center">
				<tr>
					<td width="80%" class='sale-productheader'>
					<b>Chris Bowser's: eBay Riches</b>
					</td>
					<td width="20%" class='sale-productheader' valign='top'>
					Amt
					</td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td>
								<input type="radio" class="radio" name="PurchaseType" value="A" checked onClick="calcTotals()">
								<input name="PayTotal_A" value="1495.0" type="hidden" id="PayTotal_A" />
								<input name="PlanCount_A" value="1" type="hidden" id="PlanCount_A" />
								</td>
								<td class='sale-productdata' nowrap="nowrap">
								Total amount of $1495.00 charged today.
								</td>
							</tr>
						</table>
					</td>
					<td class='sale-productdata'>
					<b>$1495.00</b>
					</td>
				</tr>
			</table>
			</div>
			<table align="center">
				<tr>
					<td align='center'>
					<input name="Order" value="Order" type="image" src="../../img/btn-ordernow.jpeg" id="Order" class="default-input sale-orderbutton np inf-button" />
					</td>
				</tr>
			</table>
			</form>
		</section>
  	</div>
<?php include('../../footer.php');?>