$(function() {

	// $('.tombolTambahData').on('click', function(){
	// 	$('#labelSave').html('Simpan');
	// });

	$('.tampilUbah').on('mouseenter', function(){
		// $('#labelSave').html('x');
		$('.tombolEdit button[type=submit]').html('Edit Data');

		$('.tulis-body form').attr('action', 'http://localhost/cobaProjek/public/tulisresep/ubah');
		const id = $(this).data('id');
		$.ajax({
			url: 'http://localhost/cobaProjek/public/tulisresep/getUbah',
			data: {id : id},
			method: 'post',
			dataType: 'json',
			success: function(data){
				$('#nama').val(data.nama);
				$('#budget').val(data.budget);
				$('#bahan' ).val(data.bahan);
				$('#langkah').val(data.langkah);
				$('#gambar').val(data.gambar);
				$('#id').val(data.id);
			}

		});
	});
});

