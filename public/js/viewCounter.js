$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let viewed = []

const os = new OnScreen({
    tolerance: 0,
    debounce: 100,
    container: 'banner'
});

os.on('enter', '.banner', function () {

    const viewPortBanners = os.trackedElements['.banner']['nodes'];

    for (let i = 0; i < viewPortBanners.length; i++) {
        if (viewPortBanners[i]['isVisible'] === true && !viewed[viewPortBanners[i]['node'].id]) {
            viewed[viewPortBanners[i]['node'].id] = 1

            //console.log(viewPortBanners[i]['node'].id)

            $.ajax({
                type: 'post',
                url: '/statistics/views',
                data: {
                    'banner_id': viewPortBanners[i]['node'].id,
                    'views': viewed[viewPortBanners[i]['node'].id]
                },
                success: function () {
                    //
                }
            });


        }
    }

    console.log(viewed)





});