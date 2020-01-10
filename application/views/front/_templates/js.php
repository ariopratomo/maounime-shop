<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?= base_url('assets/js/jquery-3.4.1.min.js') ?>"> </script>
<script src="<?= base_url('assets/js/popper.min.js') ?>"> </script>

<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"> </script>
<script src="<?= base_url('assets/js/script.js') ?>"> </script>
<script src="<?= base_url('assets/plugins/owl/dist/owl.carousel.min.js') ?>"> </script>
<script>
$(document).ready(function() {
    $(".shopping-cart").fadeToggle("fast");
    $(".owl-one").owlCarousel({
        items: 1,
        lazyLoad: true,
        URLhashListener: true,
        autoplayHoverPause: true,
        loop: true,
        margin: 10,
        autoHeight: true
    });

    $('.owl-two').owlCarousel({
        stagePadding: 50,
        loop: true,
        margin: 10,
        padding: 10,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        }
    })

});
</script>

<script src="<?= base_url() ?>/upup.min.js"></script>
<script>
var contentUrl = '<?= $this->uri->segment(1) ?>'
UpUp.start({
    'cache-version': 'v2',
    'content-url': 'offline.html',
    'service-worker-url': 'upup.sw.min.js'
});
</script>
<script>
// $(window).scroll(function() {
//     var scroll = $(window).scrollTop();

//     if (scroll >= 80) {
//         // $("#navweb").addClass("fixed-top");
//         $("#filter").css("margin-top", "270px");
//     } else {
//         // $("#navweb").removeClass("fixed-top");
//         $("#filter").css("margin-top", "");
//     }
// });
</script>

<script>
$(document).ready(function() {

    var limit = 2;
    var start = 0;
    var action = 'inactive';

    function lazzy_loader(limit) {
        var output = `<div class="d-flex justify-content-center">
                        <div class="spinner-border text-maou" role="status">
                        <span class="sr-only">Loading...</span>
                        </div>
                    </div>`;

        $('#load_data_message').html(output);
    }

    lazzy_loader(limit);

    function load_data(limit, start) {
        $.ajax({
            url: "<?php echo base_url(); ?>product/fetchProduct",
            method: "POST",
            data: {
                limit: limit,
                start: start
            },
            cache: false,
            success: function(data) {
                if (data == '') {
                    $('#load_data_message').html(
                        '<h4 class="text-center text-muted">Tidak ada produk lagi</h4>');
                    action = 'active';
                } else {
                    $('#load_data').append(data);
                    $('#load_data_message').html("");
                    action = 'inactive';
                }
            }
        })
    }

    if (action == 'inactive') {
        action = 'active';
        load_data(limit, start);
    }

    $(window).scroll(function() {
        if ($(window).scrollTop() + $(window).height() > $("#load_data").height() && action ==
            'inactive') {
            lazzy_loader(limit);
            action = 'active';
            start = start + limit;
            setTimeout(function() {
                load_data(limit, start);
            }, 1000);
        }
    });

});
</script>
</body>

</html>