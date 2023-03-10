
 <!-- Sign In Start -->
 <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>CAFE KASIR</h3>
                            </a>
                            <h3>Register</h3>
                        </div>
                        <Form action="" method="post">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" name="email">
                            <label for="email">email</label>
                        </div>
                            <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" name="username">
                            <label for="username">username</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="password" class="form-control" id="floatingPassword" name="password"  >
                            <label for="password">Password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatingInput" name="password1">
                            <label for="password1">Confirm Password</label>
                        </div>
                    
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4">Sign Up</button>
                        </Form>
                        
                        <p class="text-center mb-0">Don't have an Account? <a href="<?= base_url('auth');?>">Sign In</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>