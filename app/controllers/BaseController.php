<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}

    public function __construct()
    {
        $this->afterFilter(function($response)
        {
            $response->headers->set('Access-Control-Allow-Origin', '*');
            return $response;
        });
    }

}