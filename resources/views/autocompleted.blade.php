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
        <label for="pelabuhanid">Pelabuhan:</label>
        <input id="pelabuhanid" type="text" name="pelabuhanid">
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
                            // console.log(data);

                        }
                    });
                },
                minLength: 2,
                select: function(event, ui) {
                    var kd_negara = ui.item.value;
                    // console.log(kd_negara);

                    $("#pelabuhanid").autocomplete({
                        source: function(request, response) {
                            $.ajax({
                                url: "https://insw-dev.ilcs.co.id/n/pelabuhan",
                                dataType: "json",
                                data: {
                                    kd_negara: kd_negara,
                                    ur_pelabuhan: request.term
                                },
                                success: function(data) {
                                    var pelabuhanData = [];
                                    if (data.data) {
                                        data.data.forEach(function(item) {
                                            pelabuhanData.push(item
                                                .kd_pelabuhan);
                                        });
                                    }
                                    response(pelabuhanData);

                                }
                            });
                        },
                        minLength: 2,
                        select: function(event, ui) {
                            var label = ui.item.label;
                            var value = ui.item.value;
                        }
                    });

                }
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
