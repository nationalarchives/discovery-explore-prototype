<section class="row" id="holds-breadcrumb">
    <div class="col starts-at-full ends-at-half clr">
        <nav id="breadcrumb">
            <ul>
                <li><a href="http://www.nationalarchives.gov.uk/">Home</a></li>
                <li><a href="http://discovery.nationalarchives.gov.uk/" class="breadcrumbs">Discovery</a></li>
                <?= $record['reference'] ?>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col starts-at-full ends-at-half clr">
        <nav id="page-controls">

            <ul>
                <li><a href="/" class="startNewSearch">Start new search</a></li>
                <li>
                    <a class="printThisPage" href="javascript:window.print()" title="print">Print</a>
                </li>
                <!--<li>
                    <a href="http://www.nationalarchives.gov.uk/help-with-your-research/discovery-help" target="_blank" id="helpLink">
                        Discovery help
                    </a>
                </li>-->



                <a href="/sign-in" id="bookmarkLink" class="bookMarkIwthIcon">Bookmark</a>
            </ul>
        </nav>
    </div>
</section>