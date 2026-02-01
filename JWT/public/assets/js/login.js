document.addEventListener("DOMContentLoaded", () => {
    const signupBtn = document.getElementById("register_btn");
    const signinBtn = document.getElementById("login_btn");
    const nameFields = document.getElementById("name_fields");
    const title = document.getElementById("title");
    const submitBtn = document.getElementById("submit_btn");
    const ssoLogin = document.getElementById("sso_login");
    const mainTitle = document.getElementById("mainTitle");

    //classi tailwind per lo stato attivo/inattivo dei bottoni toggle
    const activeClasses = ['bg-[#9b5de5]', 'text-white', 'shadow-md'];
    const inactiveClasses = ['text-gray-500', 'hover:text-[#9b5de5]'];

    //funzioni di visualizzazione
    function showLogin(){
        signinBtn.classList.add(...activeClasses);
        signinBtn.classList.remove(...inactiveClasses);
        signupBtn.classList.add(...inactiveClasses);
        signupBtn.classList.remove(...activeClasses);
        nameFields.classList.remove("flex");
        nameFields.classList.add("hidden");

        title.innerText = "Log-in your account";
        submitBtn.innerText = "Login";
        ssoLogin.innerText = "Or login with";
        mainTitle.innerText = "JWT | LOGIN";
    }

    function showRegister(){
        signupBtn.classList.add(...activeClasses);
        signupBtn.classList.remove(...inactiveClasses);
        signinBtn.classList.add(...inactiveClasses);
        signinBtn.classList.remove(...activeClasses);
        nameFields.classList.add("flex");
        nameFields.classList.remove("hidden");

        title.innerText = "Create an account";
        submitBtn.innerText = "Register";
        ssoLogin.innerText = "Or sign-up with";
         mainTitle.innerText = "JWT | SIGNUP";
    }

    //logica di routing
    function switchMode(mode){
        if(mode==="login"){
            showLogin();
            history.pushState({mode: "login"}, "", "/ALPINE_JWT/JWT/auth/login"); //cambia URL in /login senza ricaricare
        } else {
            showRegister();
            history.pushState({mode: "register"}, "", "/ALPINE_JWT/JWT/auth/register"); //cambia URL in /register senza ricaricare
        }
    }

    //listener sui bottoni
    signinBtn.addEventListener("click", () => switchMode("login"));
    signupBtn.addEventListener("click", () => switchMode("register"));

    //gestione caricamento della pagina
    const currentPath = window.location.pathname;
    if(currentPath.endsWith("/register")){
        showRegister();
    } else {
        showLogin();
    }

    //gestione pulsante indietro
    window.addEventListener('popstate', (event) => {
        // Se torniamo indietro col browser, controlliamo lo stato salvato
        if (event.state && event.state.mode === 'login') {
            showLogin();
        } else {
            showRegister();
        }
    });
})