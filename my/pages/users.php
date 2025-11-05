<?php
session_start();
$username = $_SESSION['user'];
if(!isset($_SESSION['user'])){
  $error = "You are not yet logged in.";
  header("location: ../../index.php?$error");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Campus Dashboard</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../../bootstrap-5.3.7-dist/css/bootstrap.min.css">
  <script src="../../bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">

  <!-- jQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>

  <!-- Styles -->
  <link rel="stylesheet" href="../../styles/global.css">
  <link rel="stylesheet" href="../../styles/users.css">

  <!-- Scripts -->
  <script src="../../scripts/sidebar.js" defer></script>
</head>

<body>
  <!-- Sidebar -->
  <aside>
    <?php include '../../sidebar/sidebar.php'; ?>
  </aside>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="container-fluid">
      <div class="card-section active" id="controlPanel">
        <!-- Header Section -->
          <div class="panel-header">
            <div class="header-content">
              <h4 class="panel-title">Users Panel</h4>
              <p class="panel-subtitle">Monitor and manage all appliances across buildings</p>
            </div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUser">
              <i class="bi bi-plus-circle"></i>
              <span>Add New User</span>
            </button>
          </div>

        <div class="panel-wrapper">
          <!-- Search Section -->
          <div class="search-wrapper">
            <form action="#" class="search-form">
              <div class="input-group">
                <input type="text" id="search" class="form-control" placeholder="Search user...">
                <button class="btn btn-search" type="button">
                  <i class="bi bi-search"></i>
                  <span class="d-none d-sm-inline">Search</span>
                </button>
              </div>
            </form>
          </div>

          <!-- Table Section -->
          <div class="table-wrapper">
            <table class="table users-table">
              <thead>
                <tr>
                  <th scope="col">User ID</th>
                  <th scope="col">Username</th>
                  <th scope="col">Name</th>
                  <th scope="col">Role</th>
                  <th scope="col">Date Created</th>
                  <th scope="col">Permission</th>
                  <th scope="col">Status</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td data-label="User ID">1</td>
                  <td data-label="Username">mark</td>
                  <td data-label="Name">Mark Jhon</td>
                  <td data-label="Role">Admin</td>
                  <td data-label="Date Created">10/01/25</td>
                  <td data-label="Permission">Full</td>
                  <td data-label="Status">
                    <span class="status-badge status-active">Active</span>
                  </td>
                  <td data-label="Action">
                    <button class="btn btn-action" type="button" data-bs-toggle="modal" data-bs-target="#editUser">
                      <i class="bi bi-pencil"></i>
                      <span>Edit</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td data-label="User ID">2</td>
                  <td data-label="Username">jacob</td>
                  <td data-label="Name">Jacob Graham</td>
                  <td data-label="Role">Staff</td>
                  <td data-label="Date Created">10/01/25</td>
                  <td data-label="Permission">Read, Write, Update</td>
                  <td data-label="Status">
                    <span class="status-badge status-inactive">Inactive</span>
                  </td>
                  <td data-label="Action">
                    <button class="btn btn-action" type="button" data-bs-toggle="modal" data-bs-target="#editUser">
                      <i class="bi bi-pencil"></i>
                      <span>Edit</span>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td data-label="User ID">3</td>
                  <td data-label="Username">john</td>
                  <td data-label="Name">John Loide Cruz</td>
                  <td data-label="Role">Technician</td>
                  <td data-label="Date Created">10/01/25</td>
                  <td data-label="Permission">Read, Update</td>
                  <td data-label="Status">
                    <span class="status-badge status-active">Active</span>
                  </td>
                  <td data-label="Action">
                    <button class="btn btn-action" type="button" data-bs-toggle="modal" data-bs-target="#editUser">
                      <i class="bi bi-pencil"></i>
                      <span>Edit</span>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- ADD USER MODAL -->
        <div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="addUserLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="modal-form">
                  <div class="form-group">
                    <label class="form-label">Username <span class="required">*</span></label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Password <span class="required">*</span></label>
                    <input type="password" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Confirm Password <span class="required">*</span></label>
                    <input type="password" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Name <span class="required">*</span></label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label class="form-label">Role <span class="required">*</span></label>
                    <select class="form-select" required>
                      <option value="">Select role...</option>
                      <option value="1">Admin</option>
                      <option value="2">Staff</option>
                      <option value="3">Technician</option>
                    </select>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Add User</button>
              </div>
            </div>
          </div>
        </div>

        <!-- EDIT USER MODAL -->
        <div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="editUserLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title" id="editUserLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form class="modal-form">
                  <div class="form-group">
                    <label class="form-label">Name <span class="required">*</span></label>
                    <input type="text" class="form-control" value="Mark Jhon">
                  </div>
                  <div class="form-group">
                    <label class="form-label">Role <span class="required">*</span></label>
                    <select class="form-select">
                      <option value="1" selected>Admin</option>
                      <option value="2">Staff</option>
                      <option value="3">Technician</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-label d-block">Status <span class="required">*</span></label>
                    <div class="form-check form-switch status-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="userSwitchChecked" checked data-bs-toggle="collapse" data-bs-target=".status-toggle">
                      <label class="form-check-label" for="userSwitchChecked">
                        <span class="collapse show status-toggle status-text-active">Active</span>
                        <span class="collapse status-toggle status-text-inactive">Inactive</span>
                      </label>
                    </div>
                  </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save Changes</button>
              </div>
            </div>
          </div>
        </div>

      </div> <!-- End of Card Section -->
    </div> <!-- End of Container -->
  </div> <!-- End of Main Content -->
</body>
</html>
