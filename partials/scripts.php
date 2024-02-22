<script src="../assets/js/jquery.js"></script>
<script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/custom.js"></script>
<script src="../assets/js/settings.js"></script>
<script src="../assets/js/dz.carousel.js"></script><!-- Swiper -->
<script src="../assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.6/mapsJavaScriptAPI.js" async defer></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script src="../assets/vendor/sweetalert2/sweetalert2.min.js"></script>
<script src="../assets/vendor/toastr/toastr.min.js"></script>
<!-- Prevent Double Submission -->
<script type="text/javascript">
    /* Prevent Double Submissions */
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }

    /* Select 2 */
    /* Selectr */
    $(document).ready(function() {
        new Selectr('.select2', {
            searchable: true,
            width: 300,
            placeholder: 'Select an option'
        });
    });
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
<!-- Trigger Alerts -->
<!-- Init Sweet Alerts -->
<?php if (isset($success)) { ?>
    <!-- Pop Success Alert -->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 4000
        });
        Toast.fire({
            type: 'success',
            title: '<?php echo $success; ?>',
        })
    </script>

<?php }
if (isset($err)) { ?>
    <script>
        /* Pop Error Message */
        const Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 4000
        });
        Toast.fire({
            type: 'error',
            title: '<?php echo $err; ?>',
        })
    </script>

<?php }
if (isset($info)) { ?>
    <script>
        /* Pop Warning  */
        const Toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 4000
        });
        Toast.fire({
            type: 'info',
            title: '<?php echo $info; ?>',
        })
    </script>
<?php } ?>