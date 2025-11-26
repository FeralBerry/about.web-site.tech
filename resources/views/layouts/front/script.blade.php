<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('base/plugins/jquery.js') }}"></script>
<script src="{{ asset('base/plugins/bootstrap-3.3.1/js/bootstrap.min.js') }}"></script>

<!-- advanced easing options -->
<script src="{{ asset('base/plugins/jquery.easing-1.3.pack.js') }}"></script>
<!-- parallax bg js -->
<script src="{{ asset('base/plugins/jquery.parallax-1.1.3.js') }}"></script>
<!-- lightbox js -->
<script src="{{ asset('base/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<!-- typed animation-->
<script src="{{ asset('base/plugins/typed/typed.js') }}"></script>
<!-- easy chart-->
<script src="{{ asset('base/plugins/easypiechart/jquery.easypiechart.min.js') }}"></script>
<!-- simple Captcha -->
<script src="{{ asset('base/plugins/simpleCaptcha/jquery.simpleCaptcha.js') }}"></script>
<!-- simple Ajax Uploader -->
<script src="{{ asset('base/plugins/Simple-Ajax-Uploader/SimpleAjaxUploader.min.js') }}"></script>
<!-- validate jquery-->
<script src="{{ asset('base/plugins/validator/jquery.validate.min.js') }}"></script>

<!--=====================================================-->
<!--configuration template-->
<script src="{{ asset('base/theme/js/theme.js') }}"></script>
<script>
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);
    });
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
</script>
