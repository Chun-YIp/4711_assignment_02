<h2>Thank you for your purchase.</h2>
<br>
<br>


<div class="panel panel-danger">
    <div class="panel-heading">
        <h3 class="panel-title text-center">Receipt (Remove this later - Inside the sales_order.php view)</h3>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
        {stock}
            <tr>
                <td>{name}</td>
                <td>{quantity}</td>
                <td>{price}</td>
            </tr>
        {/stock}
        </tbody>
    </table>
</div>