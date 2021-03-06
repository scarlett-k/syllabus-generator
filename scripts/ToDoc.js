/**
 * Created in PhpStorm
 * @author Cody Zipp
 * @date 6/13/2020
 * @version 1.0
 * ToDoc.js - downloads Microsoft Word doc
 * team-brian
 */
function exportHTML() {
    var header = "<html xmlns:o='urn:schemas-microsoft-com:office:office' "+
        "xmlns:w='urn:schemas-microsoft-com:office:word' "+
        "xmlns='http://www.w3.org/TR/REC-html40'>"+
        "<head><meta charset='utf-8'><title>Export HTML to Word Document with JavaScript</title></head><body>";
    var footer = "</body></html>";
    var sourceHTML = header+document.getElementById("preview").innerHTML+footer;

    var source = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(sourceHTML);
    var fileDownload = document.createElement("a");
    document.body.appendChild(fileDownload);
    fileDownload.href = source;
    fileDownload.download = 'test.doc';
    fileDownload.click();
    document.body.removeChild(fileDownload);
}
