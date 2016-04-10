<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if gte IE 9]>
    <style type="text/css">
        .green_gradient {
            filter: none;
        }
    </style>
    <![endif]-->
    <title>test page</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/jQuery_1.11.2.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
</head>

<body>

<div class="wrapper">
    <div class="width_site">
        <header class="header main">
            <div class="left">
                Managment System
            </div>
            <div class="right">
                <a href="#" class="login">username</a>
                <a href="#" class="logout">Logout</a>
            </div>
            <div class="clear"></div>
            <ul class="tab-links">
                <li class="active"><a href="#tab1">Customers</a></li>
                <li><a href="#tab2">Customer Roles</a></li>
            </ul>
        </header><!-- .header-->

        <main class="content">
            <!--div class="tabs"-->

            <div class="tab-content">
                <div id="tab1" class="tab active">
                    <h2>Details</h2>
                    <form action="#" method="post">
                        <div class="buttons">
                            <input type="submit" class="button" value="Save" />
                            <input type="reset" class="button" value="Cancel" />
                        </div>
                        <div class="left">
                            <div class="bg"></div>
                            <div class="form_input">
                                <label>Login</label>
                                <input type="text" name="login" />
                            </div>
                            <div class="form_input">
                                <label>Password</label>
                                <input type="password" name="password" />
                            </div>
                            <div class="form_input">
                                <label>Confirm password</label>
                                <input type="password" name="confirm_pass" />
                            </div>
                            <div class="form_input">
                                <label>First name</label>
                                <input type="text" name="f_name" />
                            </div>
                            <div class="form_input">
                                <label>Last name</label>
                                <input type="text" name="l_name" />
                            </div>
                            <div class="form_input">
                                <label>Email</label>
                                <input type="email" name="email" />
                            </div>
                            <div class="form_input">
                                <label>Roles</label>
                                <textarea name="roles"></textarea>
                            </div>
                            <div class="form_input">
                                <input type="checkbox" name="active" />
                                <label>Active</label>

                            </div>
                        </div>
                        <div class="sidebar right">
                            <div class="stats bg_grey">
                                <p class="blue">Stats</p>
                                <div>
                                    <span class="left">Total items</span>
                                    <span class="right">545</span>
                                    <div class="clear"></div>
                                </div>
                            </div>
                            <div class="search bg_grey">
                                <form method="get" action="#">
                                    <p class="blue">Search</p>
                                    <input type="text" name="query" />
                                    <input type="submit" value="Search" />
                                    <div class="clear"></div>
                                </form>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </form>
                </div>
                <div id="tab2" class="tab">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac nibh eros. Cras in ipsum faucibus, aliquet tellus at, porttitor mi. Donec nec justo in tellus facilisis euismod. Ut porta tristique nisi, vitae fringilla mi rhoncus et. Pellentesque vitae viverra massa, non eleifend libero. Aliquam ac quam odio. Pellentesque id ante ante. Fusce euismod nisl quis suscipit vehicula. Duis suscipit suscipit tortor, in luctus ligula facilisis in. Aenean rutrum pellentesque lorem, eget tristique augue lobortis vitae. Vivamus rhoncus, tortor sit amet ornare elementum, erat risus feugiat diam, ac interdum urna justo id arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.

                        Phasellus ex ligula, pulvinar at dui eu, sodales consequat urna. Praesent bibendum velit vitae lectus mattis lacinia. Nulla facilisi. Quisque euismod ac urna sit amet luctus. Vivamus dictum mauris nec nulla posuere, non lacinia dolor rhoncus. Sed non tempor nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras mollis enim non interdum efficitur.

                        Integer gravida libero nec volutpat bibendum. Ut mattis urna a bibendum sodales. Mauris quis eleifend mi. Vivamus porta justo in maximus pellentesque. Suspendisse imperdiet lacus id magna lacinia ultricies. Aenean et metus ut metus luctus sagittis eu vitae felis. Praesent non convallis sapien.

                        Quisque nec scelerisque elit, quis blandit augue. Duis posuere magna sit amet arcu semper pharetra. Praesent nec accumsan est. Integer blandit dui a mi convallis ornare. Sed consectetur leo id dui scelerisque fermentum. Quisque vitae faucibus purus. Donec eu quam eget arcu finibus volutpat. Mauris lacinia, dui nec bibendum elementum, tellus metus dictum neque, quis dictum tellus urna quis nisl. Interdum et malesuada fames ac ante ipsum primis in faucibus.

                        Fusce semper, magna ut mattis blandit, sapien nisi consequat sapien, in scelerisque nisi elit et nulla. Nulla id ante massa. Curabitur libero neque, consequat ac tincidunt sit amet, commodo sit amet ipsum. Fusce velit risus, auctor id pulvinar sed, tincidunt non arcu. Etiam ut felis in urna maximus mattis. In et euismod turpis. Mauris augue metus, luctus vel ornare a, consequat ut elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis maximus imperdiet mollis. Nunc in pharetra tellus, nec fermentum magna. Maecenas iaculis interdum diam vitae molestie. Praesent facilisis euismod purus, in condimentum libero pellentesque non. Maecenas faucibus sem id eleifend tristique. Sed suscipit posuere lectus a consequat. Duis quis lacinia eros, vel euismod sapien. Fusce elementum mi ac mauris laoreet tempor.
                    </p>
                </div>
            </div>
            <!--/div-->
        </main><!-- .content -->
    </div><!-- .width_site -->

    <footer class="footer width_site">

    </footer><!-- .footer -->
</div> <!-- .wrapper -->
</body>
</html>