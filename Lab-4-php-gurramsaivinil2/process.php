<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $formData = json_decode(file_get_contents('php://input'), true);

  $fullName = $formData['fullName'];
  $email = $formData['email'];
  $phone = $formData['phone'];

  $data = "$fullName, $email, $phone\n";
  file_put_contents('registrations.csv', $data, FILE_APPEND);

  echo json_encode(['success' => true]);
} else {
  echo json_encode(['success' => false]);
}
?>
