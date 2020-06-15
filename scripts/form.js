var textbookRC;
var matRC;
$(document).ready(function () {
    textbookRC = $('#textbook-table tr').length-1;
    matRC = $('#mats-table tr').length-1;
//adding rows to textbook table
$("#add-textbook").click(function(){
    textbookRC = $('#textbook-table tr').length;
    var refRow = '    <tr>\n' +
        `<td> <label for="textbook">Textbook:</label><input type="text" class="form-control" id="textbook${textbookRC}" name="textbook"></td>\n' +
        '<td> <label for="isbn1">ISBN:</label><input type="text" class="form-control" id="isbn${textbookRC}" name="isbn">\n` +
        '</td>\n' +
        '<td><button type="button" class="btn btn-danger removeTextbook">X</button></td></tr>';
    $('#textbook-table').append(refRow);
    if (textbookRC>=5){
        document.getElementById('add-textbook').disabled = true;
    }
});

//removing rows in textbook table
    $(document).on('click','button.removeTextbook', function() {
        $(this).closest('tr').remove();
        if (textbookRC<=5){
            document.getElementById('add-textbook').disabled = false;
        }
        return false;
    });

//adding rows for materials table
    $('#add-mats').click(function(){
        matRC = $('#mats-table tr').length;
        var refRow = '<tr>\n' +
            `<td> <label for="materials">Additional materials:</label><input type="text" class="form-control" id="materials${matRC}" name="materials"></td>\n` +
            '<td> <button type="button" class="btn btn-danger removeMat">X</button></td>' +
            '</tr>';
        $('#mats-table').append(refRow);
        if (matRC>=5){
            document.getElementById('add-mats').disabled = true;
        }
    });

//removing rows in materials table
    $(document).on('click','button.removeMat', function() {
        $(this).closest('tr').remove();
        if (matRC<=5){
            document.getElementById('add-mats').disabled = false;
        }
        return false;
    });
});
//test