<!DOCTYPE html>
<html lang="en">

<head>
  <title>Challenge</title>
  
<meta charset="utf_8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Pacifico" rel="stylesheet">
</head>


</body>
 <div class="container">

   <div class="session">

      <?php if ($this->session->flashdata('user_registered')): ?>
<?php echo '<p class="alert-success">'
    .$this->session->flashdata('user_registered'). '</p>'; ?>
    <?php endif; ?>


    <?php if ($this->session->flashdata('login_failed')): ?>
<?php echo '<p class="alert alert-danger">' .$this->session->flashdata('login_failed'). '</p>'; ?>
    <?php endif; ?>


    <?php if ($this->session->flashdata('user_loggedin')): ?>
<?php echo '<p class="alert alert-success">' .$this->session->flashdata('user_loggedin'). '</p>'; ?>
    <?php endif; ?>


    <?php if ($this->session->flashdata('user_loggedout')): ?>
<?php echo '<p class="alert alert-success ">' .$this->session->flashdata('user_loggedout'). '</p>'; ?>
    <?php endif; ?>
  </div>


  <nav class="navbar">

    <div class="navbar-header">
      <spin>Coffee Lovers</spin>
    </div>

 <?php if (!$this->session->userdata('user_loggedin')) : ?>
   <a href="<?php echo base_url(); ?>homepages/login"></a>
   <a href="<?php echo base_url(); ?>homepages/register"></a>
 <?php endif; ?>

 <?php if ($this->session->userdata('user_loggedin')) : ?>
   <a href="<?php echo base_url(); ?>options/index"></a>
   <a href="<?php echo base_url(); ?>homepages/logout"></a>
 <?php endif; ?>
