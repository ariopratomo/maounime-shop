$(document).ready(function () {
  $("#table").DataTable();

  $(".check-menu").on("click", function () {
    const menuId = $(this).data("menu");
    $.ajax({
      url: baseURL + "admin/menu/statuschange",
      type: "post",
      data: {
        menuId: menuId
      },
      success: function () {
        document.location.href = "menu";
      }
    });
  });

  $(".check-submenu").on("click", function () {
    const subMenuId = $(this).data("submenu");
    $.ajax({
      url: baseURL + "admin/menu/submenustatuschange",
      type: "post",
      data: {
        subMenuId: subMenuId
      },
      success: function () {
        document.location.href = "submenu";
      }
    });
  });

  $(".check-access").on("click", function () {
    const MenuId = $(this).data("menu");
    const RoleId = $(this).data("role");

    $.ajax({
      url: baseURL + "admin/role/accesschange",
      type: "post",
      data: {
        MenuId: MenuId,
        RoleId: RoleId
      },
      success: function () {
        document.location.href = RoleId;
      },
      error: function () {
        // $('#table_kata_sara').load("index.php?p=kata_sara");
        console.log("error ");
        console.log(MenuId);
        console.log(RoleId);
      }
    });
  });
  $("#first_price").keyup(function () {
    let price = parseInt($("#first_price").val());
    var lastPrice = price;
    $("#last_price").val(lastPrice);
  });
  $("#discount").keyup(function () {
    let price = parseInt($("#first_price").val());
    var discount = parseInt($("#discount").val());
    var lastPrice = price - price * (discount / 100);
    $("#last_price").val(lastPrice);
  });

  /** Summernote Start */

  $("#summernote").summernote({
    height: 200,
    // toolbar: [
    //   ["style", ["bold", "italic", "underline", "clear"]],
    //   ["fontsize", ["fontsize"]],
    //   ["color", ["color"]],
    //   ["para", ["ul", "ol", "paragraph"]],
    //   ["insert", ["picture"]]
    // ],
    //set callback image tuk upload ke serverside
    callbacks: {
      onImageUpload: function (files) {
        for (let i = 0; i < files.length; i++) {
          $.upload(files[i]);
        }
      },
      onMediaDelete: function (target) {
        deleteImage(target[0].src);
      }
    },
  });


  $.upload = function (file) {
    let out = new FormData();
    out.append('file', file, file.name);

    $.ajax({
      method: 'POST',
      url: baseURL + "admin/summer/saveimage",
      contentType: false,
      cache: false,
      processData: false,
      data: out,
      success: function (img) {
        $('#summernote').summernote('insertImage', img);
      },
      error: function (jqXHR, textStatus, errorThrown) {
        console.error(textStatus + " " + errorThrown);
      }
    });
  };
  function deleteImage(src) {
    $.ajax({
      data: { src: src },
      type: "POST",
      url: baseURL + "admin/summer/deleteimage",
      cache: false,
      success: function (response) {
        console.log(response);
      }
    });
  }

  /** Summernote End */
});


/* Prview Image Start */
$('.custom-file-input').on('change', function () {
  //get the file name
  let fileName = $(this).val();
  //replace the "Choose a file" label
  $(this).next('.custom-file-label').html(fileName);
  filePreview(this);
})

function filePreview(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      prevImg.setAttribute("src", e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
/* Prview Image End */

