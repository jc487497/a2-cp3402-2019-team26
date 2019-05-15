<?php
$name = "<p>tuna <script> alert('Gotcha!')</script> ";
$heredoc = <<< EOT
Hello, I am tuan, I am Vietnamese 
EOT;

echo $name . '<br>';
echo $heredoc;
echo phpversion();