let time;
let typing_duration = 1000;
const school_name = document.querySelector("#school_name");
const myalert = document.querySelector(".alert");
const addclass = document.querySelector("#addclass");

setTimeout(() => {
    myalert.classList.add("hidden");
}, 2000);

school_name.addEventListener("keyup", () => {
    clearTimeout(time);
    if (school_name.value) {
        time = setTimeout(makePrefix, typing_duration);
    }
});

//user is "finished typing," do something
function makePrefix() {
    let prefix = school_name.value.match(/\b\w/g).join("").toUpperCase();

    let prefix_name = (document.getElementById("prefix_name").value = prefix);
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