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
            <h2 class="text-[13px]">Alumno</h2>
                <h1 class="  font-bold text-[15px]"><?= $Nombre ?></h1>
               
            </div>
            <div class="flex flex-col justify-center  content-center items-center ">
                <h1 class="p-[2rem] text-[13px] ">MENU ALUMNOS</h1>
                <div class=" w-[80%] flex flex-col gap-[2rem]">

                    <button class="flex gap-4 items-center text-[13px] " > <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM288 368a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm211.3-43.3c-6.2-6.2-16.4-6.2-22.6 0L416 385.4l-28.7-28.7c-6.2-6.2-16.4-6.2-22.6 0s-6.2 16.4 0 22.6l40 40c6.2 6.2 16.4 6.2 22.6 0l72-72c6.2-6.2 6.2-16.4 0-22.6z"/></svg>
                        <h1>Ver Calificaciones </h1>
                    </button>
                    <button class="flex gap-4  text-[13px] items-center"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z" />
                        </svg>
                        <h1>Administra tus Clases</h1>
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