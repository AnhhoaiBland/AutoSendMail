<div class="row m-t-25">
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c1">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <div class="text">
                        <h2><?= $data['productStatistics'] ?></h2>
                        <span>Product Quantity</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart1"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c2">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="fas fa-table"></i>
                    </div>
                    <div class="text">
                        <h2><?= $data['categoryStatistics'] ?></h2>
                        <span>Category Quantity</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart2"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c3">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="text">
                        <h2><?= $data['orderStatistics'] ?></h2>
                        <span>Order Quantity</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart3"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-lg-3">
        <div class="overview-item overview-item--c4">
            <div class="overview__inner">
                <div class="overview-box clearfix">
                    <div class="icon">
                        <i class="fas fa-send"></i>
                    </div>
                    <div class="text">
                        <h2><?= $data['postStatistics'] ?></h2>
                        <span>Post quantity</span>
                    </div>
                </div>
                <div class="overview-chart">
                    <canvas id="widgetChart4"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
        <h2 class="title-1 m-b-25">New Product</h2>
        <div class="table-responsive table--no-card m-b-40">
            <table class="table table-borderless table-striped table-earning">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>name</th>
                        <th>date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($data['totalProductStatistics'] as $row) {
                        ?>
                        <tr>
                            <td><img src="../../../../<?= $row['image'] ?>" alt="" width="40px" height="40px"></td>
                            <td><?= $row['name'] ?></td>
                            <td><?= calculateTimeDifference(strtotime($row['created_at'])) ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-lg-4">
        <h2 class="title-1 m-b-25">New Client</h2>
        <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
            <div class="au-card-inner">
                <div class="table-responsive">
                    <table class="table table-top-countries">
                        <tbody>
                            <?php
                                foreach ($data['userStatistics'] as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= calculateTimeDifference(strtotime($row['created_at'])) ?></td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="au-card recent-report">
            <div class="au-card-inner">
                <canvas id="myChart" width="600" height="200"></canvas>
            </div>
        </div>
    </div>
</div>