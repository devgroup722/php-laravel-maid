@extends('admin.layout')

    @section('content')
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <!--progress bar start-->
                      <section class="panel">
                          <header class="panel-heading">
                              <b>{{ $sub_path }}</b>
                          </header>
                          <div class="panel-body">

        <style>
            #main-content{
                color: #545252!important;
                font-weight: bold;
            }
            input, select, textarea, .label_value{
                color: #0F25C1!important;
            }
            h3{
                color: #008080!important;
            }
        </style>
    <!--content-->
     <!--main content start-->
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <!--progress bar start-->
                      <section class="panel" style="background-color: #ffffff;">
                              <div class="panel-body" style="text-align: right;">
                                    <input type="button" class="btn btn-info" value="Back" name="backButton" style="color: #ffffff!important;">
                              </div>
                              <div class="panel-body">

                                  <div>
<!-- Part A -->
                                      <h3><span class="subtitle_text">Part A.</span> PROFILE OF FDW</h3>
                                      <section>
                                      <div class="row">
    <!-- Personal Information -->       <div class="col-lg-8">
                                          <div style="margin-top: 40px; margin-bottom: 40px;"><h4 style="color:#00BFFF;">A1. PERSONAL INFORMATION</h4></div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="name">Name</label>
                                              <div class="col-lg-10">
                                                  <input name="id" type="hidden" value="{{ $maidinformItem_data->id }}">
                                                  <input class="required form-control" id="name" name="name" type="text" value="{{ $maidinformItem_data->name }}" readonly>

                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="passport_no">Passport NO.</label>
                                              <div class="col-lg-10">
                                                  <input class="form-control" id="passport_no" name="passport_no" type="text" value="{{ $maidinformItem_data->passport_no }}" readonly>

                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label ">Date of Birth</label>
                                              <div class="col-lg-10">
                                                  <div class="col-lg-3" style="padding-left: 0px;">
                                                    <input type="text" class="form-control" id="birthday_day" name="birthday_day" readonly value="{{ $maidinformItem_data->birthday_day }}">
                                                  </div>
                                                  <div class="col-lg-1"><label class="subtitle_text">/</label></div>
                                                  <div class="col-lg-3">
                                                     <?php $monthArray = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']; ?>
                                                    <input type="text" class="form-control" id="birthday_month" name="birthday_month" readonly value="{{ $monthArray[$maidinformItem_data->birthday_month - 1] }}">
                                                  </div>
                                                  <div class="col-lg-1"><label class="subtitle_text">/</label></div>
                                                  <div class="col-lg-3">
                                                    <input type="text" class="form-control" id="birthday_year" name="birthday_year" readonly value="{{ $maidinformItem_data->birthday_year }}">
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="birth_place">Place of Birth</label>
                                              <div class="col-lg-10">
                                                  <input id="birth_place" name="birth_place" type="text" class="form-control" readonly value="{{ $maidinformItem_data->birth_place }}">

                                              </div>
                                          </div>

                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="height">Height(cm)</label>
                                              <div class="col-lg-3">
                                                  <input id="height" name="height" type="number" class="form-control" readonly value="{{ $maidinformItem_data->height }}">
                                              </div>
                                              <label class="col-lg-2 control-label " for="weight">Weight(kg)</label>
                                              <div class="col-lg-3">
                                                  <input id="weight" name="weight" type="number" class="form-control" readonly value="{{ $maidinformItem_data->weight }}">
                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label " for="agency">Agency</label>
                                                <div class="col-lg-10">
                                                      <input type="text" class="form-control" id="agency" name="agency" readonly value="{{ $maidinformItem_data->agency }}">
                                                </div>
                                          </div>

                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="nationality">Nationality</label>
                                              <div class="col-lg-10">
                                                    <input type="text" class="form-control" id="nationality" name="nationality" readonly value="{{ $maidinformItem_data->nationality }}">
                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="residential_address">Residential Address</label>
                                              <div class="col-lg-10">
                                                  <input id="residential_address" name="residential_address" type="text" class="form-control" readonly value="{{ $maidinformItem_data->residential_address }}">
                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="contact_number">Contact Number</label>
                                              <div class="col-lg-10">
                                                  <input id="contact_number" name="contact_number" type="text" class="form-control" readonly value="{{ $maidinformItem_data->contact_number }}">
                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="religion">Religion</label>
                                              <div class="col-lg-10">
                                                  <input id="religion" name="religion" type="text" class="form-control" readonly value="{{ $maidinformItem_data->religion }}">
                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="education_level">Education Level</label>
                                              <div class="col-lg-10">
                                                  <input id="education_level" name="education_level" type="text" class="form-control" readonly value="{{ $maidinformItem_data->education_level }}">
                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="sibling_number">Number of Sibling</label>
                                              <div class="col-lg-10">
                                                  <input id="sibling_number" name="sibling_number" type="text" class="form-control" readonly value="{{ $maidinformItem_data->sibling_number }}">
                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="marital_status">Marital Status</label>
                                              <div class="col-lg-10">
                                                  <input id="marital_status" name="marital_status" type="text" class="form-control" readonly value="{{ $maidinformItem_data->marital_status }}">
                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="children_number">Number of Children</label>
                                              <div class="col-lg-10">
                                                  <input id="children_number" name="children_number" type="text" class="form-control" readonly value="{{ $maidinformItem_data->children_number }}">
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="row" style="margin-top: 20px;">
                                                    <input type="file" name="imageUpload_full" id="imageUpload_full" class="form-control" readonly style="display:none;" onchange="readURL_full(this);">
                                                    <div id="profileImage_full" style="width:250px;"><img style="width:100%;" id="profileImg_full" src="{{ $maidinformItem_data->profile_full_img }}"></div>
{{--
                                                    <input type="button" class="btn btn-primary" onclick="onUploadImage_full();" style="margin-top: 10px;" value="Upload Full Picture">
--}}
                                            </div>
                                        </div>
                                      </div>
    <!-- Medical History -->
                                          <div style="margin-top: 40px; margin-bottom: 40px;"><h4 style="color:#00BFFF;">A2. MEDICAL HISTORY / DIETARY RESTRICTIONS</h4></div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label " for="allergy">Allergies(if any)</label>
                                              <div class="col-lg-10">
                                                  <input class="form-control" id="allergy" name="allergy" type="text" class="form-control" readonly value="{{ $maidinformItem_data->allergy }}">

                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <div class="col-lg-12" style="font-weight: bold; margin-top: 10px; margin-bottom: 20px;">Past and existing illnesses(including chronic ailments and illnesses requireing medication):</div>
                                              <div class="col-lg-12">
                                                <div class="col-lg-6">
                                                  <label class="col-lg-5 control-label ">Mental illness</label>
                                                  <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->mental_illness == 1)? 'Yes' : 'No'; ?></label>
                                                </div>
                                                <div class="col-lg-6">
                                                  <label class="col-lg-5 control-label ">Tuberculosis</label>
                                                  <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->tuberculosis == 1)? 'Yes' : 'No'; ?></label>
                                                </div>
                                              </div>
                                              <div class="col-lg-12">
                                                <div class="col-lg-6">
                                                  <label class="col-lg-5 control-label ">Epilepsy</label>
                                                  <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->epilepsy == 1)? 'Yes' : 'No'; ?></label>
                                                </div>
                                                <div class="col-lg-6">
                                                  <label class="col-lg-5 control-label ">Heart Disease</label>
                                                  <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->heart_disease == 1)? 'Yes' : 'No'; ?></label>
                                                </div>
                                              </div>
                                              <div class="col-lg-12">
                                                <div class="col-lg-6">
                                                  <label class="col-lg-5 control-label ">Asthma</label>
                                                  <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->asthma == 1)? 'Yes' : 'No'; ?></label>
                                                </div>
                                                <div class="col-lg-6">
                                                  <label class="col-lg-5 control-label ">Malaria</label>
                                                  <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->malaria == 1)? 'Yes' : 'No'; ?></label>
                                                </div>
                                              </div>
                                              <div class="col-lg-12">
                                                <div class="col-lg-6">
                                                  <label class="col-lg-5 control-label ">Diabetes</label>
                                                  <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->diabetes == 1)? 'Yes' : 'No'; ?></label>
                                                </div>
                                                <div class="col-lg-6">
                                                  <label class="col-lg-5 control-label ">Operations</label>
                                                  <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->operations == 1)? 'Yes' : 'No'; ?></label>
                                                </div>
                                              </div>
                                              <div class="col-lg-12">
                                                <div class="col-lg-6">
                                                  <label class="col-lg-5 control-label ">Hypertension</label>
                                                  <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->hypertension == 1)? 'Yes' : 'No'; ?></label>
                                                </div>
                                                <div class="col-lg-6">
                                                  <label class="col-lg-5 control-label ">Others(if any)</label>
                                                  <textarea class="col-lg-6" style="margin-top: 10px" name="others" class="form-control" readonly>{{ $maidinformItem_data->others }}</textarea>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label ">Physical Disabilities</label>
                                              <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->physical_disabilities == 1)? 'Yes' : 'No'; ?></label>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label ">Dietary Restrictions</label>
                                              <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->dietary_restrictions == 1)? 'Yes' : 'No'; ?></label>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-2 control-label ">Food Handling Preferences</label>
                                              <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->food_handling_preferences == 1)? 'Yes' : 'No'; ?></label>

                                              <div class="col-lg-9">
                                                  <div class="col-lg-12">
                                                    <label class="col-lg-1 control-label ">Pork</label>
                                                    <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->food_handling_pork == 1)? 'Yes' : 'No'; ?></label>
                                                  </div>
                                                  <div class="col-lg-12">
                                                    <label class="col-lg-1 control-label ">Beef</label>
                                                    <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->food_handling_beef == 1)? 'Yes' : 'No'; ?></label>
                                                  </div>
                                                  <div class="col-lg-12">
                                                    <label class="col-lg-3 control-label ">Others(if any)</label>
                                                    <textarea class="col-lg-4" style="margin-top: 10px" name="food_handling_others" class="form-control" readonly>{{ $maidinformItem_data->food_handling_others }}</textarea>
                                                  </div>

                                              </div>
                                          </div>
    <!-- Others -->
                                          <div style="margin-top: 40px; margin-bottom: 40px;"><h4 style="color:#00BFFF;">A3. OTHERS</h4></div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-3 control-label " for="preference_rest_day">Preference for rest day</label>
                                              <div class="col-lg-6">
                                                  <input id="preference_rest_day" name="preference_rest_day" type="text" class="form-control" readonly value="{{ $maidinformItem_data->preference_rest_day }}">
                                              </div>
                                              <label class="col-lg-3 control-label " style="padding-left: 0px;">rest day(s) per month</label>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-3 control-label " for="any_other_remarks">Any other Remarks</label>
                                              <div class="col-lg-6">
                                                  <input id="any_other_remarks" name="any_other_remarks" type="text" class="form-control" readonly value="{{ $maidinformItem_data->any_other_remarks }}">
                                              </div>
                                          </div>

                                      </section>

<!-- Part B -->
                                      <h3><span class="subtitle_text">Part B.</span> SKILLS OF FDW</h3>
                                      <section>
    <!-- Method of Evaluation of Skills -->
                                          <div style="margin-top: 40px; margin-bottom: 40px;"><h4 style="color:#00BFFF;">B1. METHOD OF EVALUATION OF SKILLS</h4></div>
                                          <div class="form-group clearfix">
                                              <div class="col-lg-12" style="font-weight: bold; margin-top: 10px; margin-bottom: 20px;">Please indicate the method(s) used to evaluate the FDW's skills(can tick more than one):</div>
                                              <div class="col-lg-12">
                                                <div class="col-lg-12">
                                                  <input class="col-lg-1" style="margin-top: 10px" name="base_on_fdw" type="checkbox" disabled value="1" <?php echo ($maidinformItem_data->base_on_fdw == 1)? 'checked' : ''; ?>>
                                                  <label class="col-lg-10 control-label ">Based on FDW's declaration, no evaluation/observation by Singapore EA or overseas training centre/EA</label>
                                                </div>
                                                <div class="col-lg-12">
                                                  <input class="col-lg-1" style="margin-top: 10px" name="interviewed_singapore" type="checkbox" disabled value="1" <?php echo ($maidinformItem_data->interviewed_singapore == 1)? 'checked' : ''; ?>>
                                                  <label class="col-lg-10 control-label ">Interviewed by Singapore EA</label>
                                                </div>
                                                <div class="col-lg-12">
                                                  <input class="col-lg-1" style="margin-top: 10px" name="interviewed_overseas" type="checkbox" disabled value="1" <?php echo ($maidinformItem_data->interviewed_overseas == 1)? 'checked' : ''; ?>>
                                                  <label class="col-lg-10 control-label ">Interviewed by overseas training centre/EA</label>
                                                </div>
                                              </div>
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-12">
                                              <div class="panel-body">
                                                <section id="flip-scroll">
                                                    <table class="table table-bordered table-striped table-condensed cf">
                                                        <thead class="cf">
                                                            <tr>
                                                                <th class="numeric" style="text-align: center;">No</th>
                                                                <th style="text-align: center;">Areas of Work</th>
                                                                <th style="text-align: center;">Willingness<br>(Yes/No)</th>
                                                                <th style="text-align: center;">Experience<br>(Years)</th>
                                                                <th style="text-align: center;">Assessment/Observation<br>(indicate N.A. of no evaluation was done)<br>Poor ...... Excellent ... N.A.<br>1 2 3 4 5 N.A.</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="numeric" style="text-align: center;">1</td>
                                                                <td>Care of infants/children<br><br>Please specify age range:<br><b>2 to 4</b></td>
                                                                <td style="text-align: center;">
                                                                    <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->care_infant_willingness == 1)? 'Yes' : 'No'; ?></label>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <input class="form-control" name="care_infant_years" type="text" readonly value="{{ $maidinformItem_data->care_infant_years }}">
                                                                </td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-lg-1" style="margin-top: 10px; margin-right: 10px;">Rate:</div>
                                                                        <div class="col-lg-4"><input class="form-control" name="care_infant_rate" type="number" readonly value="{{ $maidinformItem_data->care_infant_rate }}"></div>
                                                                    </div>
                                                                    <br><textarea class="form-control" name="care_infant_remark" readonly>{{ $maidinformItem_data->care_infant_remark }}</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="numeric" style="text-align: center;">2</td>
                                                                <td>Care of elderly<br><br>Please specify age range:<br><b>2 to 4</b></td>
                                                                <td style="text-align: center;">
                                                                    <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->care_elderly_willingness == 1)? 'Yes' : 'No'; ?></label>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <input class="form-control" name="care_elderly_years" type="text" readonly value="{{ $maidinformItem_data->care_elderly_years }}">
                                                                </td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-lg-1" style="margin-top: 10px; margin-right: 10px;">Rate:</div>
                                                                        <div class="col-lg-4"><input class="form-control" name="care_elderly_rate" readonly type="number" value="{{ $maidinformItem_data->care_elderly_rate }}"></div>
                                                                    </div>
                                                                    <br><textarea class="form-control" name="care_elderly_remark" readonly>{{ $maidinformItem_data->care_elderly_remark }}</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="numeric" style="text-align: center;">3</td>
                                                                <td>Care of disabled<br><br>Please specify age range:<br><b>2 to 4</b></td>
                                                                <td style="text-align: center;">
                                                                    <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->care_disabled_willingness == 1)? 'Yes' : 'No'; ?></label>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <input class="form-control" name="care_disabled_years" type="text" readonly value="{{ $maidinformItem_data->care_disabled_years }}">
                                                                </td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-lg-1" style="margin-top: 10px; margin-right: 10px;">Rate:</div>
                                                                        <div class="col-lg-4"><input class="form-control" name="care_disabled_rate" type="number" readonly value="{{ $maidinformItem_data->care_disabled_rate }}"></div>
                                                                    </div>
                                                                    <br><textarea class="form-control" name="care_disabled_remark" readonly>{{ $maidinformItem_data->care_disabled_remark }}</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="numeric" style="text-align: center;">4</td>
                                                                <td>General housework<br><br>Please specify age range:<br><b>2 to 4</b></td>
                                                                <td style="text-align: center;">
                                                                    <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->general_housework_willingness == 1)? 'Yes' : 'No'; ?></label>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <input class="form-control" name="general_housework_years" type="text" readonly value="{{ $maidinformItem_data->general_housework_years }}">
                                                                </td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-lg-1" style="margin-top: 10px; margin-right: 10px;">Rate:</div>
                                                                        <div class="col-lg-4"><input class="form-control" name="general_housework_rate" readonly type="number" value="{{ $maidinformItem_data->general_housework_rate }}"></div>
                                                                    </div>
                                                                    <br><textarea class="form-control" name="general_housework_remark" readonly>{{ $maidinformItem_data->general_housework_remark }}</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="numeric" style="text-align: center;">5</td>
                                                                <td>Cooking<br><br>Please specify age range:<br><b>2 to 4</b></td>
                                                                <td style="text-align: center;">
                                                                    <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->cooking_willingness == 1)? 'Yes' : 'No'; ?></label>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <input class="form-control" name="cooking_years" type="text" readonly value="{{ $maidinformItem_data->cooking_years }}">
                                                                </td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-lg-1" style="margin-top: 10px; margin-right: 10px;">Rate:</div>
                                                                        <div class="col-lg-4"><input class="form-control" name="cooking_rate" type="number" readonly value="{{ $maidinformItem_data->cooking_rate }}"></div>
                                                                    </div>
                                                                    <br><textarea class="form-control" name="cooking_remark" readonly>{{ $maidinformItem_data->cooking_remark }}</textarea>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="numeric" style="text-align: center;">6</td>
                                                                <td>Language abilities(spoken)</td>
                                                                <td style="text-align: center;"></td>
                                                                <td style="text-align: center;"></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-lg-3" style="margin-top: 10px; margin-right: 10px;">Language 1:</div>
                                                                        <div class="col-lg-8"><input class="form-control" name="language_ability_name1" type="text" readonly value="{{ $maidinformItem_data->language_ability_name1 }}"></div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-3" style="margin-top: 10px; margin-right: 10px;">Language 2:</div>
                                                                        <div class="col-lg-8"><input class="form-control" name="language_ability_name2" type="text" readonly value="{{ $maidinformItem_data->language_ability_name2 }}"></div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-3" style="margin-top: 10px; margin-right: 10px;">Language 3</div>
                                                                        <div class="col-lg-8"><input class="form-control" name="language_ability_name3" type="text" readonly value="{{ $maidinformItem_data->language_ability_name3 }}"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="numeric" style="text-align: center;">7</td>
                                                                <td>Other skills, if any<br><br>Please specify:</td>
                                                                <td style="text-align: center;"></td>
                                                                <td style="text-align: center;"></td>
                                                                <td>
                                                                    <div class="row">
                                                                        <div class="col-lg-2" style="margin-top: 10px; margin-right: 10px;">Name:</div>
                                                                        <div class="col-lg-6"><input class="form-control" name="other_skills_name" type="text" readonly value="{{ $maidinformItem_data->other_skills_name }}"></div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-lg-2" style="margin-top: 10px; margin-right: 10px;">Rate:</div>
                                                                        <div class="col-lg-6"><input class="form-control" name="other_skills_level" type="number" readonly value="{{ $maidinformItem_data->other_skills_level }}"></div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </section>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group clearfix">
                                                <label class="col-lg-2 control-label " for="primary_duty">Primary Duty</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control" id="primary_duty" name="primary_duty" readonly value="{{ $maidinformItem_data->primary_duty }}">
                                                </div>
                                          </div>

                                      </section>
<!-- Part C -->
                                      <h3><span class="subtitle_text">Part C.</span> EMPLOYMENT HISTORY OF THE FDW</h3>
                                      <section>
    <!-- Employment History Overseas -->
                                          <div style="margin-top: 40px; margin-bottom: 40px;"><h4 style="color:#00BFFF;">C1. EMPLOYMENT HISTORY OVERSEAS</h4></div>
                                          <div class="col-lg-12">
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-12">
                                              <div class="panel-body">
                                                <section id="flip-scroll">
                                                    <table class="table table-bordered table-striped table-condensed cf">
                                                        <thead class="cf">
                                                            <tr>
                                                                <th style="text-align: center;">Date From</th>
                                                                <th style="text-align: center;">Date To</th>
                                                                <th style="text-align: center;">Country</th>
                                                                <th style="text-align: center;">Employer</th>
                                                                <th style="text-align: center;">Work Duties</th>
                                                                <th style="text-align: center;">Remarks</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="insert_row">
                                                        @for($i=0;$i<$num_history;$i++)
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    <input class="form-control" name="date_from{{ $i }}" type="date" readonly value="{{ $maidemployment_data[$i]->date_from }}">
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <input class="form-control" name="date_to{{ $i }}" type="date" readonly value="{{ $maidemployment_data[$i]->date_to }}">
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <input class="form-control" name="country{{ $i }}" type="text" readonly value="{{ $maidemployment_data[$i]->country }}">
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <input class="form-control" name="employer{{ $i }}" type="text" readonly value="{{ $maidemployment_data[$i]->employer }}">
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <textarea class="form-control" name="work_duty{{ $i }}" readonly>{{ $maidemployment_data[$i]->work_duty }}</textarea>
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <textarea class="form-control" name="remarks{{ $i }}" readonly>{{ $maidemployment_data[$i]->remark }}</textarea>
                                                                </td>
                                                            </tr>
                                                        @endfor
                                                        </tbody>
                                                    </table>
                                                </section>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group clearfix">
                                              <label class="col-lg-3 control-label " for="basic_salary">Basic salary</label>
                                              <div class="col-lg-2 input-group">
                                                  <span class="input-group-addon">$</span><input id="basic_salary" name="basic_salary" type="number" class="form-control" readonly value="{{ $maidinformItem_data->basic_salary }}">
                                              </div>
                                          </div>

    <!-- Employment History in Singapore -->
                                          <div style="margin-top: 40px; margin-bottom: 40px;"><h4 style="color:#00BFFF;">C2. EMPLOYMENT HISTORY IN SINGAPORE</h4></div>
                                          <div class="form-group clearfix">
                                              <div class="col-lg-12">
                                                  <label class="col-lg-6 control-label">Previous working experience in Singapore: </label>
                                                  <label class="col-lg-2 control-label label_value" ><?php echo ($maidinformItem_data->employment_history_singapore == 1)? 'Yes' : 'No'; ?></label>
                                              </div>
                                              <div class="col-lg-12" style="margin-top: 20px;">(The EA si required to obtain the FDW's employment history from MOM and furnish the employer with the employment history of the FDW. The employer may also verify the FDW's employment history in Singapore through WPOL using SingPass)</div>
                                          </div>
    <!-- Feedback from previous employers in Singapore -->
                                          <div style="margin-top: 40px; margin-bottom: 40px;"><h4 style="color:#00BFFF;">C3. FEEDBACK FROM PREVIOUS EMPLOYERS IN SINGAPORE</h4></div>
                                          <div class="form-group clearfix">
                                                <div class="col-lg-12">Feedback was/was not obtained by the EA from the previous employers. If feedback was obtained(attach testimonial if possible), please indicate the feedback in the table below:</div>
                                          </div>
                                          <div class="col-lg-12">
                                          </div>
                                          <div class="row">
                                            <div class="col-lg-12">
                                              <div class="panel-body">
                                                <section id="flip-scroll">
                                                    <table class="table table-bordered table-striped table-condensed cf">
                                                        <thead class="cf">
                                                            <tr>
                                                                <th style="text-align: center;" width="20%">Employer</th>
                                                                <th style="text-align: center;">Feedback</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="insert_row_singapore">
                                                            @for($i=0;$i<$num_history_singapore;$i++)
                                                            <tr>
                                                                <td style="text-align: center;">
                                                                    <input class="form-control" name="employer_singapore{{ $i }}" type="text" readonly value="{{ $maidemployment_singapore_data[$i]->employer }}">
                                                                </td>
                                                                <td>
                                                                    <textarea class="form-control" name="feedback{{ $i }}" readonly>{{ $maidemployment_singapore_data[$i]->feedback }}</textarea>
                                                                </td>
                                                            </tr>
                                                            @endfor
                                                        </tbody>
                                                    </table>
                                                </section>
                                              </div>
                                            </div>
                                          </div>
                                      </section>
                                  </div>
                          </div>
                      </section>


                  </div>


              </div>
              <!-- page end-->
                          </div>
                      </section>


                  </div>


              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
    @stop

@stop

@section('custom-scripts')
    @include('js.admin.addMaid');
@stop
