// Custom script here

// stay
function updateSelectedOptionStay(imageSrc, title, price, location) {
  document.getElementById("btn1_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn1_inside").innerHTML = title;
  document.getElementById("btn1_price").innerHTML = price;
  document.getElementById("sel1").value = location;
}

// Morning  
function updateSelectedOptionMorning(imageSrc, title, price, location) {
  document.getElementById("btn3_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn3_inside").innerHTML = title;
  document.getElementById("btn3_price").innerHTML = price;
  document.getElementById("sel3").value = location;
}
// Lunch
function updateSelectedOptionLunch(imageSrc, title, price, location) {
  document.getElementById("btn4_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn4_inside").innerHTML = title;
  document.getElementById("btn4_price").innerHTML = price;
  document.getElementById("sel4").value = location;
}

// Evening
function updateSelectedOptionEvening(imageSrc, title, price, location) {
  document.getElementById("btn5_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn5_inside").innerHTML = title;
  document.getElementById("btn5_price").innerHTML = price;
  document.getElementById("sel5").value = location;
}
// Dinner
function updateSelectedOptionDinner(imageSrc, title, price, location) {
  document.getElementById("btn6_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn6_inside").innerHTML = title;
  document.getElementById("btn6_price").innerHTML = price;
  document.getElementById("sel6").value = location;
}
// Night
function updateSelectedOptionNight(imageSrc, title, price, location) {
  document.getElementById("btn7_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn7_inside").innerHTML = title;
  document.getElementById("btn7_price").innerHTML = price;
  document.getElementById("sel7").value = location;
}

// Step form scripts
var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtnNext").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtnNext").innerHTML = "Next <i class='fa fa-arrow-right' aria-hidden='true'></i>";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        // if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regForm").submit();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }


// Add click event listeners to the Choose buttons inside each option
// document
//   .querySelectorAll("#Modal1 .option .submit-btn")
//   .forEach(function (button) {
//     button.addEventListener("click", function () {
//       // Get the data for the selected option
//       var imageSrc = this.parentNode.parentNode
//         .querySelector(".img-fluid")
//         .getAttribute("src");
//       var title =
//         this.parentNode.parentNode.querySelector(".option-title").innerHTML;
//       var price =
//         this.parentNode.parentNode.querySelector(".option-price").innerHTML;
//       var location =
//         this.parentNode.parentNode.querySelector(".loc_name").value;
//       // Update the selected option data display area
//       updateSelectedOption(imageSrc, title, price, location);
//     });
//   });
// Choose Your Stay scripts
// Breakfast
// Function to update the selected option data display area


// Navbar toggle
$(document).ready(function () {
  $(".navbar-toggler").click(function () {
    $(".collapse").toggleClass("show");
  });
});

// Add another section Function
function createNewSection1() {
  var newDiv = document.createElement("div");
  newDiv.setAttribute("id", "newSection1");

  var textIconDiv = document.createElement("div");
  textIconDiv.setAttribute("id", "text-icon-div1");

  var text = document.createElement("p");
  text.innerHTML = "Text";
  textIconDiv.appendChild(text);

  var icon = document.createElement("i");
  icon.setAttribute("class", "fa fa-2x fa-plus-circle"); // replace "icon-name" with the appropriate icon class
  textIconDiv.appendChild(icon);

  newDiv.appendChild(textIconDiv);

  var closeButton = document.createElement("button");
  var closeText = document.createTextNode("Close");
  closeButton.appendChild(closeText);
  closeButton.setAttribute("class", "close-button");
  closeButton.setAttribute("onclick", "closeSection(this)");

  newDiv.appendChild(closeButton);
  newDiv.setAttribute("class", "newSec");
  document.getElementById("sectionContainer1").appendChild(newDiv);
}

function closeSection(element) {
  element.parentNode.remove();
}
document
  .getElementById("myButton1")
  .addEventListener("click", function (event) {
    event.preventDefault();
    createNewSection1();
  });
document
  .getElementById("myButton2")
  .addEventListener("click", function (event) {
    event.preventDefault();
    createNewSection2();
  });

// video model
$(document).ready(function () {
  // Gets the video src from the data-src on each button

  var $videoSrc;
  $(".video-btn").click(function () {
    $videoSrc = $(this).data("src");
  });
  console.log($videoSrc);

  // when the modal is opened autoplay it
  $("#myModal").on("shown.bs.modal", function (e) {
    // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
    $("#video").attr(
      "src",
      $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0"
    );
  });

  // stop playing the youtube video when I close the modal
  $("#myModal").on("hide.bs.modal", function (e) {
    // a poor man's stop video
    $("#video").attr("src", $videoSrc);
  });

  // document ready
});
