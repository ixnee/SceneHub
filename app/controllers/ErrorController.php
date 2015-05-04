<?php

class ErrorController extends BaseController {

		protected $layout = 'layouts.default';

    public function missing()
    {
        $this->layout->content = View::make('errors.missing');
    }
}