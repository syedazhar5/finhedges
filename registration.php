<?php include('templates/header.php'); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 mt-5">
                <form action="process.php" method="post">
                    <div class="text-center">
                        <h1 class="h3 font-weight-normal mt-5">Connect With Us</h1>
                    </div>

                    <div class="form-label-group">
                        <input type="name" id="inputName" class="form-control" name="name" placeholder="Name" required="" autofocus="">
                        <label for="inputEmail">Name</label>
                    </div>

                    <div class="form-label-group">
                        <input type="number" id="inputNumber" class="form-control" name="contact" placeholder="Contact No." required="" autofocus="">
                        <label for="inputEmail">Contact No.</label>
                    </div>

                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email address" required="" autofocus="">
                        <label for="inputEmail">Email address</label>
                    </div>

                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="">
                        <label for="inputPassword">Password</label>
                    </div>
                    <button class="btn btn-lg btn-success btn-block mb-5" type="submit">Register</button>
                </form>
            </div>
            <div class="col-6 mt-5">
                <img src="images\welcome.jfif" height= "360" width="360" alt="logo mt-5">
            </div>
        </div>
    </div>
</body>

</html>
<?php include('templates/footer.php'); ?>