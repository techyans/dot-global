        </main><!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer" class="footer">
            <div class="copyright">
            &copy; Copyright <strong><span>Techyans</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
            Designed by <a href="https://arshadjk.dev/">Arshad Jamal Khan</a>
            </div>
        </footer><!-- End Footer -->

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

        {{------------------------------Website modals start--------------------------------}}
        <div class="modal fade media-view-modal" tabindex="-1">
            <div class="modal-dialog modal-lg">
                <div class="modal-content rounded-0">
                    <div class="modal-header py-2">
                        <h5 class="modal-title">Media details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer py-1">
                        <button type="button" class="btn btn-danger px-5 rounded-0 py-1" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade message-modal" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-body">
                    </div>
                    <div class="modal-footer py-1">
                        <button type="button" class="btn btn-secondary px-4 rounded-0 py-1" data-bs-dismiss="modal">Okay</button>
                    </div>
                </div>
            </div>
        </div>
        {{------------------------------Website modals end----------------------------------}}

        <!-- Vendor JS Files -->
        <script src="{{ asset('admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('admin-assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
        <script src="{{ asset('admin-assets/vendor/chart.js/chart.umd.js') }}"></script>
        <script src="{{ asset('admin-assets/vendor/echarts/echarts.min.js') }}"></script>
        <script src="{{ asset('admin-assets/vendor/quill/quill.min.js') }}"></script>
        <script src="{{ asset('admin-assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
        <script src="{{ asset('admin-assets/vendor/tinymce/tinymce.min.js') }}"></script>
        <script src="{{ asset('admin-assets/vendor/php-email-form/validate.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('admin-assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('admin-assets/js/main.js') }}"></script>
        <script src="{{ asset('admin-assets/js/custom.js') }}"></script>
    </body>
</html>