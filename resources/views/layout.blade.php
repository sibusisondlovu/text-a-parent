<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Text-a-Parent</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            /* Custom styles for the sidebar */
            body {
                overflow-x: hidden;
                font-family: 'Roboto', sans-serif;
            }
            #sidebar-wrapper {
                min-height: 100vh;
                background-color: #212529;
                color: #fff;
            }
            .sidebar-heading {
                text-align: center;
                padding: 20px 15px;
                font-size: 24px;
                font-weight: bold;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                margin-bottom: 20px;
            }
            .list-group-item {
                color: #fff;
                background-color: transparent;
                border: none;
                cursor: pointer;
                transition: all 0.3s ease;
            }
            .list-group-item:hover {
                background-color: rgba(255, 255, 255, 0.1);
            }
            .list-group-item i {
                margin-right: 10px;
            }
            .profile-header {
                text-align: center;
                padding: 20px 15px;
            }
            .profile-avatar {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                background-color: #fff;
                color: #212529;
                font-size: 36px;
                font-weight: bold;
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 15px;
            }
            .logout-btn {
                width: 100%;
                text-align: center;
                margin-top: 20px;
            }
        </style>

    </head>

    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar -->
            <div class="bg-dark" id="sidebar-wrapper">
                <div class="sidebar-heading">
                    <div class="profile-header">
                        <div class="profile-avatar">S</div>
                        <div>Sibusiso</div>
                    </div>
                </div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-envelope"></i> Messaging
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-address-book"></i> Contacts
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <i class="fas fa-cog"></i> Settings
                    </a>
                    <button class="btn btn-danger logout-btn">Logout</button>
                </div>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <!-- Page content goes here -->
                    <h1>Your Page Content</h1>
                    <p>Some text here...</p>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script>
    </body>
</html>
