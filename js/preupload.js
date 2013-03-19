$(function(){
	$(".thumbnailWithEnhancement").hover(function() {
		//TODO later
		//When you hover of the thumbnail, a fullsize of the image
		//will follow the cursor. When the user stops hovering, the image will
		//be display: none
	});

	$(".preupload_file").change(function() {
		alert("hi?");
		////////Setup variables and functions///////
		$this = $(this);
		var progressCB = function(e) {
			//TODO: update progress bar
			var sofar = e.position || e.loaded;
			var total = e.totalSize || e.total;
			console.log('xhr progress: ' + (Math.floor(done/total*100) + '%'));
		};
		var finishedCB = function(e) {
			if( 4 == this.readyState )
			{
				console.log(['xhr upload complete', e]);
				var img = xhr.reponseText;
				$this.sibling('.thumbnailWithEnhancement').attr('src', img);
			}
		};
		var url = this.parent('form').attr('action');
		var file = this.files[0];
		////////////////////////////////////////////

		var xhr = new XMLHTTPRequest();

		xhr.addEventListener('progress', progressCB, false);
		if( xhr.upoad )
			xhr.upload.onprogress = progressDB;

		xhr.onreadystatechange = finishedCB;

		console.log('url we pass: ' + url);

		xhr.open('post', url, true);

		var fd = new FormData;
		fd.append('__preupload', true);
		fd.append($(this).attr('name'), file)

		xhr.send(this);
	});
);
