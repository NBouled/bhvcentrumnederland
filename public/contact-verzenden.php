<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php'; // Zorg dat PHPMailer via Composer is geïnstalleerd

header('Content-Type: application/json');

// Formulierdata ophalen
$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

// Validatie
if (!$name || !$email || !$subject || !$message) {
    echo json_encode(['status' => 'error', 'message' => 'Vul alle verplichte velden in.']);
    exit;
}

// E-mail opbouw
$mail = new PHPMailer(true);

try {
    // SMTP-configuratie
    $mail->isSMTP();
    $mail->Host       = 'mail.bhvcentrumnederland.nl'; // <-- wijzig indien je eigen mailserver anders is
    $mail->SMTPAuth   = true;
    $mail->Username   = 'noreply@bhvcentrumnederland.nl';
    $mail->Password   = 'ueTqRXQCaQWSrksW7uN2'; // <-- vul jouw SMTP-wachtwoord in
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // of 'ssl' indien vereist
    $mail->Port       = 587; // of 465 voor SSL

    // Afzender & ontvanger
    $mail->setFrom('noreply@bhvcentrumnederland.nl', 'BHV Centrum Nederland');
    $mail->addAddress('info@bhvcentrumnederland.nl', 'BHV Centrum Nederland');
    $mail->addReplyTo($email, $name);

    // Inhoud
    $mail->isHTML(true);
    $mail->Subject = "Nieuw bericht via contactformulier: {$subject}";
    $mail->Body    = "
        <h3>Nieuw contactbericht via de website</h3>
        <p><strong>Naam:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Onderwerp:</strong> {$subject}</p>
        <p><strong>Bericht:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>
        <hr>
        <p style='font-size:12px;color:#888;'>Verzonden via het contactformulier van bhvcentrumnederland.nl</p>
    ";
    $mail->AltBody = "Naam: {$name}\nEmail: {$email}\nOnderwerp: {$subject}\nBericht:\n{$message}";

    $mail->send();

    echo json_encode([
        'status' => 'success',
        'message' => 'Bedankt! Je bericht is succesvol verzonden. We nemen spoedig contact met je op.'
    ]);
} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'message' => 'Er is iets misgegaan bij het versturen van je bericht. Probeer het later opnieuw.'
    ]);
}