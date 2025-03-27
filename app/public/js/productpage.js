$(document).ready(function() {
    $(".addToCart").click(function() {
        let consoleId = $(this).data("id");

        $.post("cart.php", { action: "add", console_id: consoleId }, function(response) {
            alert(response.message);
        }, "json").fail(function() {
            alert("Error adding to cart.");
        });
    });

    $(".removeFromCart").click(function() {
        let consoleId = $(this).data("id");

        $.post("cart.php", { action: "remove", console_id: consoleId }, function(response) {
            alert(response.message);
        }, "json").fail(function() {
            alert("Error removing from cart.");
        });
    });

    $("#clearCart").click(function() {
        $.post("cart.php", { action: "clear" }, function(response) {
            alert(response.message);
        }, "json").fail(function() {
            alert("Error clearing cart.");
        });
    });
});
