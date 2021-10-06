    <?php
    class Persona
    {

        private $name;
        private $surname;
        private $adress;
        private $comments;
        private $foto;

        public function __set($propiedad, $valor)
        {
            if (property_exists($this, $propiedad)) {
                return $this->$propiedad = $valor;
            }
            return null;
        }
        public function __get($propiedad)
        {
            if (property_exists($this, $propiedad)) {
                return $this->$propiedad;
            }
            return null;
        }
    }
