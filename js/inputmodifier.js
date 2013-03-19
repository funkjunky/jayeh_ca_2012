$(function() {
	$(".tags").each(function() {
		var strautocomplete = $(this).data("autocomplete");
		var autocomplete = strautocomplete.split(",");
		$(this).tagsInput({
			"autocomplete_url": autocomplete
		});
	});
	var conv = Markdown.getSanitizingConverter();
	var edit = new Markdown.Editor(conv);
	edit.run();
});
