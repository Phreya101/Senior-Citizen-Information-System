$(document).ready(function () {
  // Get the current date
  var currentDate = new Date();

  // Calculate the date 60 years ago
  var maxDate = new Date(currentDate);
  maxDate.setFullYear(currentDate.getFullYear() - 60);

  // Format the date as YYYY-MM-DD (required by the date input)
  var formattedMaxDate = maxDate.toISOString().split("T")[0];

  // Set the max attribute of the date input element
  document.getElementById("bday").setAttribute("max", formattedMaxDate);
});

$(document).ready(function () {
  // Function to calculate age
  function calculateAge(birthDate) {
    var currentDate = new Date();
    var age = currentDate.getFullYear() - birthDate.getFullYear();
    var monthDiff = currentDate.getMonth() - birthDate.getMonth();
    if (
      monthDiff < 0 ||
      (monthDiff === 0 && currentDate.getDate() < birthDate.getDate())
    ) {
      age--;
    }
    return age;
  }

  // Get references to the date input and age input elements
  var bdayInput = document.getElementById("bday");
  var ageInput = document.getElementById("age");

  // Add event listener to the date input
  bdayInput.addEventListener("change", function () {
    // Get the selected date from the input
    var selectedDate = new Date(this.value);

    // Check if a valid date is selected
    if (!isNaN(selectedDate.getTime())) {
      // Calculate age
      var age = calculateAge(selectedDate);

      // Update the age input value
      ageInput.value = age;
    } else {
      // If an invalid date is selected, clear the age input
      ageInput.value = "";
    }
  });
});

$(document).ready(function () {
  $("#addSenior").submit(function (e) {
    e.preventDefault();

    var addSenior = $(this).serialize();
    addSenior += "&action=addSenior";

    $.ajax({
      url: "ajax.php",
      method: "post",
      data: addSenior,
      success: function (response) {
        Swal.fire({
          position: "top-end",
          title: "Added!",
          text: "The data is successfuly Recorded!",
          icon: "success",
          showConfirmButton: false,
          timer: 1500,
        });
        setTimeout(function () {
          location.reload();
        }, 1500);
      },
    });
  });
});
