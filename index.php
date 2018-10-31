<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class StopWatch{
    private $startTime;
    private $endTime;
    public function start()
    {
        $this->startTime = date('Y-M-d h:m:s');
    }
    public function getStarTime(){
        return $this->startTime;
    }
    public function stop(){
        $this->endTime = date('Y-M-d h:m:s');
    }
    public function getStopTime(){
        return $this->endTime;
    }
    public function getElapsedTime(){
        return strtotime($this->endTime) - strtotime($this->startTime);
    }
}
$stopwatch = new StopWatch();
$stopwatch->start();
echo $stopwatch->getStarTime() . '<br/>';
sleep(3);
$stopwatch->stop();
echo $stopwatch->getElapsedTime();
?>
</body>
</html>