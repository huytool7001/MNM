/*
 * Author: Abdullah A Almsaeed
 * Date: 4 Jan 2014
 * Description:
 *      This is a demo file used only for the main dashboard (index.html)
 **/

/* global moment:false, Chart:false, Sparkline:false */

$(function () {
  "use strict";

  // Make the dashboard widgets sortable Using jquery UI
  $(".connectedSortable").sortable({
    placeholder: "sort-highlight",
    connectWith: ".connectedSortable",
    handle: ".card-header, .nav-tabs",
    forcePlaceholderSize: true,
    zIndex: 999999,
  });
  $(".connectedSortable .card-header").css("cursor", "move");

  // jQuery UI sortable for the todo list
  $(".todo-list").sortable({
    placeholder: "sort-highlight",
    handle: ".handle",
    forcePlaceholderSize: true,
    zIndex: 999999,
  });

  // bootstrap WYSIHTML5 - text editor
  $(".textarea").summernote();

  $(".daterange").daterangepicker(
    {
      ranges: {
        Today: [moment(), moment()],
        Yesterday: [moment().subtract(1, "days"), moment().subtract(1, "days")],
        "Last 7 Days": [moment().subtract(6, "days"), moment()],
        "Last 30 Days": [moment().subtract(29, "days"), moment()],
        "This Month": [moment().startOf("month"), moment().endOf("month")],
        "Last Month": [
          moment().subtract(1, "month").startOf("month"),
          moment().subtract(1, "month").endOf("month"),
        ],
      },
      startDate: moment().subtract(29, "days"),
      endDate: moment(),
    },
    function (start, end) {
      // eslint-disable-next-line no-alert
      alert(
        "You chose: " +
          start.format("MMMM D, YYYY") +
          " - " +
          end.format("MMMM D, YYYY")
      );
    }
  );

  /* jQueryKnob */
  $(".knob").knob();

  // jvectormap data
  var visitorsData = {
    US: 398, // USA
    SA: 400, // Saudi Arabia
    CA: 1000, // Canada
    DE: 500, // Germany
    FR: 760, // France
    CN: 300, // China
    AU: 700, // Australia
    BR: 600, // Brazil
    IN: 800, // India
    GB: 320, // Great Britain
    RU: 3000, // Russia
  };
  // World map by jvectormap
  $("#world-map").vectorMap({
    map: "vietnam",
    backgroundColor: "transparent",
    regionStyle: {
      initial: {
        fill: "rgba(255, 255, 255, 0.7)",
        "fill-opacity": 1,
        stroke: "rgba(0,0,0,.2)",
        "stroke-width": 1,
        "stroke-opacity": 1,
      },
    },
    series: {
      regions: [
        {
          values: visitorsData,
          scale: ["#ffffff", "#0154ad"],
          normalizeFunction: "polynomial",
        },
      ],
    },
    onRegionLabelShow: function (e, el, code) {
      if (typeof visitorsData[code] !== "undefined") {
        el.html(el.html() + ": " + visitorsData[code] + " new visitors");
      }
    },
  });

  // The Calender
  $("#calendar").datetimepicker({
    format: "L",
    inline: true,
  });

  // SLIMSCROLL FOR CHAT WIDGET
  $("#chat-box").overlayScrollbars({
    height: "250px",
  });

  /* Chart.js Charts */
  // Sales chart
  var salesChartCanvas = document
    .getElementById("revenue-chart-canvas")
    .getContext("2d");
  // $('#revenue-chart').get(0).getContext('2d');
  var previousSixMonths = (function () {
    let n = 0;
    let arRet = [];

    for (; n < 6; n++)
      arRet.push(moment().subtract(n, "months").format("MMMM"));
    arRet = arRet.reverse();
    return arRet;
  })();

  var salesData = function () {
    let labels = [];
    let datasets = [];
    $.ajax({
      url: "/admin/pages/chart/index.php",
      method: "GET",
      data: {
        chart: "sales",
      },
      dataType: "json",
      success: function (data) {
        for (let row of data) {
          labels.push(row["m"] + "/" + row["y"]);
          datasets.push(row["total"] ? row["total"] : 0);
        }
        salesGraphChart.update();
      },
    });
    return {
      labels,
      datasets,
    };
  };
  var ordersData = function () {
    let labels = [];
    let newOrders = [];
    let progressOrders = [];
    let finishedOrders = [];
    $.ajax({
      url: "/admin/pages/chart/index.php",
      method: "GET",
      data: {
        chart: "orders",
      },
      dataType: "json",
      success: function (data) {
        for (let row of data) {
          labels.push(row["m"] + "/" + row["y"]);
          newOrders.push(row["new"] ? row["new"] : 0);
          progressOrders.push(row["inprogress"] ? row["inprogress"] : 0);
          finishedOrders.push(row["finish"] ? row["finish"] : 0);
        }
        salesChart.update();
      },
    });
    return {
      labels,
      newOrders,
      progressOrders,
      finishedOrders,
    };
  };
  var productsData = function () {
    let labels = [];
    let datasets = [];
    $.ajax({
      url: "/admin/pages/chart/index.php",
      method: "GET",
      data: {
        chart: "products",
      },
      dataType: "json",
      success: function (data) {
        for (let row of data) {
          labels.push(row["nameCategoryProduct"]);
          datasets.push(row["percent"]);
        }
        pieChart.update();
      },
    });
    return {
      labels,
      datasets,
    };
  };
  var salesChartData = {
    labels: salesData().labels,
    datasets: [
      {
        label: "Mới",
        backgroundColor: "#007bff",
        borderColor: "#007bff",
        pointRadius: false,
        pointColor: "#007bff",
        pointStrokeColor: "#007bff",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "#007bff",
        data: ordersData().newOrders,
      },
      {
        label: "Đang giao hàng",
        backgroundColor: "#ffc107",
        borderColor: "#ffc107",
        pointRadius: false,
        pointColor: "#ffc107",
        pointStrokeColor: "#ffc107",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "#ffc107",
        data: ordersData().progressOrders,
      },
      {
        label: "Đã nhận hàng",
        backgroundColor: "#28a745",
        borderColor: "#28a745",
        pointRadius: false,
        pointColor: "#28a745",
        pointStrokeColor: "#28a745",
        pointHighlightFill: "#fff",
        pointHighlightStroke: "#28a745",
        data: ordersData().finishedOrders,
      },
    ],
  };

  var salesChartOptions = {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      xAxes: [
        {
          stacked: true,
        },
      ],
      yAxes: [
        {
          ticks: {
            stepSize: 1,
          },
          stacked: true,
        },
      ],
    },
  };

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart(salesChartCanvas, {
    // lgtm[js/unused-local-variable]
    type: "bar",
    data: salesChartData,
    options: salesChartOptions,
  });

  // Donut Chart
  var pieChartCanvas = $("#sales-chart-canvas").get(0).getContext("2d");
  var pieData = {
    labels: productsData().labels,
    datasets: [
      {
        data: productsData().datasets,
        backgroundColor: [
          "#007bff",
          "#f012be",
          "#f39c12",
          "#28a745",
          "#d81b60",
          "#adb5bd",
        ],
      },
    ],
  };
  var pieOptions = {
    legend: {
      display: false,
    },
    tooltips: {
      callbacks: {
        label: function (tooltipItem, data) {
          return data.labels[tooltipItem.index] + ": " + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + "%";
        },
      },
    },
    maintainAspectRatio: false,
    responsive: true,
  };
  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  // eslint-disable-next-line no-unused-vars
  var pieChart = new Chart(pieChartCanvas, {
    // lgtm[js/unused-local-variable]
    type: "doughnut",
    data: pieData,
    options: pieOptions,
  });

  // Sales graph chart
  var salesGraphChartCanvas = $("#line-chart").get(0).getContext("2d");
  // $('#revenue-chart').get(0).getContext('2d');

  var salesGraphChartData = {
    labels: salesData().labels,
    datasets: [
      {
        label: "Doanh thu",
        fill: false,
        borderWidth: 2,
        lineTension: 0,
        spanGaps: true,
        borderColor: "#efefef",
        pointRadius: 3,
        pointHoverRadius: 7,
        pointColor: "#efefef",
        pointBackgroundColor: "#efefef",
        data: salesData().datasets,
      },
    ],
  };

  var salesGraphChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false,
    },
    scales: {
      xAxes: [
        {
          ticks: {
            fontColor: "#efefef",
          },
          gridLines: {
            display: false,
            color: "#efefef",
            drawBorder: false,
          },
        },
      ],
      yAxes: [
        {
          ticks: {
            stepSize: 1000000,
            fontColor: "#efefef",
          },
          gridLines: {
            display: true,
            color: "#efefef",
            drawBorder: false,
          },
        },
      ],
    },
  };

  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesGraphChart = new Chart(salesGraphChartCanvas, {
    // lgtm[js/unused-local-variable]
    type: "line",
    data: salesGraphChartData,
    options: salesGraphChartOptions,
  });
});
