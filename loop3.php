<?php

//for loop

echo"<table border='2'>";
for($i=0;$i<100;$i++)
{
    echo"<tr>";
    if($i%2==0)
    {
        echo "<td bgcolor='red'><br/>$i</td>";
    }
    else
    {
        echo "<td bgcolor='blue'><br/>$i</td>";
    }
    
    echo"</tr>";
}
echo"</table>";


