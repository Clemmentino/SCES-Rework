        <!-- Greeting Section -->
        <div class="top-header pt-1 pb-3 mt-2">
          <h4 class="fw-bold">Hello, Clemm! 👋</h4>
          <p class="text-muted small mb-3 mb-md-4">What are you looking for today?</p>
          <?php include '../components/filterBar.php'; ?>
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