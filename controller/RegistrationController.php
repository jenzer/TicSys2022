<?php

include_once 'controller/FormController.php';
include_once 'view/registration/RegistrationInitView.php';
include_once 'view/registration/RegistrationConfirmationView.php';

class RegistrationController extends FormController {

    protected function init() {
        $view = new RegistrationInitView();
        $view->notification = $this->notification;
        $view->registrationUri = URI_REGISTRATION;
        $view->validatedUserName = $this->validate('username', true);
        $view->validatedPassword = $this->validate('password', true);
        $view->validatedPasswordRepetition = $this->validate('password_repetition', true);
        $view->validatedLastName = $this->validate('lastname', true);
        $view->validatedFirstName = $this->validate('first_name', true);
        $view->validatedPhone = $this->validate('phone');
        $view->validatedEmail = $this->validate('email', true);
        $view->display();
    }

    protected function create() {
    }

    protected function index() {
        if (preg_match('@/success$@i', $_SERVER['REQUEST_URI'])) {
            // show confirmation page
            $view = new RegistrationConfirmationView();
            $view->display();
        }
    }

}

