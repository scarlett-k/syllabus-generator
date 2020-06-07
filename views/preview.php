<?php
// Load library
include_once 'HtmlToDoc.class.php';

// Initialize class
$htd = new HTML_TO_DOC();

$htmlContent = ' 
    <h1>Hello World!</h1> 
    <p>This document is created from HTML.</p>';

//$htd->createDoc($htmlContent, "my-document");
$htd->createDoc($htmlContent, "my-document", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <include href="views/header.html">
    <title>GRC Syllabus Generator</title>
</head>
<body>
<img src="images/logo.png" alt = "GRC Logo" style="float: left;  margin-bottom: 30px; margin-right: 20px" />
<h1>GRC Syllabus Generator</h1>

<button id="preview">Download Your Syllabus</button>
</body>
<include href="views/footer.html">
</html>