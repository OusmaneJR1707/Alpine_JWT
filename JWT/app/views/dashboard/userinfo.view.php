<!doctype html>
<html lang="it" class="h-full w-full">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?= ASSETSROOT; ?>/css/output.css" />
    <link rel="icon" type="image/x-icon" href="<?= ASSETSROOT; ?>/imgs/favicon.ico">
    <title id="mainTitle">JWT | <?= $data["utente"]->first_name . " " . $data["utente"]->last_name ?></title>
  </head>
  <body
    class="font-madimi min-h-screen w-full bg-[urlurl('../imgs/sfondo.png')] bg-cover bg-center bg-no-repeat bg-fixed flex flex-col"
  >
    <div id="overlay" class="fixed inset-0 backdrop-blur-xs z-40 hidden transition-opacity duration-300"></div>

    <aside id="sidebar" class="fixed top-0 left-0 h-screen w-100 bg-linear-to-tl from-[#A200FF] via-[#B268DD] to-[#2c78e9] z-50 transition-transform duration-300 ease-in-out -translate-x-full shadow-2xl">
      <div class="w-full flex items-center justify-between p-10 text-3xl border-b border-b-white/40">
        <div class="flex items-center gap-4 text-black">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
            <p>MEN&Uacute;</p>
        </div>
      </div>

      <nav class="flex flex-col text-black mt-10">
        <ul class="flex flex-col text-3xl *:w-full *:flex *:items-center *:gap-2 *:px-8 *:py-2">
          <li class="border-l-6 border-l-black"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-10">
              <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
            </svg>
            <a href="ciao.html">Dashboard</a>
          </li>
        </ul>
      </nav>
    </aside>
    <header class="relative h-20 p-4">
      <div
        class="absolute inset-0 bg-linear-to-r from-[#1170ff] via-[#1170ff] to-[#999999] opacity-10"
      ></div>
      <div class="relative flex h-full w-full items-center justify-between">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          fill="none"
          viewBox="0 0 24 24"
          stroke-width="1.5"
          stroke="currentColor"
          class="size-8"
          id="openBtn"
        >
          <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
          />
        </svg>
        <p class="absolute left-1/2 -translate-x-1/2 text-3xl">JWT</p>
        <nav>
          <ul class="flex items-center gap-3 *:rounded-full *:bg-white *:p-2">
            <li>
              <div class="flex items-center gap-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M10.343 3.94c.09-.542.56-.94 1.11-.94h1.093c.55 0 1.02.398 1.11.94l.149.894c.07.424.384.764.78.93.398.164.855.142 1.205-.108l.737-.527a1.125 1.125 0 0 1 1.45.12l.773.774c.39.389.44 1.002.12 1.45l-.527.737c-.25.35-.272.806-.107 1.204.165.397.505.71.93.78l.893.15c.543.09.94.559.94 1.109v1.094c0 .55-.397 1.02-.94 1.11l-.894.149c-.424.07-.764.383-.929.78-.165.398-.143.854.107 1.204l.527.738c.32.447.269 1.06-.12 1.45l-.774.773a1.125 1.125 0 0 1-1.449.12l-.738-.527c-.35-.25-.806-.272-1.203-.107-.398.165-.71.505-.781.929l-.149.894c-.09.542-.56.94-1.11.94h-1.094c-.55 0-1.019-.398-1.11-.94l-.148-.894c-.071-.424-.384-.764-.781-.93-.398-.164-.854-.142-1.204.108l-.738.527c-.447.32-1.06.269-1.45-.12l-.773-.774a1.125 1.125 0 0 1-.12-1.45l.527-.737c.25-.35.272-.806.108-1.204-.165-.397-.506-.71-.93-.78l-.894-.15c-.542-.09-.94-.56-.94-1.109v-1.094c0-.55.398-1.02.94-1.11l.894-.149c.424-.07.765-.383.93-.78.165-.398.143-.854-.108-1.204l-.526-.738a1.125 1.125 0 0 1 .12-1.45l.773-.773a1.125 1.125 0 0 1 1.45-.12l.737.527c.35.25.807.272 1.204.107.397-.165.71-.505.78-.929l.15-.894Z"
                  />
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"
                  />
                </svg>
                <p>Settings</p>
              </div>
            </li>
            <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                />
              </svg>
            </li>
            <li>
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="size-6"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"
                />
              </svg>
            </li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="grow flex flex-col items-center py-10">
      <section
        class="flex w-3/4 max-w-5xl flex-col rounded-xl bg-white p-6 shadow-lg md:p-8"
      >
        <div
          class="mb-8 flex flex-col items-center gap-3 border-b border-gray-200 pb-6"
        >
          <img
            class="size-32 rounded-full border border-gray-200 object-cover shadow-sm"
            src="<?= ASSETSROOT; ?>/imgs/default.png"
            alt=""
          />
          <div class="flex items-center gap-4">
            <h2 class="text-4xl font-bold text-gray-800"><?= $data["utente"]->first_name . " " . $data["utente"]->last_name ?></h2>
            <div class="size-5 gap-2 rounded-full bg-green-500"></div>
          </div>
        </div>

        <div class="grid grid-cols-1 gap-x-4 gap-y-6 md:grid-cols-12">
          <div class="md:col-span-2">
            <label class="mb-1 block text-lg font-bold text-gray-700">ID</label>
            <input
              type="text"
              value="<?= "#" . str_pad($data['utente']->id, 4, 0, STR_PAD_LEFT); ?>"
              readonly
              class="w-full cursor-default rounded border-2 border-black/80 bg-gray-50 px-3 py-2 text-gray-800 focus:outline-none"
            />
          </div>

          <div class="md:col-span-3">
            <label class="mb-1 block text-lg font-bold text-gray-700"
              >Ruolo</label
            >
            <input
              type="text"
              value="<?= $data['utente']->role_id ?>"
              readonly
              class="w-full cursor-default rounded border-2 border-black/80 bg-gray-50 px-3 py-2 text-gray-800 focus:outline-none"
            />
          </div>

          <div class="md:col-span-3">
            <label class="mb-1 block text-lg font-bold text-gray-700"
              >Email</label
            >
            <input
              type="email"
              value="<?= $data['utente']->email ?>"
              readonly
              class="w-full cursor-default rounded border-2 border-black/80 bg-gray-50 px-3 py-2 text-gray-800 focus:outline-none"
            />
          </div>

          <div class="md:col-span-4">
            <label class="mb-1 block text-lg font-bold text-gray-700">Dipartimento</label>
            <input
              type="text"
              value="<?= $data['utente']->department_name ?>"
              readonly
              class="w-full cursor-default rounded border-2 border-black/80 bg-gray-50 px-3 py-2 text-gray-800 focus:outline-none"
            />
          </div>

          <div class="md:col-span-4">
            <label class="mb-1 block text-lg font-bold text-gray-700"
              >Data creazione</label
            >
            <input
              type="text"
              value="<?= $data['utente']->created_at ?>"
              readonly
              class="w-full cursor-default rounded border-2 border-black/80 bg-gray-50 px-3 py-2 text-gray-800 focus:outline-none"
            />
          </div>

          <div class="md:col-span-4">
            <label class="mb-1 block text-lg font-bold text-gray-700"
              >Ultima modifica</label
            >
            <input
              type="text"
              value="<?= $data['utente']->updated_at ?>"
              readonly
              class="w-full cursor-default rounded border-2 border-black/80 bg-gray-50 px-3 py-2 text-gray-800 focus:outline-none"
            />
          </div>

          <div class="md:col-span-4">
            <label class="mb-1 block text-lg font-bold text-gray-700"
              >Ultimo Login</label
            >
            <input
              type="text"
              value="<?= $data['utente']->last_login ?>"
              readonly
              class="w-full cursor-default rounded border-2 border-black/80 bg-gray-50 px-3 py-2 text-gray-800 focus:outline-none"
            />
          </div>
        </div>
      </section>
      
      <section
        class="mt-8 flex w-3/4 max-w-5xl flex-col rounded-xl bg-white shadow-lg"
      >
        <table class="w-full">
          <thead>
            <tr
              class="border-b border-gray-300 *:px-2 *:py-4 *:text-center *:text-xl"
            >
              <td>Check-in</td>
              <td>Check-out</td>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-300 bg-purple-200 *:even:bg-purple-400">
            <?php foreach ($data["presenze"] as $presenza){ ?>
                <tr class="*:p-2 *:text-center">
                <td><?= $presenza['start_datetime'] ?></td>
                <td><?= $presenza['end_datetime'] ?? "In corso" ?></td>
                </tr>
            <?php }; ?>
          </tbody>
        </table>
      </section>
    </main>
    <footer class="w-full bg-[#8F57D5]/80 text-white p-4 flex items-center justify-center">
        <p>&copy
            <?= date('Y'); ?> | AlpineNode Hosting
        </p>
    </footer>
  </body>
  <script src="<?= ASSETSROOT; ?>/js/sidebar.js"></script>
</html>