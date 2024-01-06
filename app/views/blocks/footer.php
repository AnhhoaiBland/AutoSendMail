<!-- END MAIN CONTENT-->
<!-- END PAGE CONTAINER-->
</div>
</div>
</div>
</div>
</div>
<!-- Jquery JS-->
<script src="<?= ASSETS ?>/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?= ASSETS ?>/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?= ASSETS ?>/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?= ASSETS ?>/vendor/slick/slick.min.js">
</script>
<script src="<?= ASSETS ?>/vendor/wow/wow.min.js"></script>
<script src="<?= ASSETS ?>/vendor/animsition/animsition.min.js"></script>
<script src="<?= ASSETS ?>/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?= ASSETS ?>/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?= ASSETS ?>/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?= ASSETS ?>/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?= ASSETS ?>/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?= ASSETS ?>/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?= ASSETS ?>/vendor/select2/select2.min.js">
</script>
<!-- Main JS-->
<script src="<?= ASSETS ?>/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var attr_count = 1;

    function add_product_attribute() {
        attr_count++;
        var html = '<div class="row form-group" id="attr_' + attr_count + '"> <div class="col col-md-3"> <label for="color-input" class="form-control-label">Variants</label> </div> <div class="col-12 col-md-2"> <select name="color[]" id="select" class="form-control"> <?php if (!empty($data['color'])) : ?> <?php foreach ($data['color'] as $color) : ?> <option value="<?= $color['id'] ?>"><?= $color['name'] ?></option> <?php endforeach ?> <?php endif ?> </select> </div> <div class="col-12 col-md-2"> <select name="ram[]" id="" class="form-control"> <?php if (!empty($data['ram'])) : ?> <?php foreach ($data['ram'] as $ram) : ?> <option value="<?= $ram['id'] ?>"><?= $ram['name'] ?></option> <?php endforeach ?> <?php endif ?> </select> </div> <div class="col-12 col-md-2 mb-2"><input type="text" name="price[]" class="form-control" placeholder="Price"> </div> <div class="col-12 col-md-1 mb-2"><input type="text" name="qty[]" class="form-control" placeholder="Qty"></div> <div class="col-12 col-md-2 mb-2"><button class="btn btn-danger" onclick=remove_attr("' + attr_count + '") type="button">Remove</button></div><input type="hidden" value="" name="attr_id[]"> </div>';
        jQuery('#product_attr').append(html);
    }

    function remove_attr(attr_count, id) {
        jQuery.ajax({
            url: '/product/del/',
            data: 'id=' + id,
            type: 'post',
            success: function(result) {
                jQuery('#attr_' + attr_count).remove();
            }
        })


    }

    function add_attr() {
        var html = '<div id="product_attr"> <div class="row form-group"> <div class="col col-md-3"> <label for="color-input" class="form-control-label">Variants</label> </div> <div class="col-12 col-md-2"> <select name="color[]" id="select" class="form-control"> <?php if (!empty($data['color'])) : ?> <?php foreach ($data['color'] as $color) : ?> <option value="<?= $color['id'] ?>"><?= $color['name'] ?></option> <?php endforeach ?> <?php endif ?> </select> </div> <div class="col-12 col-md-2"><select name="ram[]" id="" class="form-control"> <?php if (!empty($data['ram'])) : ?> <?php foreach ($data['ram'] as $ram) : ?> <option value="<?= $ram['id'] ?>"><?= $ram['name'] ?></option> <?php endforeach ?> <?php endif ?> </select> </div> <div class="col-12 col-md-2 mb-2"> <input type="text" name="price[]" class="form-control" placeholder="Price"> </div> <div class="col-12 col-md-1 mb-2"> <input type="text" name="qty[]" class="form-control" placeholder="Qty"> </div> <div class="col-12 col-md-2"> <button class="btn btn-primary" onclick="add_product_attribute()" type="button">Add more</button> </div> </div> <input type="hidden" value="" name="attr_id[]"> </div>';
        jQuery('#add_attr').append(html);
        jQuery('#one_attr').empty();
        document.getElementById("buttonA").disabled = true;
        document.getElementById("buttonA").style.background = 'blue';
        document.getElementById("buttonA").style.color = 'white';
        document.getElementById("buttonB").style.background = 'white';
        document.getElementById("buttonB").style.color = 'blue';
        document.getElementById("buttonB").disabled = false;
    }

    function one_attr() {
        var html = '<div id="b"> <div class="row form-group"> <div class="col col-md-3"> <label for="password-input" class=" form-control-label">Price</label> </div> <div class="col-12 col-md-9"> <input type="text" id="password-input" name="price" placeholder="Price" class="form-control"> <small class="help-block form-text">Please enter a complex password</small> </div> <div class="col col-md-3"> <label for="password-input" class=" form-control-label">Quantity</label> </div> <div class="col-12 col-md-9"> <input type="text" id="password-input" name="qty" placeholder="Quantity" class="form-control"> <small class="help-block form-text">Please enter a complex password</small> </div> </div> </div>';
        jQuery('#one_attr').append(html);
        jQuery('#add_attr').empty();
        document.getElementById("buttonA").disabled = false;
        document.getElementById("buttonB").style.background = 'blue';
        document.getElementById("buttonB").style.color = 'white';
        document.getElementById("buttonA").style.background = 'white';
        document.getElementById("buttonA").style.color = 'blue';
        document.getElementById("buttonB").disabled = true;
    }

</script>
<script>
    // Dữ liệu từ PHP
    var weeklyCounts = <?php echo json_encode($data['weeklyProductStatistics']); ?>;

    // Tạo mảng các tuần và số lượng tương ứng
    var weeks = Object.keys(weeklyCounts);
    var counts = Object.values(weeklyCounts);

    // Lấy canvas element
    var ctx = document.getElementById('myChart').getContext('2d');

    // Vẽ biểu đồ cột
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: weeks,
            datasets: [{
                label: 'Số lượng sản phẩm',
                data: counts,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
</body>

</html>
<!-- end document-->