<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Exporting</title>
    <link rel="stylesheet" href="components/bootstrap-3.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main.css">
</head>

<body>
    <form id="s1" style="text-align:center; width:600px; margin:0 auto" class="form">
        <h3>Select one questionnaire to export:</h3>
        <select id="questionnarie_name" name="questionnarie_name" class="form-control input-lg">
            <option value="Perceived_social_support_community">Perceived Social Support - Community (Pre-Questionnaire)</option>
            <option value="interaction_questionnaire_community-v2">Interaction Questionnaire - Community (Post-Questionnaire)</option>
            <option value="perceived_social_support_wearer">Perceived Social Support - Wearer (Pre-Questionnaire)</option>
            <option value="use_questionnaire_wearer-nocontrol">User Questionnaire - Wearer (No Control) (Post-Questionnaire)</option>
            <option value="interaction_questionnaire_wearer-nocontrol">Interaction Questionnaire - Wearer (No Control) (Post-Questionnaire)</option>
            <option value="use_questionnaire_wearer-fullcontrol">User Questionnaire - Wearer (Full Control) (Post-Questionnaire)</option>
            <option value="interaction_questionnaire_wearer-fullcontrol">Interaction Questionnaire - Wearer (Full Control) (Post-Questionnaire)</option>
        </select>
        <input type="hidden" name="function" value="export" />
        <br/>
        <br/>
        <button type="submit" class="btn btn-primary btn-lg" id="but_submit">Export to Excel format</button>
    </form>
    <br/>
    <div id="result" class="hidden">
    </div>
    <script src="components/jquery/1.11.1/jquery.min.js"></script>
    <script src="components/bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
    <script type='text/javascript'>
        $("#s1").submit(function(e) {
            $('#but_submit').attr("disabled", "disabled");
            var postData = $(this).serializeArray();
            $.ajax({
                url: 'bd.php',
                type: "POST",
                data: postData,
                success: function(data, textStatus, jqXHR) {
                    $("#result").html(data);
                    allTablesToExcel();
                    $('#but_submit').prop("disabled", false);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $("#result").html("ERROR");
                    $('#but_submit').prop("disabled", false);
                }
            });
            e.preventDefault();
        });


        var tablesToExcel = (function() {
            var uri = 'data:application/vnd.ms-excel;base64,',
                tmplWorkbookXML = '<\?xml version="1.0" encoding="UTF-8"?><\?mso-application progid="Excel.Sheet"?><Workbook xmlns="urn:schemas-microsoft-com:office:spreadsheet" xmlns:ss="urn:schemas-microsoft-com:office:spreadsheet">' + '<DocumentProperties xmlns="urn:schemas-microsoft-com:office:office"><Author>LIA</Author><Created>{created}</Created></DocumentProperties>' + '<Styles>' + '<Style ss:ID="Currency"><NumberFormat ss:Format="Currency"></NumberFormat></Style>' + '<Style ss:ID="Bold"><Font ss:Bold="1" /></Style>' + '<Style ss:ID="Number"><Alignment ss:Horizontal="Left" /><NumberFormat ss:Format="General Number"></NumberFormat><Protection/></Style>' + '<Style ss:ID="Date"><NumberFormat ss:Format="Medium Date"></NumberFormat></Style>' + '</Styles>' + '{worksheets}</Workbook>',
                tmplWorksheetXML = '<Worksheet ss:Name="{nameWS}"><Table><Column ss:Width="400"/><Column ss:Width="60"/><Column ss:Width="60"/><Column ss:Width="60"/><Column ss:Width="60"/>{rows}</Table></Worksheet>',
                tmplCellXML = '<Cell{attributeStyleID}{attributeFormula}><Data ss:Type="{nameType}">{data}</Data></Cell>',
                base64 = function(s) {
                    return window.btoa(unescape(encodeURIComponent(s)))
                },
                format = function(s, c) {
                    return s.replace(/{(\w+)}/g, function(m, p) {
                        return c[p];
                    })
                }
            return function(tables, wsnames, wbname, appname) {
                var ctx = "";
                var workbookXML = "";
                var worksheetsXML = "";
                var rowsXML = "";

                for (var i = 0; i < tables.length; i++) {
                    if (!tables[i].nodeType) tables[i] = document.getElementById(tables[i]);
                    for (var j = 0; j < tables[i].rows.length; j++) {
                        rowsXML += '<Row>'
                        for (var k = 0; k < tables[i].rows[j].cells.length; k++) {
                            var dataType = tables[i].rows[j].cells[k].getAttribute("data-type");
                            var dataStyle = tables[i].rows[j].cells[k].getAttribute("data-style");
                            var dataValue = tables[i].rows[j].cells[k].getAttribute("data-value");
                            dataValue = (dataValue) ? dataValue : tables[i].rows[j].cells[k].innerHTML;
                            var dataFormula = tables[i].rows[j].cells[k].getAttribute("data-formula");
                            dataFormula = (dataFormula) ? dataFormula : (appname == 'Calc' && dataType == 'DateTime') ? dataValue : null;
                            ctx = {
                                attributeStyleID: (dataStyle == 'Currency' || dataStyle == 'Date' || dataStyle == 'Bold' || dataStyle == 'Number') ? ' ss:StyleID="' + dataStyle + '"' : '',
                                nameType: (dataType == 'Number' || dataType == 'DateTime' || dataType == 'Boolean' || dataType == 'Error') ? dataType : 'String',
                                data: (dataFormula) ? '' : dataValue,
                                attributeFormula: (dataFormula) ? ' ss:Formula="' + dataFormula + '"' : ''
                            };
                            rowsXML += format(tmplCellXML, ctx);
                        }
                        rowsXML += '</Row>'
                    }
                    ctx = {
                        rows: rowsXML,
                        nameWS: wsnames[i] || 'Sheet' + i
                    };
                    worksheetsXML += format(tmplWorksheetXML, ctx);
                    rowsXML = "";
                }

                ctx = {
                    created: (new Date()).getTime(),
                    worksheets: worksheetsXML
                };
                workbookXML = format(tmplWorkbookXML, ctx);

                console.log(workbookXML);

                var link = document.createElement("A");
                link.href = uri + base64(workbookXML);
                link.download = wbname || 'Workbook.xls';
                link.target = '_blank';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        })();

        function allTablesToExcel() {
            var IDs = [];
            $("#result").find("table").each(function() {
                IDs.push(this.id);
            }).promise().done(function() {
                tablesToExcel($.makeArray(IDs), IDs, $("#questionnarie_name").val()+'.xls', 'Excel');
            });
        };
    </script>
</body>

</html>
