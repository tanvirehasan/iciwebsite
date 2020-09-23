  <?PHP 

 //Image uplpad 

    if (isset($_POST['sdone'])) {

      $imtitle = $_POST['stitle'];  
      $slider = $_POST['slider'];     
      $imgname = $_FILES['file']['name'];
      $imgtapname = $_FILES['file']['tmp_name'];
      $sql = "INSERT INTO gallery (imtitle, img, slider)
              VALUES ('$imtitle', '$imgname', '$slider')";
        if ($conn->exec($sql)) {
            move_uploaded_file($imgtapname, '../img/gallery/'.$imgname);
              echo "<div class='alert success'><span class='closebtn'>&times;</span>  
                    <strong>Uploaded!</strong> image Upoaded successfully.</div>" ;            
        }else{ echo "erro"; }     
    }


 //trainers upload
 
  if (isset($_POST['tupload'])) {

      $tname    = $_POST['tname'];  
      $tdetails = $_POST['tdetails']; 
      $email    = $_POST['email'];   
      $tphone   = $_POST['tphone'];  
      $imgname = $_FILES['file']['name'];
      $imgtapname = $_FILES['file']['tmp_name'];

      $sql = "INSERT INTO trainers (name, detalis, timg,Email,Phone)
              VALUES ('$tname', '$tdetails','$imgname ', '$email','$tphone')";
        if ($conn->exec($sql)) {

            move_uploaded_file($imgtapname, '../img/trainar/'.$imgname);
              echo "<div class='alert success'><span class='closebtn'>&times;</span>  
                <strong>Uploaded!</strong> Trainer Add successfully.</div>" ;

        }else{echo "erro"; }     
    }  

//cources upload 

if (isset($_POST['cupload'])) {

    $cname    = $_POST['cname'];
    $ctitle = $_POST['ctitle'];   
    $cdetails = $_POST['cdetails'];     
    $imgname = $_FILES['file']['name'];
    $imgtapname = $_FILES['file']['tmp_name'];

    $sql = "INSERT INTO courses (Coursestitile, Coursesname, Courseditiles,cimg)
            VALUES ('$ctitle', '$cname','$cdetails ', '$imgname')";
      if ($conn->exec($sql)) {

          move_uploaded_file($imgtapname, '../img/'.$imgname);
            echo "<div class='alert success'><span class='closebtn'>&times;</span>  
              <strong>Uploaded!</strong> Course Add successfully.</div>" ;

      }else{echo "erro"; }     
  }   


 //News uplpad 

    if (isset($_POST['news'])) {

      $newstitle1 = $_POST['title'];  
      $detalis = $_POST['detalis'];


      $newstitle = $conn->quote($newstitle1);  



      $newsimg = $_FILES['file']['name'];
      $newsimgname = $_FILES['file']['tmp_name'];
      $sql = "INSERT INTO news (title, detalis, img, date_time)
              VALUES ('$newstitle', '$detalis', '$newsimg', NOW())";
        if ($conn->exec($sql)) {
            move_uploaded_file($newsimgname, '../img/news/'.$newsimg);
              echo "<div class='alert success'><span class='closebtn'>&times;</span>  
                    <strong>Uploaded!</strong> News Post successfully.</div>" ;            
        }else{ echo "erro"; }     
    }



 //partner uplpad 

    if (isset($_POST['pdone'])) {

      $pname = $_POST['pname'];  
      $imgpname = $_FILES['file']['name'];
      $imgtapname = $_FILES['file']['tmp_name'];
      $sql = "INSERT INTO partner (name, img)
              VALUES ('$pname', '$imgpname')";
        if ($conn->exec($sql)) {
            move_uploaded_file($imgtapname, '../img/logo/'.$imgpname);
              echo "<div class='alert success'><span class='closebtn'>&times;</span>  
                    <strong>Uploaded!</strong> Partner add successfully.</div>" ;            
        }else{ echo "erro"; }     
    }


    //Event uplpad 
    if (isset($_POST['event'])) {

      $eventtitle = $_POST['title'];  
      $eventdetalis = $_POST['detalis']; 
      $fromdate = date('Y-m-d',strtotime($_POST['from']));
      $todate = date('Y-m-d',strtotime($_POST['to']));       
      $eventimg = $_FILES['file']['name'];
      $eventimgname = $_FILES['file']['tmp_name'];
      $sql = "INSERT INTO events (eventitle, from_date, to_date, evenimg,ditails)
              VALUES ('$eventtitle', '$fromdate', '$todate','$eventimg','$eventdetalis' )";
        if ($conn->exec($sql)) {
            move_uploaded_file($eventimgname, '../img/blog/'.$eventimg);
              echo "<div class='alert success'><span class='closebtn'>&times;</span>  
                    <strong>Uploaded!</strong> Event Post successfully.</div>" ;            
        }else{ echo "erro"; }     
    }









// image delete

    if (isset($_GET['delet'])) {
          $imageid = $_GET['$id'];

          $dele = "DELETE FROM gallery WHERE imgid='$imageid'";
          if ($conn->exec($dele)) {              
              echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Deleted!</strong> image deleted successfully.</div>" ;             

          }else{
               echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Try Again!</strong> Image not delete.</div>" ;
          }  

    }

  // image trainer
    if (isset($_GET['tdelet'])) {
          $traid = $_GET['$tid'];

          $dele = "DELETE FROM  trainers WHERE trainersid='$traid'";
          if ($conn->exec($dele)) {
              
              echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Deleted!</strong> Trainer deleted successfully.</div>" ;

                    header("location:trainers.php");
             

          }else{
               echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Try Again!</strong> Trainer not delete.</div>" ;
                     header("location:trainers.php");
          }    

    }


  // coursec delete
    if (isset($_GET['cdelet'])) {
          $craid = $_GET['$cid'];

          $dele = "DELETE FROM  courses WHERE Coursesid='$craid'";
          if ($conn->exec($dele)) {
              
              echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Deleted!</strong> Course deleted successfully.</div>" ;

                    header("location:cources.php");
             

          }else{
               echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Try Again!</strong> Course not delete.</div>" ;
                     header("location:trainers.php");
          }    

    }
  


  //about edit

  if (isset($_POST['aboutedit'])) {

      $about = $_POST['about'];
      $sqlupdate = "UPDATE about SET about=:about WHERE id='1'";
      $query = $conn->prepare($sqlupdate);
      $query->bindparam(':about', $about);
      $query->execute();

    if ($query) {
       echo "<div class='alert success'><span class='closebtn'>&times;</span>  
                    <strong>Update!</strong> Update successfully.</div>" ;
     }

  }



  // news delete

    if (isset($_GET['newsdelet'])) {
          $newsid = $_GET['$nid'];

          $dele = "DELETE FROM news WHERE id='$newsid'";
          if ($conn->exec($dele)) {              
              echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Deleted!</strong> News deleted successfully.</div>" ;             

          }else{
               echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Try Again!</strong> News not delete.</div>" ;
          }  

    }


    // event delete

    if (isset($_GET['eventdelet'])) {
          $newsid = $_GET['$eid'];

          $dele = "DELETE FROM events WHERE evenid='$newsid'";
          if ($conn->exec($dele)) {              
              echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Deleted!</strong> News deleted successfully.</div>" ;             

          }else{
               echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Try Again!</strong> News not delete.</div>" ;
          }  

    }


    // partners delete

    if (isset($_GET['pdelet'])) {
          $pid = $_GET['$id'];

          $dele = "DELETE FROM partner WHERE partnerid='$pid'";
          if ($conn->exec($dele)) {              
              echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Deleted!</strong> Logo deleted successfully.</div>" ;             

          }else{
               echo "<div class='alert'><span class='closebtn'>&times;</span>  
                    <strong>Try Again!</strong> Logo not delete.</div>" ;
          }  

    }












?>







<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>