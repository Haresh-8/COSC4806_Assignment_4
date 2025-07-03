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
    public function create() {
        if (!isset($_SESSION['auth']) || !isset($_SESSION['user_id'])) {
            $_SESSION['error'] = "Please login first.";
            header("Location: /login");
            exit;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $subject = trim($_POST['subject'] ?? '');
            $user_id = $_SESSION['user_id'];

            if (empty($subject)) {
                $_SESSION['error'] = "Reminder cannot be empty.";
                header("Location: /reminder/create");
                exit;
            }

            // Set completed default 0 (false)
            $completed = 0;

            $this->model('ReminderModel')->create($user_id, $subject, $completed);
            $_SESSION['message'] = "Reminder created.";
            header("Location: /reminder");
            exit;
        } else {
            $this->view('reminder/create');
        }
    }

}