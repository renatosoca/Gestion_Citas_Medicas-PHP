<?php
    /* namespace Controller; */

/* use conexion; */
/* use Model\Paciente; */

    require_once "../includes/config/conexion.php";
    require_once "../models/Paciente.php";

    class PacienteController {

        private $paciente;
        private $db;

        function __construct()
        {
            $this-> paciente=array();
            $this-> db = new conexion();
        }

        public function setPaciente($Nombre,$Ape_Materno,$Ape_Paterno,$Genero,$Tip_Doc,$Nro_Doc,$Fecha_Nacimiento,$Telefono,
        $Correo,$Contraseña,$Usuario,$Estado)
        {
            
            $sql="INSERT INTO paciente( Nombre, Ape_Paterno, Ape_Materno, Genero, T_Doc, Nr_Doc, Fecha_Nacimiento
                    , Telefono, Correo, Contraseña, Usuario,Estado) 
            VALUES ('$Nombre','$Ape_Materno','$Ape_Paterno','$Genero','$Tip_Doc','$Nro_Doc','$Fecha_Nacimiento','$Telefono',
            '$Correo','$Contraseña','$Usuario','$Estado')";

            $this->db->conexion()->query($sql);

        }

        public function getPaciente()
        {
            
            $sql=mysqli_query($this->db->conexion(), "SELECT * FROM paciente");

            while ($row= mysqli_fetch_assoc($sql)){

                $pac=new Paciente($row['ID_Paciente'],
                                            $row['Nombre'],
                                            $row['Ape_Paterno'],
                                            $row['Ape_Materno'],                                          
                                            $row['Genero'],
                                            $row['T_Doc'],
                                            $row['Nr_Doc'],
                                            $row['Fecha_Nacimiento'],
                                            $row['Telefono'],
                                            $row['Correo'],
                                            $row['Contraseña'],
                                            $row['Usuario'],
                                            $row['Fecha_Creacion'],
                                            $row['Estado']);
                $this->paciente[]=$pac;
            }

            return $this->paciente;

        }

        public function loginPaciente($Contraseña,$Usuario)
        {
            
            $login=$this->getPaciente();
            for ($i=0; $i < sizeof($login); $i++) { 
                
                if($login[$i]->getUsuario()== $Usuario ){

                    if ($login[$i]->getContraseña()== $Contraseña) {

                        /* $estado = "Disponible"; */
                        /* mysqli_query($this->db->conexion(), "UPDATE usuarios SET estado = '{$estado}' WHERE id={$login[$i]->getId()}");  */  
                        /* $_SESSION['Identifi'] = $login[$i]->getId();
                        $_SESSION['Tipo']=$login[$i]->getTipo();
                        $_SESSION['Usuario'] = $login[$i]->getUsuario(); */
                        echo "entraste";
                        

                    }else{

                        echo "Contraseña incorrecta";
                    }		

                }
	        } 

        }
        
    }
