<?php include('formvars.php');?>
<?php include('header.php');?>
  	<div id="main">
		<section class="step1">
		<p align="center"><img src="img/grantfundingexpertuspackage.jpeg" width="590" height="490" alt="Grant Funding Package"></p>
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
		<input value="<?php echo $productXid;?>" type="hidden" name="infusion_xid" id="infusion_xid" />
		<input value="CustomFormSale" type="hidden" name="infusion_type" id="infusion_type" />
		<input value="<?php echo $productName;?>" type="hidden" name="infusion_name" id="infusion_name" />
		<input type="hidden" name="PromoCode" id="PromoCode" value="<?php echo $productCode;?>" />
		<input class='sale-text' type='hidden' name="infusion_custom_url" value='<?php echo $path;?>'>
		<input type="hidden" name="CAttempt" id="CAttempt" />
		<table width="600" cellspacing="0" cellpadding="5" class='sale-table' align="center">
			<tr>
				<td height="30" bgcolor="#F4F4F4" colspan="2">
				<h2>Contact Information</h2>
				</td>
			</tr>
			<tr>
			    <td class='sale-label-req'>
				First Name: 
				</td>
				<td class='sale-label-req'>
				<input type='text' size="42" name='Contact0FirstName' value='' class="required">
				</td>
			</tr>
			<tr>
				<td class='sale-label-req'>
				Last Name: 
				</td>
				<td class='sale-label-req'>
				<input type='text' size="42" name='Contact0LastName' value='' class="required">
				</td>
			</tr>
			<tr>
				<td class='sale-label-req'>
				Email: 
				</td>
				<td class='sale-label-req'>
				<input type='text' size="42" name='Contact0Email' value='' class="required">
				</td>
			</tr>
			<tr>
				<td class='sale-label-req'>
				Phone: 
				</td>
				<td class='sale-label-req'>
				<input type='text' size="42" name='Contact0Phone1' value='' class="required">
				</td>
			</tr>
			<tr>
				<td class="sale-label-req">
				Street Address 1: 
				</td>
				<td id="Contact0StreetAddress1_data" valign="middle" align="left">
				<input type="text" name="Contact0StreetAddress1" size="42" id="Contact0StreetAddress1" class="required" />
				</td>
			</tr>
			<tr>
				<td class="sale-label">
				Street Address 2: 
				</td>
				<td id="Contact0StreetAddress2_data" align="left">
				<input type="text" name="Contact0StreetAddress2" size="42" id="Contact0StreetAddress2" />
				</td>
			</tr>
			<tr>
				<td class="sale-label-req">
				City: 
				</td>
				<td id="Contact0City_data" align="left">
				<input type="text" name="Contact0City" size="42" id="Contact0City" class="required" onBlur="calcTotals()" />
				</td>
			</tr>
			<tr>
				<td class="sale-label-req">
				State: 
				</td>
				<td id="Contact0State_data" align="left">
				<select name="Contact0State" id="Contact0State">
				<option value="AL">Alabama</option>
				<option value="AK">Alaska</option>
				<option value="AZ">Arizona</option>
				<option value="AR">Arkansas</option>
				<option value="CA">California</option>
				<option value="CO">Colorado</option>
				<option value="CT">Connecticut</option>
				<option value="DE">Delaware</option>
				<option value="DC">District of Columbia</option>
				<option value="FL">Florida</option>
				<option value="GA">Georgia</option>
				<option value="HI">Hawaii</option>
				<option value="ID">Idaho</option>
				<option value="IL">Illinois</option>
				<option value="IN">Indiana</option>
				<option value="IA">Iowa</option>
				<option value="KS">Kansas</option>
				<option value="KY">Kentucky</option>
				<option value="LA">Louisiana</option>
				<option value="ME">Maine</option>
				<option value="MD">Maryland</option>
				<option value="MA">Massachusetts</option>
				<option value="MI">Michigan</option>
				<option value="MN">Minnesota</option>
				<option value="MS">Mississippi</option>
				<option value="MO">Missouri</option>
				<option value="MT">Montana</option>
				<option value="NE">Nebraska</option>
				<option value="NV">Nevada</option>
				<option value="NH">New Hampshire</option>
				<option value="NJ">New Jersey</option>
				<option value="NM">New Mexico</option>
				<option value="NY">New York</option>
				<option value="NC">North Carolina</option>
				<option value="ND">North Dakota</option>
				<option value="OH">Ohio</option>
				<option value="OK">Oklahoma</option>
				<option value="OR">Oregon</option>
				<option value="PA">Pennsylvania</option>
				<option value="RI">Rhode Island</option>
				<option value="SC">South Carolina</option>
				<option value="SD">South Dakota</option>
				<option value="TN">Tennessee</option>
				<option value="TX">Texas</option>
				<option value="UT">Utah</option>
				<option value="VT">Vermont</option>
				<option value="VA">Virginia</option>
				<option value="WA">Washington</option>
				<option value="WV">West Virginia</option>
				<option value="WI">Wisconsin</option>
				<option value="WY">Wyoming</option></select>
				</td>
			</tr>
			<tr>
				<td class="sale-label-req">
				Postal Code: 
				</td>
				<td id="Contact0PostalCode_data" align="left">
				<input type="text" name="Contact0PostalCode" size="15" id="Contact0PostalCode" class="required" />
				</td>
			</tr>
			<tr>
				<td class="sale-label">
				Country: 
				</td>
				<td id="Contact0Country_data" align="left">
				<select class="inf-select default-input sale-text" id="Contact0Country" name="Contact0Country" onChange="calcTotals()">
				<option value="">Please select a country</option>
				<option value="Argentina">Argentina</option>
	   			<option value="Australia">Australia</option>
			    <option value="Austria">Austria</option>
			    <option value="Belgium">Belgium</option>
			    <option value="Belize">Belize</option>
			    <option value="Bolivia">Bolivia</option>
			    <option value="Brazil">Brazil</option>
			    <option value="Canada">Canada</option>
			    <option value="Cape Verde">Cape Verde</option>
			    <option value="Chile">Chile</option>
			    <option value="China">China</option>
			    <option value="Colombia">Colombia</option>
			    <option value="Costa Rica">Costa Rica</option>
			    <option value="Czech Republic">Czech Republic</option>
			    <option value="Denmark">Denmark</option>
			    <option value="Dominican Republic">Dominican Republic</option>
			    <option value="Ecuador">Ecuador</option>
			    <option value="El Salvador">El Salvador</option>
			    <option value="Finland">Finland</option>
			    <option value="France">France</option>
			    <option value="Germany">Germany</option>
			    <option value="Ghana">Ghana</option>
			    <option value="Greece">Greece</option>
			    <option value="Greenland">Greenland</option>
			    <option value="Guatemala">Guatemala</option>
			    <option value="Honduras">Honduras</option>
			    <option value="Hong Kong SAR">Hong Kong SAR</option>
			    <option value="Hungary">Hungary</option>
			    <option value="Iceland">Iceland</option>
			    <option value="India">India</option>
			    <option value="Indonesia">Indonesia</option>
			    <option value="Ireland">Ireland</option>
			    <option value="Italy">Italy</option>
			    <option value="Japan">Japan</option>
			    <option value="Korea">Korea</option>
			    <option value="Mexico">Mexico</option>
			    <option value="Netherlands">Netherlands</option>
			    <option value="The">The</option>
			    <option value="New Zealand">New Zealand</option>
			    <option value="Norway">Norway</option>
			    <option value="Peru">Peru</option>
			    <option value="Philippines">Philippines</option>
			    <option value="Portugal">Portugal</option>
			    <option value="Puerto Rico">Puerto Rico</option>
			    <option value="Russia">Russia</option>
			    <option value="South Africa">South Africa</option>
			    <option value="Spain">Spain</option>
			    <option value="Sweden">Sweden</option>
			    <option value="Switzerland">Switzerland</option>
			    <option value="Taiwan">Taiwan</option>
			    <option value="United Arab Emirates">United Arab Emirates</option>
			    <option value="United Kingdom">United Kingdom</option>
			    <option value="United States" selected="selected">United States</option>
			    <option value="Venezuela">Venezuela</option>
			    <option value="JAMAICA">JAMAICA</option>
			    <option value="HAITI">HAITI</option>
			    <option value="COUNTRY">COUNTRY</option>
			    <option value="LEBANON">LEBANON</option>
			    <option value="MONTENEGRO">MONTENEGRO</option>
				</select>
				</td>
			</tr>
			<tr>
				<td height="50" colspan="3">
				</td>
			</tr>
			<input name="CopyAddresses" type="hidden" value="orders@real-estate-fortune.com" id="CopyAddresses" />
			<input name="DoShipping" type="hidden" value="true" id="DoShipping" />
		</table>
		<table cellspacing="0" cellpadding="5" class='sale-table' width="600" align="center">
			<tr>
				<td height="30" bgcolor="#F4F4F4" colspan="2">
				<h2>Credit Card Information</h2>
				</td>
			</tr>
			<tr>
				<td class="sale-label-req">
				Card Type: 
				</td>
				<td id="CreditCard0CardType_data" align="left">
				<select class="inf-select default-input sale-select-req"  id="CreditCard0CardType" name="CreditCard0CardType" >
				<option value="">Please select a card type <span class='sale-req'>*</span></option>
				<option value="American Express">American Express</option>
			    <option value="Master Card">Master Card</option>
	     		<option value="Visa">Visa</option>
				<option value="Discover">Discover</option>
	     		</select>
				</td>
			</tr>
			<tr>
				<td class="sale-label-req">
				Card Number: 
				</td>
				<td id="CreditCard0CardNumber_data" align="left">
				<input type="text" name="CreditCard0CardNumber" maxlength="16" size="42" id="CreditCard0CardNumber" class="required" autocomplete="off" />
			 	</td>
			</tr>
			<tr>
				<td class="sale-label-req">
				Expiration Month: 
				</td>
				<td id="CreditCard0ExpirationMonth_data" align="left">
				<select class="inf-select default-input sale-select-req" id="CreditCard0ExpirationMonth" name="CreditCard0ExpirationMonth" >
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
			 <tr>
			    <td class="sale-label-req">
				Expiration Year
				</td>
				<td id="CreditCard0ExpirationYear_data" valign="top" align="left">
				<select class="inf-select default-input sale-select-req" id="CreditCard0ExpirationYear" name="CreditCard0ExpirationYear" >
				<option value="2010">2010</option>
			    <option value="2011">2011</option>
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
			    </select>
				</td>
			</tr>
			<tr>
				<td class="sale-label-req">
				CVC
				</td>
				<td id="CreditCard0VerificationCode_data" align="left">
			    <input type="text" name="CreditCard0VerificationCode" size="10" id="CreditCard0VerificationCode" class="required" /></td>
			    </td>
			</tr>
			<tr>
				<td height="50" colspan="3">
				</td>
			</tr>
		</table>
		<table cellspacing="0" cellpadding="5" class='sale-table' width="600" align="center">
			<tr>
				<td height="30" bgcolor="#F4F4F4" colspan="2">
				<h2>Product Purchase Plan</h2>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
				Amt:
				</td>
			</tr>
			<tr>
				<td>
				<input type="radio" class="radio" name="PurchaseType" value="A" checked onClick="calcTotals()">
				<input name="PayTotal_A" id="PayTotal_A" type="hidden" value="997.0" />
				<input name="PlanCount_A" id="PlanCount_A" type="hidden" value="1" /> 1 Payment of $997
				</td>
				<td class='sale-productdata'>
				<B>$997</B>
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
				<input type="image" src="img/btn-ordernow.jpeg" name="Order" value="Order" id="Order" class="default-input sale-orderbutton np inf-button" />
				</td>
			</tr>
		</table>
		</form>
		</section>
  	</div>
<?php include('footer.php');?>