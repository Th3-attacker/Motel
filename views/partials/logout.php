<?php
session_start();

session_destroy();

header('?page=home');
