<div class="container mb-5 mt-3">
        <div class="row justify-content-center">
                <div class="col-lg-10">

                    <!-- REMOVED A DIV ELEMENT CONSISTING OF ALERTS -->
                    <div style="display:<?php if (isset($_SESSION['showAlert'])) {
                        echo $_SESSION['showAlert'];   
                        } else {
                        echo 'none';
                        } unset($_SESSION['showAlert']); ?>" class="alert alert-success alert-dismissible mt-3">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><?php if (isset($_SESSION['message'])) {
                        echo $_SESSION['message'];
                        } unset($_SESSION['showAlert']); ?></strong>
                    </div>

                    
                    <div class="table-responsive mt-2">
                        <table class="table table-bordered table-striped text-center">
                            <thead>
                                <tr>
                                    <td colspan="7">
                                    <h3 class="text-center mt-2"> Products in your cart </h3>
                                    </td>
                                </tr>
                                <tr>
                                    <th> ID </th>
                                    <th> IMAGE </th>
                                    <th> PRODUCT </th>
                                    <th> PRICE </th>
                                    <th> QUANTITY </th>
                                    <th> TOTAL  </th>
                                    <th>
                                        <a style="" href="action.php?clear=all" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure want to clear your cart?');">
                                            &nbsp;CLEAR
                                        </a>
                                        <!-- <a href="action.php?clear=all" class="badge-danger badge p-1" onclick="return confirm('Are you sure want to clear your cart?');"><i class="fas fa-trash"></i>&nbsp;&nbsp;Clear Cart</a> -->
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                require 'reference.php';
                                $stmt = $con->prepare('SELECT * FROM cart');
                                $stmt->execute();
                                $result = $stmt->get_result();
                                $grand_total = 0;
                                while ($row = $result->fetch_assoc()):
                            ?>
                            <tr>
                                <td><?= $row['id'] ?></td>
                                    <input type="hidden" class="pid" name="npid" value="<?= $row['id'] ?>">
                                <td><img src="<?= $row['product_image'] ?>" width="50"></td>
                                <td><?= $row['product_name'] ?></td>
                                <td>
                                    <i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= $row['product_price']; ?>
                                </td>
                                    <input type="hidden" class="pprice"  name="nprice" value="<?= $row['product_price'] ?>">
                                <td>
                                <input type="number" class="text-center form-control itemQty" href="action.php?npid=<?= $row['id'] ?>"  name="nqty" value="<?= $row['quantity'] ?>" style="width:75px;">
                                </td>
                                <td><i class="fas fa-rupee-sign itotal"></i>&nbsp;&nbsp;<?= $row['total_price']; ?></td>
                                <td class="mt-2">
                                <a style="font-size:1rem; " href="action.php?remove=<?= $row['id'] ?>" class="text-danger lead" onclick="return confirm('Are you sure want to remove this item?');"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                                <?php $grand_total += $row['total_price']; ?>
                            <?php endwhile; ?>
                            <tr>
                                <td colspan="3" class="mt-2">
                                <a href="homepage.php" class="btn btn-primary mt-2"><i class="fas fa-cart-plus"></i>&nbsp;&nbsp;Continue
                                    Shopping</a>
                                </td>
                                <td colspan="2"><b>Grand Total</b></td>
                                <td><b><i class="fas fa-rupee-sign"></i>&nbsp;&nbsp;<?= number_format($grand_total,2); ?></b></td>
                                <td>
                                <a href="homepage.php" class="btn btn-warning <?= ($grand_total > 1) ? '' : 'disabled'; ?>"><i class="far fa-credit-card"></i>&nbsp;&nbsp;Checkout</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
  </div>