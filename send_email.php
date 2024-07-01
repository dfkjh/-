<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 폼 데이터 가져오기
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // 이메일 설정
    $to = 'your-email@example.com'; // 수신할 이메일 주소로 변경
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // 이메일 내용
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Message:\n$message\n";

    // 이메일 전송
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Thank you for your message. It has been sent.";
    } else {
        echo "There was a problem sending your message. Please try again.";
    }
} else {
    echo "Invalid request";
}
?>
