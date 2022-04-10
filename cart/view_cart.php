
        <?php
session_start();
if(isset($_SESSION['cart'] )){
    ?>
    <style>
        table,tr,td,th{
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
    <div style="display:flex;justify-content:center;align-items:center;margin:30px">
    <table  class='view-cart-table'>
        <tr>
            <th>Index</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Total Price</th>
            <th>Action</th>
        </tr>
    <?php
    $total=0;
    foreach ($_SESSION['cart'] as $key => $value) {
        try {
            $total = $value['productPrice'] * $value['productQuantity'];
        } catch (\Throwable $th) {
        }
        
        ?>
        <tr>
            <td>
                <?=$key?>
            </td>            
            
            <td>

                <?=$value['productName'];?>
            </td>
                <td>

                    <?=$value['productPrice'];?>
                </td>
                <td>

                    <?=$value['productQuantity'];?>
                </td>
        <td >
            <img src="<?=$value['image_address']?>"  style="width:20vw;display:flex;justify-content:center;align-items:center;padding:10px" alt="img not available" srcset="">
        </td>
        <td>
        <?=$total?>
        </td>
        <td>
        <button >update</button>    
            <button>delete</button>
            
        </td>
        </tr>
        <?php $total=0;
    }?>
    </table>
    </div>
    <?php
    }
    else{
         echo "Cart is empty please add something";
            }        
            ?>