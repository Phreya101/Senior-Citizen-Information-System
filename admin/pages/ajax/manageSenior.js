$(document).ready(function () {
  $(".edit").click(function () {
    var id = $(this).data("id");
    $.ajax({
      url: "pages/modals/editSenior.php",
      method: "get",
      data: {
        id: id,
      },
      success: function (response) {
        $("#seniorcontent").html(response);
        $("#editSenior").modal("show");
      },
    });
  });
});

$(document).ready(function () {
  $(".delete").click(function () {
    var id = $(this).data("id");
    $.ajax({
      url: "pages/modals/deleteSenior.php",
      method: "get",
      data: {
        id: id,
      },
      success: function (response) {
        $("#dltcontent").html(response);
        $("#dltSenior").modal("show");
      },
    });
  });
});
