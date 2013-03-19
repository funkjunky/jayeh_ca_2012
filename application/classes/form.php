<?php

//this should be put in a constants file or something?????
define("THUMBNAIL_DIR", "tmp/");
define("THUMBNAIL_WIDTH", 100);
define("THUMBNAIL_HEIGHT", 100);

//All attributes are passed to file and only the file input
class Form extends Kohana_Form {
	public static function preupload($name, $value=NULL, array $attributes = array())
	{
		$attributes = array_merge($attributes, array("class" => "preupload_file"));
		$html = Form::file("{$name}_client", $attributes);

		if(file_exists($value))
			$html .= HTML::image(
				thumbify($value),
				array(
					"class"=>"thumbnailWithEnhancement",
					"data-full"=>$value,
					"name"=>"{$name}_thumb"
				)
			);
		else
			$html .= "<img name='{$name}_thumb'>";

		$html .= HTML::anchor($value, $value);

		return $html;
	}
}

function thumbify($relLocalFile)
{
	$thumbFile = THUMBNAIL_DIR . basename($relLocalFile);

	//if the thumbnail doesn't exist yet, then create it.
	if(!file_exists($thumbFile) && $relLocalFile && $relLocalFile !== "")
	{
		$image = new Image($relLocalFile);
		$image->resize(THUMBNAIL_WIDTH, THUMBNAIL_HEIGHT);

		$image->save($thumbFile);
	}
	
	return $thumbFile;
}

?>
