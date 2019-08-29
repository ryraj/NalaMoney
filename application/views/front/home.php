
  <div class="home_rht boxs">
                <div class="benj boxs">
                    <div class="homehead boxs">
                        <h1 class="changetextcolor">Welcome <?php echo $user_name ?></h1>
                        <p>It is nice to see you again.<img src="<?php echo base_url('assets/img/emoji.png'); ?>"></p>
                    </div>
                    <div class="fixtures boxs" id="pdfmaked">
                        <ul>
                            <li class="totalfix changetextcolor"><i id="total-tsh"></i><span>TSH</span>
                                <a href="javascript:void(0)" data-target='#breakdown' data-toggle="modal">View Breakdown<img src="<?php echo base_url('assets/img/view.svg'); ?>"></a>
                            </li>
                            <li class="credit forborder" >+<i id="total-Intsh"></i><span>TSH</span>
                                <p>Last 30 Days 01.0<i id="trans_date"></i>. - 30.0<i id="trans_date1"></i>. </p>
                            </li>
                            <li class="debit">-<i id="total-Outtsh"></i><span>TSH</span>
                                 <p>Last 30 Days 01.0<i id="trans_date2"></i>. - 30.0<i id="trans_date3"></i>. </p>
                            </li>
                        </ul>
                    </div>
                    <div class="transaction boxs">
                        <div class="trans_lft">
                            <h3 class="changetextcolor">Transactions</h3>
                            <p>Last updated on: <span id="last_transaction"></span></p>
                        </div>
                        <div class="download">
                            <a href="javascript:void(0)" id="pdf" data-url="<?php echo base_url('site/pdfgenerate') ?>"><img src="<?php echo base_url('assets/img/cloud.svg'); ?>">Download</a>
                            
                        </div>
                    </div>
                    <div class="setting_rw boxs">
                        <div class="rightBx_inr">
                            <label>ACCOUNT</label>
                            <button type="button" class="changetextcolor forborder"><span class="active">All accounts</span><img src="<?php echo base_url('assets/img/arrowdown.svg'); ?>" alt="arrow" class=""></button>
                            <ul class="lang_wrp fiter_trans" style="display: none;">
                                <li data-id="all">All accounts</li>
                                <li data-id="13">Vodacom</li>
                                <li data-id="6">Tigo</li>
                                <li data-id="16">Airtel</li>
                                <li data-id="35">Halotel</li>
                                <li data-id="40">Zantel</li>
                                <li data-id="41">TTCL</li>
                                <li data-id="43">Airtel(Uganda)</li>
                                <li data-id="42">MTN</li>
                                <li data-id="5">CRDB</li>
                                <li data-id="7">NMB</li>
                            </ul>
                        </div>
                        <div class="rightBx_inr">
                            <label>TYPE</label>
                            <button type="button" class="changetextcolor forborder"><span>All types</span><img src="<?php echo base_url('assets/img/arrowdown.svg'); ?>" alt="arrow" class=""></button>
                            <ul class="lang_wrp fiter_trans" style="display: none;">
                                <li data-id="all">All types</li>
                                <li data-id="send_money">Send Money</li>
                                <li data-id="cash_out">Cash out</li>
                                <li data-id="Bill Pay">Bill Pay</li>
                                <li data-id="Buy Bundle">Buy Bundle</li>
                                <li data-id="Airtime">Airtime</li>
                                
                            </ul>
                        </div>
                        <div class="rightBx_inr">
                            <label>Category</label>
                            <button type="button" class="changetextcolor forborder"><span>All category</span><img src="<?php echo base_url('assets/img/arrowdown.svg'); ?>" alt="arrow" class=""></button>
                            <ul class="lang_wrp" style="display: none;">
                                <li>All category</li>
                                <li>Saving</li>
                                <li>Current</li>
                            </ul>
                        </div>
                        <div class="rightBx_inr">
                            
                            <label>Select DATE</label>
                            <input type="text" name="dob" class="form-control" id="date_range_trans" style="border: transparent;border-bottom: 1px solid #ccc;margin-top: 7px;" placeholder="SELECT DATE">
<!--                            <button type="button" class="changetextcolor forborder"><span>Start date</span><img src="<?php echo base_url('assets/img/arrowdown.svg'); ?>" alt="arrow" class=""></button>
                            <ul class="lang_wrp" style="display: none;">
                                <li>Saving</li>
                                <li>Current</li>
                            </ul>-->
                        </div>
                        <div class="rightBx_inr">
                            <label>STATUS</label>
                            <button type="button" class="changetextcolor forborder"><span>Status</span><img src="<?php echo base_url('assets/img/arrowdown.svg'); ?>" alt="arrow" class=""></button>
                            <ul class="lang_wrp fiter_trans" style="display: none;">
                                <li data-id="all">All Status</li>
                                <li data-id="Pending">Pending</li>
                                <li data-id="success">success</li>
                            </ul>
                        </div>
                    </div>
                    <div class="transactionbydate boxs">
                      
                        <div class="send_money_trans" data-url="<?php echo base_url('site/sendMoney');?>" >

                        </div>
                        
                   
                       
                        

                    </div>
                    
                </div>
            </div>
        </div>
        </div>
    </section>
    <div id="breakdown" class="modal fade breakdown" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content boxs">
                <div class="modal-body boxs">
                    <h4 class="changetextcolor">Breakdown
                        <a href="javascript:void(0)" data-dismiss="modal"><img src="<?php echo base_url('assets/img/cross.svg'); ?>"></a>
                    </h4>
                    <div class="break_tab forborder">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="active" data-type="a">Mobile Accounts</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="" data-type="b">Bank Accounts</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="" data-type="c">Cash</a>
                            </li>
                        </ul>
                    </div>
                    <div class="boxs tab_detail diffA diffa">
                        <div class="mobile_detail forborder boxs">
                            <div class="mobile_lft">
                                <div class="accountno">
                                    <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/h.svg'); ?>">+38765582904</h6>
                                </div>
                            </div>
                            <div class="mobile_rht">
                                <div class="payscale">
                                    <p class="debit">+35705TSH</p>
                                </div>
                                <a href="javascript:void(0)" class="remove">Remove</a>
                            </div>
                        </div>
                        <div class="mobile_detail forborder boxs">
                            <div class="mobile_lft">
                                <div class="accountno">
                                    <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/h.svg'); ?>">+38765582904</h6>
                                </div>
                            </div>
                            <div class="mobile_rht">
                                <div class="payscale">
                                    <p class="debit">+22745TSH</p>
                                </div>
                                <a href="javascript:void(0)" class="remove">Remove</a>
                            </div>
                        </div>
                        <div class="mobile_detail forborder boxs">
                            <div class="mobile_lft">
                                <div class="accountno">
                                    <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/mark.svg'); ?>">+38765582904</h6>
                                </div>
                            </div>
                            <div class="mobile_rht">
                                <div class="payscale">
                                    <p class="debit">+35705TSH</p>
                                </div>
                                <a href="javascript:void(0)" class="remove">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="boxs tab_detail diffA diffb">
                        <div class="mobile_detail forborder boxs">
                            <div class="mobile_lft">
                                <div class="accountno">
                                    <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/DBT.svg'); ?>">+38765582904</h6>
                                </div>
                            </div>
                            <div class="mobile_rht">
                                <div class="payscale">
                                    <p class="debit">+35705TSH</p>
                                </div>
                                <a href="javascript:void(0)" class="remove">Remove</a>
                            </div>
                        </div>
                        <div class="mobile_detail forborder boxs">
                            <div class="mobile_lft">
                                <div class="accountno">
                                    <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/DBT.svg'); ?>">+38765582904</h6>
                                </div>
                            </div>
                            <div class="mobile_rht">
                                <div class="payscale">
                                    <p class="debit">+22745TSH</p>
                                </div>
                                <a href="javascript:void(0)" class="remove">Remove</a>
                            </div>
                        </div>
                        <div class="mobile_detail forborder boxs">
                            <div class="mobile_lft">
                                <div class="accountno">
                                    <h6 class="changetextcolor"><img src="<?php echo base_url('assets/img/DBT.svg'); ?>">+38765582904</h6>
                                </div>
                            </div>
                            <div class="mobile_rht">
                                <div class="payscale">
                                    <p class="debit">+35705TSH</p>
                                </div>
                                <a href="javascript:void(0)" class="remove">Remove</a>
                            </div>
                        </div>
                    </div>
                    <div class="boxs tab_detail diffA diffc">
                        <div class="mobile_detail forborder boxs">
                            <div class="mobile_lft">
                                <div class="paymentby">
                                    <img src="<?php echo base_url('assets/img/phone.svg'); ?>">
                                </div>
                                <div class="accountno">
                                    <h6 class="changetextcolor">Cash</h6>
                                </div>
                            </div>
                            <div class="mobile_rht">
                                <div class="payscale">
                                    <p class="debit">+35705TSH</p>
                                </div>
                                <a href="javascript:void(0)" class="remove">Remove</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="comment" class="modal fade comment" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content boxs">
                <div class="modal-body boxs">
                    <h4 class="changetextcolor">Comments History
                        <a href="javascript:void(0)" data-dismiss="modal"><img src="<?php echo base_url('assets/img/cross.svg'); ?>"></a>
                    </h4>
                    <div class="paycomment forborder">
                        <h6 class="changetextcolor">Payed to: Mark Cuban</h6>
                        <p>03/07/2019</p>
                    </div>
                    <div class="comment_input boxs">
                        <input type="text" class="form-control" placeholder="Add new comment">
                        <button type="button"><img src="<?php echo base_url('assets/img/plus.svg'); ?>">Add</button>
                    </div>
                    <div class="datewisecomment boxs">
                        <div class="comment_lft">
                            <div class="circle"></div>
                            <div class="commentdate">
                                <p class="changetextcolor">03/07/2019</p>
                            </div>
                        </div>
                        <div class="comment_rht forborder boxs">
                            <p>Money for something. This is explanation.</p>
                        </div>

                    </div>
                    <div class="datewisecomment boxs">
                        <div class="comment_lft">
                            <div class="circle"></div>
                            <div class="commentdate">
                                <p class="changetextcolor">03/07/2019</p>
                            </div>
                        </div>
                        <div class="comment_rht forborder boxs">
                            <p>Money for something. This is explanation.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="addfile" class="modal fade addfile" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content boxs">
                <div class="modal-body boxs">
                    <h4 class="changetextcolor">Add files
                        <a href="javascript:void(0)" data-dismiss="modal"><img src="<?php echo base_url('assets/img/cross.svg'); ?>"></a>
                    </h4>
                    <div class="uploadadd boxs">
                        <h1>No Files Attached</h1>
                        <div class="uploadbtn">
                            <button>
                                    <input type="file" id="fileupload"><img src="<?php echo base_url('assets/img/plus.svg'); ?>">Browse files
                            </button>
                        </div>
                    </div>
                    <div class="uplaodfile boxs" id="upldfile">
                        <div class="filename forborder boxs">
                            <div class="file_inner">
                                <p class="changetextcolor"><img src="<?php echo base_url('assets/img/image_big.svg'); ?>" id="imgpath"><span id="path">test.png</span></p>
                            </div>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                </div>
                            </div>
                            <div class="mobile_rht file_rht">
                                <div class="payscale">
                                    <p class="debit">Uploaded</p>
                                </div>
                                <a href="javascript:void(0)"><img src="<?php echo base_url('assets/img/delete.svg'); ?>"></a>
                            </div>
                        </div>
                        <div class="filename forborder boxs">
                            <h6><img src="<?php echo base_url('assets/img/blueplus.svg'); ?>">Add new files</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    