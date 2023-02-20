<?php
/*
Template Name: Form2
*/
get_header(); 
echo $_POST['search'];
echo $_POST['adults'];
echo $_POST['childern'];
echo $_POST['date']; 

$get_api  = get_api_data();
$results = json_decode($get_api);

?>

<!-- ////////////////Form2 page content Start////////////////// -->

<!-- Form section -->
<div class="form_sec pt-5">
    <form action="">
        <div class="container-fluid pt-5">
            <div class="ttle py-5 border-bottom">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <h2 class="form_title text-light text-center text-lg mb-1">
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
                <div class="choose_sec py-5">
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="stay" name="optradio" value="stay" checked>
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
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <!-- Carosel -->
                                                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" class="d-block w-100" alt="...">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" class="d-block w-100" alt="...">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" class="d-block w-100" alt="...">
                                                            </div>
                                                        </div>
                                                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </button>
                                                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="visually-hidden">Next</span>
                                                        </button>
                                                    </div>
                                                    <!-- Carosel -->
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
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
                        <input type="radio" class="form-check-input" id="breakfast" name="optradio" value="breakfast" checked>
                        <label class="form-check-label" for="breakfast">Breakfast</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal2">
                                choose now <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
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
                        <input type="radio" class="form-check-input" id="morning" name="optradio" value="morning" checked>
                        <label class="form-check-label" for="morning">Morning Excursions</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal3">
                                choose now <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div id="myImageSelect" class="p-2 p-sm-5">
                                            <h2 class="mb-4">Choose Hotel</h2>
                                            <div class="row">
                                            <?php foreach($results->data as $data){ ?>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo $data->thumbnailHiResURL; ?>" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary"><?php echo $data->title;?></span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end"><?php echo $data->priceFormatted;?></span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
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
                            <button type="button" class="addBtn" id="myButton1">Add HTML 1</button>
                            <div id="sectionContainer1"></div>
                        </div>

                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" id="lunch" name="optradio" value="stay" checked>
                        <label class="form-check-label" for="lunch">Lunch</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal4">
                                choose now <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
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
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
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
                        <input type="radio" class="form-check-input" id="evening" name="optradio" value="evening" checked>
                        <label class="form-check-label" for="evening">Evening Excursions</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal5">
                                choose now <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
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
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
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
                        <input type="radio" class="form-check-input" id="dinner" name="optradio" value="dinner" checked>
                        <label class="form-check-label" for="dinner">Dinner</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal6">
                                choose now <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
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
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
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
                        <input type="radio" class="form-check-input" id="night" name="optradio" value="night" checked>
                        <label class="form-check-label" for="night">Night Life</label>
                        <div class="ch_btn">
                            <button type="button" class="btnCh" data-bs-toggle="modal" data-bs-target="#Modal7">
                                choose now <i class="fa fa-2x fa-plus-circle" aria-hidden="true"></i>
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
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
                                                        <input type="radio" id="a50" name="check-substitution-2" />
                                                        <label class="btn btn-default text-light" for="a50">Choose</label>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-lg-3 border p-3">
                                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/inc/img/home1.jpg" alt="Option 1">
                                                    <div class="caption row my-2">
                                                        <div class="col">
                                                            <span class="text-primary">Fox Kandy</span>
                                                        </div>
                                                        <div class="col text-end">
                                                            <span class="text-end">USD 110</span>
                                                        </div>
                                                    </div>
                                                    <div class="star mb-2">
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star checked"></span>
                                                        <span class="fa fa-star"></span>
                                                        <span class="fa fa-star"></span>
                                                    </div>
                                                    <div class="buttonOpt w-100 bg-primary">
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
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Form section -->

<!-- ////////////////Form2 page content End////////////////// -->

<?php get_footer(); ?>