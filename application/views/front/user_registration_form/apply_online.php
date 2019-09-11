<style>
  .box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);

}

.box {
    box-shadow: 8px 11px 16px 0px rgba(46,61,73,0.15);
    border-radius: 0px 30px 0px 30px;
}
.box.box-primary {
    border-top-color: #3c8dbc;
}

#float
{
  float:right;
}


@media only screen and (max-width: 500px) {
    #float{
        float:none;
        text-align: center;
    }
.margin{
    margin: 0px 0px 0px 58px;
  }
  .row2
{
  margin-top: 0px !important;
}
.pull-right
{
  width: 210px !IMPORTANT;
    margin-bottom: 28px !IMPORTANT;
    margin-right: 61px !IMPORTANT;
}
}
.row2
{
  margin-top: 20px;
}

</style>
<script>
$(document).ready(function(){
    $('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
        localStorage.setItem('activeTab', $(e.target).attr('href'));
    });
    var activeTab = localStorage.getItem('activeTab');
    if(activeTab){
        $('#myTab a[href="' + activeTab + '"]').tab('show');
    }
});
</script>
<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8">
    <ul id="myTab" class="nav nav-tabs mt-30" style="text-align:center;">
      <li class="active"><a href="#tab1" data-toggle="tab"><img src="<?php echo base_url()?>templates/front/fonts/login/personalInfo.png" style="width:50px" /> Personal Info</a></li>
      <li><a class="disabled" href="#tab2" data-toggle="tab"><img src="<?php echo base_url()?>templates/front/fonts/login/Academic.png"  style="width:50px"/> Acedemics</a></li>
      <li><a class="disabled" href="#tab3" data-toggle="tab"><img src="<?php echo base_url()?>templates/front/fonts/login/Term.png"  style="width:50px"/> Program Priority</a></li>
      <li><a class="disabled" href="#tab4" data-toggle="tab"><img src="<?php echo base_url()?>templates/front/fonts/login/Term.png"  style="width:50px"/> Challan Form</a></li>
    </ul>
  </div>
  <div class="col-md-2"></div>
</div>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade in active" id="tab1">
    <div class="result1"></div>
    <?php
      $login = $this->session->userdata('loggin');
  $detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
   $id=$detail[0]['student_id'];
    $this->db->where('student_id', $id);
    $personal_detail = $this->db->get('registration_form')->result_array();
     foreach($personal_detail as $p_detail)
     {

     ?>
    <form action="<?php echo base_url() ?>home/registration_form/personal_info" method="POST" class="cmxform" id="form">
      <div class="container">
        <h4 class="line-bottom-theme-colored-2 mb-15">Please Enter Complete Information</h4>
        <div class="box box-primary pt-20 mb-15 " style="width:100%; height: 100%;" >
          <legend>
          <h2 style="text-align:center">Personal Information</h2>
          </legend>
          <div class="row">
            <div class="container">
              <div class="col-md-3" id="float">
              

              <?php 
    $login = $this->session->userdata('loggin');
    $detail = $this->db->get_where('students', array('email'=>$login['email']))->result_array();
            $id=$detail[0]['student_id'];
           $this->db->where('student_id',$id); 
  foreach($detail as $det){
   
  ?>
  <?php if($det['photo']==""){ ?>
    <div class="image" > <img src ="<?php echo base_url()?>templates/front/fonts/login/form.png" style="width: 196px;"/>
    <?php }
  ?>
  <?php if($det['photo']!=""){ ?>
    <div class="image" > <img src ="<?php echo base_url()?>uploads/student_profile/<?php echo $det['photo']?>" style="width: 196px;"/>
    <?php }
  ?>
   <h6>Upload a photo with  <span class="color" style="color:red;">Blue Background<span>.</h6>
    <input type="file" name="photo" class="text-center center-block file-upload">
  </div>
  <?php
  }
  ?>



               
              </div>
              <div class="col-md-9 " style="">
                <!-- Text input-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group required">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="first_name">First Name</label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['name']?>" name="first_name" type="text" placeholder="first name" class="form-control input-md required" title="Please enter your username (at least 3 characters)"  minlength="4">
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="last_name">Last Name</label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['last_name']?>" name="last_name" type="text" placeholder="Last Name" class="form-control input-md">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group required">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="father_name">Father First Name</label>
                        <div class="col-md-7">
                          <input id="textinput" value="<?php echo $p_detail['father_first_name']?>" name="father_name" type="text" placeholder="Father First name" class="form-control input-md required"  title="Please enter your Father Name (at least 4 characters)"  minlength="4">
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="father_namel">Father Last Name</label>
                        <div class="col-md-7">
                          <input id="textinput" value="<?php echo $p_detail['father_last_name']?>" name="father_namel" type="text" placeholder="Father Last Name" class="form-control input-md" >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group required">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="contactno">Contact Number</label>
                        <div class="col-md-7">
                          <input id="textinput" value="<?php echo $p_detail['contact_no']?>" name="contactno" type="number" placeholder="Contact Number" class="form-control input-md required"  title="Please enter your Contact No (at least 11 characters)"  maxlength="11">
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="landline">Landline</label>
                        <div class="col-md-7">
                          <input id="textinput" value="<?php echo $p_detail['landline']?>" name="landline" type="text" placeholder="Landline" class="form-control input-md">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group required">
                        <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="Gender" title="Please Select gender">Gender</label>
                        <div class="col-md-7">
                        
                        <select class="form-control input-md required" value="<?php echo $p_detail['gender']?>" name= "gender" id="gender">
                                <option value="">--- Select ---</option>
                                <option <?php if($p_detail['gender'] ==  "Male"){ echo "selected"; } ?>  value="Male">Male</option>
                                <option <?php if($p_detail['gender'] ==  "Female"){ echo "selected"; } ?>  value="Female">Female</option>
                               </select>
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group required">
                        <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="Marital Status">Marital Status</label>
                        <div class="col-md-7">
                          <select class="form-control required" value="<?php echo $p_detail['merital_status']?>" data-val="true"  id="Gender" name="merital" title="Please select merital status">
                            <option value="">--- Select ---</option>
                            <option <?php if($p_detail['merital_status'] ==  "single"){ echo "selected"; } ?>  value="single">Single</option>
                            <option <?php if($p_detail['merital_status'] ==  "married"){ echo "selected"; } ?>  value="married">Married</option>
                            <option  <?php if($p_detail['merital_status'] ==  "divorced"){ echo "selected"; } ?>  value="divorced">Divorced</option>
                            <option  <?php if($p_detail['merital_status'] ==  "widow"){ echo "selected"; } ?> value="widow">Widow/Widower</option>
                            <option <?php if($p_detail['merital_status'] ==  "Separated"){ echo "selected"; } ?>  value="separated">Separated</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group required">
                        <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="date">Date of Birth</label>
                        <div class="col-md-7">
                          <input type='date' min='1899-01-01' max='2000-01-01' id="date" name="dob"  value="<?php echo $p_detail['d_o_b']?>" type="text" placeholder="Date of Birth "  class="form-control input-md required" title="Please enter correct date of Birth" >
                        
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group required">
                        <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="CNIC/Form-B No">CNIC/Form-B No</label>
                        <div class="col-md-7">
                          <input type="number" maxlength="13" value="<?php echo $p_detail['cnic']?>" id="number" name="CNIC" type="number" placeholder="*****-*******-*" class="form-control input-md" title="Please enter correct CNIC number" >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group required">
                        <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="date">Country </label>
                        <div class="col-md-7">
                        <input  id="country"  name="country" value="<?php echo $p_detail['country']; ?>"  size="20" type="text"  class="form-control input-md required" title="Please select a country"/>
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group required">
                        <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="Nationality " title="Nationality is required">Nationality </label>
                        <div class="col-md-7">
                        <select class="form-control required"  value="<?php echo $p_detail['nationality']?>" name= "nationality_id" id="nationality_id">
             <option value="-1">Select Country</option><option value="Afghanistan">Afghanistan</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antartica">Antartica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier Island">Ashmore and Cartier Island</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Brazil">Brazil</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d'Ivoire">Cote d'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czeck Republic">Czeck Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso Islands">Glorioso Islands</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Howland Island">Howland Island</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Ireland, Northern">Ireland, Northern</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jarvis Island">Jarvis Island</option><option value="Jersey">Jersey</option><option value="Johnston Atoll">Johnston Atoll</option><option value="Jordan">Jordan</option><option value="Juan de Nova Island">Juan de Nova Island</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Man, Isle of">Man, Isle of</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Midway Islands">Midway Islands</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcaim Islands">Pitcaim Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romainia">Romainia</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Scotland">Scotland</option><option value="Senegal">Senegal</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option><option value="Spain">Spain</option><option value="Spratly Islands">Spratly Islands</option><option value="Sri Lanka">Sri Lanka</option>
             <option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Tobago">Tobago</option><option value="Toga">Toga</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad">Trinidad</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="Uruguay">Uruguay</option><option value="USA">USA</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wales">Wales</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Yugoslavia">Yugoslavia</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
             </select>
                         
                          <script>
                          
$(document).ready(function(){
  $('select[name="nationality_id"] option[value="<?php echo $p_detail['nationality'] ?>"]').attr('selected','selected');
  $('select[name="country"] option[value="<?php echo $p_detail['country'] ?>"]').attr('selected','selected');
$("#state_select").html('<option value="<?php echo $p_detail['state']; ?>"><?php echo $p_detail['state']; ?></option>');
});
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group required">
                          <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="State/Province " >State/Province </label>
                          <div class="col-md-7">
                          <input  id="state"  name="state" size="20" type="text" title="State is required"/>
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="col-md-6">
                        <div class="form-group required">
                          <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="city" title="">City</label>
                          <div class="col-md-7">
                         
                            <input class="form-control required"  value="<?php echo $p_detail['city']?>" id="city" name="city"  type="text" title="City is required" />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="father_name">Zip Code</label>
                          <div class="col-md-7">
                            <input type="number" id="number" value="<?php echo $p_detail['zip_code']?>"  name="zipcode" type="Zip Code" placeholder="Zip Code" class="form-control input-md" >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6"> </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="row">
                    <div class="col-md-12">
                      <h4 style="text-align:center; color:blue ">Permanent Address</h4>
                    </div>
                  </div>
                  <!-- address Detail -->
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="House No.">House No.</label>
                          <div class="col-md-7">
                            <input id="textinput" name="houseno" value="<?php echo $p_detail['house_no']?>" type="text" placeholder="House No." class="form-control input-md" >
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="col-md-6">
                        <div class="form-group required">
                          <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="Street/Town">Street/Town</label>
                          <div class="col-md-7">
                            <input id="textinput" name="street" value="<?php echo $p_detail['street']?>"  type="text" placeholder="Street/Town" class="form-control input-md" title="Permanent State is required" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group required">
                          <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="City ">City </label>
                          <div class="col-md-7">
                            <input id="textinput" name="p_city" type="text" value="<?php echo $p_detail['p_city']?>"  placeholder="City" class="form-control input-md"  title="Permanent City is required" />
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Nearby City">Nearby City</label>
                          <div class="col-md-7">
                            <input id="textinput" name="ncity" value="<?php echo $p_detail['nearby_city']?>" type="text" placeholder="Nearby City" class="form-control input-md" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="email">Other</label>
                          <div class="col-md-7">
                            <input type ="city" id="textinput" value="<?php echo $p_detail['other']?>"  name="ocity" type="text" placeholder="Other City" class="form-control input-md" >
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="col-md-6"> </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <h4 style="text-align:center; color:blue ">Temporary Address</h4>
                    </div>
                  </div>
                  <!-- Temprary address -->
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="House No.">House No.</label>
                          <div class="col-md-7">
                            <input id="textinput" value="<?php echo $p_detail['t_house']?>" name="t_houseno" type="text" placeholder="House No." class="form-control input-md" >
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="col-md-6">
                        <div class="form-group required">
                          <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="Street/Town">Street/Town</label>
                          <div class="col-md-7">
                            <input id="textinput" value="<?php echo $p_detail['t_street']?>"  name="t_street" type="text" placeholder="Street/Town" class="form-control input-md" title="Temporary town is required" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group required">
                          <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="City ">City </label>
                          <div class="col-md-7">
                            <input id="textinput" value="<?php echo $p_detail['t_city']?>"  name="t_city" type="text" placeholder="City" class="form-control input-md" title="Temporary city is required" >
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Nearby City">Nearby City</label>
                          <div class="col-md-7">
                            <input id="textinput" value="<?php echo $p_detail['t_nearby_city']?>"  name="t_ncity" type="text" placeholder="Nearby City" class="form-control input-md" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group required">
                          <label class="col-md-5 control-label required" style="margin-top: 11px; text-align:right" for="email">Email</label>
                          <div class="col-md-7">
                            <input type ="email" id="textinput" value="<?php echo $p_detail['t_mail']?>" name="email" type="text" placeholder="Email" class="form-control input-md" title="Temporary Email is required" >
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="col-md-6"> </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group" style="margin-top: 40px;">
                    <div class="col-sm-offset-2 col-sm-7"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h4 class="line-bottom-theme-colored-2 mb-15">Please Enter Complete Information</h4>
        <div class="box box-primary pt-20 mb-15 " style="width:100%; height: 100%;" >
          <legend>
          <h2 style="text-align:center">Parent/Guardian Information</h2>
          </legend>
          <div class="row">
            <div class="col-md-1">
              <!-- Spacing left -->
            </div>
            <div class="col-md-10 " style="">
              <!-- Text input-->
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group required">
                    <label class="col-md-2 control-label required" style="margin-top: 11px;  " for="Relation Type " title="This field is required">Relation Type </label>
                    <div class="col-md-10">
                          <select id="relationship" name = "relationship" class="form-control" onchange="ChangeCarList()"> 
                            <option value="">-- Select --</option> 
                            <option  value="parent" <?php if($p_detail['relation_type'] == "parent"){ echo 'selected="selected"'; } ?>>Parent</option> 
                            <option  value="guardian" <?php if($p_detail['relation_type'] == "guardian"){ echo 'selected="selected"'; } ?>>Guardian</option> 
                            
                          </select> 
                      
                    </div>
                  </div>
                </div>
                <!-- Text input-->
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group required">
                      <label class="col-md-5 control-label required" style="margin-top: 11px; " for="Full Name ">Full Name </label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['p_name']?>"  name="full_name" type="text" placeholder="Full Name " class="form-control input-md" title="This field is required" />
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; " for="CNIC">CNIC</label>
                      <div class="col-md-7">
                        <input type="number" value="<?php echo $p_detail['p_cnic']?>"  maxlength="13" id="number" name="p_CNIC" type="number" placeholder="*****-*******-*" class="form-control input-md" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group required">
                      <label class="col-md-5 control-label required" style="margin-top: 11px; " for="contactno">Contact Number</label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['p_contact']?>"  name="contactno " type="text" placeholder="Contact Number" class="form-control input-md required" title="This field is required" >
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; " for="email">Email</label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['p_email']?>"  name="gemail" type="email" placeholder="email" class="form-control input-md">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; " for="House Number">House Number</label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['p_house_no']?>"  name="hno" type="text" placeholder="House Number" class="form-control input-md">
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    <div class="form-group required">
                      <label class="col-md-5 control-label required" style="margin-top: 11px; " for=" Street/Town ">Street/Town </label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['p_street']?>"  name="Street" type="text" placeholder="Street/Town " class="form-control input-md required" title="This field is required"/>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px;" for="City ">City </label>
                      <div class="col-md-7">
                        <input type="text" value="<?php echo $p_detail['parent_city']?>"  id="date" name="gcity"  type="text" placeholder=" City  " class="form-control input-md" >
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; " for="Near by City(Optional)">Near by City(Optional)</label>
                      <div class="col-md-7">
                        <input type="text" value="<?php echo $p_detail['p_nearby_city']?>" id="text" name="gnearcity" placeholder="Near by City(Optional)" class="form-control input-md" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group required">
                      <label class="col-md-5 control-label required" style="margin-top: 11px;" for="occupation">Occupation </label>
                      <div class="col-md-7">
                        <select class="form-control required " value="<?php echo $p_detail['p_occupation']?>" id="Occupation" name="occupation" title="This field is required">
                        <option value="">Choose Option</option>
                          <option <?php if($p_detail['p_occupation'] ==  "Business"){ echo "selected"; } ?> value="Business">Business</option>
                          <option  <?php if($p_detail['p_occupation'] ==  "Employed"){ echo "selected"; } ?> value="Employed">Employed</option>
                          <option  <?php if($p_detail['p_occupation'] ==  "Retired"){ echo "selected"; } ?> value="Retired">Retired</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px;" for="Organization ">Organization </label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['p_organization']?>"  name="organization" type="text" placeholder="Organization" class="form-control input-md" >
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; " for="designation ">Designation</label>
                        <div class="col-md-7">
                          <input id="textinput" value="<?php echo $p_detail['p_designation']?>" name="designation" type="text" placeholder="designation" class="form-control input-md" >
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group required">
                        <label class="col-md-5 control-label required" style="margin-top: 11px;" for="Relation">Relation</label>
                        <div class="col-md-7">
                       
                          <select id="relation"  class="form-control required " name="relation" title="This Field is required">
                          <option value="">Choose Option</option>
                          <?php
                          if($p_detail['p_relation']){
                            ?>
                            <option value="<?php echo $p_detail['p_relation']; ?>" selected="selected"><?php echo $p_detail['p_relation']; ?> </option>
                            <?php
                          }
                          ?>
                           </select> 
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="row">
                    <div class="col-md-6"> </div>
                  </div>
                </div>
                <!-- Text input-->
                <div class="row">
                  <div class="col-md-12">
                    <h2 style="text-align:center; color:blue ">Emergency Contact Person</h2>
                  </div>
                </div>
                <legend></legend>
                <!-- address Detail -->
                <div class="row2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; " for="Emengency Person">Emengency Person</label>
                        <div class="col-md-7">
                          <input id="textinput" value="<?php echo $p_detail['e_person']?>"  name="emengencyperson" type="text" placeholder="Emengency Person" class="form-control input-md" >
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px;" for="contactno">Contact Number</label>
                        <div class="col-md-7">
                          <input id="textinput"  value="<?php echo $p_detail['e_contact']?>" name="econtactno" type="text" placeholder="Contact Number" class="form-control input-md" >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px;" for="Relation ">Relation </label>
                        <div class="col-md-7">
                         
                          <select id="relationship" name = "e_relation" class="form-control required " id="e_relation"> 
                          <option value="">Choose Option</option>
                            <option <?php if($p_detail['e_relation'] ==  "father"){ echo "selected"; } ?> value="father">Father</option> 
                            <option <?php if($p_detail['e_relation'] ==  "mother"){ echo "selected"; } ?> value="mother">Mother</option> 
                            <option <?php if($p_detail['e_relation'] ==  "guardian"){ echo "selected"; } ?> value="guardian">Guardian</option> 
                            <option <?php if($p_detail['e_relation'] ==  "brother"){ echo "selected"; } ?> value="brother">Brother</option> 
                            <option <?php if($p_detail['e_relation'] ==  "sister"){ echo "selected"; } ?> value="sister">Sister</option> 
                            <option <?php if($p_detail['e_relation'] ==  "Uncle"){ echo "selected"; } ?> value="uncle">Uncle</option> 
                            <option <?php if($p_detail['e_relation'] ==  "Aunty"){ echo "selected"; } ?> value="Aunty">Aunty</option>
                            
                          </select> 
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px;" for=" email">Email</label>
                        <div class="col-md-7">
                          <input id="textinput" value="<?php echo $p_detail['e_mail']?>" name="e_email" type="email" placeholder="email" class="form-control input-md" >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6"></div>
              <div class="col-sm-6">
                <div class="form-group" style="margin-top: 40px;">
                  <div class="col-sm-offset-2 col-sm-7">
                    <input type="submit" id="button1" name="button1" value="Save &amp; Continue" class="btn btn-primary pull-right" style="width: 210px;     margin-bottom: 24px;     margin-right: -30px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <!-- Spacing left -->
          </div>
        </div>
      </div>
      <legend></legend>
    </form>
    <?php
     }
     ?>
  </div>
  <!-- academic detail -->
  <div class="tab-pane " id="tab2">
    <form action="<?php echo base_url() ?>home/registration_form/academic_info" accept-charset="utf-8" method="POST" class="cmxform" enctype="multipart/form-data" id="form2">
    <input type="hidden" name="st_id" value=""/>
      <div class="container">
        <h4 class="line-bottom-theme-colored-2 mb-15">Please Enter Complete Information</h4>
        <div class="box box-primary pt-20 mb-15 " style="width:100%; height: 100%;" >
          <legend>
          <h2 style="text-align:center">Acedemic Details</h2>
          </legend>
          <div class="row">
            <div class="col-md-1">
              <!-- Spacing left -->
            </div>
            <div class="col-md-10 " style="">
              <!-- Text input-->
              <div class="row">
                <!-- Text input-->
              </div>
              <!-- form for adding qualifications -->
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="result">Result Status</label>
                      <div class="col-md-7">
                        <select class="form-control required Error" data-val="true"   id="result" name="result">
                        <option value="">Choose Option</option>
                          <option value="Awaiting">Awaiting</option>
                          <option value="Declared">Declared</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6"> </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="qaulification">Qualification</label>
                      <div class="col-md-7">
                        <select class="form-control" data-val="true"   id="qaulification" name="qaulification">
                          <option value="0">--- Select ---</option>
                          <option value="Matric">Q2</option>
                          <option value="Inter">inter </option>
                          <option value="BSC">BSC</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6"> </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="institute">Institute</label>
                      <div class="col-md-7">
                        
                        <input id="textinput" name="institute" type="text" placeholder="institute" class="form-control input-md required" id="institute">
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6"> </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="passingyear">Passing Year</label>
                      <div class="col-md-7">
                      <input id="textinput" name="passingyear" type="text" placeholder="passing year" class="form-control input-md required" title="Please enter your username (at least 3 characters)"  minlength="3">
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6"> </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="totalmarks">Total Marks</label>
                      <div class="col-md-7">
                        <input id="textinput" name="totalmarks" type="text" placeholder="total marks" value="0" class="form-control input-md" >
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6"> </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="obtainedmarks">Obtained Marks</label>
                      <div class="col-md-7">
                        <input id="textinput" name="obtainedmarks" type="number" placeholder="obtained marks " value="0" class="form-control input-md" >
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6"> </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="obtainedmarks">Percentage</label>
                      <div class="col-md-7">
                        <input id="textinput" name="percentage" type="text" placeholder="Percentage " class="form-control input-md"  readonly>
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                  </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="obtainedmarks">Proof/Certificate</label>
                      <div class="col-md-7">
                        <input type="file" name="proof" class="form-control"  readonly>
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-7 btn-ccc">
                      <input type="button" id="button-update" name="button-update" style="display: none;" value="Update Qaulification" class="btn btn-primary pull-right" style="width: 210px;     margin-bottom: 24px;     margin-right: -30px;">
                    
                        <input type="submit" id="button2" name="button2" value="Add Qaulification" class="btn btn-primary pull-right" style="width: 210px;     margin-bottom: 24px;     margin-right: -30px;">
                       
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row2">
                <legend></legend>
              </div>
            </div>
           <div class="row"></div>


           <div class="container-fluid">
              <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-10">
                  <table class="table table-bordered acca-table" style="text">
                    <thead class="thead-dark">
                      <tr>
                        <th >Result Status</th>
                        <th >Qaulification</th>
                        <th >Board/College</th>
                        <th >Passing Year</th>
                        <th >Total Marks</th>
                        <th >Obtained Marks</th>
                        <th >Percentage</th>
                        <th >Proof</th>
                        <th >Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    
                    $this->db->where('student_id', $student_id);
                     $acc_info = $this->db->get('academics')->result_array();
                     foreach($acc_info as $acc_row){
                    ?>
                      <tr row-id="<?php echo $acc_row['acad_id'] ?>">
                        <th ><?php echo  $acc_row['s_result_status'] ?></th>
                        <td><?php echo  $acc_row['s_qaulification'] ?></td>
                        <td><?php echo  $acc_row['s_institute'] ?></td>
                        <td><?php echo  $acc_row['s_passing_year'] ?></td>
                        <td><?php echo  $acc_row['s_total_marks'] ?></td>
                        <td><?php echo  $acc_row['s_obtained_marks'] ?></td>
                        <td><?php echo  $acc_row['s_percentage'] ?></td>
                        <td><a href="<?php echo base_url(); ?>/uploads/certificates/<?php echo  $acc_row['s_doc_proof']; ?>" target="_blank"><?php echo  $acc_row['s_doc_proof'] ?></a></td>
                        <td><a href="<?php echo base_url(); ?>home/registration_form/acc_edit/<?php echo  $acc_row['acad_id']; ?>"  class="ac_edit" data-id="<?php echo  $acc_row['acad_id']; ?>"><i class="fa fa-edit" ></i></a>
                         <a href="<?php echo base_url(); ?>home/registration_form/acc_delete/<?php echo  $acc_row['acad_id']; ?>" class="ac_delete" data-id="<?php echo  $acc_row['acad_id']; ?>"><i class="fa fa-trash"></i></a></td>
                      </tr>
                      <?php
                     }
                     ?>
                  </table>
                </div>
              </div>
              <div class="col-md-1"></div>
            </div>
            <div class="row">
              <div class="col-sm-6"></div>
              <div class="col-sm-6">
                <div class="form-group" style="margin-top: 40px;">
                  <div class="col-sm-offset-2 col-sm-7">
                    <input type="" id="btnSave2"  value="Save &amp; Continue" class="btn btn-primary pull-right" style="width: 210px;     margin-bottom: 24px;     margin-right: -30px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <!-- Spacing left -->
          </div>
        </div>
      </div>
    </form>
    <legend></legend>
  </div>
  </div>
  <div class="tab-pane " id="tab3">
  <form action="<?php echo base_url() ?>home/registration_form/program_priority" method="POST" class="cmxform" id="form3">
      <div class="container">
        <h4 class="line-bottom-theme-colored-2 mb-15">Please Enter Complete Information</h4>
        <div class="box box-primary pt-20 mb-15 " style="width:100%; height: 100%;" >
          <legend>
          <h2 style="text-align:center">Select Program</h2>
          </legend>
          <div class="row">
            <div class="col-md-1">
              <!-- Spacing left -->
            </div>
            <div class="col-md-10 " style="">
              <!-- Text input-->
              <div class="row">
                <!-- Text input-->
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="sdepartment">Select Faculty</label>
                      <div class="col-md-7">
                        <select class="form-control" data-val="true"   id="Faculty" name="faculty">
                         <?php $data = $this->db->get('faculty')->result_array();
                         foreach($data as $dt){
                         ?>
                            <option value="<?php echo $dt['f_id'] ?>"><?php echo $dt['f_title']?></option>
                       <?php
                       }   ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Department ">Select Department</label>
                      <div class="col-md-7">
                        <select class="form-control" data-val="true"  id="Department" name="department">
                        <?php echo $dep = $this->db->get('department')->result_array();
                         foreach($dep as $de){
                         ?>
                            <option value="<?php echo $de['d_id'] ?>"><?php echo $de['d_name']?></option>
                       <?php
                       }   ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

               <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Program">Select Program</label>
                      <div class="col-md-7">
                        <select class="form-control" data-val="true"   id="Program" name="program">
                        <?php echo $program = $this->db->get('program')->result_array();
                         foreach($program as $pro){
                         ?>
                            <option value="<?php echo $pro['p_id'] ?>"><?php echo $pro['p_name']?></option>
                       <?php
                       }   ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    
                  <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Program">Select Program</label>
                      <div class="col-md-7">
                        <select class="form-control" data-val="true"   id="Program1" name="program1">
                        <?php echo $program = $this->db->get('program')->result_array();
                         foreach($program as $pro){
                         ?>
                            <option value="<?php echo $pro['p_id'] ?>"><?php echo $pro['p_name']?></option>
                       <?php
                       }   ?>
                        </select>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
              <div class="row2">
              
              <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Program">Select Program</label>
                      <div class="col-md-7">
                        <select class="form-control" data-val="true"   id="Program2" name="program2">
                        <?php echo $program = $this->db->get('program')->result_array();
                         foreach($program as $pro){
                         ?>
                            <option value="<?php echo $pro['p_id'] ?>"><?php echo $pro['p_name']?></option>
                       <?php
                       }   ?>
                        </select>
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    
             


                  </div>
                </div>
              
              
               </div>
            </div>
            <div class="row">
              <div class="col-sm-6"></div>
              <div class="col-sm-6">
                <div class="form-group" style="margin-top: 40px;">
                  <div class="col-sm-offset-2 col-sm-7">
                    <input type="submit" id="button_program"  value="Save &amp; Continue" class="btn btn-primary pull-right" style="width: 210px;     margin-bottom: 24px;     margin-right: -30px;">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">
            <!-- Spacing left -->
          </div>
        </div>
      </div>
    </form>
  </div>
  <div class="tab-pane " id="tab4">
    <div class="container">
      <h4 class="line-bottom-theme-colored-2 mb-15">Pay Your Challan Form</h4>
      <div class="box box-primary pt-20 mb-15 " style="width:100%; height: 100%;" >
        <div class="center" style="text-align:center"><p>Thanks For Submitting your Application<br>Your Challan Form Has been Emailed to you!
        Please Check your Email box.<br><br>
        <span class="color" style="color:red;"> Go to your: </span>  <a href="<?php echo base_url()?>home/user_profile"><button type="" class="btn btn-primary " style="font-size: 14px; padding: 8px 22px; line-height: 1.38; background:transparent; color:black; border:3px solid blue;">Profile</button></a><br><br>
      
        <br>USKT - UNIVERSITY OF SIALKOT<br>Regards</p>
        </div>
      </div>
    </div>
  </div>
</div>
</div>


<script src="<?php echo base_url() ?>templates/front/js/form_selector.js"></script>



 

<script>
var carsAndModels = {};
carsAndModels['parent'] = ['Mother', 'Father'];
carsAndModels['guardian'] = ['Brother', 'Sister', 'Uncle', 'Aunty', 'Self', 'Spouse' ];


function ChangeCarList() {
  var carList = document.getElementById("relationship");
  var modelList = document.getElementById("relation");
  var selCar = carList.options[carList.selectedIndex].value;
  while (modelList.options.length) {
    modelList.remove(0);
  }
  var cars = carsAndModels[selCar];
  if (cars) {
    var i;
    for (i = 0; i < cars.length; i++) {
      var car = new Option(cars[i], cars[i]);
      modelList.options.add(car);
    }
  }
} 
</script>

<!-- for input fields https://www.developer-tech.com/news/2019/may/22/huawei-smartphone-os-android-apps/ -->