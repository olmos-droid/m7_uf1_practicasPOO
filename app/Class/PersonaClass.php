    <?php
    class Persona
    {

        private $name;
        private $surname;
        private $adress;
        private $comments;
        private $foto;

	function get_name(){
        return $this->name;
    }
    function get_surname(){
        return $this->surname;
    }
    function get_adress(){
        return $this->adress;
    }
    function get_comments(){
        return $this->comments;
    }
    function get_foto(){
        return $this->foto;
    }

    // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function set_surname($surname){
    return $this->surname= $surname;
}
function set_adress($adress){
    return $this->adress=$adress;
}
function set_comments($comments){
    return $this->comments;
}
function set_foto($foto){
    return $this->foto=$foto;
}
    
    
    
    }
	