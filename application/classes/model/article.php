<?php defined("SYSPATH") or die("no direct access allowed");

class Model_Article extends ORM {

	public $_has_many = array(
		"tags" => array(
			"model" => "tag",
			"through" => "article_tag"
		),
		"comments" => array(
			"model" => "comment",
			"foreign_key" => "article_id"
		)
	);

	public function get_months_available()
	{
		$result = 
			DB::select(array('YEAR(MAX("dateadded"))', 'latestyear'),
							array('MONTH(MAX("dateadded"))', 'latestmonth'),
							array('YEAR(MIN("dateadded"))', 'earliestyear'),
							array('MONTH(MIN("dateadded"))', 'earliestmonth'))
				->from($this->table_name())
				->execute();
		$latestyear = $result[0]['latestyear'];
		$latestmonth = $result[0]['latestmonth'];
		$earliestyear = $result[0]['earliestyear'];
		$earliestmonth = $result[0]['earliestmonth'];
		$result =
			DB::select(array('YEAR("dateadded")', 'year'),
							array('MONTH("dateadded")', 'month'))
				->from($this->table_name())
				->execute();
		$years = array();
		//set the span of time to show
		for($i = $earliestyear; $i <= $latestyear; ++$i)
		{
			$years[$i] = array();
			for($k = 1; $k <= 12; ++$k)
				$years[$i][$k] = false;
		}
		//state which months actually have an article
		foreach($result as $row)
			$years[$row['year']][$row['month']] = true;

		return $years;
	}
}

?>
