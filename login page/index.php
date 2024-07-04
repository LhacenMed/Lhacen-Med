<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ministère de l'intérieur et de la décentralisation</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="icon" type="image/png" href="images/logo.png">
</head>
<body>
    <div class="container">
        <div class="left-side">
            <div class="logo">
                <img src="images/logo.png" alt="Logo">
            </div>
            <div class="slogan">
                <img src="images/slogan.png" alt="Slogan">
            </div>
            <div class="ministry-name">
                <h1>وزارة الداخلية واللامركزية</h1>
                <h1>Ministère de l'intérieur et de la décentralisation</h1>
            </div>
        </div>
        <div class="right-side">
            <div class="auth-container">
                <center>
                    <h2>Authentification / تسجيل الدخول</h2>
                </center>
                <br><br><br>
                <form method="POST" action="/index.php">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="email" required>
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" required>
                    <div id="toggle" onclick="showHide()"></div>

                    <div>
                        <div class="container2">
                            <input type="checkbox" name="" id="input-1" class="check-input">
                            <label for="input-1" class="checkbox">
                            <svg viewBox="0 0 22 16" fill="none">
                                <path d="M1 6.85L8.09677 14L21 1"/>
                            </svg>
                            </label>
                            <label for="input-1" class="checkbox-text">Garder la session ouverte</label>
                        </div>
                    </div>

                    <button type="submit" class="btn">Connexion / تسجيل الدخول</button>
                </form>
                <a href="#" class="forgot-password">Avez-vous oublié votre mot de passe ?</a>
            </div>
        </div>
    </div>



    <script>
        let password = document.getElementById('password');
        let togglePassword = document.getElementById('toggle');
    
        function showHide() {
            if (password.type === 'password') {
            password.setAttribute('type', 'text');
            togglePassword.classList.add('hide');
            }
            else {
            password.setAttribute('type', 'password');
            togglePassword.classList.remove('hide');
            }
        }
    </script>
</body>
</html>
