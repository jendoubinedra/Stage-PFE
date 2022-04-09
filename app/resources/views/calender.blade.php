<!Doctype html>
<head>
<link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body>
    <form action="route{{'store'}} " method="post">
        @csrf
        <input type="text" name="titre" placeholder="entre titre">
        <input type="text" name="couleur" placeholder="entre couleur">
        <input type="text" name="star-date" placeholder="entre titre">
        <input type="text" name="end-date" placeholder="entre titre">
        <div class="model-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" data-target="#showcalendar"> close</button>
         <button type="button" class="btn btn-primary" > save</button>

    </div>
    </form>
    
    <div>
        <div class="container"> 
            <div class="card-header text-rigth">
               enent calender
            </div>
            <div class="card-body">
                <h5 class="card-titre">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#showcalendar"> show calendar</button>
                    <button type="button" class="btn btn-light" data-toggle="modal" data-target="#showcalendar"> add calendar</button>

                </h5>
               
            </div>


        </div>
    </div>
    <script>
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- form repeater js -->
        <script src="assets/libs/jquery.repeater/jquery.repeater.min.js"></script>

        <script src="assets/js/pages/form-repeater.int.js"></script>

        <script src="assets/js/app.js"></script>
        <script src="assets/js/ajax.js"></script>

    </script>
</body>
</html>