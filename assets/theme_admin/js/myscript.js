$(function() {
  $('[data-toggle="tooltip"]').tooltip();
	// Halaman Artikel
	$('.tombolTambahArtikel').click(function() {
		$('#formModalLabel').html('Tambah Data Artikel');
		$('.modal-footer button[type=submit]').html('Tambah');

		$('#judul').val('');
		$('#id_artikel').val('');
		$('#deskripsi').val('');
		$('#kategori').val('');
		$('#fotoLama').val('');
		$('#tampilFoto').attr('src', '');
	});


	$('.tombolUbahArtikel').click(function() {
		$('#formModalLabel').html('Ubah Data Artikel');
		$('.modal-footer button[type=submit]').html('Ubah');

		$('.modal-body form').attr('action', 'http://localhost/dozi-app-ci-3/admin/artikel/ubahartikel');

		const id = $(this).data('id');
		// console.log(id);

		$.ajax({
			url: 'http://localhost/dozi-app-ci-3/admin/artikel/getubahartikel',
			dataType: 'json',
			data: {id: id},
			method: 'post',
			success: function(data)
			{
				// console.log(data);
				$('#judul').val(data.judul_artikel);
				$('#id_artikel').val(data.id_artikel);
				$('#deskripsi').val(data.deskripsi_artikel);
				$('#kategori').val(data.id_kategori);
				$('#fotoLama').val(data.foto_artikel);
				$('#tampilFoto').attr('src', 'http://localhost/dozi-app-ci-3/assets/img/berita/' + data.foto_artikel);
			}
		});
	});


	// Halaman Kategori
	$('.tombolTambahKategori').click(function() {
		$('#formModalLabel').html('Tambah Data Kategori');
		$('.modal-footer button[type=submit]').html('Tambah');

		$('#id_kategori').val('');
		$('#kategori').val('');
	});


	$('.tombolUbahKategori').click(function() {
		$('#formModalLabel').html('Ubah Data Kategori');
		$('.modal-footer button[type=submit]').html('Ubah');

		$('.modal-body form').attr('action', 'http://localhost/dozi-app-ci-3/admin/kategori/ubahkategori');

		const id = $(this).data('id');
		// console.log(id);

		$.ajax({
			url: 'http://localhost/dozi-app-ci-3/admin/kategori/getubahkategori',
			dataType: 'json',
			data: {id: id},
			method: 'post',
			success: function(data)
			{
				// console.log(data);
				$('#id_kategori').val(data.id_kategori);
				$('#kategori').val(data.nama_kategori);
			}
		});
	});


	// Halaman User
	$('.tombolTambahUser').click(function() {
		$('#formModalLabel').html('Tambah Data User');
		$('.modal-footer button[type=submit]').html('Tambah');

		$('#id_user').val('');
		$('#username').val('');
		$('#password').val('');
		$('#email').val('');
		$('#nama').val('');
		$('#fotoLama').val('');
		$('#tampilFoto').attr('src', '');
	});


	$('.tombolUbahUser').click(function() {
		$('#formModalLabel').html('Ubah Data User');
		$('.modal-footer button[type=submit]').html('Ubah');

		$('.modal-body form').attr('action', 'http://localhost/dozi-app-ci-3/admin/user/ubahuser');

		const id = $(this).data('id');
		// console.log(id);

		$.ajax({
			url: 'http://localhost/dozi-app-ci-3/admin/user/getubahuser',
			dataType: 'json',
			data: {id: id},
			method: 'post',
			success: function(data)
			{
				// console.log(data);
				$('#id_user').val(data.id_user);
				$('#username').val(data.username);
				$('#password').val(data.password);
				$('#email').val(data.email);
				$('#nama').val(data.nama_user);
				$('#fotoLama').val(data.foto_user);
				$('#tampilFoto').attr('src', 'http://localhost/dozi-app-ci-3/assets/img/user/' + data.foto_user);
			}
		});
	});


// ---------- HALAMAN ADMIN COMMENTS
$('.tombolSetujuiKomentar').click(function() {
	const id = $(this).data('id');
	// console.log(id);

	$.ajax({
		url: 'http://localhost/dozi-app-ci-3/admin/komentar/getsetuju',
		method: 'post',
		dataType: 'json',
		data: {id: id},
		success: function(data) {
			// console.log(data);
			$('#id_komentar').val(data.id_komentar);
			$('#status').val(data.status_komen);
		}
	});
});


});