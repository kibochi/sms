let time;
let typing_duration = 5000;
let school_name = document.querySelector("#school_name");

school_name.addEventListener("keyup", () => {
    clearTimeout(time);
    if (school_name.value) {
        time = setTimeout(makePrefix, typing_duration);
    }
});

//user is "finished typing," do something
function makePrefix() {
    let prefix = school_name.value.match(/\b\w/g).join("");

    let prefix_name = (document.getElementById("prefix_name").value = prefix);
    console.log(prefix);
}

$('select[name="county"]').on("change", function(e) {
    e.preventDefault();
    var county_id = $(this).val();
    console.log(county_id);
    if (county_id) {
        $.ajax({
            url: "/getCons/" + county_id,
            type: "GET",
            dataType: "json",
            success: function(data) {
                console.log(data);

                $('select[name="constituency"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="constituency"]').append(
                        '<option value="' + key + '">' + value + "</option>"
                    );
                });
            },
        });
    }
});

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

            Swal.fire("Deleted!", "Your file has been deleted.", "success");
        }
    });
});