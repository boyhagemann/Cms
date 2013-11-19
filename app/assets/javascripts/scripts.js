

$('.wysiwyg').wysiwyg();


$('.wysiwyg').each(function(e) {


	console.log('test');

	$(this).parents('form').on("submit",function(e) {

		var editor = $(this).find('.wysiwyg');
		var hidden = $(this).find('input[name="text"]');


		hidden.val(editor.html());


	});
})