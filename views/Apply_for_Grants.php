
<?php
session_start();
require_once('../partials/head.php');
require_once('../partials/scripts.php');

?>

<body>
    <main class="main" id="top">
        <div class="container-fluid">
            <!-- Sidebar -->
            <?php include('../partials/youth_sidenav.php'); ?>
        
            <!-- Main Content Area -->
            <div class="content">
                <!-- Header Section -->
                <?php include('../partials/header.php'); ?>

<style>
  section {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
  }

  .box {
    background-color: #ffffff;
    border: 2px solid #dcdcdc;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
  }

  .box button {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 15px 30px;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  .box button:hover {
    background-color: #45a049;
    transform: scale(1.05);
  }

  .box button:active {
    background-color: #3e8e41;
  }
  h1{
    text-align: center;
  }
</style>

<body>
  

<section>

    <div class="box">
    
        <a href="grants_application_form.php">
        <button>Apply Now</button>
</a>
    </div>
</section>
</body>