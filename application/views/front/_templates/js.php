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

//     if (scroll >= 30) {
//         $("#navweb").addClass("fixed-top");
//         $("#content").css("padding-top", "67px");
//     } else {
//         $("#navweb").removeClass("fixed-top");
//         $("#content").css("padding-top", "");
//     }
// });
</script>

</body>

</html>