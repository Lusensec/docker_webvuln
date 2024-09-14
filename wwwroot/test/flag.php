class Flag{
public $name;
public $her;
function __wakeup(){
$this->her=md5(rand(1, 10000));
if ($this->name===$this->her){
include('flag.php');
echo $flag;
}
}
}