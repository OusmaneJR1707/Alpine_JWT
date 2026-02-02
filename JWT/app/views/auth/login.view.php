<!doctype html>
<html lang="it" class="h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/ALPINE_JWT/JWT/public/assets/css/output.css" />
    <link rel="icon" type="image/x-icon" href="/COMPITO/JWT/public/assets/imgs/favicon.ico">
    <title id="mainTitle">JWT | LOGIN</title>
</head>

<body
    class="min-h-screen flex flex-col items-center justify-center bg-[url('/COMPITO/JWT/public/assets/imgs/sfondo.png')] bg-cover bg-center bg-no-repeat font-madimi">
    <div
        class="w-full text-white flex flex-col items-center gap-8 max-w-112.5 my-auto p-10 rounded-lg shadow-2xl bg-linear-to-br from-[#8f57d5] via-[#b691e4] via-70% to-white">
        <div class="flex bg-white/90 rounded-full p-1 shadow-inner">
            <div class="px-6 py-2 rounded-full cursor-pointer font-medium text-gray-500 transition-all duration-300"
                id="register_btn">
                Sign-up
            </div>
            <div class="px-6 py-2 rounded-full cursor-pointer font-medium text-gray-500 transition-all duration-300"
                id="login_btn">
                Sign-in
            </div>
        </div>
        <h1 class="text-3xl font-bold" id="title">Log-in your account</h1>
        <form class="flex flex-col gap-4 w-full" method="post" action="<?= URLROOT ?> /auth/login">
            <div class="w-full flex gap-3" id="name_fields">
                <div class="flex items-center grow bg-white/90 p-3 rounded-lg text-gray-700">
                    <input class="w-full outline-none" type="text" name="" id="" placeholder="First Name" />
                </div>
                <div class="flex items-center grow bg-white/90 p-3 rounded-lg text-gray-700">
                    <input class="w-full outline-none" type="text" name="" id="" placeholder="Last Name" />
                </div>
            </div>
            <div class="flex items-center gap-2 w-full bg-white/90 p-3 rounded-lg text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
                <input class="outline-none grow" type="text" name="email" id="email" placeholder="Enter your email" />
            </div>
            <div class="flex items-center gap-2 w-full bg-white/90 p-3 rounded-lg text-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                </svg>
                <input class="outline-none grow" type="password" name="password" id="password"
                    placeholder="Enter your password" />
            </div>
            <button class="w-full uppercase p-3 border-2 border-white rounded-xl text-xl" id="submit_btn">
                Login
            </button>
        </form>
        <div class="w-full flex items-center gap-2">
            <hr class="grow" />
            <p class="uppercase text-xs" id="sso_login">Or sign-in with</p>
            <hr class="grow" />
        </div>
        <div class="w-full flex gap-8">
            <span
                class="flex justify-center items-center grow border bg-white/90 border-white rounded-md text-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 48 48">
                    <path fill="#FFC107"
                        d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12c0-6.627,5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24c0,11.045,8.955,20,20,20c11.045,0,20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z">
                    </path>
                    <path fill="#FF3D00"
                        d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z">
                    </path>
                    <path fill="#4CAF50"
                        d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z">
                    </path>
                    <path fill="#1976D2"
                        d="M43.611,20.083H42V20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z">
                    </path>
                </svg>
            </span>
            <span
                class="flex justify-center items-center grow border bg-white/90 border-white rounded-md text-center p-1">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35" viewBox="0 0 30 30">
                    <path
                        d="M25.565,9.785c-0.123,0.077-3.051,1.702-3.051,5.305c0.138,4.109,3.695,5.55,3.756,5.55 c-0.061,0.077-0.537,1.963-1.947,3.94C23.204,26.283,21.962,28,20.076,28c-1.794,0-2.438-1.135-4.508-1.135 c-2.223,0-2.852,1.135-4.554,1.135c-1.886,0-3.22-1.809-4.4-3.496c-1.533-2.208-2.836-5.673-2.882-9 c-0.031-1.763,0.307-3.496,1.165-4.968c1.211-2.055,3.373-3.45,5.734-3.496c1.809-0.061,3.419,1.242,4.523,1.242 c1.058,0,3.036-1.242,5.274-1.242C21.394,7.041,23.97,7.332,25.565,9.785z M15.001,6.688c-0.322-1.61,0.567-3.22,1.395-4.247 c1.058-1.242,2.729-2.085,4.17-2.085c0.092,1.61-0.491,3.189-1.533,4.339C18.098,5.937,16.488,6.872,15.001,6.688z">
                    </path>
                </svg>
            </span>
        </div>
    </div>
    <footer class="w-full bg-[#8F57D5]/80 text-white p-4 flex items-center justify-center">
        <p>&copy
            <?= date('Y'); ?> | AlpineNode Hosting
        </p>
    </footer>
</body>
<script>
    <?php if (isset($_SESSION['error'])): ?>
        // Usiamo json_encode per gestire caratteri speciali e apici nel testo
        alert(<?php echo json_encode($_SESSION['error']); ?>);
        <?php unset($_SESSION['error']); // Puliamo l'errore dopo averlo mostrato ?>
    <?php endif; ?>
</script>
<script src="/ALPINE_JWT/JWT/public/assets/js/login.js"></script>

</html>