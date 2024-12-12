$(document).ready(function () {
    $('#registrationForm').on('submit', function (e) {
    e.preventDefault(); // Prevent default form submission
   
    let isValid = true;
    const requiredFields = ['#name', '#email', '#phone', '#gender'];
   
    // Validate all fields
    requiredFields.forEach(function (field) {
    const $input = $(field);
    if (!$input.val()) {
    $input.css('border', '2px solid red'); // Highlight missing field
    isValid = false;
  } else {
    $input.css('border', ''); // Reset border
    }
    });
    if (isValid) {
    // Show dialog box
    $('body').append(`
    <div class="dialog-box">
    <p>Thank you for registering!</p>
    <button id="closeDialog">OK</button>
    </div>
    `);
   
    $('.dialog-box').fadeIn();
   
    $('#closeDialog').on('click', function () {
    $('.dialog-box').fadeOut(function () {
    $(this).remove();
    });
    });
    // Clear form after successful submission
    $('#registrationForm')[0].reset();
    } else {
    alert('Please fill out all required fields.');
    }
    });
   });