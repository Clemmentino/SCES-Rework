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
  <link rel="stylesheet" href="../../piechart/piechart.css">
  <link rel="stylesheet" href="../../linegraph/linegraph.css">

  <!-- Scripts -->
  <script src="../../scripts/dashboard.js" defer></script>
  <script src="../../scripts/accountPanel.js" defer></script>
  <script src="../../scripts/filterBar.js" defer></script>
  <script src="../../scripts/sidebar.js" defer></script>

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js" defer></script>
  <script src="../../piechart/piechart.js" defer></script>
  <script src="../../linegraph/linegraph.js" defer></script>
</head>

<body>
  <!-- Sidebar -->
  <aside>
    <?php include '../../sidebar/sidebar.php'; ?>
  </aside>

  <!-- Main Content -->
  <div class="main-content" id="main-content">
    <div class="container-fluid px-md-2">
      <div class="card-section active" id="dashboard">
                <!-- Greeting Section -->
        <div class="top-header pt-1 pb-3 mt-2">
          <h4 class="fw-bold">Hello, Clemm! 👋</h4>
          <p class="text-muted small mb-3 mb-md-4">What are you looking for today?</p>
          <?php include '../../components/filterBar.php'; ?>
        </div>

        <!-- Charts Row -->
        <div class="row g-3 g-md-4 mb-3 mb-md-4">
          
          <!-- Pie Chart Card -->
          <div class="col-12 col-lg-6">
            <div class="card p-3 p-md-4 shadow-sm rounded-4">
              <h6 class="mb-1 fw-bold">Energy Consumption Overview</h6>
              <p class="mb-3 text-muted small">Distribution of energy consumption across all live devices for today</p>

              <section class="chart-section text-center position-relative">
                <canvas id="pieChart" width="400" height="400"></canvas>
                <div class="chart-total">
                  <div id="totalValue">15,417</div>
                  <div class="total-label">Total kWh Consumption</div>
                </div>
              </section>

              <div class="device-status mt-2">
                <h6 class="fw-semibold">Device Status</h6>
                <div id="deviceStatusContainer"></div>
              </div>
            </div>
          </div>

          <!-- Line Chart Card -->
          <div class="col-12 col-lg-6">
            <div class="card p-3 p-md-4 shadow-sm rounded-4">
              <h6 class="mb-1 fw-bold">Max vs Actual Demand</h6>
              <p class="mb-3 text-muted small">Comparison of peak demand against actual usage over time</p>

              <canvas id="consumptionChart" style="max-width: 100%; height: auto;"></canvas>

              <!-- Demand Analysis Section -->
              <div id="demandAnalysis" class="mt-3">
                <h6 class="fw-semibold">Demand Analysis</h6>
                <div class="analysis-item">
                  <span class="analysis-label">Peak Time</span>
                  <span id="peakTime" class="analysis-value">--</span>
                </div>
                <div class="analysis-item">
                  <span class="analysis-label">Low Demand Time</span>
                  <span id="lowTime" class="analysis-value">--</span>
                </div>
                <div class="analysis-item">
                  <span class="analysis-label">Demand Variance</span>
                  <span id="variance" class="analysis-value">--</span>
                </div>
              </div>
            </div>
          </div>
        </div> <!-- End of Row -->
      </div> <!-- End of Dashboard Card Section -->
    </div> <!-- End of Container -->
  </div> <!-- End of Main Content -->
</body>
</html>
