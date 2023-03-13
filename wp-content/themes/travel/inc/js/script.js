// Custom script here
function updateSelectedOption1(imageSrc, title, price, location) {
  document.getElementById("btn1_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn1_inside").innerHTML = title;
  document.getElementById("btn1_price").innerHTML = price;
  document.getElementById("sel1").value = location;
}

function updateSelectedOption2(imageSrc, title, price, location) {
  document.getElementById("btn2_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn2_inside").innerHTML = title;
  document.getElementById("btn2_price").innerHTML = price;
  document.getElementById("sel2").value = location;
}

function updateSelectedOption4(imageSrc, title, price, location) {
  document.getElementById("btn4_inside").style.backgroundImage =
    "url('" + imageSrc + "')";
  document.getElementById("btn4_inside").innerHTML = title;
  document.getElementById("btn4_price").innerHTML = price;
  document.getElementById("sel4").value = location;
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
