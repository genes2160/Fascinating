<body>

<?php
			class Human {
			  public $name;
			  public $occupation;
			  private $distance;
			  private $direction;

			  public function __construct($name="Richard", $occupation="Web Developer", $distance=0, $direction=0) {
				$this->name = $name;
				$this->occupation = $occupation;
				$this->distance = $distance;
				$this->direction = $direction;
				}

			  public function stop() {
				echo "$this->name stopped all activity.<br/>";
				}

			  public function walk ($step) {
				$this->distance += $step;
				echo "$this->name walks $step steps.<br/>";
				}

			  public function turns($degres) {
				$this->direction += $degres;
				echo "$this->name turned $degres degree(s).<br/>";
				}

			  public function status() {
				echo "$this->occupation $this->name walked $this->distance steps since the beginning, and now faces the degree $this->direction.<br/>";
				}
			  }
$Richard = new Human;
$Richard->walk(10);
$Richard->turns(360);
$Richard->status();
$Richard->stop();

?>
<br />
<br />
<br />
<button style="width:320px;" Onclick="check();">Click here</button>

</body>