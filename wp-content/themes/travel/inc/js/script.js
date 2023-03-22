// footer fit bottom function

window.addEventListener("load", function () {
  var bodyHeight = document.body.clientHeight;
  var windowHeight = window.innerHeight;
  var footer = document.getElementById("footer");
  var footerHeight = footer.offsetHeight;

  if (bodyHeight < windowHeight) {
    var newFooterHeight = footerHeight + (windowHeight - bodyHeight);
    // footer.style.height = newFooterHeight + 'px';
    footer.style.position = "absolute";
    footer.style.bottom = "0";
  }
});

// for (let i = 0; i < data.length; i++) {
//   const item = data[i];
//   const index = i + 2; // to match the button IDs
//   const btnInside = document.getElementById(`btn${index}_inside`);
//   const btnPrice = document.getElementById(`btn${index}_price`);
//   const sel = document.getElementById(`sel${index}`);

//   btnInside.style.backgroundImage = `url('${item.img}')`;
//   btnInside.innerHTML = item.title;
//   btnPrice.innerHTML = item.price;
//   sel.value = item.location;

//   // call the corresponding updateSelectedOption function
//   switch (index) {
//     case 2:
//       updateSelectedOption2(item.img, item.title, item.price, item.location);
//       break;
//     case 3:
//       updateSelectedOption3(item.img, item.title, item.price, item.location);
//       break;
//     case 4:
//       updateSelectedOption4(item.img, item.title, item.price, item.location);
//       break;
//     case 5:
//       updateSelectedOption5(item.img, item.title, item.price, item.location);
//       break;
//     case 6:
//       updateSelectedOption6(item.img, item.title, item.price, item.location);
//       break;
//     case 7:
//       updateSelectedOption7(item.img, item.title, item.price, item.location);
//       break;
//     default:
//       break;
//   }
// }

function updateSelectedOption3(imageSrc, title, price, location) {
  document.getElementById("btn3_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn3_inside").innerHTML = title;
  document.getElementById("btn3_price").innerHTML = price;
  document.getElementById("sel3").value = location;
}

function updateSelectedOption4(imageSrc, title, price, location) {
  document.getElementById("btn4_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn4_inside").innerHTML = title;
  document.getElementById("btn4_price").innerHTML = price;
  document.getElementById("sel4").value = location;
}

function updateSelectedOption5(imageSrc, title, price, location) {
  document.getElementById("btn5_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn5_inside").innerHTML = title;
  document.getElementById("btn5_price").innerHTML = price;
  document.getElementById("sel5").value = location;
}

function updateSelectedOption6(imageSrc, title, price, location) {
  document.getElementById("btn6_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn6_inside").innerHTML = title;
  document.getElementById("btn6_price").innerHTML = price;
  document.getElementById("sel6").value = location;
}

function updateSelectedOption7(imageSrc, title, price, location) {
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
  if (n == x.length - 1) {
    document.getElementById("nextBtnNext").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtnNext").innerHTML =
      "Next <i class='fa fa-arrow-right' aria-hidden='true'></i>";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n);
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
    // ... get form data as JSON:
    const formData = {};
    const inputs = document.querySelectorAll("input, select, textarea");
    for (let i = 0; i < inputs.length; i++) {
      const input = inputs[i];
      if (
        input.name == "s" ||
        input.name == "optradio" ||
        input.name == "" ||
        input.name == "json_data" ||
        input.name == "permalink" ||
        input.name == "__phash" ||
        input.name == "wpdm_login[log]" ||
        input.name == "wpdm_login[pwd]" ||
        input.name == "rememberme" ||
        input.name == "redirect_to"
      ) {
        // formData[input.name] = input.value;
      } else {
        formData[input.name] = input.value;
      }
    }
    const jsonData = JSON.stringify(formData);
    // Send an AJAX request to the API endpoint
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://ongoing.website/websites/travel-wp/form-3/');
    // xhr.open("POST", "http://travel-wp.test/form-3/");
    xhr.setRequestHeader("Content-Type", "application/json");
    xhr.onload = function () {
      if (xhr.status === 200) {
        // Handle the response from the API if needed
        console.log(xhr.responseText);

        document.getElementById("regForm").action =
          "https://ongoing.website/websites/travel-wp/form-3/";
        // document.getElementById("regForm").action =
        //   "http://travel-wp.test/form-3/";

        // ... submit the form:
        document.getElementById("regForm").submit();
      } else {
        // Handle the error if the request failed
        console.error("Request failed.  Returned status of " + xhr.status);
      }
    };
    xhr.send(jsonData);
    // ... set the form action to the URL you want to submit the form data to:
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x,
    y,
    i,
    valid = true;
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
  var i,
    x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

// Navbar toggle
$(document).ready(function () {
  $(".navbar-toggler").click(function () {
    $(".collapse").toggleClass("show");
  });
});

/////////////////////////////////////////////////////////////////////////////////////////// Add another section Function

// function createNewSection1() {
//   var newDiv = document.createElement("div");
//   newDiv.setAttribute("id", "newSection1");

//   var textIconDiv = document.createElement("div");
//   textIconDiv.setAttribute("id", "text-icon-div1");

//   var text = document.createElement("p");
//   text.innerHTML = "Text";
//   textIconDiv.appendChild(text);

//   var icon = document.createElement("i");
//   icon.setAttribute("class", "fa fa-2x fa-plus-circle"); // replace "icon-name" with the appropriate icon class
//   textIconDiv.appendChild(icon);

//   newDiv.appendChild(textIconDiv);

//   var closeButton = document.createElement("button");
//   var closeText = document.createTextNode("Close");
//   closeButton.appendChild(closeText);
//   closeButton.setAttribute("class", "close-button");
//   closeButton.setAttribute("onclick", "closeSection(this)");

//   newDiv.appendChild(closeButton);
//   newDiv.setAttribute("class", "newSec");
//   document.getElementById("sectionContainer1").appendChild(newDiv);
// }

// function closeSection(element) {
//   element.parentNode.remove();
// }
// document
//   .getElementById("myButton1")
//   .addEventListener("click", function (event) {
//     event.preventDefault();
//     createNewSection1();
//   });
// document
//   .getElementById("myButton2")
//   .addEventListener("click", function (event) {
//     event.preventDefault();
//     createNewSection2();
//   });

//////////////////////////////////////////////////////////////////////////////////////////// Add another section Function

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
