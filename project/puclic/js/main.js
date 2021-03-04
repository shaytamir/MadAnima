/* message timer */
$("div.sm-box").delay(3000).slideUp();

$(".add_to_cart_btn").on("click", (e) => {
    const id = e.target["id"];
    console.log("id", id);
    $.ajax({
        url: BASE_URL + "shop/add-to-cart",
        type: "GET",
        dataType: "html",
        data: { id },
        success: function (response) {
            location.reload();
        },
    });
});

$(".update_cart").on("click", (e) => {
    const id = e.target["name"];
    const op = e.target.value;
    // const id = $(this).date("id");

    $.ajax({
        url: BASE_URL + "shop/update-cart",
        type: "GET",
        dataType: "html",
        data: { id, op },
        success: function (response) {
            location.reload();
        },
    });
});

/* str to -  url case  (Foo Bla = foo-bla) */
String.prototype.permalink = function () {
    return this.toString().trim().toLocaleLowerCase().replace(/\s+/g, "-");
};
/* uses permalink
 * from cms create new menu
 */
$(".origin_text").on("keyup", function () {
    $(".target_text").val($(this).val().permalink());
});

/*  */
