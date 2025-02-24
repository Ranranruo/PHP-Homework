<link rel="stylesheet" href="public/style/SignUp.css">
<main id="sign-up">
    <?=Logo(["type" => "primary", "size" => "small"])?>
    <form action="">
        <ul class="inputs">
            <li class="input disabled">
                <h1>* Username</h1>
                <input type="text" id="username">
                <p class="message">Cannot using password</p>
            </li>
            <li class="input">
                <h1>* Displayname</h1>
                <input type="text" id="displayname">
                <p class="message"></p>
            </li>
            <li class="input">
                <h1>* Password</h1>
                <input type="text" id="password">
                <p class="message"></p>
            </li>
        </ul>
        <div class="buttons">
            <button>Sign Up</button>
        </div>
    </form>
</main>
<script src="public/script/SignUp.js"></script>