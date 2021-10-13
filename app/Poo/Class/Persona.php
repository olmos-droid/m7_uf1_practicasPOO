    <?php
    class Persona
    {

        private $name;
        private $surname;
        private $address;
        private $comments;
        private $foto;

        public function setFoto($foto)
        {
            $this->foto = $foto;
        }
        public function getFoto()
        {
            return $this->foto;
        }
        public function getName()
        {
            return $this->name;
        }
        public function setName($valor)
        {
            $this->name=$valor;
        }
        public function __set($propiedad, $valor)
        {
            if (property_exists($this, $propiedad)) {
                $this->$propiedad = $valor;
            }
        }
        public function __get($propiedad)
        {
            if (property_exists($this, $propiedad)) {
                return $this->$propiedad;
            }
        }
    }
