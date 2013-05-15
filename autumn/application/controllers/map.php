<?php
// application/controllers/map.php
class Map_Controller extends Base_Controller
{
	public function action_index()
	{
		return View::make('map.index');
	}
}
?>