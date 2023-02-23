<?php $active="Vendor Details";?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vendor Pyament</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Vendor Paymemt</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!--<h2 class="m-3">Vendors Payments</h2>-->
        <div class="row">
             <?php
                         $paymant=0;
                            $panding=0;
                            $total=0;
                        foreach($allvendor as $data)
                        {
                            
                            if($data->payment=="No" && $data->status =="APPROVED")
                            {
                                 $paymant= $paymant+$data->affiliate;
                            }
                            if($data->payment=="No" && $data->status =="UNAPPROVED")
                            {
                                $panding=$panding+$data->affiliate;
                            }
                            if($data->payment=="Yes" && $data->status =="APPROVED")
                            {
                                $total=$total+$data->affiliate;
                            }
                        }
                ?>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>$<?php echo $paymant;?></h3>

                <p>UNAPPROVED Payment</p>
              </div>
              <div class="icon">
                <i class="fas fa-dollar-sign"></i>
              </div>
              <!--<a href="<?php echo base_url()?>Admin/vendorlist" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>$<?php echo $panding;?></h3>

                <p>APPROVED Payment</p>
              </div>
              <div class="icon">
                  <i class="fas fa-money-check-alt"></i>
              </div>
              <!--<a href="<?php echo base_url()?>Admin/vendorlist" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>$<?php echo $total;?></h3>

                <p>Total Received</p>
              </div>
              <div class="icon">
                <i class="fas fa-hand-holding-usd"></i>
              </div>
              <!--<a href="<?php echo base_url()?>Admin/vendorlist" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>-->
            </div>
          </div>
        </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title" style="display: inline;">vendor Payment Details List</h3>
                
                <div class="card-tools">
                  <ul class="pagination pagination-sm float-right">
                        <!--<button type="button" class="btn btn-block btn-primary btn-sm float-right mr-5" data-toggle="modal" data-target="#exampleModal">Add</button>-->
                        <?php echo @$page;?>
                    <!--<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>-->
                    <!--<li class="page-item"><a class="page-link" href="#">1</a></li>-->
                    <!--<li class="page-item"><a class="page-link" href="#">2</a></li>-->
                    <!--<li class="page-item"><a class="page-link" href="#">3</a></li>-->
                    <!--<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>-->
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example" class="table table-bordered table-responsive table-striped">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Vendor</th>
                      <th>Date</th>
                      <th>Affiliate</th>
                      <th>payment</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      $paymant=0;
                            $panding=0;
                            $total=0;
                        foreach($allvendor as $data)
                        {
                            
                            if($data->payment=="No" && $data->status =="APPROVED")
                            {
                                 $paymant= $paymant+$data->affiliate;
                            }
                            if($data->payment=="No" && $data->status =="UNAPPROVED")
                            {
                                $panding=$panding+$data->affiliate;
                            }
                            if($data->payment=="Yes" && $data->status =="APPROVED")
                            {
                                $total=$total+$data->affiliate;
                            }
                            ?>
                            <tr>
                                <td><?php echo $data->id;?></td>
                                <td><a href="<?php echo base_url()?>Staff/updatevendorbyid?id=<?php echo $data->Vid;?>"><?php echo $data->Vid;?></a></td>
                                <td><?php echo $data->createdate;?></td>
                                <td>$<?php echo $data->affiliate;?></td>
                                <td><?php echo $data->payment;?></td>
                                
                                <td>
                                   
                                    <?php if( $data->status =="APPROVED")
                                    {
                                    ?>
                                    <span class="badge bg-success"><i class="far fa-check-circle"></i><?php echo $data->status;?></span>
                                    <?php
                                        
                                    }
                                    else
                                    {?>
                                        <span class="badge bg-danger"><i class="fas fa-ban"></i><?php echo $data->status;?></span>
                                    <?php
                                    }?>
                                </td>
                                <!--<td>-->
                                <!--    <a class="btn btn-block btn-primary" target='_blank' href="<?php echo base_url();?>Staff/printPayment?id=<?php echo base64_encode($data->id);?>">Print</a>-->
                                <!--</td>-->
                                
                            
                            </tr>
                            <?php
                        }
                      ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <?php echo @$page;?>
                  <!--<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>-->
                  <!--<li class="page-item"><a class="page-link" href="#">1</a></li>-->
                  <!--<li class="page-item"><a class="page-link" href="#">2</a></li>-->
                  <!--<li class="page-item"><a class="page-link" href="#">3</a></li>-->
                  <!--<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>-->
                </ul>
                
              </div>
              <?php echo "Payment : $". $paymant;
                    echo  "Panding: $".$panding;
                    echo  "Total payment: $".$total;?>
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script>
    function deleteVendor($vid) {
         //alert($vid);
         if(confirm("Do You want to Delete?")) 
         {
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4 && this.status == 200)
                {
                   location.reload();
                }
            };
            xhttp.open("GET", "<?php echo base_url(); ?>Admin/deleteVendor?id=" + $vid, true);
            xhttp.send();
             
         }
    }
    
     function EnquiryPopUp(id)
     {
      var x = document.getElementById("recipient-id");
      x.setAttribute("value", id);
      var x = document.getElementById("recipient-name");
      x.innerHTML=email;
     }
</script>