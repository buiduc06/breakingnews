<?php 
require_once '../models/TinTuc.php';
$showTinTuc1=TinTuc::findOne($id);
 if ($_FILES['txhinhanh']['name']!=NULL) {
            
        
        //phần config upload hình ảnh
        if (isset($_FILES['txhinhanh']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['txhinhanh']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }elseif ($_FILES['txhinhanh']['type'] != 'image/jpeg' && $_FILES['txhinhanh']['type'] != 'image/png') {
                echo "bạn chỉ được upload file dưới dạng PNG và JPEG";
            }elseif ($_FILES['txhinhanh']['size']>2*1024*1024) {
                echo "bạn chỉ được tải lên file >2 MB";
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['txhinhanh']['tmp_name'], '../image/'.$_FILES['txhinhanh']['name']);
                $imaup['ok']=$_FILES['txhinhanh']['name'];
                echo 'File Uploaded Thành Công';
            }
        }else{
                $imaup['ok']="$showTinTuc1->Hinh";
        }

        }else{
                $imaup['ok']="$showTinTuc1->Hinh";
        }

 ?>