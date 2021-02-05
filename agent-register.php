<!--Header File Include-->
<?php include('include/header.php'); ?>

<!---Top Navbar--->
<?php include('include/top-navbar.php'); ?>
      
<!---Advertise Banner--->
<?php include('include/banner.php');?>

<!---Dropdown Navbar--->
<?php include('include/dropdown-navbar.php'); ?>

<!---Register Panels--->
<div class="container" style="margin-top: 20px;">

  <div class="row">
  
    <div class="col-md-12">
    
      <div class="col-md-4">
        
        <!--Advertise Box-->
        <?php include('include/advertise-box.php'); ?>
        
        <!--Search Box-->
        <?php include('include/search-box.php'); ?>      
      
      </div><!--/col-md-4-->
      
      <!--SignUp-box Land-->
      <div class="panel panel-primary col-md-7 col-md-offset-1" style="padding: 0px;margin: 10px; float: right;">
        <div class="panel-heading">
          <h3 class="panel-title">Agent Sign Up - Rise Land</h3>
        </div>
        <div class="panel-body">
          Rise Land is a Pakistan real estate website to buy sell rent properties like plots, homes, farms etc. Intellisoft Solutions is maintaing this portal, which specialize in Real Estate websites. Real Estate Agents and other investors can create their account on this portal and sell their properties. Also users can keep track of their properties and inventories or other clients they have. So Please join us now to advertise your properties to sale or rent free of cost.
        
          <div class="col-md-12" style="margin-top: 10px;">
          <form action="include/agent-register-handler.php" method="post" enctype="multipart/form-data">
              <div class="form-group">
              <div class="col-sm-6">
                  <label for="name" class="form-label">Full Name:</label>
                  <input type="name" class="form-control" id="name" placeholder="Enter Full Name" name="name" required>  
                </div>
                <div class="col-sm-6">
                  <label for="email" class="form-label">Email address:</label>
                  <input type="email" class="form-control" id="email" placeholder="Enter a Valid Email" name="email" required>
                </div>
              </div>
                          
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Password:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Password (Confirm):</label>
                  <input type="password" class="form-control" id="pwd" placeholder="Re-Enter password" name="passwordcon">  
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="email" class="form-label">Zip Code:</label>
                  <input type="number" class="form-control" id="email" placeholder="Enter Zip Code" name="zip" required>
                </div>
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Cell / Mobile:</label>
                  <input type="number" class="form-control" id="pwd" placeholder="Enter password" name="cell" required>
                </div>
              </div>

              <div class="form-group">
              <div class="col-sm-6">
                  <label for="country" class="form-label">Country:</label>
                  <!-- <input type="text" class="form-control" id="country" placeholder="Enter Country" name="country" required> -->
                  <!--Country List-->
                  <select id="country" name="country" class="form-control">
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
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
                    <option value="Bonaire">Bonaire</option>
                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Canary Islands">Canary Islands</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Channel Islands">Channel Islands</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos Island">Cocos Island</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote DIvoire">Cote DIvoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaco">Curacao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
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
                    <option value="French Southern Ter">French Southern Ter</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Great Britain">Great Britain</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="India">India</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea Sout">Korea South</option>
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
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Midway Islands">Midway Islands</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nambia">Nambia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherland Antilles">Netherland Antilles</option>
                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                    <option value="Nevis">Nevis</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan" selected>Pakistan</option>
                    <option value="Palau Island">Palau Island</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Phillipines">Philippines</option>
                    <option value="Pitcairn Island">Pitcairn Island</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                    <option value="Republic of Serbia">Republic of Serbia</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="St Barthelemy">St Barthelemy</option>
                    <option value="St Eustatius">St Eustatius</option>
                    <option value="St Helena">St Helena</option>
                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                    <option value="St Lucia">St Lucia</option>
                    <option value="St Maarten">St Maarten</option>
                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                    <option value="Saipan">Saipan</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa American">Samoa American</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Tahiti">Tahiti</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Erimates">United Arab Emirates</option>
                    <option value="United States of America">United States of America</option>
                    <option value="Uraguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City State">Vatican City State</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                    <option value="Wake Island">Wake Island</option>
                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zaire">Zaire</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                  </select>
                  <!--/Country List End-->
                </div>
                <div class="col-sm-6">
                  <label for="pwd" class="form-label">Address:</label>
                  <textarea type="text" class="form-control" id="pwd" placeholder="Enter Personal Address" name="personaladdress" required></textarea>
                </div>
              </div>
                          
              <span style="color:#337ab7;font-size:2em;margin-left:15px;">Agency Information</span>
              
              <div class="form-group">
                <div class="col-sm-12">
                  <label for="pwd" class="form-label">Agency Name:</label>
                  <input type="text" class="form-control" id="pwd" placeholder="Enter Agency Name" name="agencyname" required/>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="service" class="form-label">Description of Services:</label>
                  <textarea type="text" class="form-control" id="service" placeholder="Enter Description of Services" name="service" required></textarea>
                </div>
                <div class="col-sm-6">
                  <label for="city" class="form-label">Select Cities You Deal In<br /><small>(Hold ctrl to select multiple cities)</small>:</label>
                  <!-- <input type="email" class="form-control" id="email" placeholder="Enter password" name="pwd"> -->
                  <select class="form-control" name="citydeal[]" id="city" multiple required>
                  <option value="" disabled selected>Select The City</option>
                  <option value="Islamabad">Islamabad</option>
                  <!-- <option value="" disabled>Punjab Cities</option> -->
                  <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                  <option value="Ahmadpur East">Ahmadpur East</option>
                  <option value="Ali Khan Abad">Ali Khan Abad</option>
                  <option value="Alipur">Alipur</option>
                  <option value="Arifwala">Arifwala</option>
                  <option value="Attock">Attock</option>
                  <option value="Bhera">Bhera</option>
                  <option value="Bhalwal">Bhalwal</option>
                  <option value="Bahawalnagar">Bahawalnagar</option>
                  <option value="Bahawalpur">Bahawalpur</option>
                  <option value="Bhakkar">Bhakkar</option>
                  <option value="Burewala">Burewala</option>
                  <option value="Chillianwala">Chillianwala</option>
                  <option value="Chakwal">Chakwal</option>
                  <option value="Chichawatni">Chichawatni</option>
                  <option value="Chiniot">Chiniot</option>
                  <option value="Chishtian">Chishtian</option>
                  <option value="Daska">Daska</option>
                  <option value="Darya Khan">Darya Khan</option>
                  <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                  <option value="Dhaular">Dhaular</option>
                  <option value="Dina">Dina</option>
                  <option value="Dinga">Dinga</option>
                  <option value="Dipalpur">Dipalpur</option>
                  <option value="Faisalabad">Faisalabad</option>
                  <option value="Ferozewala">Ferozewala</option>
                  <option value="Fateh Jhang">Fateh Jang</option>
                  <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                  <option value="Gojra">Gojra</option>
                  <option value="Gujranwala">Gujranwala</option>
                  <option value="Gujrat">Gujrat</option>
                  <option value="Gujar Khan">Gujar Khan</option>
                  <option value="Hafizabad">Hafizabad</option>
                  <option value="Haroonabad">Haroonabad</option>
                  <option value="Hasilpur">Hasilpur</option>
                  <option value="Haveli Lakha">Haveli Lakha</option>
                  <option value="Jatoi">Jatoi</option>
                  <option value="Jalalpur">Jalalpur</option>
                  <option value="Jattan">Jattan</option>
                  <option value="Jampur">Jampur</option>
                  <option value="Jaranwala">Jaranwala</option>
                  <option value="Jhang">Jhang</option>
                  <option value="Jhelum">Jhelum</option>
                  <option value="Kalabagh">Kalabagh</option>
                  <option value="Karor Lal Esan">Karor Lal Esan</option>
                  <option value="Kasur">Kasur</option>
                  <option value="Kamalia">Kamalia</option>
                  <option value="Kamoke">Kamoke</option>
                  <option value="Khanewal">Khanewal</option>
                  <option value="Khanpur">Khanpur</option>
                  <option value="Kharian">Kharian</option>
                  <option value="Khushab">Khushab</option>
                  <option value="Kot Addu">Kot Addu</option>
                  <option value="Jauharabad">Jauharabad</option>
                  <option value="Lahore">Lahore</option>
                  <option value="Lalamusa">Lalamusa</option>
                  <option value="Layyah">Layyah</option>
                  <option value="Liaquat Pur">Liaquat Pur</option>
                  <option value="Lodhran">Lodhran</option>
                  <option value="Malakwal">Malakwal</option>
                  <option value="Mamoori">Mamoori</option>
                  <option value="Mailsi">Mailsi</option>
                  <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                  <option value="Mian Channu">Mian Channu</option>
                  <option value="Mianwali">Mianwali</option>
                  <option value="Multan">Multan</option>
                  <option value="Murree">Murree</option>
                  <option value="Muridke">Muridke</option>
                  <option value="Mianwali Bangla">Mianwali Bangla</option>
                  <option value="Muzaffargarh">Muzaffargarh</option>
                  <option value="Narowal">Narowal</option>
                  <option value="Nankana Sahib">Nankana Sahib</option>
                  <option value="Okara">Okara</option>
                  <option value="Renala Khurd">Renala Khurd</option>
                  <option value="Pakpattan">Pakpattan</option>
                  <option value="Pattoki">Pattoki</option>
                  <option value="Pir Mahal">Pir Mahal</option>
                  <option value="Qaimpur">Qaimpur</option>
                  <option value="Qila Didar Singh">Qila Didar Singh</option>
                  <option value="Rabwah">Rabwah</option>
                  <option value="Raiwind">Raiwind</option>
                  <option value="Rajanpur">Rajanpur</option>
                  <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                  <option value="Rawalpindi">Rawalpindi</option>
                  <option value="Sadiqabad">Sadiqabad</option>
                  <option value="Safdarabad">Safdarabad</option>
                  <option value="Sahiwal">Sahiwal</option>
                  <option value="Sangla Hill">Sangla Hill</option>
                  <option value="Sarai Alamgir">Sarai Alamgir</option>
                  <option value="Sargodha">Sargodha</option>
                  <option value="Shakargarh">Shakargarh</option>
                  <option value="Sheikhupura">Sheikhupura</option>
                  <option value="Sialkot">Sialkot</option>
                  <option value="Sohawa">Sohawa</option>
                  <option value="Soianwala">Soianwala</option>
                  <option value="Siranwali">Siranwali</option>
                  <option value="Talagang">Talagang</option>
                  <option value="Taxila">Taxila</option>
                  <option value="Toba Tek Singh">Toba Tek Singh</option>
                  <option value="Vehari">Vehari</option>
                  <option value="Wah Cantonment">Wah Cantonment</option>
                  <option value="Wazirabad">Wazirabad</option>
                  <!-- <option value="" disabled>Sindh Cities</option> -->
                  <option value="Badin">Badin</option>
                  <option value="Bhirkan">Bhirkan</option>
                  <option value="Rajo Khanani">Rajo Khanani</option>
                  <option value="Chak">Chak</option>
                  <option value="Dadu">Dadu</option>
                  <option value="Digri">Digri</option>
                  <option value="Diplo">Diplo</option>
                  <option value="Dokri">Dokri</option>
                  <option value="Ghotki">Ghotki</option>
                  <option value="Haala">Haala</option>
                  <option value="Hyderabad">Hyderabad</option>
                  <option value="Islamkot">Islamkot</option>
                  <option value="Jacobabad">Jacobabad</option>
                  <option value="Jamshoro">Jamshoro</option>
                  <option value="Jungshahi">Jungshahi</option>
                  <option value="Kandhkot">Kandhkot</option>
                  <option value="Kandiaro">Kandiaro</option>
                  <option value="Karachi">Karachi</option>
                  <option value="Kashmore">Kashmore</option>
                  <option value="Keti Bandar">Keti Bandar</option>
                  <option value="Khairpur">Khairpur</option>
                  <option value="Kotri">Kotri</option>
                  <option value="Larkana">Larkana</option>
                  <option value="Matiari">Matiari</option>
                  <option value="Mehar">Mehar</option>
                  <option value="Mirpur Khas">Mirpur Khas</option>
                  <option value="Mithani">Mithani</option>
                  <option value="Mithi">Mithi</option>
                  <option value="Mehrabpur">Mehrabpur</option>
                  <option value="Moro">Moro</option>
                  <option value="Nagarparkar">Nagarparkar</option>
                  <option value="Naudero">Naudero</option>
                  <option value="Naushahro Feroze">Naushahro Feroze</option>
                  <option value="Naushara">Naushara</option>
                  <option value="Nawabshah">Nawabshah</option>
                  <option value="Nazimabad">Nazimabad</option>
                  <option value="Qambar">Qambar</option>
                  <option value="Qasimabad">Qasimabad</option>
                  <option value="Ranipur">Ranipur</option>
                  <option value="Ratodero">Ratodero</option>
                  <option value="Rohri">Rohri</option>
                  <option value="Sakrand">Sakrand</option>
                  <option value="Sanghar">Sanghar</option>
                  <option value="Shahbandar">Shahbandar</option>
                  <option value="Shahdadkot">Shahdadkot</option>
                  <option value="Shahdadpur">Shahdadpur</option>
                  <option value="Shahpur Chakar">Shahpur Chakar</option>
                  <option value="Shikarpaur">Shikarpaur</option>
                  <option value="Sukkur">Sukkur</option>
                  <option value="Tangwani">Tangwani</option>
                  <option value="Tando Adam Khan">Tando Adam Khan</option>
                  <option value="Tando Allahyar">Tando Allahyar</option>
                  <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                  <option value="Thatta">Thatta</option>
                  <option value="Umerkot">Umerkot</option>
                  <option value="Warah">Warah</option>
                  <!-- <option value="" disabled>Khyber Cities</option> -->
                  <option value="Abbottabad">Abbottabad</option>
                  <option value="Adezai">Adezai</option>
                  <option value="Alpuri">Alpuri</option>
                  <option value="Akora Khattak">Akora Khattak</option>
                  <option value="Ayubia">Ayubia</option>
                  <option value="Banda Daud Shah">Banda Daud Shah</option>
                  <option value="Bannu">Bannu</option>
                  <option value="Batkhela">Batkhela</option>
                  <option value="Battagram">Battagram</option>
                  <option value="Birote">Birote</option>
                  <option value="Chakdara">Chakdara</option>
                  <option value="Charsadda">Charsadda</option>
                  <option value="Chitral">Chitral</option>
                  <option value="Daggar">Daggar</option>
                  <option value="Dargai">Dargai</option>
                  <option value="Darya Khan">Darya Khan</option>
                  <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                  <option value="Doaba">Doaba</option>
                  <option value="Dir">Dir</option>
                  <option value="Drosh">Drosh</option>
                  <option value="Hangu">Hangu</option>
                  <option value="Haripur">Haripur</option>
                  <option value="Karak">Karak</option>
                  <option value="Kohat">Kohat</option>
                  <option value="Kulachi">Kulachi</option>
                  <option value="Lakki Marwat">Lakki Marwat</option>
                  <option value="Latamber">Latamber</option>
                  <option value="Madyan">Madyan</option>
                  <option value="Mansehra">Mansehra</option>
                  <option value="Mardan">Mardan</option>
                  <option value="Mastuj">Mastuj</option>
                  <option value="Mingora">Mingora</option>
                  <option value="Nowshera">Nowshera</option>
                  <option value="Paharpur">Paharpur</option>
                  <option value="Pabbi">Pabbi</option>
                  <option value="Peshawar">Peshawar</option>
                  <option value="Saidu Sharif">Saidu Sharif</option>
                  <option value="Shorkot">Shorkot</option>
                  <option value="Shewa Adda">Shewa Adda</option>
                  <option value="Swabi">Swabi</option>
                  <option value="Swat">Swat</option>
                  <option value="Tangi">Tangi</option>
                  <option value="Tank">Tank</option>
                  <option value="Thall">Thall</option>
                  <option value="Timergara">Timergara</option>
                  <option value="Tordher">Tordher</option>
                  <!-- <option value="" disabled>Balochistan Cities</option> -->
                  <option value="Awaran">Awaran</option>
                  <option value="Barkhan">Barkhan</option>
                  <option value="Chagai">Chagai</option>
                  <option value="Dera Bugti">Dera Bugti</option>
                  <option value="Gwadar">Gwadar</option>
                  <option value="Harnai">Harnai</option>
                  <option value="Jafarabad">Jafarabad</option>
                  <option value="Jhal Magsi">Jhal Magsi</option>
                  <option value="Kacchi">Kacchi</option>
                  <option value="Kalat">Kalat</option>
                  <option value="Kech">Kech</option>
                  <option value="Kharan">Kharan</option>
                  <option value="Khuzdar">Khuzdar</option>
                  <option value="Killa Abdullah">Killa Abdullah</option>
                  <option value="Killa Saifullah">Killa Saifullah</option>
                  <option value="Kohlu">Kohlu</option>
                  <option value="Lasbela">Lasbela</option>
                  <option value="Lehri">Lehri</option>
                  <option value="Loralai">Loralai</option>
                  <option value="Mastung">Mastung</option>
                  <option value="Musakhel">Musakhel</option>
                  <option value="Nasirabad">Nasirabad</option>
                  <option value="Nushki">Nushki</option>
                  <option value="Panjgur">Panjgur</option>
                  <option value="Pishin Valley">Pishin Valley</option>
                  <option value="Quetta">Quetta</option>
                  <option value="Sherani">Sherani</option>
                  <option value="Sibi">Sibi</option>
                  <option value="Sohbatpur">Sohbatpur</option>
                  <option value="Washuk">Washuk</option>
                  <option value="Zhob">Zhob</option>
                  <option value="Ziarat">Ziarat</option>
                </select>
                </div>
              </div>
                          
              <span style="color:#337ab7;font-size:2em;margin-left:15px;">Agency Contact Details</span>
              
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="cell" class="form-label">Company Cell:</label>
                  <input type="number" class="form-control" id="cell" placeholder="Enter Company Cell" name="companycell" required/>
                </div>
                <div class="col-sm-6">
                  <label for="address" class="form-label">Company Address:</label>
                  <textarea type="text" class="form-control" id="address" placeholder="Enter Company Address" name="companyaddress" required></textarea>
                </div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-6">
                  <label for="file" class="form-label">User Image:</label>
                  <input type="file" class="form-control" id="file" name="file" />
                </div>
                <div class="col-sm-6">
                  <label for="file" class="form-label">Company Logo:</label>
                  <input type="file" class="form-control" id="file" name="companyfile" required/>
                </div>
              </div>
              
              <div class="form-group">        
                <div class="col-sm-12">
                  <div class="checkbox">
                    <label><input type="checkbox" name="alerts"> Subscribe with us for alerts on your mobile?</label>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="checkbox">
                    <label><input type="checkbox" name="remember"> I have read and agree to rise land Terms & Conditions</label>
                  </div>
                </div>
              </div>
              
              <div class="form-group">        
                <div class="col-sm-12">
                  <button type="submit" class="btn btn-primary" name="agent-signup">Create Account</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div><!--/panel panel-primary col-md-7 col-md-offset-1-->

    </div><!--/col-md-12-->
  
  </div><!--/row-->

</div><!--/container-->

<!---Footer--->
<?php include('include/footer.php'); ?>