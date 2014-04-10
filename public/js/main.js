//disabling JSHint Jquery error
/*global $:false*/
var colorChangeIntent='';
$(function(){
	$("body").on("change","#textColor",function()
    {
        colorChangeIntent=$(this).val();
        $("#setColor").css("color",colorChangeIntent);
    });
    $("body").on('click',"#cancelColor",resetColorIntent);
    $("body").on('click',"#setColor",setColorIntent);
	$("#rootReportTable").on('click','td',changeColor);
	
})
    
    changeColor=function()
    {
        if(colorChangeIntent)
            {
                txt=$(this).children(":first");
                txt.css('color',colorChangeIntent);
                txt.change();
                
            }
        
            
    };
    resetColorIntent=function()
    {
    	colorChangeIntent='';
    };
    setColorIntent=function()
    {
    	colorChangeIntent=$('#textColor').val();

    };
$(function(){
    $(".dataTable").dataTable();
})
$(function(){
    $('body').on('ready','textarea',function()
    {
        $(this).html($.trim($(this).html()));
    })
});
$(function(){
    $("body").on("click",".confirm",function(th)
    { 
        ar=confirm("are you sure");
        if(!ar)
            th.preventDefault();
    });
});

$(function(){
    $("#textColor").spectrum({
            change  :function(color)
            {
                $("#textColor").val(color.toHexString());
            }
        });
});
$(function(){
    $("input").attr("autocomplete","off");
});
$(document).ready(function(){
    $("[rel=tooltip]").tooltip({ placement: 'top'});
});
$(window).load(function(){
    $(".popver").popover();
});
