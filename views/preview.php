<?php
// Load library
include_once 'HtmlToDoc.class.php';

// Initialize class
$htd = new HTML_TO_DOC();

$htmlContent = ' 
    <h1>Hello World!</h1> 
    <p>This document is created from HTML.</p>';

$htd->createDoc($htmlContent, "my-document");
//$htd->createDoc($htmlContent, "my-document", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--    <include href="views/header.html">-->
    <title>GRC Syllabus Generator</title>
</head>
<body>
<img src="images/logo.png" alt = "GRC Logo" style="float: left;  margin-bottom: 30px; margin-right: 20px" />
<h1>GRC Syllabus Generator</h1>

<div class="preview">
    <p>First name: {{ @SESSION['syllabus']->getFirstname() }}</p>
    <p>Last name: {{ @SESSION['syllabus']->getLastname() }}</p>
    <p>Phone: {{ @SESSION['syllabus']->getPhone() }}</p>

    <p>Email: {{ @SESSION['syllabus']->getEmail() }}</p>
    <p>Office location: {{ @SESSION['syllabus']->getOffice() }}</p>
    <p>Course: {{ @SESSION['syllabus']->getPrefix() }} {{ @SESSION['syllabus']->getCourseNum() }}</p>

    <p>Office hours: {{ @SESSION['syllabus']->getOfficeHours() }}</p>
    <p>Meeting times: {{ @SESSION['syllabus']->getMeetingTimes() }}</p>
    <p>Class location: {{ @SESSION['syllabus']->getLocation() }}</p>
    <p>Textbook(s): {{ @SESSION['syllabus']->getTextbook() }}</p>
    <p>ISBN: {{ @SESSION['syllabus']->getISBN() }}</p>
    <p>Materials: {{ @SESSION['syllabus']->getMaterials() }}</p>
    <p>Other: {{ @SESSION['syllabus']->getOther() }}</p>
    <button id="preview">Download Your Syllabus</button>
</div>

<!--<button id="preview">Download Your Syllabus</button>-->
</body>
<include href="views/footer.html">
</html>