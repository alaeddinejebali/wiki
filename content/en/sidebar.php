<!-- START OF LEFT PANEL -->
<div class="leftpanel">

    <div class="logopanel">
        <a href="/"><img src="/assets/images/logo.png" alt="Ala Eddine JEBALI"/></a>
    </div>
    <!--logopanel-->

    <div class="searchpanel">
        <form action="index.html" method="post">
            <input type="text" name="keyword" placeholder="Search and hit enter..."/>
        </form>
    </div>
    <!--searchpanel-->

    <div class="menupanel">
        <ul>
            <li class="<?= $currentActivePage['home'] ?>">
                <a href="/"><span class="iconfa-home"></span> Home</a>
            </li>
            <?php if (!empty($_SESSION['login.loggedUser'])) { ?>
                <li class="<?= $currentActivePage['wiki'] ?>">
                    <a href=""><span class="iconfa-star"></span> Wiki</a><i
                        class="iconfa-angle-right sub-indicator"></i>
                    <ul>
                        <li>
                            <a href="company.html">Java/J2EE</a><i class="iconfa-angle-right sub-indicator"></i>
                            <ul>
                                <li><a href="company.html">Java</a></li>
                                <li><a href="ourteam.html">Hibernate</a></li>
                                <li><a href="careers.html">Spring</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="company.html">Mobile</a><i class="iconfa-angle-right sub-indicator"></i>
                            <ul>
                                <li><a href="company.html">Android</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">PHP</a><i class="iconfa-angle-right sub-indicator"></i>
                            <ul>
                                <li><a href="ourteam.html">CakePHP</a></li>
                                <li><a href="/wiki/php/php5">PHP5</a></li>
                                <li><a href="/wiki/php/symfony">Symfony</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="company.html">Web</a><i class="iconfa-angle-right sub-indicator"></i>
                            <ul>
                                <li>
                                    <a href="#">JavaScript</a><i
                                        class="iconfa-angle-right sub-indicator"></i>
                                    <ul>
                                        <li>
                                            <a href="/wiki/web/javascript">JavaScript</a>
                                        <li>
                                            <a href="/wiki/web/angularjs">AngularJS</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="ourteam.html">Design</a><i class="iconfa-angle-right sub-indicator"></i>
                                    <ul>
                                        <li>
                                            <a href="">Bootstrap</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/wiki/web/tips-web">Trucs web</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="company.html">Others</a><i class="iconfa-angle-right sub-indicator"></i>
                            <ul>
                                <li><a href="/wiki/divers/docker">Docker</a></li>
                                <li><a href="/wiki/divers/git">GIT</a></li>
                                <li><a href="/wiki/divers/ide">IDE</a></li>
                                <li><a href="/wiki/divers/linux">Linux</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="/logout"><span class="iconfa-lock"></span> Logout</a>
                </li>
            <?php } ?>
            <li class="<?= $currentActivePage['aboutMe'] ?>">
                <a href="/about-me"><span class="iconfa-user-md"></span> About me</a>
            </li>
            <li class="<?= $currentActivePage['certifications'] ?>">
                <a href="/certifications"><span class="iconfa-trophy"></span> Certifications</a>
            </li>
            <li class="<?= $currentActivePage['contact'] ?>">
                <a href="/contact"><span class="iconfa-envelope"></span> Contact Me</a>
            </li>
            <li class="<?= $currentActivePage['blog'] ?>">
                <a href="/blog"><span class="iconfa-file"></span> Blog</a>
            </li>
            <?php if (empty($_SESSION['login.loggedUser'])) { ?>
                <li class="<?= $currentActivePage['login'] ?>">
                    <a href="/login"><span class="iconfa-unlock"></span> Login</a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <!--menupanel-->
</div><!--leftpanel-->
