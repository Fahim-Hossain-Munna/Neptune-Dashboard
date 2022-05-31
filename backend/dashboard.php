<?php
$tab_title = "Neptune - Welcome Your Admin Panal";
?>

<?php
require_once "partisions/upper.php";
?>
                    <div class="container">
                    <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Dashboard</h1>
                                   <h2>Hello <?= $_SESSION["s_name"] ?>, (<?= $_SESSION["s_mail"] ?>)</h2>
                                   <h3>Your ID : <?= $_SESSION["s_id"] ?> </h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-4">
                            <?php
                                $select_total_user_count_query = "SELECT COUNT(*) as total_user FROM `singup_page`";
                                $connect_db = mysqli_query($db_connect, $select_total_user_count_query);
                                $total_client = mysqli_fetch_assoc($connect_db)['total_user'];
                            ?>
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-primary">
                                                <i class="material-icons-outlined">account_circle</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Total User</span>
                                                <span class="widget-stats-amount"> <?=$total_client ?> people, </span>
                                            </div>
                                            <div class="widget-stats-indicator align-self-start">
                                                <i class="material-icons">keyboard_arrow_down</i> <span class="widget-stats-amount badge badge-success">Active</span>
                                            </div>
                                        </div>
                                        <div class="widget-stats-chart" style="position: relative;">
                                            <div id="widget-stats-chart1" style="min-height: 80px;"><div id="apexchartssparkline1" class="apexcharts-canvas apexchartssparkline1 apexcharts-theme-light" style="width: 502px; height: 80px;"><svg id="SvgjsSvg1277" width="502" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1279" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1278"><clipPath id="gridRectMaskazycm17h"><rect id="SvgjsRect1284" width="510" height="84" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskazycm17h"><rect id="SvgjsRect1285" width="506" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1290" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1291" stop-opacity="0.65" stop-color="rgba(220,230,236,0.65)" offset="0"></stop><stop id="SvgjsStop1292" stop-opacity="0.5" stop-color="rgba(238,243,246,0.5)" offset="1"></stop><stop id="SvgjsStop1293" stop-opacity="0.5" stop-color="rgba(238,243,246,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1283" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1296" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1297" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1306" class="apexcharts-grid"><g id="SvgjsG1307" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1309" x1="0" y1="0" x2="502" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1310" x1="0" y1="8" x2="502" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1311" x1="0" y1="16" x2="502" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1312" x1="0" y1="24" x2="502" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1313" x1="0" y1="32" x2="502" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1314" x1="0" y1="40" x2="502" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1315" x1="0" y1="48" x2="502" y2="48" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1316" x1="0" y1="56" x2="502" y2="56" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1317" x1="0" y1="64" x2="502" y2="64" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1318" x1="0" y1="72" x2="502" y2="72" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1319" x1="0" y1="80" x2="502" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1308" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1321" x1="0" y1="80" x2="502" y2="80" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1320" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1286" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1287" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1294" d="M 0 80L 0 26.666666666666664C 29.28333333333333 26.666666666666664 54.38333333333334 60 83.66666666666667 60C 112.95 60 138.05 6.666666666666671 167.33333333333334 6.666666666666671C 196.61666666666667 6.666666666666671 221.71666666666667 37.333333333333336 251 37.333333333333336C 280.28333333333336 37.333333333333336 305.3833333333333 53.33333333333333 334.6666666666667 53.33333333333333C 363.95 53.33333333333333 389.05 13.333333333333329 418.3333333333333 13.333333333333329C 447.6166666666667 13.333333333333329 472.71666666666664 25.333333333333336 502 25.333333333333336C 502 25.333333333333336 502 25.333333333333336 502 80M 502 25.333333333333336z" fill="url(#SvgjsLinearGradient1290)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskazycm17h)" pathTo="M 0 80L 0 26.666666666666664C 29.28333333333333 26.666666666666664 54.38333333333334 60 83.66666666666667 60C 112.95 60 138.05 6.666666666666671 167.33333333333334 6.666666666666671C 196.61666666666667 6.666666666666671 221.71666666666667 37.333333333333336 251 37.333333333333336C 280.28333333333336 37.333333333333336 305.3833333333333 53.33333333333333 334.6666666666667 53.33333333333333C 363.95 53.33333333333333 389.05 13.333333333333329 418.3333333333333 13.333333333333329C 447.6166666666667 13.333333333333329 472.71666666666664 25.333333333333336 502 25.333333333333336C 502 25.333333333333336 502 25.333333333333336 502 80M 502 25.333333333333336z" pathFrom="M -1 80L -1 80L 83.66666666666667 80L 167.33333333333334 80L 251 80L 334.6666666666667 80L 418.3333333333333 80L 502 80"></path><path id="SvgjsPath1295" d="M 0 26.666666666666664C 29.28333333333333 26.666666666666664 54.38333333333334 60 83.66666666666667 60C 112.95 60 138.05 6.666666666666671 167.33333333333334 6.666666666666671C 196.61666666666667 6.666666666666671 221.71666666666667 37.333333333333336 251 37.333333333333336C 280.28333333333336 37.333333333333336 305.3833333333333 53.33333333333333 334.6666666666667 53.33333333333333C 363.95 53.33333333333333 389.05 13.333333333333329 418.3333333333333 13.333333333333329C 447.6166666666667 13.333333333333329 472.71666666666664 25.333333333333336 502 25.333333333333336" fill="none" fill-opacity="1" stroke="#dce6ec" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskazycm17h)" pathTo="M 0 26.666666666666664C 29.28333333333333 26.666666666666664 54.38333333333334 60 83.66666666666667 60C 112.95 60 138.05 6.666666666666671 167.33333333333334 6.666666666666671C 196.61666666666667 6.666666666666671 221.71666666666667 37.333333333333336 251 37.333333333333336C 280.28333333333336 37.333333333333336 305.3833333333333 53.33333333333333 334.6666666666667 53.33333333333333C 363.95 53.33333333333333 389.05 13.333333333333329 418.3333333333333 13.333333333333329C 447.6166666666667 13.333333333333329 472.71666666666664 25.333333333333336 502 25.333333333333336" pathFrom="M -1 80L -1 80L 83.66666666666667 80L 167.33333333333334 80L 251 80L 334.6666666666667 80L 418.3333333333333 80L 502 80"></path><g id="SvgjsG1288" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1327" r="0" cx="0" cy="0" class="apexcharts-marker w11ss907e no-pointer-events" stroke="#ffffff" fill="#dce6ec" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1289" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1322" x1="0" y1="0" x2="502" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1323" x1="0" y1="0" x2="502" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1324" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1325" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1326" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1282" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1305" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1280" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(220, 230, 236);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 503px; height: 81px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                            <?php
                                $select_total_user_count_query = "SELECT COUNT(*) as total_user FROM `client_massages`";
                                $connect_db = mysqli_query($db_connect, $select_total_user_count_query);
                                $total_client = mysqli_fetch_assoc($connect_db)['total_user'];
                            ?>
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-warning">
                                                <i class="material-icons-outlined">comment</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Total Messages sent</span>
                                                <span class="widget-stats-amount"><?=$total_client ?> wishes,</span>
                                            </div>
                                            <div class="widget-stats-indicator align-self-start">
                                                <i class="material-icons">keyboard_arrow_down</i> <span class="widget-stats-amount badge badge-success">Active</span>
                                            </div>
                                        </div>
                                        <div class="widget-stats-chart" style="position: relative;">
                                            <div id="widget-stats-chart2" style="min-height: 80px;"><div id="apexchartssparkline2" class="apexcharts-canvas apexchartssparkline2 apexcharts-theme-light" style="width: 502px; height: 80px;"><svg id="SvgjsSvg1329" width="502" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1331" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1330"><clipPath id="gridRectMaskvedjbdjs"><rect id="SvgjsRect1336" width="510" height="84" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskvedjbdjs"><rect id="SvgjsRect1337" width="506" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1342" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1343" stop-opacity="0.65" stop-color="rgba(255,221,184,0.65)" offset="0"></stop><stop id="SvgjsStop1344" stop-opacity="0.5" stop-color="rgba(255,238,220,0.5)" offset="1"></stop><stop id="SvgjsStop1345" stop-opacity="0.5" stop-color="rgba(255,238,220,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1335" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1348" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1349" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1358" class="apexcharts-grid"><g id="SvgjsG1359" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1361" x1="0" y1="0" x2="502" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1362" x1="0" y1="8" x2="502" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1363" x1="0" y1="16" x2="502" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1364" x1="0" y1="24" x2="502" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1365" x1="0" y1="32" x2="502" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1366" x1="0" y1="40" x2="502" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1367" x1="0" y1="48" x2="502" y2="48" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1368" x1="0" y1="56" x2="502" y2="56" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1369" x1="0" y1="64" x2="502" y2="64" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1370" x1="0" y1="72" x2="502" y2="72" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1371" x1="0" y1="80" x2="502" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1360" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1373" x1="0" y1="80" x2="502" y2="80" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1372" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1338" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1339" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1346" d="M 0 80L 0 61.33333333333333C 29.28333333333333 61.33333333333333 54.38333333333334 26.666666666666664 83.66666666666667 26.666666666666664C 112.95 26.666666666666664 138.05 33.333333333333336 167.33333333333334 33.333333333333336C 196.61666666666667 33.333333333333336 221.71666666666667 53.33333333333333 251 53.33333333333333C 280.28333333333336 53.33333333333333 305.3833333333333 13.333333333333329 334.6666666666667 13.333333333333329C 363.95 13.333333333333329 389.05 46.666666666666664 418.3333333333333 46.666666666666664C 447.6166666666667 46.666666666666664 472.71666666666664 14.666666666666671 502 14.666666666666671C 502 14.666666666666671 502 14.666666666666671 502 80M 502 14.666666666666671z" fill="url(#SvgjsLinearGradient1342)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskvedjbdjs)" pathTo="M 0 80L 0 61.33333333333333C 29.28333333333333 61.33333333333333 54.38333333333334 26.666666666666664 83.66666666666667 26.666666666666664C 112.95 26.666666666666664 138.05 33.333333333333336 167.33333333333334 33.333333333333336C 196.61666666666667 33.333333333333336 221.71666666666667 53.33333333333333 251 53.33333333333333C 280.28333333333336 53.33333333333333 305.3833333333333 13.333333333333329 334.6666666666667 13.333333333333329C 363.95 13.333333333333329 389.05 46.666666666666664 418.3333333333333 46.666666666666664C 447.6166666666667 46.666666666666664 472.71666666666664 14.666666666666671 502 14.666666666666671C 502 14.666666666666671 502 14.666666666666671 502 80M 502 14.666666666666671z" pathFrom="M -1 80L -1 80L 83.66666666666667 80L 167.33333333333334 80L 251 80L 334.6666666666667 80L 418.3333333333333 80L 502 80"></path><path id="SvgjsPath1347" d="M 0 61.33333333333333C 29.28333333333333 61.33333333333333 54.38333333333334 26.666666666666664 83.66666666666667 26.666666666666664C 112.95 26.666666666666664 138.05 33.333333333333336 167.33333333333334 33.333333333333336C 196.61666666666667 33.333333333333336 221.71666666666667 53.33333333333333 251 53.33333333333333C 280.28333333333336 53.33333333333333 305.3833333333333 13.333333333333329 334.6666666666667 13.333333333333329C 363.95 13.333333333333329 389.05 46.666666666666664 418.3333333333333 46.666666666666664C 447.6166666666667 46.666666666666664 472.71666666666664 14.666666666666671 502 14.666666666666671" fill="none" fill-opacity="1" stroke="#ffddb8" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskvedjbdjs)" pathTo="M 0 61.33333333333333C 29.28333333333333 61.33333333333333 54.38333333333334 26.666666666666664 83.66666666666667 26.666666666666664C 112.95 26.666666666666664 138.05 33.333333333333336 167.33333333333334 33.333333333333336C 196.61666666666667 33.333333333333336 221.71666666666667 53.33333333333333 251 53.33333333333333C 280.28333333333336 53.33333333333333 305.3833333333333 13.333333333333329 334.6666666666667 13.333333333333329C 363.95 13.333333333333329 389.05 46.666666666666664 418.3333333333333 46.666666666666664C 447.6166666666667 46.666666666666664 472.71666666666664 14.666666666666671 502 14.666666666666671" pathFrom="M -1 80L -1 80L 83.66666666666667 80L 167.33333333333334 80L 251 80L 334.6666666666667 80L 418.3333333333333 80L 502 80"></path><g id="SvgjsG1340" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1379" r="0" cx="0" cy="0" class="apexcharts-marker wna8y70o9 no-pointer-events" stroke="#ffffff" fill="#ffddb8" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1341" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1374" x1="0" y1="0" x2="502" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1375" x1="0" y1="0" x2="502" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1376" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1377" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1378" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1334" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1357" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1332" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 221, 184);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 503px; height: 81px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                            <?php
                                $select_total_details_count_query = "SELECT COUNT(*) as total_user FROM `services_list` WHERE status = 'Actived'";
                                $connect_db = mysqli_query($db_connect, $select_total_details_count_query);
                                $total_client = mysqli_fetch_assoc($connect_db)['total_user'];
                            ?>
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-icon widget-stats-icon-danger">
                                                <i class="material-icons-outlined">construction</i>
                                            </div>
                                            <div class="widget-stats-content flex-fill">
                                                <span class="widget-stats-title">Total Recent Services,</span>
                                                <span class="widget-stats-amount"><?= $total_client ?> services,</span>
                                            </div>
                                            <div class="widget-stats-indicator align-self-start">
                                                <i class="material-icons">keyboard_arrow_up</i> <span class="widget-stats-amount badge badge-success">Active</span>
                                            </div>
                                        </div>
                                        <div class="widget-stats-chart" style="position: relative;">
                                            <div id="widget-stats-chart3" style="min-height: 80px;"><div id="apexchartssparkline3" class="apexcharts-canvas apexchartssparkline3 apexcharts-theme-light" style="width: 502px; height: 80px;"><svg id="SvgjsSvg1381" width="502" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1383" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1382"><clipPath id="gridRectMask958sivjf"><rect id="SvgjsRect1388" width="510" height="84" x="-4" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMask958sivjf"><rect id="SvgjsRect1389" width="506" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1394" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1395" stop-opacity="0.65" stop-color="rgba(255,204,206,0.65)" offset="0"></stop><stop id="SvgjsStop1396" stop-opacity="0.5" stop-color="rgba(255,230,231,0.5)" offset="1"></stop><stop id="SvgjsStop1397" stop-opacity="0.5" stop-color="rgba(255,230,231,0.5)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1387" x1="0" y1="0" x2="0" y2="80" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1400" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1401" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1410" class="apexcharts-grid"><g id="SvgjsG1411" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1413" x1="0" y1="0" x2="502" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1414" x1="0" y1="8" x2="502" y2="8" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1415" x1="0" y1="16" x2="502" y2="16" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1416" x1="0" y1="24" x2="502" y2="24" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1417" x1="0" y1="32" x2="502" y2="32" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1418" x1="0" y1="40" x2="502" y2="40" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1419" x1="0" y1="48" x2="502" y2="48" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1420" x1="0" y1="56" x2="502" y2="56" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1421" x1="0" y1="64" x2="502" y2="64" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1422" x1="0" y1="72" x2="502" y2="72" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1423" x1="0" y1="80" x2="502" y2="80" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1412" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1425" x1="0" y1="80" x2="502" y2="80" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1424" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1390" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1391" class="apexcharts-series" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1398" d="M 0 80L 0 13.333333333333329C 29.28333333333333 13.333333333333329 54.38333333333334 53.33333333333333 83.66666666666667 53.33333333333333C 112.95 53.33333333333333 138.05 13.333333333333329 167.33333333333334 13.333333333333329C 196.61666666666667 13.333333333333329 221.71666666666667 26.666666666666664 251 26.666666666666664C 280.28333333333336 26.666666666666664 305.3833333333333 6.666666666666671 334.6666666666667 6.666666666666671C 363.95 6.666666666666671 389.05 60 418.3333333333333 60C 447.6166666666667 60 472.71666666666664 2.6666666666666714 502 2.6666666666666714C 502 2.6666666666666714 502 2.6666666666666714 502 80M 502 2.6666666666666714z" fill="url(#SvgjsLinearGradient1394)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask958sivjf)" pathTo="M 0 80L 0 13.333333333333329C 29.28333333333333 13.333333333333329 54.38333333333334 53.33333333333333 83.66666666666667 53.33333333333333C 112.95 53.33333333333333 138.05 13.333333333333329 167.33333333333334 13.333333333333329C 196.61666666666667 13.333333333333329 221.71666666666667 26.666666666666664 251 26.666666666666664C 280.28333333333336 26.666666666666664 305.3833333333333 6.666666666666671 334.6666666666667 6.666666666666671C 363.95 6.666666666666671 389.05 60 418.3333333333333 60C 447.6166666666667 60 472.71666666666664 2.6666666666666714 502 2.6666666666666714C 502 2.6666666666666714 502 2.6666666666666714 502 80M 502 2.6666666666666714z" pathFrom="M -1 80L -1 80L 83.66666666666667 80L 167.33333333333334 80L 251 80L 334.6666666666667 80L 418.3333333333333 80L 502 80"></path><path id="SvgjsPath1399" d="M 0 13.333333333333329C 29.28333333333333 13.333333333333329 54.38333333333334 53.33333333333333 83.66666666666667 53.33333333333333C 112.95 53.33333333333333 138.05 13.333333333333329 167.33333333333334 13.333333333333329C 196.61666666666667 13.333333333333329 221.71666666666667 26.666666666666664 251 26.666666666666664C 280.28333333333336 26.666666666666664 305.3833333333333 6.666666666666671 334.6666666666667 6.666666666666671C 363.95 6.666666666666671 389.05 60 418.3333333333333 60C 447.6166666666667 60 472.71666666666664 2.6666666666666714 502 2.6666666666666714" fill="none" fill-opacity="1" stroke="#ffccce" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask958sivjf)" pathTo="M 0 13.333333333333329C 29.28333333333333 13.333333333333329 54.38333333333334 53.33333333333333 83.66666666666667 53.33333333333333C 112.95 53.33333333333333 138.05 13.333333333333329 167.33333333333334 13.333333333333329C 196.61666666666667 13.333333333333329 221.71666666666667 26.666666666666664 251 26.666666666666664C 280.28333333333336 26.666666666666664 305.3833333333333 6.666666666666671 334.6666666666667 6.666666666666671C 363.95 6.666666666666671 389.05 60 418.3333333333333 60C 447.6166666666667 60 472.71666666666664 2.6666666666666714 502 2.6666666666666714" pathFrom="M -1 80L -1 80L 83.66666666666667 80L 167.33333333333334 80L 251 80L 334.6666666666667 80L 418.3333333333333 80L 502 80"></path><g id="SvgjsG1392" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1431" r="0" cx="0" cy="0" class="apexcharts-marker wjfkuf6qs no-pointer-events" stroke="#ffffff" fill="#ffccce" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1393" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1426" x1="0" y1="0" x2="502" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1427" x1="0" y1="0" x2="502" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1428" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1429" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1430" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1386" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1409" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1384" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 204, 206);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>
                                        <div class="resize-triggers"><div class="expand-trigger"><div style="width: 503px; height: 81px;"></div></div><div class="contract-trigger"></div></div></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row">
                      <div class="col-xl-6">
                      <div class="card widget widget-popular-product">
                                    <div class="card-body">
                                        <div class="widget-popular-product-container">
                                            <div class="widget-popular-product-image">
                                                <img src="../assets/images/widgets/popular-product.jpeg" alt="">
                                            </div>
                                            <div class="widget-popular-product-tags">
                                                <span class="badge rounded-pill badge-secondary badge-style-light">Science</span>
                                                <span class="badge rounded-pill badge-success badge-style-light">Web Designer</span>
                                                <span class="badge rounded-pill badge-danger badge-style-light">Web Devloper</span>
                                            </div>
                                            <div class="widget-popular-product-content">
                                                <a href="#" class="widget-popular-product-title"><?= $_SESSION["s_name"] ?></a>
                                                <p class="widget-popular-product-text m-b-md">As a Front-End Developer I created a lot of different websites for our clients using Wordpress as a CMS and HTML, CSS and JavaScript to built the sites. I helped to improve the developer experience of the company by implementing tools to improve our software development process.</p>
                                                <span class="widget-popular-product-rating">
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star</i>
                                                    <i class="material-icons">star_half</i>
                                                    <span class="widget-popular-product-rating-num">4.8</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                      </div>
                      </div>
   
                      <div class="row">
                            <div class="col-xl-6">
                            <?php
                                $select_brand_count_query = "SELECT COUNT(*) as total_user FROM `brand_images` WHERE status = 'active'";
                                $select_brand_details_query = "SELECT * FROM `brand_images` WHERE status = 'active'";
                                $connect_db_details = mysqli_query($db_connect, $select_brand_details_query);
                                $connect_db = mysqli_query($db_connect, $select_brand_count_query);
                                $total_client = mysqli_fetch_assoc($connect_db)['total_user'];
                            ?>
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Our Client<span class="badge badge-danger badge-style-light"> <?=$total_client  ?> Total</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="widget-list-content list-unstyled" style="overflow-y: scroll ; height: 400px;">
                                            <?php foreach($connect_db_details as $brands): ?>
                                            <li class="widget-list-item">
                                                <span class="widget-list-item-icon widget-list-item-icon-large">
                                                    <div class="widget-list-item-icon-image" style="background: url('upload/brand_img/<?= $brands['image_name'] ?>')"></div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        <?= $brands['brand_name'] ?>
                                                    </a>
                                                    <span class="widget-list-item-description-date">
                                                    Just wanted to say thank you for work with us (<?= $brands['brand_name'] ?>). We’re so lucky to have customers like you!
                                                    </span>
                                                </span>
                                                <span class="widget-list-item-product-amount badge badge-success">
                                                <?= $brands['status'] ?>
                                                </span>
                                            </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                             <?php
                                $select_port_count_query = "SELECT COUNT(*) as total_user FROM `portfolios_details` WHERE status = 'active'";
                                $select_port_details_query = "SELECT * FROM `portfolios_details` WHERE status = 'active'";
                                $connect_db_details = mysqli_query($db_connect, $select_port_details_query);
                                $connect_db = mysqli_query($db_connect, $select_port_count_query);
                                $total_client = mysqli_fetch_assoc($connect_db)['total_user'];
                            ?>
                                <div class="card widget widget-list">
                                    <div class="card-header">
                                        <h5 class="card-title">Portfolio Posts<span class="badge badge-info badge-style-light"> <?= $total_client  ?> Actived Post</span></h5>
                                    </div>
                                    <div class="card-body">
                                        <ul class="widget-list-content list-unstyled"  style="overflow-y: scroll ; height: 400px;">
                                            <?php foreach($connect_db_details as $port_details):  ?>
                                            <li class="widget-list-item widget-list-item-blog-post">
                                                <span class="widget-list-item-icon widget-list-item-icon-large">
                                                    <div class="widget-list-item-icon-image" style="background: url('upload/portfolio_image/<?= $port_details["portfolio_image"] ?>')"></div>
                                                </span>
                                                <span class="widget-list-item-description">
                                                    <a href="#" class="widget-list-item-description-title">
                                                        <?= $port_details["portfolio_name"] ?>
                                                    </a>
                                                    <span class="widget-list-item-description-content">
                                                    <?= $port_details["status"] ?>
                                                    </span>
                                                </span>
                                            </li>
                                            <?php endforeach;  ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>


<?php
require_once "partisions/lower.php";
?>


<script>
    $(document).ready(function(){
        Swal.fire(
          'Welcome <?= $_SESSION["s_name"] ?>',
          'This is your ADMIN panel',
          'success'
        )
    });

</script>