<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="fonts/font.css"> <!--referencing the font file-->
	<link rel="stylesheet" href="navbar.css">
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" href="body.css">
    <link rel="stylesheet" href="Assessment.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap">
    <title>Another Page</title>


</head>
<body>
<div class="result-container">
    <div class="header">ASSESSMENT  RESULT</div>

            <div class="assesst-purp">
    It's important for patients to be open and honest during the assessment process and to ask questions or seek clarification about any concerns they may have. The assessment aims to provide a comprehensive understanding of the patient's mental health status and to guide appropriate treatment and support strategies.
            </div>


    <div class="result">
    <div class="Phqhead">According to PHQ-9 (PATIENT HEALTH QUESTIONNAIRE):</div> 


        <table>
            <thead>
                <tr>
                    <th>Total Score</th>
                    <th>Depression Level</th>
                    <th>Provisional Diagnosis</th>
                    <th>Treatment Recommendation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(isset($_GET['data'])) {
                    $data = $_GET['data'];
                    // Split the data into an array
                    $assessmentData = explode("&", $data);
                    // Ensure the array has the expected number of elements
                    if(count($assessmentData) == 4) {
                        // Extract each piece of data
                        $sum = explode("=", $assessmentData[0])[1] ?? "";
                        $depressionLevel = explode("=", $assessmentData[1])[1] ?? "";
                        $provisionaldiagnodis = explode("=", $assessmentData[2])[1] ?? "";
                        $treatmentrecom = explode("=", $assessmentData[3])[1] ?? "";
                        // Output data into table rows
                        echo "<tr>";
                        echo "<td>$sum</td>";
                        echo "<td>$depressionLevel</td>";
                        echo "<td>$provisionaldiagnodis</td>";
                        echo "<td>$treatmentrecom</td>";
                        echo "</tr>";
                    } else {
                        echo "<tr><td colspan='4'>Invalid assessment data format.</td></tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No assessment data received.</td></tr>";
                }
                ?>
            </tbody>
        </table>
            
            </div>
            </div>
</body>
</html>
