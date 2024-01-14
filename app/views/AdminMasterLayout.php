<?php $this->view('blocks/headeradmin', $data); ?>
<?php $this->view('blocks/sidebaradmin'); ?>
<?php require_once "./app/views/pages/" . $data['pages'] . ".php"; ?>
<?php $this->view('blocks/footeradmin', $data); ?>
