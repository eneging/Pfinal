<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="/dist/output.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <main class="bg-gray-800 h-screen flex  justify-start px-11  gap-[4rem]">

        <div class="bg-amber-100 flex  items-center content-center flex-col   justify-around shadow-2xl" >
          
      
        <img class="w-[15vw]  border-white border-2 shadow-2xl " src="/src/logo.jpg " >

            <div class=" bg-gray-600  flex justify-center content-center  items-center flex-col p-[1rem] h-[50vh] ">


                <h1 class="text-white font-mono"> Bienvenido ingresa con tu cuenta</h1>

<form method="post" action="/index.php" class="p-[2rem] gap-[2rem] flex flex-col">

                <div class=" bg-white flex border border-solid h-[5vh] justify-center content-center  items-center p-3">
                    
                <input  type="email" name="correo" placeholder="email"/> 
                
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"> <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z" /> </svg> </div>
               
               
                <div class=" bg-white flex border border-solid h-[5vh]  justify-center content-center p-3 items-center"><input  type="password" name="contrasena" placeholder="password"/> <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                
                <path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z" />
                    </svg>
                 </div>



              <button class="bg-blue-700 text-white h-[5vh]  rounded shadow-inner hover:bg-blue-500" type="submit">ingresar</button>


            </div>
</form>


        </div>

<div class="bg-white w-[90vw]">

<img class="h-screen brightness-75" src="/src/img/retrato-joven-estudiante-observando-mientras-dos-hombres-usan-computadora-portatil-segundo-plano-cesped_650366-3900.avif"/>


</div>


    </main>



</body>

</html>