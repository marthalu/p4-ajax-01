<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>
            Perfumeria parfums
        </title>
    </head>
    <body>
       <main>
       Esta es la vista de los productos 
       <form>
       <input type="button" value= "ver productos" onclick="traerProductos()" />
       </form>
       </main>
       <script>
       function traerProductos(){
         let objetoXHR = new XMLHttpRequest();
         objetoXHR.onreadystatechange =function(){
             if(objetoXHR.readyState == 4){
                alert('el objetoXHR ha vuelto del servidor');
             }
         }
         objetoXHR.open('GET', 'catalogo.php');
         objetoXHR.send();

       }
       </script>
    </body>
</html>