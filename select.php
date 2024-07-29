<?php
if(isset($_POST["id"]))  
{
    $output = '';

    $connect = mysqli_connect("localhost", "root", "", "ajax");  
    $query = "SELECT * FROM sample WHERE id = '".$_POST["id"]."'";  
    $result = mysqli_query($connect, $query);  


    $output .= '  
    <div class="table-responsive">  
         <table class="table table-bordered">';  
    while($row = mysqli_fetch_array($result))  
    {  
         $output .= '  
               <tr>  
                    <td width="30%"><label>ID</label></td>  
                    <td width="70%">'.$row["id"].'</td>  
               </tr>  
              <tr>  
                   <td width="30%"><label>Name</label></td>  
                   <td width="70%">'.$row["fullname"].'</td>  
              </tr>  
              ';  
    }  
    $output .= "</table></div>";  
    echo $output;  
}