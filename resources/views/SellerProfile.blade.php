<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/SellerProfileStyles.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Seller Profile
        </h4>

        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">Personal Information</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#pending-order">Pending Order</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#completed-order">Completed Orders</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
                                    class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <div class="button"></div>
                                    <label class="btn btn-outline-primary">
                                        Upload new photo
                                        <input type="file" class="account-settings-fileinput"></label> &nbsp;
                                        <button type="button"><a href="{{ asset('/CreatePost')}}"> Creat Post </a></button>
                                        <button type="button"><a href="{{ url('/SellerHomePage') }}"> Home </a></button>





                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Seller ID</label>
                                    <p type="text" class="form-control mb-1" >1</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Shop Name</label>
                                    <p type="text" class="form-control">BurgerRaja</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">E-mail</label>
                                    <p type="text" class="form-control mb-1" >BurgerRaja@gmail.com</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Address</Address></label>
                                    <p type="text" class="form-control">Mohammadpur, Dhaka-1207</p>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Phone</label>
                                    <p type="Number" class="form-control">123456789</p>
                                </div>
                            </div>
                        </div>


                            <hr class="border-light m-0">
                            <div class="tab-pane fade" id="pending-order">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label class="form-label">Pending Orders</label>
                                        <p type="Number" class="form-control">1</p>
                                    </div>

                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="tab-pane fade" id="completed-order">
                                <div class="card-body">

                                    <div class="form-group">
                                        <label class="form-label">Money Earned</label>
                                        <p type="Number" class="form-control">1120</p>
                                    </div>
                                    <div class="button">
                                        <button type="button"><a href="{{ asset('/CompletedOrders') }}"> Completed Orders Info </a></button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>
