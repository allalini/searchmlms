<?php require_once('../private/initialize.php');

include(SHARED_PATH . '/public_header.php');
// GET
// user enters search, then hits enter to submit
// POST with form data like: mlm_search: 'whatever'
// PHP parses form data into $_POST dictionary
// we pull mlm_search into php variable of the same name
?>
    <main id="main">
        <header class="search-bar">
            <img src="../images/magnifying-glass-128.png" width="128" height="128" alt="magnifying glass"
                 class="mag-glasses" id="first-glass" draggable="false">
            <img src="../images/magnifying-glass-64.png" width="64" height="64" alt="magnifying glass"
                 class="mag-glasses lighter-glasses" id="glass-2" draggable="false">
            <img src="../images/magnifying-glass-640.png" width="256" height="256" alt="magnifying glass"
                 class="mag-glasses" id="glass-lg" draggable="false">
            <div>
                <form action="index.php" method="POST">
                    <h1 id="main-h1">Is&nbsp;<input aria-label="organization name" autofocus type="search" name="mlm_search" height="30px" id="mlm-search">&nbsp;an&nbsp;MLM?</h1>
                </form>
                <?php
                if (is_post_request()) {
                    $mlm_search = $_POST['mlm_search'] ?? '';
                    // check the database for mlm
                    $mlm = Mlm::find_by_mlm_name($mlm_search);
                    if ($mlm) {
                        if ($mlm->is_mlm == '1') {
                            echo $mlm->mlm_name . ' is an MLM.';
                        } else {
                            echo $mlm->mlm_name . ' is not an MLM.';
                        }
                    } else {
                        echo "'".$mlm_search."' was not found.";
                    }
                }
                ?>
            </div>
            <img src="../images/magnifying-glass-128.png" width="128" height="128" alt="magnifying glass"
                 class="mag-glasses lighter-glasses" id="glass-medium" draggable="false">
            <img src="../images/magnifying-glass-640.png" width="216" height="216" alt="magnifying glass"
                 class="mag-glasses" id="glass-last" draggable="false">
        </header>

        <div id="main-content">
            <div>
                <h2>What is multi-level marketing?</h2>
                <p>Multi-level marketing (MLM or MLMs) used to take place at home parties or in coffee shops. In recent
                    years, it's become more
                    common on social media. Direct selling companies use multi-level marketing as a strategy to
                    encourage members to recruit more members into the company.
                    People who are part of MLMs are often called "distributors", "consultants", or "brand partners".
                    Often times, though, people who think they are working for a MLM company are made to buy products
                    for personal use or run pricey auto shipments, effectively making them customers.
                </p>
                <p>
                    It can sometimes be difficult to tell from a company's website if they are an MLM company or not.
                    Use the search feature above and quickly find out if a company operates as an MLM.
                    You can also check the MLM master list, or check out videos about multi-level marketing on YouTube.
                </p>
            </div>
            <img src="../images/boss.jpg" width="400" height="400" id="boss" alt="boss babe vibes">
        </div>
    </main>
<?php include(SHARED_PATH . '/public_footer.php'); ?>