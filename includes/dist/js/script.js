$(document).ready(function () {

	$('#table').DataTable();

	$('.check-menu').on('click', function () {
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

	$('.check-access').on('click', function () {
		const MenuId = $(this).data('menu');
		const RoleId = $(this).data('role');

		$.ajax({
			url: '/maounime-shop/admin/role/accesschange',
			type: 'post',
			data: {
				MenuId: MenuId,
				RoleId: RoleId
			},
			success: function () {
				document.location.href = RoleId

			},
			error: function () {
				// $('#table_kata_sara').load("index.php?p=kata_sara");
				console.log("error ");
				console.log(MenuId);
				console.log(RoleId);
			}
		})
	})
});

