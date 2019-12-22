$(document).ready(function () {



	$('#table').DataTable();

	$('.check-menu').on('click', function () {
		console.log('change')
		const menuId = $(this).data('menu');
		$.ajax({
			url: 'menu/statuschange',
			type: 'post',
			data: {
				menuId: menuId
			},
			success: function () {
				document.location.href = 'menu'

			}
		})
	})
	$('.check-submenu').on('click', function () {
		console.log('change')
		const subMenuId = $(this).data('submenu');
		$.ajax({
			url: 'submenustatuschange',
			type: 'post',
			data: {
				subMenuId: subMenuId
			},
			success: function () {
				document.location.href = 'submenu'

			}
		})
	})
});

