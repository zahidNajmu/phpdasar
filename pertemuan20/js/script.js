$(document).ready(function () {
    // hilangkan tombol cari
    $('#tombol-cari').hide();
    
    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        // munculkan icon loading
        $('.loader').show();

        // ajax menggunakan load
        // $('table').load("ajax/mahasiswa.php?keyword=" + $('#keyword').val());

        // $.get()
        $.get("ajax/mahasiswa.php", "keyword=" + $('#keyword').val(),
            function (data) {
                $('table').html(data);
                $('.loader').hide();
            }
        );
    });

});