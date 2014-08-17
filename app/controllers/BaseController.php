<?php

class BaseController extends Controller {

	public function __construct()
    {
        $composed_views = array(
                    'layouts.master',
                    'partials.tags'
                );
        View::composer($composed_views, 'Atiker\LaravelBootstrap\Composers\Site');
    }
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

}