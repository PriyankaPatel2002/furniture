<?php include "layout/header.php" ?>
<!-- breadcrumbs Section start -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <h1>Cart</h1>
        </div>
    </div>
</section>
<!-- breadcrumbs Section End -->
<!-- Cart Section Start -->
<section class="cart-container">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <table class="table" width="100%">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="images/product-1.png" alt="" class="img-fluid table-img"></td>
                            <td>
                                <h3 class="fs-4">Product 1</h3>
                            </td>
                            <td>$49.00</td>
                            <td>
                                <div class="input-group mb-3 d-flex justify-content-center align-items-center">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                    </div>
                                    <input type="text" class="form-control text-center" value="1" placeholder=""
                                        aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                    </div>
                                </div>
                            </td>
                            <td>$49.00</td>
                            <td><a href="#"><i class="fa-solid fa-x text-secondary"></i></a></td>
                        </tr>

                        <tr>
                            <td><img src="images/product-2.png" alt="" class="img-fluid table-img"></td>
                            <td>
                                <h3 class="fs-4">Product 2</h3>
                            </td>
                            <td>$49.00</td>
                            <td>
                                <div class="input-group mb-3 d-flex justify-content-center align-items-center">
                                    <div class="input-group-prepend">
                                        <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                                    </div>
                                    <input type="text" class="form-control text-center quantity-amount" value="1"
                                        placeholder="" aria-label="Example text with button addon"
                                        aria-describedby="button-addon1">
                                    <div class="input-group-append">
                                        <button class="btn btn-outline-black increase" type="button">&plus;</button>
                                    </div>
                                </div>
                            </td>
                            <td>$49.00</td>
                            <td><a href="#"><i class="fa-solid fa-x text-secondary"></i></a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!-- Cart Section End -->
<!-- coupon section Start -->
<section class="coupon-section pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <button class="btn btn-black btn-sm btn-block">Update Cart</button>
                    </div>
                    <div class="col-lg-6">
                        <button class="btn btn-black btn-sm btn-block">Continue Shopping</button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Coupon</h4>
                        <p>Enter your coupon code if you have one.</p>
                    </div>
                    <div class="col-lg-8">
                        <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                    </div>
                    <div class="col-lg-4">
                        <button class="btn btn-black">Apply Coupon</button>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 pl-5">
                <div class="row justify-content-end">
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-lg-12 text-right border-bottom mb-5">
                                <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-lg-6">
                                <span class="text-black">Subtotal</span>
                            </div>
                            <div class="col-lg-6 text-right">
                                <strong class="text-black">$230.00</strong>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-6">
                                <span class="text-black">Total</span>
                            </div>
                            <div class="col-lg-6 text-right">
                                <strong class="text-black">$230.00</strong>
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-12">
                                <button class="btn btn-black btn-lg py-3"><a href="user.php" class="text-decoration-none text-white">Proceed To Checkout</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<!-- coupon section End -->
<?php include "layout/footer.php" ?>