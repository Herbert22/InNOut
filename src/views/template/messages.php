<?php 
$errors = [];
$message = [];
$email = '';
$exception = '';

if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
    unset($_SESSION['message']);
} elseif($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if(get_class($exception) === 'ValidationException') {
        $errors = $exception->getErrors();
    }
}

// $alertType = '';

// if($message = ['type'] === 'error') {
//     $alertType = 'danger';
// } else {
//     $alertType = 'success';
// }
?>

<?php if($message): ?>
    <div role="alert" 
        class="my-2 alert alert-<?= $message['type'] === 'error' ? 'success' : 'danger' ?>">
        <?= $message['message']; ?> 
    </div>
<?php endif ?>