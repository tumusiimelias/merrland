<?php include('header.php'); ?>
<main>
    <div class="container-fluid">
        <div class="row">
            <div class="column-1">
                <div class="column-2">
                    <div class="column-3">
                        <h3>Send us a Message here</h3>
                        <form action="" method="post">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Full Name">
                                <label for="fullName">Full Name</label>
                            </div>
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                                <label for="address">Address</label>
                            </div>
                            <div class="form-floating">
                                <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact">
                                <label for="contact">Contact</label>
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" id="message" name="message" placeholder="Message"></textarea>
                                <label for="message">Message</label>
                            </div>
                            <button type="submit" class="submit-btn">Submit</button>
                        </form>
                    </div>
                    <div class="column-4">
                        <h2 class="heading-footer">CONTACTS</h2>
                        <span><p>P.O.BOX 844</p></span>
                        <span><p>+256776924334</p></span>
                        <span><p>+256772006748</p></span>
                        <span><p>info@merrylandhighschoolentebbe</p></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include('footer.php'); ?>
