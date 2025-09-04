{{-- resources/views/mcv_user/esg.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ESG Dashboard</title>

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/mcv_admin/ESG.css') }}">

  <!-- Chart.js + DataLabels -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>
</head>
<body>
  <div class="dashboard">

   

    <!-- Header -->
    <div class="header">
      <div class="card-T">21.53 <span><b>Average of Total ESG Risk score</b></span></div>
      <div class="card-T">5.74 <span><b>Avg Environment Risk Score</b></span></div>
      <div class="card-T">9.07 <span><b>Average of Social Risk Score</b></span></div>
      <div class="card-T">6.73 <span><b>Avg Governance Risk Score</b></span></div>
      <div class="img-card"><img src="{{ asset('images/ESG.png') }}" alt="ESG"></div>
    </div>

    <!-- Charts Section -->
    <div class="charts">
      <!-- ESG Risk Level Distribution -->
      <div class="chart chart-flex">
        <b>ESG Risk level Distribution</b>
        <div class="risk-wrapper">
          <canvas id="riskLevelChart"></canvas>
          <div id="riskLegend"></div>
        </div>
      </div>

      <!-- Controversy Pie -->
      <div class="chart">
        <b>Avg Risk Score by Controversy Level</b>
        <div class="controversy-wrapper">
          <canvas id="controversyChart"></canvas>
          <div id="controversyLegend"></div>
        </div>
      </div>

      <!-- Employee Count Line -->
      <div class="chart">
        <b>Avg Risk Score by Employee Count</b>
        <canvas id="employeeChart"></canvas>
      </div>
    </div>

    <!-- Middle Section  -->
    <div class="middle-grid">
      <!-- Sector + Filters -->
      <div class="sector-block">
        <div class="sector">
          <b>Average of Total ESG Risk score by Sector</b>
          <canvas id="sectorChart"></canvas>
        </div>
        <div class="filters">
          <select>
            <option disabled selected><b>Industry</b></option>
            <option>Option 1</option>
            <option>Option 2</option>
          </select>
          <select>
            <option disabled selected><b>Sector</b></option>
            <option>Option 1</option>
            <option>Option 2</option>
          </select>
        </div>
      </div>

      <!-- Earth -->
      <div class="earth"><img src="{{ asset('images/earth.png') }}" alt="Earth"></div>

      <!-- Industry + ESG1 stacked -->
      <div class="industry-block">
        <div class="industry">
          <b>Average of Total ESG Risk score by Industry</b>
          <canvas id="industryChart"></canvas>
        </div>
        <div class="esg1"><img src="{{ asset('images/ESG1.png') }}" alt="ESG risk analysis"></div>
      </div>
    </div>

  </div>



  <!-- Scripts -->
  <script src="{{ asset('js/mcv_admin/script.js') }}"></script>
</body>
</html>
