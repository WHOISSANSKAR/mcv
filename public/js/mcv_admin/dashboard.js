document.addEventListener("DOMContentLoaded", function () {
    // ===== PIE CHART =====
    const ctx = document.getElementById("pieChart").getContext("2d");
    new Chart(ctx, {
        type: "pie",
        data: {
            labels: ["Correct", "Incorrect", "Unidentified"],
            datasets: [{
                data: [64, 20, 16], // Example data
                backgroundColor: ["#5e7ca8", "#778dc0", "#8e99fb"],
                borderWidth: 1,
                borderColor: "#fff" // contrast border
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: "bottom",
                    align: "center",   // force single line
                    labels: {
                        color: "#ffffff", // legend text color
                        boxWidth: 14,     // smaller box
                        padding: 18,      // spacing
                        usePointStyle: true, // round markers
                        font: {
                            size: 12      // smaller font to prevent wrapping
                        }
                    }
                }
            }
        }
    });

   // ===== FULLCALENDAR =====
const calendarEl = document.getElementById("calendar");
const today = new Date().toISOString().split("T")[0]; // Today's date

const calendar = new FullCalendar.Calendar(calendarEl, {
  initialView: "dayGridMonth",
  selectable: true,
  height: "auto",
  contentHeight: "auto",
  expandRows: true,
  dayMaxEventRows: true,

  // Remove "today" button
  headerToolbar: {
  left: "title",   // month + year on the left
  center: "",      // nothing in center
  right: "prev,next" // arrows on the right
},


  events: [
    {
      start: today,
      display: "background",
      backgroundColor: "#808080"
    }
  ]
});

calendar.render();

});
