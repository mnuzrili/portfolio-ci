<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="float-start">
            <p><?= date('Y') ?> &copy; E-SDM</p>
        </div>
        <div class="float-end">
            <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> for SDM BPR MSA</a></p>
        </div>
    </div>
</footer>
</div>
</div>

<script src="<?= base_url() ?>mazer/dist/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>mazer/dist/assets/js/bootstrap.bundle.min.js"></script>

<script src="<?= base_url() ?>mazer/dist/assets/vendors/apexcharts/apexcharts.js"></script>
<script src="<?= base_url() ?>mazer/dist/assets/js/pages/dashboard.js"></script>

<!-- Select2 -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Include Choices JavaScript -->
<script src="<?= base_url() ?>mazer/dist/assets/vendors/choices.js/choices.min.js"></script>
<script src="<?= base_url() ?>mazer/dist/assets/js/pages/form-element-select.js"></script>

<!-- Sweet Alert -->
<script src="<?= base_url() ?>mazer/dist/assets/js/extensions/sweetalert2.js"></script>
<script src="<?= base_url() ?>mazer/dist/assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>

<script src="<?= base_url() ?>mazer/dist/assets/js/mazer.js"></script>

<script src="<?= base_url() ?>mazer/dist/assets/vendors/jquery/jquery.min.js"></script>
<!-- filepond validation -->
<script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
<script src="https://unpkg.com/filepond-plugin-file-validate-type/dist/filepond-plugin-file-validate-type.js"></script>

<!-- image editor -->
<script src="https://unpkg.com/filepond-plugin-image-exif-orientation/dist/filepond-plugin-image-exif-orientation.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-crop/dist/filepond-plugin-image-crop.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-filter/dist/filepond-plugin-image-filter.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
<script src="https://unpkg.com/filepond-plugin-image-resize/dist/filepond-plugin-image-resize.js"></script>

<!-- toastify -->
<script src="<?= base_url() ?>mazer/dist/assets/vendors/toastify/toastify.js"></script>

<!-- filepond -->
<script src="https://unpkg.com/filepond/dist/filepond.js"></script>


<!-- Form Editor -->
<script src="<?= base_url() ?>mazer/dist/assets/vendors/summernote/summernote-lite.min.js"></script>

<!-- DataTable-->
<script src="<?= base_url() ?>mazer/dist/assets/vendors/jquery-datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>mazer/dist/assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

<script src="<?= base_url() ?>mazer/dist/assets/vendors/fontawesome/all.min.js"></script>

<!-- chart -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/chart/js/chartjs-plugin-labels.js"></script>

<!-- Caraousel -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
    $(document).ready(function() {
        // Jquery Datatable
        $('#tablePendaftar').DataTable({
            scrollX: true,
        });
    });
</script>

</body>

</html>