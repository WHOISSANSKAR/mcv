<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My ComplianceView Dashboard - Activity</title>

  {{-- Fonts & Icons --}}
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

  {{-- CSS --}}
  <link rel="stylesheet" href="{{ asset('css/mcv_admin/style.css') }}" />
</head>
<body>
  <div class="content-wrapper">
    {{-- Navbar --}}
    @include('mcv_admin.partials.navbar')

    <main>
      <header>
        <div>
          <h2>Activity Log</h2>
          <p>See all recent user activities here!</p>
        </div>
      </header>

      <div class="table-header">
        <div class="search-input-group">
          <input type="text" class="search-input" data-col="0" placeholder="🔍︎ Search Dept">
          <input type="text" class="search-input" data-col="1" placeholder="🔍︎ Search Email">
          <input type="text" class="search-input" data-col="2" placeholder="🔍︎ Search Date">
        </div>
      </div>

      <div class="table-wrapper">
        <table id="Table" class="data-table">
          <thead>
            <tr>
              <th>Department <i class="fa-solid fa-sort"></i></th>
              <th>E-mail <i class="fa-solid fa-sort"></i></th>
              <th>Date <i class="fa-solid fa-sort"></i></th>
              <th>Time <i class="fa-solid fa-sort"></i></th>
              <th>Action <i class="fa-solid fa-sort"></i></th>
            </tr>
          </thead>
          <tbody id="activity-table-body">
            {{-- Populated dynamically --}}
          </tbody>
        </table>
      </div>

      <div id="pagination"></div>
    </main>
  </div>

  {{-- Footer --}}
  @include('mcv_admin.partials.footer')

  {{-- JS --}}
  <script>
  // 📌 Fetch activity logs and initialize table features
  async function fetchActivityLogs() {
    try {
      const response = await fetch('/activity-logs'); // ✅ Adjust path if needed
      const result = await response.json();

      if (result.success) {
        const tbody = document.getElementById('activity-table-body');
        tbody.innerHTML = '';

        // ✅ Populate table rows
        result.data.forEach(item => {
          const row = document.createElement('tr');
          row.innerHTML = `
            <td>${item.acty_department}</td>
            <td>${item.acty_email}</td>
            <td>${item.acty_date}</td>
            <td>${item.acty_time}</td>
            <td>${item.acty_action}</td>
          `;
          tbody.appendChild(row);
        });

        // ✅ Initialize table features once rows are inserted
        initTableFeatures();
      } else {
        console.error('Failed to fetch activity logs');
      }
    } catch (error) {
      console.error('Error fetching activity logs:', error);
    }
  }

  // 📌 Initialize sorting, searching, and pagination
  function initTableFeatures() {
    const table = document.getElementById("Table");
    const tbody = table.querySelector("tbody");
    const pagination = document.getElementById("pagination");
    const searchInputs = document.querySelectorAll(".search-input");

    let currentPage = 1;
    const rowsPerPage = 7;

    // 🔹 Store all original rows for reset on clearing search
    const allRows = Array.from(tbody.querySelectorAll("tr"));
    let filteredRows = [...allRows];

    // 🔸 Render table rows for the current page
    function renderTable() {
      tbody.innerHTML = "";
      const start = (currentPage - 1) * rowsPerPage;
      const end = start + rowsPerPage;
      filteredRows.slice(start, end).forEach(row => tbody.appendChild(row));
      renderPagination();
    }

    // 🔸 Render pagination buttons
    function renderPagination() {
      pagination.innerHTML = "";
      const pageCount = Math.ceil(filteredRows.length / rowsPerPage);
      for (let i = 1; i <= pageCount; i++) {
        const btn = document.createElement("button");
        btn.innerText = i;
        if (i === currentPage) btn.classList.add("active");
        btn.addEventListener("click", () => {
          currentPage = i;
          renderTable();
        });
        pagination.appendChild(btn);
      }
    }

    // 🔸 Sorting on column headers
    table.querySelectorAll("thead th").forEach((th, index) => {
      th.addEventListener("click", () => {
        let sorted = [...filteredRows].sort((a, b) => {
          const valA = a.children[index].innerText.toLowerCase();
          const valB = b.children[index].innerText.toLowerCase();
          return valA.localeCompare(valB, "en", { numeric: true });
        });

        if (th.classList.contains("asc")) {
          sorted.reverse();
          th.classList.remove("asc");
          th.classList.add("desc");
        } else {
          th.classList.remove("desc");
          th.classList.add("asc");
        }

        filteredRows = sorted;
        currentPage = 1;
        renderTable();
      });
    });

    // 🔸 Search filtering with reset when cleared
    searchInputs.forEach(input => {
      input.addEventListener("input", () => {
        const filters = {};
        searchInputs.forEach(inp => {
          if (inp.value.trim() !== "") {
            filters[inp.dataset.col] = inp.value.toLowerCase();
          }
        });

        // ✅ Always filter from original rows
        filteredRows = allRows.filter(row =>
          Object.keys(filters).every(colIndex =>
            row.children[colIndex].innerText.toLowerCase().includes(filters[colIndex])
          )
        );

        // ✅ If no filters, reset to all rows
        if (Object.keys(filters).length === 0) {
          filteredRows = [...allRows];
        }

        currentPage = 1;
        renderTable();
      });
    });

    renderTable();
  }

  // 📌 Run on page load
  window.addEventListener('DOMContentLoaded', fetchActivityLogs);
</script>


</body>
</html>
