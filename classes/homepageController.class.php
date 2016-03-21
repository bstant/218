<?php
    class homepageController extends controller {
      
      public function get() {
        
	session_start();
	$finalTable = new table($_SESSION)
	$this->html .= '<a href="index.php?controller=carController">New Car</a>';
	
	
	
	print_r($_SESSION);
      }
      public function post() {}
      public function put() {}
      public function delete() {}
    }