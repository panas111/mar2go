<?php
$errorMessage = null;
$successMessage = null;

if ($_POST) {
    $name = isset($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : null;
    $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
    $message = htmlspecialchars($_POST['message']);

    if (empty($name) || empty($email) || empty($message)) {
        $errorMessage = 'Wypełnij wszystkie pola!';
    }

    if (is_null($errorMessage)) {
        mail(
            'twoj-adres@email.pl',
            'Formularz kontaktowy',
            "Treść wiadomości: $message \n\n Imię: $name \n\n Adres e-mail: $email",
            "From: $name <$email>"
        );

        $successMessage = 'Wiadomość została wysłana';
    }
}
?>