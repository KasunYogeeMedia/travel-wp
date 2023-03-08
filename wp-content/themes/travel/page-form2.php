<?php
/*
Template Name: Form2
*/
get_header();
// echo get_api_data();
?>
<!-- ////////////////Form2 page content Start////////////////// -->

<!-- Form section -->
<div class="form_sec form-2 pt-5">
    <form action="">
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
                    <div class="col-md-3 mt-4 mt-md-0">
                        <div class="next_btn text-end">
                            <a class="text-light btn px-5" href="">
                                <span class="lg-text fw-bold">
                                    Next <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                </span>
                                <br>
                                Day 02
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="choose_sec py-5 position-relative">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="stay" name="optradio" value="stay">
                        <label class="form-check-label" for="stay">Choose Your Stay</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal1">
                                choose now <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row">
                                                <?php foreach ($results->data as $data) { ?>

                                                    <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                        <div class="option">
                                                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                            <div class="caption row my-2">
                                                                <div class="col">
                                                                    <a href="<?php echo $data->webURL; ?>"> <span class="option-title text-primary"><?php echo $data->title; ?></span></a>
                                                                </div>
                                                                <div class="col text-end">
                                                                    <span class="option-price text-end"><?php echo $data->priceFormatted; ?></span>
                                                                </div>
                                                            </div>
                                                            <div class="star mb-2">
                                                                <?php
                                                                $rating = (int) $data->rating;

                                                                $x = 1;

                                                                while ($x <= 5) {
                                                                    if ($rating >= $x) { ?>
                                                                        <span class="fa fa-star checked"></span>
                                                                    <?php } else { ?>
                                                                        <span class="fa fa-star"></span>
                                                                <?php }
                                                                    $x++;
                                                                }
                                                                ?>

                                                            </div>
                                                            <div class="buttonOpt w-100">
                                                                <button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php  } ?>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="selectedOption1" class="ms-2 ms-sm-5 ps-3">
                                <div class="data_show">
                                    <img class="mb-2 w-100" id="selectedOptionImage1" src="" alt="">
                                    <h6 class="sel_tit" id="selectedOptionTitle1"></h6>
                                    <p class="d-none" id="selectedOptionPrice1"></p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- select option working section -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="breakfast" name="optradio" value="breakfast">
                        <label class="form-check-label" for="breakfast">Breakfast</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal2">
                                a restaurant? <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <div class="option">
                                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                        <div class="caption row my-2">
                                                            <div class="col">
                                                                <a href="">
                                                                    <span class="option-title text-primary">Fox Kandy 1</span>
                                                                </a>
                                                            </div>
                                                            <div class="col text-end">
                                                                <span class="option-price text-end">USD 100</span>
                                                            </div>
                                                        </div>
                                                        <div class="star mb-2">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="buttonOpt w-100">
                                                            <button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <div class="option">
                                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                        <div class="caption row my-2">
                                                            <div class="col">
                                                                <a href=""><span class="option-title text-primary">Fox Kandy 2</span></a>
                                                            </div>
                                                            <div class="col text-end">
                                                                <span class="option-price text-end">USD 110</span>
                                                            </div>
                                                        </div>
                                                        <div class="star mb-2">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="buttonOpt w-100">
                                                            <button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <div class="option">
                                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                        <div class="caption row my-2">
                                                            <div class="col">
                                                                <a href=""><span class="option-title text-primary">Fox Kandy 3</span></a>
                                                            </div>
                                                            <div class="col text-end">
                                                                <span class="option-price text-end">USD 120</span>
                                                            </div>
                                                        </div>
                                                        <div class="star mb-2">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="buttonOpt w-100">
                                                            <button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <div class="option">
                                                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                        <div class="caption row my-2">
                                                            <div class="col">
                                                                <a href=""><span class="option-title text-primary">Fox Kandy 4</span></a>
                                                            </div>
                                                            <div class="col text-end">
                                                                <span class="option-price text-end">USD 130</span>
                                                            </div>
                                                        </div>
                                                        <div class="star mb-2">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="buttonOpt w-100">
                                                            <button type="button" class="submit-btn btn btn-default text-light w-100">Choose</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="selectedOption" class="ms-2 ms-sm-5 ps-3">
                                <div class="data_show">
                                    <img class="mb-2 w-100" id="selectedOptionImage" src="" alt="">
                                    <h6 class="sel_tit" id="selectedOptionTitle"></h6>
                                    <p class="d-none" id="selectedOptionPrice"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- select option working section -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="morning" name="optradio" value="morning">
                        <label class="form-check-label" for="morning">Morning Excursions</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal3">
                                Choose <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row">
                                                <?php foreach ($results->data as $data) { ?>
                                                    <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                        <img class="img-fluid" src="<?php echo $data->thumbnailHiResURL; ?>" alt="Option 1">
                                                        <div class="caption row my-2">
                                                            <div class="col">
                                                                <span class="option-title text-primary"><?php echo $data->title; ?></span>
                                                            </div>
                                                            <div class="col text-end">
                                                                <span class="option-price text-end"><?php echo $data->priceFormatted; ?></span>
                                                            </div>
                                                        </div>
                                                        <div class="star mb-2">
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        </div>
                                                        <div class="buttonOpt w-100">
                                                            <input type="radio" id="a50" name="check-substitution-2" />
                                                            <label class="btn btn-default text-light" for="a50">Choose</label>
                                                        </div>
                                                    </div>
                                                <?php  } ?>

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
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="lunch" name="optradio" value="stay">
                        <label class="form-check-label" for="lunch">Lunch</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal4">
                                a restaurant? <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
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
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="evening" name="optradio" value="evening">
                        <label class="form-check-label" for="evening">Evening Excursions</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal5">
                                Choose <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
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
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dinner" name="optradio" value="dinner">
                        <label class="form-check-label" for="dinner">Dinner</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal6">
                                a restaurant? <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal6" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
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
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="night" name="optradio" value="night">
                        <label class="form-check-label" for="night">Night Life</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal7">
                                Choose <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal7" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="option-title text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="option-price text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
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
    </form>
</div>
<!-- Form section -->

<!-- ////////////////Form2 page content End////////////////// -->

<?php get_footer(); ?>