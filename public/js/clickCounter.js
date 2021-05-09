let alreadyClicked = [];
let bannerId = null;
let clicks = 0;

function trackClick(banner) {
    if (alreadyClicked[banner.id]) {
        return;
    }
    alreadyClicked[banner.id] = true;
    bannerId = banner.id
    clicks++;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'post',
        url: '/statistics/clicks',
        data: {
            clicks,
            bannerId
        },
        success: function () {
            //
        }
    });

}