$(document).ready(function () {
  $.ajax({
    type: "POST",
    url: "../../src/routes/routes.php",
    data: {
      choice: "login",
      user: "user",
      pass: "pass",
    },
    success: function (response) {
      $("#tt").text(response);
    },
  });
});
