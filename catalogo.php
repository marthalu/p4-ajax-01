<html>
    
    <head>
        <title>
            Catalogo de perfumes
        </title>
    </head>
    <body>
        <h1>Catalogo Perfumes</h1>
        <form action="catalogo.php">
            <select name="buscargenero">
                <option value="hombre">Hombre</option>
                <option value="mujer">Mujer</option>
            </select>
            <input type="submit" value="buscar" name="buscar">
            <br/>
            <br/>
            
            <input type="submit" value="Ver todos" name="verTodos">
        </form>

        <?php
            $filtro = "";
            if(isset($_REQUEST["buscar"])){
                $buscargenero = $_REQUEST["buscargenero"];
                $filtro = " WHERE genero='$buscargenero'";
            }
            
            if(isset($_REQUEST["verTodos"])){                
                $filtro = "";
            }
               

            $dbhost     = "localhost";
            $dbuser		= "root";
            $dbpass		= "";
            $dbname		= "perfumeria";
            
            $conn = new PDO("mysql:host=$dbhost;dbname=$dbname",$dbuser,$dbpass);
            $sql = "SELECT * FROM compra $filtro";
            $q = $conn->prepare($sql);
            $q->execute();
            

            $data = $q->fetchAll(PDO::FETCH_ASSOC);
            
         
        
           echo json_encode($data);
           
        ?>        
    </body>
</html>