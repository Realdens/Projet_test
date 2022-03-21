 <!-- Navigation-->
 <?php include("views/layout/nav.inc.php"); ?>
    <!-- Page Header-->
    <?php include("views/layout/header.inc.php"); ?>
    <!-- Post Content-->
    <article class="mb-4">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <p>
                        <?php echo $content; ?>
                    </p>
                </div>
            </div>
        </div>
    </article>
    <!-- Footer-->
    <?php include("views/layout/footer.inc.php"); ?>