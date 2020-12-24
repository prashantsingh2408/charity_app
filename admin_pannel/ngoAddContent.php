<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">NGOs & Events</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">

                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.userTable -->
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Fill Detail</h3>
                </div>
                <form id='NGOAddForm' method='POST' action='NGOAddSave.php' enctype="multipart/form-data">
                    <div class="card-body">


                        <label>NGO</label>
                        <!-- name_nogs -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Name NGOs</span>
                            </div>
                            <input name='name_ngos' type="text" class="form-control" placeholder="NGO Name" required>
                        </div>
                        <!--Partner -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Partner</span>
                            </div>
                            <input name='partner' type="text" class="form-control" placeholder="Partner" required>
                        </div>
                        <!-- current_amount -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Current amount</span>
                            </div>
                            <input name='current_amount' type="number" class="form-control" pattern="[0-9]+" placeholder="Current amount" required>
                        </div>
                        <!-- current_amount -->

                        <!-- total_goal -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Total Goal</span>
                            </div>
                            <input name='total_goal' type="number" class="form-control" placeholder="Total Goal" pattern="[0-9]+" required>
                        </div>

                        <!-- description -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Description</span>
                            </div>
                            <input name='description' type="text" class="form-control" placeholder="Description" required>
                        </div>
                        <!-- description -->


                        <!-- about -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">About</span>
                            </div>
                            <input name='about' type="text" class="form-control" placeholder="About" required>
                        </div>

                        <label> Event </label>

                        <!-- events-->
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Event</span>
                            </div>
                            <input name='events' type="text" class="form-control" placeholder="Event" required>
                        </div>
                        <!-- /events -->

                        <!-- no_of_workout -->
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">No of workout</span>
                            </div>
                            <input name='no_of_workout' type="number" class="form-control" placeholder="No of workout" pattern='[0-9]+' required>
                        </div>
                        <!-- no_of_workout -->




                        <!-- amount_raised-->
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Amount raised</span>
                            </div>
                            <input name='amount_raised' type="number" class="form-control" placeholder="amount_raised" pattern='[0-9]+' required>
                        </div>
                        <!-- /amount_raised -->

                        <!-- on_of_days-->
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">No of Days</span>
                            </div>
                            <input name='on_of_days' type="number" class="form-control" placeholder="on_of_days" pattern='[0-9]+' required>
                        </div>
                        <!-- /on_of_days -->

                        <!-- timespent-->
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Time Spent</span>
                            </div>
                            <input name='timespent' type="number" class="form-control" placeholder="Time Spent" pattern='[0-9]+' required>
                        </div>
                        <!-- /timespent -->

                        <!-- change_makers-->
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">No of Change Makers</span>
                            </div>
                            <input name='change_makers' type="text" class="form-control" placeholder="Change Makers" required>
                        </div>
                        <!-- /change_makers -->

                        <!-- ngo_unique_var-->
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">NOG Unique Variable</span>
                            </div>
                            <input name='ngo_unique_var' type="text" class="form-control" placeholder="Event Unique Variable" required>
                        </div>
                        <!-- /ngo_unique_var -->

                        <!-- event_members-->
                        <div class="input-group mb-3 ">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Event Members</span>
                            </div>
                            <input name='event_members' type="number" class="form-control" placeholder="Event Memebers" pattern='[0-9]+' required>
                        </div>
                        <!-- /event_members -->

                        <!-- Upload Pic -->
                        <!-- TODO: Placeholder Img need to implement here -->
                        <div class="form-group mb-3">
                            <label for="exampleFormControlFile1">Photo</label>
                            <input type="file" name="img" class="form-control" required/>
                            <!-- <input type="submit" name="submit" value="Upload" class="form-control-file" id="exampleFormControlFile1"> -->
                        </div>

                        <div class="page-content header-clear-medium">

                            <button form='NGOAddForm' class="btn btn-primary"> Add </button>
                        </div>
                </form>
                <!-- /.card-body -->
            </div>
        </div><!-- /.container-fluid -->
    </section>
</div>
<!-- /.content-wrapper -->