<!DOCTYPE html>
<html>
<?php require_once "head.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php require_once "navbar.php" ?>

        <?php require_once "mainSidebar.php" ?>

        <?php require_once "dashboardContent.php" ?>
        <?php require_once "footer.php" ?>


    </div>
    <!-- ./wrapper -->

    <!-- Bootstrap4 chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.js"></script>
     <!-- chart.js chart examples -->

    <!-- chart colors -->
    <!-- var colors = ['#007bff', '#28a745', '#333333', '#c3e6cb', '#dc3545', '#6c757d'];

    /* large line chart */
    var chLine = document.getElementById("chLine");
    var chartData = {
    labels: ["S", "M", "T", "W", "T", "F", "S"],
    datasets: [{
    data: [589, 445, 483, 503, 689, 692, 634],
    backgroundColor: 'transparent',
    borderColor: colors[0],
    borderWidth: 4,
    pointBackgroundColor: colors[0]
    }
    // {
    // data: [639, 465, 493, 478, 589, 632, 674],
    // backgroundColor: colors[3],
    // borderColor: colors[1],
    // borderWidth: 4,
    // pointBackgroundColor: colors[1]
    // }
    ]
    };
    if (chLine) {
    new Chart(chLine, {
    type: 'line',
    data: chartData,
    options: {
    scales: {
    xAxes: [{
    ticks: {
    beginAtZero: false
    }
    }]
    },
    legend: {
    display: false
    },
    responsive: true
    }
    });
    }

    /* large pie/donut chart */
    var chPie = document.getElementById("chPie");
    if (chPie) {
    new Chart(chPie, {
    type: 'pie',
    data: {
    labels: ['Desktop', 'Phone', 'Tablet', 'Unknown'],
    datasets: [{
    backgroundColor: [colors[1], colors[0], colors[2], colors[5]],
    borderWidth: 0,
    data: [50, 40, 15, 5]
    }]
    },
    plugins: [{
    beforeDraw: function(chart) {
    var width = chart.chart.width,
    height = chart.chart.height,
    ctx = chart.chart.ctx;
    ctx.restore();
    var fontSize = (height / 70).toFixed(2);
    ctx.font = fontSize + "em sans-serif";
    ctx.textBaseline = "middle";
    var text = chart.config.data.datasets[0].data[0] + "%",
    textX = Math.round((width - ctx.measureText(text).width) / 2),
    textY = height / 2;
    ctx.fillText(text, textX, textY);
    ctx.save();
    }
    }],
    options: {
    layout: {
    padding: 0
    },
    legend: {
    display: false
    },
    cutoutPercentage: 80
    }
    });
    }

    /* bar chart */
    var chBar = document.getElementById("chBar");
    if (chBar) {
    new Chart(chBar, {
    type: 'bar',
    data: {
    labels: ["S", "M", "T", "W", "T", "F", "S"],
    datasets: [{
    data: [589, 445, 483, 503, 689, 692, 634],
    backgroundColor: colors[0]
    },
    {
    data: [639, 465, 493, 478, 589, 632, 674],
    backgroundColor: colors[1]
    }
    ]
    },
    options: {
    legend: {
    display: false
    },
    scales: {
    xAxes: [{
    barPercentage: 0.4,
    categoryPercentage: 0.5
    }]
    }
    }
    });
    }

    /* 3 donut charts */
    var donutOptions = {
    cutoutPercentage: 85,
    legend: {
    position: 'bottom',
    padding: 5,
    labels: {
    pointStyle: 'circle',
    usePointStyle: true
    }
    }
    };

    // donut 1
    var chDonutData1 = {
    labels: ['Bootstrap', 'Popper', 'Other'],
    datasets: [{
    backgroundColor: colors.slice(0, 3),
    borderWidth: 0,
    data: [74, 11, 40]
    }]
    };

    var chDonut1 = document.getElementById("chDonut1");
    if (chDonut1) {
    new Chart(chDonut1, {
    type: 'pie',
    data: chDonutData1,
    options: donutOptions
    });
    }

    // donut 2
    var chDonutData2 = {
    labels: ['Wips', 'Pops', 'Dags'],
    datasets: [{
    backgroundColor: colors.slice(0, 3),
    borderWidth: 0,
    data: [40, 45, 30]
    }]
    };
    var chDonut2 = document.getElementById("chDonut2");
    if (chDonut2) {
    new Chart(chDonut2, {
    type: 'pie',
    data: chDonutData2,
    options: donutOptions
    });
    }

    // donut 3
    var chDonutData3 = {
    labels: ['Angular', 'React', 'Other'],
    datasets: [{
    backgroundColor: colors.slice(0, 3),
    borderWidth: 0,
    data: [21, 45, 55, 33]
    }]
    };
    var chDonut3 = document.getElementById("chDonut3");
    if (chDonut3) {
    new Chart(chDonut3, {
    type: 'pie',
    data: chDonutData3,
    options: donutOptions
    });
    }

    /* 3 line charts */
    var lineOptions = {
    legend: {
    display: false
    },
    tooltips: {
    interest: false,
    bodyFontSize: 11,
    titleFontSize: 11
    },
    scales: {
    xAxes: [{
    ticks: {
    display: false
    },
    gridLines: {
    display: false,
    drawBorder: false
    }
    }],
    yAxes: [{
    display: false
    }]
    },
    layout: {
    padding: {
    left: 6,
    right: 6,
    top: 4,
    bottom: 6
    }
    }
    };

    var chLine1 = document.getElementById("chLine1");
    if (chLine1) {
    new Chart(chLine1, {
    type: 'line',
    data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
    datasets: [{
    backgroundColor: '#ffffff',
    borderColor: '#ffffff',
    data: [10, 11, 4, 11, 4],
    fill: false
    }]
    },
    options: lineOptions
    });
    }
    var chLine2 = document.getElementById("chLine2");
    if (chLine2) {
    new Chart(chLine2, {
    type: 'line',
    data: {
    labels: ['A', 'B', 'C', 'D', 'E'],
    datasets: [{
    backgroundColor: '#ffffff',
    borderColor: '#ffffff',
    data: [4, 5, 7, 13, 12],
    fill: false
    }]
    },
    options: lineOptions
    });
    }

    var chLine3 = document.getElementById("chLine3");
    if (chLine3) {
    new Chart(chLine3, {
    type: 'line',
    data: {
    labels: ['Pos', 'Neg', 'Nue', 'Other', 'Unknown'],
    datasets: [{
    backgroundColor: '#ffffff',
    borderColor: '#ffffff',
    data: [13, 15, 10, 9, 14],
    fill: false
    }]
    },
    options: lineOptions
    });
    } -->
    </script>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <!-- <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.u  .js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
</body>

</html>