<?php
session_start();
session_destroy();

Header("Location:../login/index.php");
