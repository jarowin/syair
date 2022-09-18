$(document).ready(function () {
    $(".progress-bar").each(function (index) {
        var x = Math.floor(Math.random() * 100 + 1);
        if (x < 50) {
            x += 50;
        }
        var percent = x + "%";
        if (x > 80) {
            $(this).html(percent);
            $(this).animate({ width: percent }, 2500);
        }
    });
});
