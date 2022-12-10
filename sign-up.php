<?php include_once "assets/includes/header.php" ?>


    <main>


        <!-- ===================================================cart table-->

        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6 mx-auto">
                    <h2 class="results-heading-text "><i class="bi bi-stars me-2 f-28"></i>Sign-Up</h2>
                    <p>Enter details to log-in or sign-up now!</p>
                  <form action="">
                    <div class="log-in-form mb-5">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                          </div>
                          
                          <div class="d-flex justify-content-center">
                            <button type="submit" class="btn-log mx-auto">Sign-Up</button>
                          </div>
                          <p class="mt-4 text-center">Already have a Account? <a href="log-in.php" class="sign-up-tag">Sign-In</a> Now!</p>
                    </div>
                  </form>
                   
                </div>
               
            </div>

        </div>



    </main>


    <?php include_once "assets/includes/footer.php" ?>
