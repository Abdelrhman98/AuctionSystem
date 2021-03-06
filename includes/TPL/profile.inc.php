<?php
    $masterUser = new user ();
    $IdData = $masterUser->getUserInfoById($_SESSION['id']);
    $PS = $masterUser->getPowerSession($_SESSION['id']);
    $following = $masterUser->getFollwing($_SESSION['id']);
    $follower = $masterUser->getFollower($_SESSION['id']);
?>
<section class="profile col-11">
        <div class="container-fluid">
            <h2 class="head">My Account</h2>
            <div class="row">
                <div class="col-md-12 myInfo">
                    <h3>Info</h3>
                    <div class="menu-header">
                            <div class="menu">
                                    <ul>
                                        <li class="active" data-color="green"> 
                                            <i class="far fa-dot-circle"></i>
                                            active
                                        </li>
                                        <li data-color="black"> 
                                            <i class="far fa-dot-circle"></i>
                                            offline
                                        </li>
                                        <li data-color="red">
                                            <i class="far fa-dot-circle"></i> 
                                            don't show
                                        </li>
                                    </ul>
                                </div>
                        <div class="img">
                            <img src=<?php $master = new user();
                            $master->getImgPath();?> alt=""/>
                            <!--acive here-->
                        </div>
                    </div>
                    <span class="name"><?php
                            echo $IdData[0]['firstName'] ." ". $IdData[0]['lastName'];
                        ?></span>
                    <div class="row">
                        <table class="col-6">
                                <tr>
                                    <th>Email</th>
                                    <th><?php 
                                    echo $IdData[0]['email'];?>
                                    </th>
                                </tr>
                                <tr>
                                    <th>User name</th>
                                    <th><?php
                                        echo $IdData[0]['userName'];
                                    ?></th>
                                </tr>
                                <tr>
                                    <th>gender</th>
                                    <th><?php echo $masterUser->getGenderAsString($IdData[0]['gender']);?></th>
                                </tr>
                                <tr>
                                    <th>Age</th>
                                    <th><?php 
                                    echo "20 ";
                                        //echo $masterUser->getAge($CalAge[0]['birthDate']);
                                    ?></th>
                                </tr>
                        </table>
                        <table class="col-6">
                            <tr>
                                <th>RANK</th>
                                <th> <?php 
                                    echo $masterUser->generateRank($IdData[0]['rate']);
                                ?> </th>
                            </tr>
                            <tr>
                                <th>RATE</th>
                                <th><?php
                                    echo $IdData[0]['rate'];
                                ?></th>
                            </tr>
                            <tr>
                                <th>Registered</th>
                                <th><?php 
                                    echo $IdData[0]['RegisterDate'];
                                ?></th>
                            </tr>
                            <tr>
                                <th>Last visit</th>
                                <th><?php
                                    echo $IdData[0]['lastVisit'];
                                ?></th>
                            </tr>
                    </table>
                    </div>
                    <button class="makeOverLay" data-content="0">Edit Profile</button>
                    <?php 
                        //echo '<button class="follow" data-content="0">FOLLOW</button>';
                    ?>
                </div>
            </div><!-- end of div row-->
            <div class="row row2">
                <div class="wallet col-6">
                    <h3>wallet</h3>
                    <div class="inner">
                        <p>No Wallet Created Yet</p>
                        <div class="cir">
                                <i class="fab fa-google-wallet"></i>
                        </div>
                    </div>
                    <button>Create Wallet</button>
                </div>
    
                <div class="power col-5">
                    <h3>
                        Session <span>₽ower</span>
                    </h3>
                    <div class="content row">
                        <div class="left col-6">
                            <p>My ₽ower</p>
                            <span><?php 
                            echo $PS.'%';
                            ?></span>
                        </div><!-- end of div left-->
                        <div class="right col-6">
                            <div class="cir">    
                                <i class="fab fa-phoenix-framework fa-5x"></i>
                            </div><!-- end of div cir-->
                        </div><!-- end of div right-->
                    </div><!-- end of div content-->
                    <a href="#">What is Brain Power ?</a>
                </div><!-- end of div power-->
                <div class="container-fluid">
                    <div class="row activity">
                        <div class="col-12">
                            <h3>
                                Activity
                            </h3>
                            <div class="controls">
                                <span class="active first">My Wallet</span>
                                <span>Session</span>
                            </div><!-- end of div controls-->
                            <div class="slide">
                                <div class="inner">
                                    <div class="myWallet">
                                        <table class="wallet">
                                            <tr class="head">
                                                <th>Type</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Amount</th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <i class="fa fa-stop-circle"></i>
                                                </th>
                                                <th>26.02.2018</th>
                                                <th>Free 5 EGP</th>
                                                <th></th>
                                                <th><span>+5.00</span><sup>EGP</sup></th>
                                            </tr>
                                            <tr>
                                                    <td>
                                                        <i class="fa fa-stop-circle"></i>
                                                    </th>
                                                    <th>26.02.2018</th>
                                                    <th>Free 5 EGP</th>
                                                    <th></th>
                                                    <th><span>+5.00</span><sup>EGP</sup></th>
                                                </tr>
                                        </table>
                                    </div><!-- end of div wallet-->
                                    <div class="session">
                                        <table class="session">
                                            <tr class="head">
                                                <th>Type</th>
                                                <th>Date</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Final Price</th>
                                            </tr>
                                            <tr>
                                                <th>
                                                    <i class="fa fa-stop-circle"></i>
                                                </th>
                                                <th>10.03.2018</th>
                                                <th>sell bike</th>
                                                <th>Race bike with speed cog</th>
                                                <th><span>4000</span><sup>EGP</sup></th>
                                            </tr>
                                        </table><!-- end of div table-->
                                    </div><!-- end of div session-->
                                </div><!-- end of div inner-->
                            </div><!-- end of div slide-->
                        </div><!-- end of div col-12-->
                    </div><!-- end of div activity-->
                </div><!-- end of div container-fluid-->
    
                <div class="following col-12">
                    <h3>Follow</h3>
                    <div class="row">
                        <div class="col-6">
                            <span class="outter">Following</span>
                            <div class="cir f1" data-open = "false">
                                <span class="number" data-open="followPup">
                                   <?php
                                  echo sizeof($following);
                                  ?>
                                </span><!-- end of div span-->    
                            </div>
                        </div><!-- end of div col-6-->
                        <div class="col-6">
                            <span class="outter">Followers</span>
                            <div class="cir f2" data-open = "false">
                                <span class="number" data-open="followerPup">
                                <?php
                                    echo sizeof($follower);
                                ?>
                                </span><!-- end of div span-->    
                            </div>
                        </div><!-- end of div col-6-->
                    </div><!-- end of div row-->
                    <?php 
                        include "profile_pops/followers.inc.php";
                        include "profile_pops/following.inc.php";
                    ?>
                </div><!-- end of div follow-->
    
                <div class="col-12 feedbacks">
                    <h2> Feedbacks</h2>
                    <div class="tbl">
                        <table>
                            <tr class="head">
                                <th>Photo</th>
                                <th>Name</th>
                                <th>Stars</th>
                                <th>Date</th>
                                <th>Details</th>
                            </tr>
    
                            <tr>
                                <th>
                                    <div class="cir">
                                        <img src="imgs/original.jpg" alt="">
                                    </div>
                                </th>
                                <th>
                                    Aisha
                                </th>
                                <th>
                                    <div class="stars" data-rate = "3">
                                        <i class="far fa-star 1"></i>
                                        <i class="far fa-star 2"></i>
                                        <i class="far fa-star 3"></i>
                                        <i class="far fa-star 4"></i>
                                        <i class="far fa-star 5"></i>
                                    </div>
                                </th>
                                <th>
                                    1.1.2018
                                </th>
                                <th>
                                    Good session bro ^^
                                </th>
                            </tr>
                        </table>
                    </div><!--end of div.tbl-->
                </div>
        </div><!-- end of div container-fluid-->
</section><!-- end of section profile-->