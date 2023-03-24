<?php include('../controllers/admindash_php_code.php'); ?>
<?php
if (isset($_GET['edit'])) {
    $bid = $_GET['edit'];
    $count=$_GET['count'];
    $rank=0;
                    if($count>3){
                        $rank=1;
                    }
                    else if($count<=3 && $count>1){
                        $rank=2;
                    }
                    else $rank=3;

                    mysqli_query($db, "update brands set approval=true,rank='$rank' where bid='$bid'");

                    
}
//     // if (count($record) == 1 ) {
    $n = mysqli_fetch_array(mysqli_query($db, "SELECT * FROM brands"));

//     $client_id = $n['client_id'];
//     $product_id = $n['product_id'];
//     $purchase_date = $n['purchase_date'];
//     // }
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_dashboard.css">
    <title>GreenCloset</title>
</head>

<body>
    <section>
        <div class="nav">
        <div class="user"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50" height="50"
                    viewBox="0 0 311.541 311.541" fill="currentColor" stroke="currentColor"
                    style="enable-background:new 0 0 311.541 311.541;" xml:space="preserve">
                    <g>
                        <g>
                            <path d="M155.771,26.331C69.74,26.331,0,96.071,0,182.102c0,37.488,13.25,71.883,35.314,98.761
			c3.404-27.256,30.627-50.308,68.8-61.225c13.946,12.994,31.96,20.878,51.656,20.878c19.233,0,36.894-7.487,50.698-19.936
			c38.503,11.871,65.141,36.27,66.017,64.63c24.284-27.472,39.056-63.555,39.056-103.108
			C311.541,96.071,241.801,26.331,155.771,26.331z M155.771,222.069c-9.944,0-19.314-2.732-27.634-7.464
			c-20.05-11.409-33.855-34.756-33.855-61.711c0-38.143,27.583-69.176,61.489-69.176c33.909,0,61.489,31.033,61.489,69.176
			c0,27.369-14.237,51.004-34.786,62.215C174.379,219.523,165.346,222.069,155.771,222.069z" />
                        </g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                    <g>
                    </g>
                </svg></div>
                <div class="username">
                    <p>Welcome user!</p>
                    <p><a href="logout.php">logout</a></p>
                </div>
        </div>
        <div class="right-pane">
            <!-- <div class="right-div">
                <h3 class="title">Pending Approvals</h3>
            </div> -->
            <div align="center"  class="title">Pending Approvals</div >

            <?php  $q=mysqli_query($db, "SELECT * FROM brands where not approval")?>
            <table style="margin-left:210px;width: 80vw; border: 1px solid black;">
            <thead style="border: 1px solid black;">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>GST No.</th>
                    <th>(G.O.T.S)</th>
                    <th>(G.R.S)</th>
                    <th>(O.T)</th>
                    <th>(C.T.C)</th>
                    <th>(B.S)</th>
                    <th>Approve</th>

                </tr>
            </thead>
            <?php while ($row = mysqli_fetch_array($q) ){ 
                $count=0;?> 
            <tr style="border: 1px solid black;">
                <td>
                <?php echo $row['name']; ?>
                </td>
                <td>
                <?php echo $row['email']; ?>
                </td>
                <td>
                <?php echo $row['gstno']; ?>
                </td>
                <td>
                <?php if (!empty($row['CN1'])){ ?>
                    <?php echo $row['CN1']; ?>
                    <?php $count++;}?>
                </td>
                <td>
                <?php if (!empty($row['CN2'])){ ?>
                    <?php echo $row['CN2']; ?>
                    <?php $count++;}?>
                    
                </td>
                <td>
                <?php if (!empty($row['CN3'])){ ?>
                    <?php echo $row['CN3']; ?>
                    <?php $count++;}?>
                    
                </td>
                <td>
                <?php if (!empty($row['CN4'])){ ?>
                    <?php echo $row['CN4']; ?>
                    <?php $count++;}?>
                    
                </td>
                <td>
                <?php if (!empty($row['CN5'])){ ?>
                    <?php echo $row['CN5']; ?>
                    <?php $count++;}
                    ?>
                    
                </td>
                <td>
                    <a href="admindash.php?edit=<?php echo ($row['bid']); ?>&count=<?php echo $count; ?>"
                        class="del_btn">Approve</a>
                </td>
            </tr>
            <?php }?>

            </table>
        </div>
        <div class="left-pane">
           <a href="../index.php"> <img src="../images/logo.png" alt="" class="logo" style="width:70px"></a>
            <ul>
                <a href="./client_dashboard.php">
                    <li><span class="icon-wrapper" active><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-pie-chart menu-icon">
                                <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path>
                                <path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                            </svg></span> Approvals</li>
                </a>
                <a href="./client.php">
                    <li><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-users menu-icon">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg></span>Registered Brands</li>
                </a>
                <!-- <a href="./invoices.php">
                    <li><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-file-text menu-icon">
                                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                <polyline points="14 2 14 8 20 8"></polyline>
                                <line x1="16" y1="13" x2="8" y2="13"></line>
                                <line x1="16" y1="17" x2="8" y2="17"></line>
                                <polyline points="10 9 9 9 8 9"></polyline>
                            </svg></span>Invoices</li>
                </a>
                <a href="./payments.php">
                    <li><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="feather feather-credit-card menu-icon">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                            </svg></span>Payments</li>
                </a>
                <a href="./purchases.php">
                    <li><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-box menu-icon">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg></span>Shop</li>
                </a>
                <a href="./products.php">
                    <li><span class="icon-wrapper"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-box menu-icon">
                                <path
                                    d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z">
                                </path>
                                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                                <line x1="12" y1="22.08" x2="12" y2="12"></line>
                            </svg></span>Products</li>
                </a> -->
            </ul>
        </div>
    </section>
</body>

</html>


