<!DOCTYPE html>
<html>

<head>
    <title>Autocomplete Example</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
    <div>
        <label for="autocomplete">Negara:</label>
        <input id="autocomplete" type="text">
    </div>
    <br>
    <div>
        <label for="barangid">HS Code:</label>
        <input id="barangid" type="text" name="barangid">
    </div>
    <br>
    <div>
        <textarea id="textarea" name="textarea" cols="30" rows="10"></textarea>
    </div>

    <script>
        $(function() {
            $("#autocomplete").autocomplete({
                source: function(request, response) {
                    $.ajax({
                        url: "/negara",
                        dataType: "json",
                        data: {
                            query: request.term
                        },
                        success: function(data) {
                            response(data);

                        }
                    });
                },
                minLength: 2 // Minimal panjang input sebelum autocompletion dimulai
            });

            $("#barangid").autocomplete({
                    source: function(request, response) {
                        $.ajax({
                            url: "/barang",
                            dataType: "json",
                            data: {
                                query: request.term
                            },
                            success: function(data) {
                                response(data);
                            }
                        });
                    },
                    minLength: 2,
                    select: function(event, ui) {
                        var uraian_id = ui.item.uraian_id;
                        var sub_header = ui.item.sub_header;
                        var textareaValue = sub_header + " " + uraian_id;
                        $("#textarea").val(textareaValue);
                    }
                })
                .autocomplete("instance")._renderItem = function(ul, item) {
                    return $("<li>")
                        .append("<div>" + item.uraian_id + "</div>")
                        .appendTo(ul);
                };
        });
    </script>
</body>

</html>
