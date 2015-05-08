<?php

/*
 * Author:					Lisa Balogh
 * Revision Date:		May 7, 2014
 * File Name:				ErrorController.php
 * Description:			Controller that handles errors and exceptions
 */

class ErrorController extends BaseController {

		protected $layout = 'layouts.default';


// serves a custom 404 not found page 
  public function missing()
  {
      $this->layout->content = View::make('errors.missing');
  }
}