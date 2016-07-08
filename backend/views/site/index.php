<?php

/* @var $this yii\web\View */

$this->title = 'Dashboard';
?>
<div class="row">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
            <div class="inner">
                <h3><?=$total_students?></h3>

                <p>Total Students</p>
            </div>
            <div class="icon">
                <i class="fa fa-user"></i>
            </div>
            <a href="index.php?r=student-master" class="small-box-footer">More info <span class="fa fa-arrow-circle-right"></span></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Total Staff</p>
            </div>
            <div class="icon">
                <i class="fa fa-black-tie"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
            <div class="inner">
                <h3>44</h3>

                <p>Present Staff</p>
            </div>
            <div class="icon">
                <i class="fa fa-eye"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
            <div class="inner">
                <h3>65</h3>

                <p>Absent Staff</p>
            </div>
            <div class="icon">
                <i class="fa fa-eye-slash"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->
