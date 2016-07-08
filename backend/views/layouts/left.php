<aside class="main-sidebar">
<?php if(Yii::$app->user->isGuest){
    Yii::$app->response->redirect(Url::to(['login']));
} ?>

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?=Yii::$app->user->identity->username?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Dashboard', 'options' => ['class' => 'header']],

                    [
                        'label' => 'Configuration',
                        'icon' => 'fa fa-gear',
                        'url' => '#',
                        'items' => [

                            [
                                'label' => 'Class and Section',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Class ', 'icon' => 'fa fa-circle-o', 'url' => ['/class-master'],],
                                    ['label' => 'Section', 'icon' => 'fa fa-circle-o', 'url' => ['/section'],],
                                    ['label' => 'Class Section', 'icon' => 'fa fa-circle-o', 'url' => ['/class-section-relation'],],


                                ],
                            ],
                            [
                                'label' => 'Finance Settings',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Charge Master ', 'icon' => 'fa fa-circle-o', 'url' => ['/fee-master'],],
                                    ['label' => 'Charge Type', 'icon' => 'fa fa-circle-o', 'url' => ['/fee-type'],],
                                    ['label' => 'Charge Breakup', 'icon' => 'fa fa-circle-o', 'url' => ['/fee-breakup'],],
                                    ['label' => 'Payment Mode ', 'icon' => 'fa fa-circle-o', 'url' => ['/payment-mode'],],



                                ],
                            ],
                            [
                                'label' => 'Location Settings',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Country ', 'icon' => 'fa fa-circle-o', 'url' => ['/country'],],
                                    ['label' => 'State', 'icon' => 'fa fa-circle-o', 'url' => ['/state'],],
                                    ['label' => 'District', 'icon' => 'fa fa-circle-o', 'url' => ['/district'],],




                                ],
                            ],
                            [
                                'label' => 'Educational Settings',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Graduation ', 'icon' => 'fa fa-circle-o', 'url' => ['/graduation'],],
                                    ['label' => 'Post Graduation', 'icon' => 'fa fa-circle-o', 'url' => ['/post-graduation'],],
                                    ['label' => 'University', 'icon' => 'fa fa-circle-o', 'url' => ['/university'],],




                                ],
                            ],
                            [
                                'label' => 'Transport Settings',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Vehicle ', 'icon' => 'fa fa-circle-o', 'url' => ['/transport'],],
                                    ['label' => 'Route', 'icon' => 'fa fa-circle-o', 'url' => ['/route'],],
                                    ['label' => 'Route Stations', 'icon' => 'fa fa-circle-o', 'url' => ['/route-immediate-stations'],],
                                    ['label' => 'Assign Route', 'icon' => 'fa fa-circle-o', 'url' => ['/transport-route'],],




                                ],
                            ],
                            [
                                'label' => 'Other Settings',
                                'icon' => 'fa fa-circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Session ', 'icon' => 'fa fa-circle-o', 'url' => ['/session'],],
                                    ['label' => 'Student Catagory', 'icon' => 'fa fa-circle-o', 'url' => ['/student-catagory'],],
                                ],
                            ],
                        ],
                    ],
                    [
                        'label' => 'Student Management',
                        'icon' => 'fa fa-user',
                        'url' => '#',
                        'items' => [
                            ['label' => 'New Admission ', 'icon' => 'fa fa-circle-o', 'url' => ['/student-master/create'],],
                            ['label' => 'Upgrade Admission ', 'icon' => 'fa fa-circle-o', 'url' => ['/student-master/upgrade'],],
                            ['label' => 'Students List ', 'icon' => 'fa fa-circle-o', 'url' => ['/student-master/'],],
                            ['label' => 'Fee ', 'icon' => 'fa fa-circle-o', 'url' => ['/fee-record-submission'],],

                        ],
                    ],
                    [
                        'label' => 'Staff Management',
                        'icon' => 'fa fa-black-tie',
                        'url' => '#',
                        'items' => [
                            ['label' => 'New Staff ', 'icon' => 'fa fa-circle-o', 'url' => ['/employee-master'],],
                            ['label' => 'Fee ', 'icon' => 'fa fa-circle-o', 'url' => ['/fee-record-submission'],],

                        ],
                    ],
                    [
                        'label' => 'Academic',
                        'icon' => 'fa fa-university',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Special Course', 'icon' => 'fa fa-circle-o', 'url' => ['/special-course'],],
                            ['label' => 'Route', 'icon' => 'fa fa-circle-o', 'url' => ['/route'],],
                            ['label' => 'Route Stations', 'icon' => 'fa fa-circle-o', 'url' => ['/route-immediate-stations'],],
                            ['label' => 'Assign Route', 'icon' => 'fa fa-circle-o', 'url' => ['/transport-route'],],




                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
