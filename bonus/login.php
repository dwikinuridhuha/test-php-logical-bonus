<?php
require_once './header.php';
?>
    <div class="container login-container">
        <div class="row">
            <div class="col-md-6 login-form-1 mx-auto">
                <h3>Login Form 1</h3>
                <form method="post" action="login-handler">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Your Username *" value=""/>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Your Password *"
                               value=""/>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Login"/>
                    </div>
                    <div class="form-group">
                        <a href="#" class="btnForgetPwd">Forget Password?</a>
                    </div>
                </form>
            </div>
        </div>

<?php
require_once './header.php';