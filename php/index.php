<?php
  require_once 'token_utils.php';

  $headers = array('alg'=>'HS256','typ'=>'JWT');
  $payload = array('id'=>'001','myName'=>'likit', 'exp'=>(time() + 5));//1= 1วินาที 

  $jwt = generate_token($headers, $payload);

  echo "<a href='page2.php?en=$jwt'>Click</a>";
?>