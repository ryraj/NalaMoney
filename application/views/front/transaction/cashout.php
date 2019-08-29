<?php $a=1; $date = ""; if(!empty($cashOut)) { foreach($cashOut as $cashOutt){ 
// print_r($cashOut['timestamp']);
    // echo $date."<br>";
    $mil = $cashOutt['timestamp'];
    $seconds = $mil / 1000;
    if(($date == "" && $a == 1) || $date != date("d-m-Y", $seconds)) {
    ?>
    <div id="downloadpdf">
<div class="date boxs">
    <p><?php 

        
        echo date("d-m-Y", $seconds);

//    echo $cashOut['amount'];
        ?></p>
</div>
<?php } $a++; 
$date = date("d-m-Y", $seconds);?>
<div class="trans_history trans_historyacr forborder boxs cash_out_trans" >
    <ul>
        <li>
            <div class="paymentby">
                <img src="<?php echo base_url('assets/img/phone.svg'); ?>">
            </div>
            <div class="accountno">
                <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/h.svg'); ?>"><?php echo $cashOutt['simPhoneNumber']; ?></h6>
                <p class="changetextcolor">Your account</p>
            </div>
            <div class="transfer">
                <img src="<?php echo base_url('assets/img/transfer.svg'); ?>">
            </div>
        </li>
        <li>
            <div class="paymentto">
                <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/mark.svg'); ?>"><?php echo $cashOutt['recipientName']; ?></h6>
                <a href="javascript:void(0)" data-target="#comment" data-toggle="modal"><img src="<?php echo base_url('assets/img/edit.svg'); ?>">Money for something. This is explanation.</a>
            </div>
        </li>
        <li class="attach_justify">
            <div class="attach">
                <p class="changetextcolor">2 Attachments</p>
            </div>
            <div class="pending">
                <p><?php echo $cashOutt['status']; ?></p>
            </div>
            <div class="payscale">
                <p class="debit">-<?php echo $cashOutt['amount']; ?>TSH</p>
            </div>
        </li>
    </ul>
    <div class="trans_detail trans_detaillll boxs">
        <div class="sms boxs">
            <h6>SMS Message</h6>
            <p class="changetextcolor"><?php echo $cashOutt['responseMessage']; ?></p>
        </div>
        <div class="sms boxs">
            <h6>Information</h6>
            <div class="info boxs">
                <div class="per_detail width28 boxs">
                    <p><span class="changetextcolor">Transaction ID:</span><i>6G492HWPBEX</i></p>
                </div>

                <div class="per_detail boxs">
                    <p><span class="changetextcolor">Name:</span><i>augustine mkandara</i></p>
                </div>

                <div class="per_detail boxs">
                    <p><span class="changetextcolor">Ending Balance:</span><i>471 914TSH</i></p>
                </div>
                <div class="per_detail width13 boxs">
                    <p><span class="changetextcolor">Fee: </span><i>120TSH</i></p>
                </div>
                <div class="per_detail boxs">
                    <p><span class="changetextcolor">Nala's Fee: </span><i>Free</i></p>
                </div>
            </div>
        </div>

        <div class="sms attachments boxs">
            <h6>Attachments</h6>
            <div class="row">
                <div class="col-sm-4">
                    <div class="attach_files boxs">
                        <div class="attach_inner">
                            <div class="paymentby">
                                <img src="<?php echo base_url('assets/img/image.svg'); ?>">
                            </div>
                            <div class="file_name">
                                <h6 class="changetextcolor">test.png</h6>
                                <p>125 KB</p>
                            </div>
                        </div>
                        <div class="file_down">
                            <a href='javascript:void(0)'><img src="<?php echo base_url('assets/img/cloud.svg'); ?>"></a>
                            <a href='javascript:void(0)'><img src="<?php echo base_url('assets/img/delete.svg'); ?>"></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="attach_files boxs">
                        <div class="attach_inner">
                            <div class="paymentby">
                                <img src="<?php echo base_url('assets/img/pdf.svg'); ?>">
                            </div>
                            <div class="file_name">
                                <h6 class="changetextcolor">test.pdf</h6>
                                <p>20 KB</p>
                            </div>
                        </div>
                        <div class="file_down">
                            <a href='javascript:void(0)'><img src="<?php echo base_url('assets/img/cloud.svg'); ?>"></a>
                            <a href='javascript:void(0)'><img src="<?php echo base_url('assets/img/delete.svg'); ?>"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        
        <?php
    }
}else{
    ?>
        Data Not Found
<?php
}
?>
