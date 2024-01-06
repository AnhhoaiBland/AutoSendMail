<?php $this->view('blocks/header', $data); ?>
<?php require_once "./app/views/pages/" . $data['pages'] . ".php"; ?>
<?php $this->view('blocks/footer', $data); ?>

