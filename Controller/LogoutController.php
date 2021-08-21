<?php
unset($_SESSION['user']['login']);
unset($_SESSION['user']['user_id']);
unset($_SESSION['user']['user_name']);
unset($_SESSION['user']['email']);
unset($_SESSION['user']['phone']);
unset($_SESSION['user']['type']);
redirect('login');
