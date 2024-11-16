<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

<!-- JQUERY JS -->
<script src="../assets/js/jquery.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Owl carousel JS -->
<script src="../assets/plugins/company-slider/slider.js"></script>
<script src="../assets/plugins/owl-carousel/owl.carousel.js"></script>

<!-- landing JS -->
<script src="../assets/js/landing.js"></script>

<!-- SELECT2 JS -->
<script src="../assets/plugins/select2/select2.full.min.js"></script>

<!-- FORMVALIDATION JS -->
<script src="../assets/js/form-validation.js"></script>

<!-- FORM ELEMENTS JS -->
<script src="../assets/js/formelementadvnced.js"></script>

<!-- Sweet-alert js  -->
<script src="../assets/plugins/sweet-alert/sweetalert.min.js"></script>
<script src="../assets/plugins/sweet-alert/jquery.sweet-alert.js"></script>

<!-- GALLERY JS -->
<script src="../assets/plugins/gallery/picturefill.js"></script>
<script src="../assets/plugins/gallery/lightgallery.js"></script>
<script src="../assets/plugins/gallery/lightgallery-1.js"></script>
<script src="../assets/plugins/gallery/lg-pager.js"></script>
<script src="../assets/plugins/gallery/lg-autoplay.js"></script>
<script src="../assets/plugins/gallery/lg-fullscreen.js"></script>
<script src="../assets/plugins/gallery/lg-zoom.js"></script>
<script src="../assets/plugins/gallery/lg-hash.js"></script>
<script src="../assets/plugins/gallery/lg-share.js"></script>


<script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbzoULXyVZzriG9NF2rCLMQ6cLMs5YrtvxhUbCQj78mAIWp_jRo1i6QC66DAtTg1U9mE/exec';
    const form = document.forms['contact-form'];

    form.addEventListener('submit', e => {
        e.preventDefault();

        if (form.checkValidity()) {
            // Show loading spinner
            swal({
                title: "விண்ணப்பம் பரிசீலிக்கப்படுகின்றது",
                text: "தயவுசெய்து காத்திருக்கவும்.",
                onBeforeOpen: () => {
                    Swal.showLoading();
                },
                showConfirmButton: false,
                closeOnClickOutside: false
            });

            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => {
                    // Show success message
                    swal("நன்றி!", "உங்கள் படிவம் வெற்றிகரமாக சமர்ப்பிக்கப்பட்டது.", "success");
                })
                .then(() => {
                    // Reload the current page after a delay
                    setTimeout(() => {
                        window.location.reload();
                    }, 2000); // Adjust the delay time if necessary
                })
                .catch(error => {
                    console.error('Error!', error.message);
                    // Show error message
                    swal("தவறு", "சில தகவல்கள் தவறவிடப்பட்டுள்ளது.", "error");
                });
        } else {
            // Show error message for invalid form
            swal("தவறு", "சில தகவல்கள் தவறவிடப்படுள்ளது.", "error");
        }
    });

    // Optional: trigger the success alert manually using this button
    document.getElementById('swal-success').addEventListener('click', () => {
        swal("Success", "This is a success alert triggered manually.", "success");
    });
</script>