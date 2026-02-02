<!doctype html>
<html lang="it" class="w-full h-full">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= ASSETSROOT; ?>/css/output.css">
    <link rel="icon" type="image/x-icon" href="<?= ASSETSROOT; ?>/imgs/favicon.ico">
    <title>JWT | NOME</title>
</head>

<body
    class="min-h-screen bg-[url('../imgs/sfondo.png')] bg-cover bg-center bg-no-repeat bg-fixed font-madimi flex flex-col">
    <div id="overlay" class="fixed inset-0 backdrop-blur-xs z-40 hidden transition-opacity duration-300"></div>

    <aside id="sidebar"
        class="fixed top-0 left-0 h-screen w-100 bg-linear-to-tl from-[#A200FF] via-[#B268DD] to-[#2c78e9] z-50 transition-transform duration-300 ease-in-out -translate-x-full shadow-2xl">
        <div class="w-full flex items-center justify-between p-10 text-3xl border-b border-b-white/40">
            <div class="flex items-center gap-4 text-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-8">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
                <p>MEN&Uacute;</p>
            </div>
        </div>

        <nav class="flex flex-col text-black mt-10">
            <ul class="flex flex-col text-3xl *:w-full *:flex *:items-center *:gap-2 *:px-8 *:py-2">
                <li class="border-l-6 border-l-black"> <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg>
                    <a href="ciao.html">Dashboard</a>
                </li>
            </ul>
        </nav>
    </aside>
    <header class="relative h-20 p-4">
        <div class="absolute inset-0 bg-linear-to-r from-[#1170ff] via-[#1170ff] to-[#999999] opacity-10"></div>
        <div class="relative flex justify-between w-full h-full items-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-8" id="openBtn">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <p class="text-3xl absolute left-1/2 -translate-x-1/2">JWT</p>
            <nav>
                <ul class="flex items-center gap-3 *:bg-white *:p-2 *:rounded-full">
                    <li>
                        <div class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z" />
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <p>Settings</p>
                        </div>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                        </svg>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="flex flex-row justify-center grow">
        <div
            class="flex flex-col  w-1/5 justify-between bg-[linear-gradient(135deg,rgba(162,0,255,0.59)_36%,rgba(178,104,221,0.59)_58%,rgba(17,112,255,0.59)_100%)] p-5">
            <div class="flex flex-col mt-10 ml-4">
                <p class="text-xl">
                    <?= date('l, j F'); ?>
                </p>
                <h1 class="text-7xl tabular-nums" id="clock"></h1>
            </div>
            <div class="flex flex-col mb-10 items-start ml-4">
                <h1 class="text-2xl">ANH-HERE</h1>
                <p class="text-lg">Via Roma 66, Bergamo</p>
            </div>
        </div>
        <div class="w-4/5 flex flex-col items-center">
            <div class="w-full items-center mt-20">
                <div class="justify-center items-center text-center">
                    <h1 class="text-2xl mb-2">Good morning, <?= $data["datiUtente"]->first_name?></h1>
                    <p class="text-xl text-gray-700">Let's get to work</p>
                </div>
                <div class="w-full flex items-center gap-2 px-8 mt-6">
                    <hr class="grow" />
                    <img src="<?= ASSETSROOT; ?>/imgs/default.png" alt="">
                    <hr class="grow" />
                </div>
            </div>
            <div class="w-full flex flex-col justify-center items-center my-10 gap-5">
                <button
                    class="w-1/4 text-xl py-3 text-white transition-colors bg-[#8F57D5] border-2 border-white rounded-lg hover:bg-white hover:text-[#8F57D5] hover:border-[#8F57D5]">Clock
                    in</button>
                <button
                    class="w-1/4 text-xl py-3 text-[#8F57D5] transition-colors bg-white border-2 border-[#8F57D5] rounded-lg hover:bg-[#8F57D5] hover:text-white hover:border-white">Clock
                    out</button>
            </div>
            <h1 class="text-5xl items-start mt-10">I Nostri dipendenti: </h1>
            <div class="w-50 flex justify-between bg-gray-300 p-2 rounded-lg mt-10">
                <span class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    <input type="text" class="outline-none text-black w-full" placeholder="Search">
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                </svg>
            </div>
            <section class="w-3/4 bg-white/90 p-5 mt-6 rounded-xl">
                <?
                foreach ($users as $user) {

                }
                ?>
                <div class="w-full flex items-center justify-between bg-purple-400 p-3 mb-2 rounded-lg">
                    <div class="flex items-center gap-4">
                        <img src="<?= ASSETSROOT; ?>/imgs/default.png" alt="" class="size-10 rounded-full">
                        <div>
                            <p>Fabrizio Corona</p>
                            <p class="text-slate-800/80">falsissimo@gmail.com</p>
                        </div>
                    </div>
                    <div>
                        <p>Corona's</p>
                        <span class="flex items-center gap-2">
                            <p>Attivo</p>
                            <div class="size-5 bg-green-400 rounded-full"></div>
                        </span>
                    </div>
                </div>
            </section>
            <div class="flex items-center justify-center gap-4 my-8 font-medium">
                <button
                    class="flex items-center gap-2 px-4 py-2 text-sm text-[#8F57D5] transition-colors bg-white border border-[#8F57D5] rounded-lg hover:bg-[#8F57D5] hover:text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                    </svg>
                    Precedente
                </button>

                <div
                    class="flex gap-2 text-gray-600 *:w-10 *:h-10 *:flex *:items-center *:justify-center *:rounded-lg *:cursor-pointer *:transition-all *:duration-200">

                    <button class="bg-[#8F57D5] text-white shadow-md shadow-purple-200 hover:bg-[#7a4ab8]">1</button>

                    <button
                        class="bg-white hover:bg-gray-100 border border-transparent hover:border-gray-200">2</button>
                    <button
                        class="bg-white hover:bg-gray-100 border border-transparent hover:border-gray-200">3</button>
                    <button
                        class="bg-white hover:bg-gray-100 border border-transparent hover:border-gray-200">4</button>
                    <button
                        class="bg-white hover:bg-gray-100 border border-transparent hover:border-gray-200">5</button>
                </div>

                <button
                    class="flex items-center gap-2 px-4 py-2 text-sm text-[#8F57D5] transition-colors bg-white border border-[#8F57D5] rounded-lg hover:bg-[#8F57D5] hover:text-white">
                    Successivo
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="size-4">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
    </main>
    <footer class="w-full bg-[#8F57D5]/80 text-white p-4 flex items-center justify-center">
        <p>&copy
            <?= date('Y'); ?> | AlpineNode Hosting
        </p>
    </footer>
    <script>
        function updateClock() {
            const now = new Date();

            // Ottieni ore, minuti e secondi
            let h = now.getHours().toString().padStart(2, '0');
            let m = now.getMinutes().toString().padStart(2, '0');
            let s = now.getSeconds().toString().padStart(2, '0');

            // Costruisci la stringa
            const timeString = `${h}:${m}:${s}`;

            // Aggiorna il contenuto dell'elemento HTML
            document.getElementById('clock').textContent = timeString;
        }

        // Esegui la funzione ogni 1000 millisecondi (1 secondo)
        setInterval(updateClock, 1000);

        // Eseguila subito all'avvio per evitare il ritardo di 1 secondo
        updateClock();
    </script>
</body>
<script src="<?= ASSETSROOT; ?>/js/sidebar.js"></script>

</html>