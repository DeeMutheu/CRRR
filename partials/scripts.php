<script src="../assets/js/jquery.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/settings.js"></script>
<script src="../assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<!-- Prevent Double Submission -->
<script type="text/javascript">
    /* Prevent Double Submissions */
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
    /* Filter  */
    function FilterFunction() {
        let input = document.getElementById('search').value
        input = input.toLowerCase();
        let x = document.getElementsByClassName('filter');
        /* Perform Magic Here */
        for (i = 0; i < x.length; i++) {
            if (!x[i].innerHTML.toLowerCase().includes(input)) {
                x[i].style.display = "none";
            } else if (!x[i].innerHTML.toLowerCase().includes(input)) {
                x[i].style.display = "none";
            } else {
                x[i].style.display = "";
            }
        }
    }
</script>