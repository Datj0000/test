load();

function load() {
    axios
        .get("all-statistical")
        .then(function(response) {
            $("#container").html(response.data);
        })
        .catch((error) => {
            console.log(error);
        });
}
$(document).ready(function() {
    var a = ".menu-item";
    $(a).on("click", function() {
        $(a).removeClass("menu-item-active");
        $(this).addClass("menu-item-active");
    });
    $(document).on("click", ".changelanguage", function(event) {
        event.preventDefault();
        var c = $(this).data("lang");
        axios
            .get("change-language/" + c)
            .then(function() {
                location.reload();
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#setting_wallet", function(event) {
        event.preventDefault();
        axios
            .get("setting-wallet")
            .then(function(response) {
                $("#container").html(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#change_pass", function(event) {
        event.preventDefault();
        $(a).removeClass("menu-item-active");
        axios
            .get("change-pass")
            .then(function(response) {
                $("#container").html(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#profile", function(event) {
        event.preventDefault();
        $(a).removeClass("menu-item-active");
        axios
            .get("profile-admin")
            .then(function(response) {
                $("#container").html(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#all_statistical", function(event) {
        event.preventDefault();
        load();
    });
    $(document).on("click", "#all_customer", function(event) {
        event.preventDefault();
        axios
            .get("all-customer")
            .then(function(response) {
                $("#container").html(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#all_recharge", function(event) {
        event.preventDefault();
        axios
            .get("all-recharge")
            .then(function(response) {
                $("#container").html(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#all_without", function(event) {
        event.preventDefault();
        axios
            .get("all-without")
            .then(function(response) {
                $("#container").html(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    });
    $(document).on("click", "#all_buypackage", function(event) {
        event.preventDefault();
        axios
            .get("all-buypackage")
            .then(function(response) {
                $("#container").html(response.data);
            })
            .catch((error) => {
                console.log(error);
            });
    });
});