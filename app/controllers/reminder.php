<?php

class Reminder extends Controller {
    public function index() {
    if (!isset($_SESSION['auth']) || !isset($_SESSION['user_id'])) {
        $_SESSION['error'] = "Unauthorized access.";
        header("Location: /login");
        exit;
    }

    $model = $this->model('ReminderModel');
    $reminders = $model->getByUser($_SESSION['user_id']);

    $this->view('reminder/index', ['reminders' => $reminders]);
  }
}