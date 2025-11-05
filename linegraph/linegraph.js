document.addEventListener('DOMContentLoaded', function() {
    
    function getResponsiveFont(size) {
        const w = window.innerWidth;
        return w >= 1200 ? size * 0.85 : w >= 768 ? size * 0.9 : w >= 480 ? size * 0.8 : size * 0.7;
    }

    const generateData = () => {
        const hours = [], consumption = [];
        for (let i = 6; i <= 22; i++) {
            hours.push(i < 12 ? `${i} AM` : i === 12 ? '12 PM' : `${i - 12} PM`);
            const value =
                i < 10 ? 150 + Math.random() * 100 :       // Morning buildup (6–9 AM)
                i <= 14 ? 270 + Math.random() * 50 :       // 🔥 Peak hours (10 AM–2 PM)
                100 + Math.random() * 80;                  // Decline and night (3–10 PM)
            consumption.push(Math.round(value));
        }
        return { hours, consumption };
    };

    const data = generateData();

    // --- Demand Analysis Computation ---
    const maxVal = Math.max(...data.consumption);
    const minVal = Math.min(...data.consumption);
    const variance = maxVal - minVal;
    const variancePercent = ((variance / maxVal) * 100).toFixed(1);

    const peakIndex = data.consumption.indexOf(maxVal);
    const lowIndex = data.consumption.indexOf(minVal);

    // Display in Demand Analysis section
    const peakElem = document.getElementById('peakTime');
    const lowElem = document.getElementById('lowTime');
    const varElem = document.getElementById('variance');

    if (peakElem && lowElem && varElem) {
        peakElem.textContent = `${data.hours[peakIndex]} (${maxVal.toLocaleString()} kWh)`;
        lowElem.textContent = `${data.hours[lowIndex]} (${minVal.toLocaleString()} kWh)`;
        varElem.textContent = `${variance.toLocaleString()} kWh (${variancePercent}%)`;
    }

    // --- Chart Configuration ---
    const chartConfig = {
        type: 'line',
        data: {
            labels: data.hours,
            datasets: [{
                label: 'Power Consumption (kWh)',
                data: data.consumption,
                borderColor: '#228B22',
                backgroundColor: 'rgba(34, 139, 34, 0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.4,
                pointRadius: 4,
                pointBackgroundColor: '#228B22',
                pointBorderColor: '#fff',
                pointBorderWidth: 2,
                pointHoverRadius: 7,
                pointHoverBackgroundColor: '#228B22',
                pointHoverBorderColor: '#fff',
                pointHoverBorderWidth: 3,
                order: 1,
                animation: { 
                    duration: 2000, 
                    easing: 'easeInOutQuart', 
                    delay: (ctx) => ctx.dataIndex * 100 
                }
            }, {
                label: 'Threshold Limit (400 kWh)',
                data: Array(17).fill(400),
                borderColor: '#dc3545',
                backgroundColor: 'rgba(220, 53, 69, 0.05)',
                borderWidth: 2,
                borderDash: [10, 5],
                fill: false,
                pointRadius: 0,
                tension: 0,
                order: 0,
                animation: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    labels: {
                        font: { size: getResponsiveFont(14), weight: '600' },
                        color: '#333',
                        usePointStyle: true,
                        padding: getResponsiveFont(20),
                        generateLabels: (chart) => {
                            const labels = Chart.defaults.plugins.legend.labels.generateLabels(chart);
                            if (labels[1]) labels[1].lineDash = [10, 5];
                            return labels;
                        }
                    }
                },
                tooltip: {
                    backgroundColor: '#176627',
                    padding: 12,
                    titleFont: { size: getResponsiveFont(14), weight: 'bold' },
                    bodyFont: { size: getResponsiveFont(13) },
                    callbacks: {
                        label: (ctx) => ctx.datasetIndex === 0 ? 
                            [`Consumption: ${ctx.parsed.y.toLocaleString()} kWh`, ctx.parsed.y > 400 ? '⚠️ OVER LIMIT' : '✓ Normal'] :
                            `Threshold: ${ctx.parsed.y.toLocaleString()} kWh`
                    }
                }
            },
            scales: {
                y: {
                    min: 0,
                    max: 500,
                    ticks: {
                        callback: (val) => val.toLocaleString() + ' kWh',
                        font: { size: getResponsiveFont(12) },
                        color: '#666'
                    },
                    grid: {
                        lineWidth: (ctx) => ctx.tick.value === 500 ? 2 : 1,
                        drawBorder: false
                    }
                },
                x: {
                    ticks: { 
                        font: { size: getResponsiveFont(10) }, 
                        color: '#666', 
                        maxRotation: 45,
                        minRotation: 45
                    },
                    grid: { display: false, drawBorder: false }
                }
            },
            interaction: { intersect: false, mode: 'index' }
        }
    };

    // 🔋 Disable animation if on mobile (optimization)
    if (window.innerWidth <= 768) {
        chartConfig.options.animation = false;
        chartConfig.data.datasets.forEach(ds => ds.animation = false);
    }

    // --- Initialize Chart ---
    new Chart(document.getElementById('consumptionChart'), chartConfig);
});
