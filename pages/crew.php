<p style="font-size:40px;padding-top:31px;padding-bottom:15px;text-align:center;color:black;">CREW</p>
<hr>
<div style="height:225px;" id="sadBoy">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=1");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="width: 200px;height: 200px;display: block;float: left;">
  <span class="leftNavn ">NAVN    </span><span class="leftNavn2 "><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="leftNick ">NICKNAME</span><span class="leftNick2 "><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="leftMail ">EMAIL   </span><span class="leftMail2 "><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="leftCity ">BOSTED  </span><span class="leftCity2 "><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="leftAnsv ">ANSVAR  </span><span class="leftAnsv2 "><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="width:100%; height:225px;">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=2");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="border-radius:;width: 200px;height: 200px;margin-left: auto;margin-right: auto;display: block;float: right;margin-left: 50px;">
  <span class="rightNavn">NAVN    </span><span class="rightNavn2"><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="rightNick">NICKNAME</span><span class="rightNick2"><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="rightMail">EMAIL   </span><span class="rightMail2"><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="rightCity">BOSTED  </span><span class="rightCity2"><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="rightAnsv">ANSVAR  </span><span class="rightAnsv2"><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="height:225px;">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=3");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="width: 200px;height: 200px;display: block;float: left;">
  <span class="leftNavn ">NAVN    </span><span class="leftNavn2 "><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="leftNick ">NICKNAME</span><span class="leftNick2 "><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="leftMail ">EMAIL   </span><span class="leftMail2 "><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="leftCity ">BOSTED  </span><span class="leftCity2 "><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="leftAnsv ">ANSVAR  </span><span class="leftAnsv2 "><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="width:100%; height:225px;">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=4");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="border-radius:;width: 200px;height: 200px;margin-left: auto;margin-right: auto;display: block;float: right;margin-left: 50px;">
  <span class="rightNavn">NAVN    </span><span class="rightNavn2"><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="rightNick">NICKNAME</span><span class="rightNick2"><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="rightMail">EMAIL   </span><span class="rightMail2"><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="rightCity">BOSTED  </span><span class="rightCity2"><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="rightAnsv">ANSVAR  </span><span class="rightAnsv2"><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="height:225px;">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=5");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="width: 200px;height: 200px;display: block;float: left;">
  <span class="leftNavn ">NAVN    </span><span class="leftNavn2 "><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="leftNick ">NICKNAME</span><span class="leftNick2 "><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="leftMail ">EMAIL   </span><span class="leftMail2 "><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="leftCity ">BOSTED  </span><span class="leftCity2 "><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="leftAnsv ">ANSVAR  </span><span class="leftAnsv2 "><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="width:100%; height:225px;">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=6");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="border-radius:;width: 200px;height: 200px;margin-left: auto;margin-right: auto;display: block;float: right;margin-left: 50px;">
  <span class="rightNavn">NAVN    </span><span class="rightNavn2"><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="rightNick">NICKNAME</span><span class="rightNick2"><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="rightMail">EMAIL   </span><span class="rightMail2"><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="rightCity">BOSTED  </span><span class="rightCity2"><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="rightAnsv">ANSVAR  </span><span class="rightAnsv2"><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="height:225px;">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=7");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="width: 200px;height: 200px;display: block;float: left;">
  <span class="leftNavn ">NAVN    </span><span class="leftNavn2 "><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="leftNick ">NICKNAME</span><span class="leftNick2 "><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="leftMail ">EMAIL   </span><span class="leftMail2 "><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="leftCity ">BOSTED  </span><span class="leftCity2 "><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="leftAnsv ">ANSVAR  </span><span class="leftAnsv2 "><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="width:100%; height:225px;">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=8");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="border-radius:;width: 200px;height: 200px;margin-left: auto;margin-right: auto;display: block;float: right;margin-left: 50px;">
  <span class="rightNavn">NAVN    </span><span class="rightNavn2"><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="rightNick">NICKNAME</span><span class="rightNick2"><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="rightMail">EMAIL   </span><span class="rightMail2"><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="rightCity">BOSTED  </span><span class="rightCity2"><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="rightAnsv">ANSVAR  </span><span class="rightAnsv2"><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="height:225px;">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=9");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="width: 200px;height: 200px;display: block;float: left;">
  <span class="leftNavn ">NAVN    </span><span class="leftNavn2 "><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="leftNick ">NICKNAME</span><span class="leftNick2 "><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="leftMail ">EMAIL   </span><span class="leftMail2 "><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="leftCity ">BOSTED  </span><span class="leftCity2 "><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="leftAnsv ">ANSVAR  </span><span class="leftAnsv2 "><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="width:100%; height:225px;">

  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=15");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="border-radius:;width: 200px;height: 200px;margin-left: auto;margin-right: auto;display: block;float: right;margin-left: 50px;">
  <span class="rightNavn">NAVN    </span><span class="rightNavn2"><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="rightNick">NICKNAME</span><span class="rightNick2"><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="rightMail">EMAIL   </span><span class="rightMail2"><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="rightCity">BOSTED  </span><span class="rightCity2"><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="rightAnsv">ANSVAR  </span><span class="rightAnsv2"><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="height:225px;">

  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=14");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="width: 200px;height: 200px;display: block;float: left;">
  <span class="leftNavn ">NAVN    </span><span class="leftNavn2 "><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="leftNick ">NICKNAME</span><span class="leftNick2 "><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="leftMail ">EMAIL   </span><span class="leftMail2 "><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="leftCity ">BOSTED  </span><span class="leftCity2 "><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="leftAnsv ">ANSVAR  </span><span class="leftAnsv2 "><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="width:100%; height:225px;">

  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=16");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="border-radius:;width: 200px;height: 200px;margin-left: auto;margin-right: auto;display: block;float: right;margin-left: 50px;">
  <span class="rightNavn">NAVN    </span><span class="rightNavn2"><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="rightNick">NICKNAME</span><span class="rightNick2"><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="rightMail">EMAIL   </span><span class="rightMail2"><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="rightCity">BOSTED  </span><span class="rightCity2"><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="rightAnsv">ANSVAR  </span><span class="rightAnsv2"><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="height:225px;">

  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=17");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="width: 200px;height: 200px;display: block;float: left;">
  <span class="leftNavn ">NAVN    </span><span class="leftNavn2 "><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="leftNick ">NICKNAME</span><span class="leftNick2 "><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="leftMail ">EMAIL   </span><span class="leftMail2 "><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="leftCity ">BOSTED  </span><span class="leftCity2 "><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="leftAnsv ">ANSVAR  </span><span class="leftAnsv2 "><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="width:100%; height:225px;">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=18");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="border-radius:;width: 200px;height: 200px;margin-left: auto;margin-right: auto;display: block;float: right;margin-left: 50px;">
  <span class="rightNavn">NAVN    </span><span class="rightNavn2"><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="rightNick">NICKNAME</span><span class="rightNick2"><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="rightMail">EMAIL   </span><span class="rightMail2"><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="rightCity">BOSTED  </span><span class="rightCity2"><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="rightAnsv">ANSVAR  </span><span class="rightAnsv2"><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
<hr>
<div style="height:225px;">
  <?php
  $res=mysql_query("SELECT * FROM users WHERE userId=123");
  $row=mysql_fetch_array($res);
  ?>
  <img src="userImg/<?php echo $row['userImg']; ?>" style="width: 200px;height: 200px;display: block;float: left;">
  <span class="leftNavn ">NAVN    </span><span class="leftNavn2 "><?php echo $row['userName']; ?></span><br>
  <?php if (!empty($row['userNick'])) { ?>
  <span class="leftNick ">NICKNAME</span><span class="leftNick2 "><?php echo $row['userNick']; ?></span><br>
  <?php } if ($row['crewEmail'] == 1) { ?>
  <span class="leftMail ">EMAIL   </span><span class="leftMail2 "><?php echo $row['userEmail'];?></span><br>
  <?php } if (!empty($row['userCity'])) { ?>
  <span class="leftCity ">BOSTED  </span><span class="leftCity2 "><?php echo $row['userCity']; ?></span><br>
  <?php } if (!empty($row['userRole'])) { ?>
  <span class="leftAnsv ">ANSVAR  </span><span class="leftAnsv2 "><?php echo $row['userRole']; ?></span><br>
  <?php } ?>
</div>
