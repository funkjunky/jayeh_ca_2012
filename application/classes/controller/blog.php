<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blog extends Controller_Jayeh {
	public $subtemplate = "blog/template";
	public $headertext = "Blog";

	public function before()
	{
		parent::before();

		$years = ORM::factory("article")->get_months_available();
		$monthyeartree = new View("blog/monthyeartree");
		$monthyeartree->set("years", $years);

		$tags = ORM::factory("tag")->find_all();
		$taglist = new View("blog/taglist");
		$taglist->set("tags", $tags);

		$this->_subview->set("monthyeartree", $monthyeartree);
		$this->_subview->set("taglist", $taglist);

		$this->addJS("libs/pagedown/Markdown.Converter.js");
	}

	public function action_index()
	{
		$articles = ORM::factory("article")->find_all();
		$view = new View("blog/view");
		$view->set("perspective", "Viewing all articles");
		$view->set("articles", $articles);

		$this->template->set("content", $view);
	}

	public function action_year()
	{
		$year = $this->request->param('id');
		$articles = ORM::factory("article")
							->where(DB::expr("YEAR(dateadded)"), "=", $year)
							->find_all();

		$view = new View("blog/view");
		$view->set("perspective", "Viewing articles from the year ".$year);
		$view->set("articles", $articles);

		$this->template->set("content", $view);
	}


	public function action_month()
	{
		$month = $this->request->param('id');
		$articles = ORM::factory("article")
							->where(DB::expr("MONTH(dateadded)"), "=", $month)
							->find_all();

		$view = new View("blog/view");
		$view->set("perspective", "Viewing articles from the month ".$month);
		$view->set("articles", $articles);

		$this->template->set("content", $view);
	}

	public function action_tag()
	{
		$tag_id = $this->request->param('id');
		$tag = ORM::factory("tag", $tag_id);
		$articles = $tag->articles->find_all();

		$view = new View("blog/view");
		$view->set("perspective", "Viewing articles with the tag ".$tag_id);
		$view->set("articles", $articles);

		$this->template->set("content", $view);
	}

	public function action_search()
	{
		$searchterms = explode(":", $this->request->param('id'));
		$articles;
		if(count($searchterms) == 2)
		{
			list($key, $value) = $searchterms;
			$articles = ORM::factory("article")
								->where($key, "like", "%".$value."%")
								->find_all();
			$perspective = "Viewing articles with '$value' in the $key";
		}
		elseif(count($searchterms) == 1)
		{
			list($value) = $searchterms;
			$articles = ORM::factory("article")
								->or_where("title", "like", "%".$value."%")
								->or_where("body", "like", "%".$value."%")
								->find_all();
			$perspective = "Viewing articles with '$value' in either the title or body";
		}

		$view = new View("blog/view");
		$view->set("perspective", $perspective);
		$view->set("articles", $articles);

		$this->template->set("content", $view);
	}
} // End Welcome
