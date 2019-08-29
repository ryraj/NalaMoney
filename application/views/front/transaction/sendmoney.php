<?php $a=1; $date = ""; if(!empty($sendMoneys)) { foreach($sendMoneys as $sendMoney){ 
    
// print_r($sendMoney['timestamp']);
    // echo $date."<br>";
    $mil = $sendMoney['timestamp'];
    $seconds = $mil / 1000;
    if(($date == "" && $a == 1) || $date != date("d-m-Y", $seconds)) {
    ?>
    <div id="downloadpdf">
<div class="date boxs">
    <p><?php 

        
        echo date("d-m-Y", $seconds);

//    echo $sendMoney['amount'];
        ?></p>
</div>
<?php } $a++; 
$date = date("d-m-Y", $seconds); if($sendMoney['type']=='send_money') {?>
<div class="trans_history trans_historyacr forborder boxs send_money_trans" >
    <ul>
        <li>
            <div class="paymentby">
                <img src="<?php echo base_url('assets/img/phone.svg'); ?>">
            </div>
            <div class="accountno">
                <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/h.svg'); ?>"><?php echo $sendMoney['simPhoneNumber']; ?></h6>
                <p class="changetextcolor">Your account</p>
            </div>
            <div class="transfer">
                <img src="<?php echo base_url('assets/img/transfer.svg'); ?>">
            </div>
        </li>
        <li>
            <div class="paymentto">
                <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/mark.svg'); ?>"><?php echo $sendMoney['recipientName']; ?></h6>
                <a href="javascript:void(0)" data-target="#comment" data-toggle="modal"><img src="<?php echo base_url('assets/img/edit.svg'); ?>">Money for something. This is explanation.</a>
            </div>
        </li>
        <li class="attach_justify">
            <div class="attach">
                <p class="changetextcolor">2 Attachments</p>
            </div>
            <div class="pending">
                <p><?php echo $sendMoney['status']; ?></p>
            </div>
            <div class="payscale">
                <p class="debit">-<?php echo $sendMoney['amount']; ?>TSH</p>
            </div>
        </li>
    </ul>
    <div class="trans_detail trans_detaillll boxs">
        <div class="sms boxs">
            <h6>SMS Message</h6>
            <p class="changetextcolor"><?php echo $sendMoney['responseMessage']; ?></p>
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
<?php } if($sendMoney['type']=='cash_out'){?>
<div class="trans_history trans_historyacr forborder boxs send_money_trans" >
    <ul>
        <li>
            <div class="paymentby">
                <img src="<?php echo base_url('assets/img/phone.svg'); ?>">
            </div>
            <div class="accountno">
                <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/h.svg'); ?>"><?php echo $sendMoney['simPhoneNumber']; ?></h6>
                <p class="changetextcolor">Your account</p>
            </div>
            <div class="transfer">
                <img src="<?php echo base_url('assets/img/transfer.svg'); ?>">
            </div>
        </li>
        <li>
            <div class="paymentto">
                <h6 class="changetextcolor"><?php echo $sendMoney['description']; ?></h6>
                <a href="javascript:void(0)" data-target="#comment" data-toggle="modal"><img src="<?php echo base_url('assets/img/edit.svg'); ?>">Money for something. This is explanation.</a>
            </div>
        </li>
        <li class="attach_justify">
            <div class="attach">
                <p class="changetextcolor">2 Attachments</p>
            </div>
            <div class="pending">
                <p><?php echo $sendMoney['status']; ?></p>
            </div>
            <div class="payscale">
                <p class="debit">-<?php echo $sendMoney['amount']; ?>TSH</p>
            </div>
        </li>
    </ul>
    <div class="trans_detail trans_detaillll boxs">
        <div class="sms boxs">
            <h6>SMS Message</h6>
            <p class="changetextcolor"><?php echo $sendMoney['responseMessage']; ?></p>
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
<?php }if($sendMoney['type']=='Buy Bundle'){?>
 <div class="expens forborder boxs">
                            <div class="expens_lft">
                                <div class="paymentby">
                                    <img src="<?php echo base_url('assets/img/purse.svg'); ?>">
                                </div>
                                <div class="paymentto">
                                    <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/nike.svg'); ?>">Nike store</h6>
                                    <a href="javascript:void(0)" class="changetextcolor" data-target="#comment" data-toggle="modal"><img src="<?php echo base_url('assets/img/edit.svg'); ?>">Birthday gift for my sister</a>
                                </div>
                            </div>
                            <div class="expens_rht">
                                <div class="upload">
                                    <a href="javascript:void(0)" class="changetextcolor" data-target="#addfile" data-toggle="modal"><img src="<?php echo base_url('assets/img/plusblack.svg'); ?>">Upload files</a>
                                </div>
                                <div class="payscale">
                                    <p class="debit">-35705TSH</p>
                                </div>
                            </div>
                        </div>
<?php }if($sendMoney['type']=='Bill Pay'){?>
 <div class="expens forborder boxs">
                            <div class="expens_lft">
                                <div class="paymentby">
                                    <img src="<?php echo base_url('assets/img/purse.svg'); ?>">
                                </div>
                                <div class="paymentto">
                                    <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/nike.svg'); ?>">Nike store</h6>
                                    <a href="javascript:void(0)" class="changetextcolor" data-target="#comment" data-toggle="modal"><img src="<?php echo base_url('assets/img/edit.svg'); ?>">Birthday gift for my sister</a>
                                </div>
                            </div>
                            <div class="expens_rht">
                                <div class="upload">
                                    <a href="javascript:void(0)" class="changetextcolor" data-target="#addfile" data-toggle="modal"><img src="<?php echo base_url('assets/img/plusblack.svg'); ?>">Upload files</a>
                                </div>
                                <div class="payscale">
                                    <p class="debit">-35705TSH</p>
                                </div>
                            </div>
                        </div>
<?php }if($sendMoney['type']=='Airtime'){?>
 <div class="expens forborder boxs">
                            <div class="expens_lft">
                                <div class="paymentby">
                                    <img src="<?php echo base_url('assets/img/purse.svg'); ?>">
                                </div>
                                <div class="paymentto">
                                    <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/nike.svg'); ?>">Nike store</h6>
                                    <a href="javascript:void(0)" class="changetextcolor" data-target="#comment" data-toggle="modal"><img src="<?php echo base_url('assets/img/edit.svg'); ?>">Birthday gift for my sister</a>
                                </div>
                            </div>
                            <div class="expens_rht">
                                <div class="upload">
                                    <a href="javascript:void(0)" class="changetextcolor" data-target="#addfile" data-toggle="modal"><img src="<?php echo base_url('assets/img/plusblack.svg'); ?>">Upload files</a>
                                </div>
                                <div class="payscale">
                                    <p class="debit">-35705TSH</p>
                                </div>
                            </div>
                        </div>
<?php }?>
<?php
}
}else{
    ?>
        Data Not Found
<?php
}
?>