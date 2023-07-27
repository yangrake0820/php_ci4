<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dA9</title>

    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/main.css'); ?>">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="login">
        <div class="login__content">
            <div class="login__img">
                <img src="https://image.freepik.com/free-vector/code-typing-concept-illustration_114360-3581.jpg"
                    alt="user login">
            </div>
            <div class="login__forms">
                <!--         login form -->
                <form action="" class="login__register" id="login-in">
                    <h1 class="login__title">Sign In</h1>
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Username" class="login__input">
                    </div>
                    <div class="login__box">
                        <i class='bx bx-lock login__icon'></i>
                        <input type="text" placeholder="Password" class="login__input">
                    </div>
                    <a class="login__forgot">Forgot Password? </a>

                    <a class="login__button in">Sign In</a>

                    <div>
                        <span class="login__account login__account--account">Don't Have an Account?</span>
                        <span class="login__signin login__signin--signup" id="sign-up">Sign Up</span>
                    </div>
                </form>

                <!--         create account form -->
                <form action="" class="login__create none" id="login-up">
                    <h1 class="login__title">Create Account</h1>
                    <div class="login__box">
                        <i class='bx bx-user login__icon'></i>
                        <input type="text" placeholder="Username" class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-at login__icon'></i>
                        <input type="text" placeholder="Email" class="login__input">
                    </div>

                    <div class="login__box">
                        <i class='bx bx-lock login__icon'></i>
                        <input type="text" placeholder="Password" class="login__input">
                    </div>

                    <a class="login__button up">Sign Up</a>

                    <div>
                        <span class="login__account login__account--account">Already have an Account?</span>
                        <span class="login__signup login__signup--signup" id="sign-in">Sign In</span>
                    </div>

                    <div class="login__social">
                        <a class="login__social--icon"><i class='bx bxl-facebook'></i></a>
                        <a class="login__social--icon"><i class='bx bxl-twitter'></i></a>
                        <a class="login__social--icon"><i class='bx bxl-google'></i></a>
                        <a class="login__social--icon"><i class='bx bxl-github'></i></a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>

<script>
    const signup = document.getElementById("sign-up");
    signin = document.getElementById("sign-in");
    loginin = document.getElementById("login-in");
    loginup = document.getElementById("login-up");

    signup.addEventListener("click", () => {
        loginin.classList.remove("block");
        loginup.classList.remove("none");

        loginin.classList.add("none");
        loginup.classList.add("block");
    })

    signin.addEventListener("click", () => {
        loginin.classList.remove("none");
        loginup.classList.remove("block");

        loginin.classList.add("block");
        loginup.classList.add("none");
    })

    $('.login__button').on('click', (e)=>{
        const type = e.target.className.split(' ')[1];
        
        if(type === 'in'){
            // 로그인 로직
        }else if(type === 'up'){
            // 회원가입 로직
            alert('업');
        }else{
            alert('className : login__button 의 클릭 이벤트 발생 => type 오류');
            return false;
        }


        
    });
</script>