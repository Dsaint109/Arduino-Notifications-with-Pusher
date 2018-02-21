<?php
  require __DIR__ . '/vendor/autoload.php';

  $options = array(
    'cluster' => 'eu',
    'encrypted' => true
  );
  $pusher = new Pusher\Pusher(
    '12ca90be01ce574e4fe6',
    'f293646a5eae236c8dbc',
    '407988',
    $options
  );

  if(isset($_GET['value'])){
    $data['value'] = $_GET['value'];
  } else {
    $data['value'] = 'Empty request';
  }

  $pusher->trigger('my-channel', 'my-event', $data);
?>
