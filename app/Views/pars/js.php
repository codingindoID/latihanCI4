<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>/assets/dist/js/adminlte.min.js"></script>


<script>
    $(document).ready(function() {
        var base_url = $('#base_url').data('id')

        $('.edit-siswa').on('click', function() {
            let id_siswa = $(this).data('id')
            $.ajax({
                type: "get",
                url: base_url + "/ajaxDetil/" + id_siswa,
                dataType: "json",
                success: function(response) {
                    console.log(response);
                    $('#id_siswa').val(response['id_siswa'])
                    $('#nama').val(response['nama'])
                    $('#alamat').text(response['alamat'])
                    $('#id_kelas').val(response['id_kelas'])
                }
            });
        });

    });
</script>