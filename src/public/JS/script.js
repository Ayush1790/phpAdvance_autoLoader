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

function changeProduct(){
    let val=$("#productItem").val();
    $.ajax({
        url:'../handler/convert.php',
        data:{'text':val,'action':'changeItem'},
        type:'post',
        datatype:'text',
        success:function(value){
            console.log(value);
            $("#items").html(value);
        }
    })
}
function changeItems(){
    let val=$("#productItem").val();
    let val1=$("#items").val();
    $.ajax({
        url:'../handler/convert.php',
        data:{'text':val,'action':'changeItemsValue','text1':val1},
        type:'post',
        datatype:'text',
        success:function(value){
            console.log(value);
            $("#idValue").html(value);
        }
    })
}
function showItems(){
    let val=$("#productItem").val();
    let val1=$("#items").val();
    let val2=$("#idValue").val();
    $.ajax({
        url:'../handler/convert.php',
        data:{'text':val,'action':'showTable','text1':val1,'text2':val2},
        type:'post',
        datatype:'text',
        success:function(value){
            console.log(value);
            $("#tableDetail").html(value);
        }
    })
}