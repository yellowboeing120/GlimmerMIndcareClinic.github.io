


<?php

$formData = array();

foreach ($_POST as $key => $value) {
   
    $formData[$key] = $value;
}

$field1 = $formData['options'];
$field2 = $formData['options2'];
$field3 = $formData['options3'];
$field4 = $formData['options4'];
$field5 = $formData['options5'];
$field6 = $formData['options6'];
$field7 = $formData['options7'];
$field8 = $formData['options8'];
$field9 = $formData['options9'];

$sum = $field1 + $field2 + $field3 + $field4 + $field5 + $field6 + $field7 + $field8 + $field9 ;

if ($sum >= 1 && $sum <= 4) {
    $depressionLevel = "Minimal depression";
    $provisionaldiagnodis = "Minimal SYmptoms";
    $treatmentrecom = "Support, educates to call if worse, return in one month";
} elseif ($sum >= 5 && $sum <= 9) {
    $depressionLevel = "Mild depression";
    $provisionaldiagnodis = "Minimal SYmptoms";
    $treatmentrecom = "Support, educates to call if worse, return in one month";
} elseif ($sum >= 10 && $sum <= 14) {
    $depressionLevel = "Moderate depression";
    $provisionaldiagnodis = "Minor depression  ++ Dysthymia* Major Depression, mild";
    $treatmentrecom = "Support, watchful waiting Antidepresssant and psychotherapy";
} elseif ($sum >= 15 && $sum <= 19) {
    $depressionLevel = "Moderately severe depression";
    $provisionaldiagnodis = "Major depression, moderately severe";
    $treatmentrecom = "Antidepresssant and psychotherapy";
} elseif ($sum >= 20 && $sum <= 27) {
    $depressionLevel = "Severe depression";
    $provisionaldiagnodis = "Major Depression, severe";
    $treatmentrecom = "Antidepresssant and psychotherapy(especially if not improved on monotherapy)";
} else {
    $depressionLevel = "Invalid score";

}

echo "Total Score=$sum&Depression Level=$depressionLevel&Provisional Diagnosis=$provisionaldiagnodis&Treatment Recommendation=$treatmentrecom";


?>
