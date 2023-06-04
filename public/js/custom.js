function updateTime() {
    var vietnameseDate = moment().locale('vi').format('hh:mm:ss dddd, D MMMM YYYY')
    document.getElementById("clock").innerHTML = vietnameseDate;
}
updateTime();
setInterval(updateTime, 1000);


$(document).ready(function () {
    let keyword = '%20';
    let searchURL = window.location.origin + "/tim-kiem/" + keyword;
    $('#form-search').keyup(function (e) {
        keyword = $('.search-input').val();
        searchURL = window.location.origin + "/tim-kiem/" + keyword;
    });

    $('.search-btn').click(function (e) {
        e.preventDefault();
        window.location.href = searchURL;
        // console.log(searchURL);
    });

    $('.fh5co_tagg').click(function (e) {
        e.preventDefault();

        window.location.href = window.location.origin + "/tim-kiem/" + $(this).text();
    });


    $("#box-account").click(function () {
        $("#box-user-dropdown").toggle();
    })
});