// new class
class Character{
    private $health;
    private $rage;

    // setHealth
    public function setPseudo($pseudo){
        $this -> pseudo = strtolower($pseudo);
    }
    // getHealth
    public function getHealth(){
        return $this -> health;
    }
}