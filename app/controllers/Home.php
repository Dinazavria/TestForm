<?php
class Home extends Controller {
    public function index() {
        $data = [];
        
        if(isset($_POST['name'])) {
            $message = $this->model('FormModel');
            $message->setData($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message']);

            $isValid = $message->validForm();
            if ($isValid == "Сообщение отправлено")
                $message->addMessage();
            else
                $data['message'] = $isValid;
        }

        $this->view('home/index', $data);
    }

}