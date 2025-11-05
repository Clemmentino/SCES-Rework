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
  <link rel="stylesheet" href="../../styles/accountPanel.css">

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
    <div class="container-fluid px-md-2 px-sm-0">
      <div class="card-section active" id="controlPanel">
        <!-- Control Panel Header -->
        <div class="profile-panel-header">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                <div>
                    <h4 class="page-title mb-1 fw-bold">Account Settings</h4>
                    <p class="page-subtitle mb-0 text-muted" style="font-size: 14px;">Manage your account details and preferences</p>
                </div>
                <!-- Logout Button -->
                <div>
                    <a href="../../index.php" class="btn btn-outline-danger">
                        <i class="bi bi-box-arrow-right me-2"></i>Log Out
                    </a>
                </div>
            </div>
        </div>


        <!-- Profile Header Card -->
        <div class="card border-0 shadow-sm mb-3 profile-header-card">
          <div class="card-body p-4">
            <div class="row align-items-center">
              <!-- Profile Image -->
              <div class="col-auto">
                <div class="position-relative">
                  <img src="../../img/f1.png" alt="Profile" class="rounded-circle profile-image" id="profileImage">
                </div>
              </div>
              
              <div class="col">
                <div class="row">
                  <!-- Name and Title with Edit Button -->
                  <div class="col-md-4">
                    <div class="d-flex align-items-center gap-2 mb-1">
                      <h5 class="profile-name mb-0" id="displayName">Clemmentino Amoguis</h5>
                      <button class="btn btn-sm btn-light rounded-circle p-1 edit-btn" 
                              data-bs-toggle="modal" data-bs-target="#editProfileModal">
                        <i class="bi bi-pencil"></i>
                      </button>
                    </div>
                    <p class="profile-title mb-0">
                      <span class="badge-role">Admin</span>
                      <span class="profile-divider">|</span>
                      <span class="profile-department">Academic Building</span>
                    </p>
                  </div>
                  
                  <!-- Contact Information Grid -->
                  <div class="col-md-8">
                    <div class="row g-3">
                      <div class="col-6 col-xl-3">
                        <div class="info-item">
                          <span class="info-label">Staff ID</span>
                          <span class="info-value">SJ53862</span>
                        </div>
                      </div>
                      <div class="col-6 col-xl-3">
                        <div class="info-item">
                          <span class="info-label">Phone number</span>
                          <span class="info-value">0912 345 3254</span>
                        </div>
                      </div>
                      <div class="col-6 col-xl-3">
                        <div class="info-item">
                          <span class="info-label">Staff Account</span>
                          <span class="info-value">clemmentino.amoguis</span>
                        </div>
                      </div>
                      <div class="col-6 col-xl-3">
                        <div class="info-item">
                          <span class="info-label">Email</span>
                          <span class="info-value">amoguis.clemm@dnscedu.onmicrosoft.com</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Personal Information Card -->
        <div class="card border-0 shadow-sm mb-3">
          <div class="card-body px-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h6 class="section-title mb-0">Personal Information</h6>
              <button class="btn btn-sm btn-light rounded-circle p-1 edit-btn" data-bs-toggle="modal" data-bs-target="#editPersonalModal">
                <i class="bi bi-pencil"></i>
              </button>
            </div>
            <div class="row g-3">
              <div class="col-6">
                <div class="info-item">
                  <span class="info-label">Gender</span>
                  <span class="info-value">Male</span>
                </div>
              </div>
              <div class="col-6">
                <div class="info-item">
                  <span class="info-label">Date of birth</span>
                  <span class="info-value">20th December, 2005</span>
                </div>
              </div>
              <div class="col-6">
                <div class="info-item">
                  <span class="info-label">Hometown</span>
                  <span class="info-value">Panabo City</span>
                </div>
              </div>
              <div class="col-6">
                <div class="info-item">
                  <span class="info-label">Nationality</span>
                  <span class="info-value">Filipino</span>
                </div>
              </div>
              <div class="col-6">
                <div class="info-item">
                  <span class="info-label">Religion</span>
                  <span class="info-value">None</span>
                </div>
              </div>
              <div class="col-6">
                <div class="info-item">
                  <span class="info-label">Language</span>
                  <span class="info-value">English, Filipino</span>
                </div>
              </div>
              <div class="col-6">
                <div class="info-item">
                  <span class="info-label">Marital status</span>
                  <span class="info-value">Single</span>
                </div>
              </div>
              <div class="col-12">
                <div class="info-item">
                  <span class="info-label">Address</span>
                  <span class="info-value">Block 3, Purok 6, San Vicente Village, Panabo City</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Edit Profile Modal -->
        <div class="modal fade" id="editProfileModal" tabindex="-1" aria-labelledby="editProfileModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header border-0">
                <h5 class="modal-title" id="editProfileModalLabel">Edit Profile</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="mb-3 text-center">
                  <img src="../../img/f1.png" alt="Profile Preview" class="rounded-circle mb-3" width="120" height="120" id="imagePreview">
                  <div>
                    <input type="file" class="form-control" id="imageUpload" accept="image/*">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="nameInput" class="form-label">Full Name</label>
                  <input type="text" class="form-control" id="nameInput" value="Clemmentino Amoguis ">
                </div>
              </div>
              <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success btn-save" onclick="saveProfile()">Save Changes</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Edit Personal Information Modal -->
        <div class="modal fade" id="editPersonalModal" tabindex="-1" aria-labelledby="editPersonalModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
              <div class="modal-header border-0">
                <h5 class="modal-title" id="editPersonalModalLabel">Edit Personal Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="row g-3">
                  <div class="col-6">
                    <label class="form-label">Gender</label>
                    <select class="form-select">
                      <option selected>Male</option>
                      <option>Female</option>
                      <option>Other</option>
                    </select>
                  </div>
                  <div class="col-6">
                    <label class="form-label">Date of birth</label>
                    <input type="date" class="form-control" value="2005-12-20">
                  </div>
                  <div class="col-6">
                    <label class="form-label">Hometown</label>
                    <input type="text" class="form-control" value="Panabo City">
                  </div>
                  <div class="col-6">
                    <label class="form-label">Nationality</label>
                    <input type="text" class="form-control" value="Filipino">
                  </div>
                  <div class="col-6">
                    <label class="form-label">Religion</label>
                    <input type="text" class="form-control" value="None">
                  </div>
                  <div class="col-6">
                    <label class="form-label">Language</label>
                    <input type="text" class="form-control" value="Filipino, English">
                  </div>
                  <div class="col-6">
                    <label class="form-label">Marital status</label>
                    <select class="form-select">
                      <option selected>Single</option>
                      <option>Married</option>
                      <option>Divorced</option>
                    </select>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" value="Block 3, Purok 6, San Vicente Village, Panabo City">
                  </div>
                </div>
              </div>
              <div class="modal-footer border-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success btn-save" data-bs-dismiss="modal">Save Changes</button>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- End of Card Section -->
    </div> <!-- End of Container -->
  </div> <!-- End of Main Content -->
</body>
</html>
