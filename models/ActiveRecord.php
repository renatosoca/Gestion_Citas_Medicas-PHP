<?php

namespace Model;

class ActiveRecord
{
    //BASE DE DATOS
    protected static $db;
    protected static $columnasDB = [];
    protected static $tabla = '';

    //PARA MANEJAR LOS ERRORES 
    protected static $errores = [];

    //CONEXION DATABASE
    public static function setDB($database)
    {
        self::$db = $database;
    }

    //ACTIVE RECORD, PARA ACTUALIZAR O GUARDAR
    public function save()
    {
        //SI EXISTE EL OBJETO EN EL SERVIDOR
        if (!is_null($this->id)) {
            $resul = $this->update();
        } else {
            $resul = $this->insert();
        }
        return $resul;
    }

    //INSERT EN LA DATABASE
    public function insert()
    {
        //DATOS SATINIZADOS
        $atributos = $this->sanitizar();

        $query = " INSERT INTO " . static::$tabla . "( ";
        $query .= join(", ", array_keys($atributos));
        $query .= " ) VALUES ('";
        $query .= join("', '", array_values($atributos));
        $query .= "') ";

        $resultado = self::$db->query($query);

        return $resultado;
    }

    //UPDATE EN LA DATABASE
    public function update()
    {
        $atributos = $this->sanitizar();

        $valores = [];
        foreach ($atributos as $key => $value) {
            $valores[] = "{$key} = '{$value}' ";
        }

        $query = "UPDATE " . static::$tabla . " SET ";
        $query .= join(', ', $valores);
        $query .= " WHERE id= '" . self::$db->escape_string($this->id) . "' ";
        $query .= " LIMIT 1";

        $resultado = self::$db->query($query);

        return $resultado;
    }

    //DELETE EN LA DATABASE
    public function delete()
    {
        $query = "DELETE FROM " . static::$tabla . " WHERE id = " . self::$db->escape_string($this->id);
        $resultado = self::$db->query($query);

        /* if ($resultado) {
            $this->deleteImage();
        } */

        return $resultado;
    }

    public function CambiarEstado()
    {
        $query = "UPDATE " . static::$tabla . " SET Estado= 'Suspendido' WHERE id=" . self::$db->escape_string($this->id);
        $resultado = self::$db->query($query);

        return $resultado;
    }

    public function CambiarEstadoHorario()
    {
        $query = "UPDATE " . static::$tabla . " SET Estado= 'Ocupado' WHERE id=" . self::$db->escape_string($this->id);
        $resultado = self::$db->query($query);

        return $resultado;
    }

    public function CambiarEstadoCita()
    {
        $query = "UPDATE " . static::$tabla . " SET Estado= 'Terminado' WHERE id=" . self::$db->escape_string($this->id);
        $resultado = self::$db->query($query);

        return $resultado;
    }

    public function ActivarEstadoHorario()
    {
        $query = "UPDATE " . static::$tabla . " SET Estado= 'Disponible' WHERE id=" . self::$db->escape_string($this->id);
        $resultado = self::$db->query($query);

        return $resultado;
    }

    //IDENTIFICAR Y UNIR LOS ATRIBUTOS DE LA DB
    public function atributos()
    {
        $atributos = [];

        foreach (static::$columnasDB as $columna) {
            //IGNORAR EL ID Y NO LO AGREGA AL ARRAY DE "ATRIBUTOS"
            if ($columna === 'id') continue;
            $atributos[$columna] = $this->$columna;
        }

        return $atributos;
    }

    //SANITIZAR TODOS LOS DATOS A INGRESAR EN LA DB
    public function sanitizar()
    {
        $atributos = $this->atributos();
        $sanitizado = [];

        foreach ($atributos as $key => $value) {
            $sanitizado[$key] = self::$db->escape_string($value);
        }

        return $sanitizado;
    }

    //OBTENER EL ARRAY DE LOS ERRORES
    public static function getErrores()
    {
        return static::$errores;
    }

    //SUBIDA DE ARCHIVOS
    public function setImagen($img)
    {
        //ELIMINAR IMAGEN PREVIA
        if (!is_null($this->id)) {
            $this->deleteImage();
        }

        //ASIGNAR NUEVA IMAGEN AL SERVIDOR
        if ($img) {
            $this->img = $img;
        }
    }

    //ELIMINAR IMAGEN
    public function deleteImage()
    {
        //COMPROBAR SI EXISTE UNA IMAGEN PREVIA
        $existe = file_exists(CARPETA_IMAGEN . $this->img);

        if ($existe) {
            unlink(CARPETA_IMAGEN . $this->img);
        }
    }

    //VALIDAR QUE LOS INPUTS NO ESTEN VACIOS
    public function validar()
    {
        static::$errores = [];

        return static::$errores;
    }

    //LISTAR TODOS LOS OBJETOS
    public static function all()
    {
        $query = "SELECT * FROM " . static::$tabla . " ";
        $resultado = self::consultSQL($query);

        return $resultado;
    }

    public static function allActivos()
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE Estado='Activo'";
        $resultado = self::consultSQL($query);

        return $resultado;
    }

    public static function allDisponibles()
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE Estado='Disponible'";
        $resultado = self::consultSQL($query);

        return $resultado;
    }

    public static function allEspera()
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE Estado='Espera'";
        $resultado = self::consultSQL($query);

        return $resultado;
    }

    //LISTAR LOS OBJETOS POR LIMITE
    public static function get($cantidad)
    {
        $query = "SELECT * FROM " . static::$tabla . " LIMIT " . $cantidad;
        $resultado = self::consultSQL($query);

        return $resultado;
    }

    //LISTA SOLO 1 OBJETO   
    public static function find($id)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE id = ${id}";

        $resultado = self::consultSQL($query);
        return array_shift($resultado);
    }

    public static function findLogin($id)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE id_login = ${id} ";

        $resultado = self::consultSQL($query);
        return array_shift($resultado);
    }

    public static function findcita($id)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE ID_Cita = ${id} ";

        $resultado = self::consultSQL($query);
        return array_shift($resultado);
    }

    public static function findCitaEspera($id)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE ID_Paciente = ${id} AND Estado='Espera'";

        $resultado = self::consultSQL($query);
        return $resultado;
    }

    public static function findReceta($id)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE ID_DetalleMedico = ${id} ";

        $resultado = self::consultSQL($query);
        return $resultado;
    }

    public static function findCitaTerminado($id)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE ID_Paciente = ${id} AND Estado='Terminado'";

        $resultado = self::consultSQL($query);
        return $resultado;
    }

    public static function findCitaMedico($id)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE ID_Medico = ${id} AND Estado='Espera'";

        $resultado = self::consultSQL($query);
        return $resultado;
    }

    public static function searchUser($name)
    {
        $query = "SELECT * FROM " . static::$tabla . " WHERE email = '${name}' ";

        $resultado = self::consultSQL($query);
        return array_shift($resultado);
    }

    //
    public static function consultSQL($query)
    {
        //consultar la Database
        $resultado = self::$db->query($query);

        //Iterar los resultado
        $array = [];
        while ($registro = $resultado->fetch_assoc()) {
            $array[] = static::createObject($registro);
        }

        //Liberar la memoria
        $resultado->free();

        //retornar resultados
        return $array;
    }

    public static function createObject($registro)
    {
        $objeto = new static;

        foreach ($registro as $key => $value) {
            if (property_exists($objeto, $key)) {
                $objeto->$key = $value;
            }
        }

        return $objeto;
    }

    //SINCRONIZA EL OBJETO EN MEMORIA CON LOS CAMBIOS QUE SE REALIZE
    public function sincronizar($args = [])
    {
        foreach ($args as $key => $value) {
            if (property_exists($this, $key) && !is_null($value)) {
                $this->$key = $value;
            }
        }
    }
}
