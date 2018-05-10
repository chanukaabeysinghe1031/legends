<!--navigation bar for 770px high window width-->
<nav class="navbar navbar-default navbar-fixed-top" id="nav1">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">HOGWARTS</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="<?= $siteroot; ?>/index.php">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
        </ul>
        <form class="navbar-form navbar-right" action="/action_page.php">
            <div class="input-group">
                <input style="height: 30px;" type="text" class="form-control" placeholder="Search" name="search">
                <div class="input-group-btn">
                    <button style="height: 30px;" class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</nav>
<!--navigation bar for 770px lower window width-->
<nav class="navbar navbar-default navbar-fixed-top" id="nav2">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">HOGWARTS</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="<?= $siteroot; ?>/index.php">Home</a></li>
                <li><a href="#">Page 1</a></li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
            </ul>
            <form class="navbar-form navbar-right" action="/action_page.php">
                <div class="input-group">
                    <input style="height: 30px;" type="text" class="form-control" placeholder="Search" name="search">
                    <div class="input-group-btn">
                        <button style="height: 30px;" class="btn btn-default" type="submit">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>
