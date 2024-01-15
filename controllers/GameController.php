<?php

$id_game = $_GET['id'] ?? null;

if (session_status() == PHP_SESSION_NONE) {
  require_once dirname(__DIR__) . '/views/401.php';
  return;
}

require_once dirname(__DIR__) . '/models/GameModel.php';

$game = verifyIfUserHasGameAndReturn($id_game, $_SESSION["user_id"]);

if (!$game) {
  require_once dirname(__DIR__) . '/views/404.php';
  return;
}

require_once dirname(__DIR__) . '/views/GameView.php';