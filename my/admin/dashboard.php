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
  <link rel="stylesheet" href="../../styles/admin.css">
  <link rel="stylesheet" href="../../piechart/piechart.css">
  <link rel="stylesheet" href="../../linegraph/linegraph.css">

  <!-- Scripts -->
  <script src="../../scripts/dashboard.js" defer></script>
  <script src="../../scripts/accountPanel.js" defer></script>
  <script src="../../scripts/filterBar.js" defer></script>
  <script src="../../scripts/adminSidebar.js" defer></script>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js" defer></script>
  <script src="../../piechart/piechart.js" defer></script>
  <script src="../../linegraph/linegraph.js" defer></script>
</head>

<body>
  <!-- Sidebar -->
  <aside>
    <?php include '../../sidebar/adminSidebar.php'; ?>
  </aside>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="container-fluid px-md-2">
      <div class="card-section active" id="dashboard">
        <?php include '../../pages/dashboard.php'; ?>
      </div> <!-- End of Dashboard Card Section -->
    </div> <!-- End of Container -->
  </div> <!-- End of Main Content -->
</body>
</html>
