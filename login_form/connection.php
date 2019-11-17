 <?php
$conn=mysqli_connect("localhost","root","","task_3");
class connection 
{
    ///insert
    public function search($st)
    {
      $conn=mysqli_connect("localhost","root","","task_3");
             $insert=$st;
        
            $result= mysqli_query($conn,$insert);
            if(mysqli_num_rows($result)>0)
                return "1";
             else 
                return "no";
        
    }
}
?>