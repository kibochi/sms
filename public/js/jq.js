$("#delete_account").on("click", function(e) {
    e.preventDefault();

    // var id = $(this).data("id");
    // var token = $("meta[name='csrf-token']").attr("content");

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete",
    }).then((result) => {
        if (result.isConfirmed) {
            var form = document.getElementById("form-delete").submit();

            Swal.fire("Deleted!", "Your Account has been deleted.", "success");
        }
    });
});

$("#delete_student").on("click", function(e) {
    e.preventDefault();

    // var id = $(this).data("id");
    // var token = $("meta[name='csrf-token']").attr("content");

    Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete",
    }).then((result) => {
        if (result.isConfirmed) {
            var form = document.getElementById("form-delete").submit();

            Swal.fire("Deleted!", "Student has been deleted.", "success");
        }
    });
});

$("#myTable").DataTable({
    select: true,
});

$("#addfield").on("click", function() {
    var html = "";
    html += "<tr>";
    html +=
        '<td><input type="text" name="subject_name[]" placeholder="eg. Computer" class="form-control"></td>';

    html +=
        '<td><input type="number" name="marks[]" placeholder="eg. 80" class="form-control"></td>';

    html +=
        '<td><button type="button" class="btn btn-outline-danger ml-auto" id="removefield"><i class="fa fa-trash"></i></button> </td>';

    html += "</tr>";

    $("tbody").append(html);
});

$(document).on("click", "#removefield", function() {
    $(this).closest("tr").remove();
});