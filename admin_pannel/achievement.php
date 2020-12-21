<!DOCTYPE html>
<html>
<?php require_once "head.php" ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <?php require_once "navbar.php" ?>

        <?php require_once "mainSidebar.php" ?>

        <?php require_once "achievementContent.php" ?>
        <?php require_once "footer.php" ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!--For Edit pop up form-->
    <script type="text/javascript" src="//www.klaviyo.com/media/js/public/klaviyo_subscribe.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        //Add Achievement
        // $(document).ready(function() {
        //     $('#add_details').on('submit', function(event) {
        //         event.preventDefault();
        //         $.ajax({
        //             url: "achievementAdd.php",
        //             method: "POST",
        //             data: $(this).serialize(),
        //             dataType: "json",
        //             beforeSend: function() {
        //                 $('#add').attr('disabled', 'disabled');
        //             },
        //             success: function(data) {
        //                 $('#add').attr('disabled', false);
        //                 alert('hi');
        //                 if (data.name) {
        //                     var html = '<tr>';
        //                     html += '<td>' + data.steps + '</td>';
        //                     html += '<td>' + data.name + '</td></tr>';
        //                     // html += '<td>' + data.img + '</td></tr>';
        //                     $('#table_data').prepend(html);
        //                     $('#add_details')[0].reset();
        //                 }
        //             }
        //         })
        //     });

        // });
    </script>
    <script>
        // remove Achievement
        function removetrAchievement(id) {
            //alert(id);
            c = document.getElementById(id).children;
            name = c[1].innerText;
            document.getElementById(id).remove();
            $.post('achievementRemove.php', {
                    name: name,
                },
                function(data, status) {
                    // alert(data);
                }
            );
        }

        function remove($id) {
            $("#" + $id).remove();
            id = $id;
            $.post("userRemove.php", {
                    id: id,
                },
                function(data, status) {
                    //alert(data);
                });
        }

        function NGOUpdate(id) {
            var c = document.getElementById(id).children;
            var i;
            var obj = {};
            //Save value in obj
            for (i = 0; i < c.length; i = i + 2) {
                key = c[i].innerText;
                value = c[i + 1].value;
                if (value == '') {
                    value = c[i + 1].placeholder;
                }
                obj[key] = value;
            }
            $.post('NGOUpdate.php',
                obj,
                function(data, status) {
                    alert(data);
                });
        }

        function NGOAdd(id) {
            //For testing
            //alert('testing');
            var c = document.getElementById(id).children;
            var i;
            var obj = {};
            //Save value in obj
            for (i = 0; i < c.length; i = i + 2) {
                //alert(c.length);
                key = c[i].innerText;
                value = c[i + 1].value;
                if (value == '') {
                    value = c[i + 1].placeholder;
                }
                obj[key] = value;
                //testing
                // alert(i + ' ' + key + obj[key]);
            }
            // alert('testing');
            //For testing
            // alert(obj['id']);
            //    for (const property in obj){
            //         alert(property + obj[property]);
            //    }
            $.post('NGOAdd.php',
                obj,
                function(data, status) {
                    // alert(data);
                    //Hide Form again after adding
                    document.getElementById('hideAddForm').style.display = 'none';
                });
        }
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
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
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