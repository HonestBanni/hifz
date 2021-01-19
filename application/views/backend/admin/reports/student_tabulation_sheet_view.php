<div>
   <table align="center" width="90%" border="1" style="border: 1px solid black; border-collapse: collapse; line-height: 2.5; text-align: center">
       <thead><tr>
        <th>SN</th>
        <th>Teacher Name</th>
        <th>Total Present</th>
        <th>Total Absent</th>
        </tr>
        </thead>
            <tbody>

        <?php
        if($result):
            $sno = '';
            foreach($result as $rt):
                $sno++;
                $student_data = $this->Crud_model->get_students_signle_tabulation_sheet($rt->teacher_id,'1439-1440');
                    
                    $presnt = 0;
                        $absent = 0;
                        foreach($student_data as $data){
                        $attendancedata = $this->db->get_where(
                                "tbl_hifz_record", 
                                array(
                                        "reg_no" => $data->reg_no, 
                                        "created_at" => date("Y-m-d")))->row();
                        if(!empty($attendancedata)){
                            $presnt += 1;
                        }else{
                            $absent += 1;
                        }
                        }
            ?>
                    <tr>
                    <td><?php echo $sno?></td>
                    <td><?php echo $rt->name?></td>
                    <td><?php   echo $presnt;  ?></td>
                    <td><?php   echo $absent;  ?></td>
                    
                    </tr>
                     <?php
         
            
        endforeach;
          endif;   
        
        ?>
        </tbody> 
    </table>
</div>