<?php
#clase: Es un modelo que se utiliza para crear objetos
#que comparten un mismo comportamiento, estado o entidad.

class Automovil{
    #propiedades: son las caracteristicas que puede tener un objeto 
    public $marca;
    public $modelo;

    #metodo: Es el algoritmo asociado a un objeto que indica 
    # la capacidad de lo que este puede hacer
    # - metodo se le llama a las funciones de una clase en POO
    # - funciones a los algoritmos de la programacion tradicional o imperativ

    public function mostrar(){
        echo "Hola este auto es un $this->marca, modelo $this->modelo <br>";
    }
}



#objeto: Es una entidad provista de metodos o mensaje a los cuales
# responden propiedades con valores concretos.

# los objetos se crean instanciando la clase
$a=new Automovil();
$a->marca="Toyota";
$a->modelo="prado";
$a->mostrar();

$a=new Automovil();
$a->marca="chevrolet";
$a->modelo="camaro";
$a->mostrar();

#Abtraccion: Poder llegar a nuevos tipos de datos 
# el que se requiera se puede crear.
# Encapsulamiento: organizar el código en grupos lógicos.
# Ocultamiento: ocultar los detalles de la implementacion
# y mostrar solo los detalles que sean necesarios para 
# la ejecución del programa.


?>

