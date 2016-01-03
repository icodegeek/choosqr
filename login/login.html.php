<?php 

require_once '../templates/header.php';

 ?>
            <div class="account-wall">
                <form action="?login" method="post" class="form-signin">
                <label for="email">Email:</label>
                <input type="text" name="email" class="form-control" placeholder="Email" required autofocus><br>
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <?php if (isset($error)): ?>
                    <p class="text-danger">El email o la contraseña no coinciden.</p>
                <?php endif ?>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php 

require_once '../templates/footer.php';
