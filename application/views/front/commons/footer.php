<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script src="<?php echo base_url('assets/js/Chart.min.js'); ?>"></script>
<!--    <script src="<?php echo base_url('assets/js/slick.js'); ?>"></script>-->
<script src="<?php echo base_url('assets/js/custom.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/event.js'); ?>"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/6.3.5/firebase-firestore.js"></script>  
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.3.5/firebase.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.js"></script>
   <script>
  $(function() {
    $( "#date_range_trans" ).datepicker({
  		  		format: "yyyy-mm-dd",
                language: "fr",
                changeMonth: true,
                changeYear: true
});
  });
  </script>
<script type="text/javascript">
    $("body").on("click", "#pdf", function () {
        alert('hello');
        var url = $(this).data('url');
        $.post(url, {}, function (res) {
            alert(res.content_wrapper)
        });
    });
</script>

<script>

    var firebaseConfig = {
        apiKey: "AIzaSyB-QVWeLO14-BOhuJ192NrR8bf8rR2CyE4",
        authDomain: "nala-interface-debug.firebaseapp.com",
        databaseURL: "https://nala-interface-debug.firebaseio.com",
        projectId: "nala-interface-debug",
        storageBucket: "nala-interface-debug.appspot.com",
        messagingSenderId: "362059733530",
        appId: "1:362059733530:web:9128cad932d80f9a"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    var colorui = $('#colorui').val();
    $(document).on('click', '#logout', function (evt) {
        evt.preventDefault();
        firebase.auth().signOut().then(function () {
            window.location = colorui;
        }).catch(function (error) {
        });
        var url = $('#unset_session').val();
        $.post(url, '', function (out) {

        });
    });
    $("body").append('<div class="loaddata"></div>');
    $(".loaddata").fadeIn("slow");
    $(document).ready(function () {
        var db = firebase.firestore();
        var uid = '<?php echo $user_uid; ?>';
        $(document).on('change', '#date_range_trans', function (){
            var date_trans = $(this).val();
           
            
             db.collection("transactions-staging").where("user", "==", uid)
                .get()
                .then(function (querySnapshot) {
                    var result = 0;
                    var result1 = 0;
                    var result2 = 0;
                    var today = new Date();
                    var dateee = today.getMonth();
                    var a = 0;
                   
                    var arr = [];
                    
                    querySnapshot.forEach(function (doc) {
                        var time = doc.data().timestamp
                        var type = doc.data().type
                        var hoverServiceId = doc.data().hoverServiceId
                         var status = doc.data().status

                        var date = new Date(time);
                       lastdate1 = date.toISOString().slice(0,10);
                        year = date.getFullYear();
                       month = date.getMonth()+1;
                       dt = date.getDate();
                        if (dt < 10) {
                       dt = '0' + dt;
                        }
                       if (month < 10) {
                       month = '0' + month;
                       }

                      lastdate = dt+'-' + month + '-'+year;
 						
                       	
                        var month = date.getMonth();
                        if (doc.data().amount != '') {
                            var amount = parseInt(doc.data().amount);
                            result = amount + result;
                        }
                        if (doc.data().amount != '' && month == dateee && (type == 'send_money' || type == 'cash_out' || type == 'pay_bill' || type == 'airtime')) {
                            var amount = parseInt(doc.data().amount);
                            result1 = amount + result1;
                        }
                        if (doc.data().amount != '' && month == dateee && (type == 'rec_money')) {
                            var amount = parseInt(doc.data().amount);
                            result2 = amount + result2;
                        }
                        if (doc.data().amount != '' && month == dateee  && lastdate1 == date_trans && (type == 'send_money' || type == 'cash_out')) {
                             
                            var all = doc.data();
                            arr[a] = doc.data();

                            a++;
                           
                        }
                         

                    });
                    var url = $('.send_money_trans').data('url');
                    $.post(url, {arr: arr}, function (res) {
                        $(".send_money_trans").html(res.content_wrapper);
                    })
                    $("#trans_date").html(dateee);
                    $("#trans_date1").html(dateee);
                    $("#trans_date2").html(dateee);
                    $("#trans_date3").html(dateee);
                    $("#last_transaction").html(lastdate);
                    $("#total-tsh").html(result);
                    $("#total-Outtsh").html(result1);
                    $("#total-Intsh").html(result2);
                    $(".loaddata").fadeOut("slow");
                })
                .catch(function (error) {
                    console.log("Error getting documents: ", error);
                });
        } );
        $(document).on('click', '.fiter_trans li', function () {
        	// var span_cls = $(this).parent("ul").parent("div").children("button").children("span");
        	// $(".rightBx_inr .forborder span").hasClass("active").html("hello");
        	 var hoverIdd = $(this).attr("data-id");
               var al_id =$(this).attr("data-id");
                 var all_id =$(this).attr("data-id");
             var trans_type = $(this).attr("data-id");
             var trans_status = $(this).attr("data-id");
             // $(span_cls).addClass("active");
             db.collection("transactions-staging").where("user", "==", uid)
                .get()
                .then(function (querySnapshot) {
                    var result = 0;
                    var result1 = 0;
                    var result2 = 0;
                    var today = new Date();
                    var dateee = today.getMonth();
                    var a = 0;
                   
                    var arr = [];
                    
                    querySnapshot.forEach(function (doc) {
                        var time = doc.data().timestamp
                        var type = doc.data().type
                        var hoverServiceId = doc.data().hoverServiceId
                         var status = doc.data().status

                        var date = new Date(time);
                        year = date.getFullYear();
                       month = date.getMonth()+1;
                       dt = date.getDate();
                        if (dt < 10) {
                       dt = '0' + dt;
                        }
                       if (month < 10) {
                       month = '0' + month;
                       }

                      lastdate = dt+'-' + month + '-'+year;
                        var month = date.getMonth();
                        if (doc.data().amount != '') {
                            var amount = parseInt(doc.data().amount);
                            result = amount + result;
                        }
                        if (doc.data().amount != '' && month == dateee && (type == 'send_money' || type == 'cash_out' || type == 'pay_bill' || type == 'airtime')) {
                            var amount = parseInt(doc.data().amount);
                            result1 = amount + result1;
                        }
                        if (doc.data().amount != '' && month == dateee && (type == 'rec_money')) {
                            var amount = parseInt(doc.data().amount);
                            result2 = amount + result2;
                        }
                        if (doc.data().amount != '' && month == dateee  && hoverServiceId == hoverIdd && (type == 'send_money' || type == 'cash_out')) {

                            var all = doc.data();
                            arr[a] = doc.data();
                            a++;
                        }
                         if (doc.data().amount != '' && month == dateee  && type == trans_type && (type == 'send_money' || type == 'cash_out')) {

                            var all = doc.data();
                            arr[a] = doc.data();
                            a++;
                        }
                        if (doc.data().amount != '' && month == dateee  && status == trans_status && (type == 'send_money' || type == 'cash_out')) {

                            var all = doc.data();
                            arr[a] = doc.data();
                            a++;
                        }
                        if (doc.data().amount != '' && month == dateee  && al_id == "all" && (type == 'send_money' || type == 'cash_out')) {

                            var all = doc.data();
                            arr[a] = doc.data();
                            a++;
                        }

                    });
                    var url = $('.send_money_trans').data('url');
                    $.post(url, {arr: arr}, function (res) {
                        $(".send_money_trans").html(res.content_wrapper);
                    })
                    $("#trans_date").html(dateee);
                    $("#trans_date1").html(dateee);
                    $("#trans_date2").html(dateee);
                    $("#trans_date3").html(dateee);
                    $("#last_transaction").html(lastdate);
                    $("#total-tsh").html(result);
                    $("#total-Outtsh").html(result1);
                    $("#total-Intsh").html(result2);
                    $(".loaddata").fadeOut("slow");
                })
                .catch(function (error) {
                    console.log("Error getting documents: ", error);
                });

        });

        db.collection("transactions-staging").where("user", "==", uid)
                .get()
                .then(function (querySnapshot) {
                    var result = 0;
                    var result1 = 0;
                    var result2 = 0;
                    var today = new Date();
                    var dateee = today.getMonth();
                    var a = 0;
                   
                    var arr = [];
                    
                    querySnapshot.forEach(function (doc) {
                        var time = doc.data().timestamp
                        var type = doc.data().type
                        var hoverServiceId = doc.data().hoverServiceId

                        var date = new Date(time);
                        //date = new Date('2013-08-03T02:00:00Z');
                       year = date.getFullYear();
                       month = date.getMonth()+1;
                       dt = date.getDate();
                        if (dt < 10) {
                       dt = '0' + dt;
                        }
                       if (month < 10) {
                       month = '0' + month;
                       }

                      lastdate = dt+'-' + month + '-'+year;
                        var month = date.getMonth();
                        if (doc.data().amount != '') {
                            var amount = parseInt(doc.data().amount);
                            result = amount + result;
                        }
                        if (doc.data().amount != '' && month == dateee && (type == 'send_money' || type == 'cash_out' || type == 'pay_bill' || type == 'airtime')) {
                            var amount = parseInt(doc.data().amount);
                            result1 = amount + result1;
                        }
                        if (doc.data().amount != '' && month == dateee && (type == 'rec_money')) {
                            var amount = parseInt(doc.data().amount);
                            result2 = amount + result2;
                        }
                        if (doc.data().amount != '' && month == dateee && (type == 'send_money' || type == 'cash_out')) {

                            var all = doc.data();
                            arr[a] = doc.data();
                            a++;
                        }

                    });
                    var url = $('.send_money_trans').data('url');
                    $.post(url, {arr: arr}, function (res) {
                        $(".send_money_trans").html(res.content_wrapper);
                    })
                    $("#trans_date").html(dateee);
                    $("#trans_date1").html(dateee);
                    $("#trans_date2").html(dateee);
                    $("#trans_date3").html(dateee);
                    $("#last_transaction").html(lastdate);
                    $("#total-tsh").html(result);
                    $("#total-Outtsh").html(result1);
                    $("#total-Intsh").html(result2);
                    $(".loaddata").fadeOut("slow");
                })
                .catch(function (error) {
                    console.log("Error getting documents: ", error);
                });

    });


</script>

</body>

</html>