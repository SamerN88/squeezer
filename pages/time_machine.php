<?php

if ($_GET) {
    $day = $_GET['day'];
    $month = $_GET['month'];
    $year = $_GET['year'];
    $time = $_GET['time'];

    $date = "$day $month $year";

    // THIS IS A DUMMY TABLE; LATER WILL FETCH FROM DATABASE

    $table_html = <<<TAB
    <div id="table-div">
        <h3 id="table-title">Squeezer rankings on $date at $time:</h3>
        <table class="stock-table">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Ticker</th>
                    <th>Company</th>
                    <th>Short Interest %</th>
                    <th>Squeeze Index</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>GME</td>
                    <td>GameStop Corp.</td>
                    <td>41.22%</td>
                    <td>100</td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>SKT</td>
                    <td>Tanger Factory Outlet Centers</td>
                    <td>39.98%</td>
                    <td>98</td>
                </tr>

                <tr>
                    <td>3</td>
                    <td>ASO</td>
                    <td>Academy Sports & Outdoors Inc</td>
                    <td>37.18%</td>
                    <td>95</td>
                </tr>

                <tr>
                    <td>4</td>
                    <td>RKT</td>
                    <td>Rocket Companies Inc</td>
                    <td>35.73%</td>
                    <td>93</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>GOGO</td>
                    <td>Gogo Inc</td>
                    <td>35.04%</td>
                    <td>91</td>
                </tr>

                <tr>
                    <td>6</td>
                    <td>CLVS</td>
                    <td>Clovis Oncology Inc</td>
                    <td>34.54%</td>
                    <td>90</td>
                </tr>

                <tr>
                    <td>7</td>
                    <td>TRIT</td>
                    <td>Triterras Inc</td>
                    <td>32.04%</td>
                    <td>88</td>
                </tr>
                
                <tr>
                    <td>8</td>
                    <td>MDGL</td>
                    <td>Madrigal Pharmaceuticals Inc</td>
                    <td>31.60%</td>
                    <td>86</td>
                </tr>
                
                <tr>
                    <td>9</td>
                    <td>GSX</td>
                    <td>GSX Techedu Inc</td>
                    <td>31.19%</td>
                    <td>85</td>
                </tr>

                <tr>
                    <td>10</td>
                    <td>OTRK</td>
                    <td>Ontrak, Inc.</td>
                    <td>30.86%</td>
                    <td>83</td>
                </tr>

                <tr>
                    <td>11</td>
                    <td>LCI</td>
                    <td>Lannett Company, Inc.</td>
                    <td>28.97%</td>
                    <td>81</td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>AXDX</td>
                    <td>Accelerate Diagnostics Inc</td>
                    <td>28.95%</td>
                    <td>78</td>
                </tr>

                <tr>
                    <td>13</td>
                    <td>REV</td>
                    <td>Revlon Inc</td>
                    <td>28.22%</td>
                    <td>75</td>
                </tr>

                <tr>
                    <td>14</td>
                    <td>BLNK</td>
                    <td>Blink Charging Co</td>
                    <td>28.18%</td>
                    <td>72</td>
                </tr>

                <tr>
                    <td>15</td>
                    <td>CRBP</td>
                    <td>Corbus Pharmaceuticals Holding</td>
                    <td>27.81%</td>
                    <td>70</td>
                </tr>

                <tr>
                    <td>16</td>
                    <td>ISUN</td>
                    <td>iSun Inc</td>
                    <td>27.37%</td>
                    <td>67</td>
                </tr>

                <tr>
                    <td>17</td>
                    <td>ICPT</td>
                    <td>Intercept Pharmaceuticals Inc</td>
                    <td>26.95%</td>
                    <td>63</td>
                </tr>

                <tr>
                    <td>18</td>
                    <td>CVNA</td>
                    <td>Carvana Co</td>
                    <td>26.32%</td>
                    <td>61</td>
                </tr>

                <tr>
                    <td>19</td>
                    <td>VXRT</td>
                    <td>Vaxart Inc</td>
                    <td>26.30%</td>
                    <td>57</td>
                </tr>

                <tr>
                    <td>20</td>
                    <td>SDC</td>
                    <td>SmileDirectClub Inc</td>
                    <td>26.23%</td>
                    <td>39</td>
                </tr>
            </tbody>
        </table>
    </div>
TAB;

} else {
    $table_html = '';
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Squeezer | Time Machine</title>  <!-- Time Machine -->
    <meta charset="UTF-8">
    <meta name="description" content="View Squeezer's time machine, which shows past versions of its stock rankings.">
    <meta name="author" content="Samer Najjar, Alfredo Huitron, Ayesha Din, Priyank Dharia">

    <link rel="icon" type="image/png" href="../img/squeezer_icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito&display=swap">
    <link rel="stylesheet" href="../styles/header.css" >
    <link rel="stylesheet" href="../styles/footer.css">
    <link rel="stylesheet" href="../styles/time_machine.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../src/time_machine_form.js" defer></script>
</head>

<body>
    <div id="content-container">

        <!-- AYESHA -->
        <header>
            <a id="logo-link" href="../index.html"><img id="logo" src="../img/squeezer_logo_black.png" alt="SQUEEZER"></a>
            <div id=navbar> 
                <a href="../index.html">HOME</a>
                <a href="learn_more.html">LEARN MORE</a>
                <a href="time_machine.php" style="border-bottom: 5px solid black; border-top: 5px solid transparent; line-height: 70px">TIME MACHINE</a>
                <a href="contact.php">CONTACT</a>
            </div> 
        </header>

    <div class="normal-text">
        <h1 class="center-justify-text">Time Machine</h1>
    	<p class="center-text center-justify-text" id="about_us_desc">
            Visit past dates to see older versions of the rankings.
        </p>
    </div>

        <form method="GET" action="">
            <div id="date-time-div">
                <tr>
                    <td><label><b>Select date: </b></label></td>
                    <td>
                        <select name = "day">
                        <option> 1 </option>
                        <option> 2 </option>
                        <option> 3 </option>
                        <option> 4 </option>
                        <option> 5 </option>
                        <option> 6 </option>
                        <option> 7 </option>
                        <option> 8 </option>
                        <option> 9 </option>
                        <option> 10 </option>
                        <option> 11 </option>
                        <option> 12 </option>
                        <option> 13 </option>
                        <option> 14 </option>
                        <option> 15 </option>
                        <option> 16 </option>
                        <option> 17 </option>
                        <option> 18 </option>
                        <option> 19 </option>
                        <option> 20 </option>
                        <option> 21 </option>
                        <option> 22 </option>
                        <option> 23 </option>
                        <option> 24 </option>
                        <option> 25 </option>
                        <option> 26 </option>
                        <option> 27 </option>
                        <option> 28 </option>
                        <option> 29 </option>
                        <option> 30 </option>
                        <option> 31 </option>
                        </select>
                    </td>
                    <td>
                        <select name = "month">
                        <option> January </option>
                        <option> February </option>
                        <option> March </option>
                        <option> April </option>
                        <option> May </option>
                        <option> June </option>
                        <option> July </option>
                        <option> August </option>
                        <option> September </option>
                        <option> October </option>
                        <option> November </option>
                        <option> December </option>
                        </select>
                    </td>
                    <td>
                        <select name = "year">
                        <option> 2021 </option>
                        </select>
                    </td>
            </tr>
            <tr><br>
                <td><label><b>Select time: </b></label></td>
                    <td>
                        <select name = "time">
                        <option value="9:30 AM"> 9:30 AM (market open) </option>
                        <option> 10:00 AM </option>
                        <option> 10:30 AM </option>
                        <option> 11:00 AM </option>
                        <option> 11:30 AM </option>
                        <option> 12:00 PM </option>
                        <option> 12:30 PM </option>
                        <option> 1:00 PM </option>
                        <option> 1:30 PM </option>
                        <option> 2:00 PM </option>
                        <option> 2:30 PM </option>
                        <option> 3:00 PM </option>
                        <option> 3:30 PM </option>
                        <option> 4:00 PM </option>
                        <option value="4:30 PM"> 4:30 PM (market close) </option>
                        </select>
                    </td>
                    <td>
                        <!-- <select name = "period">
                            <option> AM </option>
                            <option> PM </option>
                        </select> -->
                        <span style="color:gray; font-size:12pt">(EST)</span>
                    </td>
            </tr>

            <tr><br>
                <td>
                    <input type = "submit" value = "Visit past">
                    <p id="error-msg"></p>
                </td>
                <td></td>
            </tr>
        </div>
    </form>

    <?php print($table_html) ?>

    </div>


    <!-- SAMER -->
    <footer>
        <span id="copyright">© Squeezer 2021</span>
        <span class="center-text center-justify-text">
            — Samer Najjar, Alfredo Huitron, Ayesha Din, Priyank Dharia —<br>
            10 March 2021
        </span>
    </footer>
</body>

</html>