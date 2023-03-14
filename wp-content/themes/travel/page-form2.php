<?php
/*
Template Name: Form2
*/

if (!empty($_POST['search'])) {
    // Initialize the session
    session_start();
    $_SESSION['keyword'] = $_POST['search'];
    $_SESSION['adults'] = $_POST['adults'];
    $_SESSION['childern'] = $_POST['childern'];
    $_SESSION['datediff'] = $_POST['datediff'];
}
get_header();

?>
<!-- ////////////////Form2 page content Start////////////////// -->
<!-- Form section -->
<div class="form_sec form-2 pt-5">
    <form id="regForm" action="">
        <div class="tab">
            <div class="container-fluid pt-5">
                <div class="ttle py-5 border-bottom">
                    <div class="row">
                        <div class="col-md-4 form-2-tit pe-0 pe-sm-5">
                            <h2 class="form_title text-light fw-bold text-lg mb-1">
                                Day 01.
                            </h2>
                            <span class="text-light sub_head">20th of Feb 2023</span>
                        </div>

                        <div class="col-md-5 mt-4 mt-md-0">
                            <div class="input-group mb-2">
                                <input class="form-control form-control-lg border-end-0 border px-5 py-3" type="search" placeholder="Where you want to go?" id="example-search-input">
                                <span class="input-group-append">
                                    <button class="btn btn-lg bg-white border-start-0 border ms-n5 rounded-0 rounded-end mt-0 py-3" type="button">
                                        <i class="fa fa-search fa-2x pt-1"></i>
                                    </button>
                                </span>
                            </div>
                            <span class="text-light sub_head">*If you change this, you will need to recreate all below
                                details </span>
                        </div>
                        <div class="col-md-3 mt-4 mt-md-0 lst_sec">

                        </div>
                    </div>
                </div>
            </div>
            <div class="container sing_form_sec">
                <div class="choose_sec py-5 position-relative">
                    <!-- Choose your stay -->
                    <div id="select_1" class="form-check">
                        <input type="checkbox" id="sel1" class="form-check-input" name="optradio">
                        <label class="form-check-label" for="stay">Choose Your Stay</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal1">
                                <div id="btn1_inside" class="btn_inside text-center">
                                    choose now <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn1_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id='stay_data'>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Breakfast -->
                    <div id="select_2" class="form-check">
                        <input type="checkbox" id="sel2" class="form-check-input" name="optradio">
                        <label class="form-check-label" for="breakfast">Breakfast</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal2" id='breakfast'>
                                <div id="btn2_inside" class="btn_inside text-center">
                                    a restaurant? <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn2_price">
                            </button>
                            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="breakfast_data">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Morning Excursions -->
                    <div id="select_3" class="form-check">
                        <input type="checkbox" id="sel3" class="form-check-input" name="optradio">
                        <label class="form-check-label" for="morning">Morning Excursions</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal3" id='morning_excursions'>
                                <div id="btn3_inside" class="btn_inside text-center">
                                    Choose <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn3_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="morning_excursions_data">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="addBtn" id="myButton1">Add another <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i></button>
                            <div id="sectionContainer1">
                                <div class="morning-excursions-section">
                                    <div id="btn3_inside_{{ section_id }}" class="btn_inside text-center">
                                        Choose <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                    </div>
                                    <input type="hidden" id="btn3_price_{{ section_id }}">
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Lunch -->
                    <div id="select_4" class="form-check">
                        <input type="checkbox" id="sel4" class="form-check-input" name="optradio">
                        <label class="form-check-label" for="breakfast">Lunch</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal4" id='lunch_data'>
                                <div id="btn4_inside" class="btn_inside text-center">
                                    a restaurant? <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn4_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="lunch">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Evening Excursions -->
                    <div id="select_5" class="form-check">
                        <input type="checkbox" class="form-check-input" id="sel5" name="optradio">
                        <label class="form-check-label" for="evening">Evening Excursions</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal5" id='evening_excursions'>
                                <div id="btn5_inside" class="btn_inside text-center">
                                    Choose <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn5_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="evening">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dinner -->
                    <div id="select_6" class="form-check">
                        <input type="checkbox" class="form-check-input" id="sel6" name="optradio">
                        <label class="form-check-label" for="dinner">Dinner</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal6" id='dinner_data'>
                                <div id="btn6_inside" class="btn_inside text-center">
                                    a restaurant? <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn6_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="dinner">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Night Life -->
                    <div id="select_7" class="form-check">
                        <input type="checkbox" class="form-check-input" id="sel7" name="optradio">
                        <label class="form-check-label" for="night">Night Life</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal7" id='night_data'>
                                <div id="btn7_inside" class="btn_inside text-center">
                                    Choose <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn7_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal7" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="night">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vl"></div>
                </div>
            </div>
        </div>
        <div class="tab">
            <div class="container-fluid pt-5">
                <div class="ttle py-5 border-bottom">
                    <div class="row">
                        <div class="col-md-4 form-2-tit pe-0 pe-sm-5">
                            <h2 class="form_title text-light fw-bold text-lg mb-1">
                                Day 01.
                            </h2>
                            <span class="text-light sub_head">20th of Feb 2023</span>
                        </div>

                        <div class="col-md-5 mt-4 mt-md-0">
                            <div class="input-group mb-2">
                                <input class="form-control form-control-lg border-end-0 border px-5 py-3" type="search" placeholder="Where you want to go?" id="example-search-input">
                                <span class="input-group-append">
                                    <button class="btn btn-lg bg-white border-start-0 border ms-n5 rounded-0 rounded-end mt-0 py-3" type="button">
                                        <i class="fa fa-search fa-2x pt-1"></i>
                                    </button>
                                </span>
                            </div>
                            <span class="text-light sub_head">*If you change this, you will need to recreate all below
                                details </span>
                        </div>
                        <div class="col-md-3 mt-4 mt-md-0 lst_sec">

                        </div>
                    </div>
                </div>
            </div>
            <div class="container sing_form_sec">
                <div class="choose_sec py-5 position-relative">
                    <!-- Choose your stay -->
                    <div id="select_1" class="form-check">
                        <input type="checkbox" id="sel1" class="form-check-input" name="optradio">
                        <label class="form-check-label" for="stay">Choose Your Stay</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal1">
                                <div id="btn1_inside" class="btn_inside text-center">
                                    choose now <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn1_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id='stay_data'>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Breakfast -->
                    <div id="select_2" class="form-check">
                        <input type="checkbox" id="sel2" class="form-check-input" name="optradio">
                        <label class="form-check-label" for="breakfast">Breakfast</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal2" id='breakfast'>
                                <div id="btn2_inside" class="btn_inside text-center">
                                    a restaurant? <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn2_price">
                            </button>
                            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="breakfast_data">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Morning Excursions -->
                    <div id="select_3" class="form-check">
                        <input type="checkbox" id="sel3" class="form-check-input" name="optradio">
                        <label class="form-check-label" for="morning">Morning Excursions</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal3" id='morning_excursions'>
                                <div id="btn3_inside" class="btn_inside text-center">
                                    Choose <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn3_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="morning_excursions_data">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button" class="addBtn" id="myButton1">Add another <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i></button>
                            <div id="sectionContainer1"></div>
                        </div>

                    </div>
                    <!-- Lunch -->
                    <div id="select_4" class="form-check">
                        <input type="checkbox" id="sel4" class="form-check-input" name="optradio">
                        <label class="form-check-label" for="breakfast">Lunch</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal4" id="">
                                <div id="btn4_inside" class="btn_inside text-center">
                                    a restaurant? <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn4_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="lunch_data">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Evening Excursions -->
                    <div id="select_5" class="form-check">
                        <input type="checkbox" class="form-check-input" id="sel5" name="optradio">
                        <label class="form-check-label" for="evening">Evening Excursions</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal5">
                                <div id="btn5_inside" class="btn_inside text-center">
                                    Choose <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn5_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="evening">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Dinner -->
                    <div id="select_6" class="form-check">
                        <input type="checkbox" class="form-check-input" id="sel6" name="optradio">
                        <label class="form-check-label" for="dinner">Dinner</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal6">
                                <div id="btn6_inside" class="btn_inside text-center">
                                    a restaurant? <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn6_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="dinner">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Night Life -->
                    <div id="select_7" class="form-check">
                        <input type="checkbox" class="form-check-input" id="sel7" name="optradio">
                        <label class="form-check-label" for="night">Night Life</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal7">
                                <div id="btn7_inside" class="btn_inside text-center">
                                    Choose <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                                </div>
                                <input type="hidden" id="btn7_price">
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal7" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row" id="night">

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vl"></div>
                </div>
            </div>
        </div>
</div>

<div class="col-md-3 mt-4 mt-md-0 form_bt_sec">
    <div class="next_btn text-center">
        <button class="text-light btn border-bottom" type="button" id="prevBtn" onclick="nextPrev(-1)"><span class="lg-text fw-bold">
                <i class="fa fa-arrow-left" aria-hidden="true"></i> Previous
            </span></button>
        <button class="text-light btn px-5 lg-text fw-bold" type="button" id="nextBtn" onclick="nextPrev(1)"><span id="nextBtnNext" class="lg-text fw-bold">Next </span>
            <br>
            Day 02
        </button>
    </div>
    <div style="text-align:center;margin-top:20px;">
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
        <span class="step"></span>
    </div>
</div>
</form>
</div>

<!-- Form section -->
<?php
$ajax_handler_url = plugins_url('post-data/post-data.php');
$theme_url = get_template_directory_uri();
?>

<!-- ////////////////Form2 page content End////////////////// -->

<!-- Form section -->
<?php $ajax_handler_url = plugins_url('post-data/post-data.php'); ?>

<!-- ////////////////Form2 page content End////////////////// -->
<script>
    jQuery.ajax({
        url: '<?php echo admin_url('admin-ajax.php'); ?>', // the PHP script that contains the function
        type: 'POST',
        data: {
            action: 'my_custom_ajax_endpoint', // the name of the AJAX action
            search_keyword: '<?php echo $_SESSION['keyword']; ?>' // the data to pass to the function

        },
        success: function(data) {
            console.log(data);
            let response = JSON.parse(data);
            let s = '';
            for (var i = 0; i < response.length; i++) {
                s += '<div class="col-sm-6 col-md-4 col-lg-3 border p-3">';
                s += '<div class="option">';
                s += '<img class="img-fluid" src="' + response[i].featured_image.large + '" alt="Option 1">';
                s += '<div class="caption row my-2">';
                s += ' <div class="col">';
                s += '<a href="">';
                s += '<span class="option-title text-primary">' + response[i].name + '</span>';
                s += '</a>';
                s += '<input type="hidden" class="loc_name" name="loc_name" value="' + response[i].location + '">';
                s += ' </div>';
                s += '<div class="col text-end">';
                s += '<span class="option-price text-end">' + response[i].price_range + '</span>';
                s += '</div>';
                s += '</div>';
                s += '<div class="star mb-2">';
                s += '' + response[i].price_range + '';
                s += '</div>';
                s += '<div class="buttonOpt w-100">';
                s += '<button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>';
                s += '</div>';
                s += '</div>';
                s += '</div>';


                // <option value="' + response[i].id + '">' + response[i].name + '</option>';
            }
            $("#stay_data").html(s);

            // Add click event listeners to the Choose buttons inside each option
            $("#Modal1 .option .submit-btn").click(function() {
                // Get the data for the selected option
                var imageSrc = $(this).closest(".option").find(".img-fluid").attr("src");
                var title = $(this).closest(".option").find(".option-title").text();
                var price = $(this).closest(".option").find(".option-price").text();
                var location = $(this).closest(".option").find(".loc_name").val();

                // Update the selected option data display area
                updateSelectedOptionStay(imageSrc, title, price, location);
            });
        },
        error: function(xhr, status, error) {
            console.log("Error: " + error);
        }
    });


    $(document).ready(function() {
        $("#breakfast").click(function() {
            $.ajax({
                url: "<?php echo admin_url('admin-ajax.php'); ?>", // Replace with your URL
                type: "POST",
                data: {
                    action: 'my_custom_ajax_endpoint',
                    search_keyword: $("#sel1").val()
                },
                success: function(data) {
                    console.log(data);
                    let response = JSON.parse(data);
                    let s = '';
                    for (var i = 0; i < response.length; i++) {
                        s += '<div class="col-sm-6 col-md-4 col-lg-3 border p-3">';
                        s += '<div class="option">';
                        s += '<img class="img-fluid" src="' + response[i].featured_image.large + '" alt="Option 1">';
                        s += '<div class="caption row my-2">';
                        s += ' <div class="col">';
                        s += '<a href="">';
                        s += '<span class="option-title text-primary">' + response[i].name + '</span>';
                        s += '</a>';
                        s += '<input type="hidden" class="loc_name" name="loc_name" value="' + response[i].location + '">';
                        s += ' </div>';
                        s += '<div class="col text-end">';
                        s += '<span class="option-price text-end">' + response[i].price_range + '</span>';
                        s += '</div>';
                        s += '</div>';
                        s += '<div class="star mb-2">';
                        s += '' + response[i].price_range + '';
                        s += '</div>';
                        s += '<div class="buttonOpt w-100">';
                        s += '<button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>';
                        s += '</div>';
                        s += '</div>';
                        s += '</div>';
                        // <option value="' + response[i].id + '">' + response[i].name + '</option>';
                    }
                    $("#breakfast_data").html(s);

                    // Add click event listeners to the Choose buttons inside each option
                    $("#Modal2 .option .submit-btn").click(function() {
                        // Get the data for the selected option
                        var imageSrc = $(this).closest(".option").find(".img-fluid").attr("src");
                        var title = $(this).closest(".option").find(".option-title").text();
                        var price = $(this).closest(".option").find(".option-price").text();
                        var location = $(this).closest(".option").find(".loc_name").val();

                        // Update the selected option data display area
                        updateSelectedOptionBreakfast(imageSrc, title, price, location);
                        const cookiesObj = {
                            name: 'Chocolate Chip',
                            type: 'Soft and Chewy',
                            quantity: 12
                        };

                        const cookiesJson = JSON.stringify(cookiesObj);

                        const xhr = new XMLHttpRequest();
                        xhr.open('POST', '<?php echo $theme_url; ?>/pdf_generator.php');
                        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                        xhr.onload = () => {
                            if (xhr.status === 200) {
                                console.log(xhr.responseText);
                            } else {
                                console.error('Error generating PDF');
                            }
                        };
                        xhr.send(`cookiesJson=${encodeURIComponent(cookiesJson)}`);
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        });
    });

    $(document).ready(function() {
        $("#morning_excursions").click(function() {
            $.ajax({
                url: "<?php echo admin_url('admin-ajax.php'); ?>", // Replace with your URL
                type: "POST",
                data: {
                    action: 'my_custom_ajax_endpoint1',
                    search_keyword: $("#sel2").val()
                },
                success: function(data) {
                    console.log(data);
                    let response = JSON.parse(data);
                    let s = '';
                    for (var i = 0; i < response.length; i++) {
                        s += '<div class="col-sm-6 col-md-4 col-lg-3 border p-3">';
                        s += '<div class="option">';
                        s += '<img class="img-fluid" src="' + response[i].featured_image.large + '" alt="Option 1">';
                        s += '<div class="caption row my-2">';
                        s += ' <div class="col">';
                        s += '<a href="">';
                        s += '<span class="option-title text-primary">' + response[i].name + '</span>';
                        s += '</a>';
                        s += '<input type="hidden" class="loc_name" name="loc_name" value="' + response[i].location + '">';
                        s += ' </div>';
                        s += '<div class="col text-end">';
                        s += '<span class="option-price text-end">' + response[i].price_range + '</span>';
                        s += '</div>';
                        s += '</div>';
                        s += '<div class="star mb-2">';
                        s += '' + response[i].price_range + '';
                        s += '</div>';
                        s += '<div class="buttonOpt w-100">';
                        s += '<button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>';
                        s += '</div>';
                        s += '</div>';
                        s += '</div>';
                        // <option value="' + response[i].id + '">' + response[i].name + '</option>';
                    }
                    $("#morning_excursions_data").html(s);
                    // Add click event listeners to the Choose buttons inside each option
                    $("#Modal3 .option .submit-btn").click(function() {
                        // Get the data for the selected option
                        var imageSrc = $(this).closest(".option").find(".img-fluid").attr("src");
                        var title = $(this).closest(".option").find(".option-title").text();
                        var price = $(this).closest(".option").find(".option-price").text();
                        var location = $(this).closest(".option").find(".loc_name").val();

                        // Update the selected option data display area
                        updateSelectedOptionMorning(imageSrc, title, price, location);
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        });
    });

    // Lunch
    $(document).ready(function() {
        $("#lunch_data").click(function() {
            $.ajax({
                url: "<?php echo admin_url('admin-ajax.php'); ?>", // Replace with your URL
                type: "POST",
                data: {
                    action: 'my_custom_ajax_endpoint',
                    search_keyword: $("#sel3").val()
                },
                success: function(data) {
                    console.log(data);
                    let response = JSON.parse(data);
                    let s = '';
                    for (var i = 0; i < response.length; i++) {
                        s += '<div class="col-sm-6 col-md-4 col-lg-3 border p-3">';
                        s += '<div class="option">';
                        s += '<img class="img-fluid" src="' + response[i].featured_image.large + '" alt="Option 1">';
                        s += '<div class="caption row my-2">';
                        s += ' <div class="col">';
                        s += '<a href="">';
                        s += '<span class="option-title text-primary">' + response[i].name + '</span>';
                        s += '</a>';
                        s += '<input type="hidden" class="loc_name" name="loc_name" value="' + response[i].location + '">';
                        s += ' </div>';
                        s += '<div class="col text-end">';
                        s += '<span class="option-price text-end">' + response[i].price_range + '</span>';
                        s += '</div>';
                        s += '</div>';
                        s += '<div class="star mb-2">';
                        s += '' + response[i].price_range + '';
                        s += '</div>';
                        s += '<div class="buttonOpt w-100">';
                        s += '<button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>';
                        s += '</div>';
                        s += '</div>';
                        s += '</div>';
                        // <option value="' + response[i].id + '">' + response[i].name + '</option>';
                    }
                    $("#lunch").html(s);
                    // Add click event listeners to the Choose buttons inside each option
                    $("#Modal4 .option .submit-btn").click(function() {
                        // Get the data for the selected option
                        var imageSrc = $(this).closest(".option").find(".img-fluid").attr("src");
                        var title = $(this).closest(".option").find(".option-title").text();
                        var price = $(this).closest(".option").find(".option-price").text();
                        var location = $(this).closest(".option").find(".loc_name").val();

                        // Update the selected option data display area
                        updateSelectedOptionLunch(imageSrc, title, price, location);
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        });
    });

    // Evening Excursions
    $(document).ready(function() {
        $("#evening_excursions").click(function() {
            $.ajax({
                url: "<?php echo admin_url('admin-ajax.php'); ?>", // Replace with your URL
                type: "POST",
                data: {
                    action: 'my_custom_ajax_endpoint1',
                    search_keyword: $("#sel4").val()
                },
                success: function(data) {
                    console.log(data);
                    let response = JSON.parse(data);
                    let s = '';
                    for (var i = 0; i < response.length; i++) {
                        s += '<div class="col-sm-6 col-md-4 col-lg-3 border p-3">';
                        s += '<div class="option">';
                        s += '<img class="img-fluid" src="' + response[i].featured_image.large + '" alt="Option 1">';
                        s += '<div class="caption row my-2">';
                        s += ' <div class="col">';
                        s += '<a href="">';
                        s += '<span class="option-title text-primary">' + response[i].name + '</span>';
                        s += '</a>';
                        s += '<input type="hidden" class="loc_name" name="loc_name" value="' + response[i].location + '">';
                        s += ' </div>';
                        s += '<div class="col text-end">';
                        s += '<span class="option-price text-end">' + response[i].price_range + '</span>';
                        s += '</div>';
                        s += '</div>';
                        s += '<div class="star mb-2">';
                        s += '' + response[i].price_range + '';
                        s += '</div>';
                        s += '<div class="buttonOpt w-100">';
                        s += '<button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>';
                        s += '</div>';
                        s += '</div>';
                        s += '</div>';
                        // <option value="' + response[i].id + '">' + response[i].name + '</option>';
                    }
                    $("#evening").html(s);
                    // Add click event listeners to the Choose buttons inside each option
                    $("#Modal5 .option .submit-btn").click(function() {
                        // Get the data for the selected option
                        var imageSrc = $(this).closest(".option").find(".img-fluid").attr("src");
                        var title = $(this).closest(".option").find(".option-title").text();
                        var price = $(this).closest(".option").find(".option-price").text();
                        var location = $(this).closest(".option").find(".loc_name").val();

                        // Update the selected option data display area
                        updateSelectedOptionEvening(imageSrc, title, price, location);
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        });
    });

    // Dinner Excursions
    $(document).ready(function() {
        $("#dinner_data").click(function() {
            $.ajax({
                url: "<?php echo admin_url('admin-ajax.php'); ?>", // Replace with your URL
                type: "POST",
                data: {
                    action: 'my_custom_ajax_endpoint',
                    search_keyword: $("#sel5").val()
                },
                success: function(data) {
                    console.log(data);
                    let response = JSON.parse(data);
                    let s = '';
                    for (var i = 0; i < response.length; i++) {
                        s += '<div class="col-sm-6 col-md-4 col-lg-3 border p-3">';
                        s += '<div class="option">';
                        s += '<img class="img-fluid" src="' + response[i].featured_image.large + '" alt="Option 1">';
                        s += '<div class="caption row my-2">';
                        s += ' <div class="col">';
                        s += '<a href="">';
                        s += '<span class="option-title text-primary">' + response[i].name + '</span>';
                        s += '</a>';
                        s += '<input type="hidden" class="loc_name" name="loc_name" value="' + response[i].location + '">';
                        s += ' </div>';
                        s += '<div class="col text-end">';
                        s += '<span class="option-price text-end">' + response[i].price_range + '</span>';
                        s += '</div>';
                        s += '</div>';
                        s += '<div class="star mb-2">';
                        s += '' + response[i].price_range + '';
                        s += '</div>';
                        s += '<div class="buttonOpt w-100">';
                        s += '<button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>';
                        s += '</div>';
                        s += '</div>';
                        s += '</div>';
                        // <option value="' + response[i].id + '">' + response[i].name + '</option>';
                    }
                    $("#dinner").html(s);
                    // Add click event listeners to the Choose buttons inside each option
                    $("#Modal6 .option .submit-btn").click(function() {
                        // Get the data for the selected option
                        var imageSrc = $(this).closest(".option").find(".img-fluid").attr("src");
                        var title = $(this).closest(".option").find(".option-title").text();
                        var price = $(this).closest(".option").find(".option-price").text();
                        var location = $(this).closest(".option").find(".loc_name").val();

                        // Update the selected option data display area
                        updateSelectedOptionDinner(imageSrc, title, price, location);
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        });
    });

    // Night Excursions
    $(document).ready(function() {
        $("#night_data").click(function() {
            $.ajax({
                url: "<?php echo admin_url('admin-ajax.php'); ?>", // Replace with your URL
                type: "POST",
                data: {
                    action: 'my_custom_ajax_endpoint1',
                    search_keyword: $("#sel6").val()
                },
                success: function(data) {
                    console.log(data);
                    let response = JSON.parse(data);
                    let s = '';
                    for (var i = 0; i < response.length; i++) {
                        s += '<div class="col-sm-6 col-md-4 col-lg-3 border p-3">';
                        s += '<div class="option">';
                        s += '<img class="img-fluid" src="' + response[i].featured_image.large + '" alt="Option 1">';
                        s += '<div class="caption row my-2">';
                        s += ' <div class="col">';
                        s += '<a href="">';
                        s += '<span class="option-title text-primary">' + response[i].name + '</span>';
                        s += '</a>';
                        s += '<input type="hidden" class="loc_name" name="loc_name" value="' + response[i].location + '">';
                        s += ' </div>';
                        s += '<div class="col text-end">';
                        s += '<span class="option-price text-end">' + response[i].price_range + '</span>';
                        s += '</div>';
                        s += '</div>';
                        s += '<div class="star mb-2">';
                        s += '' + response[i].price_range + '';
                        s += '</div>';
                        s += '<div class="buttonOpt w-100">';
                        s += '<button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>';
                        s += '</div>';
                        s += '</div>';
                        s += '</div>';
                        // <option value="' + response[i].id + '">' + response[i].name + '</option>';
                    }
                    $("#night").html(s);
                    // Add click event listeners to the Choose buttons inside each option
                    $("#Modal7 .option .submit-btn").click(function() {
                        // Get the data for the selected option
                        var imageSrc = $(this).closest(".option").find(".img-fluid").attr("src");
                        var title = $(this).closest(".option").find(".option-title").text();
                        var price = $(this).closest(".option").find(".option-price").text();
                        var location = $(this).closest(".option").find(".loc_name").val();

                        // Update the selected option data display area
                        updateSelectedOptionNight(imageSrc, title, price, location);
                    });
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                }
            });
        });
    });
</script>

<?php get_footer();

?>