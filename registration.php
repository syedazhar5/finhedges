<?php include('templates/header.php'); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <form class="form-registration">
                    <div class="text-center">
                        <h1 class="h3 font-weight-normal mb-3 mt-5">Connect With Us</h1>
                    </div>

                    <div class="form-label-group">
                        <input type="name" id="inputEmail" class="form-control" placeholder="Name" required="" autofocus="">
                        <label for="inputEmail">Name</label>
                    </div>

                    <div class="form-label-group">
                        <input type="number" id="inputEmail" class="form-control" placeholder="Contact Number" required="" autofocus="">
                        <label for="inputEmail">Contact No.</label>
                    </div>

                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
                        <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                        <label for="inputPassword">Password</label>
                    </div>
                    <button class="btn btn-lg btn-success btn-block mb-5" type="submit">Register</button>
                </form>
            </div>
            <div class="col-6 mt-5" >
                <img src="images\welcome.jfif" alt="logo" height="390" width="390">
            </div>
        </div>
    </div>



</body>

</html>




<?php include('templates/footer.php'); ?>