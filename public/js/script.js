$(function () {

  $('.tombolTambahData').on('click', () => {
    $('#exampleModalLabel').html('Tambah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Tambah Data');
  });

  $('.tampilModalUbah').on('click', () => {
    $('#exampleModalLabel').html('Ubah Data Mahasiswa');
    $('.modal-footer button[type=submit]').html('Ubah Data');
    $('.modal-body form').attr('action','http://localhost/phpmvc/public/mahasiswa/ubah')
    
    const id = $(this).data('id');
    console.log(id);
    $.ajax({
        url : "http://localhost/phpmvc/public/mahasiswa/getubah",
        data: {id :id},
        method: 'post',
        dataType: 'json',
        success: function(data) {
            $("#nama").val(data.nama);
            $("#email").val(data.email);
            $("#jurusan").val(data.jurusan);
            $("#id").val(data.id);
        }

    })
  });

});
