


$("#favorites").mmenu({
	zposition: "front"
});


$('.wysiwyg').wysiwyg();


$('.wysiwyg').each(function(e) {


	$(this).parents('form').on("submit",function(e) {

		var editor = $(this).find('.wysiwyg');
		var hidden = $(this).find('input[name="text"]');


		hidden.val(editor.html());

	});


	$('.content_section > .panel-body').sortable({
		handle: '.panel-heading',
		forcePlaceholderSize: true,
		connectWith: '.content_section .panel-body'
	}).bind('sortupdate', function(e, ui) {

			//ui.item contains the current dragged element.
			//Triggered when the user stopped sorting and the DOM position has changed.
			var url = ui.item.data('url-update');

			$.ajax(url, {
					type: 'PUT',
					data: {
					section:	ui.item.parents('.content_section').data('section'),
					position: 	ui.item.index()
				},
				success: function(data) {
					console.log('DONE');
				}
			})

	});

})