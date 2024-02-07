<!-- Footer -->
        <footer class="fixed-bottom bg-white text-dark py-4">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Gandhi Books 2024</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
</div>


<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('admin.logout') }}">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->


<!-- Core plugin JavaScript-->

<!-- Custom scripts for all pages-->


<!-- Page level plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="/adminpanel/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="/adminpanel/js/demo/chart-area-demo.js"></script>
<script src="/adminpanel/js/demo/chart-pie-demo.js"></script>


<script src="/adminpanel/vendor/jquery/jquery.min.js"></script>
<script src="/adminpanel/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/adminpanel/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/adminpanel/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="/adminpanel/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="/adminpanel/vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="/adminpanel/js/demo/datatables-demo.js"></script>

<script>
    function setupUpdateButton(updateButton) {
        var order_id = updateButton.attr('data-order-id');
        var main_id = updateButton.closest('tr').find('.main_id').val();
        var statusCell = updateButton.closest('tr').find('.statusCell');

        var currentStatus = statusCell.text();

        var inputElement = document.createElement('input');
        inputElement.type = 'number';
        inputElement.value = currentStatus;

        statusCell.html(inputElement);
        inputElement.focus();

        if (updateButton.text() === 'Update') {
            // If the button is in "Update" state, change to "Edit"
            updateButton.text('Edit');
            closeInput();
        } else {
            updateButton.text('Update');
            $(document).on('click', function (event) {
                // Check if the clicked element is not the current input
                if (!$(event.target).is(inputElement) && !$(event.target).is(updateButton)) {
                    closeInput();
                }
            });
        }

        updateButton.off('click').on('click', function (event) {
            if (updateButton.text() === 'Edit') {
                // If the button is in "Edit" state, change to "Update"
                updateButton.text('Update');
            } else {
                var newStatus = parseInt(inputElement.value);

                if (isNaN(newStatus) || newStatus < 1 || newStatus > 4) {
                    alert("Please enter a valid status between 1 and 4.");
                    inputElement.value = "1";
                    return;
                }
                $.ajax({
                    url: '/update-status',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        status: newStatus,
                        id: main_id,
                        order_id: order_id,
                    },
                    success: function (response) {
                        $('#successMessage').text(response.message).show().delay(3000).fadeOut();
                        updateButton.text('Edit');
                        statusCell.trigger('statusChange');
                        statusCell.html(newStatus);
                    },
                    error: function (xhr) {
                    }
                });
            }
        });
    }

    $(document).ready(function () {
        $('.statusUpdateBtn').on('click', function () {
            var updateButton = $(this);
            setupUpdateButton(updateButton);
        });
    });

    $(document).ready(function(){
        $('.statusCell').on('statusChange', function (){
            var statusCell = $(this);
            var statusCellValue = parseInt(statusCell.text());
            if (statusCellValue > 4) {
                alert("Only four status are available.");
                statusCell.text ("4");
            } else if(statusCellValue <= 0){
                alert("Status's starting from one.");
                statusCell.text("1");
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        var path = window.location.pathname;
        $('.menu-area ul li a').each(function() {
            if ($(this).attr('href') === path) {
                $(this).closest('li').addClass('active');
            }
        });
    });

</script>




