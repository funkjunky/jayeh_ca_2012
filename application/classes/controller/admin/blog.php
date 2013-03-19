<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Blog extends Controller_Jayeh {
	public $subtemplate = "admin/template";
	public $headertext = "Blog Admin";

	public function action_index()
	{
		$this->request->redirect("admin/blog/new");
	}

	public function action_new()
	{
		$blog = new Model_Article();
		$blogs = ORM::factory("article")->find_all();
		$tags = ORM::factory("tag")->find_all()->as_array("id", "name");

		$view = new View("blog/edit");
		$view->set("blog", $blog);
		$view->set("articletags", "");
		$view->set("blogs", $blogs);
		$view->set("tags", $tags);

		$this->addJS("libs/jquery.tagsinput.min.js");
		$this->addJS("libs/jquery-ui/js/jquery-ui.min.js");
		$this->addJS("libs/pagedown/Markdown.Converter.js");
		$this->addJS("libs/pagedown/Markdown.Sanitizer.js");
		$this->addJS("libs/pagedown/Markdown.Editor.js");
		$this->addJS("inputmodifier.js");
		$this->addCSS("jquery.tagsinput.css");
		$this->addCSS("ui-lightness/jquery-ui.css");
		$this->addCSS("wmd.css");
		$this->template->set("content", $view);
	}

	public function action_edit()
	{
		$blog_id = $this->request->param("id");
		$blog = new Model_Article($blog_id);
		$blogs = ORM::factory("article")->find_all();
		$tags = ORM::factory("tag")->find_all()->as_array("id", "name");

		$view = new View("blog/edit");
		$view->set("blog", $blog);
		$view->set("blogs", $blogs);
		$view->set("tags", $tags);

		//get article tags
		$articletags = $blog->tags->find_all()->as_array("id", "name");
		$view->set("articletags", implode(",",$articletags));

		$this->addJS("libs/jquery.tagsinput.min.js");
		$this->addJS("libs/jquery-ui/js/jquery-ui.min.js");
		$this->addJS("libs/pagedown/Markdown.Converter.js");
		$this->addJS("libs/pagedown/Markdown.Sanitizer.js");
		$this->addJS("libs/pagedown/Markdown.Editor.js");
		$this->addJS("inputmodifier.js");
		$this->addCSS("jquery.tagsinput.css");
		$this->addCSS("ui-lightness/jquery-ui.css");
		$this->addCSS("wmd.css");
		$this->template->set("content", $view);
	}

	public function action_post()
	{
		$blog_id = $this->request->param("id");
		$blog = new Model_Article($blog_id);
		$tags = explode(",", $_POST['tags']);
		unset($_POST['tags']);
		$updatetype = 2; //edit
		if(!$blog->loaded())
		{
			$_POST['dateadded'] = DB::expr('NOW()');
			$updatetype = 1;	//new
		}
		$blog->values($_POST);
		$blog->save();
		
		//record update
		$update_vals = array(
			"category_id" => 1,
			"updatetype_id" => $updatetype,
			"foreign_id" => $blog->id,
			"dateadded" => $_POST['dateadded']
		);
		$update = new Model_Update();
		$update->values($update_vals);
		$update->save();
		//

		foreach($tags as $tag)
		{
			$vals = array("name" => $tag);
			$tag = new Model_Tag($vals);
			$tag->values($vals);
			$tag->save();
			if(!$blog->has("tags", $tag))
				$blog->add("tags", $tag);
		}


		$this->request->redirect('admin/blog/new');
	}

	public function action_postcomment()
	{
		$comment_id = $this->request->param("id");
		$comment = new Model_Comment($comment_id);
		if(!$comment->loaded())
			$_POST['dateadded'] = DB::expr('NOW()');
		$comment->values($_POST);
		$comment->save();

		//record update
		$update_vals = array(
			"category_id" => 1,
			"updatetype_id" => 3, //comment type:
			"foreign_id" => $_POST['article_id'],
			"dateadded" => $_POST['dateadded']
		);
		$update = new Model_Update();
		$update->values($update_vals);
		$update->save();
		//

		$this->request->redirect('blog/');
	}

	public function action_delete()
	{
		$blog_id = $this->request->param("id");
		$blog = new Model_Article($blog_id);
		$blog->delete();

		//delete the updates
		$update = new Model_Update(array(
			"category_id" => 1,
			"foreign_id" => $blog_id
		));
		$update->delete();
		//

		$this->request->redirect('admin/blog/new');
	}


} // End Welcome
