<?php

include('includes/functions.php');
session_destroy();
Header('Location: login.php');