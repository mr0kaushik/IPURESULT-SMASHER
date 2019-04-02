<?php

/**
 * @author mr0kaushk
 * @copyright 2019 IPURESULT-SMASHER
 */

$server = "localhost";
$user = "root";
$password = "";
$dbname = "student_cse";


$conn = mysqli_connect($server, $user, $password, $dbname);
//$conn = mysqli_connect("localhost", "root", "", "student_cse");

if(isset($_POST['search_post_btn']))
{
    $id = $_POST['id'];
    $query = "SELECT * FROM cse_4th_sem_student WHERE Roll_Number=$id";
    
    $query_run = mysqli_query($conn, $query);
    
    
    $dataArray = [];
    if($query_run)
    {
        
        
        
        if($row = mysqli_fetch_assoc($query_run)){

            $keylen = sizeof($row);
            //$keylen = keys($row.length);
            echo "<table id=\"stu_data_table\"><tbody>";
                
                echo "<tr>";
                    echo "<td class=\"center\">NAME </td>";
                    echo "<td class=\"center\">" . $row['Name'] . "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class=\"center\">ROLL NUMBER </td>";
                    echo "<td class=\"center\">".$row['Roll_Number'] ."</td>";                    
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class=\"center\">TOTAL </td>";
                    echo "<td class=\"center\">".$row['Total'] ."</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class=\"center\">PERCENTAGE </td>";
                    echo "<td class=\"center\">".$row['percentage'] ."</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td class=\"center\">CREDIT </td>";
                    echo "<td class=\"center\">".$row['Credit']."</td>";
                echo "</tr>";
                
            echo "</tbody></table>";
            echo "<table id=\"sem_table\"><tbody>";
                echo "<tr>";
                    echo "<th width='2%'> Sl No </th>";

                    echo "<th width='5%'> Paper Name </th>";

                    echo "<th width='2%'> Internal </th>";

                    echo "<th width='2%'> External </th>";

                    echo "<th width='2%'> Total </th>";
                echo "</tr>";


                for($i = 1;$i <= ($keylen-5)/4;$i++){
                    $strforcode = 'sub_' . $i . '_code';
                    $query_for_subj = "SELECT * FROM cse_4th_paper WHERE Paper_Id=$row[$strforcode]";
                    $query_for_subj_run = mysqli_query($conn, $query_for_subj);
                    
                    $strforinternal = 'sub_' . $i . '_int';
                    $strforexternal = 'sub_' . $i . '_ext';
                    $strfortotal = 'sub_' . $i . '_total';

                    echo "<tr>";
                        echo "<td class=\"center\">" .$i. "</td>";
                        if($subj_row = mysqli_fetch_assoc($query_for_subj_run)){
                            echo "<td>" . $subj_row['Paper_Name'] . "</td>"; 
                        }
                        echo "<td class=\"center\">" . $row[$strforinternal] . "</td>";
                        echo "<td class=\"center\">" . $row[$strforexternal] . "</td>";
                        echo "<td class=\"center\">" . $row[$strfortotal] . "</td>";
                    echo "</tr>";
                }

            echo "</tbody></table>";



            echo "</tbody></table>";
                                    //echo json_encode($row);
                                    
                                    
            //<script type="text/javascript">var jArray =<?php echo json_encode($row); ;</script>
        }
        
        else{
            echo "DATA NOT FOUND";
        }
    }
    else{
      echo "Please Enter Input";
    }
}


//<script type="text/javascript" src="test.js"></script>

?>


