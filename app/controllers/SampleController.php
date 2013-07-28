<?php

class SampleController extends BaseController
{
	public function getIndex()
	{
		return View::make('sample');
	}
}
