<!DOCTYPE html>
<html lang="en">

<head>

  <title>Koffie Machine</title>

  <meta charset="utf_8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
    crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">

</head>


</body>
<div class="container-fluir expand-xl|lg|md|sm|xs">

  <div class="session">

    <?php if ($this->session->flashdata('user_registered')): ?>
    <?php echo '<p class="alert-success">' . $this->session->flashdata('user_registered') . '</p>'; ?>
    <?php endif; ?>


    <?php if ($this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">' . $this->session->flashdata('login_failed') . '</p>'; ?>
    <?php endif; ?>


    <?php if ($this->session->flashdata('user_loggedin')): ?>
    <?php echo '<p class="alert alert-success">' . $this->session->flashdata('user_loggedin') . '</p>'; ?>
    <?php endif; ?>


    <?php if ($this->session->flashdata('user_loggedout')): ?>
    <?php echo '<p class="alert alert-success ">' . $this->session->flashdata('user_loggedout') . '</p>'; ?>
    <?php endif; ?>


    <?php if ($this->session->flashdata('studentnummer_registered')): ?>
    <?php echo '<p class="alert alert-success ">' . $this->session->flashdata('studentnummer_registered') . '</p>'; ?>
    <?php endif; ?>
  </div>



  <nav class="navbar-expand-xl|lg|md|sm|xs  navbar-light">

    <span class="navbar-brand">Coffee Lovers</span>

    <?php if (!$this->session->userdata('user_loggedin')) : ?>
    <a href="<?php echo base_url(); ?>homepages/login"></a>
    <a href="<?php echo base_url(); ?>homepages/register"></a>
    <?php endif; ?>

    <?php if ($this->session->userdata('user_loggedin')) : ?>
    <a href="<?php echo base_url(); ?>options/index"></a>
    <a href="<?php echo base_url(); ?>homepages/logout"></a>
    <?php endif; ?>