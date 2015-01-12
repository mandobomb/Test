<?php
$sid = 'AC0e71c835f9ba6c3b33012c2f3e5b0cf0';
$token = 'f6e351cf827fd248ca6e96cf9c0bccb6';
 
    // make an associative array of callers we know, indexed by phone number
    $people = array(
        "+19416611626"=>"Grant",
        "+14158675310"=>"Boots",
        "+14158675311"=>"Virgil",
        "+14158675312"=>"Marcel"
    );
     
    // if the caller is known, then greet them by name
    // otherwise, consider them just another monkey
    if(!$name = $people[$_REQUEST['From']])
        $name = "Monkey";
         
    // now greet the caller
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Say>Hello <?php echo $name ?>.</Say>
    <Play>http://demo.twilio.com/hellomonkey/monkey.mp3</Play>
    <Gather numDigits="1" action="hello-monkey-handle-key.php" method="POST">
        <Say>To speak to a real monkey, press 1.  Press any other key to start over.</Say>
    </Gather>
</Response>
