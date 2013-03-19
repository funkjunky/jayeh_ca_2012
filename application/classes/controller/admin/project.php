<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Project extends Controller_Jayeh {
	public $subtemplate = "admin/template";
	public $headertext = "Project Admin";

	public function action_index()
	{
		$this->request->redirect("admin/project/new");
	}

	public function action_new()
	{
		$project = new Model_Project();
		$projects = ORM::factory("project")->find_all();
		$tags = ORM::factory("tag")->find_all()->as_array("id", "name");

		$view = new View("project/edit");
		$view->set("project", $project);
		$view->set("projecttags", "");
		$view->set("projects", $projects);
		$view->set("tags", $tags);

		$this->addJS("libs/jquery.tagsinput.min.js");
		$this->addJS("libs/jquery-ui/js/jquery-ui.min.js");
		$this->addJS("inputmodifier.js");
		$this->addCSS("jquery.tagsinput.css");
		$this->addCSS("ui-lightness/jquery-ui.css");
		$this->addCSS("wmd.css");
		$this->template->set("content", $view);
	}

	public function action_edit()
	{
		$project_id = $this->request->param("id");
		$project = new Model_Project($project_id);
		$projects = ORM::factory("project")->find_all();
		$tags = ORM::factory("tag")->find_all()->as_array("id", "name");

		$view = new View("project/edit");
		$view->set("project", $project);
		$view->set("projects", $projects);
		$view->set("tags", $tags);

		//get project tags
		$projecttags = $project->tags->find_all()->as_array("id", "name");
		$view->set("projecttags", implode(",",$projecttags));

		$this->addJS("libs/jquery.tagsinput.min.js");
		$this->addJS("libs/jquery-ui/js/jquery-ui.min.js");
		$this->addJS("inputmodifier.js");
		$this->addCSS("jquery.tagsinput.css");
		$this->addCSS("ui-lightness/jquery-ui.css");
		$this->addCSS("wmd.css");
		$this->template->set("content", $view);
	}

	public function action_post()
	{
		if(isset($_POST['__preupload']))
			return uploadTempImage($_POST['icon_path']);

		//get any previous project if it existed.
		$project_id = $this->request->param("id");
		$project = new Model_Project($project_id);

		//handle tags
		$tags = explode(",", $_POST['tags']);
		unset($_POST['tags']);

		//get uploaded file, save it and get local path
		$validator = Validation::factory($_FILES);
		$validator	->rule('file', 'Upload::not_empty')
						->rule('file', 'Upload::type', array(array('png')));
		if($array->check())
		{
			$filepath
				= Upload::save($_FILES['icon_file'], null, "images/project/icons");
			if(false !== $filepath)
				$_POST["icon_path"] = $filepath;
		}

		$updatetype = 2; //edit
		if(!$project->loaded())
		{
			$_POST['dateadded'] = DB::expr('NOW()');
			$updatetype = 1;	//new
		}
		$project->values($_POST);
		$project->save();
		
		//record update
		$update_vals = array(
			"category_id" => 2,
			"updatetype_id" => $updatetype,
			"foreign_id" => $project->id,
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
			if(!$project->has("tags", $tag))
				$project->add("tags", $tag);
		}


		$this->request->redirect('admin/project/new');
	}

	public function action_delete()
	{
		$project_id = $this->request->param("id");
		$project = new Model_Project($project_id);
		$project->delete();

		//delete the updates
		$update = new Model_Update(array(
			"category_id" => 1,
			"foreign_id" => $project_id
		));
		$update->delete();
		//

		$this->request->redirect('admin/project/new');
	}


} // End Welcome
