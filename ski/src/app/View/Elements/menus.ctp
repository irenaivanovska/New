
<div class="navbar-wrapper">
        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Project name</a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <?php echo '<li class="active">'.$this->Html->link('Home', '/').'</li>';
                        echo '<li>' . $this->Html->link('Seasons', '/Seasons') . '</li>';
                        echo '<li>' . $this->Html->link('Leagues', '/Leagues') . '</li>';
                        echo '<li>' . $this->Html->link('Schools', '/Schools') . '</li>';?>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>

                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-header">Nav header</li>
                                <li><a href="#">Separated link</a></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                        <li>
                            <?php if ($is_logged_in) {
                                echo $this->HTML->link(__('Logout'), array('controller' => 'users', 'action' => 'logout'), array('id' => 'logout'));
                            } else {
                                echo '<div class="login_right">';
                                echo $this->HTML->link(__('Login'), array('controller' => 'users', 'action' => 'login'), array('id' => 'login'));
                                echo '</div>';
                            }?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
