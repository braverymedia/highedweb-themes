<?php
/**
 * Template Name: Registration Test
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Association
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <main id="main" class="site-main" role="main">
        <?php
        while ( have_posts() ) : the_post();

          if ( association_has_acf_header() ) {
            get_template_part( 'template-parts/custom-header/hero' );
          } else {
            get_template_part( 'template-parts/page/content', 'page' );
          }

        endwhile; // End of the loop.

        ?>
        <div class="row">
      <div class="large-12 columns">
          <form action="/registrations/create" class="form-horizontal" data-abide="" data-hew-update-fees="form" data-hew-update-fees-url="/registrations/feesection" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value="08GxVlW8VZOPpGQpEhbcfLvs7UdmF4LnVvYOAPfAE4m6ilHQZJmadGwQ8xriK7N1CZuBZgrFG90KPmK-wIkYw3h79t01"><div class="validation-summary-valid" data-valmsg-summary="true"><ul><li style="display:none"></li>
          </ul></div><input id="regToken" name="regToken" type="hidden" value="">    <ul class="setlist">
                  <li><label>Conference attendee’s email address:<br><input data-hew-update-fees="true" data-val="true" data-val-email="The Email field does not contain a valid email address." data-val-maxlength="The field Email must be a string or array type with a maximum length of '255'." data-val-maxlength-max="255" data-val-required="The Email field is required." id="Email" name="Email" placeholder="Email address" required="" type="text" value=""></label></li>
                  <li id="email-special-status"></li>
              </ul>
              <ul class="setlist hew-badge-update-watch">
                <li><label>Preferred name <span class="label-note">(as it should appear prominently on badge or in email greeting lines; ex: Alice)</span>:<br><input data-val="true" data-val-maxlength="The field Preferred Name must be a string or array type with a maximum length of '100'." data-val-maxlength-max="100" id="PreferredName" name="PreferredName" placeholder="Preferred name" required="" type="text" value=""></label></li>
              <li><label>Full name <span class="label-note">(as it should appear on name badge or in directory listing; ex: Alice D. Cook)</span>:<br><input data-val="true" data-val-maxlength="The field Full Name must be a string or array type with a maximum length of '100'." data-val-maxlength-max="100" id="ProvidedFullName" name="ProvidedFullName" placeholder="Full name" required="" type="text" value=""></label></li>

                <li><label>Job title:<br><input data-val="true" data-val-maxlength="The field Job Title must be a string or array type with a maximum length of '100'." data-val-maxlength-max="100" data-val-required="The Job Title field is required." id="JobTitle" name="JobTitle" placeholder="Job title" required="" type="text" value=""></label></li>
                <li><label>Institution/organization name:<br><input data-val="true" data-val-maxlength="The field Institution/Organization must be a string or array type with a maximum length of '100'." data-val-maxlength-max="100" data-val-required="The Institution/Organization field is required." id="InstitutionName" name="InstitutionName" placeholder="Institution/organization name" required="" type="text" value=""></label></li>
                <li><label>Twitter username:<br><input data-val="true" data-val-maxlength="The field TwitterHandle must be a string or array type with a maximum length of '100'." data-val-maxlength-max="100" id="TwitterHandle" name="TwitterHandle" placeholder="Twitter username" type="text" value=""></label></li>
              </ul>
              <div>
                  <h3>Your attendee name badge will look like:</h3>
                  <div id="badge" class="badge">
                      <div class="badge-primary">
                          <div id="FirstNameNB" class="badge-firstname">Preferred name</div>
                          <div id="TwitterID" class="badge-twitter">@Twitter handle</div>
                      </div>
                      <div class="badge-secondary">
                          <div id="FullNameNB" class="badge-fullname">Full name</div>
                          <div id="JobTitleNB" class="badge-jobtitle">Job title</div>
                          <div id="InstitutionNameNB" class="badge-institution">Institution/organization name</div>
                      </div>
                  </div>
              </div>
              <h3>Address</h3>
              <ul class="setlist">
                  <li><label>Country:<br><select data-hew-for-country-select="on" data-val="true" data-val-maxlength="The field Country must be a string or array type with a maximum length of '50'." data-val-maxlength-max="50" data-val-required="The Country field is required." id="Country" name="Country" required="" aria-invalid="false"><option value="Albania">Albania</option>
          <option value="Algeria">Algeria</option>
          <option value="American Samoa">American Samoa</option>
          <option value="Angola">Angola</option>
          <option value="Anguilla">Anguilla</option>
          <option value="Antigua">Antigua</option>
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
          <option value="Bonaire (Netherlands Antilles)">Bonaire (Netherlands Antilles)</option>
          <option value="Bosnia Herzegovina">Bosnia Herzegovina</option>
          <option value="Botswana">Botswana</option>
          <option value="Brazil">Brazil</option>
          <option value="British Virgin Islands">British Virgin Islands</option>
          <option value="Brunei">Brunei</option>
          <option value="Bulgaria">Bulgaria</option>
          <option value="Burkina Faso">Burkina Faso</option>
          <option value="Burundi">Burundi</option>
          <option value="Cambodia">Cambodia</option>
          <option value="Cameroon">Cameroon</option>
          <option value="Canada">Canada</option>
          <option value="Cape Verde">Cape Verde</option>
          <option value="Cayman Islands">Cayman Islands</option>
          <option value="Chad">Chad</option>
          <option value="Chile">Chile</option>
          <option value="China">China</option>
          <option value="Colombia">Colombia</option>
          <option value="Congo">Congo</option>
          <option value="Cook Islands">Cook Islands</option>
          <option value="Costa Rica">Costa Rica</option>
          <option value="Croatia">Croatia</option>
          <option value="Curacao (Netherlands Antilles)">Curacao (Netherlands Antilles)</option>
          <option value="Cyprus">Cyprus</option>
          <option value="Czech Republic">Czech Republic</option>
          <option value="Denmark">Denmark</option>
          <option value="Djibouti">Djibouti</option>
          <option value="Dominica">Dominica</option>
          <option value="Dominican Republic">Dominican Republic</option>
          <option value="Ecuador">Ecuador</option>
          <option value="Egypt">Egypt</option>
          <option value="El Salvador">El Salvador</option>
          <option value="Eritrea">Eritrea</option>
          <option value="Estonia">Estonia</option>
          <option value="Ethiopia">Ethiopia</option>
          <option value="Fiji">Fiji</option>
          <option value="Finland">Finland</option>
          <option value="France">France</option>
          <option value="French Guiana">French Guiana</option>
          <option value="French Polynesia">French Polynesia</option>
          <option value="Gabon">Gabon</option>
          <option value="Gambia">Gambia</option>
          <option value="Georgia">Georgia</option>
          <option value="Germany">Germany</option>
          <option value="Ghana">Ghana</option>
          <option value="GibrSecar">GibrSecar</option>
          <option value="Greece">Greece</option>
          <option value="Grenada">Grenada</option>
          <option value="Guadeloupe">Guadeloupe</option>
          <option value="Guam">Guam</option>
          <option value="Guatemala">Guatemala</option>
          <option value="Guinea">Guinea</option>
          <option value="Guinea Bissau">Guinea Bissau</option>
          <option value="Guyana">Guyana</option>
          <option value="Haiti">Haiti</option>
          <option value="Honduras">Honduras</option>
          <option value="Hong Kong">Hong Kong</option>
          <option value="Hungary">Hungary</option>
          <option value="Iceland">Iceland</option>
          <option value="India">India</option>
          <option value="Indonesia">Indonesia</option>
          <option value="Iraq">Iraq</option>
          <option value="Ireland (Republic of)">Ireland (Republic of)</option>
          <option value="Israel">Israel</option>
          <option value="Italy">Italy</option>
          <option value="Ivory Coast">Ivory Coast</option>
          <option value="Jamaica">Jamaica</option>
          <option value="Japan">Japan</option>
          <option value="Jordan">Jordan</option>
          <option value="Kazakhstan">Kazakhstan</option>
          <option value="Kenya">Kenya</option>
          <option value="Kiribati">Kiribati</option>
          <option value="Kosovo">Kosovo</option>
          <option value="Kosrae Island">Kosrae Island</option>
          <option value="Kuwait">Kuwait</option>
          <option value="Kyrgyzstan">Kyrgyzstan</option>
          <option value="Laos">Laos</option>
          <option value="Latvia">Latvia</option>
          <option value="Lebanon">Lebanon</option>
          <option value="Lesotho">Lesotho</option>
          <option value="Liberia">Liberia</option>
          <option value="Libya">Libya</option>
          <option value="Lithuania">Lithuania</option>
          <option value="Luxembourg">Luxembourg</option>
          <option value="Macau">Macau</option>
          <option value="Macedonia (FYROM)">Macedonia (FYROM)</option>
          <option value="Madagascar">Madagascar</option>
          <option value="Malawi">Malawi</option>
          <option value="Malaysia">Malaysia</option>
          <option value="Maldives">Maldives</option>
          <option value="Mali">Mali</option>
          <option value="Marshall Islands">Marshall Islands</option>
          <option value="Martinique">Martinique</option>
          <option value="Mauritania">Mauritania</option>
          <option value="Mauritius">Mauritius</option>
          <option value="Mexico">Mexico</option>
          <option value="Moldova">Moldova</option>
          <option value="Mongolia">Mongolia</option>
          <option value="Montserrat">Montserrat</option>
          <option value="Morocco">Morocco</option>
          <option value="Mozambique">Mozambique</option>
          <option value="MSeca">MSeca</option>
          <option value="Nepal">Nepal</option>
          <option value="Netherlands">Netherlands</option>
          <option value="New Caledonia">New Caledonia</option>
          <option value="New Zealand">New Zealand</option>
          <option value="Nicaragua">Nicaragua</option>
          <option value="Niger">Niger</option>
          <option value="Nigeria">Nigeria</option>
          <option value="Northern Mariana Islands">Northern Mariana Islands</option>
          <option value="Norway">Norway</option>
          <option value="Oman">Oman</option>
          <option value="Pakistan">Pakistan</option>
          <option value="Palau">Palau</option>
          <option value="Panama">Panama</option>
          <option value="Papua New Guinea">Papua New Guinea</option>
          <option value="Paraguay">Paraguay</option>
          <option value="Peru">Peru</option>
          <option value="Philippines">Philippines</option>
          <option value="Poland">Poland</option>
          <option value="Ponape">Ponape</option>
          <option value="Portugal">Portugal</option>
          <option value="Puerto Rico">Puerto Rico</option>
          <option value="Qatar">Qatar</option>
          <option value="Reunion">Reunion</option>
          <option value="Romania">Romania</option>
          <option value="Rota">Rota</option>
          <option value="Russia">Russia</option>
          <option value="Rwanda">Rwanda</option>
          <option value="Saba (Netherlands Antilles)">Saba (Netherlands Antilles)</option>
          <option value="Saipan">Saipan</option>
          <option value="Saudi Arabia">Saudi Arabia</option>
          <option value="Senegal">Senegal</option>
          <option value="Serbia and Montenegro">Serbia and Montenegro</option>
          <option value="Seychelles">Seychelles</option>
          <option value="Singapore">Singapore</option>
          <option value="Slovakia">Slovakia</option>
          <option value="Slovenia">Slovenia</option>
          <option value="Solomon Islands">Solomon Islands</option>
          <option value="South Africa">South Africa</option>
          <option value="South Korea">South Korea</option>
          <option value="Spain">Spain</option>
          <option value="Sri Lanka">Sri Lanka</option>
          <option value="St. Barthelemy">St. Barthelemy</option>
          <option value="St. Croix">St. Croix</option>
          <option value="St. Eustatius (Netherlands Antilles)">St. Eustatius (Netherlands Antilles)</option>
          <option value="St. John">St. John</option>
          <option value="St. Kitts and Nevis">St. Kitts and Nevis</option>
          <option value="St. Lucia">St. Lucia</option>
          <option value="St. Maarten (Netherlands Antilles)">St. Maarten (Netherlands Antilles)</option>
          <option value="St. Thomas">St. Thomas</option>
          <option value="St. Vincent and the Grenadines">St. Vincent and the Grenadines</option>
          <option value="Suriname">Suriname</option>
          <option value="Swaziland">Swaziland</option>
          <option value="Sweden">Sweden</option>
          <option value="Switzerland">Switzerland</option>
          <option value="Syria">Syria</option>
          <option value="Tadjikistan">Tadjikistan</option>
          <option value="Taiwan">Taiwan</option>
          <option value="Tanzania">Tanzania</option>
          <option value="Thailand">Thailand</option>
          <option value="Tinian">Tinian</option>
          <option value="Togo">Togo</option>
          <option value="Tonga">Tonga</option>
          <option value="Tortola">Tortola</option>
          <option value="Trinidad and Tobago">Trinidad and Tobago</option>
          <option value="Truk">Truk</option>
          <option value="Tunisia">Tunisia</option>
          <option value="Turkey">Turkey</option>
          <option value="Turkmenistan">Turkmenistan</option>
          <option value="Turks and Caicos">Turks and Caicos</option>
          <option value="Tuvalu">Tuvalu</option>
          <option value="Uganda">Uganda</option>
          <option value="Ukraine">Ukraine</option>
          <option value="Union Island">Union Island</option>
          <option value="United Arab Emirates">United Arab Emirates</option>
          <option value="United Kingdom">United Kingdom</option>
          <option selected="selected" value="United States">United States</option>
          <option value="Uruguay">Uruguay</option>
          <option value="US Virgin Islands">US Virgin Islands</option>
          <option value="Uzbekistan">Uzbekistan</option>
          <option value="Vanuatu">Vanuatu</option>
          <option value="Venezuela">Venezuela</option>
          <option value="Vietnam">Vietnam</option>
          <option value="Virgin Gorda">Virgin Gorda</option>
          <option value="Wallis and Futuna">Wallis and Futuna</option>
          <option value="Western Samoa">Western Samoa</option>
          <option value="Yap">Yap</option>
          <option value="Yemen">Yemen</option>
          <option value="Zambia">Zambia</option>
          <option value="Zimbabwe">Zimbabwe</option>
          </select></label></li>
                  <li data-hew-for-country="United States"><label>Street address:<br><input data-val="true" data-val-maxlength="The field Street Address must be a string or array type with a maximum length of '128'." data-val-maxlength-max="128" id="StreetAddress" name="StreetAddress" placeholder="Street address" type="text" value="" required="required"></label></li>
                  <li data-hew-for-country="United States"><label>City:<br><input data-val="true" data-val-maxlength="The field City must be a string or array type with a maximum length of '50'." data-val-maxlength-max="50" id="City" name="City" placeholder="City" type="text" value="" required="required"></label></li>
                  <li data-hew-for-country="United States"><label>State:<br><select data-val="true" data-val-maxlength="The field State must be a string or array type with a maximum length of '50'." data-val-maxlength-max="50" id="State" name="State" required="required"><option value="Alabama">Alabama</option>
          <option value="Alaska">Alaska</option>
          <option value="Arizona">Arizona</option>
          <option value="Arkansas">Arkansas</option>
          <option value="California">California</option>
          <option value="Colorado">Colorado</option>
          <option value="Connecticut">Connecticut</option>
          <option value="Delaware">Delaware</option>
          <option value="District of Columbia">District of Columbia</option>
          <option value="Florida">Florida</option>
          <option value="Georgia">Georgia</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Idaho">Idaho</option>
          <option value="Illinois">Illinois</option>
          <option value="Indiana">Indiana</option>
          <option value="IOWA">IOWA</option>
          <option value="Kansas">Kansas</option>
          <option value="Kentucky">Kentucky</option>
          <option value="Louisiana">Louisiana</option>
          <option value="Maine">Maine</option>
          <option value="Maryland">Maryland</option>
          <option value="Massachusetts">Massachusetts</option>
          <option value="Michigan">Michigan</option>
          <option value="Minnesota">Minnesota</option>
          <option value="Mississippi">Mississippi</option>
          <option value="Missouri">Missouri</option>
          <option value="Montana">Montana</option>
          <option value="Nebraska">Nebraska</option>
          <option value="Nevada">Nevada</option>
          <option value="New Hampshire">New Hampshire</option>
          <option value="New Jersey">New Jersey</option>
          <option value="New Mexico">New Mexico</option>
          <option value="New York">New York</option>
          <option value="North Carolina">North Carolina</option>
          <option value="North Dakota">North Dakota</option>
          <option value="Ohio">Ohio</option>
          <option value="Oklahoma">Oklahoma</option>
          <option value="Oregon">Oregon</option>
          <option value="Pennsylvania">Pennsylvania</option>
          <option value="Rhode Island">Rhode Island</option>
          <option value="South Carolina">South Carolina</option>
          <option value="South Dakota">South Dakota</option>
          <option value="Tennessee">Tennessee</option>
          <option value="Texas">Texas</option>
          <option value="Utah">Utah</option>
          <option value="Vermont">Vermont</option>
          <option value="Virginia">Virginia</option>
          <option value="Washington">Washington</option>
          <option value="West Virginia">West Virginia</option>
          <option value="Wisconsin">Wisconsin</option>
          <option value="Wyoming">Wyoming</option>
          </select></label></li>
                  <li data-hew-for-country="United States"><label>Zip code:<br><input data-val="true" data-val-maxlength="The field Zip must be a string or array type with a maximum length of '15'." data-val-maxlength-max="15" id="Zip" name="Zip" placeholder="Zip code" type="text" value="" required="required"></label></li>
                  <li data-hew-for-country="United States"><label>Phone number:<br><input data-val="true" data-val-maxlength="The field Phone must be a string or array type with a maximum length of '32'." data-val-maxlength-max="32" id="Phone" name="Phone" placeholder="Phone number" type="text" value="" required="required"></label></li>
              </ul>
              <p data-hew-for-country="Other" style="display: none;"><label>International address: <textarea cols="20" data-val="false" data-val-maxlength="The field Address must be a string or array type with a maximum length of '500'." data-val-maxlength-max="500" id="IntlAddress" name="IntlAddress" rows="2"></textarea></label></p>
              <p data-hew-for-country="Other" style="display: none;"><label>International phone number: <input data-val="false" data-val-maxlength="The field Phone must be a string or array type with a maximum length of '50'." data-val-maxlength-max="50" id="IntlPhone" name="IntlPhone" placeholder="International phone number" type="text" value=""></label></p>
              <div id="hew-become-member-section">
                <h3>Membership type</h3>
                <p>I’m a(n)*: <select data-hew-update-fees="true" id="MemberTypePurchasing" name="MemberTypePurchasing"><option value="">Select a Membership Level</option>
          <option value="ProfessionalMember">Professional</option>
          <option value="AffiliateMember">Affiliate</option>
          <option value="StudentMember">Student</option>
          </select></p>
                  <p class="label-note">Note: one year of membership in the Higher Education Web Professionals Association is included with HighEdWeb 2017 Annual Conference registration.  Learn more about <a href="http://membership.highedweb.org/about/" target="_blank"> membership levels/types</a>.</p>
              </div>
              <h3>Academies and workshops</h3>
                  <p>
                      Sharpen your skill set through these in-depth programs:
                          <a href="https://technical.highedweb.org">Technical Academy Academy</a>,
                      <a href="https://contentux.highedweb.org">Content/UX Academy Academy</a>
                      or
                      <a href="https://leadership.highedweb.org">Leadership Academy Academy</a>.
                  Academies take place on Saturday, October 7 and Sunday, October 8. Seating is limited.
                  </p>
              <ul class="setlist">
                    <li>Choose an Academy for $400:
                      <select data-hew-academy-swap="controller" data-hew-update-fees="true" data-val="true" data-val-number="The field AcademyId must be a number." id="AcademyId" name="AcademyId"><option value="">Select an Academy</option><option value="20">Technical Academy</option><option value="21">Content/UX Academy</option><option value="22">Leadership Academy</option></select>
                    </li>
                <li data-hew-academy-swap="without"><a href="https://2017.highedweb.org/schedule/#workshops" target="_blank">Workshops</a> are $160 for one, $220 for two.</li>
                <li data-hew-academy-swap="without">Choose a <a href="https://2017.highedweb.org/schedule/#pre-workshops" target="_blank">pre-conference workshop</a>:
                  <select data-hew-update-fees="true" data-val="true" data-val-number="The field PreWorkshopId must be a number." id="PreWorkshopId" name="PreWorkshopId"><option value="">Select a Pre Workshop</option><option value="46">A Syntactically Awesome Deep Dive into Sass</option></select>
                </li>
                <li data-hew-academy-swap="with" style="display: none;">Pre-conference workshops overlap with the Academies. A post-conference workshop is $160.</li>
                <li>Choose a <a href="https://2017.highedweb.org/schedule/#post-workshops" target="_blank">post-conference workshop</a>:
                   <select data-hew-update-fees="true" data-val="true" data-val-number="The field PostWorkshopId must be a number." id="PostWorkshopId" name="PostWorkshopId"><option value="">Select a Post Workshop</option></select>
                </li>
              </ul>
              <h3>Additional information</h3>
              <p><label>Alternate email: <input data-val="true" data-val-email="The AlternateEmail field is not a valid e-mail address." data-val-maxlength="The field AlternateEmail must be a string or array type with a maximum length of '255'." data-val-maxlength-max="255" id="AlternateEmail" name="AlternateEmail" placeholder="Alternate email" type="text" value=""></label></p>
              <p><label>Special accommodations: <textarea cols="20" data-val="true" data-val-maxlength="The field Special Accommodations must be a string or array type with a maximum length of '1000'." data-val-maxlength-max="1000" id="SpecialAccomodations" name="SpecialAccomodations" rows="2"></textarea></label></p>
              <p><label>Dietary needs: <textarea cols="20" data-val="true" data-val-maxlength="The field DietaryNeeds must be a string or array type with a maximum length of '1000'." data-val-maxlength-max="1000" id="DietaryNeeds" name="DietaryNeeds" rows="2"></textarea></label></p>
              <p>
                <label class="plain"><input data-val="true" data-val-maxlength="The field TravelPlans must be a string or array type with a maximum length of '50'." data-val-maxlength-max="50" data-val-required="Your Travel Plans selection is required." id="TravelPlans" name="TravelPlans" required="" type="radio" value="Staying in Conference Hotel"> I’ll be staying in the conference hotel.</label>
                <label class="plain"><input id="TravelPlans" name="TravelPlans" required="" type="radio" value="Commuting Daily"> I’ll be commuting daily.</label>
              </p>
              <p>What's your t-shirt size? <select class="" id="TshirtSize" name="TshirtSize"><option value="">Select One</option>
          <option value="X-Small">X-Small</option>
          <option value="Small">Small</option>
          <option value="Medium">Medium</option>
          <option value="Large">Large</option>
          <option value="X-Large">X-Large</option>
          <option value="XX-Large">XX-Large</option>
          <option value="XXX-Large">XXX-Large</option>
          </select></p>
              <p>Where did you hear about us? <select class="hew-heardabout-other" id="HeardAboutSelect" name="HeardAboutSelect"><option value="">Select One</option>
          <option value="Twitter">Twitter</option>
          <option value="LinkedIn">LinkedIn</option>
          <option value="Facebook">Facebook</option>
          <option value="Other social media">Other social media</option>
          <option value="Web search">Web search</option>
          <option value="Friend/colleague/word of mouth">Friend/colleague/word of mouth</option>
          <option value="Professional organization">Professional organization</option>
          <option value="Other conference">Other conference</option>
          <option value="Email">Email</option>
          <option value="Print materials (ex postcard)">Print materials (ex postcard)</option>
          <option value="Other">Other</option>
          </select></p>
              <p id="hew-heardabout-other" style="display: none;"><input id="HeardAboutOther" name="HeardAboutOther" placeholder="Where did you hear about us?" type="text" value=""></p>
              <p>Is this your first HighEdWeb Annual Conference?</p>
              <p>
                  <label class="plain"><input id="IsFirstAnnual" name="IsFirstAnnual" required="" type="radio" value="True"> Yes, it's my first!</label>
                  <label class="plain"><input id="IsFirstAnnual" name="IsFirstAnnual" required="" type="radio" value="False"> No, I've been to one before.</label>
              </p>
              <h3>What devices will you bring?</h3>
              <ul class="setlist">
                  <li><label class="plain"><input type="checkbox" name="DevicesList" value="Laptop/Netbook"> Laptop/Netbook</label></li>
                  <li><label class="plain"><input type="checkbox" name="DevicesList" value="iPad"> iPad</label></li>
                  <li><label class="plain"><input type="checkbox" name="DevicesList" value="Android Tablet"> Android Tablet</label></li>
                  <li><label class="plain"><input type="checkbox" name="DevicesList" value="iPhone/iPod Touch"> iPhone/iPod Touch</label></li>
                  <li><label class="plain"><input type="checkbox" name="DevicesList" value="Android Phone"> Android Phone</label></li>
                  <li><label class="plain"><input type="checkbox" name="DevicesList" value="Windows Mobile Device"> Windows Mobile Device</label></li>
                  <li><label class="plain"><input type="checkbox" name="DevicesList" value="Other"> Other</label></li>
              </ul>
              <h3>Events</h3>
              <ul class="setlist">
                <li><label class="plain"><input data-val="true" data-val-required="The AttendOpeningReception field is required." id="AttendOpeningReception" name="AttendOpeningReception" type="checkbox" value="true"><input name="AttendOpeningReception" type="hidden" value="false"> I'm planning to attend the Welcome Reception.</label></li>

                <li><label class="plain"><input data-val="true" data-val-required="The AttendExcursion field is required." id="AttendExcursion" name="AttendExcursion" type="checkbox" value="true"><input name="AttendExcursion" type="hidden" value="false"> I'm planning to attend the HighEdWeb Big Social Event.</label></li>
                <li style="display: none;" class="hew-committee-show"><label class="plain"><input data-val="true" data-val-required="The AttendPreConfDinner field is required." id="AttendPreConfDinner" name="AttendPreConfDinner" type="checkbox" value="true"><input name="AttendPreConfDinner" type="hidden" value="false"> As a committee member, I am planning to attend the pre-conference dinner</label></li>
                <li style="display: none;" class="hew-committee-show"><label class="plain"><input data-val="true" data-val-required="The AttendPostConfDinner field is required." id="AttendPostConfDinner" name="AttendPostConfDinner" type="checkbox" value="true"><input name="AttendPostConfDinner" type="hidden" value="false"> As a committee member, I am planning to attend the post-conference dinner</label></li>
              </ul>


          <div id="fee-summary-section">
              <h3>Fee summary</h3>
              <ul class="setlist">
                  <li>Conference
                          (includes early-bird discount)
                      $775
                  </li>
                                                                                          <li>Total $775</li>
              </ul>
          </div>
          <script type="text/javascript">
              (function () {
                  var update_page_fn = function () {
                      if (typeof jQuery != 'undefined') {
                          jQuery("#email-special-status").replaceWith('<li id="email-special-status"></li>');

                  jQuery(".hew-committee-show").hide();


                  jQuery("#hew-become-member-section").show();

                      } else {
                          setTimeout(update_page_fn, 200); // cheap hack: we wait to run until jQuery exists
                      }
                  };
                  update_page_fn();
              })();
          </script>        <input type="submit" value="Register">
          </form>

              </div>
          </div>
    </main><!-- #main -->

<?php get_footer();
