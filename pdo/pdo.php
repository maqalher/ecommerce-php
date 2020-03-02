/*

PDO -> Php Data Objects


Abstraccion para el acceso a datos

Mysql                       PostgreSQL

mysqli_connect ----------  pg_connect
 
mysqli_query   ----------  pg_query


            $con = newPDO ()
            $con -> query()

* no importa el motor

para mysql es recomendable mysqli_connect

*/