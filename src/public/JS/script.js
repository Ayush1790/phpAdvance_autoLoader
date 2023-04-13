$("#changedTextArea").hide();
$(document).on("click", "#changeUpper", function () {
    let data = $("#textArea").val();
    $.ajax({
        url: '../handler/convert.php',
        type: 'post',
        data: { 'text': data, 'action': 'changeUpper' },
        datatype: "text",
        success: function (value) {
            $("#changedTextArea").show();
            $("#changedTextArea").val(value);
        }
    })
})
$(document).on("click", "#changeLower", function () {
    let data = $("#textArea").val();
    $.ajax({
        url: '../handler/convert.php',
        type: 'post',
        data: { 'text': data, 'action': 'changeLower' },
        datatype: "text",
        success: function (value) {
            $("#changedTextArea").show();
            $("#changedTextArea").val(value);
        }
    })
})
$(document).on("click", "#btn", function () {
    let data = $("#value").val();
    $.ajax({
        url: '../handler/convert.php',
        type: 'post',
        data: { 'text': data, 'action': 'removeSpecial' },
        datatype: "text",
        success: function (value) {
            console.log(value);
            $("#msg").text(value);
        }
    })
})

function updatevalue(){
    let firstValue=$("#first").val();
    let SecondValue=$("#second").val();
    let amt=$("#number").val();
    if(amt>0){
        if(firstValue==SecondValue){
            $("#output").val(amt);
        }else{
            $.ajax({
                url:'../handler/convert.php',
                type:'post',
                data:{'first':firstValue,'second':SecondValue,'amt':amt,'action':'conversion'},
                datatype:JSON,
                success:function(value){
                    $("#output").val(value);
                }
            })
        }
    }
}
function interChangeValue(){
    let first=$("#first").val();
    $("#first").val($("#second").val());
    $("#second").val(first);
    updatevalue();

}