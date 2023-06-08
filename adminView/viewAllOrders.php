<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Id Ticket</th>
        <th>Nama Lengkap</th>
        <th>Jadwal</th>
        <th>Anak-anak</th>
        <th>Remaja</th>
        <th>Dewasa</th>
        <th>Kode Wahana</th>
        <th>Total Harga</th>
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from tiket";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["kode_tiket"]?></td>
          <td><?=$row["nama_lengkap"]?></td>
          <td><?=$row["jadwal"]?></td>
          <td><?=$row["anak_anak"]?></td>
          <td><?=$row["remaja"]?></td>
          <td><?=$row["dewasa"]?></td>
          <td><?=$row["kode_wahana"]?></td>
          <td><?=$row["total_harga"]?></td>
        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>