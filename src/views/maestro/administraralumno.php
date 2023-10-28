<?php 

session_start();
extract($_SESSION['user']);

?>


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

        function toggleModal2() {
            var element = document.body;
            element.classList.toggle("Modal2");
        }



    const darkMode = document.querySelector('#theme-toggle');
    darkMode.addEventListener('click', ()=>{
         document.documentElement.classList.toggle('dark');

    })


    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div class="h-screen  flex  justify-start ">

    <div class="modal2">

<div class="flex justify-center content-center items-center flex-col gap-[1rem] p-[2rem]"> 

<form method="post" action="/createalumno" class="flex justify-center content-center items-center flex-col gap-[1rem] bg-white">
<h1 class="text-[1rem]">Editar Permiso</h1>
 <input type="text" />

 <label>DNI</label>
    <input class="border-2 border-solid" type="text"  name="dni" require/>


   <label>Correo Electronico</label>
    <input class="border-2 border-solid" type="email"  name="email" require/>

    <label>Cotrasena</label>
    <input class="border-2 border-solid" type="text"  name="contrasena" require/>

    <label>Nombre(s)</label>
    <input class="border-2 border-solid" type="text"  name="nombre" require/>
 
    <label>Apellido(s)</label>
    <input class="border-2 border-solid"  type="text"  name="apellido" require/>

    <label>Direccion</label>
    <input class="border-2 border-solid" type="text"  name="direccion" require/>

    <label>Fecha de Nacimiento</label>
    <input class="border-2 border-solid" type="date" name="fecha" require/>


    
  

<div>


<button type="submit" class="bg-blue-500 text-white p-[1rem]">Guardar Cambios</button></div>


</form>
 
<button type="submit" class="bg-gray-700 text-white  p-[1rem] " onclick="toggleModal2()" >Close</button>
</div>
</div>




        <sidebar class="w-[17vw] bg-gray-800 shadow-2x text-white divide-y divide">
            <div class="p-[1rem] flex gap-[1rem]"> <img class="rounded-[100%] w-[2rem] " src="/src/views/admin/logo.jpg">
                <h1> universidad</h1>
            </div>
            <div class="flex flex-col p-[1rem] gap-[1rem] ">
            <h2 class="text-[13px]">Maestro</h2>
                <h1 class="  font-bold text-[15px]"><?= $Nombre ?></h1>
               
            </div>
            <div class="flex flex-col justify-center  content-center items-center ">
                <h1 class="p-[2rem] text-[13px] ">MENU MAESTRO</h1>
                <div class=" w-[80%] flex flex-col gap-[2rem]">


           
                    <a href="/admAlumnoMaestro" class="flex gap-4 text-[13px] items-center"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                        </svg>
                        <h1>Alumnos</h1>
                    </a>
                 

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
    </span> <a style="color:grey;text-decoration:none" href="/logout">
        <p> Logout</p>
    </a>

</div>

</div>


                <div class="flex  justify-between p-[1rem]">
                    <h1 class="text-[1.5rem] m-[0.5rem]">Lista de Alumnos</h1>
                    <div class="flex gap-[1rem]"><a class="text-blue-700">Home</a>/<a >Dashboard</a> </div>
                </div>

                <div class="bg-white shadow-xl  h-[70vh] w-[80vw] mx-[1rem] content-center rounded-xl p-[1rem] items-center justify-center">

                   <div class="  flex flex-col content-center justify-center items-center">
                     <h1 class="text-[15px] m-[1rem] w-[100%]  border-b-4 ">Informacion de Alumnos</h1> <div>

                   <table class=" border bg-slate-200 h-[55vh] w-[78vw] border-slate-500 ...">
  <thead class="bg-white h-[5vh]">
    <tr>
      <th class="border border-slate-600 ... ">#</th>
      
      <th class="border border-slate-600 ... ">Correo Electronico</th>
      <th class="border border-slate-600 ... w-[27vw]">Nombre(s)</th>
      <th class="border border-slate-600 ... w-[27vw]">Apellido</th>
      <th class="border border-slate-600 ...">Direccion</th>
      <th class="border border-slate-600 ...">Fec. de nacimiento</th>
      <th class="border border-slate-600 ...">Acciones</th>
      
    </tr>
  </thead>

  <tbody>


   <?php  foreach ($data as $datas) {
extract($datas)
 

        ?>

 <tr>
      <td class="border text-center border-slate-700 ... w-[7vw]"> <?= $ID ?></td>
      <td class="border text-center border-slate-700 ... w-[20vw]"> <?= $CorreoElectronico ?> / <?= $Nombre?></td>
      <td class="border text-center border-slate-700 ... w-[20vw]"><?= $Nombre?></td>
      <td class="border text-center border-slate-700 ..."><?=$Apellido?> </td>
      <td class="border text-center border-slate-700 ... w-[20vw]"><?=$direccion?></td>
      <td class="border text-center border-slate-700 ... w-[20vw]"><?=$fec_nac?></td>
      <td class="border text-center border-slate-700 ..."> 
        
      <div class="flex  justify-center content-center items-center gap-2">
        
     
      <form action="/delete" method="post">
        <button type="submit" value="<?= $ID ?>" name="id">
      <svg   xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
     
     <path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z" fill="#c70a0a" /></svg>
        </button>
      </form>
     
     
     / 
      
     
     <button  onclick="toggleModal2()">    
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"> 
        <path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg> 
      </button></div>
    </td>
      
    </tr>


 <?php  }      ?>
 



                </div>



            </main>
        </div>

    </div>
</body>

</html>