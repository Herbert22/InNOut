<?php 
$errors = [];
$message = [];
$email = '';
$exception = '';
if($exception) {
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

if($message): ?>
    <div role="alert" 
        class="my-3 alert alert-
            <?= $message['type'] === 'error' ? 'danger' : 'success' ?>">
        <?= $message['message']; ?> 
    </div>
<?php endif ?>