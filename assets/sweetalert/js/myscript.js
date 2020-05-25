const flashData = $('.flash-data').data('flashdata');

if (flashData) {
	Swal.fire({
	 // icon: 'error',
	  title: flashData,
	  type: 'success'
	});
}


