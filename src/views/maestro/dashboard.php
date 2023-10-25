<!DOCTYPE html>
<html lang="en">

<head>
<link rel="stylesheet" type="text/css" href="/src/views/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <title>Document</title>
</head>

<body >
    
<script>
        function toggleModal() {
            var element = document.body;
            element.classList.toggle("Modal");
        }


    const darkMode = document.querySelector('#theme-toggle');
    darkMode.addEventListener('click', ()=>{
         document.documentElement.classList.toggle('dark');

    })


    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div class="h-screen  flex  justify-start ">
        <sidebar class="w-[17vw] bg-gray-800 shadow-2x text-white divide-y divide">
            <div class="p-[1rem] flex gap-[1rem]"> <img class="rounded-[100%] w-[2rem] " src="/src/views/admin/logo.jpg">
                <h1> universidad</h1>
            </div>
            <div class="flex flex-col p-[1rem] gap-[1rem] ">
            <h2 class="text-[13px]">Maestro</h2>
                <h1 class="  font-bold text-[15px]"><?= $Nombre ?></h1>
             
            </div>
            <div class="flex flex-col justify-center  content-center items-center ">
                <h1 class="p-[2rem] text-[13px] ">MENU MAESTROS</h1>
                <div class=" w-[80%] flex flex-col gap-[2rem]">
                  
                    <button class="flex gap-4 text-[13px] items-center"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                        </svg>
                        <h1>Alumnos</h1>
                    </button>
                   

                </div>
            </div>

        </sidebar>
        <div class="flex flex-col w-[90vw] bg-slate-200">
            <nav class=" h-[8%] bg-white flex gap-[3rem] shadow-2xl  content-center items-center px-5  justify-between ">

                <div class="flex gap-[3rem] shadow-2xl content-center items-center  "><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <style>
                            svg {
                                fill: #97989b
                            }
                        </style>
                        <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
                    </svg>
                    <h1>Home</h1> <button id="theme-toggle" class="theme">Theme</button>
                </div>


                <div class="flex  content-center  gap-[1rem] items-center">
                <h1><?= $Nombre ?></h1> <button  onclick=" toggleModal()"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                        <style>
                            svg {
                                fill: #a7a8a9
                            }
                        </style>
                        <path d="M201.4 342.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 274.7 86.6 137.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                    </svg></button>
                </div>


            </nav>
            <main class=" h-[94%]  ">


            <div class="modals">

<div><span class="material-symbols-outlined">
        account_circle
    </span>
    <p> <a style="text-decoration-line:none" href="./dashboard.php">Perfil</a></p>
</div>


<div><span class="material-symbols-outlined">
        logout
    </span> <a style="color:grey;text-decoration:none" href="/handle_db/logout.php">
        <p> Logout</p>
    </a>

</div>

</div>

                <div class="flex  justify-between p-[1rem]">
                    <h1 class="text-[1.5rem] m-[0.5rem]">Dashboard</h1>
                    <div class="flex gap-[1rem]"><a class="text-blue-700">Home</a>/<a>Dashboard</a> </div>
                </div>

                <div class="bg-white shadow-xl  h-[12vh] w-[40vw] mx-[1rem] content-center rounded-xl p-[1rem] justify-center">

                    <h1 class="text-[15px]">Bienvenido</h1>
                    <p class="text-[10px]">Seleciona la accion que quieras realizar en las pestanas del menu de la izquierda</p>


                </div>



            </main>
        </div>

    </div>
</body>

</html>