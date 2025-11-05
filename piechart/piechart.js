// ===== UTILS =====
const Utils = {
  CHART_COLORS: {
    forest: '#176627',
    leaf: '#3fa24b',
    emeraldForest: '#42a84f',
    forestBreeze: '#68c770',
    softFern: '#92db94',
    celadon: '#9ce09e',
    tealForest: '#1e8c6f',
    jadeMoss: '#3bcf95',
    forestLake: '#1a7a68',
    aquaSpring: '#1fbd86ff'
  }
};

// ===== EDIT THESE VALUES =====
// Device power consumption (kWh per day)
const airconKwh = 8.8;      // per aircon
const tvKwh = 1.2;          // per TV
const fanKwh = 0.6;         // per fan
const lightKwh = 0.8;       // per light
const computerKwh = 0.65;   // per computer

// Building setup
const floors = 4;
const roomsPerFloor = 7;

// Devices per regular room
const airconsPerRoom = 2;
const tvsPerRoom = 1;
const fansPerRoom = 4;
const lightsPerRoom = 1;

// Lab setup (2 labs total)
const labAircons = 2;
const labTvs = 1;
const labFans = 0;
const labLights = 1;
const labComputers = 35;

// ===== CALCULATIONS =====
// One regular room
const roomTotal = (airconsPerRoom * airconKwh) + 
                  (tvsPerRoom * tvKwh) + 
                  (fansPerRoom * fanKwh) + 
                  (lightsPerRoom * lightKwh);

// One floor (7 rooms)
const floorTotal = roomTotal * roomsPerFloor;

// One lab
const labTotal = (labAircons * airconKwh) + 
                 (labTvs * tvKwh) + 
                 (labFans * fanKwh) + 
                 (labLights * lightKwh) + 
                 (labComputers * computerKwh);

// Building totals by category
const totalHVAC = (airconsPerRoom * airconKwh * roomsPerFloor * floors) + (labAircons * airconKwh * 2);
const totalEntertainment = (tvsPerRoom * tvKwh * roomsPerFloor * floors) + (labTvs * tvKwh * 2);
const totalFans = (fansPerRoom * fanKwh * roomsPerFloor * floors) + (labFans * fanKwh * 2);
const totalLighting = (lightsPerRoom * lightKwh * roomsPerFloor * floors) + (labLights * lightKwh * 2);
const totalComputers = (labComputers * computerKwh * 2);

// ===== CHART DATA =====
const data = {
  labels: [
    'Wall Fans',
    'Entertainment',
    'HVAC Systems',
    'Lighting',
    'Computers'
  ],
  datasets: [{
    label: 'Daily Energy Consumption (kWh)',
    data: [
      totalFans,          // All fans
      totalEntertainment, // All TVs
      totalHVAC,          // All aircons
      totalLighting,      // All lights
      totalComputers      // All computers
    ],
    backgroundColor: Object.values(Utils.CHART_COLORS),
    borderColor: '#fff',
    borderWidth: 2,
    cutout: '70%',
    hoverOffset: 7
  }]
};

// ===== CHART CONFIG =====
function getResponsiveFont(size) {
  const w = window.innerWidth;
  return w >= 1200 ? size * 0.85 : w >= 768 ? size * 0.9 : w >= 480 ? size * 0.8 : size * 0.7;
}

const config = {
  type: 'doughnut',
  data,
  options: {
    responsive: true,
    maintainAspectRatio: true,
    aspectRatio: 1,
    layout: { padding: 10 },
    plugins: {
      legend: {
        position: 'bottom',
        labels: {
          color: '#176627',
          font: { size: getResponsiveFont(13), weight: '500' },
          usePointStyle: true,
          pointStyle: 'circle',
          padding: 8
        }
      },
      tooltip: {
        backgroundColor: '#176627',
        titleColor: '#fff',
        bodyColor: '#fff',
        cornerRadius: 8,
        padding: 10,
        displayColors: false,
        callbacks: {
          label: (context) => `Power Consumption – ${context.parsed.toFixed(2)} kWh`,
          title: (context) => `${context[0].label}`
        }
      }
    },
    animation: {
      duration: 1500,
      easing: 'easeInOutQuart',
      onComplete: () => {
        updateTotal();
        updateDeviceStatus();
      }
    }
  }
};

// ===== UI UPDATES =====
function updateTotal() {
  const chart = Chart.getChart('pieChart');
  const total = chart.data.datasets[0].data.reduce((a, b) => a + b, 0);
  document.getElementById('totalValue').textContent = total.toFixed(2);
}

function updateDeviceStatus() {
  const container = document.getElementById('deviceStatusContainer');
  container.innerHTML = '';

  const chart = Chart.getChart('pieChart');
  const labels = chart.data.labels.slice(0, 3);
  const values = chart.data.datasets[0].data.slice(0, 3);

  labels.forEach((label, i) => {
    const isOnline = Math.random() > 0.2;
    const div = document.createElement('div');
    div.classList.add('device-item');
    div.innerHTML = `
      <div class="device-info">
        <span class="status-dot ${isOnline ? '' : 'offline'}"></span>
        <span>${label}</span>
      </div>
      <div class="device-value">
        ${values[i].toFixed(2)} <span class="unit">kWh</span>
      </div>
    `;
    container.appendChild(div);
  });
}

// ===== INIT =====
window.addEventListener('load', () => {
  // Disable animation if on mobile (optimization)
  if (window.innerWidth <= 768) {
    config.options.animation = false;
  }

  new Chart(document.getElementById('pieChart'), config);
  updateTotal();
  updateDeviceStatus();
});
