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
  <link rel="stylesheet" href="../../styles/usersPanel.css">

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
    <div class="container-fluid px-md-2">
      <div class="card-section active" id="controlPanel">
<div class="mt-3">
    <div class="d-flex align-items-center position-relative">
        <div class="">
            <h4 class="mb-0 fw-bold">Users Panel</h4>
        </div>
        <!-- Button trigger modal -->
        <div class="ms-auto">
            <button type="button" class="btn btn-success d-inline" data-bs-toggle="modal" data-bs-target="#addUser">
                <span>Add New User</span>
            </button>
        </div>
    </div>
    <!-- MAIN -->
    <div class="card p-3 shadow-sm rounded-2 mt-4">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
            <form action="#" class="col-md-6 col-12 mb-0 p-0" style="max-width:520px;">
                <div class="input-group">
                    <input type="text" id="search" class="form-control" placeholder="Search user...">
                    <button class="btn btn-success" type="button">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="card p-2 rounded-3 mb-0 shadow-sm">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="col-2 ps-3">User ID</th>
                    <th scope="col">Username</th>
                    <th scope="col">Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Date created</th>
                    <th scope="col">Permission</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <th scope="row" class="ps-3">1</th>
                    <td>mark</td>
                    <td>Mark Jhon</td>
                    <td>Admin</td>
                    <td>10/01/25</td>
                    <td>Full</td>
                    <td><label for="" class="activeStatus">Active</label></td>
                    <td class="pe-5"><button class="btn btn-outline-success float-end" type="button"
                            data-bs-toggle="modal" data-bs-target="#editUser">Edit</button></td>
                </tr>
                <tr>
                    <th scope="row" class="ps-3">2</th>
                    <td>jacob</td>
                    <td>Jacob Graham</td>
                    <td>Staff</td>
                    <td>10/01/25</td>
                    <td>Read, Write, Update</td>
                    <td><label for="" class="inactiveStatus">Inactive</label></td>
                    <td class="pe-5"><button class="btn btn-outline-success float-end" type="button"
                            data-bs-toggle="modal" data-bs-target="#editUser">Edit</button></td>
                </tr>
                <tr>
                    <th scope="row" class="ps-3">3</th>
                    <td>john</td>
                    <td>John Loide Cruz</td>
                    <td>Technician</td>
                    <td>10/01/25</td>
                    <td>Read, Update</td>
                    <td><label for="" class="activeStatus">Active</label></td>
                    <td class="pe-5"><button class="btn btn-outline-success float-end" type="button"
                            data-bs-toggle="modal" data-bs-target="#editUser">Edit</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- ADD USERS -->
<div class="modal fade" id="addUser" tabindex="-1" aria-labelledby="viewDetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-semibold" id="viewDetailsLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pe-2">
                <form class="row g-3">
                    <div>
                        <label for="Name">Username <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div>
                        <label for="Name">Password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" required>
                    </div>
                    <div>
                        <label for="Name">Confirm password <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" required>
                    </div>
                    <div>
                        <label for="Name">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" required>
                    </div>
                    <div>
                        <label for="Name">Role <span class="text-danger">*</span></label>
                        <select class="form-select" aria-label="Default select example">
                            
                            <option value="1">Admin</option>
                            <option value="2">Staff</option>
                            <option value="3">Technician</option>
                        </select>
                    </div>

                    <div class="border-top pb-3 pt-3 d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success " data-bs-dismiss="modal">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- USER EDIT MODAL -->

<div class="modal fade" id="editUser" tabindex="-1" aria-labelledby="viewDetailsLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewDetailsLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pe-2">
                <form class="row g-3">
                    <div>
                        <label for="Name">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <div>
                        <label for="Name">Role <span class="text-danger">*</span></label>
                        <input type="text" class="form-control">
                    </div>
                    <!-- SWITCH -->
                    <div class="mb-3">
                            <label class="form-label d-block" for="userSwitchChecked">
                            Status <span class="text-danger">*</span>
                        </label>

                        <div class="form-check form-switch d-flex align-items-center">
                                <input class="form-check-input me-2" type="checkbox" role="switch" id="userSwitchChecked"
                                data-bs-toggle="collapse" data-bs-target=".status-toggle">

                            <span class="collapse  status-toggle text-success fw-semibold"
                                data-bs-parent="body">Active</span>
                            <span class="collapse show status-toggle text-danger fw-semibold"
                                data-bs-parent="body">Inactive</span>
                        </div>
                    </div>

                    <div class="border-top pb-3 pt-3 d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-secondary " data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success " data-bs-dismiss="modal">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
      </div> <!-- End of Card Section -->
    </div> <!-- End of Container -->
  </div> <!-- End of Main Content -->
</body>
</html>
