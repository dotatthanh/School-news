<!-- JAVASCRIPT -->
<script src="{{ asset('web/assets/js/jquery/jquery.min.js') }}"></script>
<script>
    var nv_base_siteurl = "/",
        nv_lang_data = "en",
        nv_lang_interface = "en",
        nv_name_variable = "nv",
        nv_fc_variable = "op",
        nv_lang_variable = "language",
        nv_module_name = "home",
        nv_func_name = "main",
        nv_is_user = 0,
        nv_my_ofs = 7,
        nv_my_abbr = "+07",
        nv_cookie_prefix = "nv4s_c523Wo",
        nv_check_pass_mstime = 1738000,
        nv_area_admin = 0,
        nv_safemode = 0,
        theme_responsive = 1,
        nv_recaptcha_ver = 2,
        nv_recaptcha_sitekey = "6Ld5WCEiAAAAAJr6hIEOr3bZf2m-LopszjRVYBWz",
        nv_recaptcha_type = "image",
        XSSsanitize = 1;
</script>
<script src="{{ asset('web/assets/js/language/en.js') }}"></script>
<script src="{{ asset('web/assets/js/DOMPurify/purify3.js') }}"></script>
<script src="{{ asset('web/assets/js/global.js') }}"></script>
<script src="{{ asset('web/assets/js/site.js') }}"></script>
<script src="{{ asset('web/themes/hust/js/main.js') }}"></script>
<script src="{{ asset('web/themes/hust/js/custom.js') }}"></script>
<script src="{{ asset('web/themes/hust/js/hust.js') }}"></script>
<script src="{{ asset('web/themes/hust/js/slick/slick.js') }}"></script>
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "url": "https://hust.edu.vn",
        "logo": "https://hust.edu.vn/uploads/sys/logo-website02_136_200_1.png"
    }
    </script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TT1NML6EJM"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments)
    }
    gtag('js', new Date);
    gtag('config', 'G-TT1NML6EJM');
</script>
<script type="text/javascript" src="{{ asset('web/themes/default/js/jquery.') }}slimmenu.js"></script>
<script src="{{ asset('web/assets/js/jquery-ui/jquery-ui.min.js') }}"></script>
<script type="text/javascript">
    $('ul.slimmenu').slimmenu({
        resizeWidth: (theme_responsive == '1') ? 768 : 0,
        collapserTitle: '',
        easingEffect: 'easeInOutQuint',
        animSpeed: 'medium',
        indentChildren: true,
        childrenIndenter: '&nbsp;&nbsp; '
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        var slider = $('#lazySliderUniqueID');
        slider.slick({
            lazyLoad: 'ondemand', // ondemand progressive anticipated
            infinite: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            dots: false,
            prevArrow: false,
            nextArrow: false,
        })

        // On swipe event
        $(slider).on('swipe', function(event, slick, direction) {
            //console.log(direction);
            if ($('.slide-text').hasClass('animate__animated')) {
                $('.slide-text').addClass('animate__fadeInRight ');
                setTimeout(() => {
                    $('.slide-text').removeClass('animate__fadeInRight');
                }, 1600);
            }
        });

        $(slider).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            //console.log(currentSlide);
            if ($('.slide-text').hasClass('animate__animated')) {
                $('.slide-text').addClass('animate__fadeInRight ');
                setTimeout(() => {
                    $('.slide-text').removeClass('animate__fadeInRight');
                }, 1600);
            }
        });
    });
</script>
<script>
    $('.double-slider').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        infinite: true,
        autoplaySpeed: 5000,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: false,
        rows: 2,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    rows: 1,
                    dots: false,
                    arrows: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    rows: 1,
                    dots: false,
                    arrows: true
                }
            },
            {
                breakpoint: 480,
                settings: {
                    rows: 1,
                    dots: false,
                    arrows: true
                }
            },
        ]
    });
</script>
<script src="{{ asset('web/themes/hust/js/bootstrap.min.js') }}"></script>

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // add class paginate theme
    $('ul.pagination').addClass('pagination-rounded justify-content-center mt-4');

    // toastr noti
    @if (Session::has('alert-success'))
        Command: toastr["success"]("{{ Session::get('alert-success') }}")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    @endif

    @if (Session::has('alert-error'))
        Command: toastr["error"]("{{ Session::get('alert-error') }}")

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": 300,
            "hideDuration": 1000,
            "timeOut": 5000,
            "extendedTimeOut": 1000,
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    @endif
</script>

@yield('script')

<!-- App js -->
{{-- <script src="{{ asset('assets/js/app.min.js') }}"></script> --}}

@yield('script-bottom')
