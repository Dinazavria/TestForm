<?php
class Leads extends Controller {
    public function index() {
        $data = [];

        if(isset($_POST['name'])) {
            $message = $this->model('FormModel');
            $message->setData($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message']);
            $isValid = $message->validContact();
            if ($isValid == "Сообщение отправлено") {
                $message->addContact();
                $data['message'] = $isValid;
            } else {
                $data['message'] = $isValid;
            }
        }

        $this->view('leads/index', $data);
    }
}