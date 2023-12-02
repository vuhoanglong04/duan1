<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>account settings - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&amp;family=Lexend:wght@300;400;500;600;700;800;900&amp;family=Lobster&amp;display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            background: #f5f5f5;
            margin-top: 20px;
            font-family: 'DM Sans', sans-serif;
        }

        .ui-w-80 {
            width: 80px !important;
            height: auto;
        }

        .btn-default {
            border-color: rgba(24, 28, 33, 0.1);
            background: rgba(0, 0, 0, 0);
            color: #4E5155;
        }

        label.btn {
            margin-bottom: 0;
        }

        .btn-outline-primary {
            border-color: #26B4FF;
            background: transparent;
            color: #26B4FF;
        }

        .btn {
            cursor: pointer;
        }

        .text-light {
            color: #babbbc !important;
        }

        .btn-facebook {
            border-color: rgba(0, 0, 0, 0);
            background: #3B5998;
            color: #fff;
        }

        .btn-instagram {
            border-color: rgba(0, 0, 0, 0);
            background: #000;
            color: #fff;
        }

        .card {
            background-clip: padding-box;
            box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
        }

        .row-bordered {
            overflow: hidden;
        }

        .account-settings-fileinput {
            position: absolute;
            visibility: hidden;
            width: 1px;
            height: 1px;
            opacity: 0;
        }

        .account-settings-links .list-group-item.active {
            font-weight: bold !important;
        }

        html:not(.dark-style) .account-settings-links .list-group-item.active {
            background: transparent !important;
        }

        .account-settings-multiselect~.select2-container {
            width: 100% !important;
        }

        .light-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .light-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
        }

        .material-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .material-style .account-settings-links .list-group-item.active {
            color: #4e5155 !important;
        }

        .dark-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(255, 255, 255, 0.03) !important;
        }

        .dark-style .account-settings-links .list-group-item.active {
            color: #fff !important;
        }

        .light-style .account-settings-links .list-group-item.active {
            color: #4E5155 !important;
        }

        .light-style .account-settings-links .list-group-item {
            padding: 0.85rem 1.5rem;
            border-color: rgba(24, 28, 33, 0.03) !important;
        }

        .text-right .saveChanges {
            background-color: #017D03;
            color: #ffffff;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;
        }

        .text-left .saveChanges {
            background-color: #017D03;
            color: #ffffff;
            font-family: 'DM Sans', sans-serif;
            font-size: 14px;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="container light-style mb-5 flex-grow-1 container-p-y">
            <h4 class="font-weight-bold py-3 mb-4">
                Account settings
            </h4>
            <div class="card overflow-hidden">
                <div class="row no-gutters row-bordered row-border-light">
                    <div class="col-md-3 pt-0">
                        <div class="list-group list-group-flush account-settings-links">
                            <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">General</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Change password</a>
                            <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Admins</a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content">
                            <div class="tab-pane fade active show" id="account-general">
                                <div class="card-body media align-items-center">
                                    <img height="5rem" width="5rem" style="object-fit: cover;" src="./assets/img/user/<?= $username[0]['image']; ?>" alt="image" class="d-block ui-w-80">
                                    <div class="media-body ml-4">
                                        <label class="btn btn-success">
                                            Upload new photo
                                            <input type="file" name="update_image" class="account-settings-fileinput">
                                        </label> &nbsp;
                                        <label class="btn btn-outline-primary">
                                            Save
                                            <input type="submit" name="finish_update_image" class="account-settings-fileinput btn btn-success">
                                        </label> &nbsp;

                                    </div>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Username(<strong>read only</strong>)</label>
                                        <input type="text" readonly name="general_username" class="form-control mb-1" value="<?= $username[0]['username']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Full Name</label>
                                        <input type="text" name="general_full_name" class="form-control" value="<?= $username[0]['full_name']; ?>">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Email</label>
                                        <input type="text" name="general_email" class="form-control" value="<?= $username[0]['email']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" name="general_address" value="<?= $username[0]['address']; ?>">
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label">Telephone</label>
                                        <input type="text" class="form-control" name="general_telephone" value="<?= $username[0]['telephone']; ?>">
                                    </div>
                                    <button type="submit" name="update_general" class="btn btn-success saveChanges">Save changes</button>&nbsp;
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-change-password">
                                <div class="card-body pb-2">
                                    <div class="form-group">
                                        <label class="form-label">Current password</label>
                                        <input type="password" name="current_password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New password</label>
                                        <input type="password" name="new_password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Repeat new password</label>
                                        <input type="password" name="confirm_new_password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="change_pass" class="btn btn-success saveChanges">Change Password</button>&nbsp;
                                    </div>
                                </div>

                            </div>


                            <div class="tab-pane fade" id="account-connections">
                                <div class="card-body">
                                    <button type="button" class="btn btn-twitter">Connect to <strong>Twitter</strong></button>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <h5 class="mb-2">
                                        <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i class="ion ion-md-close"></i> Remove</a>
                                        <i class="ion ion-logo-google text-google"></i>
                                        You are connected to Google:
                                    </h5>
                                    <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1e70737f66697b72725e737f7772307d7173">[email&#160;protected]</a>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <button type="button" class="btn btn-facebook">Connect to <strong>Facebook</strong></button>
                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body">
                                    <button type="button" class="btn btn-instagram">Connect to <strong>Instagram</strong></button>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="account-notifications">
                                <div class="card-body pb-2">
                                    <h6 class="mb-4">Control</h6>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <div class="text-left mt-3">
                                                <a class="btn btn-info saveChanges" href="loginAdmin.php">Admin Sign In</a>
                                                <button type="submit" name="logout" class="btn btn-primary saveChanges">Logout</button>&nbsp;
                                            </div>
                                        </label>
                                    </div>

                                </div>
                                <hr class="border-light m-0">
                                <div class="card-body pb-2">
                                    <h6 class="mb-4">Application</h6>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input" checked>
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">News and announcements</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input">
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Weekly product updates</span>
                                        </label>
                                    </div>
                                    <div class="form-group">
                                        <label class="switcher">
                                            <input type="checkbox" class="switcher-input" checked>
                                            <span class="switcher-indicator">
                                                <span class="switcher-yes"></span>
                                                <span class="switcher-no"></span>
                                            </span>
                                            <span class="switcher-label">Weekly blog digest</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-right mt-3">



            </div>
        </div>
    </form>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>

</body>

</html>