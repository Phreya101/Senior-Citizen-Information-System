$(document).ready(function () {
  $(".edit-user-btn").click(function () {
    var id = $(this).data("user-id");
    $.ajax({
      url: "pages/modals/editUser.php",
      method: "get",
      data: {
        id: id,
      },
      success: function (response) {
        $("#usercontent").html(response);
        $("#editUser").modal("show");
      },
    });
  });
});

$(document).ready(function () {
  $(".userDisable").click(function () {
    var id = $(this).data("user-id");
    $.ajax({
      url: "ajax.php",
      method: "post",
      data: {
        id: id,
        action: "disableUser",
      },
      success: function (response) {
        Swal.fire({
          position: "top-end",
          title: "Disabled!",
          text: "User disabled successfully.",
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

$(document).ready(function () {
  $(".enableUser").click(function () {
    var id = $(this).data("user-id");
    $.ajax({
      url: "ajax.php",
      method: "post",
      data: {
        id: id,
        action: "enableUser",
      },
      success: function (response) {
        Swal.fire({
          position: "top-end",
          title: "Enabled!",
          text: "User enabled successfully.",
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

$(document).ready(function () {
  $(".deleteUser").click(function () {
    var id = $(this).data("user-id");
    $.ajax({
      url: "pages/modals/deleteUser.php",
      method: "get",
      data: {
        id: id,
        action: "deleteUser",
      },
      success: function (response) {
        $("#dltcontent").html(response);
        $("#dltUser").modal("show");
      },
    });
  });
});
