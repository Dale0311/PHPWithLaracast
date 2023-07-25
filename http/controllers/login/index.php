<?php
// get

use core\Session;
view("login.view.php", ['error' => Session::get('error')]);