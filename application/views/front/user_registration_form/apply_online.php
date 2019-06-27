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
                <div class="image" > <img src ="<?php echo base_url()?>templates/front/fonts/login/form.png" style="width: 196px;"/>
                  <input id="filebutton"name="file" class="input-file margin" type="file">
                </div>
              </div>
              <div class="col-md-9 " style="">
                <!-- Text input-->
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="first_name">First Name</label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['name']?>" name="first_name" type="text" placeholder="first name" class="form-control input-md required" title="Please enter your username (at least 3 characters)"  minlength="3">
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
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="father_name">Father First Name</label>
                        <div class="col-md-7">
                          <input id="textinput" value="<?php echo $p_detail['father_first_name']?>" name="father_name" type="text" placeholder="Father First name" class="form-control input-md" >
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
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="contactno">Contact Number</label>
                        <div class="col-md-7">
                          <input id="textinput" value="<?php echo $p_detail['contact_no']?>" name="contactno" type="text" placeholder="Contact Number" class="form-control input-md" >
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
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Gender">Gender</label>
                        <div class="col-md-7">
                        <select class="form-control" value="<?php echo $p_detail['gender']?>" name= "gender" id="gender">
                                <option value="">--- Select ---</option>
                                <option value="single">Male</option>
                                <option value="married">Female</option>
                               </select>
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Marital Status">Marital Status</label>
                        <div class="col-md-7">
                          <select class="form-control" value="<?php echo $p_detail['merital_status']?>" data-val="true"  id="Gender" name="merital">
                            <option value="">--- Select ---</option>
                            <option value="single">Single</option>
                            <option value="married">Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widow">Widow/Widower</option>
                            <option value="separated">Separated</option>
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
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="date">Date of Birth </label>
                        <div class="col-md-7">
                          <input type="date" id="date" name="dob " value="<?php echo $p_detail['d_o_b']?>" type="text" placeholder="Date of Birth " class="form-control input-md" >
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="CNIC/Form-B No">CNIC/Form-B No</label>
                        <div class="col-md-7">
                          <input type="number" maxlength="15" value="<?php echo $p_detail['cnic']?>" id="number" name="CNIC" type="number" placeholder="*****-*******-*" class="form-control input-md" >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row2">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="date">Country </label>
                        <div class="col-md-7">
                        <input  id="country" maxlength="40" name="country" size="20" type="text"  class="form-control input-md" />
                        </div>
                      </div>
                    </div>
                    <!-- Text input-->
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Nationality ">Nationality </label>
                        <div class="col-md-7">
                        <select class="form-control"  value="<?php echo $p_detail['nationality']?>" name= "nationality_id" id="nationality_id">
                            <option value="">-- select --</option>
                            <option value="1">Afghanistan</option>
                            <option value="2">Albania</option>
                            <option value="3">Algeria</option>
                            <option value="4">American Samoa</option>
                            <option value="5">Andorra</option>
                            <option value="6">Angola</option>
                            <option value="7">Anguilla</option>
                            <option value="8">Antarctica</option>
                            <option value="9">Antigua And Barbuda</option>
                            <option value="10">Argentina</option>
                            <option value="11">Armenia</option>
                            <option value="12">Aruba</option>
                            <option value="13">Australia</option>
                            <option value="14">Austria</option>
                            <option value="15">Azerbaijan</option>
                            <option value="16">Bahamas The</option>
                            <option value="17">Bahrain</option>
                            <option value="18">Bangladesh</option>
                            <option value="19">Barbados</option>
                            <option value="20">Belarus</option>
                            <option value="21">Belgium</option>
                            <option value="22">Belize</option>
                            <option value="23">Benin</option>
                            <option value="24">Bermuda</option>
                            <option value="25">Bhutan</option>
                            <option value="26">Bolivia</option>
                            <option value="27">Bosnia and Herzegovina</option>
                            <option value="28">Botswana</option>
                            <option value="29">Bouvet Island</option>
                            <option value="30">Brazil</option>
                            <option value="31">British Indian Ocean Territory</option>
                            <option value="32">Brunei</option>
                            <option value="33">Bulgaria</option>
                            <option value="34">Burkina Faso</option>
                            <option value="35">Burundi</option>
                            <option value="36">Cambodia</option>
                            <option value="37">Cameroon</option>
                            <option value="38">Canada</option>
                            <option value="39">Cape Verde</option>
                            <option value="40">Cayman Islands</option>
                            <option value="41">Central African Republic</option>
                            <option value="42">Chad</option>
                            <option value="43">Chile</option>
                            <option value="44">China</option>
                            <option value="45">Christmas Island</option>
                            <option value="46">Cocos (Keeling) Islands</option>
                            <option value="47">Colombia</option>
                            <option value="48">Comoros</option>
                            <option value="49">Republic Of The Congo</option>
                            <option value="50">Democratic Republic Of The Congo</option>
                            <option value="51">Cook Islands</option>
                            <option value="52">Costa Rica</option>
                            <option value="53">Cote D'Ivoire (Ivory Coast)</option>
                            <option value="54">Croatia (Hrvatska)</option>
                            <option value="55">Cuba</option>
                            <option value="56">Cyprus</option>
                            <option value="57">Czech Republic</option>
                            <option value="58">Denmark</option>
                            <option value="59">Djibouti</option>
                            <option value="60">Dominica</option>
                            <option value="61">Dominican Republic</option>
                            <option value="62">East Timor</option>
                            <option value="63">Ecuador</option>
                            <option value="64">Egypt</option>
                            <option value="65">El Salvador</option>
                            <option value="66">Equatorial Guinea</option>
                            <option value="67">Eritrea</option>
                            <option value="68">Estonia</option>
                            <option value="69">Ethiopia</option>
                            <option value="70">External Territories of Australia</option>
                            <option value="71">Falkland Islands</option>
                            <option value="72">Faroe Islands</option>
                            <option value="73">Fiji Islands</option>
                            <option value="74">Finland</option>
                            <option value="75">France</option>
                            <option value="76">French Guiana</option>
                            <option value="77">French Polynesia</option>
                            <option value="78">French Southern Territories</option>
                            <option value="79">Gabon</option>
                            <option value="80">Gambia The</option>
                            <option value="81">Georgia</option>
                            <option value="82">Germany</option>
                            <option value="83">Ghana</option>
                            <option value="84">Gibraltar</option>
                            <option value="85">Greece</option>
                            <option value="86">Greenland</option>
                            <option value="87">Grenada</option>
                            <option value="88">Guadeloupe</option>
                            <option value="89">Guam</option>
                            <option value="90">Guatemala</option>
                            <option value="91">Guernsey and Alderney</option>
                            <option value="92">Guinea</option>
                            <option value="93">Guinea-Bissau</option>
                            <option value="94">Guyana</option>
                            <option value="95">Haiti</option>
                            <option value="96">Heard and McDonald Islands</option>
                            <option value="97">Honduras</option>
                            <option value="98">Hong Kong S.A.R.</option>
                            <option value="99">Hungary</option>
                            <option value="100">Iceland</option>
                            <option value="101">India</option>
                            <option value="102">Indonesia</option>
                            <option value="103">Iran</option>
                            <option value="104">Iraq</option>
                            <option value="105">Ireland</option>
                            <option value="106">Israel</option>
                            <option value="107">Italy</option>
                            <option value="108">Jamaica</option>
                            <option value="109">Japan</option>
                            <option value="110">Jersey</option>
                            <option value="111">Jordan</option>
                            <option value="112">Kazakhstan</option>
                            <option value="113">Kenya</option>
                            <option value="114">Kiribati</option>
                            <option value="115">Korea North</option>
                            <option value="116">Korea South</option>
                            <option value="117">Kuwait</option>
                            <option value="118">Kyrgyzstan</option>
                            <option value="119">Laos</option>
                            <option value="120">Latvia</option>
                            <option value="121">Lebanon</option>
                            <option value="122">Lesotho</option>
                            <option value="123">Liberia</option>
                            <option value="124">Libya</option>
                            <option value="125">Liechtenstein</option>
                            <option value="126">Lithuania</option>
                            <option value="127">Luxembourg</option>
                            <option value="128">Macau S.A.R.</option>
                            <option value="129">Macedonia</option>
                            <option value="130">Madagascar</option>
                            <option value="131">Malawi</option>
                            <option value="132">Malaysia</option>
                            <option value="133">Maldives</option>
                            <option value="134">Mali</option>
                            <option value="135">Malta</option>
                            <option value="136">Man (Isle of)</option>
                            <option value="137">Marshall Islands</option>
                            <option value="138">Martinique</option>
                            <option value="139">Mauritania</option>
                            <option value="140">Mauritius</option>
                            <option value="141">Mayotte</option>
                            <option value="142">Mexico</option>
                            <option value="143">Micronesia</option>
                            <option value="144">Moldova</option>
                            <option value="145">Monaco</option>
                            <option value="146">Mongolia</option>
                            <option value="147">Montserrat</option>
                            <option value="148">Morocco</option>
                            <option value="149">Mozambique</option>
                            <option value="150">Myanmar</option>
                            <option value="151">Namibia</option>
                            <option value="152">Nauru</option>
                            <option value="153">Nepal</option>
                            <option value="154">Netherlands Antilles</option>
                            <option value="155">Netherlands The</option>
                            <option value="156">New Caledonia</option>
                            <option value="157">New Zealand</option>
                            <option value="158">Nicaragua</option>
                            <option value="159">Niger</option>
                            <option value="160">Nigeria</option>
                            <option value="161">Niue</option>
                            <option value="162">Norfolk Island</option>
                            <option value="163">Northern Mariana Islands</option>
                            <option value="164">Norway</option>
                            <option value="165">Oman</option>
                            <option value="166">Pakistan</option>
                            <option value="167">Palau</option>
                            <option value="168">Palestinian Territory Occupied</option>
                            <option value="169">Panama</option>
                            <option value="170">Papua new Guinea</option>
                            <option value="171">Paraguay</option>
                            <option value="172">Peru</option>
                            <option value="173">Philippines</option>
                            <option value="174">Pitcairn Island</option>
                            <option value="175">Poland</option>
                            <option value="176">Portugal</option>
                            <option value="177">Puerto Rico</option>
                            <option value="178">Qatar</option>
                            <option value="179">Reunion</option>
                            <option value="180">Romania</option>
                            <option value="181">Russia</option>
                            <option value="182">Rwanda</option>
                            <option value="183">Saint Helena</option>
                            <option value="184">Saint Kitts And Nevis</option>
                            <option value="185">Saint Lucia</option>
                            <option value="186">Saint Pierre and Miquelon</option>
                            <option value="187">Saint Vincent And The Grenadines</option>
                            <option value="188">Samoa</option>
                            <option value="189">San Marino</option>
                            <option value="190">Sao Tome and Principe</option>
                            <option value="191">Saudi Arabia</option>
                            <option value="192">Senegal</option>
                            <option value="193">Serbia</option>
                            <option value="194">Seychelles</option>
                            <option value="195">Sierra Leone</option>
                            <option value="196">Singapore</option>
                            <option value="197">Slovakia</option>
                            <option value="198">Slovenia</option>
                            <option value="199">Smaller Territories of the UK</option>
                            <option value="200">Solomon Islands</option>
                            <option value="201">Somalia</option>
                            <option value="202">South Africa</option>
                            <option value="203">South Georgia</option>
                            <option value="204">South Sudan</option>
                            <option value="205">Spain</option>
                            <option value="206">Sri Lanka</option>
                            <option value="207">Sudan</option>
                            <option value="208">Suriname</option>
                            <option value="209">Svalbard And Jan Mayen Islands</option>
                            <option value="210">Swaziland</option>
                            <option value="211">Sweden</option>
                            <option value="212">Switzerland</option>
                            <option value="213">Syria</option>
                            <option value="214">Taiwan</option>
                            <option value="215">Tajikistan</option>
                            <option value="216">Tanzania</option>
                            <option value="217">Thailand</option>
                            <option value="218">Togo</option>
                            <option value="219">Tokelau</option>
                            <option value="220">Tonga</option>
                            <option value="221">Trinidad And Tobago</option>
                            <option value="222">Tunisia</option>
                            <option value="223">Turkey</option>
                            <option value="224">Turkmenistan</option>
                            <option value="225">Turks And Caicos Islands</option>
                            <option value="226">Tuvalu</option>
                            <option value="227">Uganda</option>
                            <option value="228">Ukraine</option>
                            <option value="229">United Arab Emirates</option>
                            <option value="230">United Kingdom</option>
                            <option value="231">United States</option>
                            <option value="232">United States Minor Outlying Islands</option>
                            <option value="233">Uruguay</option>
                            <option value="234">Uzbekistan</option>
                            <option value="235">Vanuatu</option>
                            <option value="236">Vatican City State (Holy See)</option>
                            <option value="237">Venezuela</option>
                            <option value="238">Vietnam</option>
                            <option value="239">Virgin Islands (British)</option>
                            <option value="240">Virgin Islands (US)</option>
                            <option value="241">Wallis And Futuna Islands</option>
                            <option value="242">Western Sahara</option>
                            <option value="243">Yemen</option>
                            <option value="244">Yugoslavia</option>
                            <option value="245">Zambia</option>
                            <option value="246">Zimbabwe</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="State/Province ">State/Province </label>
                          <div class="col-md-7">
                            <select class="form-control" value="<?php echo $p_detail['state']?>"  id="state" name="state">
                              <option value="">--- Select ---</option>
                              <option value="1">province</option>
                              <option value="2">province</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <!-- Text input-->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="city">City</label>
                          <div class="col-md-7">
                            <select class="form-control" value="<?php echo $p_detail['city']?>"  id="city" name="city">
                              <option value="">--- Select ---</option>
                              <option value="1">city</option>
                              <option value="2">city</option>
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
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Street/Town">Street/Town</label>
                          <div class="col-md-7">
                            <input id="textinput" name="street" value="<?php echo $p_detail['street']?>"  type="text" placeholder="Street/Town" class="form-control input-md" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="City ">City </label>
                          <div class="col-md-7">
                            <input id="textinput" name="p_city" type="text" value="<?php echo $p_detail['p_city']?>"  placeholder="City" class="form-control input-md" >
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
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="Street/Town">Street/Town</label>
                          <div class="col-md-7">
                            <input id="textinput" value="<?php echo $p_detail['t_street']?>"  name="t_street" type="text" placeholder="Street/Town" class="form-control input-md" >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row2">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="City ">City </label>
                          <div class="col-md-7">
                            <input id="textinput" value="<?php echo $p_detail['t_city']?>"  name="t_city" type="text" placeholder="City" class="form-control input-md" >
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
                        <div class="form-group">
                          <label class="col-md-5 control-label" style="margin-top: 11px; text-align:right" for="email">Email</label>
                          <div class="col-md-7">
                            <input type ="email" id="textinput" value="<?php echo $p_detail['t_mail']?>" name="email" type="text" placeholder="Email" class="form-control input-md" >
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
                  <div class="form-group">
                    <label class="col-md-2 control-label" style="margin-top: 11px;  " for="Relation Type ">Relation Type </label>
                    <div class="col-md-10">
                      <select class="form-control" value="<?php echo $p_detail['relation_type']?>"   id="relationship" name="relationship">
                        <option value="">--- Select ---</option>
                        <option <?php if($p_detail['relation_type'] ==  "Parent"){ echo "selected"; } ?>  value="Parent">Parent</option>
                        <option <?php if($p_detail['relation_type'] ==  "Guardian"){ echo "selected"; } ?> value="Guardian">Guardian</option>
                      </select>
                    </div>
                  </div>
                </div>
                <!-- Text input-->
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; " for="Full Name ">Full Name </label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['p_name']?>"  name="full_name" type="text" placeholder="Full Name " class="form-control input-md" >
                      </div>
                    </div>
                  </div>
                  <!-- Text input-->
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; " for="CNIC">CNIC</label>
                      <div class="col-md-7">
                        <input type="number" value="<?php echo $p_detail['p_cnic']?>"  maxlength="15" id="number" name="p_CNIC" type="number" placeholder="*****-*******-*" class="form-control input-md" >
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row2">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; " for="contactno">Contact Number</label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['p_contact']?>"  name="contactno " type="text" placeholder="Contact Number" class="form-control input-md" >
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
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px; " for=" Street/Town ">Street/Town </label>
                      <div class="col-md-7">
                        <input id="textinput" value="<?php echo $p_detail['p_street']?>"  name="Street" type="text" placeholder="Street/Town " class="form-control input-md">
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
                    <div class="form-group">
                      <label class="col-md-5 control-label" style="margin-top: 11px;" for="occupation">Occupation </label>
                      <div class="col-md-7">
                        <select class="form-control" value="<?php echo $p_detail['p_occupation']?>" id="Occupation" name="occupation">
                          <option value="">--- Select ---</option>
                          <option value="Business">Business</option>
                          <option value="Employed">Employed</option>
                          <option value="Retired">Retired</option>
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
                      <div class="form-group">
                        <label class="col-md-5 control-label" style="margin-top: 11px;" for="Relation">Relation</label>
                        <div class="col-md-7">
                          <select class="form-control" value="<?php echo $p_detail['p_relation']?>"    id="city" name="relation">
                            <option value="">--- Select ---</option>
                            <option value="brother">brother</option>
                            <option value="Self">Self</option>
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
                          <input id="textinput" value="<?php echo $p_detail['e_relation']?>"  name="e_relation" type="text" placeholder="Relation" class="form-control input-md" >
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
                        <select class="form-control" data-val="true"   id="result" name="result">
                          <option value="0">--- Select ---</option>
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
                          <option value="Male">Q1</option>
                          <option value="Female">Q2</option>
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
                    
                  </div>
                </div>
              </div>
              <div class="row2"> </div>
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

<!-- for input fields https://www.developer-tech.com/news/2019/may/22/huawei-smartphone-os-android-apps/ -->