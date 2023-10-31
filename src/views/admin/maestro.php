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


        function toggleModal3() {
            var element = document.body;
            element.classList.toggle("Modal3");
        }


    const darkMode = document.querySelector('#theme-toggle');
    darkMode.addEventListener('click', ()=>{
         document.documentElement.classList.toggle('dark');

    })


    </script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <div class="h-screen  flex  justify-start ">

    <div class="modal3">

<div class="flex justify-center content-center items-center flex-col gap-[1rem] p-[2rem]">

    <form method="post" action="/createmaestro" class="flex justify-center content-center items-center flex-col  bg-white">
        <h1 class="text-[2rem]">Crear Maestro</h1>



        <label>Correo Electronico</label>
        <input class="border-2 border-solid" type="email" name="email" require />

        <label>Contrasena</label>
        <input class="border-2 border-solid" type="text" name="contrasena" require />

        <label>Nombre(s)</label>
        <input class="border-2 border-solid" type="text" name="nombre" require />

        <label>Apellido(s)</label>
        <input class="border-2 border-solid" type="text" name="apellido" require />

        <label>Direccion</label>
        <input class="border-2 border-solid" type="text" name="direccion" require />

        <label>Fecha de Nacimiento</label>
        <input class="border-2 border-solid" type="date" name="fecha" require />

        <label>Clase Asignada</label>
  <select class="border-2 border-solid" name="clase" require > 
  <?php
   

  
  foreach ($datamateria as $data1){
extract($data1)
  
  ?>
  
  <option value="<?= $materia_id ?>"><?= $nombre ?></option>
     
  <?php   
}?>
    </select>

  



<div class="flex items-center">
            <button type="submit" class="bg-blue-500  text-white p-[1vh] m-[0.5rem]">Guardar Cambios</button>
       


    </form>

    <a  class="bg-gray-700 text-white p-[0.5vh] h-[5vh]" onclick="toggleModal3()">Close</a></div>
</div>
</div>



    <div class="modal2" >

<div class="flex justify-center content-center items-center flex-col text-[10px] "> 

<form method="post" action="/editarmaestro" class="flex justify-center content-center items-center flex-col gap-[2vh] bg-white ">
 <h1 class="text-[2rem]">Editar  Maestro</h1>
 <input type="text" />

   <label>Correo Electronico</label>
    <input class="border-2 border-solid text-[1rem]" type="email"  name="email" require/>

    <label>Nombre(s)</label>
    <input class="border-2 border-solid text-[1rem]" type="text"  name="nombre" require/>
 
    <label>Apellido(s)</label>
    <input class="border-2 border-solid text-[1rem]"  type="text"  name="apellido" require/>

    <label>Direccion</label>
    <input class="border-2 border-solid text-[1rem]" type="text"  name="direccion" require/>

    <label>Fecha de Nacimiento</label>
    <input class="border-2 border-solid text-[1rem]" type="date" name="fecha" require/>


    <label>Clase Asignada</label>
  <select class="border-2 border-solid text-[1rem]" name="clase" require > 
  <?php
   

  
  foreach ( $datamateria as $data1){
extract($data1)
  
  ?>
  
  <option value="<?= $materia_id  ?>"><?= $nombre ?></option>
     
  <?php   
}?>
    </select>

  

<div>


<button class="bg-blue-500 text-white p-[1rem]">Guardar Cambios</button></div>


</form>
 
<button type="submit" class="bg-gray-700 text-white  p-[1rem] " onclick="toggleModal2()" >Close</button>
</div>
</div>





        <sidebar class="w-[17vw] bg-gray-800 shadow-2x text-white divide-y divide">
            <div class="p-[1rem] flex gap-[1rem]"> <img class="rounded-[100%] w-[2rem] " src="/src/views/admin/logo.jpg">
                <h1> universidad</h1>
            </div>
            <div class="flex flex-col p-[1rem] gap-[1rem] ">
            <h2 class="text-[13px]">Administrador</h2>
                <h1 class="  font-bold text-[15px]"><?= $nombre ?></h1>
               
            </div>
            <div class="flex flex-col justify-center  content-center items-center ">
                <h1 class="p-[2rem] text-[13px] ">MENU ADMINISTRACION</h1>
                <div class=" w-[80%] flex flex-col gap-[2rem]">


                <a href="/permisos" class="flex gap-4 items-center text-[13px] " > <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M224 0a128 128 0 1 1 0 256A128 128 0 1 1 224 0zM178.3 304h91.4c11.8 0 23.4 1.2 34.5 3.3c-2.1 18.5 7.4 35.6 21.8 44.8c-16.6 10.6-26.7 31.6-20 53.3c4 12.9 9.4 25.5 16.4 37.6s15.2 23.1 24.4 33c15.7 16.9 39.6 18.4 57.2 8.7v.9c0 9.2 2.7 18.5 7.9 26.3H29.7C13.3 512 0 498.7 0 482.3C0 383.8 79.8 304 178.3 304zM436 218.2c0-7 4.5-13.3 11.3-14.8c10.5-2.4 21.5-3.7 32.7-3.7s22.2 1.3 32.7 3.7c6.8 1.5 11.3 7.8 11.3 14.8v30.6c7.9 3.4 15.4 7.7 22.3 12.8l24.9-14.3c6.1-3.5 13.7-2.7 18.5 2.4c7.6 8.1 14.3 17.2 20.1 27.2s10.3 20.4 13.5 31c2.1 6.7-1.1 13.7-7.2 17.2l-25 14.4c.4 4 .7 8.1 .7 12.3s-.2 8.2-.7 12.3l25 14.4c6.1 3.5 9.2 10.5 7.2 17.2c-3.3 10.6-7.8 21-13.5 31s-12.5 19.1-20.1 27.2c-4.8 5.1-12.5 5.9-18.5 2.4l-24.9-14.3c-6.9 5.1-14.3 9.4-22.3 12.8l0 30.6c0 7-4.5 13.3-11.3 14.8c-10.5 2.4-21.5 3.7-32.7 3.7s-22.2-1.3-32.7-3.7c-6.8-1.5-11.3-7.8-11.3-14.8V454.8c-8-3.4-15.6-7.7-22.5-12.9l-24.7 14.3c-6.1 3.5-13.7 2.7-18.5-2.4c-7.6-8.1-14.3-17.2-20.1-27.2s-10.3-20.4-13.5-31c-2.1-6.7 1.1-13.7 7.2-17.2l24.8-14.3c-.4-4.1-.7-8.2-.7-12.4s.2-8.3 .7-12.4L343.8 325c-6.1-3.5-9.2-10.5-7.2-17.2c3.3-10.6 7.7-21 13.5-31s12.5-19.1 20.1-27.2c4.8-5.1 12.4-5.9 18.5-2.4l24.8 14.3c6.9-5.1 14.5-9.4 22.5-12.9V218.2zm92.1 133.5a48.1 48.1 0 1 0 -96.1 0 48.1 48.1 0 1 0 96.1 0z" />
                        </svg>
                        <h1>Permisos </h1>
                    </a>
                    <a href="/maestro" class="flex gap-4  text-[13px] items-center"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M160 64c0-35.3 28.7-64 64-64H576c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H336.8c-11.8-25.5-29.9-47.5-52.4-64H384V320c0-17.7 14.3-32 32-32h64c17.7 0 32 14.3 32 32v32h64V64L224 64v49.1C205.2 102.2 183.3 96 160 96V64zm0 64a96 96 0 1 1 0 192 96 96 0 1 1 0-192zM133.3 352h53.3C260.3 352 320 411.7 320 485.3c0 14.7-11.9 26.7-26.7 26.7H26.7C11.9 512 0 500.1 0 485.3C0 411.7 59.7 352 133.3 352z" />
                        </svg>
                        <h1>Maestros</h1>
                    </a>
                    <a href="/alumno" class="flex gap-4 text-[13px] items-center"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                            <style>
                                svg {
                                    fill: #ffffff
                                }
                            </style>
                            <path d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z" />
                        </svg>
                        <h1>Alumnos</h1>
                    </a>
                    <a href="/clases" class="flex gap-4 text-[13px] items-center"><span class="material-symbols-outlined">
                            jamboard_kiosk
                        </span>
                        <h1>Clases</h1>
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
                <h1><?= $nombre ?></h1> <button  onclick=" toggleModal()"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
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
                    <h1 class="text-[1.5rem] m-[0.5rem]">Lista de Maestros</h1> <button  onclick="toggleModal3()" class="bg-blue-500 text-white p-[1rem]">Agregar Maestro</button>
                    <div class="flex gap-[1rem]"><a class="text-blue-700">Home</a>/<a>Dashboard</a> </div>
                </div>

                <div class="bg-white shadow-xl  h-[70vh] w-[80vw] mx-[1rem] content-center rounded-xl p-[1rem] items-center justify-center">

                   <div class="  flex flex-col content-center justify-center items-center overflow-hidden ...">
                     <h1 class="text-[15px] m-[1rem] w-[100%]  border-b-4 ">Informacion de maestros</h1>  <div>

                   <table class=" border bg-slate-200 h-[55vh] w-[78vw] border-slate-500 ... ">
  <thead class="bg-white h-[5vh]">
    <tr>
      <th class="border border-slate-600 ... ">#</th>
      <th class="border border-slate-600 ... ">Nombre</th>
      <th class="border border-slate-600 ... ">Email</th>
      <th class="border border-slate-600 ...">Direccion</th>
      <th class="border border-slate-600 ...">Fec . de Nacimiento</th>
      <th class="border border-slate-600 ...">clase Asignada</th>
      <th class="border border-slate-600 ...  ]">Acciones</th>
      
    </tr>
  </thead>

  <tbody>


   <?php  foreach ($data as $datas) {
extract($datas)
 

        ?>

 <tr>
      <td class="border text-center border-slate-700 ... w-[6vw]"> <?= $id ?></td>
      <td class="border text-center border-slate-700 ..."><?= $nombre ?></td>
      <td class="border text-center border-slate-700 ...  w-[20vw]"><?= $correo ?></td>
      <td class="border text-center border-slate-700 ... w-[20vw]"><?= $direccion ?> </td>
      <td class="border text-center border-slate-700 ...w-[20vw]"><?= $fec_nac ?> </td>
      <td class="border text-center border-slate-700 ..."><?= $clase_asignada ?> </td>
      <td class="border text-center border-slate-700 ..."><button  onclick="toggleModal2()">    
      <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"> 
        <path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg> 
      </button>
    </td>
      
    </tr>


 <?php  }      ?>
 



                </div>



            </main>
        </div>

    </div>
</body>

</html>