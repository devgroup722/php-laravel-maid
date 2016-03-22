@extends('user.layout')

    @section('content')
             <?php
                 if(!isset($keyword_duty)) $keyword_duty = "";
                 if(!isset($keyword_nationality)) $keyword_nationality = "";
                 if(!isset($keyword_type)) $keyword_type = "";
                 if(!isset($keyword_salary)) $keyword_salary = "";
                 if(!isset($keyword_age1)) $keyword_age1 = "";
                 if(!isset($keyword_age2)) $keyword_age2 = "";
             ?>

            <!--content-->
            <div class="col-lg-9 bg_color_grey" style="background: url('/assets/frontend/img/custom/edge_bar.png') left repeat-y #f0f3f5;">
                <!--top login -->
                <div class="row" style="padding-right: 20px;">
                    <div class="col-lg-9 col-md-9 col-sm-9"></div>
                    <div class="col-lg-3 col-md-3 col-sm-3 login_img radius_bottom_5 margin_bottom_10">
                        <div class="col-lg-5 col-md-5 col-sm-5 align_center">
                            <a href="{{ URL::route('user.user.login') }}"><label class="banner_label">Agency Login</label></a>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 align_center">
                            <label class="banner_label">|</label>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 align_center">
                            <a href="{{ URL::route('user.user.signup') }}"><label class="banner_label">Join InnoMaid</label></a>
                        </div>
                    </div>
                </div>
                <!--banner img-->
                <div class="margin_left_20 margin_bottom_20" style="margin-right: 20px;">
                <form role="form" id="box_search" method="post" action="{{ URL::route('user.maidfilter.searchMaid') }}">
                    <div class="row bg_color_white" style="padding-top: 40px;">
                        <div class="col-lg-3 col-md-3 col-sm-3 banner_girl"></div>
                        <!--search box-->
                        <div class="col-lg-5 col-md-5 col-sm-5 banner_box radius_top_5">
                            <div class="row margin_top_10">
                                <div class="col-lg-1 col-md-1 col-sm-1"></div>
                                <div class="col-lg-1 col-md-1 col-sm-1">
                                    <img src="/assets/frontend/img/custom/search_icon.png" height="29px">
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-8 margin_left_10" style="height: 29px;">
                                    <img src="/assets/frontend/img/custom/find_my_maid.png" width="100%">
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1" style="height: 29px;"></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 align_right">
                                    <label class="banner_label">Primary Duty</label>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 margin_left_10" style="height: 30px;">
                                    <select class="form-control search_select" name="primary_duty" id="primary_duty">
                                        <option value=""></option>
                                        <option value="infants" <?php echo ($keyword_duty=='infants')? 'selected' : '';?>>Care of infants/children</option>
                                        <option value="elderly" <?php echo ($keyword_duty=='elderly')? 'selected' : '';?>>Care of elderly</option>
                                        <option value="disabled" <?php echo ($keyword_duty=='disabled')? 'selected' : '';?>>Care of disabled</option>
                                        <option value="housework" <?php echo ($keyword_duty=='housework')? 'selected' : '';?>>General housework</option>
                                        <option value="cooking" <?php echo ($keyword_duty=='cooking')? 'selected' : '';?>>Cooking</option>
                                        <option value="other" <?php echo ($keyword_duty=='other')? 'selected' : '';?>>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 align_right">
                                    <label class="banner_label">Nationality</label>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 margin_left_10" style="height: 30px;">
                                    <select class="form-control search_select" name="nationality" id="nationality">
                                        <option></option>
                                        @foreach($nationality_data as $item)
                                        <option value="{{ $item->nationality }}" <?php echo ($keyword_nationality==$item->nationality)? 'selected' : '';?>>{{ $item->nationality }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 align_right">
                                    <label class="banner_label">Type</label>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 margin_left_10" style="height: 30px;">
                                    <select class="form-control search_select" id="type" name="type">
                                        <option value=""></option>
                                        @foreach($maidagency_data as $item)
                                        <option value="{{ $item->agency }}" <?php echo ($keyword_type==$item->agency)? 'selected' : '';?>>{{ $item->agency }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 align_right">
                                    <label class="banner_label">Salary</label>
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-7 margin_left_10" style="height: 30px;">
                                    <select class="form-control search_select" name="basic_salary" id="basic_salary">
                                        <option value=""></option>
                                        <option value="500" <?php echo ($keyword_salary==500)? 'selected' : '';?>>Less 500</option>
                                        <option value="1000" <?php echo ($keyword_salary==1000)? 'selected' : '';?>>Less 1000</option>
                                        <option value="1500" <?php echo ($keyword_salary==1500)? 'selected' : '';?>>Less 1500</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 align_right">
                                    <label class="banner_label">Age Range</label>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3 margin_left_10" style="height: 30px;">
                                    <input type="number" class="form-control" name="age1" id="age1" value="{{ $keyword_age1 }}" style="height: 25px; padding: 0px; color: black;">
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1" style="height: 30px; padding: 0px;">
                                    <label class="banner_label"> to </label>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-3" style="height: 30px;">
                                    <input type="number" class="form-control" name="age2" id="age2" value="{{ $keyword_age2 }}" style="height: 25px; padding: 0px; color: black;">
                                </div>
                            </div>
                            <div class="row margin_top_10">
                                <div class="col-lg-3 col-md-3 col-sm-3" style="height: 30px;"></div>
                                <div class="col-lg-5 col-md-5 col-sm-5" style="padding-top: 5px;">
                                    <a href="#"><label class="banner_label advanced_search">Advance Search</label></a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-2" style="height: 30px;">
                                    <button type="submit" class="btn  btn-info">Search</button>
                                </div>
                                <div class="col-lg-1 col-md-1 col-sm-1" style="height: 30px;"></div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 banner_group"></div>
                    </div>
                </form>
                </div>

<!--maid data-->
            <?php
                $i = 0;
                $total_page = intval($num_maidData / 9) + 1;
                $currentPage = Session::get('currentPage');
            ?>
            @foreach($maidinforms_data as $item )
            <?php
                $i++;
                $mod_3 = fmod($i, 3);
                $mod_9 = fmod($i, 9);
                $page = intval($i / 9) + 1;
                $age = date('Y') - $item->birthday_year;
            ?>

            <?php if($mod_9 == 1){ ?>
                    <div class="margin_bottom_20 <?php echo ($page==1)? 'enable_div' : 'disable_div';?>" id="pagination{{ $page }}">
            <?php } ?>
            <?php if($mod_3 == 1){ ?>
                        <!--row-->
                        <div class="row margin_bottom_20">
            <?php } ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 profile_wrap radius_all_10">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-sm-5">
                                        <a href="{{ URL::route('user.user.maidDetails', $item->id) }}">
                                            <img src="{{ $item->profile_img }}" class="profile_img">
                                        </a>
                                    </div>
                                    <div class="col-lg-7 col-md-7 col-sm-7" style="padding-left: 20px;">
                                        <label class="profile_name">{{ $item->name }}</label>
                                        <span class="profile_from">From: <span class="profile_country">{{ $item->nationality }}</span></span>
                                        <span class="profile_age">Age: <span>{{ $age }}</span><span>({{ $item->marital_status }})</span></span>
                                        <span class="profile_type">Type: <span>{{ $item->agency }}</span></span>
                                        <span class="profile_salary">Salary: <span class="profile_salary_value">${{ $item->basic_salary }}</span></span>
                                        <span class="profile_daysoff">Days Off: <span>{{ $item->preference_rest_day }}</span></span>
                                        <label class="profile_company margin_top_10">{{ $item->company_name }}</label>
                                    </div>
                                </div>
                                <div class="row profile_bottom">
                                    <div class="col-lg-6 col-md-6 col-sm-6" style="border-right: 1px solid #d2d8da; border-bottom-left-radius: 10px;">
                                        <label>Ref. Code: AT07-0515</label>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 2px; border-bottom-right-radius: 10px;">
                                        <a href="#"><img src="/assets/frontend/img/custom/add_shortlist.png" width="100px" height="15px"></a>
                                    </div>
                                </div>
                            </div>
            <?php if($i != 1 && $mod_3 == 0){ ?>
                        </div>
            <?php } ?>
            <?php if($i != 1 && $mod_9 == 0){ ?>
                    </div>
            <?php } ?>
            @endforeach
            <?php if(fmod($i, 3) == 0 && fmod($i, 9) != 0){ ?>
                    </div>
            <?php } ?>
            <?php if(fmod($i, 3) != 0){ ?>
                        </div>
                    </div>
            <?php } ?>
                    <input type="hidden" id="lastPageNum" value="1">
                    <!--//end content-->

                    <!-- Pagination -->
                    <div class="row">
                        <div class="text-center">
                            <ul id="pagination-demo" class="pagination-sm"></ul>
                        </div>
                    </div>
                    <!--// end -->
                    <!-- ShowToast -->
                    <button type="button" class="btn btn-success" id="showtoast" style="display: none;">Show Toast</button>
                    <!--Modal-->
                    <a class="btn btn-success" id="success_register_modal" data-toggle="modal" href="#successModal" style="display: none;">Show Modal</a>

                    <div class="modal fade " id="successModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Message</h4>
                                </div>
                                <div class="modal-body">Your account is registered successfully!</div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-success" type="button">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--//End Modal -->
    @stop

@stop

@section('custom-scripts')
    @include('js.user.layout');
@stop
