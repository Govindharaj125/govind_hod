<!DOCTYPE html>
<html lang="en">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>CSI St Mark's Church</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>/admin/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/admin/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url(); ?>/admin/css/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url(); ?>/admin/css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url(); ?>/admin/css/morris.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url(); ?>/admin/css/animate.css" rel="stylesheet">

    <!-- Data-table CSS -->
    <link href="<?php echo base_url(); ?>/admin/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/admin/css/dataTables.dateTime.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>/admin/css/style.css" rel="stylesheet">

    <!-- DateRangePicker CSS -->
    <link href="<?php echo base_url(); ?>/admin/css/daterangepicker.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/admin/css/buttons.dataTables.min.css" rel="stylesheet">

    <!-- color CSS -->
    <link href="<?php echo base_url(); ?>/admin/css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- Success Alert CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>

    <!-- Wrapper Start -->
    <div id="wrapper" >


        <?php echo $this->include('admin/layouts/include/menu'); ?>


        <?php // $this->include('layouts/include/banner');
        ?>
         
  <!-- Start main-content -->
  
                <?php echo $contents; ?>
            
  
        <?php //$this->renderSection('content')
        ?>

    </div>
    <!-- Wrapper END -->
    <?php //echo $this->include('layouts/include/footer'); ?>




   
<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<!-- jQuery -->
    <!-- <script src="<?php echo base_url(); ?>/admin/js/jquery.min.js"></script> -->
    <script src="<?php echo base_url(); ?>/admin/js/jquery-3.5.1.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="/admin/js/tether.min.js"></script> -->
    <script src="<?php echo base_url(); ?>/admin/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>/admin/js/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url(); ?>/admin/js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url(); ?>/admin/js/waves.js"></script>
    <!--Counter js -->
    <!-- <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script> -->
    <!-- <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script> -->
    <!--Morris JavaScript -->
    <script src="<?php echo base_url(); ?>/admin/js/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/morris.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>/admin/js/custom.min.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/dashboard1.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url(); ?>/admin/js/jquery.sparkline.min.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/jquery.charts-sparkline.js"></script>
    <script src="<?php echo base_url(); ?>/admin/js/jquery.toast.js"></script>

    <script src="<?php echo base_url(); ?>/admin/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url(); ?>/admin/js/moment.min.js"></script>

    <script src="<?php echo base_url(); ?>/admin/js/dataTables.dateTime.min.js"></script>

    <script src="<?php echo base_url(); ?>/admin/js/daterangepicker.js"></script>

    <script src="<?php echo base_url(); ?>/admin/js/dataTables.buttons.min.js"></script>

    <script src="<?php echo base_url(); ?>/admin/js/buttons.html5.min.js"></script>

    <script src="<?php echo base_url(); ?>/admin/js/jszip.min.js"></script>

    <script src="<?php echo base_url(); ?>/admin/js/pdfmake.min.js"></script>
    
    <script src="<?php echo base_url(); ?>/admin/js/vfs_fonts.js"></script>

    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    <script>
        $(document).ready(function() {
            <?php if(session()->getFlashdata('status')) { ?>
            alertify.set('notifier','position', 'top-right');
            alertify.success("<?= session()->getFlashdata('status') ?>");
            <?php } ?>
        })
    </script>

    <script type="text/javascript">
   
    $(document).ready(function() {
        <?php if($session->getFlashdata('error')!=''){ ?>
        $.toast({
            heading: 'Something Wrong',
            text: '<?echo $session->getFlashdata('error');?>',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
        <?php }?>
        <?php if($session->getFlashdata('success')!=''){ ?>
        $.toast({
            heading: 'Success',
            text: '<?echo $session->getFlashdata('success');?>',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'info',
            hideAfter: 3500,
            stack: 6
        })
        <?php }?>
    });

    // $(document).ready( function () {
    // $('#dataTable').DataTable({
    //     "pageLength": 25
    //     });
    // } );

    var column_no = 0;

    var table;
	$(document).ready(function() {
        $('#dateBased').hide();
        $('#stringBased').show()
		table = $('#example').DataTable({
			pageLength: 25,
			// dom: 'lrtip',
            autoWidth: false,
            dom: 'Bfrtip',
        buttons: [
            {
            extend: 'excelHtml5',
            text: 'Export to excel',
            className: 'btn btn-default btn-xs'
            }
            // 'copyHtml5',
           // 'excelHtml5',
            // 'csvHtml5',
            // 'pdfHtml5'
        ],
		});
		
		$('#ddlSearch').on('change',function(){
            $( '#txtSearch' ).val('');
            $( '#min' ).val('');
            $( '#max' ).val('');
            table.columns([column_no]).search('')
                        .draw();
                         
			column_no = Number($(this).val());
           
            if(Array(3,4).indexOf(column_no)>-1){
                $('#dateBased').show();
                $('#stringBased').hide()
                //table.draw();;
               // $.fn.dataTable.ext.search.pop()  
            }
            else{
                $('#dateBased').hide();
            $('#stringBased').show()   
            }
		});
		
		$( '#txtSearch' ).on( 'input', function () {
			// if ( table.columns([column_no]).search() !== $( '#txtSearch' ).val() ) {
			// 	table.columns([column_no]).search( $( '#txtSearch' ).val() ).draw();
			// }
            if ( table.columns([column_no]).search() !== $( '#txtSearch' ).val() ) {

                    if($( '#txtSearch' ).val()==''){
                        table.columns([column_no]).search($( '#txtSearch' ).val())
                        .draw();
                    }
                    else{
                        console.log('tttt',column_no,'==',$('#txtSearch' ).val())
                        //.search("^" + $( '#txtSearch' ).val()+ "$", true, false, true)
                        if(Array(7,8).indexOf(column_no)>-1){
                        table.columns([column_no]).search("^" +  $( '#txtSearch' ).val() + "$", true, false, true)
                        .draw();
                        }
                        else{
                            table.columns([column_no]).search(  $( '#txtSearch' ).val())
                        .draw();
                        }
                    }

            }
		} );
		
		
	});

    // $(document).ready(function() {
    // // Setup - add a text input to each footer cell
    // $('#example tfoot th').each( function () {
    //     var title = $(this).text();
    //     $(this).html( '<input type="text" id="'+title+'" placeholder="'+title+'" />' );
    // } );
 
    // // DataTable
    // var table = $('#example').DataTable({
    //     pageLength: 25,
    //     // bFilter: false,
    //     dom: 'Bfrtip',
    //     buttons: [
    //         // 'copyHtml5',
    //         'excelHtml5',
    //         // 'csvHtml5',
    //         // 'pdfHtml5'
    //     ],
    //     initComplete: function () {
    //         // Apply the search
    //     //     $('#DOB').daterangepicker({
    //     //     autoApply: true,
    //     //     //startDate: '12/01/2020',
    //     //    // endDate: '12/10/2021'
    //     // });

    //         this.api().columns().every( function () {
    //             var that = this;
 
    //             $( 'input', this.footer() ).on( 'keyup change clear', function () {
    //                 console.log(' this.value', this.value)
    //                 if ( that.search() !== this.value ) {

    //                     if(this.value==''){
    //                         that.search(this.value)
    //                         .draw();
    //                     }
    //                     else{
    //                     that
    //                         .search("^" + this.value + "$", true, false, true)
    //                         .draw();
    //                     }
    //                 }
    //             } );
    //         } );
    //     }
    // });
 
    // });

 
    </script>
    <script>
        var minDate, maxDate;
 
 // Custom filtering function which will search data in column four between two values

  
 $(document).ready(function() {
     // Create date inputs
     minDate = new DateTime($('#min'), {
        // format: 'MMMM Do YYYY'
        format: 'D-MM'
     });
     maxDate = new DateTime($('#max'), {
        // format: 'MMMM Do YYYY'
        format: 'D-MM'
     });
  
  
     // DataTables initialisation
     var table = $('#example').DataTable();
  
     // Refilter the table
     $('#min, #max').on('change', function () {        
         table.draw();
     });


     $.fn.dataTable.ext.search.push(
     function( settings, data, dataIndex ) {
         var min = minDate.val();
         var max = maxDate.val();
         
         var dob = new Date( data[column_no] );
  
  if(min !== null && max!== null){
      let [minDay,minMonth]=$('#min').val().split('-');
      let [maxDay,maxMonth]=$('#max').val().split('-');
      
      if(minMonth <= dob.getMonth()+1 &&  dob.getMonth()+1<=maxMonth && minDay<=dob.getDate() && dob.getDate()<=maxDay ){
        //console.log('test',column_no, data[column_no],dob.getMonth(), dob.getDate())
        //console.log(minMonth,'>=', dob.getMonth()+1 ,'&&',  dob.getMonth()+1,'<=',maxMonth ,'&&', minDay,'<=',dob.getDate() ,'&&', dob.getDate(),'>=',maxDay)
       //   console.log('minDate',$('#min').val(),minDay,dob.getDate(),'==',new Date(min).getDate())
          return true;
      }
  }
         if (
             ( $( '#min' ).val()=='' &&  $( '#max' ).val()=='') ||
             ( min === null && max === null ) ||
             ( min === null && dob <= max ) ||
             ( min <= dob   && max === null ) ||
             ( min <= dob   && dob <= max )
         ) {
             return true;
         }
         return false;
     }
 );
 });

 
    </script>
    <!--Style Switcher -->
    <!-- <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script> -->
</body>

</html>