<?php
/*
 *   Crafted On Sun Apr 07 2024
 *   Author Martin Mbithi (martin.mbithi@makueni.go.ke)
 * 
 *   www.makueni.go.ke
 *   info@makueni.go.ke
 *
 *
 *   The Government of Makueni County Applications Development Section End User License Agreement
 *   Copyright (c) 2023 Government of Makueni County 
 *
 *
 *   1. GRANT OF LICENSE 
 *   GoMC Applications Development Section hereby grants to you (an individual) the revocable, personal, non-exclusive, and nontransferable right to
 *   install and activate this system on one computer solely for your official and non-commercial use,
 *   unless you have purchased a commercial license from GoMC Applications Development Section. Sharing this Software with other individuals, 
 *   or allowing other individuals to view the contents of this Software, is in violation of this license.
 *   You may not make the Software available on a network, or in any way provide the Software to multiple users
 *   unless you have first purchased at least a multi-user license from GoMC Applications Development Section
 *
 *   2. COPYRIGHT 
 *   The Software is owned by GoMC Applications Development Section and protected by copyright law and international copyright treaties. 
 *   You may not remove or conceal any proprietary notices, labels or marks from the Software.
 *
 *
 *   3. RESTRICTIONS ON USE
 *   You may not, and you may not permit others to
 *   (a) reverse engineer, decompile, decode, decrypt, disassemble, or in any way derive source code from, the Software;
 *   (b) modify, distribute, or create derivative works of the Software;
 *   (c) copy (other than one back-up copy), distribute, publicly display, transmit, sell, rent, lease or 
 *   otherwise exploit the Software. 
 *
 *
 *   4. TERM
 *   This License is effective until terminated. 
 *   You may terminate it at any time by destroying the Software, together with all copies thereof.
 *   This License will also terminate if you fail to comply with any term or condition of this Agreement.
 *   Upon such termination, you agree to destroy the Software, together with all copies thereof.
 *
 *
 *   5. NO OTHER WARRANTIES. 
 *   GoMC APPLICATIONS DEVELOPMENT SECTION DOES NOT WARRANT THAT THE SOFTWARE IS ERROR FREE. 
 *   GoMC APPLICATIONS DEVELOPMENT SECTION SOFTWARE DISCLAIMS ALL OTHER WARRANTIES WITH RESPECT TO THE SOFTWARE, 
 *   EITHER EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO IMPLIED WARRANTIES OF MERCHANTABILITY, 
 *   FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT OF THIRD PARTY RIGHTS. 
 *   SOME JURISDICTIONS DO NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES OR LIMITATIONS
 *   ON HOW LONG AN IMPLIED WARRANTY MAY LAST, OR THE EXCLUSION OR LIMITATION OF 
 *   INCIDENTAL OR CONSEQUENTIAL DAMAGES,
 *   SO THE ABOVE LIMITATIONS OR EXCLUSIONS MAY NOT APPLY TO YOU. 
 *   THIS WARRANTY GIVES YOU SPECIFIC LEGAL RIGHTS AND YOU MAY ALSO 
 *   HAVE OTHER RIGHTS WHICH VARY FROM JURISDICTION TO JURISDICTION.
 *
 *
 *   6. SEVERABILITY
 *   In the event of invalidity of any provision of this license, the parties agree that such invalidity shall not
 *   affect the validity of the remaining portions of this license.
 *
 *
 *   7. NO LIABILITY FOR CONSEQUENTIAL DAMAGES IN NO EVENT SHALL GoMC APPLICATIONS DEVELOPMENT SECTION OR ITS SUPPLIERS BE LIABLE TO YOU FOR ANY
 *   CONSEQUENTIAL, SPECIAL, INCIDENTAL OR INDIRECT DAMAGES OF ANY KIND ARISING OUT OF THE DELIVERY, PERFORMANCE OR 
 *   USE OF THE SOFTWARE, EVEN IF GoMC APPLICATIONS DEVELOPMENT SECTION HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES
 *   IN NO EVENT WILL GoMC APPLICATIONS DEVELOPMENT SECTION LIABILITY FOR ANY CLAIM, WHETHER IN CONTRACT 
 *   TORT OR ANY OTHER THEORY OF LIABILITY, EXCEED THE LICENSE FEE PAID BY YOU, IF ANY.
 *
 */


/* Database Connection */


$dbuser = "root"; /* Database Username */
$dbpass = ""; /* Database Username Password */
$host = "localhost"; /* Database Host */
$db = "makueni_ligi_mashinani";  /* Database Name */
$mysqli = new mysqli($host, $dbuser, $dbpass, $db); /* Connection Function */

date_default_timezone_set("Africa/Nairobi");/* Default Time Zone */
$years = range(1970, strftime("%Y", time()));

/* Greetings */
$dat = new DateTime('now', new DateTimeZone('Africa/Nairobi'));
$date = $dat->format('H');
if ($date < 12)
    $greeting  =   "Good Morning";
else if ($date < 17)
    $greeting =  "Good Afternoon";
else if ($date < 20)
    $greeting =  "Good Evening";
else
    $greeting =  "Good Evening";


/* Persist System Settings In All Pages */
// $fetch_records_sql = mysqli_query(
//     $mysqli,
//     "SELECT * FROM system_settings 
//     JOIN bulk_sms_api 
//     JOIN  financial_year 
//     WHERE system_id = '2' AND financial_year_status = 'Current'"
// );
// if (mysqli_num_rows($fetch_records_sql) > 0) {
//     while ($rows = mysqli_fetch_array($fetch_records_sql)) {

//         /* Core settings */
//         $system_name = $rows['system_name'];
//         $system_name_initials = $rows['system_name_initials'];
//         $system_seo_tags = $rows['system_seo_tags'];
//         $system_tagline = $rows['system_tagline'];
//         $api_client_id = $rows['sms_api_client_id'];
//         $api_client_key = $rows['sms_api_client_key'];
//         $financial_year_name = $rows['financial_year_name'];
//         $fy_id = $rows['financial_year_id'];



//         /* Patch into global scope */
//         global $system_name, $system_name_initials, $system_seo_tags, $system_tagline, $api_client_id, $api_client_key, $financial_year_name, $fy_id;
//     }
// }

// /* Truncate Text Function */
// function truncate($text, $chars = 25)
// {
//     if (strlen($text) <= $chars) {
//         return $text;
//     }
//     $text = $text . " ";
//     $text = substr($text, 0, $chars);
//     $text = substr($text, 0, strrpos($text, ' '));
//     $text = $text . "...";
//     return $text;
// }


// /* Number Formats And Precisions */
// function number_format_short($n, $precision = 1)
// {
//     if ($n < 900) {
//         // 0 - 900
//         $n_format = number_format($n, $precision);
//         $suffix = '';
//     } else if ($n < 900000) {
//         // 0.9k-850k
//         $n_format = number_format($n / 1000, $precision);
//         $suffix = 'K';
//     } else if ($n < 900000000) {
//         // 0.9m-850m
//         $n_format = number_format($n / 1000000, $precision);
//         $suffix = 'M';
//     } else if ($n < 900000000000) {
//         // 0.9b-850b
//         $n_format = number_format($n / 1000000000, $precision);
//         $suffix = 'B';
//     } else {
//         // 0.9t+
//         $n_format = number_format($n / 1000000000000, $precision);
//         $suffix = 'T';
//     }
//     if ($precision > 0) {
//         $dotzero = '.' . str_repeat('0', $precision);
//         $n_format = str_replace($dotzero, '', $n_format);
//     }
//     return $n_format . $suffix;
// }


// /* System Generated Codes */
// $project_ref = "GoMC-PMTS-" . date('Y') . "-" . rand(1000, 9999);
