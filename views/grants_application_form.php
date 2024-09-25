
    <link rel="shortcut icon" href="images/favicon.ico" type="image/vnd.microsoft.icon">    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
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
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        h2 {
            color: #2E8B57;
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #2E8B57;
            color: white;
            text-align: left;
        }
        td {
            text-align: left;
        }
        input[type="text"], input[type="email"], input[type="number"] {
            width: 100%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
        }
        input[type="checkbox"] {
            margin-right: 10px;
        }
        hr {
            border: 1px solid #2E8B57;
            margin: 20px 0;
        }
        .icon {
            margin-right: 8px;
            color: #2E8B57;
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<header>
    <h1>Goverment of Makueni</h1>
</header>
<body>

<h2>Grant Form for Youth</h2>

<form>
    <!-- Organization Details -->
    <h3><i class="fas fa-building icon"></i>Organization Information</h3>
    <hr>
    <table>
        <tr>
            <td><i class="fas fa-id-badge icon"></i>Name of Organization</td>
            <td><input type="text" name="organization_name" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-calendar-alt icon"></i>Date of Formation/Registration</td>
            <td><input type="text" name="formation_date" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-hashtag icon"></i>Registration Number</td>
            <td><input type="text" name="registration_number" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-map-marker-alt icon"></i>Address</td>
            <td><input type="text" name="address" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-phone icon"></i>Tel No.</td>
            <td><input type="text" name="tel_no" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-envelope icon"></i>Email</td>
            <td><input type="email" name="email" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-globe icon"></i>Website</td>
            <td><input type="text" name="website"></td>
        </tr>
    </table>

    <!-- Project Details -->
    <h3><i class="fas fa-project-diagram icon"></i>Project Information</h3>
    <hr>
    <table>
        <tr>
            <td><i class="fas fa-file-alt icon"></i>Project Title</td>
            <td><input type="text" name="project_title" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-calendar-day icon"></i>Project Date(s)</td>
            <td><input type="date" name="project_dates" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-money-check-alt icon"></i>Grant Amount Applied For</td>
            <td><input type="number" name="grant_amount" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-percentage icon"></i>Grant as % of Budget</td>
            <td><input type="number" name="grant_percentage" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-users icon"></i>Number of Participants</td>
            <td><input type="number" name="participants" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-info-circle icon"></i>Participant Profile</td>
            <td><input type="text" name="participant_profile" required></td>
        </tr>
    </table>

    <!-- Team Details -->
    <h3><i class="fas fa-user-tie icon"></i>Project Team</h3>
    <hr>
    <table>
        <tr>
            <td><i class="fas fa-user icon"></i>Team Leader Name</td>
            <td><input type="text" name="team_leader" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-briefcase icon"></i>Position in Organization</td>
            <td><input type="text" name="position" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-phone icon"></i>Contact Number</td>
            <td><input type="text" name="contact_number" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-envelope icon"></i>Email</td>
            <td><input type="email" name="team_email" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-users icon"></i>Number of Paid Staff</td>
            <td><input type="number" name="paid_staff" required></td>
        </tr>
        <tr>
            <td><i class="fas fa-hands-helping icon"></i>Number of Volunteers</td>
            <td><input type="number" name="volunteers" required></td>
        </tr>
    </table>

    <hr>
    <button type="submit" style="padding: 10px 20px; background-color: #2E8B57; color: white; border: none; border-radius: 5px;">
        <i class="fas fa-paper-plane"></i> Submit Form
    </button>
</form>

</body>
</html>
