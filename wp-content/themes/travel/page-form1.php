<?php
/*
Template Name: Form1
*/
get_header();  ?>

<!-- ////////////////Form1 page content Start////////////////// -->

<!-- Form section -->
<div class="form_sec form-1 py-5 ">
    <div class="container pt-5">
        <div class="ttle text-center pt-5">
            <h2 class="form_title text-light text-center text-lg mb-3">
                Start Planing Your Trip
            </h2>
            <span class="text-light sub_head">Choose your stay, find what to do and where to eat</span>
        </div>
        <div class="form">
            <form method="POST" action="<?php bloginfo('url'); ?>/form-2/" id="myForm">
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="input-group">
                            <input class="form-control form-control-lg border-end-0 border px-2 px-sm-5 py-3" type="search" placeholder="Where to go?" id="search" name="search">
                            <span class="input-group-append">
                                <button class="btn btn-lg bg-white border-start-0 border ms-n5 rounded-0 rounded-end mt-0 py-3" type="button">
                                    <i class="fa fa-search fa-2x pt-1"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-select text-secondary form-select-lg px-2 px-sm-5 py-3" aria-label="Default select example" name="adults" id="adults">
                                <option selected>Adults</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 mt-md-0">
                        <div class="input-group">
                            <select class="form-select text-secondary form-select-lg px-2 px-sm-5 py-3" aria-label="Default select example" name="childern" id="childern">
                                <option selected>Children</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="input-group date" id="datepicker">

                            <input id="date" class="form-control text-secondary form-control-lg px-2 px-sm-5 py-3 date_range" type="text" name="daterange" placeholder="Select date range" />
                            <input name="datediff" id="datediff" type="hidden">
                            <input name="alldates" id="alldates" type="hidden">
                        </div>

                        <script>
                            let selectedDates = [];
                            let diffInDays; // declare diffInDays outside the function

                            $(function() {
                                $('input[name="daterange"]').daterangepicker({
                                    opens: 'left',

                                }, function(startDate, endDate, label) {

                                    // Convert the start and end dates to Moment objects
                                    const start = moment(startDate, 'MM/DD/YYYY');
                                    const end = moment(endDate, 'MM/DD/YYYY');

                                    // Calculate the difference in days between the two dates
                                    diffInDays = end.diff(start, 'days');

                                    
                                    // Loop through all the dates between the start and end dates and add them to the selectedDates array
                                    let currentDate = start.clone();
                                    while (currentDate <= end) {
                                        selectedDates.push(currentDate.format('MM/DD/YYYY'));
                                        currentDate = currentDate.add(1, 'days');
                                    }

                                    // set the value of the input field
                                    // date = document.getElementById("date");
                                    document.getElementById("datediff").value = diffInDays;
                                    document.getElementById("alldates").value = selectedDates;

                                });
                            });

                            // let selectedDates = []; // declare selectedDates array
                            // let diffInDays;

                            // $(function() {
                            //     $('input[name="daterange"]').daterangepicker({
                            //         opens: 'left',
                            //     }, function(startDate, endDate, label) {

                            //         // Convert the start and end dates to Moment objects
                            //         const start = moment(startDate, 'MM/DD/YYYY');
                            //         const end = moment(endDate, 'MM/DD/YYYY');

                            //         // Calculate the difference in days between the two dates
                            //         diffInDays = end.diff(start, 'days');


                            //         // Loop through all the dates between the start and end dates and add them to the selectedDates array
                            //         let currentDate = start.clone();
                            //         while (currentDate <= end) {
                            //             selectedDates.push(currentDate.format('MM/DD/YYYY'));
                            //             currentDate = currentDate.add(1, 'days');
                            //         }

                            //         // set the value of the input field
                            //         document.getElementById("datediff").value = diffInDays;
                            //         document.getElementById("alldates").value = selectedDates;
                            //         console.log(diffInDays);
                            //     });
                            // });
                        </script>


                    </div>
                </div>
                <div class="row mt-5 pb-5">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary bg-green mb-2 btn-lg w-100 fw-bold px-2 px-sm-5 py-3">Lets Plan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Form section -->

<!-- ////////////////Form1 page content End////////////////// -->

<?php get_footer(); ?>