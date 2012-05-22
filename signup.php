<?php
include('config.php');
include('language.php');
//Before Including Template You Can Define Custom Things:
$sitepage = 'Sign Up'; //will make the <title> display your current location
$default_links = '<li><a href="about.php">About</a></li>
            <li><a href="login.php">Login</a></li>
            <li class="active"><a href="signup.php">Sign Up</a></li>';
//Default Links Changes The Links At Top
include('template.php');
echo $head_template;
?>
        <div class="row">


          <div class="span8 offset2">
  <div class="box box-nopad">
    <h1 class="sign-up">Sign Up</h1>
    <h4 style="font-weight:800">You're just 60 seconds away from from Tech Team goodness.</h4>

    <form accept-charset="UTF-8" action="submit.php" class="form-horizontal" id="new_user" method="post">
      <input type="hidden" value="signup" name="return" />
      <div>
        
          <div class="control-group">
            <label class="control-label" for="user_account_attributes_full_name">Your Name</label>
            <div class="controls">
              <input class="company-name" id="user_account_attributes_full_name" name="fullname" placeholder="John Doe" size="30" type="text" />
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="user_account_attributes_username">Username</label>
            <div class="controls">
              <input class="company-name" id="user_account_attributes_username" name="username" placeholder="Jdizzle56" size="30" type="text" />
            </div>
          </div>

          <div class="control-group">
            <label class="control-label" for="user_account_attributes_time_zone">Time zone</label>
            <div class="controls">
              <select id="user_account_attributes_time_zone" name="timezone">
                <option value="-12" >(GMT -12:00 hours) Eniwetok, Kwajalein</option>
                <option value="-11" >(GMT -11:00 hours) Midway Island, Samoa</option>
                <option value="-10" >(GMT -10:00 hours) Hawaii</option>
                <option value="-9" >(GMT -9:00 hours) Alaska</option>
                <option value="-8" >(GMT -8:00 hours) Pacific Time (US & Canada)</option>
                <option value="-7" >(GMT -7:00 hours) Mountain Time (US & Canada)</option>
                <option value="-6" >(GMT -6:00 hours) Central Time (US & Canada)</option>
                <option value="-6" >(GMT -6:00 hours) Mexico City</option>
                <option value="-5" >(GMT -5:00 hours) Eastern Time (US & Canada)</option>
                <option value="-5" >(GMT -5:00 hours) Bogota, Lima, Quito</option>
                <option value="-4" >(GMT -4:00 hours) Atlantic Time (Canada)</option>
                <option value="-4" >(GMT -4:00 hours) Caracas, La Paz</option>
                <option value="-3.5" >(GMT -3:30 hours) Newfoundland</option>
                <option value="-3" >(GMT -3:00 hours) Brazil</option>
                <option value="-3" >(GMT -3:00 hours) Buenos Aires</option>
                <option value="-3" >(GMT -3:00 hours) Georgetown</option>
                <option value="-2" >(GMT -2:00 hours) Mid-Atlantic</option>
                <option value="-1" >(GMT -1:00 hours) Azores</option>
                <option value="-1" >(GMT -1:00 hours) Cape Verde Islands</option>
                <option value="0" selected>(GMT) Western Europe Time</option>
                <option value="+1" >(GMT +1:00 hours) CET(Central Europe Time)</option>
                <option value="+2" >(GMT +2:00 hours) EET(Eastern Europe Time)</option>
                <option value="+2" >(GMT +2:00 hours) South Africa</option>
                <option value="+3" >(GMT +3:00 hours) Baghdad, Kuwait, Riyadh</option>
                <option value="+3" >(GMT +3:00 hours) Moscow, St. Petersburg</option>
                <option value="+3" >(GMT +3:00 hours) Nairobi</option>
                <option value="+3.5" >(GMT +3:30 hours) Tehran</option>
                <option value="+4" >(GMT +4:00 hours) Abu Dhabi, Muscat, Tbilisi</option>
                <option value="+4.5" >(GMT +4:30 hours) Kabul</option>
                <option value="+5" >(GMT +5:00 hours) Ekaterinburg, Tashkent</option>
                <option value="+5" >(GMT +5:00 hours) Islamabad, Karachi</option>
                <option value="+5.5" >(GMT +5:30 hours) Bombay, New Delhi</option>
                <option value="+6" >(GMT +6:00 hours) Almaty, Dhaka, Colombo</option>
                <option value="+7" >(GMT +7:00 hours) Bangkok, Hanoi, Jakarta</option>
                <option value="+8" >(GMT +8:00 hours) Beijing, Perth, Singapore</option>
                <option value="+9" >(GMT +9:00 hours) Tokyo, Seoul, Osaka</option>
                <option value="+9.5" >(GMT +9:30 hours) Adelaide, Darwin</option>
                <option value="+10" >(GMT +10:00 hours) EAST(East Australian Standard)</option>
                <option value="+10" >(GMT +10:00 hours) Guam, Papua New Guinea, Vladivostok</option>
                <option value="+11" >(GMT +11:00 hours) Magadan, Solomon Islands, New Caledonia</option>
                <option value="+12" >(GMT +12:00 hours) Auckland, Fiji, Marshall Island</option>
              </select>
            </div>
          </div>


        <hr />

        <div class="control-group">
          <label class="control-label" for="user_first_name">Your Party</label>
          <div class="controls">
            <select name="country">
            <option value='AF'>Afghanistan</option>
<option value='AX'>Åland Islands</option>
<option value='AL'>Albania</option>
<option value='DZ'>Algeria</option>
<option value='AS'>American Samoa</option>
<option value='AD'>Andorra</option>
<option value='AO'>Angola</option>
<option value='AI'>Anguilla</option>
<option value='AQ'>Antarctica</option>
<option value='AG'>Antigua and Barbuda</option>
<option value='AR'>Argentina</option>
<option value='AM'>Armenia</option>
<option value='AW'>Aruba</option>
<option value='AU'>Australia</option>
<option value='AT'>Austria</option>
<option value='AZ'>Azerbaijan</option>
<option value='BS'>Bahamas</option>
<option value='BH'>Bahrain</option>
<option value='BD'>Bangladesh</option>
<option value='BB'>Barbados</option>
<option value='BY'>Belarus</option>
<option value='BE'>Belgium</option>
<option value='BZ'>Belize</option>
<option value='BJ'>Benin</option>
<option value='BM'>Bermuda</option>
<option value='BT'>Bhutan</option>
<option value='BO'>Bolivia</option>
<option value='BA'>Bosnia and Herzegovina</option>
<option value='BW'>Botswana</option>
<option value='BV'>Bouvet Island</option>
<option value='BR'>Brazil</option>
<option value='IO'>British Indian Ocean Territory</option>
<option value='BN'>Brunei Darussalam</option>
<option value='BG'>Bulgaria</option>
<option value='BF'>Burkina Faso</option>
<option value='BI'>Burundi</option>
<option value='KH'>Cambodia</option>
<option value='CM'>Cameroon</option>
<option value='CA'>Canada</option>
<option value='CV'>Cape Verde</option>
<option value='KY'>Cayman Islands</option>
<option value='CF'>Central African Republic</option>
<option value='TD'>Chad</option>
<option value='CL'>Chile</option>
<option value='CN'>China</option>
<option value='CX'>Christmas Island</option>
<option value='CC'>Cocos (Keeling) Islands</option>
<option value='CO'>Colombia</option>
<option value='KM'>Comoros</option>
<option value='CG'>Congo</option>
<option value='CD'>Congo, The Democratic Republic of The</option>
<option value='CK'>Cook Islands</option>
<option value='CR'>Costa Rica</option>
<option value='CI'>Cote D'ivoire</option>
<option value='HR'>Croatia</option>
<option value='CU'>Cuba</option>
<option value='CY'>Cyprus</option>
<option value='CZ'>Czech Republic</option>
<option value='DK'>Denmark</option>
<option value='DJ'>Djibouti</option>
<option value='DM'>Dominica</option>
<option value='DO'>Dominican Republic</option>
<option value='EC'>Ecuador</option>
<option value='EG'>Egypt</option>
<option value='SV'>El Salvador</option>
<option value='GQ'>Equatorial Guinea</option>
<option value='ER'>Eritrea</option>
<option value='EE'>Estonia</option>
<option value='ET'>Ethiopia</option>
<option value='FK'>Falkland Islands (Malvinas)</option>
<option value='FO'>Faroe Islands</option>
<option value='FJ'>Fiji</option>
<option value='FI'>Finland</option>
<option value='FR'>France</option>
<option value='GF'>French Guiana</option>
<option value='PF'>French Polynesia</option>
<option value='TF'>French Southern Territories</option>
<option value='GA'>Gabon</option>
<option value='GM'>Gambia</option>
<option value='GE'>Georgia</option>
<option value='DE'>Germany</option>
<option value='GH'>Ghana</option>
<option value='GI'>Gibraltar</option>
<option value='GR'>Greece</option>
<option value='GL'>Greenland</option>
<option value='GD'>Grenada</option>
<option value='GP'>Guadeloupe</option>
<option value='GU'>Guam</option>
<option value='GT'>Guatemala</option>
<option value='GG'>Guernsey</option>
<option value='GN'>Guinea</option>
<option value='GW'>Guinea-bissau</option>
<option value='GY'>Guyana</option>
<option value='HT'>Haiti</option>
<option value='HM'>Heard Island and Mcdonald Islands</option>
<option value='VA'>Holy See (Vatican City State)</option>
<option value='HN'>Honduras</option>
<option value='HK'>Hong Kong</option>
<option value='HU'>Hungary</option>
<option value='IS'>Iceland</option>
<option value='IN'>India</option>
<option value='ID'>Indonesia</option>
<option value='IR'>Iran, Islamic Republic of</option>
<option value='IQ'>Iraq</option>
<option value='IE'>Ireland</option>
<option value='IM'>Isle of Man</option>
<option value='IL'>Israel</option>
<option value='IT'>Italy</option>
<option value='JM'>Jamaica</option>
<option value='JP'>Japan</option>
<option value='JE'>Jersey</option>
<option value='JO'>Jordan</option>
<option value='KZ'>Kazakhstan</option>
<option value='KE'>Kenya</option>
<option value='KI'>Kiribati</option>
<option value='KP'>Korea, Democratic People's Republic of</option>
<option value='KR'>Korea, Republic of</option>
<option value='KW'>Kuwait</option>
<option value='KG'>Kyrgyzstan</option>
<option value='LA'>Lao People's Democratic Republic</option>
<option value='LV'>Latvia</option>
<option value='LB'>Lebanon</option>
<option value='LS'>Lesotho</option>
<option value='LR'>Liberia</option>
<option value='LY'>Libyan Arab Jamahiriya</option>
<option value='LI'>Liechtenstein</option>
<option value='LT'>Lithuania</option>
<option value='LU'>Luxembourg</option>
<option value='MO'>Macao</option>
<option value='MK'>Macedonia, The Former Yugoslav Republic of</option>
<option value='MG'>Madagascar</option>
<option value='MW'>Malawi</option>
<option value='MY'>Malaysia</option>
<option value='MV'>Maldives</option>
<option value='ML'>Mali</option>
<option value='MT'>Malta</option>
<option value='MH'>Marshall Islands</option>
<option value='MQ'>Martinique</option>
<option value='MR'>Mauritania</option>
<option value='MU'>Mauritius</option>
<option value='YT'>Mayotte</option>
<option value='MX'>Mexico</option>
<option value='FM'>Micronesia, Federated States of</option>
<option value='MD'>Moldova, Republic of</option>
<option value='MC'>Monaco</option>
<option value='MN'>Mongolia</option>
<option value='ME'>Montenegro</option>
<option value='MS'>Montserrat</option>
<option value='MA'>Morocco</option>
<option value='MZ'>Mozambique</option>
<option value='MM'>Myanmar</option>
<option value='NA'>Namibia</option>
<option value='NR'>Nauru</option>
<option value='NP'>Nepal</option>
<option value='NL'>Netherlands</option>
<option value='AN'>Netherlands Antilles</option>
<option value='NC'>New Caledonia</option>
<option value='NZ'>New Zealand</option>
<option value='NI'>Nicaragua</option>
<option value='NE'>Niger</option>
<option value='NG'>Nigeria</option>
<option value='NU'>Niue</option>
<option value='NF'>Norfolk Island</option>
<option value='MP'>Northern Mariana Islands</option>
<option value='NO'>Norway</option>
<option value='OM'>Oman</option>
<option value='PK'>Pakistan</option>
<option value='PW'>Palau</option>
<option value='PS'>Palestinian Territory, Occupied</option>
<option value='PA'>Panama</option>
<option value='PG'>Papua New Guinea</option>
<option value='PY'>Paraguay</option>
<option value='PE'>Peru</option>
<option value='PH'>Philippines</option>
<option value='PN'>Pitcairn</option>
<option value='PL'>Poland</option>
<option value='PT'>Portugal</option>
<option value='PR'>Puerto Rico</option>
<option value='QA'>Qatar</option>
<option value='RE'>Reunion</option>
<option value='RO'>Romania</option>
<option value='RU'>Russian Federation</option>
<option value='RW'>Rwanda</option>
<option value='SH'>Saint Helena</option>
<option value='KN'>Saint Kitts and Nevis</option>
<option value='LC'>Saint Lucia</option>
<option value='PM'>Saint Pierre and Miquelon</option>
<option value='VC'>Saint Vincent and The Grenadines</option>
<option value='WS'>Samoa</option>
<option value='SM'>San Marino</option>
<option value='ST'>Sao Tome and Principe</option>
<option value='SA'>Saudi Arabia</option>
<option value='SN'>Senegal</option>
<option value='RS'>Serbia</option>
<option value='SC'>Seychelles</option>
<option value='SL'>Sierra Leone</option>
<option value='SG'>Singapore</option>
<option value='SK'>Slovakia</option>
<option value='SI'>Slovenia</option>
<option value='SB'>Solomon Islands</option>
<option value='SO'>Somalia</option>
<option value='ZA'>South Africa</option>
<option value='GS'>South Georgia and The South Sandwich Islands</option>
<option value='ES'>Spain</option>
<option value='LK'>Sri Lanka</option>
<option value='SD'>Sudan</option>
<option value='SR'>Suriname</option>
<option value='SJ'>Svalbard and Jan Mayen</option>
<option value='SZ'>Swaziland</option>
<option value='SE'>Sweden</option>
<option value='CH'>Switzerland</option>
<option value='SY'>Syrian Arab Republic</option>
<option value='TW'>Taiwan, Province of China</option>
<option value='TJ'>Tajikistan</option>
<option value='TZ'>Tanzania, United Republic of</option>
<option value='TH'>Thailand</option>
<option value='TL'>Timor-leste</option>
<option value='TG'>Togo</option>
<option value='TK'>Tokelau</option>
<option value='TO'>Tonga</option>
<option value='TT'>Trinidad and Tobago</option>
<option value='TN'>Tunisia</option>
<option value='TR'>Turkey</option>
<option value='TM'>Turkmenistan</option>
<option value='TC'>Turks and Caicos Islands</option>
<option value='TV'>Tuvalu</option>
<option value='UG'>Uganda</option>
<option value='UA'>Ukraine</option>
<option value='AE'>United Arab Emirates</option>
<option value='GB'>United Kingdom</option>
<option value='US'>United States</option>
<option value='UM'>United States Minor Outlying Islands</option>
<option value='UY'>Uruguay</option>
<option value='UZ'>Uzbekistan</option>
<option value='VU'>Vanuatu</option>
<option value='VE'>Venezuela</option>
<option value='VN'>Viet Nam</option>
<option value='VG'>Virgin Islands, British</option>
<option value='VI'>Virgin Islands, U.S.</option>
<option value='WF'>Wallis and Futuna</option>
<option value='EH'>Western Sahara</option>
<option value='YE'>Yemen</option>
<option value='ZM'>Zambia</option>
<option value='ZW'>Zimbabwe</option>
</select>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="email">Email</label>
          <div class="controls">
            <input id="email" name="email" placeholder="example@example.net" size="30" type="email" value="" />
          </div>
        </div>

        <hr />

        <div class="control-group">
          <label class="control-label" for="password">Password</label>
          <div class="controls">
            <input id="password" name="password" placeholder="Password" size="30" type="password" />
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="user_password_confirmation">Confirmation</label>
          <div class="controls">
            <input id="user_password_confirmation" name="confirmation" placeholder="Password Confirmation" size="30" type="password" />
          </div>
        </div>

        <div class="form-actions">
          <input class="btn btn-large btn-info" name="commit" type="submit" value="Create My Account" />
          or <a href="/users/sign_in">login to your account</a>
        </div>

      </div>
</form>  </div>
</div>

        </div><!--/row-->
 <?php echo $foot_template; ?>